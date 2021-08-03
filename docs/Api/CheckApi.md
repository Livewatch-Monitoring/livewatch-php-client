# LivewatchApi\CheckApi

All URIs are relative to https://www.livewatch.de.

Method | HTTP request | Description
------------- | ------------- | -------------
[**checkDetails()**](CheckApi.md#checkDetails) | **GET** /api/check/details/{uuid} | Get details of one check
[**checkList()**](CheckApi.md#checkList) | **GET** /api/check/list/{page} | List all your checks configured
[**checkReport()**](CheckApi.md#checkReport) | **GET** /api/check/report/{uuid} | Get report of one check
[**setCheckState()**](CheckApi.md#setCheckState) | **POST** /api/check/enable/{uuid}/{state} | Enable or disable a check


## `checkDetails()`

```php
checkDetails($uuid): \LivewatchApi\Model\Check
```

Get details of one check

Retrieve information about one check

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: LivewatchToken
$config = LivewatchApi\Configuration::getDefaultConfiguration()->setApiKey('auth-livewatch-token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = LivewatchApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('auth-livewatch-token', 'Bearer');


$apiInstance = new LivewatchApi\Api\CheckApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string

try {
    $result = $apiInstance->checkDetails($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckApi->checkDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**|  |

### Return type

[**\LivewatchApi\Model\Check**](../Model/Check.md)

### Authorization

[LivewatchToken](../../README.md#LivewatchToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `checkList()`

```php
checkList($page): \LivewatchApi\Model\Check[]
```

List all your checks configured

Retrieve a list of all checks assigned to your account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: LivewatchToken
$config = LivewatchApi\Configuration::getDefaultConfiguration()->setApiKey('auth-livewatch-token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = LivewatchApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('auth-livewatch-token', 'Bearer');


$apiInstance = new LivewatchApi\Api\CheckApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 'page_example'; // string

try {
    $result = $apiInstance->checkList($page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckApi->checkList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **string**|  |

### Return type

[**\LivewatchApi\Model\Check[]**](../Model/Check.md)

### Authorization

[LivewatchToken](../../README.md#LivewatchToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `checkReport()`

```php
checkReport($uuid): \LivewatchApi\Model\CheckStats[]
```

Get report of one check

Retrieve reporting information about one check

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: LivewatchToken
$config = LivewatchApi\Configuration::getDefaultConfiguration()->setApiKey('auth-livewatch-token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = LivewatchApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('auth-livewatch-token', 'Bearer');


$apiInstance = new LivewatchApi\Api\CheckApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string

try {
    $result = $apiInstance->checkReport($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckApi->checkReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**|  |

### Return type

[**\LivewatchApi\Model\CheckStats[]**](../Model/CheckStats.md)

### Authorization

[LivewatchToken](../../README.md#LivewatchToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setCheckState()`

```php
setCheckState($state, $uuid): \LivewatchApi\Model\Check
```

Enable or disable a check

Enable or disable a check by uuid

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: LivewatchToken
$config = LivewatchApi\Configuration::getDefaultConfiguration()->setApiKey('auth-livewatch-token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = LivewatchApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('auth-livewatch-token', 'Bearer');


$apiInstance = new LivewatchApi\Api\CheckApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$state = True; // bool
$uuid = 'uuid_example'; // string

try {
    $result = $apiInstance->setCheckState($state, $uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckApi->setCheckState: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **state** | **bool**|  |
 **uuid** | **string**|  |

### Return type

[**\LivewatchApi\Model\Check**](../Model/Check.md)

### Authorization

[LivewatchToken](../../README.md#LivewatchToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
