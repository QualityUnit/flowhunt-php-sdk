# FlowHunt\GridsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createColumn()**](GridsApi.md#createColumn) | **POST** /v2/grids/{grid_id}/create | Create Column |
| [**createGrid()**](GridsApi.md#createGrid) | **POST** /v2/grids/create | Create Grid |
| [**createGridRow()**](GridsApi.md#createGridRow) | **POST** /v2/grids/{grid_id}/create_row | Create Grid Row |
| [**deleteGrid()**](GridsApi.md#deleteGrid) | **DELETE** /v2/grids/{grid_id} | Delete Grid |
| [**deleteGridRow()**](GridsApi.md#deleteGridRow) | **DELETE** /v2/grids/{grid_id}/{col_id} | Delete Grid Row |
| [**searchColumns()**](GridsApi.md#searchColumns) | **POST** /v2/grids/{grid_id}/search | Search Columns |
| [**searchGridRows()**](GridsApi.md#searchGridRows) | **POST** /v2/grids/{grid_id}/search_rows | Search Grid Rows |
| [**searchGrids()**](GridsApi.md#searchGrids) | **POST** /v2/grids/search | Search Grids |
| [**updateColumn()**](GridsApi.md#updateColumn) | **PUT** /v2/grids/{grid_id}/{col_id} | Update Column |
| [**updateGrid()**](GridsApi.md#updateGrid) | **PUT** /v2/grids/{grid_id} | Update Grid |
| [**updateGridRow()**](GridsApi.md#updateGridRow) | **PUT** /v2/grids/{grid_id}/row_id | Update Grid Row |


## `createColumn()`

```php
createColumn($grid_id, $workspace_id, $grid_column_create_request): \FlowHunt\Model\GridColumnResponse
```

Create Column

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


$apiInstance = new FlowHunt\Api\GridsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$grid_id = 'grid_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$grid_column_create_request = new \FlowHunt\Model\GridColumnCreateRequest(); // \FlowHunt\Model\GridColumnCreateRequest

try {
    $result = $apiInstance->createColumn($grid_id, $workspace_id, $grid_column_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GridsApi->createColumn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **grid_id** | **string**|  | |
| **workspace_id** | **string**|  | |
| **grid_column_create_request** | [**\FlowHunt\Model\GridColumnCreateRequest**](../Model/GridColumnCreateRequest.md)|  | |

### Return type

[**\FlowHunt\Model\GridColumnResponse**](../Model/GridColumnResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createGrid()`

```php
createGrid($workspace_id, $grid_create_request): \FlowHunt\Model\GridResponse
```

Create Grid

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


$apiInstance = new FlowHunt\Api\GridsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$grid_create_request = new \FlowHunt\Model\GridCreateRequest(); // \FlowHunt\Model\GridCreateRequest

try {
    $result = $apiInstance->createGrid($workspace_id, $grid_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GridsApi->createGrid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **grid_create_request** | [**\FlowHunt\Model\GridCreateRequest**](../Model/GridCreateRequest.md)|  | |

### Return type

[**\FlowHunt\Model\GridResponse**](../Model/GridResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createGridRow()`

```php
createGridRow($grid_id, $workspace_id, $grid_row_create_request): \FlowHunt\Model\GridRowResponse
```

Create Grid Row

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


$apiInstance = new FlowHunt\Api\GridsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$grid_id = 'grid_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$grid_row_create_request = new \FlowHunt\Model\GridRowCreateRequest(); // \FlowHunt\Model\GridRowCreateRequest

try {
    $result = $apiInstance->createGridRow($grid_id, $workspace_id, $grid_row_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GridsApi->createGridRow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **grid_id** | **string**|  | |
| **workspace_id** | **string**|  | |
| **grid_row_create_request** | [**\FlowHunt\Model\GridRowCreateRequest**](../Model/GridRowCreateRequest.md)|  | |

### Return type

[**\FlowHunt\Model\GridRowResponse**](../Model/GridRowResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteGrid()`

```php
deleteGrid($grid_id, $workspace_id): \FlowHunt\Model\Completed
```

Delete Grid

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


$apiInstance = new FlowHunt\Api\GridsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$grid_id = 'grid_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->deleteGrid($grid_id, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GridsApi->deleteGrid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **grid_id** | **string**|  | |
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

## `deleteGridRow()`

```php
deleteGridRow($grid_id, $col_id, $workspace_id): \FlowHunt\Model\Completed
```

Delete Grid Row

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


$apiInstance = new FlowHunt\Api\GridsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$grid_id = 'grid_id_example'; // string
$col_id = 'col_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->deleteGridRow($grid_id, $col_id, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GridsApi->deleteGridRow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **grid_id** | **string**|  | |
| **col_id** | **string**|  | |
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

## `searchColumns()`

```php
searchColumns($grid_id, $workspace_id, $grid_column_search_request): \FlowHunt\Model\GridColumnResponse[]
```

Search Columns

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


$apiInstance = new FlowHunt\Api\GridsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$grid_id = 'grid_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$grid_column_search_request = new \FlowHunt\Model\GridColumnSearchRequest(); // \FlowHunt\Model\GridColumnSearchRequest

try {
    $result = $apiInstance->searchColumns($grid_id, $workspace_id, $grid_column_search_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GridsApi->searchColumns: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **grid_id** | **string**|  | |
| **workspace_id** | **string**|  | |
| **grid_column_search_request** | [**\FlowHunt\Model\GridColumnSearchRequest**](../Model/GridColumnSearchRequest.md)|  | |

### Return type

[**\FlowHunt\Model\GridColumnResponse[]**](../Model/GridColumnResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchGridRows()`

```php
searchGridRows($grid_id, $workspace_id, $grid_row_search_request): \FlowHunt\Model\GridRowResponse[]
```

Search Grid Rows

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


$apiInstance = new FlowHunt\Api\GridsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$grid_id = 'grid_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$grid_row_search_request = new \FlowHunt\Model\GridRowSearchRequest(); // \FlowHunt\Model\GridRowSearchRequest

try {
    $result = $apiInstance->searchGridRows($grid_id, $workspace_id, $grid_row_search_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GridsApi->searchGridRows: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **grid_id** | **string**|  | |
| **workspace_id** | **string**|  | |
| **grid_row_search_request** | [**\FlowHunt\Model\GridRowSearchRequest**](../Model/GridRowSearchRequest.md)|  | |

### Return type

[**\FlowHunt\Model\GridRowResponse[]**](../Model/GridRowResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchGrids()`

```php
searchGrids($workspace_id, $grid_search_request): \FlowHunt\Model\GridResponse[]
```

Search Grids

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


$apiInstance = new FlowHunt\Api\GridsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$grid_search_request = new \FlowHunt\Model\GridSearchRequest(); // \FlowHunt\Model\GridSearchRequest

try {
    $result = $apiInstance->searchGrids($workspace_id, $grid_search_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GridsApi->searchGrids: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **grid_search_request** | [**\FlowHunt\Model\GridSearchRequest**](../Model/GridSearchRequest.md)|  | |

### Return type

[**\FlowHunt\Model\GridResponse[]**](../Model/GridResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateColumn()`

```php
updateColumn($grid_id, $col_id, $workspace_id, $grid_column_update_request): \FlowHunt\Model\GridColumnResponse
```

Update Column

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


$apiInstance = new FlowHunt\Api\GridsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$grid_id = 'grid_id_example'; // string
$col_id = 'col_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$grid_column_update_request = new \FlowHunt\Model\GridColumnUpdateRequest(); // \FlowHunt\Model\GridColumnUpdateRequest

try {
    $result = $apiInstance->updateColumn($grid_id, $col_id, $workspace_id, $grid_column_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GridsApi->updateColumn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **grid_id** | **string**|  | |
| **col_id** | **string**|  | |
| **workspace_id** | **string**|  | |
| **grid_column_update_request** | [**\FlowHunt\Model\GridColumnUpdateRequest**](../Model/GridColumnUpdateRequest.md)|  | |

### Return type

[**\FlowHunt\Model\GridColumnResponse**](../Model/GridColumnResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateGrid()`

```php
updateGrid($grid_id, $workspace_id, $grid_update_request): \FlowHunt\Model\GridResponse
```

Update Grid

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


$apiInstance = new FlowHunt\Api\GridsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$grid_id = 'grid_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$grid_update_request = new \FlowHunt\Model\GridUpdateRequest(); // \FlowHunt\Model\GridUpdateRequest

try {
    $result = $apiInstance->updateGrid($grid_id, $workspace_id, $grid_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GridsApi->updateGrid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **grid_id** | **string**|  | |
| **workspace_id** | **string**|  | |
| **grid_update_request** | [**\FlowHunt\Model\GridUpdateRequest**](../Model/GridUpdateRequest.md)|  | |

### Return type

[**\FlowHunt\Model\GridResponse**](../Model/GridResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateGridRow()`

```php
updateGridRow($grid_id, $workspace_id, $row_id, $grid_row_update_request): \FlowHunt\Model\GridRowResponse
```

Update Grid Row

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


$apiInstance = new FlowHunt\Api\GridsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$grid_id = 'grid_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$row_id = 'row_id_example'; // string
$grid_row_update_request = new \FlowHunt\Model\GridRowUpdateRequest(); // \FlowHunt\Model\GridRowUpdateRequest

try {
    $result = $apiInstance->updateGridRow($grid_id, $workspace_id, $row_id, $grid_row_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GridsApi->updateGridRow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **grid_id** | **string**|  | |
| **workspace_id** | **string**|  | |
| **row_id** | **string**|  | |
| **grid_row_update_request** | [**\FlowHunt\Model\GridRowUpdateRequest**](../Model/GridRowUpdateRequest.md)|  | |

### Return type

[**\FlowHunt\Model\GridRowResponse**](../Model/GridRowResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
