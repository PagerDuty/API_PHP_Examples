<?php

$API_ACCESS_KEY = 'VxRM54vaVCV_vYVbAqUw';

$REQUESTER_EMAIL = 'lucas@pagerduty.com';
$PAYLOAD = array(
  'escalation_policy' => array(
    'type' => 'escalation_policy',
    'name' => 'Operations Escalation Policy',
    'escalation_rules' => array(
      array(
        'escalation_delay_in_minutes' => 30,
        'targets' => array(
          array(
            'id' => 'P736T4F',
            'type' => 'user_reference'
          )
        )
      )
    ),
    'repeat_enabled' => true,
    'services' => array(
      array(
        'id' => 'P8A7SJZ',
        'type' => 'service_reference'
      )
    ),
    'num_loops' => 2
  )
);
$JSON = json_encode($PAYLOAD);

$URL = 'https://api.pagerduty.com/escalation_policies';
$session = curl_init();

curl_setopt($session, CURLOPT_URL, $URL);
curl_setopt($session, CURLOPT_HTTPHEADER, array(
    'Content-type: application/json',
    'Authorization: Token token=' . $API_ACCESS_KEY,
    'From: ' . $REQUESTER_EMAIL
));
curl_setopt($session, CURLOPT_POSTFIELDS, $JSON);
$output = curl_exec($session);
?>
