<?php

$SUBDOMAIN='pdt-dank';
$since = '2014-04-07';
$until = '2014-04-08';
$filter = 'phone';
$URL = 'https://' . urlencode($SUBDOMAIN) . '.pagerduty.com/api/v1/alerts?since=' . urlencode($since) . '&until=' . urlencode($until) . '&filter[type]=' . urlencode($filter);
$API_ACCESS_KEY = 'Zcr6taSbjRPsyMnsxzz1';
$session = curl_init();

curl_setopt($session, CURLOPT_URL, $URL);
curl_setopt($session, CURLOPT_HTTPHEADER, array(
    'Content-type: application/json',
    'Authorization: Token token=' . $API_ACCESS_KEY
));
$session = curl_exec($session);
?>
