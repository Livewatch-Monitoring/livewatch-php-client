# LivewatchApi

Livewatch Server Monitoring API

For more information, please visit [https://www.livewatch.de](https://www.livewatch.de).

[![Livewatch Server Monitoring](assets/logo.png)](https://www.livewatch.de)

## Installation & Usage

### Requirements

PHP 7.3 and later.
Should also work with PHP 8.0 but has not been tested.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/livewatch-monitoring/livewatch-php-client.git"
    }
  ],
  "require": {
    "livewatch-monitoring/livewatch-php-client": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/LivewatchApi/vendor/autoload.php');
```

## Getting Started

### Register your free account

To receive an API-Token, register a free account at https://www.livewatch.de
After registration you will find your personal API token at https://www.livewatch.de/profile

### First steps

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure API key authorization: LivewatchToken
$config = LivewatchApi\Configuration::getDefaultConfiguration()->setApiKey('auth-livewatch-token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = LivewatchApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('auth-livewatch-token', 'Bearer');


$apiInstance = new LivewatchApi\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->accountDetails();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->accountDetails: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://www.livewatch.de*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AccountApi* | [**accountDetails**](docs/Api/AccountApi.md#accountdetails) | **GET** /api/account | Get Account details
*CheckApi* | [**checkDetails**](docs/Api/CheckApi.md#checkdetails) | **GET** /api/check/details/{uuid} | Get details of one check
*CheckApi* | [**checkList**](docs/Api/CheckApi.md#checklist) | **GET** /api/check/list/{page} | List all your checks configured
*CheckApi* | [**setCheckState**](docs/Api/CheckApi.md#setcheckstate) | **POST** /api/check/enable/{uuid}/{state} | Enable or disable a check
*GeneralApi* | [**listMonitoringIPs**](docs/Api/GeneralApi.md#listmonitoringips) | **GET** /api/general/listMonitoringIPs | List all our IPs with details
*UserApi* | [**apiTokenDetails**](docs/Api/UserApi.md#apitokendetails) | **POST** /api/user/token | Get your API-Token

## Models

- [Account](docs/Model/Account.md)
- [ApiToken](docs/Model/ApiToken.md)
- [Check](docs/Model/Check.md)
- [MonitoringIp](docs/Model/MonitoringIp.md)

## Authorization

### LivewatchToken

- **Type**: API key
- **API key parameter name**: auth-livewatch-token
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

- API version: `1.0.0`
    - Package version: `1.0.3`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
