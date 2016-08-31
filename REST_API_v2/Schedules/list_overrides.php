<?php

$API_ACCESS_KEY = 'VxRM54vaVCV_vYVbAqUw';

$SCHEDULE_ID = 'PO5PFOY';
$SINCE = '2016-08-01';
$UNTIL = '2017-08-01';

$URL = 'https://api.pagerduty.com/schedules/' . urlencode($SCHEDULE_ID) . '/overrides?since=' . urlencode($SINCE) . '&until=' . urlencode($UNTIL);
$session = curl_init();

curl_setopt($session, CURLOPT_URL, $URL);
curl_setopt($session, CURLOPT_HTTPHEADER, array(
    'Content-type: application/json',
    'Authorization: Token token=' . $API_ACCESS_KEY
));
$output = curl_exec($session);
?>
