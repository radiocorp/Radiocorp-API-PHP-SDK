# RadioCorp\ReplayApi

All URIs are relative to *https://api.dev.radiocorp.io*

Method | HTTP request | Description
------------- | ------------- | -------------
[**replayDailyGet**](ReplayApi.md#replayDailyGet) | **GET** /Replay/Daily | Get Replay shows and their replay items for a specific day, we deliver replay for only the last 7 days.
[**replayProgrammGet**](ReplayApi.md#replayProgrammGet) | **GET** /Replay/Programm | Get all replay items for a programm.


# **replayDailyGet**
> \RadioCorp\Model\ReplayDaily replayDailyGet($date)

Get Replay shows and their replay items for a specific day, we deliver replay for only the last 7 days.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = RadioCorp\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = RadioCorp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new RadioCorp\Api\ReplayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$date = 2018-11-20; // string | Date to get replay for

try {
    $result = $apiInstance->replayDailyGet($date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReplayApi->replayDailyGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **date** | **string**| Date to get replay for | [optional]

### Return type

[**\RadioCorp\Model\ReplayDaily**](../Model/ReplayDaily.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replayProgrammGet**
> \RadioCorp\Model\ReplayProgramm replayProgrammGet($programm_id)

Get all replay items for a programm.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = RadioCorp\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = RadioCorp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new RadioCorp\Api\ReplayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$programm_id = 1; // int | Programm ID of the show

try {
    $result = $apiInstance->replayProgrammGet($programm_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReplayApi->replayProgrammGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **programm_id** | **int**| Programm ID of the show | [optional]

### Return type

[**\RadioCorp\Model\ReplayProgramm**](../Model/ReplayProgramm.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

