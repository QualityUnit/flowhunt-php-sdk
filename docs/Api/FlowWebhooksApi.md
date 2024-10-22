# OpenAPI\Client\FlowWebhooksApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**executeWebhook()**](FlowWebhooksApi.md#executeWebhook) | **POST** /v2/flows/webhooks/{chatbot_id} | Execute Webhook |
| [**executeWebhookFromFlow()**](FlowWebhooksApi.md#executeWebhookFromFlow) | **POST** /v2/flows/webhooks/from_flow/{flow_id} | Execute Webhook From Flow |
| [**pollWebhookResponse()**](FlowWebhooksApi.md#pollWebhookResponse) | **POST** /v2/flows/webhooks/invocation_response/{message_id} | Poll Webhook Response |


## `executeWebhook()`

```php
executeWebhook($chatbot_id, $workspace_id, $trigger_type): \OpenAPI\Client\Model\FlowSessionInvocationResponse
```

Execute Webhook

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FlowWebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$chatbot_id = 'chatbot_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$trigger_type = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\TriggerType(); // \OpenAPI\Client\Model\TriggerType

try {
    $result = $apiInstance->executeWebhook($chatbot_id, $workspace_id, $trigger_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlowWebhooksApi->executeWebhook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **chatbot_id** | **string**|  | |
| **workspace_id** | **string**|  | |
| **trigger_type** | [**\OpenAPI\Client\Model\TriggerType**](../Model/.md)|  | |

### Return type

[**\OpenAPI\Client\Model\FlowSessionInvocationResponse**](../Model/FlowSessionInvocationResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `executeWebhookFromFlow()`

```php
executeWebhookFromFlow($flow_id, $workspace_id, $trigger_type): \OpenAPI\Client\Model\FlowSessionInvocationResponse
```

Execute Webhook From Flow

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


$apiInstance = new OpenAPI\Client\Api\FlowWebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$flow_id = 'flow_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$trigger_type = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\TriggerType(); // \OpenAPI\Client\Model\TriggerType

try {
    $result = $apiInstance->executeWebhookFromFlow($flow_id, $workspace_id, $trigger_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlowWebhooksApi->executeWebhookFromFlow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **flow_id** | **string**|  | |
| **workspace_id** | **string**|  | |
| **trigger_type** | [**\OpenAPI\Client\Model\TriggerType**](../Model/.md)|  | |

### Return type

[**\OpenAPI\Client\Model\FlowSessionInvocationResponse**](../Model/FlowSessionInvocationResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pollWebhookResponse()`

```php
pollWebhookResponse($message_id): \OpenAPI\Client\Model\FlowSessionInvocationMessageResponse
```

Poll Webhook Response

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FlowWebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$message_id = 'message_id_example'; // string

try {
    $result = $apiInstance->pollWebhookResponse($message_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlowWebhooksApi->pollWebhookResponse: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **message_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\FlowSessionInvocationMessageResponse**](../Model/FlowSessionInvocationMessageResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
