# FlowHunt\PromptsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createPrompt()**](PromptsApi.md#createPrompt) | **POST** /v2/prompts/create | Create Prompt |
| [**createPromptCategory()**](PromptsApi.md#createPromptCategory) | **POST** /v2/prompts/categories/create | Create Prompt Category |
| [**deletePrompt()**](PromptsApi.md#deletePrompt) | **DELETE** /v2/prompts/{prompt_id} | Delete Prompt |
| [**deletePromptCategory()**](PromptsApi.md#deletePromptCategory) | **DELETE** /v2/prompts/categories/{cat_id} | Delete Prompt Category |
| [**optimizePrompt()**](PromptsApi.md#optimizePrompt) | **POST** /v2/prompts/optimize | Optimize Prompt |
| [**searchPromptCategories()**](PromptsApi.md#searchPromptCategories) | **POST** /v2/prompts/categories/search | Search Prompt Categories |
| [**searchPrompts()**](PromptsApi.md#searchPrompts) | **POST** /v2/prompts/search | Search Prompts |
| [**updatePrompt()**](PromptsApi.md#updatePrompt) | **PUT** /v2/prompts/{prompt_id} | Update Prompt |
| [**updatePromptCategory()**](PromptsApi.md#updatePromptCategory) | **PUT** /v2/prompts/categories/{cat_id} | Update Prompt Category |


## `createPrompt()`

```php
createPrompt($workspace_id, $prompt_create_request): \FlowHunt\Model\PromptResponse
```

Create Prompt

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


$apiInstance = new FlowHunt\Api\PromptsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$prompt_create_request = new \FlowHunt\Model\PromptCreateRequest(); // \FlowHunt\Model\PromptCreateRequest

try {
    $result = $apiInstance->createPrompt($workspace_id, $prompt_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromptsApi->createPrompt: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **prompt_create_request** | [**\FlowHunt\Model\PromptCreateRequest**](../Model/PromptCreateRequest.md)|  | |

### Return type

[**\FlowHunt\Model\PromptResponse**](../Model/PromptResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createPromptCategory()`

```php
createPromptCategory($workspace_id, $prompt_category_create_request): \FlowHunt\Model\PromptCategoryResponse
```

Create Prompt Category

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


$apiInstance = new FlowHunt\Api\PromptsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$prompt_category_create_request = new \FlowHunt\Model\PromptCategoryCreateRequest(); // \FlowHunt\Model\PromptCategoryCreateRequest

try {
    $result = $apiInstance->createPromptCategory($workspace_id, $prompt_category_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromptsApi->createPromptCategory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **prompt_category_create_request** | [**\FlowHunt\Model\PromptCategoryCreateRequest**](../Model/PromptCategoryCreateRequest.md)|  | |

### Return type

[**\FlowHunt\Model\PromptCategoryResponse**](../Model/PromptCategoryResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deletePrompt()`

```php
deletePrompt($prompt_id, $workspace_id): \FlowHunt\Model\Completed
```

Delete Prompt

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


$apiInstance = new FlowHunt\Api\PromptsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$prompt_id = 'prompt_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->deletePrompt($prompt_id, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromptsApi->deletePrompt: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **prompt_id** | **string**|  | |
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

## `deletePromptCategory()`

```php
deletePromptCategory($cat_id, $workspace_id): \FlowHunt\Model\Completed
```

Delete Prompt Category

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


$apiInstance = new FlowHunt\Api\PromptsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cat_id = 'cat_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->deletePromptCategory($cat_id, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromptsApi->deletePromptCategory: ', $e->getMessage(), PHP_EOL;
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

## `optimizePrompt()`

```php
optimizePrompt($workspace_id, $prompt_optimizer_request): \FlowHunt\Model\OptimizedPromptResponse
```

Optimize Prompt

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


$apiInstance = new FlowHunt\Api\PromptsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$prompt_optimizer_request = new \FlowHunt\Model\PromptOptimizerRequest(); // \FlowHunt\Model\PromptOptimizerRequest

try {
    $result = $apiInstance->optimizePrompt($workspace_id, $prompt_optimizer_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromptsApi->optimizePrompt: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **prompt_optimizer_request** | [**\FlowHunt\Model\PromptOptimizerRequest**](../Model/PromptOptimizerRequest.md)|  | |

### Return type

[**\FlowHunt\Model\OptimizedPromptResponse**](../Model/OptimizedPromptResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchPromptCategories()`

```php
searchPromptCategories($workspace_id, $prompt_category_search_request): \FlowHunt\Model\PromptCategoryResponse[]
```

Search Prompt Categories

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


$apiInstance = new FlowHunt\Api\PromptsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$prompt_category_search_request = new \FlowHunt\Model\PromptCategorySearchRequest(); // \FlowHunt\Model\PromptCategorySearchRequest

try {
    $result = $apiInstance->searchPromptCategories($workspace_id, $prompt_category_search_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromptsApi->searchPromptCategories: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **prompt_category_search_request** | [**\FlowHunt\Model\PromptCategorySearchRequest**](../Model/PromptCategorySearchRequest.md)|  | |

### Return type

[**\FlowHunt\Model\PromptCategoryResponse[]**](../Model/PromptCategoryResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchPrompts()`

```php
searchPrompts($workspace_id, $prompt_search_request): \FlowHunt\Model\PromptResponse[]
```

Search Prompts

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


$apiInstance = new FlowHunt\Api\PromptsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$prompt_search_request = new \FlowHunt\Model\PromptSearchRequest(); // \FlowHunt\Model\PromptSearchRequest

try {
    $result = $apiInstance->searchPrompts($workspace_id, $prompt_search_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromptsApi->searchPrompts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **prompt_search_request** | [**\FlowHunt\Model\PromptSearchRequest**](../Model/PromptSearchRequest.md)|  | |

### Return type

[**\FlowHunt\Model\PromptResponse[]**](../Model/PromptResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePrompt()`

```php
updatePrompt($prompt_id, $workspace_id, $prompt_update_request): \FlowHunt\Model\PromptResponse
```

Update Prompt

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


$apiInstance = new FlowHunt\Api\PromptsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$prompt_id = 'prompt_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$prompt_update_request = new \FlowHunt\Model\PromptUpdateRequest(); // \FlowHunt\Model\PromptUpdateRequest

try {
    $result = $apiInstance->updatePrompt($prompt_id, $workspace_id, $prompt_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromptsApi->updatePrompt: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **prompt_id** | **string**|  | |
| **workspace_id** | **string**|  | |
| **prompt_update_request** | [**\FlowHunt\Model\PromptUpdateRequest**](../Model/PromptUpdateRequest.md)|  | |

### Return type

[**\FlowHunt\Model\PromptResponse**](../Model/PromptResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePromptCategory()`

```php
updatePromptCategory($cat_id, $workspace_id, $prompt_category_update_request): \FlowHunt\Model\PromptCategoryResponse
```

Update Prompt Category

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


$apiInstance = new FlowHunt\Api\PromptsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cat_id = 'cat_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$prompt_category_update_request = new \FlowHunt\Model\PromptCategoryUpdateRequest(); // \FlowHunt\Model\PromptCategoryUpdateRequest

try {
    $result = $apiInstance->updatePromptCategory($cat_id, $workspace_id, $prompt_category_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromptsApi->updatePromptCategory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cat_id** | **string**|  | |
| **workspace_id** | **string**|  | |
| **prompt_category_update_request** | [**\FlowHunt\Model\PromptCategoryUpdateRequest**](../Model/PromptCategoryUpdateRequest.md)|  | |

### Return type

[**\FlowHunt\Model\PromptCategoryResponse**](../Model/PromptCategoryResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
