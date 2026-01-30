# FlowHunt\FlowAssistantV3Api

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createV3FlowAssistantSession()**](FlowAssistantV3Api.md#createV3FlowAssistantSession) | **POST** /v3/flow-assistants/create | Create V3 Flow Assistant Session |
| [**invokeV3FlowAssistantResponse()**](FlowAssistantV3Api.md#invokeV3FlowAssistantResponse) | **POST** /v3/flow-assistants/{session_id}/invoke | Invoke V3 Flow Assistant Response |
| [**pollV3FlowAssistantResponse()**](FlowAssistantV3Api.md#pollV3FlowAssistantResponse) | **POST** /v3/flow-assistants/{session_id}/invocation_response/{from_timestamp} | Poll V3 Flow Assistant Response |


## `createV3FlowAssistantSession()`

```php
createV3FlowAssistantSession($workspace_id, $flow_assistant_session_create_request): \FlowHunt\Model\FlowSessionResponse
```

Create V3 Flow Assistant Session

Create a new assistant session.  Returns session_id and created_at for the new session.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = FlowHunt\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FlowHunt\Api\FlowAssistantV3Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$flow_assistant_session_create_request = new \FlowHunt\Model\FlowAssistantSessionCreateRequest(); // \FlowHunt\Model\FlowAssistantSessionCreateRequest

try {
    $result = $apiInstance->createV3FlowAssistantSession($workspace_id, $flow_assistant_session_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlowAssistantV3Api->createV3FlowAssistantSession: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **flow_assistant_session_create_request** | [**\FlowHunt\Model\FlowAssistantSessionCreateRequest**](../Model/FlowAssistantSessionCreateRequest.md)|  | |

### Return type

[**\FlowHunt\Model\FlowSessionResponse**](../Model/FlowSessionResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `invokeV3FlowAssistantResponse()`

```php
invokeV3FlowAssistantResponse($session_id, $flow_assistant_invoke_request): \FlowHunt\Model\FlowSessionInvocationResponse
```

Invoke V3 Flow Assistant Response

Start an assistant invocation.  Returns immediately - client polls for events via invocation_response endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FlowHunt\Api\FlowAssistantV3Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$session_id = 'session_id_example'; // string
$flow_assistant_invoke_request = new \FlowHunt\Model\FlowAssistantInvokeRequest(); // \FlowHunt\Model\FlowAssistantInvokeRequest

try {
    $result = $apiInstance->invokeV3FlowAssistantResponse($session_id, $flow_assistant_invoke_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlowAssistantV3Api->invokeV3FlowAssistantResponse: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **session_id** | **string**|  | |
| **flow_assistant_invoke_request** | [**\FlowHunt\Model\FlowAssistantInvokeRequest**](../Model/FlowAssistantInvokeRequest.md)|  | |

### Return type

[**\FlowHunt\Model\FlowSessionInvocationResponse**](../Model/FlowSessionInvocationResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pollV3FlowAssistantResponse()`

```php
pollV3FlowAssistantResponse($session_id, $from_timestamp): \FlowHunt\Model\FlowSessionEvent[]
```

Poll V3 Flow Assistant Response

Poll for events after the given timestamp.  Used by client to receive streamed responses from the assistant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FlowHunt\Api\FlowAssistantV3Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$session_id = 'session_id_example'; // string
$from_timestamp = 'from_timestamp_example'; // string

try {
    $result = $apiInstance->pollV3FlowAssistantResponse($session_id, $from_timestamp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlowAssistantV3Api->pollV3FlowAssistantResponse: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **session_id** | **string**|  | |
| **from_timestamp** | **string**|  | |

### Return type

[**\FlowHunt\Model\FlowSessionEvent[]**](../Model/FlowSessionEvent.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
