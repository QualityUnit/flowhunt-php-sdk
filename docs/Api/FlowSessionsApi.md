# FlowHunt\FlowSessionsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteChatbotSessionView()**](FlowSessionsApi.md#deleteChatbotSessionView) | **DELETE** /v2/chatbots/sessions/{session_id} | Delete Chatbot Session View |
| [**getChartFeedback()**](FlowSessionsApi.md#getChartFeedback) | **POST** /v2/chatbots/sessions/charts | Get Chart Feedback |
| [**getChartSessionDuration()**](FlowSessionsApi.md#getChartSessionDuration) | **POST** /v2/chatbots/sessions/chart_session_duration | Get Chart Session Duration |
| [**getChatbotSessionView()**](FlowSessionsApi.md#getChatbotSessionView) | **GET** /v2/chatbots/sessions/{session_id} | Get Chatbot Session View |
| [**getToolCallsChartFeedback()**](FlowSessionsApi.md#getToolCallsChartFeedback) | **POST** /v2/chatbots/sessions/chart_tool_calls | Get Tool Calls Chart Feedback |
| [**searchChatbotSessionsView()**](FlowSessionsApi.md#searchChatbotSessionsView) | **POST** /v2/chatbots/sessions/search | Search Chatbot Sessions View |
| [**updateChatbotSessionView()**](FlowSessionsApi.md#updateChatbotSessionView) | **PUT** /v2/chatbots/sessions/{session_id} | Update Chatbot Session View |


## `deleteChatbotSessionView()`

```php
deleteChatbotSessionView($session_id, $workspace_id): \FlowHunt\Model\Completed
```

Delete Chatbot Session View

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


$apiInstance = new FlowHunt\Api\FlowSessionsApi(
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

[**\FlowHunt\Model\Completed**](../Model/Completed.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getChartFeedback()`

```php
getChartFeedback($workspace_id, $charts_feedback_request): \FlowHunt\Model\FeedbackChartResponse
```

Get Chart Feedback

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


$apiInstance = new FlowHunt\Api\FlowSessionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$charts_feedback_request = new \FlowHunt\Model\ChartsFeedbackRequest(); // \FlowHunt\Model\ChartsFeedbackRequest

try {
    $result = $apiInstance->getChartFeedback($workspace_id, $charts_feedback_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlowSessionsApi->getChartFeedback: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **charts_feedback_request** | [**\FlowHunt\Model\ChartsFeedbackRequest**](../Model/ChartsFeedbackRequest.md)|  | |

### Return type

[**\FlowHunt\Model\FeedbackChartResponse**](../Model/FeedbackChartResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getChartSessionDuration()`

```php
getChartSessionDuration($workspace_id, $charts_feedback_request): \FlowHunt\Model\ChartSessionDurationResponse
```

Get Chart Session Duration

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


$apiInstance = new FlowHunt\Api\FlowSessionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$charts_feedback_request = new \FlowHunt\Model\ChartsFeedbackRequest(); // \FlowHunt\Model\ChartsFeedbackRequest

try {
    $result = $apiInstance->getChartSessionDuration($workspace_id, $charts_feedback_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlowSessionsApi->getChartSessionDuration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **charts_feedback_request** | [**\FlowHunt\Model\ChartsFeedbackRequest**](../Model/ChartsFeedbackRequest.md)|  | |

### Return type

[**\FlowHunt\Model\ChartSessionDurationResponse**](../Model/ChartSessionDurationResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getChatbotSessionView()`

```php
getChatbotSessionView($session_id, $workspace_id): \FlowHunt\Model\FlowSessionViewResponse
```

Get Chatbot Session View

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


$apiInstance = new FlowHunt\Api\FlowSessionsApi(
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

[**\FlowHunt\Model\FlowSessionViewResponse**](../Model/FlowSessionViewResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getToolCallsChartFeedback()`

```php
getToolCallsChartFeedback($workspace_id, $charts_feedback_request): \FlowHunt\Model\ToolCallFeedbackResponse[]
```

Get Tool Calls Chart Feedback

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


$apiInstance = new FlowHunt\Api\FlowSessionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$charts_feedback_request = new \FlowHunt\Model\ChartsFeedbackRequest(); // \FlowHunt\Model\ChartsFeedbackRequest

try {
    $result = $apiInstance->getToolCallsChartFeedback($workspace_id, $charts_feedback_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlowSessionsApi->getToolCallsChartFeedback: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **charts_feedback_request** | [**\FlowHunt\Model\ChartsFeedbackRequest**](../Model/ChartsFeedbackRequest.md)|  | |

### Return type

[**\FlowHunt\Model\ToolCallFeedbackResponse[]**](../Model/ToolCallFeedbackResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchChatbotSessionsView()`

```php
searchChatbotSessionsView($workspace_id, $flow_session_view_search_request): \FlowHunt\Model\FlowSessionViewResponse[]
```

Search Chatbot Sessions View

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


$apiInstance = new FlowHunt\Api\FlowSessionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$flow_session_view_search_request = new \FlowHunt\Model\FlowSessionViewSearchRequest(); // \FlowHunt\Model\FlowSessionViewSearchRequest

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
| **flow_session_view_search_request** | [**\FlowHunt\Model\FlowSessionViewSearchRequest**](../Model/FlowSessionViewSearchRequest.md)|  | |

### Return type

[**\FlowHunt\Model\FlowSessionViewResponse[]**](../Model/FlowSessionViewResponse.md)

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
updateChatbotSessionView($session_id, $workspace_id, $flow_session_view_update_request): \FlowHunt\Model\FlowSessionViewResponse
```

Update Chatbot Session View

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


$apiInstance = new FlowHunt\Api\FlowSessionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$session_id = 'session_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$flow_session_view_update_request = new \FlowHunt\Model\FlowSessionViewUpdateRequest(); // \FlowHunt\Model\FlowSessionViewUpdateRequest

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
| **flow_session_view_update_request** | [**\FlowHunt\Model\FlowSessionViewUpdateRequest**](../Model/FlowSessionViewUpdateRequest.md)|  | |

### Return type

[**\FlowHunt\Model\FlowSessionViewResponse**](../Model/FlowSessionViewResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
