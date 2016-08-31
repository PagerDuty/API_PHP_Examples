<?php

$SUBDOMAIN='pdt-dank';
$API_ACCESS_KEY = 'cw8xyMjRD7kqDr1GYx4q';
$REQUESTER_ID = 'PJR28TQ';
$URL = 'https://' . urlencode($SUBDOMAIN) . '.pagerduty.com/api/v1/schedules/' . urlencode($SCHEDULE_ID);
$session = curl_init();
$json_payload = array(
            "schedule": array("id":"P5WPTAH","name":"TestJulianStuff","time_zone":"UTC","today":"2014-06-12","escalation_policies":[],"description":"","schedule_layers":[{"name":"Schedule Layer 1","rendered_schedule_entries":[],"id":"PSJCVEV","priority":0,"start":"2014-06-12T22:55:05Z","end":None,"restriction_type":None,"rotation_virtual_start":"2014-06-08T00:00:00Z","rotation_turn_length_seconds":86400,"users":[{"member_order":1,"user":{"id":"PJR28TQ","name":"Dan Khersonsky","email":"dkhersonsky@pagerduty.com","color":"purple"}}],"restrictions":[],"rendered_coverage_percentage":0.0}],"overrides_subschedule":{"name":"Overrides","rendered_schedule_entries":[]},"final_schedule":{"name":"Final Schedule","rendered_schedule_entries":[],"rendered_coverage_percentage":0.0}}})

curl_setopt($session, CURLOPT_URL, $URL);
curl_setopt($session, CURLOPT_POSTFIELDS, json_encode($json_payload));
curl_setopt($session, CURLOPT_HTTPHEADER, array(
    'Content-type: application/json',
    'Authorization: Token token=' . $API_ACCESS_KEY
));
$session = curl_exec($session);
?>
