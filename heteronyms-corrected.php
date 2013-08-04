<?php

include 'Services/Twilio.php';

/**
 * By applying both phonetic spellings and homonyms, the TTS voices can be
 *   corrected with just a little time and effort. You can listen to
 *   the recording here:
 *
 * https://soundcloud.com/caseysoftware/twilio-voices-updated-to-deal
 */
$items = array(
    'A "bas" was painted on the head of the bass drum.',
    'The buck does funny things when doze are present.',
    'They were too close to the door to close it.',
    "Don't desert me here in the desert!",
    'When shot at, the dove dohv into the bushes.',
    'The insurance was invalid for the invalid.',
    'How can I intimate this to my most intimate friend?',
    'With every number I read, my mind gets nummer and nummer.',
    'He could lead if he would get the led out.',
    'I did not ubject to the object.'
);

$response = new Services_Twilio_Twiml();

foreach($items as $item) {
    $response->pause();
    $response->say($item, array('voice' => 'woman'));
    $response->say($item, array('voice' => 'alice'));
}

print $response;
