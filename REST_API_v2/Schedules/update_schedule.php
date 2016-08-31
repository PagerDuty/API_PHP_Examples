<?php

$API_ACCESS_KEY = 'VxRM54vaVCV_vYVbAqUw';

$REQUESTER_EMAIL = 'lucas@pagerduty.com';
$SCHEDULE_ID = 'PO5PFOY';
$PAYLOAD = array(
  'schedule' => array(
    'name' => 'Daily Engineering Rotation',
    'type' => 'schedule',
    'time_zone' => 'UTC',
    'description' => 'Rotational schedule for engineering',
    'schedule_layers' => array(
      array(
        'name' => 'Night Shift',
        'start' => '2017-11-06T20:00:00-05:00',
        'end' => '2018-11-06T20:00:00-05:00',
        'rotation_virtual_start' => '2017-11-06T20:00:00-05:00',
        'rotation_turn_length_seconds' => 86400,
        'users' => array(
          array(
            'user' => array(
              'id' => 'PXIJPJ6',
              'type' => 'user'
            )
          )
        ),
        'restrictions' => array(
          array(
            'type' => 'daily_restriction',
            'start_time_of_day' => '08:00:00',
            'duration_seconds' => 32400
          )
        )
      )
    )
  )
);
$JSON = json_encode($PAYLOAD);

$URL = 'https://api.pagerduty.com/schedules/' . urlencode($SCHEDULE_ID);
$session = curl_init();

curl_setopt($session, CURLOPT_URL, $URL);
curl_setopt($session, CURLOPT_HTTPHEADER, array(
    'Content-type: application/json',
    'Authorization: Token token=' . $API_ACCESS_KEY,
    'From: ' . $REQUESTER_EMAIL
));
curl_setopt($session, CURLOPT_POSTFIELDS, $JSON);
curl_setopt($session, CURLOPT_CUSTOMREQUEST, "PUT");
$output = curl_exec($session);
?>
