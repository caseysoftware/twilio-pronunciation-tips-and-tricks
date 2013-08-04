<?php

include 'Services/Twilio.php';

/**
 * All of the acronyms are spelled correctly by both voices except for UN. Alice
 *   pronounces it correctly while the woman voice says "un" as in "fun". You
 *   can listen to the recording here:
 *
 * https://soundcloud.com/caseysoftware/twilio-voices-for-spelled
 */
$items = array('CIA', 'NBC', 'CNN', 'HTTP', 'http', 'UTC', 'UN');

$response = new Services_Twilio_Twiml();

foreach($items as $item) {
    $response->pause();
    $response->say($item, array('voice' => 'woman'));
    $response->say($item, array('voice' => 'alice'));
}

print $response;