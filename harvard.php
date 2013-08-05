<?php

include 'Services/Twilio.php';

/**
 * By applying both phonetic spellings and homonyms, the TTS voices can be
 *   corrected with just a little time and effort. You can listen to
 *   the recording here:
 *
 * https://soundcloud.com/caseysoftware/
 */
$items = array(
    'Oak is strong and also gives shade.',
    'Cats and dogs each hate the other.',
    'The pipe began to rust while new.',
    "Open the crate but don't break the glass.",
    'Add the sum to the product of these three.',
    'Thieves who rob friends deserve jail.',
    'The ripe taste of cheese improves with age.',
    'Act on these orders with great speed.',
    'The hog crawled under the high fence.',
    'Move the vat over the hot fire.'
);

$response = new Services_Twilio_Twiml();

foreach($items as $item) {
    $response->pause();
    $response->say($item, array('voice' => 'woman'));
    $response->say($item, array('voice' => 'alice'));
}

print $response;







