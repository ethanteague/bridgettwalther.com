<?php

/**
 * @file
 * Process theme data.
 */

/**
 * Preprocess variables for the html template.
 */
function ssadaptivemom_html_head_alter(&$head_elements) {
  $head_elements['robots'] = array(
    '#type' => 'html_tag',
    '#tag' => 'meta',
    '#attributes' => array('property' => 'robots', 'content' => 'index, follow'),
  );

  if (drupal_is_front_page()):
    $head_elements['descriptions'] = array(
      '#type' => 'html_tag',
      '#tag' => 'meta',
      '#attributes' => array('property' => 'description', 'content' => 'View your Horoscope, written by Astrologer Bridgett Walther, including a daily horoscope, love horoscope, career horoscope and birthday horoscope forecasts.'),
    );

  $head_elements['keywords'] = array(
    '#type' => 'html_tag',
    '#tag' => 'meta',
    '#attributes' => array('property' => 'keywords', 'content' => 'horoscopes, horoscope, astrology, Bridgett Walther, daily horoscope, weekly love horoscope, birthday horoscope, palmistry, astrologer Bridgett Walther, horoscope Signs, AKA astro abbey, capricorn, aquarius, pisces, aries, taurus, gemini, cancer, leo, virgo, libra, scorpio, sagittarius'),
  );
  endif;

  if (drupal_get_path_alias() == 'bridgett-walther'):
    $head_elements['descriptions'] = array(
      '#type' => 'html_tag',
      '#tag' => 'meta',
      '#attributes' => array('property' => 'description', 'content' => 'View your daily horoscope, love horoscope, career horoscope and birthday horoscope forecasts originally written horoscopes by Astrologer Bridgett Walther.'),
    );

  $head_elements['keywords'] = array(
    '#type' => 'html_tag',
    '#tag' => 'meta',
    '#attributes' => array('property' => 'keywords', 'content' => 'Astrologer, Bridgett Walther Horoscopes, horoscope, astrology, Bridgett Walther, daily horoscope, weekly love horoscope, birthday horoscope, palmistry, astrologer Bridgett Walther, horoscope Signs, AKA astro abbey, capricorn, aquarius, pisces, aries, taurus, gemini, cancer, leo, virgo, libra, scorpio, sagittarius'),
  );
  endif;

  if (drupal_get_path_alias() == 'birthday-horoscope'):
    $head_elements['descriptions'] = array(
      '#type' => 'html_tag',
      '#tag' => 'meta',
      '#attributes' => array('property' => 'description', 'content' => 'View your Birthday Horoscope from Bridgett Walther, including daily birthday horoscopes, weekly birthday horoscopes, monthly birthday horoscopes, and much more.'),
    );

  $head_elements['keywords'] = array(
    '#type' => 'html_tag',
    '#tag' => 'meta',
    '#attributes' => array('property' => 'keywords', 'content' => 'Birthday Horoscope, capricorn, aquarius, pisces, aries, taurus, gemini, cancer, leo, virgo, libra, scorpio, sagittarius, daily birthday horoscopes, weekly birthday horoscopes, monthly birthday horoscopes'),
  );
  endif;

  if (drupal_get_path_alias() == 'daily-horoscopes'):
    $head_elements['descriptions'] = array(
      '#type' => 'html_tag',
      '#tag' => 'meta',
      '#attributes' => array('property' => 'description', 'content' => 'View your Daily Horoscope from Astrologer Bridgett Walther. My daily horoscope includes, love, compatibility, money, career, and much more.'),
    );

  $head_elements['keywords'] = array(
    '#type' => 'html_tag',
    '#tag' => 'meta',
    '#attributes' => array('property' => 'keywords', 'content' => 'horoscopes, daily horoscopes, daily horoscope, horoscopes for today, astrology, 2015 horoscopes, capricorn, aquarius, pisces, aries, taurus, gemini, cancer, leo, virgo, libra, scorpio, sagittarius'),
  );
  endif;

  if (drupal_get_path_alias() == 'ask-bridgett'):
    $head_elements['descriptions'] = array(
      '#type' => 'html_tag',
      '#tag' => 'meta',
      '#attributes' => array('property' => 'description', 'content' => 'Ask a horoscope question to Astrologer Bridgett Walther. Get answers about your horoscope, including, zodiac signs, love, compatibility, career, money, birthday...'),
    );

  $head_elements['keywords'] = array(
    '#type' => 'html_tag',
    '#tag' => 'meta',
    '#attributes' => array('property' => 'keywords', 'content' => 'horoscope, Astrologer, Bridgett Walther, horoscopes, zodiac signs, love horoscope, compatibility horoscope, career horoscope, money horoscope, birthday horoscope, capricorn, aquarius, pisces, aries, taurus, gemini, cancer, leo, virgo, libra, scorpio, sagittarius'),
  );
  endif;

  if (drupal_get_path_alias() == 'palmistry'):
    $head_elements['descriptions'] = array(
      '#type' => 'html_tag',
      '#tag' => 'meta',
      '#attributes' => array('property' => 'description', 'content' => 'Get a Palm Reading by Astrologer Bridgett Walther. Ask anything about zodiac signs, horoscopes, love, compatibility, career, money, birthday, numerology and much more'),
    );

  $head_elements['keywords'] = array(
    '#type' => 'html_tag',
    '#tag' => 'meta',
    '#attributes' => array('property' => 'keywords', 'content' => 'Palmistry, Bridgett Walther Horoscopes, Palm Reading, Astrologer Bridgett Walther, zodiac signs, horoscopes, love horoscope, compatibility horoscope, career horoscope, money horoscope, birthday horoscope, numerology'),
  );
  endif;

  if (drupal_get_path_alias() == 'astrology-books'):
    $head_elements['descriptions'] = array(
      '#type' => 'html_tag',
      '#tag' => 'meta',
      '#attributes' => array('property' => 'description', 'content' => 'Read HARNESS ASTROLOGY\'S BAD BOY, or CONQUER THE COSMOS by Astrologer Bridgett Walther, offering professional Astrology prediction readings about your Horoscope'),
    );

  $head_elements['keywords'] = array(
    '#type' => 'html_tag',
    '#tag' => 'meta',
    '#attributes' => array('property' => 'keywords', 'content' => 'astrology book, HARNESS ASTROLOGY\'S BAD BOY, CONQUER THE COSMOS, Astrologer, Bridgett Walther, Astrology, Horoscope, capricorn, aquarius, pisces, aries, taurus, gemini, cancer, leo, virgo, libra, scorpio, sagittarius'),
  );
  endif;

  if (drupal_get_path_alias() == 'pisces-horoscope'):
    $head_elements['descriptions'] = array(
      '#type' => 'html_tag',
      '#tag' => 'meta',
      '#attributes' => array('property' => 'description', 'content' => 'Get your Pisces horoscope by Bridgett Walther, including your, love horoscope, daily horoscope, weekly horoscopes, career horoscopes, with more Astrology.'),
    );

  $head_elements['keywords'] = array(
    '#type' => 'html_tag',
    '#tag' => 'meta',
    '#attributes' => array('property' => 'keywords', 'content' => 'Pisces, Pisces Horoscope, Bridgett Walther, love horoscope, daily horoscope, weekly horoscopes, career horoscopes, Astrology, Money Horoscope, Compatibility horoscope'),
  );
  endif;

  if (drupal_get_path_alias() == 'aquarius-horoscope'):
    $head_elements['descriptions'] = array(
      '#type' => 'html_tag',
      '#tag' => 'meta',
      '#attributes' => array('property' => 'description', 'content' => 'Read HARNESS ASTROLOGY\'S BAD BOY, or CONQUER THE COSMOS by Astrologer Bridgett Walther, offering professional Astrology prediction readings about your Horoscope'),
    );

  $head_elements['keywords'] = array(
    '#type' => 'html_tag',
    '#tag' => 'meta',
    '#attributes' => array('property' => 'keywords', 'content' => 'astrology book, HARNESS ASTROLOGY\'S BAD BOY, CONQUER THE COSMOS, Astrologer, Bridgett Walther, Astrology, Horoscope, capricorn, aquarius, pisces, aries, taurus, gemini, cancer, leo, virgo, libra, scorpio, sagittarius'),
  );
  endif;

  if (drupal_get_path_alias() == 'capricorn-horoscope'):
    $head_elements['descriptions'] = array(
      '#type' => 'html_tag',
      '#tag' => 'meta',
      '#attributes' => array('property' => 'description', 'content' => 'Get your Capricorn horoscope by Bridgett Walther, including your, love horoscope, daily horoscope, weekly horoscopes, career horoscopes, with more Astrology.'),
    );

  $head_elements['keywords'] = array(
    '#type' => 'html_tag',
    '#tag' => 'meta',
    '#attributes' => array('property' => 'keywords', 'content' => 'Capricorn, Capricorn Horoscope, Bridgett Walther, love horoscope, daily horoscope, weekly horoscopes, career horoscopes, Astrology, Money Horoscope, Compatibility horoscope'),
  );
  endif;

  if (drupal_get_path_alias() == 'sagittarius-horoscope'):
    $head_elements['descriptions'] = array(
      '#type' => 'html_tag',
      '#tag' => 'meta',
      '#attributes' => array('property' => 'description', 'content' => 'Sagittarius, Sagittarius Horoscope, Bridgett Walther, love horoscope, daily horoscope, weekly horoscopes, career horoscopes, Astrology, Money Horoscope, Compatibility horoscope'),
    );

  $head_elements['keywords'] = array(
    '#type' => 'html_tag',
    '#tag' => 'meta',
    '#attributes' => array('property' => 'keywords', 'content' => 'Sagittarius, Sagittarius Horoscope, Bridgett Walther, love horoscope, daily horoscope, weekly horoscopes, career horoscopes, Astrology, Money Horoscope, Compatibility horoscope'),
  );
  endif;

  if (drupal_get_path_alias() == 'scorpio-horoscope'):
    $head_elements['descriptions'] = array(
      '#type' => 'html_tag',
      '#tag' => 'meta',
      '#attributes' => array('property' => 'description', 'content' => 'Get your Scorpio horoscope by Bridgett Walther, including your, love horoscope, daily horoscope, weekly horoscopes, career horoscopes, with more Astrology.'),
    );

  $head_elements['keywords'] = array(
    '#type' => 'html_tag',
    '#tag' => 'meta',
    '#attributes' => array('property' => 'keywords', 'content' => 'Scorpio, Scorpio Horoscope, Bridgett Walther, love horoscope, daily horoscope, weekly horoscopes, career horoscopes, Astrology, Money Horoscope, Compatibility horoscope'),
  );
  endif;

  if (drupal_get_path_alias() == 'libra-horoscope'):
    $head_elements['descriptions'] = array(
      '#type' => 'html_tag',
      '#tag' => 'meta',
      '#attributes' => array('property' => 'description', 'content' => 'Libra, Libra Horoscope, Bridgett Walther, love horoscope, daily horoscope, weekly horoscopes, career horoscopes, Astrology, Money Horoscope, Compatibility horoscope'),
    );

  $head_elements['keywords'] = array(
    '#type' => 'html_tag',
    '#tag' => 'meta',
    '#attributes' => array('property' => 'keywords', 'content' => 'astrology book, HARNESS ASTROLOGY\'S BAD BOY, CONQUER THE COSMOS, Astrologer, Bridgett Walther, Astrology, Horoscope, capricorn, aquarius, pisces, aries, taurus, gemini, cancer, leo, virgo, libra, scorpio, sagittarius'),
  );
  endif;

  if (drupal_get_path_alias() == 'virgo-horoscope'):
    $head_elements['descriptions'] = array(
      '#type' => 'html_tag',
      '#tag' => 'meta',
      '#attributes' => array('property' => 'description', 'content' => 'Get your Virgo horoscope by Bridgett Walther, including your, love horoscope, daily horoscope, weekly horoscopes, career horoscopes, with more Astrology.'),
    );

  $head_elements['keywords'] = array(
    '#type' => 'html_tag',
    '#tag' => 'meta',
    '#attributes' => array('property' => 'keywords', 'content' => 'Virgo, Virgo Horoscope, Bridgett Walther, love horoscope, daily horoscope, weekly horoscopes, career horoscopes, Astrology, Money Horoscope, Compatibility horoscope'),
  );
  endif;

  if (drupal_get_path_alias() == 'leo-horoscope'):
    $head_elements['descriptions'] = array(
      '#type' => 'html_tag',
      '#tag' => 'meta',
      '#attributes' => array('property' => 'description', 'content' => 'Get your Leo horoscope by Bridgett Walther, including your, love horoscope, daily horoscope, weekly horoscopes, career horoscopes, with more Astrology.'),
    );

  $head_elements['keywords'] = array(
    '#type' => 'html_tag',
    '#tag' => 'meta',
    '#attributes' => array('property' => 'keywords', 'content' => 'Leo, Leo Horoscope, Bridgett Walther, love horoscope, daily horoscope, weekly horoscopes, career horoscopes, Astrology, Money Horoscope, Compatibility horoscope'),
  );
  endif;

  if (drupal_get_path_alias() == 'cancer-horoscope'):
    $head_elements['descriptions'] = array(
      '#type' => 'html_tag',
      '#tag' => 'meta',
      '#attributes' => array('property' => 'description', 'content' => 'Get your Cancer horoscope by Bridgett Walther, including your, love horoscope, daily horoscope, weekly horoscopes, career horoscopes, with more Astrology.'),
    );

  $head_elements['keywords'] = array(
    '#type' => 'html_tag',
    '#tag' => 'meta',
    '#attributes' => array('property' => 'keywords', 'content' => 'Cancer, Cancer Horoscope, Bridgett Walther, love horoscope, daily horoscope, weekly horoscopes, career horoscopes, Astrology, Money Horoscope, Compatibility horoscope'),
  );
  endif;

  if (drupal_get_path_alias() == 'gemini-horoscope'):
    $head_elements['descriptions'] = array(
      '#type' => 'html_tag',
      '#tag' => 'meta',
      '#attributes' => array('property' => 'description', 'content' => 'Get your Gemini horoscope by Bridgett Walther, including your, love horoscope, daily horoscope, weekly horoscopes, career horoscopes, with more Astrology.'),
    );

  $head_elements['keywords'] = array(
    '#type' => 'html_tag',
    '#tag' => 'meta',
    '#attributes' => array('property' => 'keywords', 'content' => 'Gemini, Gemini Horoscope, Bridgett Walther, love horoscope, daily horoscope, weekly horoscopes, career horoscopes, Astrology, Money Horoscope, Compatibility horoscope'),
  );
  endif;

  if (drupal_get_path_alias() == 'taurus-horoscope'):
    $head_elements['descriptions'] = array(
      '#type' => 'html_tag',
      '#tag' => 'meta',
      '#attributes' => array('property' => 'description', 'content' => 'Get your Taurus horoscope by Bridgett Walther, including your, love horoscope, daily horoscope, weekly horoscopes, career horoscopes, with more Astrology.'),
    );

  $head_elements['keywords'] = array(
    '#type' => 'html_tag',
    '#tag' => 'meta',
    '#attributes' => array('property' => 'keywords', 'content' => 'Taurus, Taurus Horoscope, Bridgett Walther, love horoscope, daily horoscope, weekly horoscopes, career horoscopes, Astrology, Money Horoscope, Compatibility horoscope'),
  );
  endif;

  if (drupal_get_path_alias() == 'aries-horoscope'):
    $head_elements['descriptions'] = array(
      '#type' => 'html_tag',
      '#tag' => 'meta',
      '#attributes' => array('property' => 'description', 'content' => 'Get your Aquarius horoscope by Bridgett Walther, including your, love horoscope, daily horoscope, weekly horoscopes, career horoscopes, with more Astrology.'),
    );

  $head_elements['keywords'] = array(
    '#type' => 'html_tag',
    '#tag' => 'meta',
    '#attributes' => array('property' => 'keywords', 'content' => 'Aries, Aries Horoscope, Bridgett Walther, love horoscope, daily horoscope, weekly horoscopes, career horoscopes, Astrology, Money Horoscope, Compatibility horoscope'),
  );
  endif;
}

function adaptivemom_preprocess_html(&$variables) {
  if (drupal_is_front_page()):
    $variables['head_title'] = 'Horoscope - Astrology - Bridgett Walther';
  endif;

  if (drupal_get_path_alias() == 'bridgett-walther'):
    $variables['head_title'] = 'Astrologer - Bridgett Walther Horoscopes';
  endif;

  if (drupal_get_path_alias() == 'birthday-horoscope'):
    $variables['head_title'] = 'Birthday Horoscope - Bridgett Walther Horoscopes';
  endif;

  if (drupal_get_path_alias() == 'daily-horoscopes'):
    $variables['head_title'] = 'Daily Horoscope - Bridgett Walther Horoscopes';
  endif;

  if (drupal_get_path_alias() == 'ask-bridgett'):
    $variables['head_title'] = 'Ask a Horoscope question - Bridgett Walther';
  endif;

  if (drupal_get_path_alias() == 'palmistry'):
    $variables['head_title'] = 'Palmistry - Bridgett Walther Horoscopes';
  endif;

  if (drupal_get_path_alias() == 'astrology-books'):
    $variables['head_title'] = 'Horoscope Books - Bridgett Walther';
  endif;





  if (drupal_get_path_alias() == 'aquarius-horoscope'):
    $variables['head_title'] = 'Aquarius - Aquarius Horoscope | Bridgett Walther';
  endif;

  if (drupal_get_path_alias() == 'aries-horoscope'):
    $variables['head_title'] = 'Aries - Aries Horoscope | Bridgett Walther';
  endif;

  if (drupal_get_path_alias() == 'cancer-horoscope'):
    $variables['head_title'] = 'Cancer - Cancer Horoscope | Bridgett Walther';
  endif;

  if (drupal_get_path_alias() == 'capricorn-horoscope'):
    $variables['head_title'] = 'Capricorn - Capricorn Horoscope | Bridgett Walther';
  endif;

    if (drupal_get_path_alias() == 'gemini-horoscope'):
    $variables['head_title'] = 'Gemini - Gemini Horoscope | Bridgett Walther';
  endif;

  if (drupal_get_path_alias() == 'leo-horoscope'):
    $variables['head_title'] = 'Leo - Leo Horoscope | Bridgett Walther';
  endif;

  if (drupal_get_path_alias() == 'libra-horoscope'):
    $variables['head_title'] = 'Libra - Libra Horoscope | Bridgett Walther';
  endif;

  if (drupal_get_path_alias() == 'pisces-horoscope'):
    $variables['head_title'] = 'Pisces - Pisces Horoscope | Bridgett Walther';
  endif;

    if (drupal_get_path_alias() == 'sagittarius-horoscope'):
    $variables['head_title'] = 'Sagittarius - Sagittarius Horoscope | Bridgett Walther';
  endif;

  if (drupal_get_path_alias() == 'scorpio-horoscope'):
    $variables['head_title'] = 'Scorpio - Scorpio Horoscope | Bridgett Walther';
  endif;

  if (drupal_get_path_alias() == 'taurus-horoscope'):
    $variables['head_title'] = 'Taurus - Taurus Horoscope | Bridgett Walther';
  endif;

  if (drupal_get_path_alias() == 'virgo-horoscope'):
    $variables['head_title'] = 'Virgo - Virgo Horoscope | Bridgett Walther';
  endif;

}