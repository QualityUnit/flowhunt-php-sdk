# FlowHunt\MemoryApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createNode()**](MemoryApi.md#createNode) | **POST** /v2/memory/node/create | Create Node |
| [**deleteNode()**](MemoryApi.md#deleteNode) | **DELETE** /v2/memory/node/{node_id} | Delete Node |
| [**getNode()**](MemoryApi.md#getNode) | **POST** /v2/memory/node/{node_id} | Get Node |
| [**getOffloadedContent()**](MemoryApi.md#getOffloadedContent) | **POST** /v2/memory/node/{node_id}/offload/{offload_id} | Get Offloaded Content |
| [**processDocuments()**](MemoryApi.md#processDocuments) | **POST** /v2/memory/process-documents | Process Documents |
| [**searchMemoryCategories()**](MemoryApi.md#searchMemoryCategories) | **POST** /v2/memory/search | Search Memory Categories |
| [**searchMemoryNodeName()**](MemoryApi.md#searchMemoryNodeName) | **POST** /v2/memory/search_node_name | Search Memory Node Name |
| [**searchMemoryNodePath()**](MemoryApi.md#searchMemoryNodePath) | **POST** /v2/memory/search_node_path | Search Memory Node Path |
| [**updateNode()**](MemoryApi.md#updateNode) | **PUT** /v2/memory/node/{node_id} | Update Node |
| [**uploadMemoryNodeDocument()**](MemoryApi.md#uploadMemoryNodeDocument) | **POST** /v2/memory/upload/{cat_id} | Upload Memory Node Document |


## `createNode()`

```php
createNode($workspace_id, $node_detail_request): \FlowHunt\Model\MemoryNodeResponse
```

Create Node

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


$apiInstance = new FlowHunt\Api\MemoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$node_detail_request = new \FlowHunt\Model\NodeDetailRequest(); // \FlowHunt\Model\NodeDetailRequest

try {
    $result = $apiInstance->createNode($workspace_id, $node_detail_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MemoryApi->createNode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **node_detail_request** | [**\FlowHunt\Model\NodeDetailRequest**](../Model/NodeDetailRequest.md)|  | |

### Return type

[**\FlowHunt\Model\MemoryNodeResponse**](../Model/MemoryNodeResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteNode()`

```php
deleteNode($node_id, $workspace_id, $delete_node_request): \FlowHunt\Model\MemoryMessageResponse
```

Delete Node

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


$apiInstance = new FlowHunt\Api\MemoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$node_id = 'node_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$delete_node_request = new \FlowHunt\Model\DeleteNodeRequest(); // \FlowHunt\Model\DeleteNodeRequest

try {
    $result = $apiInstance->deleteNode($node_id, $workspace_id, $delete_node_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MemoryApi->deleteNode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **node_id** | **string**|  | |
| **workspace_id** | **string**|  | |
| **delete_node_request** | [**\FlowHunt\Model\DeleteNodeRequest**](../Model/DeleteNodeRequest.md)|  | |

### Return type

[**\FlowHunt\Model\MemoryMessageResponse**](../Model/MemoryMessageResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNode()`

```php
getNode($node_id, $workspace_id, $get_node_request): \FlowHunt\Model\MemoryNodeDetailResponse
```

Get Node

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


$apiInstance = new FlowHunt\Api\MemoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$node_id = 'node_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$get_node_request = new \FlowHunt\Model\GetNodeRequest(); // \FlowHunt\Model\GetNodeRequest

try {
    $result = $apiInstance->getNode($node_id, $workspace_id, $get_node_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MemoryApi->getNode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **node_id** | **string**|  | |
| **workspace_id** | **string**|  | |
| **get_node_request** | [**\FlowHunt\Model\GetNodeRequest**](../Model/GetNodeRequest.md)|  | |

### Return type

[**\FlowHunt\Model\MemoryNodeDetailResponse**](../Model/MemoryNodeDetailResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOffloadedContent()`

```php
getOffloadedContent($node_id, $offload_id, $workspace_id, $get_node_request): string
```

Get Offloaded Content

Get offloaded content for a memory node.  Args:     workspace_id: The workspace ID     node_id: The node ID     offload_id: The offload ID to retrieve     node_request: Request containing cat_id     memory_controller: Memory controller dependency     user: Current user  Returns:     The offloaded content as plain text

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


$apiInstance = new FlowHunt\Api\MemoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$node_id = 'node_id_example'; // string
$offload_id = 'offload_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$get_node_request = new \FlowHunt\Model\GetNodeRequest(); // \FlowHunt\Model\GetNodeRequest

try {
    $result = $apiInstance->getOffloadedContent($node_id, $offload_id, $workspace_id, $get_node_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MemoryApi->getOffloadedContent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **node_id** | **string**|  | |
| **offload_id** | **string**|  | |
| **workspace_id** | **string**|  | |
| **get_node_request** | [**\FlowHunt\Model\GetNodeRequest**](../Model/GetNodeRequest.md)|  | |

### Return type

**string**

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `processDocuments()`

```php
processDocuments($workspace_id, $memory_document_process_request): \FlowHunt\Model\MemoryMessageResponse
```

Process Documents

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


$apiInstance = new FlowHunt\Api\MemoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$memory_document_process_request = new \FlowHunt\Model\MemoryDocumentProcessRequest(); // \FlowHunt\Model\MemoryDocumentProcessRequest

try {
    $result = $apiInstance->processDocuments($workspace_id, $memory_document_process_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MemoryApi->processDocuments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **memory_document_process_request** | [**\FlowHunt\Model\MemoryDocumentProcessRequest**](../Model/MemoryDocumentProcessRequest.md)|  | |

### Return type

[**\FlowHunt\Model\MemoryMessageResponse**](../Model/MemoryMessageResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchMemoryCategories()`

```php
searchMemoryCategories($workspace_id, $memory_search_request): \FlowHunt\Model\MemorySearchResponse[]
```

Search Memory Categories

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


$apiInstance = new FlowHunt\Api\MemoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$memory_search_request = new \FlowHunt\Model\MemorySearchRequest(); // \FlowHunt\Model\MemorySearchRequest

try {
    $result = $apiInstance->searchMemoryCategories($workspace_id, $memory_search_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MemoryApi->searchMemoryCategories: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **memory_search_request** | [**\FlowHunt\Model\MemorySearchRequest**](../Model/MemorySearchRequest.md)|  | |

### Return type

[**\FlowHunt\Model\MemorySearchResponse[]**](../Model/MemorySearchResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchMemoryNodeName()`

```php
searchMemoryNodeName($workspace_id, $memory_node_name_search_request): \FlowHunt\Model\MemorySearchResponse[]
```

Search Memory Node Name

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


$apiInstance = new FlowHunt\Api\MemoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$memory_node_name_search_request = new \FlowHunt\Model\MemoryNodeNameSearchRequest(); // \FlowHunt\Model\MemoryNodeNameSearchRequest

try {
    $result = $apiInstance->searchMemoryNodeName($workspace_id, $memory_node_name_search_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MemoryApi->searchMemoryNodeName: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **memory_node_name_search_request** | [**\FlowHunt\Model\MemoryNodeNameSearchRequest**](../Model/MemoryNodeNameSearchRequest.md)|  | |

### Return type

[**\FlowHunt\Model\MemorySearchResponse[]**](../Model/MemorySearchResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchMemoryNodePath()`

```php
searchMemoryNodePath($workspace_id, $memory_node_path_search_request): \FlowHunt\Model\MemorySearchResponse[]
```

Search Memory Node Path

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


$apiInstance = new FlowHunt\Api\MemoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$memory_node_path_search_request = new \FlowHunt\Model\MemoryNodePathSearchRequest(); // \FlowHunt\Model\MemoryNodePathSearchRequest

try {
    $result = $apiInstance->searchMemoryNodePath($workspace_id, $memory_node_path_search_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MemoryApi->searchMemoryNodePath: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **memory_node_path_search_request** | [**\FlowHunt\Model\MemoryNodePathSearchRequest**](../Model/MemoryNodePathSearchRequest.md)|  | |

### Return type

[**\FlowHunt\Model\MemorySearchResponse[]**](../Model/MemorySearchResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNode()`

```php
updateNode($node_id, $workspace_id, $node_update_request): \FlowHunt\Model\MemoryNodeResponse
```

Update Node

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


$apiInstance = new FlowHunt\Api\MemoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$node_id = 'node_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$node_update_request = new \FlowHunt\Model\NodeUpdateRequest(); // \FlowHunt\Model\NodeUpdateRequest

try {
    $result = $apiInstance->updateNode($node_id, $workspace_id, $node_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MemoryApi->updateNode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **node_id** | **string**|  | |
| **workspace_id** | **string**|  | |
| **node_update_request** | [**\FlowHunt\Model\NodeUpdateRequest**](../Model/NodeUpdateRequest.md)|  | |

### Return type

[**\FlowHunt\Model\MemoryNodeResponse**](../Model/MemoryNodeResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `uploadMemoryNodeDocument()`

```php
uploadMemoryNodeDocument($cat_id, $workspace_id, $file): \FlowHunt\Model\MemoryDocumentUploadResponse
```

Upload Memory Node Document

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


$apiInstance = new FlowHunt\Api\MemoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cat_id = 'cat_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$file = '/path/to/file.txt'; // \SplFileObject

try {
    $result = $apiInstance->uploadMemoryNodeDocument($cat_id, $workspace_id, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MemoryApi->uploadMemoryNodeDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cat_id** | **string**|  | |
| **workspace_id** | **string**|  | |
| **file** | **\SplFileObject****\SplFileObject**|  | |

### Return type

[**\FlowHunt\Model\MemoryDocumentUploadResponse**](../Model/MemoryDocumentUploadResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
