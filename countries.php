<?php

include 'Services/Twilio.php';

/**
 * Uruguay is the oddity
 */
$items = array('United States', 'Brazil', 'Ireland', 'Singapore',
    'Japan', 'Australia', 'United Arab Emirates', 'Peru',
    'Uruguay', 'French Polynesia', 'Egypt', 'Greece', 'Qatar');

$response = new Services_Twilio_Twiml();

foreach($items as $item) {
    $response->say($item);
    $response->say($item, array('voice' => 'woman'));
    $response->say($item, array('voice' => 'alice'));
}

print $response;