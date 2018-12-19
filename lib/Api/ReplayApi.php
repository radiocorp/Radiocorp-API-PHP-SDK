<?php
/**
 * ReplayApi
 * PHP version 5
 *
 * @category Class
 * @package  RadioCorp
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Public RadioCorp API [Development]
 *
 * Public/Private API for accessing RadioCorp recources through custom applications.\\ At the moment only available for the stations 100% NL, SLAM! and SLAM!TV ### Available formats ### Available formats (based on the 'Accept' header):\\ json, array, csv, html, jsonp, php, serialized, xml\\ The API defaults to application/json when no header supplied. ### Contact / License ###
 *
 * OpenAPI spec version: v0.0
 * Contact: beheer@radiocorp.nl
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.4
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace RadioCorp\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use RadioCorp\ApiException;
use RadioCorp\Configuration;
use RadioCorp\HeaderSelector;
use RadioCorp\ObjectSerializer;

/**
 * ReplayApi Class Doc Comment
 *
 * @category Class
 * @package  RadioCorp
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ReplayApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation replayDailyGet
     *
     * Get Replay shows and their replay items for a specific day, we deliver replay for only the last 7 days.
     *
     * @param  string $date Date to get replay for (optional)
     *
     * @throws \RadioCorp\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \RadioCorp\Model\ReplayDaily
     */
    public function replayDailyGet($date = null)
    {
        list($response) = $this->replayDailyGetWithHttpInfo($date);
        return $response;
    }

    /**
     * Operation replayDailyGetWithHttpInfo
     *
     * Get Replay shows and their replay items for a specific day, we deliver replay for only the last 7 days.
     *
     * @param  string $date Date to get replay for (optional)
     *
     * @throws \RadioCorp\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \RadioCorp\Model\ReplayDaily, HTTP status code, HTTP response headers (array of strings)
     */
    public function replayDailyGetWithHttpInfo($date = null)
    {
        $request = $this->replayDailyGetRequest($date);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            switch($statusCode) {
                case 200:
                    if ('\RadioCorp\Model\ReplayDaily' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\RadioCorp\Model\ReplayDaily', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\RadioCorp\Model\ReplayDaily';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\RadioCorp\Model\ReplayDaily',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation replayDailyGetAsync
     *
     * Get Replay shows and their replay items for a specific day, we deliver replay for only the last 7 days.
     *
     * @param  string $date Date to get replay for (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function replayDailyGetAsync($date = null)
    {
        return $this->replayDailyGetAsyncWithHttpInfo($date)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation replayDailyGetAsyncWithHttpInfo
     *
     * Get Replay shows and their replay items for a specific day, we deliver replay for only the last 7 days.
     *
     * @param  string $date Date to get replay for (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function replayDailyGetAsyncWithHttpInfo($date = null)
    {
        $returnType = '\RadioCorp\Model\ReplayDaily';
        $request = $this->replayDailyGetRequest($date);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'replayDailyGet'
     *
     * @param  string $date Date to get replay for (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function replayDailyGetRequest($date = null)
    {

        $resourcePath = '/Replay/Daily';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($date !== null) {
            $queryParams['date'] = ObjectSerializer::toQueryValue($date);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($_tempBody));
            } else {
                $httpBody = $_tempBody;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('X-Api-Key');
        if ($apiKey !== null) {
            $headers['X-Api-Key'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation replayProgrammGet
     *
     * Get all replay items for a programm.
     *
     * @param  int $programm_id Programm ID of the show (optional)
     *
     * @throws \RadioCorp\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \RadioCorp\Model\ReplayProgramm
     */
    public function replayProgrammGet($programm_id = null)
    {
        list($response) = $this->replayProgrammGetWithHttpInfo($programm_id);
        return $response;
    }

    /**
     * Operation replayProgrammGetWithHttpInfo
     *
     * Get all replay items for a programm.
     *
     * @param  int $programm_id Programm ID of the show (optional)
     *
     * @throws \RadioCorp\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \RadioCorp\Model\ReplayProgramm, HTTP status code, HTTP response headers (array of strings)
     */
    public function replayProgrammGetWithHttpInfo($programm_id = null)
    {
        $request = $this->replayProgrammGetRequest($programm_id);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            switch($statusCode) {
                case 200:
                    if ('\RadioCorp\Model\ReplayProgramm' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\RadioCorp\Model\ReplayProgramm', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\RadioCorp\Model\ReplayProgramm';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\RadioCorp\Model\ReplayProgramm',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation replayProgrammGetAsync
     *
     * Get all replay items for a programm.
     *
     * @param  int $programm_id Programm ID of the show (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function replayProgrammGetAsync($programm_id = null)
    {
        return $this->replayProgrammGetAsyncWithHttpInfo($programm_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation replayProgrammGetAsyncWithHttpInfo
     *
     * Get all replay items for a programm.
     *
     * @param  int $programm_id Programm ID of the show (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function replayProgrammGetAsyncWithHttpInfo($programm_id = null)
    {
        $returnType = '\RadioCorp\Model\ReplayProgramm';
        $request = $this->replayProgrammGetRequest($programm_id);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'replayProgrammGet'
     *
     * @param  int $programm_id Programm ID of the show (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function replayProgrammGetRequest($programm_id = null)
    {

        $resourcePath = '/Replay/Programm';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($programm_id !== null) {
            $queryParams['programm_id'] = ObjectSerializer::toQueryValue($programm_id);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($_tempBody));
            } else {
                $httpBody = $_tempBody;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('X-Api-Key');
        if ($apiKey !== null) {
            $headers['X-Api-Key'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
