# RadioCorp
Public/Private API for accessing RadioCorp recources through custom applications.\\ At the moment only available for the stations 100% NL, SLAM! and SLAM!TV ### Available formats ### Available formats (based on the 'Accept' header):\\ json, array, csv, html, jsonp, php, serialized, xml\\ The API defaults to application/json when no header supplied. ### Contact / License ###

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: v0.0
- Build package: org.openapitools.codegen.languages.PhpClientCodegen
For more information, please visit [https://www.radiocorp.nl/](https://www.radiocorp.nl/)

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/radiocorp/Radiocorp-API-PHP-SDK.git"
    }
  ],
  "require": {
    "radiocorp/Radiocorp-API-PHP-SDK": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/RadioCorp/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## Documentation for API Endpoints

All URIs are relative to *https://api.dev.radiocorp.io*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*EPGApi* | [**epgCurrentShowGet**](docs/Api/EPGApi.md#epgcurrentshowget) | **GET** /Epg/CurrentShow | Get the current on-air show.
*EPGApi* | [**epgNextShowGet**](docs/Api/EPGApi.md#epgnextshowget) | **GET** /Epg/nextShow | Get the next show which is gonna be aired.
*EPGApi* | [**epgWeeklyEpgGet**](docs/Api/EPGApi.md#epgweeklyepgget) | **GET** /Epg/weeklyEpg | Get the full Program Guide.
*NewsApi* | [**newsNewsReaderGet**](docs/Api/NewsApi.md#newsnewsreaderget) | **GET** /News/NewsReader | Get the current NewsReader.
*NewsApi* | [**newsWeatherGet**](docs/Api/NewsApi.md#newsweatherget) | **GET** /News/Weather | Get the last Wheather.
*RadioManagerApi* | [**radiomanagerPushPost**](docs/Api/RadioManagerApi.md#radiomanagerpushpost) | **POST** /Radiomanager/Push | [INTERNAL] RadioManager pushes it&#39;s changes to this endpoint
*ReplayApi* | [**replayDailyGet**](docs/Api/ReplayApi.md#replaydailyget) | **GET** /Replay/Daily | Get Replay shows and their replay items for a specific day, we deliver replay for only the last 7 days.
*ReplayApi* | [**replayProgrammGet**](docs/Api/ReplayApi.md#replayprogrammget) | **GET** /Replay/Programm | Get all replay items for a programm.
*SongApi* | [**songCurrentSongGet**](docs/Api/SongApi.md#songcurrentsongget) | **GET** /Song/CurrentSong | Get the current song on-air.
*SongApi* | [**songCurrentSongPut**](docs/Api/SongApi.md#songcurrentsongput) | **PUT** /Song/CurrentSong | [INTERNAL] Save the current song to the API.
*SongApi* | [**songPlaylistGet**](docs/Api/SongApi.md#songplaylistget) | **GET** /Song/Playlist | Get the playlist of a station.
*SongApi* | [**songStationsPut**](docs/Api/SongApi.md#songstationsput) | **PUT** /Song/Station | [INTERNAL] Save the station to the API.
*StationApi* | [**stationPresenterByIdGet**](docs/Api/StationApi.md#stationpresenterbyidget) | **GET** /Station/PresenterById | Get a specific presenter by its unique id.
*StationApi* | [**stationPresenterListGet**](docs/Api/StationApi.md#stationpresenterlistget) | **GET** /Station/PresenterList | Get a list of all active presenters of the station.
*StationApi* | [**stationProgramByIdGet**](docs/Api/StationApi.md#stationprogrambyidget) | **GET** /Station/ProgramById | Get a specific program, and all the available information for that program
*StationApi* | [**stationProgramlistGet**](docs/Api/StationApi.md#stationprogramlistget) | **GET** /Station/ProgramList | Get a list of all programs which are available for publishing.


## Documentation For Models

 - [BroadcastItem](docs/Model/BroadcastItem.md)
 - [CurrentSong](docs/Model/CurrentSong.md)
 - [EpgDay](docs/Model/EpgDay.md)
 - [EpgShow](docs/Model/EpgShow.md)
 - [EpgWeekly](docs/Model/EpgWeekly.md)
 - [NewsNewsReader](docs/Model/NewsNewsReader.md)
 - [NewsReader](docs/Model/NewsReader.md)
 - [NewsWeather](docs/Model/NewsWeather.md)
 - [Playlist](docs/Model/Playlist.md)
 - [PlaylistInfo](docs/Model/PlaylistInfo.md)
 - [Presenter](docs/Model/Presenter.md)
 - [PresenterById](docs/Model/PresenterById.md)
 - [PresenterHeader](docs/Model/PresenterHeader.md)
 - [PresenterInfo](docs/Model/PresenterInfo.md)
 - [ProgramCompact](docs/Model/ProgramCompact.md)
 - [ProgramFull](docs/Model/ProgramFull.md)
 - [ProgramHeader](docs/Model/ProgramHeader.md)
 - [ProgramInfo](docs/Model/ProgramInfo.md)
 - [ReplayBroadcast](docs/Model/ReplayBroadcast.md)
 - [ReplayDaily](docs/Model/ReplayDaily.md)
 - [ReplayHour](docs/Model/ReplayHour.md)
 - [ReplayItem](docs/Model/ReplayItem.md)
 - [ReplayProgramm](docs/Model/ReplayProgramm.md)
 - [Song](docs/Model/Song.md)
 - [SongCurrent](docs/Model/SongCurrent.md)
 - [SongMetadata](docs/Model/SongMetadata.md)
 - [SongPlaylist](docs/Model/SongPlaylist.md)
 - [Station](docs/Model/Station.md)
 - [StationPresenterById](docs/Model/StationPresenterById.md)
 - [StationPresenterList](docs/Model/StationPresenterList.md)
 - [StationProgramById](docs/Model/StationProgramById.md)
 - [StationProgramList](docs/Model/StationProgramList.md)
 - [Weather](docs/Model/Weather.md)


## Documentation For Authorization


## api_key

- **Type**: API key
- **API key parameter name**: X-Api-Key
- **Location**: HTTP header


## Author

beheer@radiocorp.nl

