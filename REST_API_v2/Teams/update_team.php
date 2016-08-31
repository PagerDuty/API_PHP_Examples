<?php

$API_ACCESS_KEY = 'VxRM54vaVCV_vYVbAqUw';

$TEAM_ID = 'PBJRMJP';
$PAYLOAD = array(
  'team' => array(
    'type' => 'team',
    'name' => 'Operations',
    'description' => 'The Operations Team'
  )
);
$JSON = json_encode($PAYLOAD);

$URL = 'https://api.pagerduty.com/teams/' . urlencode($TEAM_ID);
$session = curl_init();

curl_setopt($session, CURLOPT_URL, $URL);
curl_setopt($session, CURLOPT_HTTPHEADER, array(
    'Content-type: application/json',
    'Authorization: Token token=' . $API_ACCESS_KEY
));
curl_setopt($session, CURLOPT_POSTFIELDS, $JSON);
curl_setopt($session, CURLOPT_CUSTOMREQUEST, "PUT");
$output = curl_exec($session);
?>
