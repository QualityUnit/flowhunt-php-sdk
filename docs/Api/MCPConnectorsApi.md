# FlowHunt\MCPConnectorsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createMcpConnector()**](MCPConnectorsApi.md#createMcpConnector) | **POST** /v2/mcp_connectors/create | Create Mcp Connector |
| [**deleteMcpConnector()**](MCPConnectorsApi.md#deleteMcpConnector) | **DELETE** /v2/mcp_connectors/{connector_id} | Delete Mcp Connector |
| [**getMcpConnector()**](MCPConnectorsApi.md#getMcpConnector) | **GET** /v2/mcp_connectors/{connector_id} | Get Mcp Connector |
| [**searchMcpConnectors()**](MCPConnectorsApi.md#searchMcpConnectors) | **POST** /v2/mcp_connectors/search | Search Mcp Connectors |
| [**testMcpConnector()**](MCPConnectorsApi.md#testMcpConnector) | **POST** /v2/mcp_connectors/{connector_id}/test | Test Mcp Connector |
| [**updateMcpConnector()**](MCPConnectorsApi.md#updateMcpConnector) | **PUT** /v2/mcp_connectors/{connector_id} | Update Mcp Connector |


## `createMcpConnector()`

```php
createMcpConnector($workspace_id, $mcp_connector_create_request): \FlowHunt\Model\MCPConnectorResponse
```

Create Mcp Connector

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = FlowHunt\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FlowHunt\Api\MCPConnectorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$mcp_connector_create_request = new \FlowHunt\Model\MCPConnectorCreateRequest(); // \FlowHunt\Model\MCPConnectorCreateRequest

try {
    $result = $apiInstance->createMcpConnector($workspace_id, $mcp_connector_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MCPConnectorsApi->createMcpConnector: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **mcp_connector_create_request** | [**\FlowHunt\Model\MCPConnectorCreateRequest**](../Model/MCPConnectorCreateRequest.md)|  | |

### Return type

[**\FlowHunt\Model\MCPConnectorResponse**](../Model/MCPConnectorResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteMcpConnector()`

```php
deleteMcpConnector($connector_id, $workspace_id): \FlowHunt\Model\Completed
```

Delete Mcp Connector

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = FlowHunt\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FlowHunt\Api\MCPConnectorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$connector_id = 'connector_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->deleteMcpConnector($connector_id, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MCPConnectorsApi->deleteMcpConnector: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **connector_id** | **string**|  | |
| **workspace_id** | **string**|  | |

### Return type

[**\FlowHunt\Model\Completed**](../Model/Completed.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMcpConnector()`

```php
getMcpConnector($connector_id, $workspace_id): \FlowHunt\Model\MCPConnectorResponse
```

Get Mcp Connector

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = FlowHunt\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FlowHunt\Api\MCPConnectorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$connector_id = 'connector_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->getMcpConnector($connector_id, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MCPConnectorsApi->getMcpConnector: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **connector_id** | **string**|  | |
| **workspace_id** | **string**|  | |

### Return type

[**\FlowHunt\Model\MCPConnectorResponse**](../Model/MCPConnectorResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchMcpConnectors()`

```php
searchMcpConnectors($workspace_id, $mcp_connector_search_request): \FlowHunt\Model\MCPConnectorResponse[]
```

Search Mcp Connectors

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = FlowHunt\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FlowHunt\Api\MCPConnectorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$mcp_connector_search_request = new \FlowHunt\Model\MCPConnectorSearchRequest(); // \FlowHunt\Model\MCPConnectorSearchRequest

try {
    $result = $apiInstance->searchMcpConnectors($workspace_id, $mcp_connector_search_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MCPConnectorsApi->searchMcpConnectors: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **mcp_connector_search_request** | [**\FlowHunt\Model\MCPConnectorSearchRequest**](../Model/MCPConnectorSearchRequest.md)|  | |

### Return type

[**\FlowHunt\Model\MCPConnectorResponse[]**](../Model/MCPConnectorResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `testMcpConnector()`

```php
testMcpConnector($connector_id, $workspace_id): \FlowHunt\Model\MCPConnectorTestResponse
```

Test Mcp Connector

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = FlowHunt\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FlowHunt\Api\MCPConnectorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$connector_id = 'connector_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->testMcpConnector($connector_id, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MCPConnectorsApi->testMcpConnector: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **connector_id** | **string**|  | |
| **workspace_id** | **string**|  | |

### Return type

[**\FlowHunt\Model\MCPConnectorTestResponse**](../Model/MCPConnectorTestResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateMcpConnector()`

```php
updateMcpConnector($connector_id, $workspace_id, $mcp_connector_update_request): \FlowHunt\Model\MCPConnectorResponse
```

Update Mcp Connector

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = FlowHunt\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FlowHunt\Api\MCPConnectorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$connector_id = 'connector_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$mcp_connector_update_request = new \FlowHunt\Model\MCPConnectorUpdateRequest(); // \FlowHunt\Model\MCPConnectorUpdateRequest

try {
    $result = $apiInstance->updateMcpConnector($connector_id, $workspace_id, $mcp_connector_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MCPConnectorsApi->updateMcpConnector: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **connector_id** | **string**|  | |
| **workspace_id** | **string**|  | |
| **mcp_connector_update_request** | [**\FlowHunt\Model\MCPConnectorUpdateRequest**](../Model/MCPConnectorUpdateRequest.md)|  | |

### Return type

[**\FlowHunt\Model\MCPConnectorResponse**](../Model/MCPConnectorResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
