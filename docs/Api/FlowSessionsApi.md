# OpenAPI\Client\FlowSessionsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteChatbotSessionView()**](FlowSessionsApi.md#deleteChatbotSessionView) | **DELETE** /v2/chatbots/sessions/{session_id} | Delete Chatbot Session View |
| [**getChatbotSessionView()**](FlowSessionsApi.md#getChatbotSessionView) | **GET** /v2/chatbots/sessions/{session_id} | Get Chatbot Session View |
| [**searchChatbotSessionsView()**](FlowSessionsApi.md#searchChatbotSessionsView) | **POST** /v2/chatbots/sessions/search | Search Chatbot Sessions View |
| [**updateChatbotSessionView()**](FlowSessionsApi.md#updateChatbotSessionView) | **PUT** /v2/chatbots/sessions/{session_id} | Update Chatbot Session View |


## `deleteChatbotSessionView()`

```php
deleteChatbotSessionView($session_id, $workspace_id): \OpenAPI\Client\Model\Completed
```

Delete Chatbot Session View

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FlowSessionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$session_id = 'session_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->deleteChatbotSessionView($session_id, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlowSessionsApi->deleteChatbotSessionView: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **session_id** | **string**|  | |
| **workspace_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\Completed**](../Model/Completed.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getChatbotSessionView()`

```php
getChatbotSessionView($session_id, $workspace_id): \OpenAPI\Client\Model\FlowSessionViewResponse
```

Get Chatbot Session View

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FlowSessionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$session_id = 'session_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->getChatbotSessionView($session_id, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlowSessionsApi->getChatbotSessionView: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **session_id** | **string**|  | |
| **workspace_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\FlowSessionViewResponse**](../Model/FlowSessionViewResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchChatbotSessionsView()`

```php
searchChatbotSessionsView($workspace_id, $flow_session_view_search_request): \OpenAPI\Client\Model\FlowSessionViewResponse[]
```

Search Chatbot Sessions View

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FlowSessionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$flow_session_view_search_request = new \OpenAPI\Client\Model\FlowSessionViewSearchRequest(); // \OpenAPI\Client\Model\FlowSessionViewSearchRequest

try {
    $result = $apiInstance->searchChatbotSessionsView($workspace_id, $flow_session_view_search_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlowSessionsApi->searchChatbotSessionsView: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **flow_session_view_search_request** | [**\OpenAPI\Client\Model\FlowSessionViewSearchRequest**](../Model/FlowSessionViewSearchRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\FlowSessionViewResponse[]**](../Model/FlowSessionViewResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateChatbotSessionView()`

```php
updateChatbotSessionView($session_id, $workspace_id, $flow_session_view_update_request): \OpenAPI\Client\Model\FlowSessionViewResponse
```

Update Chatbot Session View

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FlowSessionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$session_id = 'session_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$flow_session_view_update_request = new \OpenAPI\Client\Model\FlowSessionViewUpdateRequest(); // \OpenAPI\Client\Model\FlowSessionViewUpdateRequest

try {
    $result = $apiInstance->updateChatbotSessionView($session_id, $workspace_id, $flow_session_view_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlowSessionsApi->updateChatbotSessionView: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **session_id** | **string**|  | |
| **workspace_id** | **string**|  | |
| **flow_session_view_update_request** | [**\OpenAPI\Client\Model\FlowSessionViewUpdateRequest**](../Model/FlowSessionViewUpdateRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\FlowSessionViewResponse**](../Model/FlowSessionViewResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
