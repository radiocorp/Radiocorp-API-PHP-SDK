# RadioCorp\StationApi

All URIs are relative to *https://api.dev.radiocorp.io*

Method | HTTP request | Description
------------- | ------------- | -------------
[**stationPresenterByIdGet**](StationApi.md#stationPresenterByIdGet) | **GET** /Station/PresenterById | Get a specific presenter by its unique id.
[**stationPresenterListGet**](StationApi.md#stationPresenterListGet) | **GET** /Station/PresenterList | Get a list of all active presenters of the station.
[**stationProgramByIdGet**](StationApi.md#stationProgramByIdGet) | **GET** /Station/ProgramById | Get a specific program, and all the available information for that program
[**stationProgramlistGet**](StationApi.md#stationProgramlistGet) | **GET** /Station/ProgramList | Get a list of all programs which are available for publishing.


# **stationPresenterByIdGet**
> \RadioCorp\Model\StationPresenterById stationPresenterByIdGet($presenter_id)

Get a specific presenter by its unique id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = RadioCorp\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = RadioCorp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new RadioCorp\Api\StationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$presenter_id = 1; // int | Only retrieve a specific presenter

try {
    $result = $apiInstance->stationPresenterByIdGet($presenter_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StationApi->stationPresenterByIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **presenter_id** | **int**| Only retrieve a specific presenter | [optional]

### Return type

[**\RadioCorp\Model\StationPresenterById**](../Model/StationPresenterById.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **stationPresenterListGet**
> \RadioCorp\Model\StationPresenterList stationPresenterListGet()

Get a list of all active presenters of the station.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = RadioCorp\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = RadioCorp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new RadioCorp\Api\StationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->stationPresenterListGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StationApi->stationPresenterListGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\RadioCorp\Model\StationPresenterList**](../Model/StationPresenterList.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **stationProgramByIdGet**
> \RadioCorp\Model\StationProgramById stationProgramByIdGet($program_id)

Get a specific program, and all the available information for that program

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = RadioCorp\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = RadioCorp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new RadioCorp\Api\StationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$program_id = 1; // int | Only retrieve a specific program

try {
    $result = $apiInstance->stationProgramByIdGet($program_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StationApi->stationProgramByIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **program_id** | **int**| Only retrieve a specific program | [optional]

### Return type

[**\RadioCorp\Model\StationProgramById**](../Model/StationProgramById.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **stationProgramlistGet**
> \RadioCorp\Model\StationProgramList stationProgramlistGet()

Get a list of all programs which are available for publishing.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = RadioCorp\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = RadioCorp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new RadioCorp\Api\StationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->stationProgramlistGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StationApi->stationProgramlistGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\RadioCorp\Model\StationProgramList**](../Model/StationProgramList.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

