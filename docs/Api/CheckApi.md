# LivewatchApi\CheckApi

All URIs are relative to https://www.livewatch.de.

Method | HTTP request | Description
------------- | ------------- | -------------
[**checkDetails()**](CheckApi.md#checkDetails) | **GET** /api/check/details/{uuid} | Get details of one check
[**checkEventsByDate()**](CheckApi.md#checkEventsByDate) | **POST** /api/check/check/events/{uuid} | Get events of one check by date
[**checkHistory()**](CheckApi.md#checkHistory) | **GET** /api/check/latest/{uuid} | Get history of one check
[**checkList()**](CheckApi.md#checkList) | **GET** /api/check/list/{page} | List all your checks configured
[**checkReport()**](CheckApi.md#checkReport) | **GET** /api/check/report/{uuid} | Get report of one check
[**checksByTag()**](CheckApi.md#checksByTag) | **POST** /api/check/checks/tag | Get report of one check
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

## `checkEventsByDate()`

```php
checkEventsByDate($date, $uuid): \LivewatchApi\Model\CheckEvent[]
```

Get events of one check by date

Retrieve events by check and day

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
$date = 'date_example'; // string | Date to get events for
$uuid = 'uuid_example'; // string

try {
    $result = $apiInstance->checkEventsByDate($date, $uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckApi->checkEventsByDate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **date** | **string**| Date to get events for |
 **uuid** | **string**|  |

### Return type

[**\LivewatchApi\Model\CheckEvent[]**](../Model/CheckEvent.md)

### Authorization

[LivewatchToken](../../README.md#LivewatchToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `checkHistory()`

```php
checkHistory($uuid): \LivewatchApi\Model\CheckHistory
```

Get history of one check

Retrieve latest check history about one check - limit to 50 entries

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
    $result = $apiInstance->checkHistory($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckApi->checkHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**|  |

### Return type

[**\LivewatchApi\Model\CheckHistory**](../Model/CheckHistory.md)

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

## `checksByTag()`

```php
checksByTag($tags, $stat_days): \LivewatchApi\Model\Check[]
```

Get report of one check

Retrieve checks by tag

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
$tags = 'tags_example'; // string | Comma seperated tags to search for
$stat_days = 7; // Int | History range in days

try {
    $result = $apiInstance->checksByTag($tags, $stat_days);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckApi->checksByTag: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tags** | **string**| Comma seperated tags to search for |
 **stat_days** | [**Int**](../Model/.md)| History range in days | [optional]

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
