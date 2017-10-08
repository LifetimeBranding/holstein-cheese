<?php

/*
    HOLSTEIN CHEESE WEBSITE
    BY LIFETIMEBRANDING
    (c) 2017
*/
require_once('keys.php');
$config = array (
  "api_keys" => array (
    "googlemaps" => $keys['googlemaps'],
    "mailchimp" => $keys['mailchimp']
  ),
  "urls" => array(
    "baseurl" => "http://www.holsteincheese.com"
  ),
  "paths" => array (
    "resources" => "/resources",
    "images" => 'images',
    "stylesheets" => 'public/css',
    "scripts" => 'public/js',
  )

);

defined("LIBRARY_PATH")
or define("LIBRARY_PATH", realpath(dirname(__FILE__) . '/library'));
 
defined("TEMPLATES_PATH")
or define("TEMPLATES_PATH", realpath(dirname(__FILE__) . '/templates'));

?>