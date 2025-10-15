# FlowHunt\ObservabilityDriverApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**activateLangfuseObservabilityDriver()**](ObservabilityDriverApi.md#activateLangfuseObservabilityDriver) | **POST** /v2/observability_driver/langfuse | Activate Langfuse Observability Driver |
| [**activatePowerBiObservabilityDriver()**](ObservabilityDriverApi.md#activatePowerBiObservabilityDriver) | **POST** /v2/observability_driver/power_bi | Activate Power Bi Observability Driver |
| [**createPowerBiPushDataset()**](ObservabilityDriverApi.md#createPowerBiPushDataset) | **POST** /v2/observability_driver/power_bi/push_dataset | Create Power Bi Push Dataset |
| [**deleteObservabilityDriver()**](ObservabilityDriverApi.md#deleteObservabilityDriver) | **DELETE** /v2/observability_driver/{driver_type} | Delete Observability Driver |
| [**getObservabilityDriver()**](ObservabilityDriverApi.md#getObservabilityDriver) | **GET** /v2/observability_driver/{driver_type} | Get Observability Driver |
| [**getObservabilityDriverWorkspace()**](ObservabilityDriverApi.md#getObservabilityDriverWorkspace) | **POST** /v2/observability_driver/ | Get Observability Driver Workspace |
| [**listPowerBiDatasets()**](ObservabilityDriverApi.md#listPowerBiDatasets) | **POST** /v2/observability_driver/power_bi/datasets | List Power Bi Datasets |
| [**listPowerBiTables()**](ObservabilityDriverApi.md#listPowerBiTables) | **POST** /v2/observability_driver/power_bi/tables | List Power Bi Tables |
| [**listPowerBiWorkspaces()**](ObservabilityDriverApi.md#listPowerBiWorkspaces) | **GET** /v2/observability_driver/power_bi/workspaces | List Power Bi Workspaces |
| [**updateLangfuseObservabilityDriver()**](ObservabilityDriverApi.md#updateLangfuseObservabilityDriver) | **PUT** /v2/observability_driver/langfuse | Update Langfuse Observability Driver |
| [**updatePowerBiObservabilityDriver()**](ObservabilityDriverApi.md#updatePowerBiObservabilityDriver) | **PUT** /v2/observability_driver/power_bi | Update Power Bi Observability Driver |
| [**validatePushDatasetTable()**](ObservabilityDriverApi.md#validatePushDatasetTable) | **POST** /v2/observability_driver/power_bi/validate_push_dataset | Validate Push Dataset Table |


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

## `activatePowerBiObservabilityDriver()`

```php
activatePowerBiObservabilityDriver($workspace_id, $power_bi_request): \FlowHunt\Model\ObservabilityDriverResponse
```

Activate Power Bi Observability Driver

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
$power_bi_request = new \FlowHunt\Model\PowerBiRequest(); // \FlowHunt\Model\PowerBiRequest

try {
    $result = $apiInstance->activatePowerBiObservabilityDriver($workspace_id, $power_bi_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObservabilityDriverApi->activatePowerBiObservabilityDriver: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **power_bi_request** | [**\FlowHunt\Model\PowerBiRequest**](../Model/PowerBiRequest.md)|  | |

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

## `createPowerBiPushDataset()`

```php
createPowerBiPushDataset($workspace_id, $power_bi_push_dataset_request): \FlowHunt\Model\MicrosoftPowerBiPushDatasetResponse
```

Create Power Bi Push Dataset

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
$power_bi_push_dataset_request = new \FlowHunt\Model\PowerBiPushDatasetRequest(); // \FlowHunt\Model\PowerBiPushDatasetRequest

try {
    $result = $apiInstance->createPowerBiPushDataset($workspace_id, $power_bi_push_dataset_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObservabilityDriverApi->createPowerBiPushDataset: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **power_bi_push_dataset_request** | [**\FlowHunt\Model\PowerBiPushDatasetRequest**](../Model/PowerBiPushDatasetRequest.md)|  | |

### Return type

[**\FlowHunt\Model\MicrosoftPowerBiPushDatasetResponse**](../Model/MicrosoftPowerBiPushDatasetResponse.md)

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

## `listPowerBiDatasets()`

```php
listPowerBiDatasets($workspace_id, $power_bi_dataset_request): \FlowHunt\Model\MicrosoftPowerBiDatasetsResponse
```

List Power Bi Datasets

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
$power_bi_dataset_request = new \FlowHunt\Model\PowerBiDatasetRequest(); // \FlowHunt\Model\PowerBiDatasetRequest

try {
    $result = $apiInstance->listPowerBiDatasets($workspace_id, $power_bi_dataset_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObservabilityDriverApi->listPowerBiDatasets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **power_bi_dataset_request** | [**\FlowHunt\Model\PowerBiDatasetRequest**](../Model/PowerBiDatasetRequest.md)|  | |

### Return type

[**\FlowHunt\Model\MicrosoftPowerBiDatasetsResponse**](../Model/MicrosoftPowerBiDatasetsResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPowerBiTables()`

```php
listPowerBiTables($workspace_id, $power_bi_table_request): \FlowHunt\Model\MicrosoftPowerBiTablesResponse
```

List Power Bi Tables

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
$power_bi_table_request = new \FlowHunt\Model\PowerBiTableRequest(); // \FlowHunt\Model\PowerBiTableRequest

try {
    $result = $apiInstance->listPowerBiTables($workspace_id, $power_bi_table_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObservabilityDriverApi->listPowerBiTables: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **power_bi_table_request** | [**\FlowHunt\Model\PowerBiTableRequest**](../Model/PowerBiTableRequest.md)|  | |

### Return type

[**\FlowHunt\Model\MicrosoftPowerBiTablesResponse**](../Model/MicrosoftPowerBiTablesResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPowerBiWorkspaces()`

```php
listPowerBiWorkspaces($workspace_id): \FlowHunt\Model\MicrosoftPowerBiWorkspacesResponse
```

List Power Bi Workspaces

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
    $result = $apiInstance->listPowerBiWorkspaces($workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObservabilityDriverApi->listPowerBiWorkspaces: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |

### Return type

[**\FlowHunt\Model\MicrosoftPowerBiWorkspacesResponse**](../Model/MicrosoftPowerBiWorkspacesResponse.md)

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

## `updatePowerBiObservabilityDriver()`

```php
updatePowerBiObservabilityDriver($workspace_id, $power_bi_request): \FlowHunt\Model\ObservabilityDriverResponse
```

Update Power Bi Observability Driver

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
$power_bi_request = new \FlowHunt\Model\PowerBiRequest(); // \FlowHunt\Model\PowerBiRequest

try {
    $result = $apiInstance->updatePowerBiObservabilityDriver($workspace_id, $power_bi_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObservabilityDriverApi->updatePowerBiObservabilityDriver: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **power_bi_request** | [**\FlowHunt\Model\PowerBiRequest**](../Model/PowerBiRequest.md)|  | |

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

## `validatePushDatasetTable()`

```php
validatePushDatasetTable($workspace_id, $power_bi_request): \FlowHunt\Model\MicrosoftPowerBiTableValidateResponse
```

Validate Push Dataset Table

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
$power_bi_request = new \FlowHunt\Model\PowerBiRequest(); // \FlowHunt\Model\PowerBiRequest

try {
    $result = $apiInstance->validatePushDatasetTable($workspace_id, $power_bi_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObservabilityDriverApi->validatePushDatasetTable: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **power_bi_request** | [**\FlowHunt\Model\PowerBiRequest**](../Model/PowerBiRequest.md)|  | |

### Return type

[**\FlowHunt\Model\MicrosoftPowerBiTableValidateResponse**](../Model/MicrosoftPowerBiTableValidateResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
