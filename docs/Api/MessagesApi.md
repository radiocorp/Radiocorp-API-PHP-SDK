# RadioCorp\MessagesApi

All URIs are relative to *https://api.dev.radiocorp.io*

Method | HTTP request | Description
------------- | ------------- | -------------
[**messagesListGet**](MessagesApi.md#messagesListGet) | **GET** /Messages/List | [INTERNAL] Get the messages for this station based on filters defined down here.


# **messagesListGet**
> \RadioCorp\Model\MessagesList messagesListGet($last_msg, $msgs, $limit, $sincedate, $todate)

[INTERNAL] Get the messages for this station based on filters defined down here.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = RadioCorp\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = RadioCorp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new RadioCorp\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$last_msg = -5874; // int | The id from or up to which message you want to get, if it's a positive integer you will get messages newer than the provided id, if you provide a negative integer you will get messages older than the id
$msgs = 464613,464608,464606; // int | A comma seperated list of message ids you want to receive, in this case, limit will be ommited
$limit = 40; // int | The maximum of messages to return
$sincedate = 2018-12-22T21:54:37+01:00; // \DateTime | Return messages since this datetime
$todate = 2018-12-22T21:54:37+01:00; // \DateTime | Return messages up to this datetime

try {
    $result = $apiInstance->messagesListGet($last_msg, $msgs, $limit, $sincedate, $todate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->messagesListGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **last_msg** | **int**| The id from or up to which message you want to get, if it&#39;s a positive integer you will get messages newer than the provided id, if you provide a negative integer you will get messages older than the id | [optional]
 **msgs** | **int**| A comma seperated list of message ids you want to receive, in this case, limit will be ommited | [optional]
 **limit** | **int**| The maximum of messages to return | [optional]
 **sincedate** | [**\DateTime**](../Model/.md)| Return messages since this datetime | [optional]
 **todate** | [**\DateTime**](../Model/.md)| Return messages up to this datetime | [optional]

### Return type

[**\RadioCorp\Model\MessagesList**](../Model/MessagesList.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

