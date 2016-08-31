<?php

$SUBDOMAIN='pdt-dank';
$API_ACCESS_KEY = 'cw8xyMjRD7kqDr1GYx4q';
$LOG_ENTRY_ID = 'PK5QCUC';
$URL = 'https://' . urlencode($SUBDOMAIN) . '.pagerduty.com/api/v1/log_entries/' . urlencode($LOG_ENTRY_ID) . '?include[]=channel';
$session = curl_init();

curl_setopt($session, CURLOPT_URL, $URL);
curl_setopt($session, CURLOPT_HTTPHEADER, array(
    'Content-type: application/json',
    'Authorization: Token token=' . $API_ACCESS_KEY
));
$session = curl_exec($session);
?>
