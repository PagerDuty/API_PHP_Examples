<?php

$API_ACCESS_KEY = 'VxRM54vaVCV_vYVbAqUw';

$PAYLOAD = array(
  'addon' => array(
    'type' => 'full_page_addon',
    'name' => 'Internal Status Page',
    'src' => 'https://intranet.example.com/status'
  )
);
$JSON = json_encode($PAYLOAD);

$URL = 'https://api.pagerduty.com/addons';
$session = curl_init();

curl_setopt($session, CURLOPT_URL, $URL);
curl_setopt($session, CURLOPT_HTTPHEADER, array(
    'Content-type: application/json',
    'Authorization: Token token=' . $API_ACCESS_KEY
));
curl_setopt($session, CURLOPT_POSTFIELDS, $JSON);
$output = curl_exec($session);
?>
