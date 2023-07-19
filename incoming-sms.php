<?php
require 'vendor/autoload.php';

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Configure HTTP basic authorization: fc
$config = FreeClimb\Api\Configuration::getDefaultConfiguration()
    ->setUsername($_ENV['ACCOUNT_ID'])
    ->setPassword($_ENV['API_KEY']);

$apiInstance = new FreeClimb\Api\Api\DefaultApi(
        // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
        // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$account_id = $_ENV['ACCOUNT_ID']; // string | ID of the account
$data = array(
    'from' => $_ENV['FROM'],
    //FC Number
    'to' => $_ENV['TO'],
    //Verified Number
    'text' => 'Hello World!',
);
$message_request = new \FreeClimb\Api\Model\MessageRequest($data); // \FreeClimb\Api\Model\MessageRequest | Details to create a message

try {
    $result = $apiInstance->sendAnSmsMessage($message_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->sendAnSmsMessage: ', $e->getMessage(), PHP_EOL;
}