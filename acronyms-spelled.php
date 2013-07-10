<?php

include 'Services/Twilio.php';

/**
 * UN is the oddity
 */
$items = array('CIA', 'NBC', 'CNN', 'HTTP', 'http', 'UTC', 'UN');

$response = new Services_Twilio_Twiml();

foreach($items as $item) {
    $response->say($item);
    $response->say($item, array('voice' => 'woman'));
    $response->say($item, array('voice' => 'alice'));
}

print $response;