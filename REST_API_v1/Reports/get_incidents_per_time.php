<?php

$SUBDOMAIN='pdt-dank';
$API_ACCESS_KEY = 'cw8xyMjRD7kqDr1GYx4q';
$since = '2014-04-07';
$until = '2014-04-08';
$URL = 'https://' . urlencode($SUBDOMAIN) . '.pagerduty.com/api/v1/reports/incidents_per_time?since=' . urlencode($since) . '&until=' . urlencode($until);
$session = curl_init();

curl_setopt($session, CURLOPT_URL, $URL);
curl_setopt($session, CURLOPT_HTTPHEADER, array(
    'Content-type: application/json',
    'Authorization: Token token=' . $API_ACCESS_KEY
));
$session = curl_exec($session);
?>
