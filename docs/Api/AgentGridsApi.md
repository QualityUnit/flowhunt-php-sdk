# FlowHunt\AgentGridsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createAgentGrid()**](AgentGridsApi.md#createAgentGrid) | **POST** /v2/agent_grids/ | Create a Flow Table |
| [**deleteAgentGrid()**](AgentGridsApi.md#deleteAgentGrid) | **DELETE** /v2/agent_grids/{agent_grid_id} | Delete a Flow Table |
| [**deleteRow()**](AgentGridsApi.md#deleteRow) | **DELETE** /v2/agent_grids/{agent_grid_id}/rows/{row_id} | Delete a row |
| [**getAgentGrid()**](AgentGridsApi.md#getAgentGrid) | **GET** /v2/agent_grids/{agent_grid_id} | Get a Flow Table |
| [**getAgentGridPreview()**](AgentGridsApi.md#getAgentGridPreview) | **GET** /v2/agent_grids/{agent_grid_id}/preview | Get Flow Table preview |
| [**getImportStatus()**](AgentGridsApi.md#getImportStatus) | **GET** /v2/agent_grids/{agent_grid_id}/import-status/{import_id} | Get import status |
| [**importCsv()**](AgentGridsApi.md#importCsv) | **POST** /v2/agent_grids/{agent_grid_id}/import-csv | Import CSV |
| [**insertRow()**](AgentGridsApi.md#insertRow) | **POST** /v2/agent_grids/{agent_grid_id}/rows | Insert a row |
| [**insertRowsBulk()**](AgentGridsApi.md#insertRowsBulk) | **POST** /v2/agent_grids/{agent_grid_id}/rows/bulk | Bulk insert rows |
| [**listAgentGrids()**](AgentGridsApi.md#listAgentGrids) | **GET** /v2/agent_grids/ | List all Flow Tables |
| [**searchRows()**](AgentGridsApi.md#searchRows) | **POST** /v2/agent_grids/{agent_grid_id}/search | Search rows |


## `createAgentGrid()`

```php
createAgentGrid($workspace_id, $agent_grid_create_request): \FlowHunt\Model\AgentGridResponse
```

Create a Flow Table

Creates a new Flow Table with the specified schema.

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


$apiInstance = new FlowHunt\Api\AgentGridsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$agent_grid_create_request = new \FlowHunt\Model\AgentGridCreateRequest(); // \FlowHunt\Model\AgentGridCreateRequest

try {
    $result = $apiInstance->createAgentGrid($workspace_id, $agent_grid_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentGridsApi->createAgentGrid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **agent_grid_create_request** | [**\FlowHunt\Model\AgentGridCreateRequest**](../Model/AgentGridCreateRequest.md)|  | |

### Return type

[**\FlowHunt\Model\AgentGridResponse**](../Model/AgentGridResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAgentGrid()`

```php
deleteAgentGrid($agent_grid_id, $workspace_id): \FlowHunt\Model\Completed
```

Delete a Flow Table

Deletes a Flow Table and all its data.

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


$apiInstance = new FlowHunt\Api\AgentGridsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$agent_grid_id = 'agent_grid_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->deleteAgentGrid($agent_grid_id, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentGridsApi->deleteAgentGrid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **agent_grid_id** | **string**|  | |
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
deleteRow($agent_grid_id, $row_id, $workspace_id): \FlowHunt\Model\Completed
```

Delete a row

Deletes a single row from the Flow Table.

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


$apiInstance = new FlowHunt\Api\AgentGridsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$agent_grid_id = 'agent_grid_id_example'; // string
$row_id = 'row_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->deleteRow($agent_grid_id, $row_id, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentGridsApi->deleteRow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **agent_grid_id** | **string**|  | |
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

## `getAgentGrid()`

```php
getAgentGrid($agent_grid_id, $workspace_id): \FlowHunt\Model\AgentGridResponse
```

Get a Flow Table

Returns details of a specific Flow Table by ID.

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


$apiInstance = new FlowHunt\Api\AgentGridsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$agent_grid_id = 'agent_grid_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->getAgentGrid($agent_grid_id, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentGridsApi->getAgentGrid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **agent_grid_id** | **string**|  | |
| **workspace_id** | **string**|  | |

### Return type

[**\FlowHunt\Model\AgentGridResponse**](../Model/AgentGridResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAgentGridPreview()`

```php
getAgentGridPreview($agent_grid_id, $workspace_id, $limit): \FlowHunt\Model\AgentGridPreviewResponse
```

Get Flow Table preview

Returns the first N rows of a Flow Table.

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


$apiInstance = new FlowHunt\Api\AgentGridsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$agent_grid_id = 'agent_grid_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$limit = 50; // int | Number of rows to return

try {
    $result = $apiInstance->getAgentGridPreview($agent_grid_id, $workspace_id, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentGridsApi->getAgentGridPreview: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **agent_grid_id** | **string**|  | |
| **workspace_id** | **string**|  | |
| **limit** | **int**| Number of rows to return | [optional] [default to 50] |

### Return type

[**\FlowHunt\Model\AgentGridPreviewResponse**](../Model/AgentGridPreviewResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getImportStatus()`

```php
getImportStatus($agent_grid_id, $import_id, $workspace_id): \FlowHunt\Model\AgentGridImportStatusResponse
```

Get import status

Poll for the status of a CSV import. Returns progress, errors, and completion status.

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


$apiInstance = new FlowHunt\Api\AgentGridsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$agent_grid_id = 'agent_grid_id_example'; // string
$import_id = 'import_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->getImportStatus($agent_grid_id, $import_id, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentGridsApi->getImportStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **agent_grid_id** | **string**|  | |
| **import_id** | **string**|  | |
| **workspace_id** | **string**|  | |

### Return type

[**\FlowHunt\Model\AgentGridImportStatusResponse**](../Model/AgentGridImportStatusResponse.md)

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
importCsv($agent_grid_id, $workspace_id, $file): \FlowHunt\Model\AgentGridImportStartResponse
```

Import CSV

Start importing rows from a CSV file. The import runs asynchronously. Use the returned import_id to poll for status.

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


$apiInstance = new FlowHunt\Api\AgentGridsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$agent_grid_id = 'agent_grid_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$file = '/path/to/file.txt'; // \SplFileObject | CSV file to import

try {
    $result = $apiInstance->importCsv($agent_grid_id, $workspace_id, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentGridsApi->importCsv: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **agent_grid_id** | **string**|  | |
| **workspace_id** | **string**|  | |
| **file** | **\SplFileObject****\SplFileObject**| CSV file to import | |

### Return type

[**\FlowHunt\Model\AgentGridImportStartResponse**](../Model/AgentGridImportStartResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `insertRow()`

```php
insertRow($agent_grid_id, $workspace_id, $agent_grid_row_insert_request): \FlowHunt\Model\AgentGridRowInsertResponse
```

Insert a row

Inserts a single row into the Flow Table.

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


$apiInstance = new FlowHunt\Api\AgentGridsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$agent_grid_id = 'agent_grid_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$agent_grid_row_insert_request = new \FlowHunt\Model\AgentGridRowInsertRequest(); // \FlowHunt\Model\AgentGridRowInsertRequest

try {
    $result = $apiInstance->insertRow($agent_grid_id, $workspace_id, $agent_grid_row_insert_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentGridsApi->insertRow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **agent_grid_id** | **string**|  | |
| **workspace_id** | **string**|  | |
| **agent_grid_row_insert_request** | [**\FlowHunt\Model\AgentGridRowInsertRequest**](../Model/AgentGridRowInsertRequest.md)|  | |

### Return type

[**\FlowHunt\Model\AgentGridRowInsertResponse**](../Model/AgentGridRowInsertResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `insertRowsBulk()`

```php
insertRowsBulk($agent_grid_id, $workspace_id, $agent_grid_rows_bulk_insert_request): \FlowHunt\Model\AgentGridBulkInsertResponse
```

Bulk insert rows

Inserts multiple rows into the Flow Table.

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


$apiInstance = new FlowHunt\Api\AgentGridsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$agent_grid_id = 'agent_grid_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$agent_grid_rows_bulk_insert_request = new \FlowHunt\Model\AgentGridRowsBulkInsertRequest(); // \FlowHunt\Model\AgentGridRowsBulkInsertRequest

try {
    $result = $apiInstance->insertRowsBulk($agent_grid_id, $workspace_id, $agent_grid_rows_bulk_insert_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentGridsApi->insertRowsBulk: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **agent_grid_id** | **string**|  | |
| **workspace_id** | **string**|  | |
| **agent_grid_rows_bulk_insert_request** | [**\FlowHunt\Model\AgentGridRowsBulkInsertRequest**](../Model/AgentGridRowsBulkInsertRequest.md)|  | |

### Return type

[**\FlowHunt\Model\AgentGridBulkInsertResponse**](../Model/AgentGridBulkInsertResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAgentGrids()`

```php
listAgentGrids($workspace_id): \FlowHunt\Model\AgentGridResponse[]
```

List all Flow Tables

Returns a list of all Flow Tables (Agent Grids) for the workspace.

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


$apiInstance = new FlowHunt\Api\AgentGridsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->listAgentGrids($workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentGridsApi->listAgentGrids: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |

### Return type

[**\FlowHunt\Model\AgentGridResponse[]**](../Model/AgentGridResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchRows()`

```php
searchRows($agent_grid_id, $workspace_id, $agent_grid_search_request): \FlowHunt\Model\AgentGridSearchResponse
```

Search rows

Search rows in the Flow Table using full-text search.

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


$apiInstance = new FlowHunt\Api\AgentGridsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$agent_grid_id = 'agent_grid_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$agent_grid_search_request = new \FlowHunt\Model\AgentGridSearchRequest(); // \FlowHunt\Model\AgentGridSearchRequest

try {
    $result = $apiInstance->searchRows($agent_grid_id, $workspace_id, $agent_grid_search_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentGridsApi->searchRows: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **agent_grid_id** | **string**|  | |
| **workspace_id** | **string**|  | |
| **agent_grid_search_request** | [**\FlowHunt\Model\AgentGridSearchRequest**](../Model/AgentGridSearchRequest.md)|  | |

### Return type

[**\FlowHunt\Model\AgentGridSearchResponse**](../Model/AgentGridSearchResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
