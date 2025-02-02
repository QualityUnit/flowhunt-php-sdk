# FlowHunt\FlowsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createChatbotSession()**](FlowsApi.md#createChatbotSession) | **POST** /v2/flows/sessions/create | Create Chatbot Session |
| [**createFlow()**](FlowsApi.md#createFlow) | **POST** /v2/flows/create | Create Flow |
| [**createFlowCategory()**](FlowsApi.md#createFlowCategory) | **POST** /v2/flows/categories/create | Create Flow Category |
| [**createFlowCron()**](FlowsApi.md#createFlowCron) | **POST** /v2/flows/crons/create | Create Flow Cron |
| [**createFlowSession()**](FlowsApi.md#createFlowSession) | **POST** /v2/flows/sessions/from_flow/create | Create Flow Session |
| [**deleteAttachment()**](FlowsApi.md#deleteAttachment) | **DELETE** /v2/flows/sessions/{session_id}/attachments/{file_id} | Delete Attachment |
| [**deleteFlow()**](FlowsApi.md#deleteFlow) | **DELETE** /v2/flows/{flow_id} | Delete Flow |
| [**deleteFlowCategory()**](FlowsApi.md#deleteFlowCategory) | **DELETE** /v2/flows/categories/{cat_id} | Delete Flow Category |
| [**deleteFlowCron()**](FlowsApi.md#deleteFlowCron) | **DELETE** /v2/flows/crons/{flow_id}/{cron_id} | Delete Flow Cron |
| [**executeFlowCron()**](FlowsApi.md#executeFlowCron) | **POST** /v2/flows/crons/{flow_id}/{cron_id}/execute | Execute Flow Cron |
| [**get()**](FlowsApi.md#get) | **GET** /v2/flows/{flow_id} | Get |
| [**getAllComponents()**](FlowsApi.md#getAllComponents) | **GET** /v2/flows/components/all | Get All Components |
| [**getAttachments()**](FlowsApi.md#getAttachments) | **GET** /v2/flows/sessions/{session_id}/attachments | Get Attachments |
| [**getInvokedFlowResults()**](FlowsApi.md#getInvokedFlowResults) | **GET** /v2/flows/{flow_id}/{task_id} | Get Invoked Flow Results |
| [**getPublicFlow()**](FlowsApi.md#getPublicFlow) | **GET** /v2/flows/public/{flow_id} | Get Public Flow |
| [**getTriggerTypes()**](FlowsApi.md#getTriggerTypes) | **POST** /v2/flows/{flow_id}/triggers | Get Trigger Types |
| [**invokeFlow()**](FlowsApi.md#invokeFlow) | **POST** /v2/flows/{flow_id}/invoke | Invoke Flow |
| [**invokeFlowResponse()**](FlowsApi.md#invokeFlowResponse) | **POST** /v2/flows/sessions/{session_id}/invoke | Invoke Flow Response |
| [**invokeFlowSingleton()**](FlowsApi.md#invokeFlowSingleton) | **POST** /v2/flows/{flow_id}/invoke_singleton | Invoke Flow Singleton |
| [**pollFlowResponse()**](FlowsApi.md#pollFlowResponse) | **POST** /v2/flows/sessions/{session_id}/invocation_response/{from_timestamp} | Poll Flow Response |
| [**search()**](FlowsApi.md#search) | **POST** /v2/flows/ | Search |
| [**searchAll()**](FlowsApi.md#searchAll) | **POST** /v2/flows/all | Search All |
| [**searchFlowCategories()**](FlowsApi.md#searchFlowCategories) | **POST** /v2/flows/categories/search | Search Flow Categories |
| [**searchFlowCrons()**](FlowsApi.md#searchFlowCrons) | **POST** /v2/flows/crons/search | Search Flow Crons |
| [**streamFlowResponse()**](FlowsApi.md#streamFlowResponse) | **POST** /v2/flows/sessions/{session_id}/stream | Stream Flow Response |
| [**updateFlow()**](FlowsApi.md#updateFlow) | **PUT** /v2/flows/{flow_id} | Update Flow |
| [**updateFlowCategory()**](FlowsApi.md#updateFlowCategory) | **PUT** /v2/flows/categories/{cat_id} | Update Flow Category |
| [**updateFlowCron()**](FlowsApi.md#updateFlowCron) | **PUT** /v2/flows/crons/{flow_id}/{cron_id} | Update Flow Cron |
| [**uploadAttachments()**](FlowsApi.md#uploadAttachments) | **POST** /v2/flows/sessions/{session_id}/attachments | Upload Attachments |


## `createChatbotSession()`

```php
createChatbotSession($workspace_id, $flow_session_create_request): \FlowHunt\Model\FlowSessionResponse
```

Create Chatbot Session

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FlowHunt\Api\FlowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$workspace_id = 'workspace_id_example'; // string
$flow_session_create_request = new \FlowHunt\Model\FlowSessionCreateRequest(); // \FlowHunt\Model\FlowSessionCreateRequest

try {
    $result = $apiInstance->createChatbotSession($workspace_id, $flow_session_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlowsApi->createChatbotSession: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **flow_session_create_request** | [**\FlowHunt\Model\FlowSessionCreateRequest**](../Model/FlowSessionCreateRequest.md)|  | |

### Return type

[**\FlowHunt\Model\FlowSessionResponse**](../Model/FlowSessionResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createFlow()`

```php
createFlow($workspace_id, $flow_create): \FlowHunt\Model\FlowDetailResponse
```

Create Flow

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


$apiInstance = new FlowHunt\Api\FlowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$flow_create = new \FlowHunt\Model\FlowCreate(); // \FlowHunt\Model\FlowCreate

try {
    $result = $apiInstance->createFlow($workspace_id, $flow_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlowsApi->createFlow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **flow_create** | [**\FlowHunt\Model\FlowCreate**](../Model/FlowCreate.md)|  | |

### Return type

[**\FlowHunt\Model\FlowDetailResponse**](../Model/FlowDetailResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createFlowCategory()`

```php
createFlowCategory($workspace_id, $flow_category_create_request): \FlowHunt\Model\FlowCategoryResponse
```

Create Flow Category

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


$apiInstance = new FlowHunt\Api\FlowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$flow_category_create_request = new \FlowHunt\Model\FlowCategoryCreateRequest(); // \FlowHunt\Model\FlowCategoryCreateRequest

try {
    $result = $apiInstance->createFlowCategory($workspace_id, $flow_category_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlowsApi->createFlowCategory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **flow_category_create_request** | [**\FlowHunt\Model\FlowCategoryCreateRequest**](../Model/FlowCategoryCreateRequest.md)|  | |

### Return type

[**\FlowHunt\Model\FlowCategoryResponse**](../Model/FlowCategoryResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createFlowCron()`

```php
createFlowCron($workspace_id, $flow_cron_create_request): \FlowHunt\Model\FlowCronResponse
```

Create Flow Cron

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


$apiInstance = new FlowHunt\Api\FlowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$flow_cron_create_request = new \FlowHunt\Model\FlowCronCreateRequest(); // \FlowHunt\Model\FlowCronCreateRequest

try {
    $result = $apiInstance->createFlowCron($workspace_id, $flow_cron_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlowsApi->createFlowCron: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **flow_cron_create_request** | [**\FlowHunt\Model\FlowCronCreateRequest**](../Model/FlowCronCreateRequest.md)|  | |

### Return type

[**\FlowHunt\Model\FlowCronResponse**](../Model/FlowCronResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createFlowSession()`

```php
createFlowSession($workspace_id, $flow_session_create_from_flow_request): \FlowHunt\Model\FlowSessionResponse
```

Create Flow Session

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


$apiInstance = new FlowHunt\Api\FlowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$flow_session_create_from_flow_request = new \FlowHunt\Model\FlowSessionCreateFromFlowRequest(); // \FlowHunt\Model\FlowSessionCreateFromFlowRequest

try {
    $result = $apiInstance->createFlowSession($workspace_id, $flow_session_create_from_flow_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlowsApi->createFlowSession: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **flow_session_create_from_flow_request** | [**\FlowHunt\Model\FlowSessionCreateFromFlowRequest**](../Model/FlowSessionCreateFromFlowRequest.md)|  | |

### Return type

[**\FlowHunt\Model\FlowSessionResponse**](../Model/FlowSessionResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAttachment()`

```php
deleteAttachment($session_id, $file_id): \FlowHunt\Model\Completed
```

Delete Attachment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FlowHunt\Api\FlowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$session_id = 'session_id_example'; // string
$file_id = 'file_id_example'; // string

try {
    $result = $apiInstance->deleteAttachment($session_id, $file_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlowsApi->deleteAttachment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **session_id** | **string**|  | |
| **file_id** | **string**|  | |

### Return type

[**\FlowHunt\Model\Completed**](../Model/Completed.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteFlow()`

```php
deleteFlow($flow_id, $workspace_id): \FlowHunt\Model\Completed
```

Delete Flow

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


$apiInstance = new FlowHunt\Api\FlowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$flow_id = 'flow_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->deleteFlow($flow_id, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlowsApi->deleteFlow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **flow_id** | **string**|  | |
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

## `deleteFlowCategory()`

```php
deleteFlowCategory($cat_id, $workspace_id): \FlowHunt\Model\Completed
```

Delete Flow Category

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


$apiInstance = new FlowHunt\Api\FlowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cat_id = 'cat_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->deleteFlowCategory($cat_id, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlowsApi->deleteFlowCategory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cat_id** | **string**|  | |
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

## `deleteFlowCron()`

```php
deleteFlowCron($flow_id, $cron_id, $workspace_id): \FlowHunt\Model\Completed
```

Delete Flow Cron

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


$apiInstance = new FlowHunt\Api\FlowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$flow_id = 'flow_id_example'; // string
$cron_id = 'cron_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->deleteFlowCron($flow_id, $cron_id, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlowsApi->deleteFlowCron: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **flow_id** | **string**|  | |
| **cron_id** | **string**|  | |
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

## `executeFlowCron()`

```php
executeFlowCron($cron_id, $flow_id, $workspace_id): \FlowHunt\Model\TaskResponse
```

Execute Flow Cron

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


$apiInstance = new FlowHunt\Api\FlowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cron_id = 'cron_id_example'; // string
$flow_id = 'flow_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->executeFlowCron($cron_id, $flow_id, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlowsApi->executeFlowCron: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cron_id** | **string**|  | |
| **flow_id** | **string**|  | |
| **workspace_id** | **string**|  | |

### Return type

[**\FlowHunt\Model\TaskResponse**](../Model/TaskResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `get()`

```php
get($flow_id, $workspace_id): \FlowHunt\Model\FlowDetailResponse
```

Get

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


$apiInstance = new FlowHunt\Api\FlowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$flow_id = 'flow_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->get($flow_id, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlowsApi->get: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **flow_id** | **string**|  | |
| **workspace_id** | **string**|  | |

### Return type

[**\FlowHunt\Model\FlowDetailResponse**](../Model/FlowDetailResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllComponents()`

```php
getAllComponents(): mixed
```

Get All Components

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


$apiInstance = new FlowHunt\Api\FlowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAllComponents();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlowsApi->getAllComponents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**mixed**

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAttachments()`

```php
getAttachments($session_id): \FlowHunt\Model\FlowSessionAttachmentResponse[]
```

Get Attachments

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FlowHunt\Api\FlowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$session_id = 'session_id_example'; // string

try {
    $result = $apiInstance->getAttachments($session_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlowsApi->getAttachments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **session_id** | **string**|  | |

### Return type

[**\FlowHunt\Model\FlowSessionAttachmentResponse[]**](../Model/FlowSessionAttachmentResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInvokedFlowResults()`

```php
getInvokedFlowResults($flow_id, $task_id, $workspace_id): \FlowHunt\Model\TaskResponse
```

Get Invoked Flow Results

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


$apiInstance = new FlowHunt\Api\FlowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$flow_id = 'flow_id_example'; // string
$task_id = 'task_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->getInvokedFlowResults($flow_id, $task_id, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlowsApi->getInvokedFlowResults: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **flow_id** | **string**|  | |
| **task_id** | **string**|  | |
| **workspace_id** | **string**|  | |

### Return type

[**\FlowHunt\Model\TaskResponse**](../Model/TaskResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPublicFlow()`

```php
getPublicFlow($flow_id): \FlowHunt\Model\FlowDetailResponse
```

Get Public Flow

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


$apiInstance = new FlowHunt\Api\FlowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$flow_id = 'flow_id_example'; // string

try {
    $result = $apiInstance->getPublicFlow($flow_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlowsApi->getPublicFlow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **flow_id** | **string**|  | |

### Return type

[**\FlowHunt\Model\FlowDetailResponse**](../Model/FlowDetailResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTriggerTypes()`

```php
getTriggerTypes($flow_id, $workspace_id): \FlowHunt\Model\TriggerResponse
```

Get Trigger Types

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


$apiInstance = new FlowHunt\Api\FlowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$flow_id = 'flow_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->getTriggerTypes($flow_id, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlowsApi->getTriggerTypes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **flow_id** | **string**|  | |
| **workspace_id** | **string**|  | |

### Return type

[**\FlowHunt\Model\TriggerResponse**](../Model/TriggerResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `invokeFlow()`

```php
invokeFlow($flow_id, $workspace_id, $flow_invoke_request): \FlowHunt\Model\TaskResponse
```

Invoke Flow

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


$apiInstance = new FlowHunt\Api\FlowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$flow_id = 'flow_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$flow_invoke_request = new \FlowHunt\Model\FlowInvokeRequest(); // \FlowHunt\Model\FlowInvokeRequest

try {
    $result = $apiInstance->invokeFlow($flow_id, $workspace_id, $flow_invoke_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlowsApi->invokeFlow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **flow_id** | **string**|  | |
| **workspace_id** | **string**|  | |
| **flow_invoke_request** | [**\FlowHunt\Model\FlowInvokeRequest**](../Model/FlowInvokeRequest.md)|  | |

### Return type

[**\FlowHunt\Model\TaskResponse**](../Model/TaskResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `invokeFlowResponse()`

```php
invokeFlowResponse($session_id, $flow_session_invoke_request): \FlowHunt\Model\FlowSessionInvocationResponse
```

Invoke Flow Response

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FlowHunt\Api\FlowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$session_id = 'session_id_example'; // string
$flow_session_invoke_request = new \FlowHunt\Model\FlowSessionInvokeRequest(); // \FlowHunt\Model\FlowSessionInvokeRequest

try {
    $result = $apiInstance->invokeFlowResponse($session_id, $flow_session_invoke_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlowsApi->invokeFlowResponse: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **session_id** | **string**|  | |
| **flow_session_invoke_request** | [**\FlowHunt\Model\FlowSessionInvokeRequest**](../Model/FlowSessionInvokeRequest.md)|  | |

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

## `invokeFlowSingleton()`

```php
invokeFlowSingleton($flow_id, $workspace_id, $flow_invoke_request): \FlowHunt\Model\TaskResponse
```

Invoke Flow Singleton

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


$apiInstance = new FlowHunt\Api\FlowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$flow_id = 'flow_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$flow_invoke_request = new \FlowHunt\Model\FlowInvokeRequest(); // \FlowHunt\Model\FlowInvokeRequest

try {
    $result = $apiInstance->invokeFlowSingleton($flow_id, $workspace_id, $flow_invoke_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlowsApi->invokeFlowSingleton: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **flow_id** | **string**|  | |
| **workspace_id** | **string**|  | |
| **flow_invoke_request** | [**\FlowHunt\Model\FlowInvokeRequest**](../Model/FlowInvokeRequest.md)|  | |

### Return type

[**\FlowHunt\Model\TaskResponse**](../Model/TaskResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pollFlowResponse()`

```php
pollFlowResponse($session_id, $from_timestamp): \FlowHunt\Model\FlowSessionEvent[]
```

Poll Flow Response

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FlowHunt\Api\FlowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$session_id = 'session_id_example'; // string
$from_timestamp = 'from_timestamp_example'; // string

try {
    $result = $apiInstance->pollFlowResponse($session_id, $from_timestamp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlowsApi->pollFlowResponse: ', $e->getMessage(), PHP_EOL;
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

## `search()`

```php
search($workspace_id, $flow_search_request): \FlowHunt\Model\FlowResponse[]
```

Search

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


$apiInstance = new FlowHunt\Api\FlowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$flow_search_request = new \FlowHunt\Model\FlowSearchRequest(); // \FlowHunt\Model\FlowSearchRequest

try {
    $result = $apiInstance->search($workspace_id, $flow_search_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlowsApi->search: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **flow_search_request** | [**\FlowHunt\Model\FlowSearchRequest**](../Model/FlowSearchRequest.md)|  | |

### Return type

[**\FlowHunt\Model\FlowResponse[]**](../Model/FlowResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchAll()`

```php
searchAll($workspace_id, $all_flows_search_request): \FlowHunt\Model\FlowResponse[]
```

Search All

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


$apiInstance = new FlowHunt\Api\FlowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$all_flows_search_request = new \FlowHunt\Model\AllFlowsSearchRequest(); // \FlowHunt\Model\AllFlowsSearchRequest

try {
    $result = $apiInstance->searchAll($workspace_id, $all_flows_search_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlowsApi->searchAll: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **all_flows_search_request** | [**\FlowHunt\Model\AllFlowsSearchRequest**](../Model/AllFlowsSearchRequest.md)|  | |

### Return type

[**\FlowHunt\Model\FlowResponse[]**](../Model/FlowResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchFlowCategories()`

```php
searchFlowCategories($workspace_id, $flow_category_search_request): \FlowHunt\Model\FlowCategoryResponse[]
```

Search Flow Categories

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


$apiInstance = new FlowHunt\Api\FlowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$flow_category_search_request = new \FlowHunt\Model\FlowCategorySearchRequest(); // \FlowHunt\Model\FlowCategorySearchRequest

try {
    $result = $apiInstance->searchFlowCategories($workspace_id, $flow_category_search_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlowsApi->searchFlowCategories: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **flow_category_search_request** | [**\FlowHunt\Model\FlowCategorySearchRequest**](../Model/FlowCategorySearchRequest.md)|  | |

### Return type

[**\FlowHunt\Model\FlowCategoryResponse[]**](../Model/FlowCategoryResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchFlowCrons()`

```php
searchFlowCrons($workspace_id, $flow_cron_search_request): \FlowHunt\Model\FlowCronResponse[]
```

Search Flow Crons

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


$apiInstance = new FlowHunt\Api\FlowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$flow_cron_search_request = new \FlowHunt\Model\FlowCronSearchRequest(); // \FlowHunt\Model\FlowCronSearchRequest

try {
    $result = $apiInstance->searchFlowCrons($workspace_id, $flow_cron_search_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlowsApi->searchFlowCrons: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **flow_cron_search_request** | [**\FlowHunt\Model\FlowCronSearchRequest**](../Model/FlowCronSearchRequest.md)|  | |

### Return type

[**\FlowHunt\Model\FlowCronResponse[]**](../Model/FlowCronResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `streamFlowResponse()`

```php
streamFlowResponse($session_id, $flow_session_stream_request): mixed
```

Stream Flow Response

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FlowHunt\Api\FlowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$session_id = 'session_id_example'; // string
$flow_session_stream_request = new \FlowHunt\Model\FlowSessionStreamRequest(); // \FlowHunt\Model\FlowSessionStreamRequest

try {
    $result = $apiInstance->streamFlowResponse($session_id, $flow_session_stream_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlowsApi->streamFlowResponse: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **session_id** | **string**|  | |
| **flow_session_stream_request** | [**\FlowHunt\Model\FlowSessionStreamRequest**](../Model/FlowSessionStreamRequest.md)|  | |

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateFlow()`

```php
updateFlow($flow_id, $workspace_id, $flow_create): \FlowHunt\Model\FlowDetailResponse
```

Update Flow

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


$apiInstance = new FlowHunt\Api\FlowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$flow_id = 'flow_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$flow_create = new \FlowHunt\Model\FlowCreate(); // \FlowHunt\Model\FlowCreate

try {
    $result = $apiInstance->updateFlow($flow_id, $workspace_id, $flow_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlowsApi->updateFlow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **flow_id** | **string**|  | |
| **workspace_id** | **string**|  | |
| **flow_create** | [**\FlowHunt\Model\FlowCreate**](../Model/FlowCreate.md)|  | |

### Return type

[**\FlowHunt\Model\FlowDetailResponse**](../Model/FlowDetailResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateFlowCategory()`

```php
updateFlowCategory($cat_id, $workspace_id, $flow_category_create_request): \FlowHunt\Model\FlowCategoryResponse
```

Update Flow Category

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


$apiInstance = new FlowHunt\Api\FlowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cat_id = 'cat_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$flow_category_create_request = new \FlowHunt\Model\FlowCategoryCreateRequest(); // \FlowHunt\Model\FlowCategoryCreateRequest

try {
    $result = $apiInstance->updateFlowCategory($cat_id, $workspace_id, $flow_category_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlowsApi->updateFlowCategory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cat_id** | **string**|  | |
| **workspace_id** | **string**|  | |
| **flow_category_create_request** | [**\FlowHunt\Model\FlowCategoryCreateRequest**](../Model/FlowCategoryCreateRequest.md)|  | |

### Return type

[**\FlowHunt\Model\FlowCategoryResponse**](../Model/FlowCategoryResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateFlowCron()`

```php
updateFlowCron($cron_id, $flow_id, $workspace_id, $flow_cron_update_request): \FlowHunt\Model\FlowCronResponse
```

Update Flow Cron

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


$apiInstance = new FlowHunt\Api\FlowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cron_id = 'cron_id_example'; // string
$flow_id = 'flow_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$flow_cron_update_request = new \FlowHunt\Model\FlowCronUpdateRequest(); // \FlowHunt\Model\FlowCronUpdateRequest

try {
    $result = $apiInstance->updateFlowCron($cron_id, $flow_id, $workspace_id, $flow_cron_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlowsApi->updateFlowCron: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cron_id** | **string**|  | |
| **flow_id** | **string**|  | |
| **workspace_id** | **string**|  | |
| **flow_cron_update_request** | [**\FlowHunt\Model\FlowCronUpdateRequest**](../Model/FlowCronUpdateRequest.md)|  | |

### Return type

[**\FlowHunt\Model\FlowCronResponse**](../Model/FlowCronResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `uploadAttachments()`

```php
uploadAttachments($session_id, $file): \FlowHunt\Model\FlowSessionAttachmentResponse
```

Upload Attachments

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FlowHunt\Api\FlowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$session_id = 'session_id_example'; // string
$file = "/path/to/file.txt"; // \SplFileObject

try {
    $result = $apiInstance->uploadAttachments($session_id, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlowsApi->uploadAttachments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **session_id** | **string**|  | |
| **file** | **\SplFileObject****\SplFileObject**|  | |

### Return type

[**\FlowHunt\Model\FlowSessionAttachmentResponse**](../Model/FlowSessionAttachmentResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
