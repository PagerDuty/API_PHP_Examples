<?php

$API_ACCESS_KEY = 'VxRM54vaVCV_vYVbAqUw';
$EP_ID = 'PF0Q9QO';

$URL = 'https://api.pagerduty.com/escalation_policies/' . urlencode($EP_ID);
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
