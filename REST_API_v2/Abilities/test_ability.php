<?php

$API_ACCESS_KEY = 'VxRM54vaVCV_vYVbAqUw';
$ABILITY_ID = 'sso';

$URL = 'https://api.pagerduty.com/abilities/' . urlencode($ABILITY_ID);
$session = curl_init();

curl_setopt($session, CURLOPT_URL, $URL);
curl_setopt($session, CURLOPT_HTTPHEADER, array(
    'Content-type: application/json',
    'Authorization: Token token=' . $API_ACCESS_KEY
));
$output = curl_exec($session);
$status = curl_getinfo($session, CURLINFO_HTTP_CODE);
print($status);
?>
