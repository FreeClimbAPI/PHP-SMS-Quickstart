<?php
require 'vendor/autoload.php';

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->safeLoad();

// Check if required environment variables are set
if(!isset($_ENV['ACCOUNT_ID']) || !isset($_ENV['API_KEY']) || !isset($_ENV['FREECLIMB_NUMBER'])){
    error_log("ERROR: ENVIRONMENT VARIABLES ARE NOT SET. PLEASE SET ALL ENVIRONMMENT VARIABLES AND RETRY.");
    $currentPID = getmypid();
    exec("kill -9 $currentPID");
} 

// Configure HTTP basic authorization: fc
$config = FreeClimb\Api\Configuration::getDefaultConfiguration()
    ->setHost($_ENV['API_SERVER'] ?? 'https://www.freeclimb.com/apiserver')
    ->setUsername($_ENV['ACCOUNT_ID'])
    ->setPassword($_ENV['API_KEY']);

$apiInstance = new FreeClimb\Api\Api\DefaultApi(
        // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
        // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$request = json_decode(file_get_contents('php://input'), true);

$account_id = $_ENV['ACCOUNT_ID']; // string | ID of the account
$data = array(
    'from' => $_ENV['FREECLIMB_NUMBER'],
    //FC Number
    'to' => $request['from'],
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
