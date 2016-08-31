<?php

$SUBDOMAIN='pdt-dank';
$URL = 'https://events.pagerduty.com/generic/2010-04-15/create_event.json';

$payload = array(
  "service_key"=> "e05fd2270e2c4c028f3ae2388bbc09eb",
  "event_type"=> "acknowledge",
  "incident_key"=>"1234",
  "description"=> "FAILURE for production/HTTP on machine srv01.acme.com",
  "client"=> "Sample Monitoring Service",
  "client_url"=> "https=>//monitoring.service.com",
  "details"=> array(
    "ping time"=> "1500ms",
    "load avg"=> 0.75
  )
);

$session = curl_init();

curl_setopt($session, CURLOPT_URL, $URL);
curl_setopt($session, CURLOPT_POSTFIELDS, json_encode($payload));
curl_setopt($session, CURLOPT_HTTPHEADER, array(
    'Content-type'=> 'application/json'
));

$result = curl_exec($session);
curl_close($session);

echo $result;
?>
