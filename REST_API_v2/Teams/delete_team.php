<?php

$API_ACCESS_KEY = 'VxRM54vaVCV_vYVbAqUw';
$TEAM_ID = 'P08F10I';

$URL = 'https://api.pagerduty.com/teams/' . urlencode($TEAM_ID);
$session = curl_init();

curl_setopt($session, CURLOPT_URL, $URL);
curl_setopt($session, CURLOPT_HTTPHEADER, array(
    'Content-type: application/json',
    'Authorization: Token token=' . $API_ACCESS_KEY
));
curl_setopt($session, CURLOPT_CUSTOMREQUEST, "DELETE");
$output = curl_exec($session);
$status = curl_getinfo($session, CURLINFO_HTTP_CODE);
print($status);
?>
