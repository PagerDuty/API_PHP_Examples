<?php

$API_ACCESS_KEY = 'VxRM54vaVCV_vYVbAqUw';

$SERVICE_ID = 'PKWTQ2A';
$INTEGRATION_ID = 'P9FC9QZ';
$PAYLOAD = array(
  'integration' => array(
    'type' => 'generic_events_api_inbound_integration',
    'name' => 'A new name'
  )
);
$JSON = json_encode($PAYLOAD);

$URL = 'https://api.pagerduty.com/services/' . urlencode($SERVICE_ID) . '/integrations/' . urlencode($INTEGRATION_ID);
$session = curl_init();

curl_setopt($session, CURLOPT_URL, $URL);
curl_setopt($session, CURLOPT_HTTPHEADER, array(
    'Content-type: application/json',
    'Authorization: Token token=' . $API_ACCESS_KEY
));
curl_setopt($session, CURLOPT_POSTFIELDS, $JSON);
curl_setopt($session, CURLOPT_CUSTOMREQUEST, "PUT");
$output = curl_exec($session);
?>
