<?php

include 'Services/Twilio.php';

/**
 * All of the acronyms are pronounced correctly by both voices except for
 *   the pretty rare acronym: POTUS. Alice pronounces it correctly while the
 *   woman voice spells it. You can listen to the recording here:
 *
 * https://soundcloud.com/caseysoftware/twilio-tts-for-pronounced
 */
$items = array('NASA', 'NATO', 'AIDS', 'SCUBA', 'laser', 'POTUS');

$response = new Services_Twilio_Twiml();

foreach($items as $item) {
    $response->pause();
    $response->say($item, array('voice' => 'woman'));
    $response->say($item, array('voice' => 'alice'));
}

print $response;