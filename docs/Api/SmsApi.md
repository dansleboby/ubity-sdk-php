# Swagger\Client\SmsApi

All URIs are relative to *https://api.ubity.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**smsPost**](SmsApi.md#smspost) | **POST** /sms | Text Messages (SMS)
[**smsSendGet**](SmsApi.md#smssendget) | **GET** /sms/send | Text Messages (SMS)

# **smsPost**
> \Swagger\Client\Model\SmsResponse smsPost($body)

Text Messages (SMS)

This endpoint delivers a text message (SMS) to a mobile phone number.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('key', 'Bearer');

$apiInstance = new Swagger\Client\Api\SmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\SmsRequest(); // \Swagger\Client\Model\SmsRequest | 

try {
    $result = $apiInstance->smsPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmsApi->smsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SmsRequest**](../Model/SmsRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\SmsResponse**](../Model/SmsResponse.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json;version=1
 - **Accept**: application/json;version=0, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **smsSendGet**
> \Swagger\Client\Model\SmsResponse smsSendGet($from_number, $to_number, $message)

Text Messages (SMS)

This endpoint delivers a text message (SMS) to a mobile phone number.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('key', 'Bearer');

$apiInstance = new Swagger\Client\Api\SmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from_number = 56; // int | Phone number of the sender (ie. 5551112222)
$to_number = 56; // int | Phone number of the recipient (ie. 5551113333)
$message = "message_example"; // string | Body of the message

try {
    $result = $apiInstance->smsSendGet($from_number, $to_number, $message);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmsApi->smsSendGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from_number** | **int**| Phone number of the sender (ie. 5551112222) |
 **to_number** | **int**| Phone number of the recipient (ie. 5551113333) |
 **message** | **string**| Body of the message |

### Return type

[**\Swagger\Client\Model\SmsResponse**](../Model/SmsResponse.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;version=1, application/xml, application/json;version=0

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

