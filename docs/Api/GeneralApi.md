# LivewatchApi\GeneralApi

All URIs are relative to https://www.livewatch.de.

Method | HTTP request | Description
------------- | ------------- | -------------
[**listMonitoringIPs()**](GeneralApi.md#listMonitoringIPs) | **GET** /api/general/listMonitoringIPs | List all our IPs with details


## `listMonitoringIPs()`

```php
listMonitoringIPs(): \LivewatchApi\Model\MonitoringIp[]
```

List all our IPs with details

Retrieve a list of all IPs (satellite systems) used by Livewatch

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: LivewatchToken
$config = LivewatchApi\Configuration::getDefaultConfiguration()->setApiKey('auth-livewatch-token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = LivewatchApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('auth-livewatch-token', 'Bearer');


$apiInstance = new LivewatchApi\Api\GeneralApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listMonitoringIPs();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralApi->listMonitoringIPs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\LivewatchApi\Model\MonitoringIp[]**](../Model/MonitoringIp.md)

### Authorization

[LivewatchToken](../../README.md#LivewatchToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
