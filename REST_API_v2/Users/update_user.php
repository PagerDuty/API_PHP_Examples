<?php

$API_ACCESS_KEY = 'VxRM54vaVCV_vYVbAqUw';

$USER_ID = 'PV8U0OO';
$PAYLOAD = array(
  'user' => array(
    'type' => 'user',
    'name' => 'Jane Doe',
    'email' => 'jane.doe@gmail.com',
    'time_zone' => 'UTC',
    'color' => 'green',
    'role' => 'limited_user',
    'job_title' => 'DevOps Intern'
  )
);
$JSON = json_encode($PAYLOAD);

$URL = 'https://api.pagerduty.com/users/' . urlencode($USER_ID);
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
