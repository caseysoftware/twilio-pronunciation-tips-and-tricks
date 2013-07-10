<?php

include 'Services/Twilio.php';

/**
 * POTUS is the oddity
 */
$items = array('NASA', 'NATO', 'AIDS', 'SCUBA', 'laser', 'POTUS');

$response = new Services_Twilio_Twiml();

foreach($items as $item) {
    $response->say($item);
    $response->say($item, array('voice' => 'woman'));
    $response->say($item, array('voice' => 'alice'));
}

print $response;