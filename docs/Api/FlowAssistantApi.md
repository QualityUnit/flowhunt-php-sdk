# FlowHunt\FlowAssistantApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**applyFlowAssistantChanges()**](FlowAssistantApi.md#applyFlowAssistantChanges) | **POST** /v2/flow_assistants/apply_changes | Apply Flow Assistant Changes |
| [**createFlowAssistantSession()**](FlowAssistantApi.md#createFlowAssistantSession) | **POST** /v2/flow_assistants/create | Create Flow Assistant Session |
| [**invokeFlowAssistantResponse()**](FlowAssistantApi.md#invokeFlowAssistantResponse) | **POST** /v2/flow_assistants/{session_id}/invoke | Invoke Flow Assistant Response |
| [**pollFlowAssistantResponse()**](FlowAssistantApi.md#pollFlowAssistantResponse) | **POST** /v2/flow_assistants/{session_id}/invocation_response/{from_timestamp} | Poll Flow Assistant Response |
| [**rejectFlowAssistantChanges()**](FlowAssistantApi.md#rejectFlowAssistantChanges) | **POST** /v2/flow_assistants/reject_changes | Reject Flow Assistant Changes |


## `applyFlowAssistantChanges()`

```php
applyFlowAssistantChanges($workspace_id, $flow_assistant_apply_reject_changes_request): \FlowHunt\Model\FlowDetailResponse
```

Apply Flow Assistant Changes

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = FlowHunt\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FlowHunt\Api\FlowAssistantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$flow_assistant_apply_reject_changes_request = new \FlowHunt\Model\FlowAssistantApplyRejectChangesRequest(); // \FlowHunt\Model\FlowAssistantApplyRejectChangesRequest

try {
    $result = $apiInstance->applyFlowAssistantChanges($workspace_id, $flow_assistant_apply_reject_changes_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlowAssistantApi->applyFlowAssistantChanges: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **flow_assistant_apply_reject_changes_request** | [**\FlowHunt\Model\FlowAssistantApplyRejectChangesRequest**](../Model/FlowAssistantApplyRejectChangesRequest.md)|  | |

### Return type

[**\FlowHunt\Model\FlowDetailResponse**](../Model/FlowDetailResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createFlowAssistantSession()`

```php
createFlowAssistantSession($workspace_id, $flow_assistant_session_create_request): \FlowHunt\Model\FlowSessionResponse
```

Create Flow Assistant Session

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = FlowHunt\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FlowHunt\Api\FlowAssistantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$flow_assistant_session_create_request = new \FlowHunt\Model\FlowAssistantSessionCreateRequest(); // \FlowHunt\Model\FlowAssistantSessionCreateRequest

try {
    $result = $apiInstance->createFlowAssistantSession($workspace_id, $flow_assistant_session_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlowAssistantApi->createFlowAssistantSession: ', $e->getMessage(), PHP_EOL;
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

## `invokeFlowAssistantResponse()`

```php
invokeFlowAssistantResponse($session_id, $flow_assistant_invoke_request): \FlowHunt\Model\FlowSessionInvocationResponse
```

Invoke Flow Assistant Response

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FlowHunt\Api\FlowAssistantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$session_id = 'session_id_example'; // string
$flow_assistant_invoke_request = new \FlowHunt\Model\FlowAssistantInvokeRequest(); // \FlowHunt\Model\FlowAssistantInvokeRequest

try {
    $result = $apiInstance->invokeFlowAssistantResponse($session_id, $flow_assistant_invoke_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlowAssistantApi->invokeFlowAssistantResponse: ', $e->getMessage(), PHP_EOL;
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

## `pollFlowAssistantResponse()`

```php
pollFlowAssistantResponse($session_id, $from_timestamp): \FlowHunt\Model\FlowSessionEvent[]
```

Poll Flow Assistant Response

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FlowHunt\Api\FlowAssistantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$session_id = 'session_id_example'; // string
$from_timestamp = 'from_timestamp_example'; // string

try {
    $result = $apiInstance->pollFlowAssistantResponse($session_id, $from_timestamp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlowAssistantApi->pollFlowAssistantResponse: ', $e->getMessage(), PHP_EOL;
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

## `rejectFlowAssistantChanges()`

```php
rejectFlowAssistantChanges($workspace_id, $flow_assistant_apply_reject_changes_request): \FlowHunt\Model\FlowDetailResponse
```

Reject Flow Assistant Changes

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = FlowHunt\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FlowHunt\Api\FlowAssistantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$flow_assistant_apply_reject_changes_request = new \FlowHunt\Model\FlowAssistantApplyRejectChangesRequest(); // \FlowHunt\Model\FlowAssistantApplyRejectChangesRequest

try {
    $result = $apiInstance->rejectFlowAssistantChanges($workspace_id, $flow_assistant_apply_reject_changes_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlowAssistantApi->rejectFlowAssistantChanges: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **flow_assistant_apply_reject_changes_request** | [**\FlowHunt\Model\FlowAssistantApplyRejectChangesRequest**](../Model/FlowAssistantApplyRejectChangesRequest.md)|  | |

### Return type

[**\FlowHunt\Model\FlowDetailResponse**](../Model/FlowDetailResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
