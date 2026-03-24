# FlowHunt\FlowBatchApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addRows()**](FlowBatchApi.md#addRows) | **POST** /v2/flows/{flow_id}/batch/{batch_run_id}/rows | Add Rows |
| [**addRows_0()**](FlowBatchApi.md#addRows_0) | **POST** /v2/flows/{flow_id}/batch/{batch_run_id}/rows | Add Rows |
| [**createBatchRun()**](FlowBatchApi.md#createBatchRun) | **POST** /v2/flows/{flow_id}/batch | Create Batch Run |
| [**createBatchRun_0()**](FlowBatchApi.md#createBatchRun_0) | **POST** /v2/flows/{flow_id}/batch | Create Batch Run |
| [**deleteBatchRun()**](FlowBatchApi.md#deleteBatchRun) | **DELETE** /v2/flows/{flow_id}/batch/{batch_run_id} | Delete Batch Run |
| [**deleteBatchRun_0()**](FlowBatchApi.md#deleteBatchRun_0) | **DELETE** /v2/flows/{flow_id}/batch/{batch_run_id} | Delete Batch Run |
| [**deleteRow()**](FlowBatchApi.md#deleteRow) | **DELETE** /v2/flows/{flow_id}/batch/{batch_run_id}/rows/{row_id} | Delete Row |
| [**deleteRow_0()**](FlowBatchApi.md#deleteRow_0) | **DELETE** /v2/flows/{flow_id}/batch/{batch_run_id}/rows/{row_id} | Delete Row |
| [**executeBatch()**](FlowBatchApi.md#executeBatch) | **POST** /v2/flows/{flow_id}/batch/{batch_run_id}/execute | Execute Batch |
| [**executeBatch_0()**](FlowBatchApi.md#executeBatch_0) | **POST** /v2/flows/{flow_id}/batch/{batch_run_id}/execute | Execute Batch |
| [**executeFiltered()**](FlowBatchApi.md#executeFiltered) | **POST** /v2/flows/{flow_id}/batch/{batch_run_id}/execute-filtered | Execute Filtered |
| [**executeFiltered_0()**](FlowBatchApi.md#executeFiltered_0) | **POST** /v2/flows/{flow_id}/batch/{batch_run_id}/execute-filtered | Execute Filtered |
| [**executeRow()**](FlowBatchApi.md#executeRow) | **POST** /v2/flows/{flow_id}/batch/{batch_run_id}/rows/{row_id}/execute | Execute Row |
| [**executeRow_0()**](FlowBatchApi.md#executeRow_0) | **POST** /v2/flows/{flow_id}/batch/{batch_run_id}/rows/{row_id}/execute | Execute Row |
| [**exportCsv()**](FlowBatchApi.md#exportCsv) | **GET** /v2/flows/{flow_id}/batch/{batch_run_id}/export-csv | Export Csv |
| [**exportCsv_0()**](FlowBatchApi.md#exportCsv_0) | **GET** /v2/flows/{flow_id}/batch/{batch_run_id}/export-csv | Export Csv |
| [**getBatchRun()**](FlowBatchApi.md#getBatchRun) | **GET** /v2/flows/{flow_id}/batch/{batch_run_id} | Get Batch Run |
| [**getBatchRun_0()**](FlowBatchApi.md#getBatchRun_0) | **GET** /v2/flows/{flow_id}/batch/{batch_run_id} | Get Batch Run |
| [**getExportZipStatus()**](FlowBatchApi.md#getExportZipStatus) | **GET** /v2/flows/{flow_id}/batch/{batch_run_id}/export-zip/{task_id} | Get Export Zip Status |
| [**getExportZipStatus_0()**](FlowBatchApi.md#getExportZipStatus_0) | **GET** /v2/flows/{flow_id}/batch/{batch_run_id}/export-zip/{task_id} | Get Export Zip Status |
| [**importCsv()**](FlowBatchApi.md#importCsv) | **POST** /v2/flows/{flow_id}/batch/{batch_run_id}/import-csv | Import Csv |
| [**importCsv_0()**](FlowBatchApi.md#importCsv_0) | **POST** /v2/flows/{flow_id}/batch/{batch_run_id}/import-csv | Import Csv |
| [**listBatchRuns()**](FlowBatchApi.md#listBatchRuns) | **GET** /v2/flows/{flow_id}/batch | List Batch Runs |
| [**listBatchRuns_0()**](FlowBatchApi.md#listBatchRuns_0) | **GET** /v2/flows/{flow_id}/batch | List Batch Runs |
| [**startExportZip()**](FlowBatchApi.md#startExportZip) | **POST** /v2/flows/{flow_id}/batch/{batch_run_id}/export-zip | Start Export Zip |
| [**startExportZip_0()**](FlowBatchApi.md#startExportZip_0) | **POST** /v2/flows/{flow_id}/batch/{batch_run_id}/export-zip | Start Export Zip |
| [**stopAllRows()**](FlowBatchApi.md#stopAllRows) | **POST** /v2/flows/{flow_id}/batch/{batch_run_id}/stop-all | Stop All Rows |
| [**stopAllRows_0()**](FlowBatchApi.md#stopAllRows_0) | **POST** /v2/flows/{flow_id}/batch/{batch_run_id}/stop-all | Stop All Rows |
| [**stopRow()**](FlowBatchApi.md#stopRow) | **POST** /v2/flows/{flow_id}/batch/{batch_run_id}/rows/{row_id}/stop | Stop Row |
| [**stopRow_0()**](FlowBatchApi.md#stopRow_0) | **POST** /v2/flows/{flow_id}/batch/{batch_run_id}/rows/{row_id}/stop | Stop Row |
| [**updateBatchRun()**](FlowBatchApi.md#updateBatchRun) | **PUT** /v2/flows/{flow_id}/batch/{batch_run_id} | Update Batch Run |
| [**updateBatchRun_0()**](FlowBatchApi.md#updateBatchRun_0) | **PUT** /v2/flows/{flow_id}/batch/{batch_run_id} | Update Batch Run |
| [**updateRow()**](FlowBatchApi.md#updateRow) | **PUT** /v2/flows/{flow_id}/batch/{batch_run_id}/rows/{row_id} | Update Row |
| [**updateRow_0()**](FlowBatchApi.md#updateRow_0) | **PUT** /v2/flows/{flow_id}/batch/{batch_run_id}/rows/{row_id} | Update Row |


## `addRows()`

```php
addRows($flow_id, $batch_run_id, $workspace_id, $flow_batch_rows_bulk_create_request): \FlowHunt\Model\FlowBatchRowResponse[]
```

Add Rows

Add one or more rows to a batch run.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = FlowHunt\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FlowHunt\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure Bearer authorization: HTTPBearer
$config = FlowHunt\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FlowHunt\Api\FlowBatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$flow_id = 'flow_id_example'; // string
$batch_run_id = 'batch_run_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$flow_batch_rows_bulk_create_request = new \FlowHunt\Model\FlowBatchRowsBulkCreateRequest(); // \FlowHunt\Model\FlowBatchRowsBulkCreateRequest

try {
    $result = $apiInstance->addRows($flow_id, $batch_run_id, $workspace_id, $flow_batch_rows_bulk_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlowBatchApi->addRows: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **flow_id** | **string**|  | |
| **batch_run_id** | **string**|  | |
| **workspace_id** | **string**|  | |
| **flow_batch_rows_bulk_create_request** | [**\FlowHunt\Model\FlowBatchRowsBulkCreateRequest**](../Model/FlowBatchRowsBulkCreateRequest.md)|  | |

### Return type

[**\FlowHunt\Model\FlowBatchRowResponse[]**](../Model/FlowBatchRowResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `addRows_0()`

```php
addRows_0($flow_id, $batch_run_id, $workspace_id, $flow_batch_rows_bulk_create_request): \FlowHunt\Model\FlowBatchRowResponse[]
```

Add Rows

Add one or more rows to a batch run.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = FlowHunt\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FlowHunt\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure Bearer authorization: HTTPBearer
$config = FlowHunt\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FlowHunt\Api\FlowBatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$flow_id = 'flow_id_example'; // string
$batch_run_id = 'batch_run_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$flow_batch_rows_bulk_create_request = new \FlowHunt\Model\FlowBatchRowsBulkCreateRequest(); // \FlowHunt\Model\FlowBatchRowsBulkCreateRequest

try {
    $result = $apiInstance->addRows_0($flow_id, $batch_run_id, $workspace_id, $flow_batch_rows_bulk_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlowBatchApi->addRows_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **flow_id** | **string**|  | |
| **batch_run_id** | **string**|  | |
| **workspace_id** | **string**|  | |
| **flow_batch_rows_bulk_create_request** | [**\FlowHunt\Model\FlowBatchRowsBulkCreateRequest**](../Model/FlowBatchRowsBulkCreateRequest.md)|  | |

### Return type

[**\FlowHunt\Model\FlowBatchRowResponse[]**](../Model/FlowBatchRowResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createBatchRun()`

```php
createBatchRun($flow_id, $workspace_id, $flow_batch_run_create_request): \FlowHunt\Model\FlowBatchRunResponse
```

Create Batch Run

Create a new batch run for a flow.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = FlowHunt\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FlowHunt\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure Bearer authorization: HTTPBearer
$config = FlowHunt\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FlowHunt\Api\FlowBatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$flow_id = 'flow_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$flow_batch_run_create_request = new \FlowHunt\Model\FlowBatchRunCreateRequest(); // \FlowHunt\Model\FlowBatchRunCreateRequest

try {
    $result = $apiInstance->createBatchRun($flow_id, $workspace_id, $flow_batch_run_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlowBatchApi->createBatchRun: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **flow_id** | **string**|  | |
| **workspace_id** | **string**|  | |
| **flow_batch_run_create_request** | [**\FlowHunt\Model\FlowBatchRunCreateRequest**](../Model/FlowBatchRunCreateRequest.md)|  | |

### Return type

[**\FlowHunt\Model\FlowBatchRunResponse**](../Model/FlowBatchRunResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createBatchRun_0()`

```php
createBatchRun_0($flow_id, $workspace_id, $flow_batch_run_create_request): \FlowHunt\Model\FlowBatchRunResponse
```

Create Batch Run

Create a new batch run for a flow.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = FlowHunt\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FlowHunt\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure Bearer authorization: HTTPBearer
$config = FlowHunt\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FlowHunt\Api\FlowBatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$flow_id = 'flow_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$flow_batch_run_create_request = new \FlowHunt\Model\FlowBatchRunCreateRequest(); // \FlowHunt\Model\FlowBatchRunCreateRequest

try {
    $result = $apiInstance->createBatchRun_0($flow_id, $workspace_id, $flow_batch_run_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlowBatchApi->createBatchRun_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **flow_id** | **string**|  | |
| **workspace_id** | **string**|  | |
| **flow_batch_run_create_request** | [**\FlowHunt\Model\FlowBatchRunCreateRequest**](../Model/FlowBatchRunCreateRequest.md)|  | |

### Return type

[**\FlowHunt\Model\FlowBatchRunResponse**](../Model/FlowBatchRunResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteBatchRun()`

```php
deleteBatchRun($flow_id, $batch_run_id, $workspace_id): \FlowHunt\Model\Completed
```

Delete Batch Run

Delete a batch run and all its rows.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = FlowHunt\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FlowHunt\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure Bearer authorization: HTTPBearer
$config = FlowHunt\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FlowHunt\Api\FlowBatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$flow_id = 'flow_id_example'; // string
$batch_run_id = 'batch_run_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->deleteBatchRun($flow_id, $batch_run_id, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlowBatchApi->deleteBatchRun: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **flow_id** | **string**|  | |
| **batch_run_id** | **string**|  | |
| **workspace_id** | **string**|  | |

### Return type

[**\FlowHunt\Model\Completed**](../Model/Completed.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteBatchRun_0()`

```php
deleteBatchRun_0($flow_id, $batch_run_id, $workspace_id): \FlowHunt\Model\Completed
```

Delete Batch Run

Delete a batch run and all its rows.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = FlowHunt\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FlowHunt\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure Bearer authorization: HTTPBearer
$config = FlowHunt\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FlowHunt\Api\FlowBatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$flow_id = 'flow_id_example'; // string
$batch_run_id = 'batch_run_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->deleteBatchRun_0($flow_id, $batch_run_id, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlowBatchApi->deleteBatchRun_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **flow_id** | **string**|  | |
| **batch_run_id** | **string**|  | |
| **workspace_id** | **string**|  | |

### Return type

[**\FlowHunt\Model\Completed**](../Model/Completed.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteRow()`

```php
deleteRow($flow_id, $batch_run_id, $row_id, $workspace_id): \FlowHunt\Model\Completed
```

Delete Row

Delete a row from a batch run.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = FlowHunt\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FlowHunt\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure Bearer authorization: HTTPBearer
$config = FlowHunt\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FlowHunt\Api\FlowBatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$flow_id = 'flow_id_example'; // string
$batch_run_id = 'batch_run_id_example'; // string
$row_id = 'row_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->deleteRow($flow_id, $batch_run_id, $row_id, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlowBatchApi->deleteRow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **flow_id** | **string**|  | |
| **batch_run_id** | **string**|  | |
| **row_id** | **string**|  | |
| **workspace_id** | **string**|  | |

### Return type

[**\FlowHunt\Model\Completed**](../Model/Completed.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteRow_0()`

```php
deleteRow_0($flow_id, $batch_run_id, $row_id, $workspace_id): \FlowHunt\Model\Completed
```

Delete Row

Delete a row from a batch run.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = FlowHunt\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FlowHunt\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure Bearer authorization: HTTPBearer
$config = FlowHunt\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FlowHunt\Api\FlowBatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$flow_id = 'flow_id_example'; // string
$batch_run_id = 'batch_run_id_example'; // string
$row_id = 'row_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->deleteRow_0($flow_id, $batch_run_id, $row_id, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlowBatchApi->deleteRow_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **flow_id** | **string**|  | |
| **batch_run_id** | **string**|  | |
| **row_id** | **string**|  | |
| **workspace_id** | **string**|  | |

### Return type

[**\FlowHunt\Model\Completed**](../Model/Completed.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `executeBatch()`

```php
executeBatch($flow_id, $batch_run_id, $workspace_id, $rerun_all): \FlowHunt\Model\FlowBatchRunResponse
```

Execute Batch

Execute pending rows (or all non-running rows when rerun_all=true) in the batch run.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = FlowHunt\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FlowHunt\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure Bearer authorization: HTTPBearer
$config = FlowHunt\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FlowHunt\Api\FlowBatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$flow_id = 'flow_id_example'; // string
$batch_run_id = 'batch_run_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$rerun_all = false; // bool

try {
    $result = $apiInstance->executeBatch($flow_id, $batch_run_id, $workspace_id, $rerun_all);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlowBatchApi->executeBatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **flow_id** | **string**|  | |
| **batch_run_id** | **string**|  | |
| **workspace_id** | **string**|  | |
| **rerun_all** | **bool**|  | [optional] [default to false] |

### Return type

[**\FlowHunt\Model\FlowBatchRunResponse**](../Model/FlowBatchRunResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `executeBatch_0()`

```php
executeBatch_0($flow_id, $batch_run_id, $workspace_id, $rerun_all): \FlowHunt\Model\FlowBatchRunResponse
```

Execute Batch

Execute pending rows (or all non-running rows when rerun_all=true) in the batch run.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = FlowHunt\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FlowHunt\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure Bearer authorization: HTTPBearer
$config = FlowHunt\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FlowHunt\Api\FlowBatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$flow_id = 'flow_id_example'; // string
$batch_run_id = 'batch_run_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$rerun_all = false; // bool

try {
    $result = $apiInstance->executeBatch_0($flow_id, $batch_run_id, $workspace_id, $rerun_all);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlowBatchApi->executeBatch_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **flow_id** | **string**|  | |
| **batch_run_id** | **string**|  | |
| **workspace_id** | **string**|  | |
| **rerun_all** | **bool**|  | [optional] [default to false] |

### Return type

[**\FlowHunt\Model\FlowBatchRunResponse**](../Model/FlowBatchRunResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `executeFiltered()`

```php
executeFiltered($flow_id, $batch_run_id, $workspace_id, $flow_batch_filtered_execute_request): \FlowHunt\Model\FlowBatchRunResponse
```

Execute Filtered

Execute rows matching an optional search filter.  - ``rerun_all=false`` — run only **pending** rows matching the filter. - ``rerun_all=true``  — reset matching completed/failed rows to pending,   then run them. - ``max_concurrency`` — optional override for ``max_parallel`` (capped by   the subscription plan limit).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = FlowHunt\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FlowHunt\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure Bearer authorization: HTTPBearer
$config = FlowHunt\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FlowHunt\Api\FlowBatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$flow_id = 'flow_id_example'; // string
$batch_run_id = 'batch_run_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$flow_batch_filtered_execute_request = new \FlowHunt\Model\FlowBatchFilteredExecuteRequest(); // \FlowHunt\Model\FlowBatchFilteredExecuteRequest

try {
    $result = $apiInstance->executeFiltered($flow_id, $batch_run_id, $workspace_id, $flow_batch_filtered_execute_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlowBatchApi->executeFiltered: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **flow_id** | **string**|  | |
| **batch_run_id** | **string**|  | |
| **workspace_id** | **string**|  | |
| **flow_batch_filtered_execute_request** | [**\FlowHunt\Model\FlowBatchFilteredExecuteRequest**](../Model/FlowBatchFilteredExecuteRequest.md)|  | |

### Return type

[**\FlowHunt\Model\FlowBatchRunResponse**](../Model/FlowBatchRunResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `executeFiltered_0()`

```php
executeFiltered_0($flow_id, $batch_run_id, $workspace_id, $flow_batch_filtered_execute_request): \FlowHunt\Model\FlowBatchRunResponse
```

Execute Filtered

Execute rows matching an optional search filter.  - ``rerun_all=false`` — run only **pending** rows matching the filter. - ``rerun_all=true``  — reset matching completed/failed rows to pending,   then run them. - ``max_concurrency`` — optional override for ``max_parallel`` (capped by   the subscription plan limit).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = FlowHunt\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FlowHunt\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure Bearer authorization: HTTPBearer
$config = FlowHunt\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FlowHunt\Api\FlowBatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$flow_id = 'flow_id_example'; // string
$batch_run_id = 'batch_run_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$flow_batch_filtered_execute_request = new \FlowHunt\Model\FlowBatchFilteredExecuteRequest(); // \FlowHunt\Model\FlowBatchFilteredExecuteRequest

try {
    $result = $apiInstance->executeFiltered_0($flow_id, $batch_run_id, $workspace_id, $flow_batch_filtered_execute_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlowBatchApi->executeFiltered_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **flow_id** | **string**|  | |
| **batch_run_id** | **string**|  | |
| **workspace_id** | **string**|  | |
| **flow_batch_filtered_execute_request** | [**\FlowHunt\Model\FlowBatchFilteredExecuteRequest**](../Model/FlowBatchFilteredExecuteRequest.md)|  | |

### Return type

[**\FlowHunt\Model\FlowBatchRunResponse**](../Model/FlowBatchRunResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `executeRow()`

```php
executeRow($flow_id, $batch_run_id, $row_id, $workspace_id): \FlowHunt\Model\FlowBatchRowResponse
```

Execute Row

Execute a single row in the batch run.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = FlowHunt\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FlowHunt\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure Bearer authorization: HTTPBearer
$config = FlowHunt\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FlowHunt\Api\FlowBatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$flow_id = 'flow_id_example'; // string
$batch_run_id = 'batch_run_id_example'; // string
$row_id = 'row_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->executeRow($flow_id, $batch_run_id, $row_id, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlowBatchApi->executeRow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **flow_id** | **string**|  | |
| **batch_run_id** | **string**|  | |
| **row_id** | **string**|  | |
| **workspace_id** | **string**|  | |

### Return type

[**\FlowHunt\Model\FlowBatchRowResponse**](../Model/FlowBatchRowResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `executeRow_0()`

```php
executeRow_0($flow_id, $batch_run_id, $row_id, $workspace_id): \FlowHunt\Model\FlowBatchRowResponse
```

Execute Row

Execute a single row in the batch run.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = FlowHunt\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FlowHunt\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure Bearer authorization: HTTPBearer
$config = FlowHunt\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FlowHunt\Api\FlowBatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$flow_id = 'flow_id_example'; // string
$batch_run_id = 'batch_run_id_example'; // string
$row_id = 'row_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->executeRow_0($flow_id, $batch_run_id, $row_id, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlowBatchApi->executeRow_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **flow_id** | **string**|  | |
| **batch_run_id** | **string**|  | |
| **row_id** | **string**|  | |
| **workspace_id** | **string**|  | |

### Return type

[**\FlowHunt\Model\FlowBatchRowResponse**](../Model/FlowBatchRowResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `exportCsv()`

```php
exportCsv($flow_id, $batch_run_id, $workspace_id): mixed
```

Export Csv

Export batch results as CSV.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = FlowHunt\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FlowHunt\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure Bearer authorization: HTTPBearer
$config = FlowHunt\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FlowHunt\Api\FlowBatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$flow_id = 'flow_id_example'; // string
$batch_run_id = 'batch_run_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->exportCsv($flow_id, $batch_run_id, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlowBatchApi->exportCsv: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **flow_id** | **string**|  | |
| **batch_run_id** | **string**|  | |
| **workspace_id** | **string**|  | |

### Return type

**mixed**

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `exportCsv_0()`

```php
exportCsv_0($flow_id, $batch_run_id, $workspace_id): mixed
```

Export Csv

Export batch results as CSV.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = FlowHunt\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FlowHunt\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure Bearer authorization: HTTPBearer
$config = FlowHunt\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FlowHunt\Api\FlowBatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$flow_id = 'flow_id_example'; // string
$batch_run_id = 'batch_run_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->exportCsv_0($flow_id, $batch_run_id, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlowBatchApi->exportCsv_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **flow_id** | **string**|  | |
| **batch_run_id** | **string**|  | |
| **workspace_id** | **string**|  | |

### Return type

**mixed**

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBatchRun()`

```php
getBatchRun($flow_id, $batch_run_id, $workspace_id, $rows_limit, $rows_cursor, $rows_status): \FlowHunt\Model\FlowBatchRunDetailResponse
```

Get Batch Run

Get batch run details with cursor-based paginated rows.  Use ``rows_cursor`` (the ``next_cursor`` from a previous response) to fetch subsequent pages.  ``rows_status`` filters rows by their execution status.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = FlowHunt\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FlowHunt\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure Bearer authorization: HTTPBearer
$config = FlowHunt\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FlowHunt\Api\FlowBatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$flow_id = 'flow_id_example'; // string
$batch_run_id = 'batch_run_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$rows_limit = 50; // int
$rows_cursor = 56; // int
$rows_status = new \FlowHunt\Model\\FlowHunt\Model\FlowBatchRowStatus(); // \FlowHunt\Model\FlowBatchRowStatus

try {
    $result = $apiInstance->getBatchRun($flow_id, $batch_run_id, $workspace_id, $rows_limit, $rows_cursor, $rows_status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlowBatchApi->getBatchRun: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **flow_id** | **string**|  | |
| **batch_run_id** | **string**|  | |
| **workspace_id** | **string**|  | |
| **rows_limit** | **int**|  | [optional] [default to 50] |
| **rows_cursor** | **int**|  | [optional] |
| **rows_status** | [**\FlowHunt\Model\FlowBatchRowStatus**](../Model/.md)|  | [optional] |

### Return type

[**\FlowHunt\Model\FlowBatchRunDetailResponse**](../Model/FlowBatchRunDetailResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBatchRun_0()`

```php
getBatchRun_0($flow_id, $batch_run_id, $workspace_id, $rows_limit, $rows_cursor, $rows_status): \FlowHunt\Model\FlowBatchRunDetailResponse
```

Get Batch Run

Get batch run details with cursor-based paginated rows.  Use ``rows_cursor`` (the ``next_cursor`` from a previous response) to fetch subsequent pages.  ``rows_status`` filters rows by their execution status.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = FlowHunt\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FlowHunt\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure Bearer authorization: HTTPBearer
$config = FlowHunt\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FlowHunt\Api\FlowBatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$flow_id = 'flow_id_example'; // string
$batch_run_id = 'batch_run_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$rows_limit = 50; // int
$rows_cursor = 56; // int
$rows_status = new \FlowHunt\Model\\FlowHunt\Model\FlowBatchRowStatus(); // \FlowHunt\Model\FlowBatchRowStatus

try {
    $result = $apiInstance->getBatchRun_0($flow_id, $batch_run_id, $workspace_id, $rows_limit, $rows_cursor, $rows_status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlowBatchApi->getBatchRun_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **flow_id** | **string**|  | |
| **batch_run_id** | **string**|  | |
| **workspace_id** | **string**|  | |
| **rows_limit** | **int**|  | [optional] [default to 50] |
| **rows_cursor** | **int**|  | [optional] |
| **rows_status** | [**\FlowHunt\Model\FlowBatchRowStatus**](../Model/.md)|  | [optional] |

### Return type

[**\FlowHunt\Model\FlowBatchRunDetailResponse**](../Model/FlowBatchRunDetailResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getExportZipStatus()`

```php
getExportZipStatus($flow_id, $batch_run_id, $task_id, $workspace_id): \FlowHunt\Model\TaskResponse
```

Get Export Zip Status

Poll the status of a batch ZIP export task. Returns a presigned URL on success.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = FlowHunt\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FlowHunt\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure Bearer authorization: HTTPBearer
$config = FlowHunt\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FlowHunt\Api\FlowBatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$flow_id = 'flow_id_example'; // string
$batch_run_id = 'batch_run_id_example'; // string
$task_id = 'task_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->getExportZipStatus($flow_id, $batch_run_id, $task_id, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlowBatchApi->getExportZipStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **flow_id** | **string**|  | |
| **batch_run_id** | **string**|  | |
| **task_id** | **string**|  | |
| **workspace_id** | **string**|  | |

### Return type

[**\FlowHunt\Model\TaskResponse**](../Model/TaskResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getExportZipStatus_0()`

```php
getExportZipStatus_0($flow_id, $batch_run_id, $task_id, $workspace_id): \FlowHunt\Model\TaskResponse
```

Get Export Zip Status

Poll the status of a batch ZIP export task. Returns a presigned URL on success.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = FlowHunt\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FlowHunt\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure Bearer authorization: HTTPBearer
$config = FlowHunt\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FlowHunt\Api\FlowBatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$flow_id = 'flow_id_example'; // string
$batch_run_id = 'batch_run_id_example'; // string
$task_id = 'task_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->getExportZipStatus_0($flow_id, $batch_run_id, $task_id, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlowBatchApi->getExportZipStatus_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **flow_id** | **string**|  | |
| **batch_run_id** | **string**|  | |
| **task_id** | **string**|  | |
| **workspace_id** | **string**|  | |

### Return type

[**\FlowHunt\Model\TaskResponse**](../Model/TaskResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `importCsv()`

```php
importCsv($flow_id, $batch_run_id, $workspace_id, $file): \FlowHunt\Model\FlowBatchRunDetailResponse
```

Import Csv

Import CSV file to populate batch rows.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = FlowHunt\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FlowHunt\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure Bearer authorization: HTTPBearer
$config = FlowHunt\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FlowHunt\Api\FlowBatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$flow_id = 'flow_id_example'; // string
$batch_run_id = 'batch_run_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$file = 'file_example'; // string

try {
    $result = $apiInstance->importCsv($flow_id, $batch_run_id, $workspace_id, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlowBatchApi->importCsv: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **flow_id** | **string**|  | |
| **batch_run_id** | **string**|  | |
| **workspace_id** | **string**|  | |
| **file** | **string**|  | |

### Return type

[**\FlowHunt\Model\FlowBatchRunDetailResponse**](../Model/FlowBatchRunDetailResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `importCsv_0()`

```php
importCsv_0($flow_id, $batch_run_id, $workspace_id, $file): \FlowHunt\Model\FlowBatchRunDetailResponse
```

Import Csv

Import CSV file to populate batch rows.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = FlowHunt\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FlowHunt\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure Bearer authorization: HTTPBearer
$config = FlowHunt\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FlowHunt\Api\FlowBatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$flow_id = 'flow_id_example'; // string
$batch_run_id = 'batch_run_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$file = 'file_example'; // string

try {
    $result = $apiInstance->importCsv_0($flow_id, $batch_run_id, $workspace_id, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlowBatchApi->importCsv_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **flow_id** | **string**|  | |
| **batch_run_id** | **string**|  | |
| **workspace_id** | **string**|  | |
| **file** | **string**|  | |

### Return type

[**\FlowHunt\Model\FlowBatchRunDetailResponse**](../Model/FlowBatchRunDetailResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listBatchRuns()`

```php
listBatchRuns($flow_id, $workspace_id, $limit, $offset): \FlowHunt\Model\FlowBatchRunResponse[]
```

List Batch Runs

List all batch runs for a flow.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = FlowHunt\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FlowHunt\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure Bearer authorization: HTTPBearer
$config = FlowHunt\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FlowHunt\Api\FlowBatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$flow_id = 'flow_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$limit = 50; // int
$offset = 0; // int

try {
    $result = $apiInstance->listBatchRuns($flow_id, $workspace_id, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlowBatchApi->listBatchRuns: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **flow_id** | **string**|  | |
| **workspace_id** | **string**|  | |
| **limit** | **int**|  | [optional] [default to 50] |
| **offset** | **int**|  | [optional] [default to 0] |

### Return type

[**\FlowHunt\Model\FlowBatchRunResponse[]**](../Model/FlowBatchRunResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listBatchRuns_0()`

```php
listBatchRuns_0($flow_id, $workspace_id, $limit, $offset): \FlowHunt\Model\FlowBatchRunResponse[]
```

List Batch Runs

List all batch runs for a flow.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = FlowHunt\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FlowHunt\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure Bearer authorization: HTTPBearer
$config = FlowHunt\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FlowHunt\Api\FlowBatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$flow_id = 'flow_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$limit = 50; // int
$offset = 0; // int

try {
    $result = $apiInstance->listBatchRuns_0($flow_id, $workspace_id, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlowBatchApi->listBatchRuns_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **flow_id** | **string**|  | |
| **workspace_id** | **string**|  | |
| **limit** | **int**|  | [optional] [default to 50] |
| **offset** | **int**|  | [optional] [default to 0] |

### Return type

[**\FlowHunt\Model\FlowBatchRunResponse[]**](../Model/FlowBatchRunResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `startExportZip()`

```php
startExportZip($flow_id, $batch_run_id, $workspace_id): \FlowHunt\Model\TaskResponse
```

Start Export Zip

Start an async batch ZIP export. Returns a task ID for polling.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = FlowHunt\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FlowHunt\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure Bearer authorization: HTTPBearer
$config = FlowHunt\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FlowHunt\Api\FlowBatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$flow_id = 'flow_id_example'; // string
$batch_run_id = 'batch_run_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->startExportZip($flow_id, $batch_run_id, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlowBatchApi->startExportZip: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **flow_id** | **string**|  | |
| **batch_run_id** | **string**|  | |
| **workspace_id** | **string**|  | |

### Return type

[**\FlowHunt\Model\TaskResponse**](../Model/TaskResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `startExportZip_0()`

```php
startExportZip_0($flow_id, $batch_run_id, $workspace_id): \FlowHunt\Model\TaskResponse
```

Start Export Zip

Start an async batch ZIP export. Returns a task ID for polling.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = FlowHunt\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FlowHunt\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure Bearer authorization: HTTPBearer
$config = FlowHunt\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FlowHunt\Api\FlowBatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$flow_id = 'flow_id_example'; // string
$batch_run_id = 'batch_run_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->startExportZip_0($flow_id, $batch_run_id, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlowBatchApi->startExportZip_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **flow_id** | **string**|  | |
| **batch_run_id** | **string**|  | |
| **workspace_id** | **string**|  | |

### Return type

[**\FlowHunt\Model\TaskResponse**](../Model/TaskResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `stopAllRows()`

```php
stopAllRows($flow_id, $batch_run_id, $workspace_id): \FlowHunt\Model\Completed
```

Stop All Rows

Stop all running rows in a batch run, resetting them to pending.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = FlowHunt\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FlowHunt\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure Bearer authorization: HTTPBearer
$config = FlowHunt\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FlowHunt\Api\FlowBatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$flow_id = 'flow_id_example'; // string
$batch_run_id = 'batch_run_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->stopAllRows($flow_id, $batch_run_id, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlowBatchApi->stopAllRows: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **flow_id** | **string**|  | |
| **batch_run_id** | **string**|  | |
| **workspace_id** | **string**|  | |

### Return type

[**\FlowHunt\Model\Completed**](../Model/Completed.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `stopAllRows_0()`

```php
stopAllRows_0($flow_id, $batch_run_id, $workspace_id): \FlowHunt\Model\Completed
```

Stop All Rows

Stop all running rows in a batch run, resetting them to pending.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = FlowHunt\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FlowHunt\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure Bearer authorization: HTTPBearer
$config = FlowHunt\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FlowHunt\Api\FlowBatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$flow_id = 'flow_id_example'; // string
$batch_run_id = 'batch_run_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->stopAllRows_0($flow_id, $batch_run_id, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlowBatchApi->stopAllRows_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **flow_id** | **string**|  | |
| **batch_run_id** | **string**|  | |
| **workspace_id** | **string**|  | |

### Return type

[**\FlowHunt\Model\Completed**](../Model/Completed.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `stopRow()`

```php
stopRow($flow_id, $batch_run_id, $row_id, $workspace_id): \FlowHunt\Model\FlowBatchRowResponse
```

Stop Row

Stop a running row and reset it to pending status.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = FlowHunt\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FlowHunt\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure Bearer authorization: HTTPBearer
$config = FlowHunt\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FlowHunt\Api\FlowBatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$flow_id = 'flow_id_example'; // string
$batch_run_id = 'batch_run_id_example'; // string
$row_id = 'row_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->stopRow($flow_id, $batch_run_id, $row_id, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlowBatchApi->stopRow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **flow_id** | **string**|  | |
| **batch_run_id** | **string**|  | |
| **row_id** | **string**|  | |
| **workspace_id** | **string**|  | |

### Return type

[**\FlowHunt\Model\FlowBatchRowResponse**](../Model/FlowBatchRowResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `stopRow_0()`

```php
stopRow_0($flow_id, $batch_run_id, $row_id, $workspace_id): \FlowHunt\Model\FlowBatchRowResponse
```

Stop Row

Stop a running row and reset it to pending status.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = FlowHunt\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FlowHunt\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure Bearer authorization: HTTPBearer
$config = FlowHunt\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FlowHunt\Api\FlowBatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$flow_id = 'flow_id_example'; // string
$batch_run_id = 'batch_run_id_example'; // string
$row_id = 'row_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->stopRow_0($flow_id, $batch_run_id, $row_id, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlowBatchApi->stopRow_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **flow_id** | **string**|  | |
| **batch_run_id** | **string**|  | |
| **row_id** | **string**|  | |
| **workspace_id** | **string**|  | |

### Return type

[**\FlowHunt\Model\FlowBatchRowResponse**](../Model/FlowBatchRowResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateBatchRun()`

```php
updateBatchRun($flow_id, $batch_run_id, $workspace_id, $flow_batch_run_update_request): \FlowHunt\Model\FlowBatchRunResponse
```

Update Batch Run

Update batch run metadata.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = FlowHunt\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FlowHunt\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure Bearer authorization: HTTPBearer
$config = FlowHunt\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FlowHunt\Api\FlowBatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$flow_id = 'flow_id_example'; // string
$batch_run_id = 'batch_run_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$flow_batch_run_update_request = new \FlowHunt\Model\FlowBatchRunUpdateRequest(); // \FlowHunt\Model\FlowBatchRunUpdateRequest

try {
    $result = $apiInstance->updateBatchRun($flow_id, $batch_run_id, $workspace_id, $flow_batch_run_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlowBatchApi->updateBatchRun: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **flow_id** | **string**|  | |
| **batch_run_id** | **string**|  | |
| **workspace_id** | **string**|  | |
| **flow_batch_run_update_request** | [**\FlowHunt\Model\FlowBatchRunUpdateRequest**](../Model/FlowBatchRunUpdateRequest.md)|  | |

### Return type

[**\FlowHunt\Model\FlowBatchRunResponse**](../Model/FlowBatchRunResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateBatchRun_0()`

```php
updateBatchRun_0($flow_id, $batch_run_id, $workspace_id, $flow_batch_run_update_request): \FlowHunt\Model\FlowBatchRunResponse
```

Update Batch Run

Update batch run metadata.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = FlowHunt\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FlowHunt\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure Bearer authorization: HTTPBearer
$config = FlowHunt\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FlowHunt\Api\FlowBatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$flow_id = 'flow_id_example'; // string
$batch_run_id = 'batch_run_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$flow_batch_run_update_request = new \FlowHunt\Model\FlowBatchRunUpdateRequest(); // \FlowHunt\Model\FlowBatchRunUpdateRequest

try {
    $result = $apiInstance->updateBatchRun_0($flow_id, $batch_run_id, $workspace_id, $flow_batch_run_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlowBatchApi->updateBatchRun_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **flow_id** | **string**|  | |
| **batch_run_id** | **string**|  | |
| **workspace_id** | **string**|  | |
| **flow_batch_run_update_request** | [**\FlowHunt\Model\FlowBatchRunUpdateRequest**](../Model/FlowBatchRunUpdateRequest.md)|  | |

### Return type

[**\FlowHunt\Model\FlowBatchRunResponse**](../Model/FlowBatchRunResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateRow()`

```php
updateRow($flow_id, $batch_run_id, $row_id, $workspace_id, $flow_batch_row_update_request): \FlowHunt\Model\FlowBatchRowResponse
```

Update Row

Update a row's input data.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = FlowHunt\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FlowHunt\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure Bearer authorization: HTTPBearer
$config = FlowHunt\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FlowHunt\Api\FlowBatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$flow_id = 'flow_id_example'; // string
$batch_run_id = 'batch_run_id_example'; // string
$row_id = 'row_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$flow_batch_row_update_request = new \FlowHunt\Model\FlowBatchRowUpdateRequest(); // \FlowHunt\Model\FlowBatchRowUpdateRequest

try {
    $result = $apiInstance->updateRow($flow_id, $batch_run_id, $row_id, $workspace_id, $flow_batch_row_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlowBatchApi->updateRow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **flow_id** | **string**|  | |
| **batch_run_id** | **string**|  | |
| **row_id** | **string**|  | |
| **workspace_id** | **string**|  | |
| **flow_batch_row_update_request** | [**\FlowHunt\Model\FlowBatchRowUpdateRequest**](../Model/FlowBatchRowUpdateRequest.md)|  | |

### Return type

[**\FlowHunt\Model\FlowBatchRowResponse**](../Model/FlowBatchRowResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateRow_0()`

```php
updateRow_0($flow_id, $batch_run_id, $row_id, $workspace_id, $flow_batch_row_update_request): \FlowHunt\Model\FlowBatchRowResponse
```

Update Row

Update a row's input data.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = FlowHunt\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FlowHunt\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure Bearer authorization: HTTPBearer
$config = FlowHunt\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FlowHunt\Api\FlowBatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$flow_id = 'flow_id_example'; // string
$batch_run_id = 'batch_run_id_example'; // string
$row_id = 'row_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$flow_batch_row_update_request = new \FlowHunt\Model\FlowBatchRowUpdateRequest(); // \FlowHunt\Model\FlowBatchRowUpdateRequest

try {
    $result = $apiInstance->updateRow_0($flow_id, $batch_run_id, $row_id, $workspace_id, $flow_batch_row_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlowBatchApi->updateRow_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **flow_id** | **string**|  | |
| **batch_run_id** | **string**|  | |
| **row_id** | **string**|  | |
| **workspace_id** | **string**|  | |
| **flow_batch_row_update_request** | [**\FlowHunt\Model\FlowBatchRowUpdateRequest**](../Model/FlowBatchRowUpdateRequest.md)|  | |

### Return type

[**\FlowHunt\Model\FlowBatchRowResponse**](../Model/FlowBatchRowResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
