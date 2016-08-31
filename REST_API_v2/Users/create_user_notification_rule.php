<?php

$API_ACCESS_KEY = 'VxRM54vaVCV_vYVbAqUw';

$USER_ID = 'P9GJP78';
$PAYLOAD = array(
  'notification_rule' => array(
    'type' => 'assignment_notification_rule',
    'start_delay_in_minutes' => 4,
    'contact_method' => array(
      'id' => 'PLWSUYQ',
      'type' => 'email_contact_method'
    ),
    'urgency' => 'high'
  )
);
$JSON = json_encode($PAYLOAD);

$URL = 'https://api.pagerduty.com/users/' . urlencode($USER_ID) . '/notification_rules';
$session = curl_init();

curl_setopt($session, CURLOPT_URL, $URL);
curl_setopt($session, CURLOPT_HTTPHEADER, array(
    'Content-type: application/json',
    'Authorization: Token token=' . $API_ACCESS_KEY
));
curl_setopt($session, CURLOPT_POSTFIELDS, $JSON);
$output = curl_exec($session);
?>
