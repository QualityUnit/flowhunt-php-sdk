# FlowHunt\SemanticSearchApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getSimilarDocsByDocId()**](SemanticSearchApi.md#getSimilarDocsByDocId) | **POST** /v2/similarities/document/live | Get Similar Docs By Doc Id |
| [**getSimilarDocsByQuery()**](SemanticSearchApi.md#getSimilarDocsByQuery) | **POST** /v2/similarities/query/live | Get Similar Docs By Query |
| [**scheduleSimilarDocsByDocId()**](SemanticSearchApi.md#scheduleSimilarDocsByDocId) | **POST** /v2/similarities/document | Schedule Similar Docs By Doc Id |
| [**scheduleSimilarDocsByQuery()**](SemanticSearchApi.md#scheduleSimilarDocsByQuery) | **POST** /v2/similarities/query | Schedule Similar Docs By Query |


## `getSimilarDocsByDocId()`

```php
getSimilarDocsByDocId($workspace_id, $document_similarity_request): \FlowHunt\Model\VectorDocumentResponse[]
```

Get Similar Docs By Doc Id

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


$apiInstance = new FlowHunt\Api\SemanticSearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$document_similarity_request = new \FlowHunt\Model\DocumentSimilarityRequest(); // \FlowHunt\Model\DocumentSimilarityRequest

try {
    $result = $apiInstance->getSimilarDocsByDocId($workspace_id, $document_similarity_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SemanticSearchApi->getSimilarDocsByDocId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **document_similarity_request** | [**\FlowHunt\Model\DocumentSimilarityRequest**](../Model/DocumentSimilarityRequest.md)|  | |

### Return type

[**\FlowHunt\Model\VectorDocumentResponse[]**](../Model/VectorDocumentResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSimilarDocsByQuery()`

```php
getSimilarDocsByQuery($workspace_id, $query_similarity_request): \FlowHunt\Model\VectorDocumentResponse[]
```

Get Similar Docs By Query

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


$apiInstance = new FlowHunt\Api\SemanticSearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$query_similarity_request = new \FlowHunt\Model\QuerySimilarityRequest(); // \FlowHunt\Model\QuerySimilarityRequest

try {
    $result = $apiInstance->getSimilarDocsByQuery($workspace_id, $query_similarity_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SemanticSearchApi->getSimilarDocsByQuery: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **query_similarity_request** | [**\FlowHunt\Model\QuerySimilarityRequest**](../Model/QuerySimilarityRequest.md)|  | |

### Return type

[**\FlowHunt\Model\VectorDocumentResponse[]**](../Model/VectorDocumentResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `scheduleSimilarDocsByDocId()`

```php
scheduleSimilarDocsByDocId($workspace_id, $document_similarity_task_request): \FlowHunt\Model\VectorDocumentsTaskResponse
```

Schedule Similar Docs By Doc Id

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


$apiInstance = new FlowHunt\Api\SemanticSearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$document_similarity_task_request = new \FlowHunt\Model\DocumentSimilarityTaskRequest(); // \FlowHunt\Model\DocumentSimilarityTaskRequest

try {
    $result = $apiInstance->scheduleSimilarDocsByDocId($workspace_id, $document_similarity_task_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SemanticSearchApi->scheduleSimilarDocsByDocId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **document_similarity_task_request** | [**\FlowHunt\Model\DocumentSimilarityTaskRequest**](../Model/DocumentSimilarityTaskRequest.md)|  | |

### Return type

[**\FlowHunt\Model\VectorDocumentsTaskResponse**](../Model/VectorDocumentsTaskResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `scheduleSimilarDocsByQuery()`

```php
scheduleSimilarDocsByQuery($workspace_id, $query_similarity_task_request): \FlowHunt\Model\VectorDocumentsTaskResponse
```

Schedule Similar Docs By Query

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


$apiInstance = new FlowHunt\Api\SemanticSearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$query_similarity_task_request = new \FlowHunt\Model\QuerySimilarityTaskRequest(); // \FlowHunt\Model\QuerySimilarityTaskRequest

try {
    $result = $apiInstance->scheduleSimilarDocsByQuery($workspace_id, $query_similarity_task_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SemanticSearchApi->scheduleSimilarDocsByQuery: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **query_similarity_task_request** | [**\FlowHunt\Model\QuerySimilarityTaskRequest**](../Model/QuerySimilarityTaskRequest.md)|  | |

### Return type

[**\FlowHunt\Model\VectorDocumentsTaskResponse**](../Model/VectorDocumentsTaskResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
