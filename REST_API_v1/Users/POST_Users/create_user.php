<?php

$SUBDOMAIN='pdt-dank';
$URL = 'https://' . urlencode($SUBDOMAIN) . '.pagerduty.com/api/v1/users';
$API_ACCESS_KEY = 'Zcr6taSbjRPsyMnsxzz1';
$REQUESTER_ID = 'PJR28TQ';
$session = curl_init();

$json_payload =
      array(
        "role"=>"admin",
        "name"=>"Jo Hambone",
        "email"=>"ham@dfjdjfjfjfjasljeio.com",
        "requester_id"=> $REQUESTER_ID
      );
curl_setopt($session, CURLOPT_URL, $URL);
curl_setopt($session, CURLOPT_POSTFIELDS, json_encode($json_payload));
curl_setopt($session, CURLOPT_HTTPHEADER, array(
    'Content-type: application/json',
    'Authorization: Token token=' . $API_ACCESS_KEY
));
$session = curl_exec($session);
?>
