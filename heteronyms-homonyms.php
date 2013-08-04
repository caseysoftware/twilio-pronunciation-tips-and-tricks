<?php

include 'Services/Twilio.php';

/**
 * By applying homonyms, the TTS voices can be corrected with just a little
 *   time and effort. You can listen to the recording here:
 *
 * https://soundcloud.com/caseysoftware/twilio-voices-using-homonyms
 */
$items = array(
    'The buck does funny things when doze are present.',
    'He could lead if he would get the led out.',
);

$response = new Services_Twilio_Twiml();

foreach($items as $item) {
    $response->pause();
    $response->say($item, array('voice' => 'woman'));
    $response->say($item, array('voice' => 'alice'));
}

print $response;