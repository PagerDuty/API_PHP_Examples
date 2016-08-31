<?php

$API_ACCESS_KEY = 'VxRM54vaVCV_vYVbAqUw';

$ADDON_ID = 'PN1U3B9';
$PAYLOAD = array(
  'addon' => array(
    'type' => 'full_page_addon',
    'name' => 'Internal Status',
    'src' => 'https://intranet.example.com/status'
  )
);
$JSON = json_encode($PAYLOAD);

$URL = 'https://api.pagerduty.com/addons/' . urlencode($ADDON_ID);
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
