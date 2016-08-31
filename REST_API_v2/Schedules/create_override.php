<?php

$API_ACCESS_KEY = 'VxRM54vaVCV_vYVbAqUw';

$SCHEDULE_ID = 'PO5PFOY';
$PAYLOAD = array(
  'override' => array(
    'start' => '2016-09-01',
    'end' => '2017-09-01',
    'user' => array(
      'id' => 'PUL3V8I',
      'type' => 'user_reference'
    )
  )
);
$JSON = json_encode($PAYLOAD);

$URL = 'https://api.pagerduty.com/schedules/' . urlencode($SCHEDULE_ID) . '/overrides';
$session = curl_init();

curl_setopt($session, CURLOPT_URL, $URL);
curl_setopt($session, CURLOPT_HTTPHEADER, array(
    'Content-type: application/json',
    'Authorization: Token token=' . $API_ACCESS_KEY
));
curl_setopt($session, CURLOPT_POSTFIELDS, $JSON);
$output = curl_exec($session);
?>
