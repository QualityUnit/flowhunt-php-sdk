# FlowHunt\ReindexApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getReindexStatus()**](ReindexApi.md#getReindexStatus) | **GET** /v2/reindex/status | Get Reindex Status |
| [**triggerReindex()**](ReindexApi.md#triggerReindex) | **POST** /v2/reindex/ | Trigger Reindex |


## `getReindexStatus()`

```php
getReindexStatus($task_id): \FlowHunt\Model\ReindexStatusResponse
```

Get Reindex Status

Get the status of a reindex operation.  The task_id format is: {workspace_id}_{embedding_model} or installation_{embedding_model}

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sudo_api_key_header
$config = FlowHunt\Configuration::getDefaultConfiguration()->setApiKey('Sudo-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FlowHunt\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Sudo-Api-Key', 'Bearer');


$apiInstance = new FlowHunt\Api\ReindexApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_id = 'task_id_example'; // string

try {
    $result = $apiInstance->getReindexStatus($task_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReindexApi->getReindexStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **task_id** | **string**|  | |

### Return type

[**\FlowHunt\Model\ReindexStatusResponse**](../Model/ReindexStatusResponse.md)

### Authorization

[sudo_api_key_header](../../README.md#sudo_api_key_header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `triggerReindex()`

```php
triggerReindex($reindex_request): \FlowHunt\Model\ReindexStartResponse
```

Trigger Reindex

Trigger a reindex operation for all data or a specific workspace.  This endpoint requires sudo API key authentication.  The reindex operation will: 1. Create a new versioned Qdrant collection 2. Reindex all documents, FAQs, and schedules 3. Support resume capability via Redis cursor 4. Be idempotent - can be called multiple times safely

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sudo_api_key_header
$config = FlowHunt\Configuration::getDefaultConfiguration()->setApiKey('Sudo-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FlowHunt\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Sudo-Api-Key', 'Bearer');


$apiInstance = new FlowHunt\Api\ReindexApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$reindex_request = new \FlowHunt\Model\ReindexRequest(); // \FlowHunt\Model\ReindexRequest

try {
    $result = $apiInstance->triggerReindex($reindex_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReindexApi->triggerReindex: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **reindex_request** | [**\FlowHunt\Model\ReindexRequest**](../Model/ReindexRequest.md)|  | |

### Return type

[**\FlowHunt\Model\ReindexStartResponse**](../Model/ReindexStartResponse.md)

### Authorization

[sudo_api_key_header](../../README.md#sudo_api_key_header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
