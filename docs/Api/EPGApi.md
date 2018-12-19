# RadioCorp\EPGApi

All URIs are relative to *https://api.dev.radiocorp.io*

Method | HTTP request | Description
------------- | ------------- | -------------
[**epgCurrentShowGet**](EPGApi.md#epgCurrentShowGet) | **GET** /Epg/CurrentShow | Get the current on-air show.
[**epgNextShowGet**](EPGApi.md#epgNextShowGet) | **GET** /Epg/nextShow | Get the next show which is gonna be aired.
[**epgWeeklyEpgGet**](EPGApi.md#epgWeeklyEpgGet) | **GET** /Epg/weeklyEpg | Get the full Program Guide.


# **epgCurrentShowGet**
> \RadioCorp\Model\EpgShow epgCurrentShowGet()

Get the current on-air show.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = RadioCorp\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = RadioCorp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new RadioCorp\Api\EPGApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->epgCurrentShowGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EPGApi->epgCurrentShowGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\RadioCorp\Model\EpgShow**](../Model/EpgShow.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **epgNextShowGet**
> \RadioCorp\Model\EpgShow epgNextShowGet()

Get the next show which is gonna be aired.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = RadioCorp\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = RadioCorp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new RadioCorp\Api\EPGApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->epgNextShowGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EPGApi->epgNextShowGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\RadioCorp\Model\EpgShow**](../Model/EpgShow.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **epgWeeklyEpgGet**
> \RadioCorp\Model\EpgWeekly epgWeeklyEpgGet($startdate, $firstfull, $days)

Get the full Program Guide.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = RadioCorp\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = RadioCorp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new RadioCorp\Api\EPGApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$startdate = 2018-11-20; // string | Startdate of the EPG, in format
$firstfull = True; // bool | Whether or not the first day will return full or start at the current show (only applys when startdate is today)
$days = 56; // int | The amount of days to return, minimum amount is 1 and maximum amount is 7, defaults to 7

try {
    $result = $apiInstance->epgWeeklyEpgGet($startdate, $firstfull, $days);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EPGApi->epgWeeklyEpgGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **startdate** | **string**| Startdate of the EPG, in format | [optional]
 **firstfull** | **bool**| Whether or not the first day will return full or start at the current show (only applys when startdate is today) | [optional]
 **days** | **int**| The amount of days to return, minimum amount is 1 and maximum amount is 7, defaults to 7 | [optional]

### Return type

[**\RadioCorp\Model\EpgWeekly**](../Model/EpgWeekly.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

