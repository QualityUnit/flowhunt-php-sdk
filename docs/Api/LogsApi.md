# FlowHunt\LogsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**searchLogs()**](LogsApi.md#searchLogs) | **POST** /v2/logs/search | Search logs |


## `searchLogs()`

```php
searchLogs($workspace_id, $logs_search_request): \FlowHunt\Model\LogResponse[]
```

Search logs

Search for logs based on various criteria

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


$apiInstance = new FlowHunt\Api\LogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$logs_search_request = new \FlowHunt\Model\LogsSearchRequest(); // \FlowHunt\Model\LogsSearchRequest

try {
    $result = $apiInstance->searchLogs($workspace_id, $logs_search_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LogsApi->searchLogs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **logs_search_request** | [**\FlowHunt\Model\LogsSearchRequest**](../Model/LogsSearchRequest.md)|  | |

### Return type

[**\FlowHunt\Model\LogResponse[]**](../Model/LogResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
