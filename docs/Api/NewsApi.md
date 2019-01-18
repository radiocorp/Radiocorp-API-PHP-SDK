# RadioCorp\NewsApi

All URIs are relative to *https://api.dev.radiocorp.io*

Method | HTTP request | Description
------------- | ------------- | -------------
[**newsNewsReaderGet**](NewsApi.md#newsNewsReaderGet) | **GET** /News/NewsReader | Get the current NewsReader.
[**newsWeatherGet**](NewsApi.md#newsWeatherGet) | **GET** /News/Weather | Get the last Wheather.


# **newsNewsReaderGet**
> \RadioCorp\Model\NewsNewsReader newsNewsReaderGet()

Get the current NewsReader.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = RadioCorp\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = RadioCorp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new RadioCorp\Api\NewsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->newsNewsReaderGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NewsApi->newsNewsReaderGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\RadioCorp\Model\NewsNewsReader**](../Model/NewsNewsReader.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **newsWeatherGet**
> \RadioCorp\Model\NewsWeather newsWeatherGet($provider)

Get the last Wheather.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = RadioCorp\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = RadioCorp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new RadioCorp\Api\NewsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$provider = anp; // string | From which provider do you want to load the bulletin, possible values are 'anp' or 'weeronline'

try {
    $result = $apiInstance->newsWeatherGet($provider);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NewsApi->newsWeatherGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **provider** | **string**| From which provider do you want to load the bulletin, possible values are &#39;anp&#39; or &#39;weeronline&#39; | [optional]

### Return type

[**\RadioCorp\Model\NewsWeather**](../Model/NewsWeather.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

