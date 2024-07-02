# OpenAPI\Client\PromptsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createPrompt()**](PromptsApi.md#createPrompt) | **POST** /v2/prompts/create | Create Prompt |
| [**createPromptCategory()**](PromptsApi.md#createPromptCategory) | **POST** /v2/prompts/categories/create | Create Prompt Category |
| [**deletePrompt()**](PromptsApi.md#deletePrompt) | **DELETE** /v2/prompts/{prompt_id} | Delete Prompt |
| [**deletePromptCategory()**](PromptsApi.md#deletePromptCategory) | **DELETE** /v2/prompts/categories/{cat_id} | Delete Prompt Category |
| [**searchPromptCategories()**](PromptsApi.md#searchPromptCategories) | **POST** /v2/prompts/categories/search | Search Prompt Categories |
| [**searchPrompts()**](PromptsApi.md#searchPrompts) | **POST** /v2/prompts/search | Search Prompts |
| [**updatePrompt()**](PromptsApi.md#updatePrompt) | **PUT** /v2/prompts/{prompt_id} | Update Prompt |
| [**updatePromptCategory()**](PromptsApi.md#updatePromptCategory) | **PUT** /v2/prompts/categories/{cat_id} | Update Prompt Category |


## `createPrompt()`

```php
createPrompt($workspace_id, $prompt_create_request): \OpenAPI\Client\Model\PromptResponse
```

Create Prompt

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


$apiInstance = new OpenAPI\Client\Api\PromptsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$prompt_create_request = new \OpenAPI\Client\Model\PromptCreateRequest(); // \OpenAPI\Client\Model\PromptCreateRequest

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
| **prompt_create_request** | [**\OpenAPI\Client\Model\PromptCreateRequest**](../Model/PromptCreateRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\PromptResponse**](../Model/PromptResponse.md)

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
createPromptCategory($workspace_id, $prompt_category_create_request): \OpenAPI\Client\Model\PromptCategoryResponse
```

Create Prompt Category

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


$apiInstance = new OpenAPI\Client\Api\PromptsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$prompt_category_create_request = new \OpenAPI\Client\Model\PromptCategoryCreateRequest(); // \OpenAPI\Client\Model\PromptCategoryCreateRequest

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
| **prompt_category_create_request** | [**\OpenAPI\Client\Model\PromptCategoryCreateRequest**](../Model/PromptCategoryCreateRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\PromptCategoryResponse**](../Model/PromptCategoryResponse.md)

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
deletePrompt($prompt_id, $workspace_id): \OpenAPI\Client\Model\Completed
```

Delete Prompt

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


$apiInstance = new OpenAPI\Client\Api\PromptsApi(
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

[**\OpenAPI\Client\Model\Completed**](../Model/Completed.md)

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
deletePromptCategory($cat_id, $workspace_id): \OpenAPI\Client\Model\Completed
```

Delete Prompt Category

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


$apiInstance = new OpenAPI\Client\Api\PromptsApi(
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

[**\OpenAPI\Client\Model\Completed**](../Model/Completed.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchPromptCategories()`

```php
searchPromptCategories($workspace_id, $prompt_category_search_request): \OpenAPI\Client\Model\PromptCategoryResponse[]
```

Search Prompt Categories

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


$apiInstance = new OpenAPI\Client\Api\PromptsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$prompt_category_search_request = new \OpenAPI\Client\Model\PromptCategorySearchRequest(); // \OpenAPI\Client\Model\PromptCategorySearchRequest

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
| **prompt_category_search_request** | [**\OpenAPI\Client\Model\PromptCategorySearchRequest**](../Model/PromptCategorySearchRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\PromptCategoryResponse[]**](../Model/PromptCategoryResponse.md)

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
searchPrompts($workspace_id, $prompt_search_request): \OpenAPI\Client\Model\PromptResponse[]
```

Search Prompts

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


$apiInstance = new OpenAPI\Client\Api\PromptsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$prompt_search_request = new \OpenAPI\Client\Model\PromptSearchRequest(); // \OpenAPI\Client\Model\PromptSearchRequest

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
| **prompt_search_request** | [**\OpenAPI\Client\Model\PromptSearchRequest**](../Model/PromptSearchRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\PromptResponse[]**](../Model/PromptResponse.md)

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
updatePrompt($prompt_id, $workspace_id, $prompt_update_request): \OpenAPI\Client\Model\PromptResponse
```

Update Prompt

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


$apiInstance = new OpenAPI\Client\Api\PromptsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$prompt_id = 'prompt_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$prompt_update_request = new \OpenAPI\Client\Model\PromptUpdateRequest(); // \OpenAPI\Client\Model\PromptUpdateRequest

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
| **prompt_update_request** | [**\OpenAPI\Client\Model\PromptUpdateRequest**](../Model/PromptUpdateRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\PromptResponse**](../Model/PromptResponse.md)

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
updatePromptCategory($cat_id, $workspace_id, $prompt_category_update_request): \OpenAPI\Client\Model\PromptCategoryResponse
```

Update Prompt Category

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


$apiInstance = new OpenAPI\Client\Api\PromptsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cat_id = 'cat_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$prompt_category_update_request = new \OpenAPI\Client\Model\PromptCategoryUpdateRequest(); // \OpenAPI\Client\Model\PromptCategoryUpdateRequest

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
| **prompt_category_update_request** | [**\OpenAPI\Client\Model\PromptCategoryUpdateRequest**](../Model/PromptCategoryUpdateRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\PromptCategoryResponse**](../Model/PromptCategoryResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
