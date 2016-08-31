<?php

$API_ACCESS_KEY = 'VxRM54vaVCV_vYVbAqUw';

$PAYLOAD = array(
  'service' => array(
    'type' => 'service',
    'name' => 'Web App',
    'description' => 'Cool web app',
    'auto_resolve_timeout' => 14400,
    'acknowledgement_timeout' => 600,
    'status' => 'active',
    'escalation_policy' => array(
      'id' => 'PQHJE1L',
      'type' => 'escalation_policy_reference'
    ),
    'incident_urgency_rule' => array(
      'type' => 'use_support_hours',
      'during_support_hours' => array(
        'type' => 'constant',
        'urgency' => 'high'
      ),
      'outside_support_hours' => array(
        'type' => 'constant',
        'urgency' => 'low'
      )
    ),
    'support_hours' => array(
      'type' => 'fixed_time_per_day',
      'time_zone' => 'UTC',
      'start_time' => '08:00:00',
      'end_time' => '17:00:00',
      'days_of_week' => array(
        1, 2, 3, 4, 5
      )
    ),
    'scheduled_actions' => array(
      array(
        'type' => 'urgency_change',
        'at' => array(
          'type' => 'named_time',
          'name' => 'support_hours_start'
        ),
        'to_urgency' => 'high'
      )
    )
  )
);
$JSON = json_encode($PAYLOAD);

$URL = 'https://api.pagerduty.com/services';
$session = curl_init();

curl_setopt($session, CURLOPT_URL, $URL);
curl_setopt($session, CURLOPT_HTTPHEADER, array(
    'Content-type: application/json',
    'Authorization: Token token=' . $API_ACCESS_KEY
));
curl_setopt($session, CURLOPT_POSTFIELDS, $JSON);
$output = curl_exec($session);
?>
