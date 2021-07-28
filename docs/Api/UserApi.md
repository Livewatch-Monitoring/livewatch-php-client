# LivewatchApi\UserApi

All URIs are relative to https://www.livewatch.de.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiTokenDetails()**](UserApi.md#apiTokenDetails) | **POST** /api/user/token | Get your API-Token


## `apiTokenDetails()`

```php
apiTokenDetails($username, $password): \LivewatchApi\Model\ApiToken
```

Get your API-Token

Provide your access credentials and return api token

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: LivewatchToken
$config = LivewatchApi\Configuration::getDefaultConfiguration()->setApiKey('auth-livewatch-token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = LivewatchApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('auth-livewatch-token', 'Bearer');


$apiInstance = new LivewatchApi\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$username = 'username_example'; // string
$password = 'password_example'; // string

try {
    $result = $apiInstance->apiTokenDetails($username, $password);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->apiTokenDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **username** | **string**|  |
 **password** | **string**|  |

### Return type

[**\LivewatchApi\Model\ApiToken**](../Model/ApiToken.md)

### Authorization

[LivewatchToken](../../README.md#LivewatchToken)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
