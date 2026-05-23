# FlowHunt\CustomModelsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**bulkDeleteCustomModels()**](CustomModelsApi.md#bulkDeleteCustomModels) | **POST** /v2/custom-models/delete | Bulk Delete Custom Models |
| [**createCustomModel()**](CustomModelsApi.md#createCustomModel) | **POST** /v2/custom-models/create | Create Custom Model |
| [**deleteCustomModel()**](CustomModelsApi.md#deleteCustomModel) | **DELETE** /v2/custom-models/{custom_model_id} | Delete Custom Model |
| [**getAvailableModels()**](CustomModelsApi.md#getAvailableModels) | **GET** /v2/custom-models/available | Get Available Models |
| [**listOllamaModels()**](CustomModelsApi.md#listOllamaModels) | **POST** /v2/custom-models/list-ollama-models | List Ollama Models |
| [**searchCustomModels()**](CustomModelsApi.md#searchCustomModels) | **POST** /v2/custom-models/search | Search Custom Models |
| [**updateCustomModel()**](CustomModelsApi.md#updateCustomModel) | **PUT** /v2/custom-models/{custom_model_id} | Update Custom Model |


## `bulkDeleteCustomModels()`

```php
bulkDeleteCustomModels($workspace_id, $custom_model_bulk_delete_request): \FlowHunt\Model\Completed
```

Bulk Delete Custom Models

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


$apiInstance = new FlowHunt\Api\CustomModelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$custom_model_bulk_delete_request = new \FlowHunt\Model\CustomModelBulkDeleteRequest(); // \FlowHunt\Model\CustomModelBulkDeleteRequest

try {
    $result = $apiInstance->bulkDeleteCustomModels($workspace_id, $custom_model_bulk_delete_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomModelsApi->bulkDeleteCustomModels: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **custom_model_bulk_delete_request** | [**\FlowHunt\Model\CustomModelBulkDeleteRequest**](../Model/CustomModelBulkDeleteRequest.md)|  | |

### Return type

[**\FlowHunt\Model\Completed**](../Model/Completed.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createCustomModel()`

```php
createCustomModel($workspace_id, $custom_model_create_request): \FlowHunt\Model\CustomModelResponse
```

Create Custom Model

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


$apiInstance = new FlowHunt\Api\CustomModelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$custom_model_create_request = new \FlowHunt\Model\CustomModelCreateRequest(); // \FlowHunt\Model\CustomModelCreateRequest

try {
    $result = $apiInstance->createCustomModel($workspace_id, $custom_model_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomModelsApi->createCustomModel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **custom_model_create_request** | [**\FlowHunt\Model\CustomModelCreateRequest**](../Model/CustomModelCreateRequest.md)|  | |

### Return type

[**\FlowHunt\Model\CustomModelResponse**](../Model/CustomModelResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCustomModel()`

```php
deleteCustomModel($custom_model_id, $workspace_id): \FlowHunt\Model\Completed
```

Delete Custom Model

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


$apiInstance = new FlowHunt\Api\CustomModelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$custom_model_id = 'custom_model_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->deleteCustomModel($custom_model_id, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomModelsApi->deleteCustomModel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **custom_model_id** | **string**|  | |
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

## `getAvailableModels()`

```php
getAvailableModels($workspace_id): \FlowHunt\Model\AvailableModelsResponse
```

Get Available Models

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


$apiInstance = new FlowHunt\Api\CustomModelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->getAvailableModels($workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomModelsApi->getAvailableModels: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |

### Return type

[**\FlowHunt\Model\AvailableModelsResponse**](../Model/AvailableModelsResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listOllamaModels()`

```php
listOllamaModels($workspace_id, $ollama_list_models_request): \FlowHunt\Model\OllamaListModelsResponse
```

List Ollama Models

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


$apiInstance = new FlowHunt\Api\CustomModelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$ollama_list_models_request = new \FlowHunt\Model\OllamaListModelsRequest(); // \FlowHunt\Model\OllamaListModelsRequest

try {
    $result = $apiInstance->listOllamaModels($workspace_id, $ollama_list_models_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomModelsApi->listOllamaModels: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **ollama_list_models_request** | [**\FlowHunt\Model\OllamaListModelsRequest**](../Model/OllamaListModelsRequest.md)|  | |

### Return type

[**\FlowHunt\Model\OllamaListModelsResponse**](../Model/OllamaListModelsResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchCustomModels()`

```php
searchCustomModels($workspace_id, $custom_model_search_request): \FlowHunt\Model\CustomModelResponse[]
```

Search Custom Models

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


$apiInstance = new FlowHunt\Api\CustomModelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$custom_model_search_request = new \FlowHunt\Model\CustomModelSearchRequest(); // \FlowHunt\Model\CustomModelSearchRequest

try {
    $result = $apiInstance->searchCustomModels($workspace_id, $custom_model_search_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomModelsApi->searchCustomModels: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **custom_model_search_request** | [**\FlowHunt\Model\CustomModelSearchRequest**](../Model/CustomModelSearchRequest.md)|  | |

### Return type

[**\FlowHunt\Model\CustomModelResponse[]**](../Model/CustomModelResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCustomModel()`

```php
updateCustomModel($custom_model_id, $workspace_id, $custom_model_update_request): \FlowHunt\Model\CustomModelResponse
```

Update Custom Model

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


$apiInstance = new FlowHunt\Api\CustomModelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$custom_model_id = 'custom_model_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$custom_model_update_request = new \FlowHunt\Model\CustomModelUpdateRequest(); // \FlowHunt\Model\CustomModelUpdateRequest

try {
    $result = $apiInstance->updateCustomModel($custom_model_id, $workspace_id, $custom_model_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomModelsApi->updateCustomModel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **custom_model_id** | **string**|  | |
| **workspace_id** | **string**|  | |
| **custom_model_update_request** | [**\FlowHunt\Model\CustomModelUpdateRequest**](../Model/CustomModelUpdateRequest.md)|  | |

### Return type

[**\FlowHunt\Model\CustomModelResponse**](../Model/CustomModelResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
