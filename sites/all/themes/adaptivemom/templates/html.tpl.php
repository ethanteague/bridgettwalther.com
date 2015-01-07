<?php
/**
 * @file
 * Adaptivetheme implementation to display the basic html structure of a single
 * Drupal page.
 *
 * Adaptivetheme Variables:
 * - $html_attributes: structure attributes, includes the lang and dir attributes
 *   by default, use $vars['html_attributes_array'] to add attributes in preprcess
 * - $polyfills: prints IE conditional polyfill scripts enabled via theme
 *   settings.
 * - $skip_link_target: prints an ID for the skip navigation target, set in
 *   theme settings.
 * - $is_mobile: Mixed, requires the Mobile Detect or Browscap module to return
 *   TRUE for mobile.  Note that tablets are also considered mobile devices.
 *   Returns NULL if the feature could not be detected.
 * - $is_tablet: Mixed, requires the Mobile Detect to return TRUE for tablets.
 *   Returns NULL if the feature could not be detected.
 *
 * Available Variables:
 * - $css: An array of CSS files for the current page.
 * - $language: (object) The language the site is being displayed in.
 *   $language->language contains its textual representation.
 *   $language->dir contains the language direction. It will either be 'ltr' or 'rtl'.
 * - $rdf_namespaces: All the RDF namespace prefixes used in the HTML document.
 * - $grddl_profile: A GRDDL profile allowing agents to extract the RDF data.
 * - $head_title: A modified version of the page title, for use in the TITLE
 *   tag.
 * - $head_title_array: (array) An associative array containing the string parts
 *   that were used to generate the $head_title variable, already prepared to be
 *   output as TITLE tag. The key/value pairs may contain one or more of the
 *   following, depending on conditions:
 *   - title: The title of the current page, if any.
 *   - name: The name of the site.
 *   - slogan: The slogan of the site, if any, and if there is no title.
 * - $head: Markup for the HEAD section (including meta tags, keyword tags, and
 *   so on).
 * - $styles: Style tags necessary to import all CSS files for the page.
 * - $scripts: Script tags necessary to load the JavaScript files and settings
 *   for the page.
 * - $page_top: Initial markup from any modules that have altered the
 *   page. This variable should always be output first, before all other dynamic
 *   content.
 * - $page: The rendered page content.
 * - $page_bottom: Final closing markup from any modules that have altered the
 *   page. This variable should always be output last, after all other dynamic
 *   content.
 * - $classes String of classes that can be used to style contextually through
 *   CSS.
 *
 * Notes:
 * - Skip link "nocontent" class is for exluding the element from inclusion in
 *   a Google Custom Search index - http://www.google.com/cse
 *
 * @see template_preprocess()
 * @see template_preprocess_html()
 * @see template_process()
 * @see adaptivetheme_preprocess_html()
 * @see adaptivetheme_process_html()
 */

/*
  $ch = curl_init();
  $clientId = 'AfSSBhB2uFmZI7ZmQo2WXUI6DDKYNjDUFNBZufzEEExBm_UTRyrHAO91mq0V';
  $secret = 'EPY2eBAhYYMbYwwZ3yZgrOuWxSVrIi-R3x0QdCRYKb6SFPHYsSj3Cpyr4omX';



  curl_setopt($ch, CURLOPT_URL, "https://api.paypal.com/v1/oauth2/token");
  curl_setopt($ch, CURLOPT_HEADER, false);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  curl_setopt($ch, CURLOPT_POST, true);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_USERPWD, $clientId.":".$secret);
  curl_setopt($ch, CURLOPT_POSTFIELDS, "grant_type=client_credentials");

  $result = curl_exec($ch);
//dpm($result);
if(empty($result))die("Error: No response.");
else
{
$json = json_decode($result);
print_r($json->access_token);
}



curl_close($ch);
*/
//$apiContext = new ApiContext(new OAuthTokenCredential(
//		$clientId, $secret));

//$payments = Payment::all(array('count' => 10, 'start_index' => 0), $apiContext);
//dpm($payments);
/**
   function make_post_call($url, $postdata) {
   global $token;
   $curl = curl_init($url);
   curl_setopt($curl, CURLOPT_POST, true);
   curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
   curl_setopt($curl, CURLOPT_HEADER, false);
   curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
   curl_setopt($curl, CURLOPT_HTTPHEADER, array(
   'Authorization: Bearer '.$token,
   'Accept: application/json',
   'Content-Type: application/json'
   ));

   curl_setopt($curl, CURLOPT_POSTFIELDS, $postdata);
   #curl_setopt($curl, CURLOPT_VERBOSE, TRUE);
   $response = curl_exec( $curl );
   if (empty($response)) {
   // some kind of an error happened
   die(curl_error($curl));
   curl_close($curl); // close cURL handler
   } else {
   $info = curl_getinfo($curl);
   echo "Time took: " . $info['total_time']*1000 . "ms\n";
   curl_close($curl); // close cURL handler
   if($info['http_code'] != 200 && $info['http_code'] != 201 ) {
   echo "Received error: " . $info['http_code']. "\n";
   echo "Raw response:".$response."\n";
   die();
   }
   }
   // Convert the result from JSON format to a PHP array
   $jsonResponse = json_decode($response, TRUE);
   return $jsonResponse;
   }


   function make_get_call($url) {
   global $token;
   $curl = curl_init($url);
   curl_setopt($curl, CURLOPT_POST, false);
   curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
   curl_setopt($curl, CURLOPT_HEADER, false);
   curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
   curl_setopt($curl, CURLOPT_HTTPHEADER, array(
   'Authorization: Bearer '.$token,
   'Accept: application/json',
   'Content-Type: application/json'
   ));

   #curl_setopt($curl, CURLOPT_VERBOSE, TRUE);
   $response = curl_exec( $curl );
   if (empty($response)) {
   // some kind of an error happened
   die(curl_error($curl));
   curl_close($curl); // close cURL handler
   } else {
   $info = curl_getinfo($curl);
   echo "Time took: " . $info['total_time']*1000 . "ms\n";
   curl_close($curl); // close cURL handler
   if($info['http_code'] != 200 && $info['http_code'] != 201 ) {
   echo "Received error: " . $info['http_code']. "\n";
   echo "Raw response:".$response."\n";
   die();
   }
   }
   }
*/

/**
  // Establish our dates.
  $date_m = strtotime('-30 day', time());
  $date_m = date('Y-m-d', $date_m);
  $date_y = strtotime('-365 day', time());
  $date_y = date('Y-m-d', $date_y);

  // Grab users who paid monthly rate in the last month who need to be tagged as such.
  $query_m_unpaid = new EntityFieldQuery();
  $query_m_unpaid->entityCondition('entity_type', 'user')
                 ->fieldCondition('field_last_payment_date', 'value', $date_m, '<=')
                 ->fieldCondition('field_last_payment_amt', 'value', array('3', '6'), 'BETWEEN')
                 ->fieldCondition('field_account_level', 'value', 'Premium', '=');
  $result_m_unpaid = $query_m_unpaid->execute();

  // Grab users who paid yearly rate in the last year who need to be tagged as such.
  $query_y_unpaid = new EntityFieldQuery();
  $query_y_unpaid->entityCondition('entity_type', 'user')
                 ->fieldCondition('field_last_payment_date', 'value', $date_y, '<=')
                 ->fieldCondition('field_last_payment_amt', 'value', array('39', '60'), 'BETWEEN')
                 ->fieldCondition('field_account_level', 'value', 'Premium', '=');
  $result_y_unpaid = $query_y_unpaid->execute();

  // Grab users who paid monthly rate in the last month who need to be tagged as such.
  $query_m = new EntityFieldQuery();
  $query_m->entityCondition('entity_type', 'user')
          ->fieldCondition('field_last_payment_date', 'value', $date_m, '>')
          ->fieldCondition('field_last_payment_amt', 'value', array('3', '6'), 'BETWEEN')
          ->fieldCondition('field_account_level', 'value', 'Not Premium', '=');
  $result_m = $query_m->execute();

  // Grab users who paid yearly rate in the last year who need to be tagged as such.
  $query_y = new EntityFieldQuery();
  $query_y->entityCondition('entity_type', 'user')
          ->fieldCondition('field_last_payment_date', 'value', $date_y, '>')
          ->fieldCondition('field_last_payment_amt', 'value', array('39', '60'), 'BETWEEN')
          ->fieldCondition('field_account_level', 'value', 'Not Premium', '=');
  $result_y = $query_y->execute();

  $unpaid_user_ids = array_merge(!empty($result_m_unpaid['user']) ?
                     array_keys($result_m_unpaid['user']) : array(),
                     !empty($result_y_unpaid['user']) ?
                     array_keys($result_y_unpaid['user']) : array());

  $paid_user_ids = array_merge(!empty($result_m['user']) ?
                   array_keys($result_m['user']) : array(),
                   !empty($result_y['user']) ?
                   array_keys($result_y['user']) : array());

dpm($unpaid_user_ids);
dpm($paid_user_ids);

*/



?><!DOCTYPE html>
<!--[if lt IE 7]><html class="lt-ie9 lt-ie8 lt-ie7"<?php print $html_attributes; ?>><![endif]-->
<!--[if IE 7]><html class="lt-ie9 lt-ie8"<?php print $html_attributes; ?>><![endif]-->
<!--[if IE 8]><html class="lt-ie9"<?php print $html_attributes; ?>><![endif]-->
<!--[if gt IE 8]><!--><html<?php print $html_attributes . $rdf_namespaces; ?>><!--<![endif]-->
<head>
<?php print $head; ?>
<title><?php print $head_title; ?></title>
<?php print $styles; ?>
<?php print $scripts; ?>
<?php print $polyfills; ?>
</head>
<body class="<?php print $classes; ?>"<?php print $attributes; ?>>
<div id="skip-link" class="nocontent">
  <a href="<?php print $skip_link_target; ?>" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
</div>
<?php print $page_top; ?>
<?php print $page; ?>
<?php print $page_bottom; ?>
</body>
</html>
