# FlowHunt\ObservabilityDriverApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**activateLangfuseObservabilityDriver()**](ObservabilityDriverApi.md#activateLangfuseObservabilityDriver) | **POST** /v2/observability_driver/langfuse | Activate Langfuse Observability Driver |
| [**deleteObservabilityDriver()**](ObservabilityDriverApi.md#deleteObservabilityDriver) | **DELETE** /v2/observability_driver/{driver_type} | Delete Observability Driver |
| [**getObservabilityDriver()**](ObservabilityDriverApi.md#getObservabilityDriver) | **GET** /v2/observability_driver/{driver_type} | Get Observability Driver |
| [**getObservabilityDriverWorkspace()**](ObservabilityDriverApi.md#getObservabilityDriverWorkspace) | **POST** /v2/observability_driver/ | Get Observability Driver Workspace |
| [**updateLangfuseObservabilityDriver()**](ObservabilityDriverApi.md#updateLangfuseObservabilityDriver) | **PUT** /v2/observability_driver/langfuse | Update Langfuse Observability Driver |


## `activateLangfuseObservabilityDriver()`

```php
activateLangfuseObservabilityDriver($workspace_id, $langfuse_request): \FlowHunt\Model\ObservabilityDriverResponse
```

Activate Langfuse Observability Driver

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = FlowHunt\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FlowHunt\Api\ObservabilityDriverApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$langfuse_request = new \FlowHunt\Model\LangfuseRequest(); // \FlowHunt\Model\LangfuseRequest

try {
    $result = $apiInstance->activateLangfuseObservabilityDriver($workspace_id, $langfuse_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObservabilityDriverApi->activateLangfuseObservabilityDriver: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **langfuse_request** | [**\FlowHunt\Model\LangfuseRequest**](../Model/LangfuseRequest.md)|  | |

### Return type

[**\FlowHunt\Model\ObservabilityDriverResponse**](../Model/ObservabilityDriverResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteObservabilityDriver()`

```php
deleteObservabilityDriver($driver_type, $workspace_id): \FlowHunt\Model\DriverSuccessResponse
```

Delete Observability Driver

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = FlowHunt\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FlowHunt\Api\ObservabilityDriverApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$driver_type = new \FlowHunt\Model\\FlowHunt\Model\DriverType(); // \FlowHunt\Model\DriverType
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->deleteObservabilityDriver($driver_type, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObservabilityDriverApi->deleteObservabilityDriver: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **driver_type** | [**\FlowHunt\Model\DriverType**](../Model/.md)|  | |
| **workspace_id** | **string**|  | |

### Return type

[**\FlowHunt\Model\DriverSuccessResponse**](../Model/DriverSuccessResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getObservabilityDriver()`

```php
getObservabilityDriver($driver_type, $workspace_id): \FlowHunt\Model\ObservabilityDriverResponse
```

Get Observability Driver

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = FlowHunt\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FlowHunt\Api\ObservabilityDriverApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$driver_type = new \FlowHunt\Model\\FlowHunt\Model\DriverType(); // \FlowHunt\Model\DriverType
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->getObservabilityDriver($driver_type, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObservabilityDriverApi->getObservabilityDriver: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **driver_type** | [**\FlowHunt\Model\DriverType**](../Model/.md)|  | |
| **workspace_id** | **string**|  | |

### Return type

[**\FlowHunt\Model\ObservabilityDriverResponse**](../Model/ObservabilityDriverResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getObservabilityDriverWorkspace()`

```php
getObservabilityDriverWorkspace($workspace_id): \FlowHunt\Model\ObservabilityDriverResponse[]
```

Get Observability Driver Workspace

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = FlowHunt\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FlowHunt\Api\ObservabilityDriverApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->getObservabilityDriverWorkspace($workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObservabilityDriverApi->getObservabilityDriverWorkspace: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |

### Return type

[**\FlowHunt\Model\ObservabilityDriverResponse[]**](../Model/ObservabilityDriverResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateLangfuseObservabilityDriver()`

```php
updateLangfuseObservabilityDriver($workspace_id, $langfuse_request): \FlowHunt\Model\ObservabilityDriverResponse
```

Update Langfuse Observability Driver

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = FlowHunt\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FlowHunt\Api\ObservabilityDriverApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$langfuse_request = new \FlowHunt\Model\LangfuseRequest(); // \FlowHunt\Model\LangfuseRequest

try {
    $result = $apiInstance->updateLangfuseObservabilityDriver($workspace_id, $langfuse_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObservabilityDriverApi->updateLangfuseObservabilityDriver: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **langfuse_request** | [**\FlowHunt\Model\LangfuseRequest**](../Model/LangfuseRequest.md)|  | |

### Return type

[**\FlowHunt\Model\ObservabilityDriverResponse**](../Model/ObservabilityDriverResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
