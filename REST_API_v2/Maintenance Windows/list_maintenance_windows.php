<?php

$API_ACCESS_KEY = 'VxRM54vaVCV_vYVbAqUw';

$URL = 'https://api.pagerduty.com/maintenance_windows';
$session = curl_init();

curl_setopt($session, CURLOPT_URL, $URL);
curl_setopt($session, CURLOPT_HTTPHEADER, array(
    'Content-type: application/json',
    'Authorization: Token token=' . $API_ACCESS_KEY
));
$output = curl_exec($session);
?>
