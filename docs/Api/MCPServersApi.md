# FlowHunt\MCPServersApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createMcpServer()**](MCPServersApi.md#createMcpServer) | **POST** /v2/mcp_servers/create | Create Mcp Server |
| [**deleteMcpServer()**](MCPServersApi.md#deleteMcpServer) | **DELETE** /v2/mcp_servers/{mcp_server_id} | Delete Mcp Server |
| [**getAllMcpSubservers()**](MCPServersApi.md#getAllMcpSubservers) | **GET** /v2/mcp_servers/all | Get All Mcp Subservers |
| [**getMcpServer()**](MCPServersApi.md#getMcpServer) | **GET** /v2/mcp_servers/{mcp_server_id} | Get Mcp Server |
| [**searchMcpServers()**](MCPServersApi.md#searchMcpServers) | **POST** /v2/mcp_servers/ | Search Mcp Servers |
| [**updateMcpServer()**](MCPServersApi.md#updateMcpServer) | **PUT** /v2/mcp_servers/{mcp_server_id} | Update Mcp Server |


## `createMcpServer()`

```php
createMcpServer($workspace_id, $mcp_server_create_request): \FlowHunt\Model\MCPServerResponse
```

Create Mcp Server

Create a new MCP server.  Args:     main_request: The main request object for rate limiting.     workspace_id: The workspace ID.     request: The MCP server creation request.     user: The authenticated user.     controller: The MCP server controller.  Returns:     MCPServerCreateResponse: The created MCP server with the raw API key.

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


$apiInstance = new FlowHunt\Api\MCPServersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$mcp_server_create_request = new \FlowHunt\Model\MCPServerCreateRequest(); // \FlowHunt\Model\MCPServerCreateRequest

try {
    $result = $apiInstance->createMcpServer($workspace_id, $mcp_server_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MCPServersApi->createMcpServer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **mcp_server_create_request** | [**\FlowHunt\Model\MCPServerCreateRequest**](../Model/MCPServerCreateRequest.md)|  | |

### Return type

[**\FlowHunt\Model\MCPServerResponse**](../Model/MCPServerResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteMcpServer()`

```php
deleteMcpServer($mcp_server_id, $workspace_id): \FlowHunt\Model\Completed
```

Delete Mcp Server

Delete an MCP server.  Args:     main_request: The main request object for rate limiting.     workspace_id: The workspace ID.     mcp_server_id: The MCP server ID.     user: The authenticated user.     controller: The MCP server controller.

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


$apiInstance = new FlowHunt\Api\MCPServersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mcp_server_id = 'mcp_server_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->deleteMcpServer($mcp_server_id, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MCPServersApi->deleteMcpServer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mcp_server_id** | **string**|  | |
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

## `getAllMcpSubservers()`

```php
getAllMcpSubservers(): \FlowHunt\Model\GeneralMCPSubserverResponse[]
```

Get All Mcp Subservers

Get all MCP subservers available in the system.  Args:     user: The authenticated user.     controller: The MCP server controller.  Returns:     List[MCPSubServerBinding]: List of all MCP subservers.

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


$apiInstance = new FlowHunt\Api\MCPServersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAllMcpSubservers();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MCPServersApi->getAllMcpSubservers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\FlowHunt\Model\GeneralMCPSubserverResponse[]**](../Model/GeneralMCPSubserverResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMcpServer()`

```php
getMcpServer($mcp_server_id, $workspace_id): \FlowHunt\Model\MCPServerResponse
```

Get Mcp Server

Get an MCP server by ID.  Args:     workspace_id: The workspace ID.     mcp_server_id: The MCP server ID.     user: The authenticated user.     controller: The MCP server controller.  Returns:     MCPServerResponse: The MCP server.

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


$apiInstance = new FlowHunt\Api\MCPServersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mcp_server_id = 'mcp_server_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->getMcpServer($mcp_server_id, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MCPServersApi->getMcpServer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mcp_server_id** | **string**|  | |
| **workspace_id** | **string**|  | |

### Return type

[**\FlowHunt\Model\MCPServerResponse**](../Model/MCPServerResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchMcpServers()`

```php
searchMcpServers($workspace_id, $mcp_server_search_request): \FlowHunt\Model\MCPServerResponse[]
```

Search Mcp Servers

List MCP servers in a workspace.  Args:     workspace_id: The workspace ID.     user: The authenticated user.     controller: The MCP server controller.  Returns:     List[MCPServerResponse]: List of MCP servers.

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


$apiInstance = new FlowHunt\Api\MCPServersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$mcp_server_search_request = new \FlowHunt\Model\MCPServerSearchRequest(); // \FlowHunt\Model\MCPServerSearchRequest

try {
    $result = $apiInstance->searchMcpServers($workspace_id, $mcp_server_search_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MCPServersApi->searchMcpServers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **mcp_server_search_request** | [**\FlowHunt\Model\MCPServerSearchRequest**](../Model/MCPServerSearchRequest.md)|  | |

### Return type

[**\FlowHunt\Model\MCPServerResponse[]**](../Model/MCPServerResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateMcpServer()`

```php
updateMcpServer($mcp_server_id, $workspace_id, $mcp_server_create_request): \FlowHunt\Model\MCPServerResponse
```

Update Mcp Server

Update an MCP server.  Args:     main_request: The main request object for rate limiting.     workspace_id: The workspace ID.     mcp_server_id: The MCP server ID.     request: The update request.     user: The authenticated user.     controller: The MCP server controller.  Returns:     MCPServerResponse: The updated MCP server.

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


$apiInstance = new FlowHunt\Api\MCPServersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mcp_server_id = 'mcp_server_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$mcp_server_create_request = new \FlowHunt\Model\MCPServerCreateRequest(); // \FlowHunt\Model\MCPServerCreateRequest

try {
    $result = $apiInstance->updateMcpServer($mcp_server_id, $workspace_id, $mcp_server_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MCPServersApi->updateMcpServer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mcp_server_id** | **string**|  | |
| **workspace_id** | **string**|  | |
| **mcp_server_create_request** | [**\FlowHunt\Model\MCPServerCreateRequest**](../Model/MCPServerCreateRequest.md)|  | |

### Return type

[**\FlowHunt\Model\MCPServerResponse**](../Model/MCPServerResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
