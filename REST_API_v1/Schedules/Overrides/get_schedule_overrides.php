<?php

$SUBDOMAIN='pdt-dank';
$API_ACCESS_KEY = 'cw8xyMjRD7kqDr1GYx4q';
$REQUESTER_ID = 'PJR28TQ';
$SCHEDULE_ID = 'P6QNT52';
$URL = 'https://' . urlencode($SUBDOMAIN) . '.pagerduty.com/api/v1/schedules/' . urlencode($SCHEDULE_ID) . '/overrides?since=2014-10-19&until=2014-10-28';
$session = curl_init();

curl_setopt($session, CURLOPT_URL, $URL);
curl_setopt($session, CURLOPT_HTTPHEADER, array(
    'Content-type: application/json',
    'Authorization: Token token=' . $API_ACCESS_KEY
));
$session = curl_exec($session);
?>
