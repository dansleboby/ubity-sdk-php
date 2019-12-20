# Swagger\Client\RecordingsApi

All URIs are relative to *https://api.ubity.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**recordingPost**](RecordingsApi.md#recordingpost) | **POST** /recording | Get a specific call recording from and ID
[**recordingsGet**](RecordingsApi.md#recordingsget) | **GET** /recordings | Get recordings list
[**recordingsYearGet**](RecordingsApi.md#recordingsyearget) | **GET** /recordings/{year} | Get recordings list for specific year
[**recordingsYearMonthDayDirectionGet**](RecordingsApi.md#recordingsyearmonthdaydirectionget) | **GET** /recordings/{year}/{month}/{day}/{direction} | Get recordings list for specific for a day (with mp3)
[**recordingsYearMonthGet**](RecordingsApi.md#recordingsyearmonthget) | **GET** /recordings/{year}/{month} | Get recordings list for a specific month

# **recordingPost**
> string recordingPost($body)

Get a specific call recording from and ID

In some case, you would want to download a recording from and ID received from a callback. This endpoint allows your application to retrieve the recording of a specific call using its callid. The response is the actual MP3 file, with a Content-Type: audio/mpeg header.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('key', 'Bearer');

$apiInstance = new Swagger\Client\Api\RecordingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\SpecificRecordingRequest(); // \Swagger\Client\Model\SpecificRecordingRequest | 

try {
    $result = $apiInstance->recordingPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecordingsApi->recordingPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SpecificRecordingRequest**](../Model/SpecificRecordingRequest.md)|  | [optional]

### Return type

**string**

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json;version=0
 - **Accept**: audio/mpeg, application/json;version=0, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **recordingsGet**
> \Swagger\Client\Model\RecordingList recordingsGet()

Get recordings list

This endpoint allows you to get a list of your call recordings. The recordings are listed by year, month, day, call direction. The legacy behaviour of that endpoint (when you request without any header) is to give you the list formated in HTML. Using that HTML view, you can use your browser to access the recordings or you can use a web crawler like wget and download all your recordings in a batch.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('key', 'Bearer');

$apiInstance = new Swagger\Client\Api\RecordingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->recordingsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecordingsApi->recordingsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\RecordingList**](../Model/RecordingList.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;version=0, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **recordingsYearGet**
> \Swagger\Client\Model\RecordingList recordingsYearGet($year)

Get recordings list for specific year

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('key', 'Bearer');

$apiInstance = new Swagger\Client\Api\RecordingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$year = 56; // int | Years (1900 to current year)

try {
    $result = $apiInstance->recordingsYearGet($year);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecordingsApi->recordingsYearGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **year** | **int**| Years (1900 to current year) |

### Return type

[**\Swagger\Client\Model\RecordingList**](../Model/RecordingList.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;version=0, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **recordingsYearMonthDayDirectionGet**
> \Swagger\Client\Model\RecordingList recordingsYearMonthDayDirectionGet($year, $month, $day, $direction)

Get recordings list for specific for a day (with mp3)

Get one recording from that list You can just follow the URL available in the list. (headers are not needed) http://api.ubity.com/recordings/2018/02/15/out/43_20180215105055_15551113333_vgw99-1518709855.9602776.mp3?key=KKKK

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('key', 'Bearer');

$apiInstance = new Swagger\Client\Api\RecordingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$year = 56; // int | Years (1900 to current year)
$month = 56; // int | Month numeric 1 ot 12
$day = 56; // int | Day numeric 1 ot 31
$direction = "direction_example"; // string | out or in

try {
    $result = $apiInstance->recordingsYearMonthDayDirectionGet($year, $month, $day, $direction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecordingsApi->recordingsYearMonthDayDirectionGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **year** | **int**| Years (1900 to current year) |
 **month** | **int**| Month numeric 1 ot 12 |
 **day** | **int**| Day numeric 1 ot 31 |
 **direction** | **string**| out or in |

### Return type

[**\Swagger\Client\Model\RecordingList**](../Model/RecordingList.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;version=0, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **recordingsYearMonthGet**
> \Swagger\Client\Model\RecordingList recordingsYearMonthGet($year, $month)

Get recordings list for a specific month

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('key', 'Bearer');

$apiInstance = new Swagger\Client\Api\RecordingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$year = 56; // int | Years (1900 to current year)
$month = 56; // int | Month numeric 1 ot 12

try {
    $result = $apiInstance->recordingsYearMonthGet($year, $month);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecordingsApi->recordingsYearMonthGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **year** | **int**| Years (1900 to current year) |
 **month** | **int**| Month numeric 1 ot 12 |

### Return type

[**\Swagger\Client\Model\RecordingList**](../Model/RecordingList.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;version=0, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

