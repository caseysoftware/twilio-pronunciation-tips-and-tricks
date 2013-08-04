<?php

include_once 'Services/Twilio.php';
include 'credentials.php';

$client = new Services_Twilio($accountSid, $authToken);

try {
    // Initiate a new outbound call
    $call = $client->account->calls->create(
        $callFrom, // The number of the phone initiating the call
        $callTo, // The number of the phone receiving call
        $myUrlHostingTheSaySamples // The URL Twilio will request when the call is answered
    );
    echo 'Started call: ' . $call->sid . "\n";
} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage() . "\n";
}