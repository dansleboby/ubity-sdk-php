# DISCLAMER
> This SDK is not supported by Ubity!

## API doc
- Swagger: https://generator.swagger.io/?url=https://raw.githubusercontent.com/dansleboby/ubity-sdk-php/master/swagger.json
- Original: https://doc-api-mtl.ubity.com/

# SwaggerClient-php
The Ubity API allows you to initiate calls, send text messages (SMS), retrieve call recordings, get a user's phone presence status, and a whole lot more.

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 1.0
- Build package: io.swagger.codegen.v3.generators.php.PhpClientCodegen

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/dansleboby/ubity-sdk-php.git"
    }
  ],
  "require": {
    "dansleboby/ubity-sdk-php": "~1"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SwaggerClient-php/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('key', 'Bearer');

$apiInstance = new Swagger\Client\Api\CallsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\AnsweringCallRequest(); // \Swagger\Client\Model\AnsweringCallRequest | 

try {
    $result = $apiInstance->callAnswerPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallsApi->callAnswerPost: ', $e->getMessage(), PHP_EOL;
}

// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('key', 'Bearer');

$apiInstance = new Swagger\Client\Api\CallsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\HangupCallRequest(); // \Swagger\Client\Model\HangupCallRequest | 

try {
    $result = $apiInstance->callHangupPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallsApi->callHangupPost: ', $e->getMessage(), PHP_EOL;
}

// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('key', 'Bearer');

$apiInstance = new Swagger\Client\Api\CallsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\CallRequest(); // \Swagger\Client\Model\CallRequest | 

try {
    $result = $apiInstance->callPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallsApi->callPost: ', $e->getMessage(), PHP_EOL;
}

// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('key', 'Bearer');

$apiInstance = new Swagger\Client\Api\CallsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\SendCallVoiceMailRequest(); // \Swagger\Client\Model\SendCallVoiceMailRequest | 

try {
    $result = $apiInstance->callSendToVoicemailPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallsApi->callSendToVoicemailPost: ', $e->getMessage(), PHP_EOL;
}

// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('key', 'Bearer');

$apiInstance = new Swagger\Client\Api\CallsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\RunningCallRequest(); // \Swagger\Client\Model\RunningCallRequest | 

try {
    $result = $apiInstance->callsPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallsApi->callsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

## Documentation for API Endpoints

All URIs are relative to *https://api.ubity.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*CallsApi* | [**callAnswerPost**](docs/Api/CallsApi.md#callanswerpost) | **POST** /call_answer | Answering a call
*CallsApi* | [**callHangupPost**](docs/Api/CallsApi.md#callhanguppost) | **POST** /call_hangup | Hangup a call
*CallsApi* | [**callPost**](docs/Api/CallsApi.md#callpost) | **POST** /call | Initiate an outgoing call on behalf of a user.
*CallsApi* | [**callSendToVoicemailPost**](docs/Api/CallsApi.md#callsendtovoicemailpost) | **POST** /call_send_to_voicemail | Send a call to voicemail (while ringing)
*CallsApi* | [**callsPost**](docs/Api/CallsApi.md#callspost) | **POST** /calls | List running calls
*ExtensionsApi* | [**extensionsGet**](docs/Api/ExtensionsApi.md#extensionsget) | **GET** /extensions | Get extensions list
*RecordingsApi* | [**recordingPost**](docs/Api/RecordingsApi.md#recordingpost) | **POST** /recording | Get a specific call recording from and ID
*RecordingsApi* | [**recordingsGet**](docs/Api/RecordingsApi.md#recordingsget) | **GET** /recordings | Get recordings list
*RecordingsApi* | [**recordingsYearGet**](docs/Api/RecordingsApi.md#recordingsyearget) | **GET** /recordings/{year} | Get recordings list for specific year
*RecordingsApi* | [**recordingsYearMonthDayOutGet**](docs/Api/RecordingsApi.md#recordingsyearmonthdayoutget) | **GET** /recordings/{year}/{month}/{day}/out | Get recordings list for specific for a day (with mp3)
*RecordingsApi* | [**recordingsYearMonthGet**](docs/Api/RecordingsApi.md#recordingsyearmonthget) | **GET** /recordings/{year}/{month} | Get recordings list for a specific month
*SmsApi* | [**smsPost**](docs/Api/SmsApi.md#smspost) | **POST** /sms | Text Messages (SMS)
*SmsApi* | [**smsSendGet**](docs/Api/SmsApi.md#smssendget) | **GET** /sms/send | Text Messages (SMS)

## Documentation For Models

 - [AnsweringCallRequest](docs/Model/AnsweringCallRequest.md)
 - [AnsweringCallResponse](docs/Model/AnsweringCallResponse.md)
 - [Call](docs/Model/Call.md)
 - [CallRequest](docs/Model/CallRequest.md)
 - [Extension](docs/Model/Extension.md)
 - [ExtensionsList](docs/Model/ExtensionsList.md)
 - [HangupCallRequest](docs/Model/HangupCallRequest.md)
 - [HangupCallResponse](docs/Model/HangupCallResponse.md)
 - [RecordingList](docs/Model/RecordingList.md)
 - [RecordingsResponse](docs/Model/RecordingsResponse.md)
 - [RunningCall](docs/Model/RunningCall.md)
 - [RunningCallCalls](docs/Model/RunningCallCalls.md)
 - [RunningCallRequest](docs/Model/RunningCallRequest.md)
 - [SendCallVoiceMailRequest](docs/Model/SendCallVoiceMailRequest.md)
 - [SendCallVoiceMailResponse](docs/Model/SendCallVoiceMailResponse.md)
 - [SmsRequest](docs/Model/SmsRequest.md)
 - [SmsResponse](docs/Model/SmsResponse.md)
 - [SmsResponseSms](docs/Model/SmsResponseSms.md)
 - [SpecificRecordingRequest](docs/Model/SpecificRecordingRequest.md)
 - [UnAuthorized](docs/Model/UnAuthorized.md)

## Documentation For Authorization


## apiKey

- **Type**: API key
- **API key parameter name**: key
- **Location**: URL query string


## TODO
- Unit test

## Author

API: dev@ubity.com
SDK: gpaquin@sigp.ca

