<?php
/**
 * UserApi
 * PHP version 7.3
 *
 * @category Class
 * @package  LivewatchApi
 * @author   Livewatch.de
 * @link     https://www.livewatch.de
 */

/**
 * Livewatch API
 *
 * Livewatch Server Monitoring API
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://www.livewatch.de
 * OpenAPI Generator version: 6.0.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://www.livewatch.de).
 * https://www.livewatch.de
 * Do not edit the class manually.
 */

namespace LivewatchApi\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use LivewatchApi\ApiException;
use LivewatchApi\Configuration;
use LivewatchApi\HeaderSelector;
use LivewatchApi\ObjectSerializer;

/**
 * UserApi Class Doc Comment
 *
 * @category Class
 * @package  LivewatchApi
 * @author   Livewatch.de
 * @link     https://www.livewatch.de
 */
class UserApi
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
     * @var int Host index
     */
    protected $hostIndex;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation apiTokenDetails
     *
     * Get your API-Token
     *
     * @param  string $username username (required)
     * @param  string $password password (required)
     *
     * @throws \LivewatchApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \LivewatchApi\Model\ApiToken
     */
    public function apiTokenDetails($username, $password)
    {
        list($response) = $this->apiTokenDetailsWithHttpInfo($username, $password);
        return $response;
    }

    /**
     * Operation apiTokenDetailsWithHttpInfo
     *
     * Get your API-Token
     *
     * @param  string $username (required)
     * @param  string $password (required)
     *
     * @throws \LivewatchApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \LivewatchApi\Model\ApiToken, HTTP status code, HTTP response headers (array of strings)
     */
    public function apiTokenDetailsWithHttpInfo($username, $password)
    {
        $request = $this->apiTokenDetailsRequest($username, $password);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\LivewatchApi\Model\ApiToken' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\LivewatchApi\Model\ApiToken', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\LivewatchApi\Model\ApiToken';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
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
                        '\LivewatchApi\Model\ApiToken',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation apiTokenDetailsAsync
     *
     * Get your API-Token
     *
     * @param  string $username (required)
     * @param  string $password (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiTokenDetailsAsync($username, $password)
    {
        return $this->apiTokenDetailsAsyncWithHttpInfo($username, $password)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation apiTokenDetailsAsyncWithHttpInfo
     *
     * Get your API-Token
     *
     * @param  string $username (required)
     * @param  string $password (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiTokenDetailsAsyncWithHttpInfo($username, $password)
    {
        $returnType = '\LivewatchApi\Model\ApiToken';
        $request = $this->apiTokenDetailsRequest($username, $password);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
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
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'apiTokenDetails'
     *
     * @param  string $username (required)
     * @param  string $password (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function apiTokenDetailsRequest($username, $password)
    {
        // verify the required parameter 'username' is set
        if ($username === null || (is_array($username) && count($username) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $username when calling apiTokenDetails'
            );
        }
        // verify the required parameter 'password' is set
        if ($password === null || (is_array($password) && count($password) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $password when calling apiTokenDetails'
            );
        }

        $resourcePath = '/api/user/token';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;




        // form params
        if ($username !== null) {
            $formParams['username'] = ObjectSerializer::toFormValue($username);
        }
        // form params
        if ($password !== null) {
            $formParams['password'] = ObjectSerializer::toFormValue($password);
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['multipart/form-data']
            );
        }

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
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
        $apiKey = $this->config->getApiKeyWithPrefix('auth-livewatch-token');
        if ($apiKey !== null) {
            $headers['auth-livewatch-token'] = $apiKey;
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
            'POST',
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
