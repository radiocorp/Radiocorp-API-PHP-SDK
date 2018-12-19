# RadioCorp\RadioManagerApi

All URIs are relative to *https://api.dev.radiocorp.io*

Method | HTTP request | Description
------------- | ------------- | -------------
[**radiomanagerPushPost**](RadioManagerApi.md#radiomanagerPushPost) | **POST** /Radiomanager/Push | [INTERNAL] RadioManager pushes it&#39;s changes to this endpoint


# **radiomanagerPushPost**
> radiomanagerPushPost()

[INTERNAL] RadioManager pushes it's changes to this endpoint

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = RadioCorp\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = RadioCorp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new RadioCorp\Api\RadioManagerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->radiomanagerPushPost();
} catch (Exception $e) {
    echo 'Exception when calling RadioManagerApi->radiomanagerPushPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

