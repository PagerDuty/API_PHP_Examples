<?php

$API_ACCESS_KEY = 'VxRM54vaVCV_vYVbAqUw';

$PAYLOAD = array(
  'user' => array(
    'type' => 'user',
    'name' => 'John Doe',
    'email' => 'john.doe@gmail.com',
    'time_zone' => 'UTC',
    'color' => 'green',
    'role' => 'limited_user',
    'job_title' => 'DevOps Intern'
  )
);
$JSON = json_encode($PAYLOAD);

$URL = 'https://api.pagerduty.com/users';
$session = curl_init();

curl_setopt($session, CURLOPT_URL, $URL);
curl_setopt($session, CURLOPT_HTTPHEADER, array(
    'Content-type: application/json',
    'Authorization: Token token=' . $API_ACCESS_KEY
));
curl_setopt($session, CURLOPT_POSTFIELDS, $JSON);
$output = curl_exec($session);
?>
