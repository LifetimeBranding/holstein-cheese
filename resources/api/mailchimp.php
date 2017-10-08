
<?php

require_once('../../resources/config.php');

$json = json_encode(
  [
    'email_address' => $_POST['emailAddress'],
    'status' => 'subscribed',
    'merge_fields' => [
      'FNAME' => $_POST['firstName'],
      'LNAME' => $_POST['lastName']
    ]
  ]);

  $ch = curl_init('https://us15.api.mailchimp.com/3.0/lists/c5c653fed4/members/');
  curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json',
                                              'Authorization: Basic ' . $config['api_keys']['mailchimp']));
  curl_setopt($ch, CURLOPT_POST, true);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_TIMEOUT, 10);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $json);

  $result = curl_exec($ch);
  $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
  curl_close($ch);

  switch($httpCode) {
    case 200: 
      echo('You\'ve successfully been added to our newsletter list!');
    break;
    default:
      echo('An error occured and we couldn\'t add you to our newsletter list. Send us an e-mail at info@holsteincheese.com to be added. Error Code: ' . $httpCode);
    break;
  }

?>
