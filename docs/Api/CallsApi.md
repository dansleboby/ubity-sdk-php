# Swagger\Client\CallsApi

All URIs are relative to *https://api.ubity.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**callAnswerPost**](CallsApi.md#callanswerpost) | **POST** /call_answer | Answering a call
[**callHangupPost**](CallsApi.md#callhanguppost) | **POST** /call_hangup | Hangup a call
[**callPost**](CallsApi.md#callpost) | **POST** /call | Initiate an outgoing call on behalf of a user.
[**callSendToVoicemailPost**](CallsApi.md#callsendtovoicemailpost) | **POST** /call_send_to_voicemail | Send a call to voicemail (while ringing)
[**callsPost**](CallsApi.md#callspost) | **POST** /calls | List running calls

# **callAnswerPost**
> \Swagger\Client\Model\AnsweringCallResponse callAnswerPost($body)

Answering a call

### Example
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
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\AnsweringCallRequest**](../Model/AnsweringCallRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\AnsweringCallResponse**](../Model/AnsweringCallResponse.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json;version=0
 - **Accept**: application/json;version=0, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **callHangupPost**
> \Swagger\Client\Model\HangupCallResponse callHangupPost($body)

Hangup a call

### Example
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
$body = new \Swagger\Client\Model\HangupCallRequest(); // \Swagger\Client\Model\HangupCallRequest | 

try {
    $result = $apiInstance->callHangupPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallsApi->callHangupPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\HangupCallRequest**](../Model/HangupCallRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\HangupCallResponse**](../Model/HangupCallResponse.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json;version=0
 - **Accept**: application/json;version=0, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **callPost**
> \Swagger\Client\Model\Call callPost($body)

Initiate an outgoing call on behalf of a user.

The user who initiates the call is called first, and upon answering that call, is connected to the other party. The initial call will contain the other party's phone number as the CallerID number.

### Example
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
$body = new \Swagger\Client\Model\CallRequest(); // \Swagger\Client\Model\CallRequest | 

try {
    $result = $apiInstance->callPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallsApi->callPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CallRequest**](../Model/CallRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Call**](../Model/Call.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json;version=0
 - **Accept**: application/json;version=0, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **callSendToVoicemailPost**
> \Swagger\Client\Model\SendCallVoiceMailResponse callSendToVoicemailPost($body)

Send a call to voicemail (while ringing)

### Example
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
$body = new \Swagger\Client\Model\SendCallVoiceMailRequest(); // \Swagger\Client\Model\SendCallVoiceMailRequest | 

try {
    $result = $apiInstance->callSendToVoicemailPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallsApi->callSendToVoicemailPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SendCallVoiceMailRequest**](../Model/SendCallVoiceMailRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\SendCallVoiceMailResponse**](../Model/SendCallVoiceMailResponse.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json;version=0
 - **Accept**: application/json;version=0, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **callsPost**
> \Swagger\Client\Model\RunningCall callsPost($body)

List running calls

### Example
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
$body = new \Swagger\Client\Model\RunningCallRequest(); // \Swagger\Client\Model\RunningCallRequest | 

try {
    $result = $apiInstance->callsPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallsApi->callsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\RunningCallRequest**](../Model/RunningCallRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\RunningCall**](../Model/RunningCall.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json;version=0
 - **Accept**: application/json;version=0, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

