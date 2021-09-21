<?php
declare(strict_types=1);

namespace LivewatchApi;

use Articus\DataTransfer as DT;
use OpenAPIGenerator\APIClient as OAGAC;
use Psr\Http\Client\ClientExceptionInterface;
use Psr\Http\Message\ResponseInterface;

/**
 * Livewatch API
 * Livewatch Server Monitoring API
 * The version of the OpenAPI document: 1.0.0
 */
class ApiClient extends OAGAC\AbstractApiClient
{
    //region accountDetails
    /**
     * Get Account details
     * @param iterable|string[][] $security
     * @param string $responseMediaType
     * @return ResponseInterface
     * @throws ClientExceptionInterface
     * @throws DT\Exception\InvalidData
     */
    public function accountDetailsRaw(
        iterable $security = ['LivewatchToken' => []],
        string $responseMediaType = 'application/json'
    ): ResponseInterface
    {
        $request = $this->createRequest('GET', '/api/account', [], []);
        $request = $this->addAcceptHeader($request, $responseMediaType);
        $request = $this->addSecurity($request, $security);
        return $this->httpClient->sendRequest($request);
    }

    /**
     * Get Account details
     * @param iterable|string[][] $security
     * @param string $responseMediaType
     * @return array
     * @throws ClientExceptionInterface
     * @throws DT\Exception\InvalidData
     * @throws OAGAC\Exception\InvalidResponseBodySchema
     */
    public function accountDetails(
        iterable $security = ['LivewatchToken' => []],
        string $responseMediaType = 'application/json'
    ): array
    {
        $response = $this->accountDetailsRaw($security, $responseMediaType);
        $responseContent = null;
        switch ($response->getStatusCode())
        {
            case 200:
                /* Returns your account data */
                $responseContent = new \LivewatchApi\DTO\Account();
                break;
        }
        $this->parseBody($response, $responseContent);
        return [$responseContent, $response->getHeaders(), $response->getStatusCode(), $response->getReasonPhrase()];
    }

    /**
     * Get Account details
     * @param iterable|string[][] $security
     * @param string $responseMediaType
     * @return \LivewatchApi\DTO\Account
     * @throws ClientExceptionInterface
     * @throws DT\Exception\InvalidData
     * @throws OAGAC\Exception\InvalidResponseBodySchema
     * @throws OAGAC\Exception\UnsuccessfulResponse
     */
    public function accountDetailsResult(
        iterable $security = ['LivewatchToken' => []],
        string $responseMediaType = 'application/json'
    ): \LivewatchApi\DTO\Account
    {
        return $this->getSuccessfulContent(...$this->accountDetails($security, $responseMediaType));
    }
    //endregion

    //region apiTokenDetails
    /**
     * Get your API-Token
     * @param \LivewatchApi\DTO\UserLogin $requestContent
     * @param iterable|string[][] $security
     * @param string $requestMediaType
     * @param string $responseMediaType
     * @return ResponseInterface
     * @throws ClientExceptionInterface
     * @throws DT\Exception\InvalidData
     */
    public function apiTokenDetailsRaw(
        \LivewatchApi\DTO\UserLogin $requestContent,
        iterable $security = ['LivewatchToken' => []],
        string $requestMediaType = 'multipart/form-data',
        string $responseMediaType = 'application/json'
    ): ResponseInterface
    {
        $request = $this->createRequest('POST', '/api/user/token', [], []);
        $request = $this->addBody($request, $requestMediaType, $requestContent);
        $request = $this->addAcceptHeader($request, $responseMediaType);
        $request = $this->addSecurity($request, $security);
        return $this->httpClient->sendRequest($request);
    }

    /**
     * Get your API-Token
     * @param \LivewatchApi\DTO\UserLogin $requestContent
     * @param iterable|string[][] $security
     * @param string $requestMediaType
     * @param string $responseMediaType
     * @return array
     * @throws ClientExceptionInterface
     * @throws DT\Exception\InvalidData
     * @throws OAGAC\Exception\InvalidResponseBodySchema
     */
    public function apiTokenDetails(
        \LivewatchApi\DTO\UserLogin $requestContent,
        iterable $security = ['LivewatchToken' => []],
        string $requestMediaType = 'multipart/form-data',
        string $responseMediaType = 'application/json'
    ): array
    {
        $response = $this->apiTokenDetailsRaw($requestContent, $security, $requestMediaType, $responseMediaType);
        $responseContent = null;
        switch ($response->getStatusCode())
        {
            case 200:
                /* Returns your account token */
                $responseContent = new \LivewatchApi\DTO\ApiToken();
                break;
        }
        $this->parseBody($response, $responseContent);
        return [$responseContent, $response->getHeaders(), $response->getStatusCode(), $response->getReasonPhrase()];
    }

    /**
     * Get your API-Token
     * @param \LivewatchApi\DTO\UserLogin $requestContent
     * @param iterable|string[][] $security
     * @param string $requestMediaType
     * @param string $responseMediaType
     * @return \LivewatchApi\DTO\ApiToken
     * @throws ClientExceptionInterface
     * @throws DT\Exception\InvalidData
     * @throws OAGAC\Exception\InvalidResponseBodySchema
     * @throws OAGAC\Exception\UnsuccessfulResponse
     */
    public function apiTokenDetailsResult(
        \LivewatchApi\DTO\UserLogin $requestContent,
        iterable $security = ['LivewatchToken' => []],
        string $requestMediaType = 'multipart/form-data',
        string $responseMediaType = 'application/json'
    ): \LivewatchApi\DTO\ApiToken
    {
        return $this->getSuccessfulContent(...$this->apiTokenDetails($requestContent, $security, $requestMediaType, $responseMediaType));
    }
    //endregion

    //region checkDetails
    /**
     * Get details of one check
     * @param \LivewatchApi\DTO\CheckDetailsParameterData $parameters
     * @param iterable|string[][] $security
     * @param string $responseMediaType
     * @return ResponseInterface
     * @throws ClientExceptionInterface
     * @throws DT\Exception\InvalidData
     */
    public function checkDetailsRaw(
        \LivewatchApi\DTO\CheckDetailsParameterData $parameters,
        iterable $security = ['LivewatchToken' => []],
        string $responseMediaType = 'application/json'
    ): ResponseInterface
    {
        $request = $this->createRequest('GET', '/api/check/details/{uuid}', $this->getPathParameters($parameters), []);
        $request = $this->addAcceptHeader($request, $responseMediaType);
        $request = $this->addSecurity($request, $security);
        return $this->httpClient->sendRequest($request);
    }

    /**
     * Get details of one check
     * @param \LivewatchApi\DTO\CheckDetailsParameterData $parameters
     * @param iterable|string[][] $security
     * @param string $responseMediaType
     * @return array
     * @throws ClientExceptionInterface
     * @throws DT\Exception\InvalidData
     * @throws OAGAC\Exception\InvalidResponseBodySchema
     */
    public function checkDetails(
        \LivewatchApi\DTO\CheckDetailsParameterData $parameters,
        iterable $security = ['LivewatchToken' => []],
        string $responseMediaType = 'application/json'
    ): array
    {
        $response = $this->checkDetailsRaw($parameters, $security, $responseMediaType);
        $responseContent = null;
        switch ($response->getStatusCode())
        {
            case 200:
                /* Returns your check details data */
                $responseContent = new \LivewatchApi\DTO\Check();
                break;
        }
        $this->parseBody($response, $responseContent);
        return [$responseContent, $response->getHeaders(), $response->getStatusCode(), $response->getReasonPhrase()];
    }

    /**
     * Get details of one check
     * @param \LivewatchApi\DTO\CheckDetailsParameterData $parameters
     * @param iterable|string[][] $security
     * @param string $responseMediaType
     * @return \LivewatchApi\DTO\Check
     * @throws ClientExceptionInterface
     * @throws DT\Exception\InvalidData
     * @throws OAGAC\Exception\InvalidResponseBodySchema
     * @throws OAGAC\Exception\UnsuccessfulResponse
     */
    public function checkDetailsResult(
        \LivewatchApi\DTO\CheckDetailsParameterData $parameters,
        iterable $security = ['LivewatchToken' => []],
        string $responseMediaType = 'application/json'
    ): \LivewatchApi\DTO\Check
    {
        return $this->getSuccessfulContent(...$this->checkDetails($parameters, $security, $responseMediaType));
    }
    //endregion

    //region checkList
    /**
     * List all your checks configured
     * @param \LivewatchApi\DTO\CheckListParameterData $parameters
     * @param iterable|string[][] $security
     * @param string $responseMediaType
     * @return ResponseInterface
     * @throws ClientExceptionInterface
     * @throws DT\Exception\InvalidData
     */
    public function checkListRaw(
        \LivewatchApi\DTO\CheckListParameterData $parameters,
        iterable $security = ['LivewatchToken' => []],
        string $responseMediaType = 'application/json'
    ): ResponseInterface
    {
        $request = $this->createRequest('GET', '/api/check/list/{page}', $this->getPathParameters($parameters), []);
        $request = $this->addAcceptHeader($request, $responseMediaType);
        $request = $this->addSecurity($request, $security);
        return $this->httpClient->sendRequest($request);
    }

    /**
     * List all your checks configured
     * @param \LivewatchApi\DTO\CheckListParameterData $parameters
     * @param iterable|string[][] $security
     * @param string $responseMediaType
     * @return array
     * @throws ClientExceptionInterface
     * @throws DT\Exception\InvalidData
     * @throws OAGAC\Exception\InvalidResponseBodySchema
     */
    public function checkList(
        \LivewatchApi\DTO\CheckListParameterData $parameters,
        iterable $security = ['LivewatchToken' => []],
        string $responseMediaType = 'application/json'
    ): array
    {
        $response = $this->checkListRaw($parameters, $security, $responseMediaType);
        $responseContent = null;
        switch ($response->getStatusCode())
        {
            case 200:
                /* List of checks */
                $responseContent = new \LivewatchApi\DTO\Collection1();
                break;
        }
        $this->parseBody($response, $responseContent);
        return [$responseContent, $response->getHeaders(), $response->getStatusCode(), $response->getReasonPhrase()];
    }

    /**
     * List all your checks configured
     * @param \LivewatchApi\DTO\CheckListParameterData $parameters
     * @param iterable|string[][] $security
     * @param string $responseMediaType
     * @return \LivewatchApi\DTO\Collection1
     * @throws ClientExceptionInterface
     * @throws DT\Exception\InvalidData
     * @throws OAGAC\Exception\InvalidResponseBodySchema
     * @throws OAGAC\Exception\UnsuccessfulResponse
     */
    public function checkListResult(
        \LivewatchApi\DTO\CheckListParameterData $parameters,
        iterable $security = ['LivewatchToken' => []],
        string $responseMediaType = 'application/json'
    ): \LivewatchApi\DTO\Collection1
    {
        return $this->getSuccessfulContent(...$this->checkList($parameters, $security, $responseMediaType));
    }
    //endregion

    //region checkReport
    /**
     * Get report of one check
     * @param \LivewatchApi\DTO\CheckReportParameterData $parameters
     * @param iterable|string[][] $security
     * @param string $responseMediaType
     * @return ResponseInterface
     * @throws ClientExceptionInterface
     * @throws DT\Exception\InvalidData
     */
    public function checkReportRaw(
        \LivewatchApi\DTO\CheckReportParameterData $parameters,
        iterable $security = ['LivewatchToken' => []],
        string $responseMediaType = 'application/json'
    ): ResponseInterface
    {
        $request = $this->createRequest('GET', '/api/check/report/{uuid}', $this->getPathParameters($parameters), []);
        $request = $this->addAcceptHeader($request, $responseMediaType);
        $request = $this->addSecurity($request, $security);
        return $this->httpClient->sendRequest($request);
    }

    /**
     * Get report of one check
     * @param \LivewatchApi\DTO\CheckReportParameterData $parameters
     * @param iterable|string[][] $security
     * @param string $responseMediaType
     * @return array
     * @throws ClientExceptionInterface
     * @throws DT\Exception\InvalidData
     * @throws OAGAC\Exception\InvalidResponseBodySchema
     */
    public function checkReport(
        \LivewatchApi\DTO\CheckReportParameterData $parameters,
        iterable $security = ['LivewatchToken' => []],
        string $responseMediaType = 'application/json'
    ): array
    {
        $response = $this->checkReportRaw($parameters, $security, $responseMediaType);
        $responseContent = null;
        switch ($response->getStatusCode())
        {
            case 200:
                /* Returns some short reporting about a check */
                $responseContent = new \LivewatchApi\DTO\Collection2();
                break;
        }
        $this->parseBody($response, $responseContent);
        return [$responseContent, $response->getHeaders(), $response->getStatusCode(), $response->getReasonPhrase()];
    }

    /**
     * Get report of one check
     * @param \LivewatchApi\DTO\CheckReportParameterData $parameters
     * @param iterable|string[][] $security
     * @param string $responseMediaType
     * @return \LivewatchApi\DTO\Collection2
     * @throws ClientExceptionInterface
     * @throws DT\Exception\InvalidData
     * @throws OAGAC\Exception\InvalidResponseBodySchema
     * @throws OAGAC\Exception\UnsuccessfulResponse
     */
    public function checkReportResult(
        \LivewatchApi\DTO\CheckReportParameterData $parameters,
        iterable $security = ['LivewatchToken' => []],
        string $responseMediaType = 'application/json'
    ): \LivewatchApi\DTO\Collection2
    {
        return $this->getSuccessfulContent(...$this->checkReport($parameters, $security, $responseMediaType));
    }
    //endregion

    //region checksByTag
    /**
     * Get report of one check
     * @param \LivewatchApi\DTO\ChecksByTagParameterData $parameters
     * @param iterable|string[][] $security
     * @param string $responseMediaType
     * @return ResponseInterface
     * @throws ClientExceptionInterface
     * @throws DT\Exception\InvalidData
     */
    public function checksByTagRaw(
        \LivewatchApi\DTO\ChecksByTagParameterData $parameters,
        iterable $security = ['LivewatchToken' => []],
        string $responseMediaType = 'application/json'
    ): ResponseInterface
    {
        $request = $this->createRequest('POST', '/api/check/checks/tag', [], $this->getQueryParameters($parameters));
        $request = $this->addAcceptHeader($request, $responseMediaType);
        $request = $this->addSecurity($request, $security);
        return $this->httpClient->sendRequest($request);
    }

    /**
     * Get report of one check
     * @param \LivewatchApi\DTO\ChecksByTagParameterData $parameters
     * @param iterable|string[][] $security
     * @param string $responseMediaType
     * @return array
     * @throws ClientExceptionInterface
     * @throws DT\Exception\InvalidData
     * @throws OAGAC\Exception\InvalidResponseBodySchema
     */
    public function checksByTag(
        \LivewatchApi\DTO\ChecksByTagParameterData $parameters,
        iterable $security = ['LivewatchToken' => []],
        string $responseMediaType = 'application/json'
    ): array
    {
        $response = $this->checksByTagRaw($parameters, $security, $responseMediaType);
        $responseContent = null;
        switch ($response->getStatusCode())
        {
            case 200:
                /* Returns checks found by tag */
                $responseContent = new \LivewatchApi\DTO\Collection4();
                break;
        }
        $this->parseBody($response, $responseContent);
        return [$responseContent, $response->getHeaders(), $response->getStatusCode(), $response->getReasonPhrase()];
    }

    /**
     * Get report of one check
     * @param \LivewatchApi\DTO\ChecksByTagParameterData $parameters
     * @param iterable|string[][] $security
     * @param string $responseMediaType
     * @return \LivewatchApi\DTO\Collection4
     * @throws ClientExceptionInterface
     * @throws DT\Exception\InvalidData
     * @throws OAGAC\Exception\InvalidResponseBodySchema
     * @throws OAGAC\Exception\UnsuccessfulResponse
     */
    public function checksByTagResult(
        \LivewatchApi\DTO\ChecksByTagParameterData $parameters,
        iterable $security = ['LivewatchToken' => []],
        string $responseMediaType = 'application/json'
    ): \LivewatchApi\DTO\Collection4
    {
        return $this->getSuccessfulContent(...$this->checksByTag($parameters, $security, $responseMediaType));
    }
    //endregion

    //region listMonitoringIPs
    /**
     * List all our IPs with details
     * @param iterable|string[][] $security
     * @param string $responseMediaType
     * @return ResponseInterface
     * @throws ClientExceptionInterface
     * @throws DT\Exception\InvalidData
     */
    public function listMonitoringIPsRaw(
        iterable $security = ['LivewatchToken' => []],
        string $responseMediaType = 'application/json'
    ): ResponseInterface
    {
        $request = $this->createRequest('GET', '/api/general/listMonitoringIPs', [], []);
        $request = $this->addAcceptHeader($request, $responseMediaType);
        $request = $this->addSecurity($request, $security);
        return $this->httpClient->sendRequest($request);
    }

    /**
     * List all our IPs with details
     * @param iterable|string[][] $security
     * @param string $responseMediaType
     * @return array
     * @throws ClientExceptionInterface
     * @throws DT\Exception\InvalidData
     * @throws OAGAC\Exception\InvalidResponseBodySchema
     */
    public function listMonitoringIPs(
        iterable $security = ['LivewatchToken' => []],
        string $responseMediaType = 'application/json'
    ): array
    {
        $response = $this->listMonitoringIPsRaw($security, $responseMediaType);
        $responseContent = null;
        switch ($response->getStatusCode())
        {
            case 200:
                /* List of monitoring IPs */
                $responseContent = new \LivewatchApi\DTO\Collection7();
                break;
        }
        $this->parseBody($response, $responseContent);
        return [$responseContent, $response->getHeaders(), $response->getStatusCode(), $response->getReasonPhrase()];
    }

    /**
     * List all our IPs with details
     * @param iterable|string[][] $security
     * @param string $responseMediaType
     * @return \LivewatchApi\DTO\Collection7
     * @throws ClientExceptionInterface
     * @throws DT\Exception\InvalidData
     * @throws OAGAC\Exception\InvalidResponseBodySchema
     * @throws OAGAC\Exception\UnsuccessfulResponse
     */
    public function listMonitoringIPsResult(
        iterable $security = ['LivewatchToken' => []],
        string $responseMediaType = 'application/json'
    ): \LivewatchApi\DTO\Collection7
    {
        return $this->getSuccessfulContent(...$this->listMonitoringIPs($security, $responseMediaType));
    }
    //endregion

    //region setCheckState
    /**
     * Enable or disable a check
     * @param \LivewatchApi\DTO\SetCheckStateParameterData $parameters
     * @param iterable|string[][] $security
     * @param string $responseMediaType
     * @return ResponseInterface
     * @throws ClientExceptionInterface
     * @throws DT\Exception\InvalidData
     */
    public function setCheckStateRaw(
        \LivewatchApi\DTO\SetCheckStateParameterData $parameters,
        iterable $security = ['LivewatchToken' => []],
        string $responseMediaType = 'application/json'
    ): ResponseInterface
    {
        $request = $this->createRequest('POST', '/api/check/enable/{uuid}/{state}', $this->getPathParameters($parameters), []);
        $request = $this->addAcceptHeader($request, $responseMediaType);
        $request = $this->addSecurity($request, $security);
        return $this->httpClient->sendRequest($request);
    }

    /**
     * Enable or disable a check
     * @param \LivewatchApi\DTO\SetCheckStateParameterData $parameters
     * @param iterable|string[][] $security
     * @param string $responseMediaType
     * @return array
     * @throws ClientExceptionInterface
     * @throws DT\Exception\InvalidData
     * @throws OAGAC\Exception\InvalidResponseBodySchema
     */
    public function setCheckState(
        \LivewatchApi\DTO\SetCheckStateParameterData $parameters,
        iterable $security = ['LivewatchToken' => []],
        string $responseMediaType = 'application/json'
    ): array
    {
        $response = $this->setCheckStateRaw($parameters, $security, $responseMediaType);
        $responseContent = null;
        switch ($response->getStatusCode())
        {
            case 200:
                /* Returns your account data */
                $responseContent = new \LivewatchApi\DTO\Check();
                break;
        }
        $this->parseBody($response, $responseContent);
        return [$responseContent, $response->getHeaders(), $response->getStatusCode(), $response->getReasonPhrase()];
    }

    /**
     * Enable or disable a check
     * @param \LivewatchApi\DTO\SetCheckStateParameterData $parameters
     * @param iterable|string[][] $security
     * @param string $responseMediaType
     * @return \LivewatchApi\DTO\Check
     * @throws ClientExceptionInterface
     * @throws DT\Exception\InvalidData
     * @throws OAGAC\Exception\InvalidResponseBodySchema
     * @throws OAGAC\Exception\UnsuccessfulResponse
     */
    public function setCheckStateResult(
        \LivewatchApi\DTO\SetCheckStateParameterData $parameters,
        iterable $security = ['LivewatchToken' => []],
        string $responseMediaType = 'application/json'
    ): \LivewatchApi\DTO\Check
    {
        return $this->getSuccessfulContent(...$this->setCheckState($parameters, $security, $responseMediaType));
    }
    //endregion
}

