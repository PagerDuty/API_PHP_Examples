<?php

$API_ACCESS_KEY = 'VxRM54vaVCV_vYVbAqUw';

$USER_ID = 'P9GJP78';
$PAYLOAD = array(
  'contact_method' => array(
    'type' => 'email_contact_method',
    'address' => 'lucas+exampleemail@pagerduty.com'
  )
);
$JSON = json_encode($PAYLOAD);

$URL = 'https://api.pagerduty.com/users/' . urlencode($USER_ID) . '/contact_methods';
$session = curl_init();

curl_setopt($session, CURLOPT_URL, $URL);
curl_setopt($session, CURLOPT_HTTPHEADER, array(
    'Content-type: application/json',
    'Authorization: Token token=' . $API_ACCESS_KEY
));
curl_setopt($session, CURLOPT_POSTFIELDS, $JSON);
$output = curl_exec($session);
?>
