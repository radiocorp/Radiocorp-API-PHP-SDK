# RadioCorp\EPGApi

All URIs are relative to *https://api.radiocorp.io*

Method | HTTP request | Description
------------- | ------------- | -------------
[**epgBroadcastByTimeGet**](EPGApi.md#epgBroadcastByTimeGet) | **GET** /Epg/broadcastByTime | Get the show which aires at a specific time.
[**epgChangesGet**](EPGApi.md#epgChangesGet) | **GET** /Epg/changes | Get the changes for a selected period
[**epgCurrentShowGet**](EPGApi.md#epgCurrentShowGet) | **GET** /Epg/CurrentShow | Get the current on-air show.
[**epgNextHourGet**](EPGApi.md#epgNextHourGet) | **GET** /Epg/nextHour | Get the show which aires the next hour.
[**epgNextShowGet**](EPGApi.md#epgNextShowGet) | **GET** /Epg/nextShow | Get the next show which is gonna be aired.
[**epgWeeklyEpgGet**](EPGApi.md#epgWeeklyEpgGet) | **GET** /Epg/weeklyEpg | Get the full Program Guide.


# **epgBroadcastByTimeGet**
> \RadioCorp\Model\EpgShow epgBroadcastByTimeGet($starttime)

Get the show which aires at a specific time.

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
$starttime = 2018-11-20 00:00:00; // string | DateTime for which hour you want the broadcast

try {
    $result = $apiInstance->epgBroadcastByTimeGet($starttime);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EPGApi->epgBroadcastByTimeGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **starttime** | **string**| DateTime for which hour you want the broadcast | [optional]

### Return type

[**\RadioCorp\Model\EpgShow**](../Model/EpgShow.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **epgChangesGet**
> \RadioCorp\Model\EpgWeekly epgChangesGet($startdate, $enddate, $since, $extended)

Get the changes for a selected period

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
$startdate = 2018-11-20; // string | Startdate of changes, in format
$enddate = 2018-11-20; // string | Enddate of changes, in format
$since = 2019-09-26 13:24:00; // Datetime | Since date time (optional, if provided changes since this datetime are returned)
$extended = false; // bool | Include all Broadcast information in the response ( = slower )

try {
    $result = $apiInstance->epgChangesGet($startdate, $enddate, $since, $extended);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EPGApi->epgChangesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **startdate** | **string**| Startdate of changes, in format | [optional]
 **enddate** | **string**| Enddate of changes, in format | [optional]
 **since** | [**Datetime**](../Model/.md)| Since date time (optional, if provided changes since this datetime are returned) | [optional]
 **extended** | **bool**| Include all Broadcast information in the response ( &#x3D; slower ) | [optional]

### Return type

[**\RadioCorp\Model\EpgWeekly**](../Model/EpgWeekly.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

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

# **epgNextHourGet**
> \RadioCorp\Model\EpgShow epgNextHourGet()

Get the show which aires the next hour.

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
    $result = $apiInstance->epgNextHourGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EPGApi->epgNextHourGet: ', $e->getMessage(), PHP_EOL;
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

