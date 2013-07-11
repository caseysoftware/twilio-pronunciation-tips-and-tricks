<?php

include 'Services/Twilio.php';

/**
 *
 */
$items = array(
    'A bass was painted on the head of the bass drum.',
    'The buck does funny things when does are present.',
    'They were too close to the door to close it.',
    'Don\'t desert me here in the desert!',
    'When shot at, the dove dove into the bushes.',
    'The insurance was invalid for the invalid.',
    'How can I intimate this to my most intimate friend?',
    'With every number I read, my mind gets number and number.',
    'He could lead if he would get the lead out.',
    'I did not object to the object.');

$response = new Services_Twilio_Twiml();

foreach($items as $item) {
    $response->say($item);
    $response->say($item, array('voice' => 'woman'));
    $response->say($item, array('voice' => 'alice'));
}

print $response;