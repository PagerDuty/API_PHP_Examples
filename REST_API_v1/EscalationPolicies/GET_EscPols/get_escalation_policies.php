<?php

$SUBDOMAIN='pdt-dank';
$URL = 'https://' . urlencode($SUBDOMAIN) . '.pagerduty.com/api/v1/escalation_policies';
$API_ACCESS_KEY = 'cw8xyMjRD7kqDr1GYx4q';
$session = curl_init();

curl_setopt($session, CURLOPT_URL, $URL);
curl_setopt($session, CURLOPT_HTTPHEADER, array(
    'Content-type: application/json',
    'Authorization: Token token=' . $API_ACCESS_KEY
));
$session = curl_exec($session);
?>
