<?php
// Get the PHP helper library from twilio.com/docs/php/install
require_once '/path/to/vendor/autoload.php'; // Loads the library
use Twilio\Rest\Client;

// Your Account Sid and Auth Token from twilio.com/console
$apiKeySid = "SKXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX";
$apiKeySecret = "your_auth_apiKeySecret";
$client = new Client($apiKeySid, $apiKeySecret);

$rooms = $client->video->rooms->read([
    'status' => 'completed',
    'uniqueName' => 'DailyStandup'
]);

foreach ($rooms as $room) {
    echo $room->sid;
}
