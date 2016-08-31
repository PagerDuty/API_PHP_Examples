<?php

$API_ACCESS_KEY = 'VxRM54vaVCV_vYVbAqUw';

$PAYLOAD = array(
  'team' => array(
    'type' => 'team',
    'name' => 'Operations',
    'description' => 'The Operations Team'
  )
);
$JSON = json_encode($PAYLOAD);

$URL = 'https://api.pagerduty.com/teams';
$session = curl_init();

curl_setopt($session, CURLOPT_URL, $URL);
curl_setopt($session, CURLOPT_HTTPHEADER, array(
    'Content-type: application/json',
    'Authorization: Token token=' . $API_ACCESS_KEY
));
curl_setopt($session, CURLOPT_POSTFIELDS, $JSON);
$output = curl_exec($session);
?>
