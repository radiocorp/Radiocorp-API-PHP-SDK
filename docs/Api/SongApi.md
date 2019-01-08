# RadioCorp\SongApi

All URIs are relative to *https://api.radiocorp.io*

Method | HTTP request | Description
------------- | ------------- | -------------
[**songCurrentSongGet**](SongApi.md#songCurrentSongGet) | **GET** /Song/CurrentSong | Get the current song on-air.
[**songCurrentSongPut**](SongApi.md#songCurrentSongPut) | **PUT** /Song/CurrentSong | [INTERNAL] Save the current song to the API.
[**songPlaylistGet**](SongApi.md#songPlaylistGet) | **GET** /Song/Playlist | Get the playlist of a station.
[**songStationsPut**](SongApi.md#songStationsPut) | **PUT** /Song/Station | [INTERNAL] Save the station to the API.


# **songCurrentSongGet**
> \RadioCorp\Model\SongCurrent songCurrentSongGet($station)

Get the current song on-air.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = RadioCorp\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = RadioCorp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new RadioCorp\Api\SongApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$station = 100p_nonstop; // string | Select a other station than the main station, it is selectet bij the short station name!

try {
    $result = $apiInstance->songCurrentSongGet($station);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SongApi->songCurrentSongGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **station** | **string**| Select a other station than the main station, it is selectet bij the short station name! | [optional]

### Return type

[**\RadioCorp\Model\SongCurrent**](../Model/SongCurrent.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **songCurrentSongPut**
> songCurrentSongPut()

[INTERNAL] Save the current song to the API.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = RadioCorp\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = RadioCorp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new RadioCorp\Api\SongApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->songCurrentSongPut();
} catch (Exception $e) {
    echo 'Exception when calling SongApi->songCurrentSongPut: ', $e->getMessage(), PHP_EOL;
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

# **songPlaylistGet**
> \RadioCorp\Model\SongPlaylist songPlaylistGet($station, $date, $hour)

Get the playlist of a station.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = RadioCorp\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = RadioCorp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new RadioCorp\Api\SongApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$station = 100p_nonstop; // string | Select a other station than the main station, it is selectet bij the short station name!
$date = 2018-11-20; // string | Date of the playlist if date not set is the current date.
$hour = 'hour_example'; // string | The hour you want to pick up, the first hour is 00 and the last 23 leaves this value empty if you want to pick up all day.

try {
    $result = $apiInstance->songPlaylistGet($station, $date, $hour);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SongApi->songPlaylistGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **station** | **string**| Select a other station than the main station, it is selectet bij the short station name! | [optional]
 **date** | **string**| Date of the playlist if date not set is the current date. | [optional]
 **hour** | **string**| The hour you want to pick up, the first hour is 00 and the last 23 leaves this value empty if you want to pick up all day. | [optional]

### Return type

[**\RadioCorp\Model\SongPlaylist**](../Model/SongPlaylist.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **songStationsPut**
> songStationsPut()

[INTERNAL] Save the station to the API.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = RadioCorp\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = RadioCorp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new RadioCorp\Api\SongApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->songStationsPut();
} catch (Exception $e) {
    echo 'Exception when calling SongApi->songStationsPut: ', $e->getMessage(), PHP_EOL;
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

