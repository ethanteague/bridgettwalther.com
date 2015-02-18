<?php

/**
 * STEP 1: read POST data
 * Reading POSTed data directly from $_POST causes serialization issues with array data in the POST.
 * Instead, read raw POST data from the input stream.
 */
$raw_post_data = file_get_contents('php://input');
$raw_post_array = explode('&', $raw_post_data);
$my_post = array();
foreach ($raw_post_array as $keyval) {
  $keyval = explode('=', $keyval);
  if (count($keyval) == 2) {
    $my_post[$keyval[0]] = urldecode($keyval[1]);
  }
}

// Read the IPN message sent from PayPal and prepend cmd=_notify-validate.
$req = 'cmd=_notify-validate';
if (function_exists('get_magic_quotes_gpc')) {
  $get_magic_quotes_exists = TRUE;
}

foreach ($my_post as $key => $value) {
  if ($get_magic_quotes_exists == TRUE && get_magic_quotes_gpc() == 1) {
    $value = urlencode(stripslashes($value));
  }
  else {
    $value = urlencode($value);
  }
  $req .= "&$key=$value";
}

// STEP 2: POST IPN data back to PayPal to validate.
$ch = curl_init('https://www.paypal.com/cgi-bin/webscr');
curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $req);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
curl_setopt($ch, CURLOPT_FORBID_REUSE, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Connection: Close'));

if (!($res = curl_exec($ch))) {
  curl_close($ch);
  exit;
}
curl_close($ch);

// STEP 3: Inspect IPN validation result and act accordingly.
if (strcmp($res, "VERIFIED") == 0) {

  // Assign posted variables to local variables.
  if (!empty($_POST['custom'])) {
    $user = user_load($_POST['custom']);
  }
  else {
    $sub_id = $_POST['subscr_id'];
    $query = new EntityFieldQuery();
    $query->entityCondition('entity_type', 'user')
          ->fieldCondition('field_paypal_trans_id_field', 'value', $sub_id, '=');
    $result = $query->execute();
    foreach ($result['user'] as $user_id) {
      $uid_load = $user_id->uid;
    }
    $user = user_load($uid_load);
  }

  $custom['amount'] = $_POST['mc_gross'];
  $date = strtotime($_POST['payment_date']);
  $custom['date'] = date('Y-m-d', $date);
  $custom['subscr_id'] = $_POST['subscr_id'];

  $user->roles[5] = 'premium';
  $user->field_last_payment_date['und'][0]['value'] = $custom['date'];
  $user->field_last_payment_amt['und'][0]['value'] = $custom['amount'];
  if (empty($user->field_paypal_trans_id_field['und'][0]['value'])) {
    $user->field_paypal_trans_id_field['und'][0]['value'] = $custom['subscr_id'];
  }
  user_save($user);
}

elseif (strcmp($res, "INVALID") == 0) {
  // IPN invalid, log for manual investigation.
  echo 'The response from IPN was: <b>' . $res . '</b>';
}
