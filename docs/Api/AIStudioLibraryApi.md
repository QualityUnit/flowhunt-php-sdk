# FlowHunt\AIStudioLibraryApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAiStudioTemplate()**](AIStudioLibraryApi.md#getAiStudioTemplate) | **GET** /v2/ai_studio_library/templates/{template_id} | Get Ai Studio Template |
| [**listAiStudioTemplates()**](AIStudioLibraryApi.md#listAiStudioTemplates) | **GET** /v2/ai_studio_library/templates | List Ai Studio Templates |


## `getAiStudioTemplate()`

```php
getAiStudioTemplate($template_id, $workspace_id): \FlowHunt\Model\AIStudioFlowTemplateResponse
```

Get Ai Studio Template

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


$apiInstance = new FlowHunt\Api\AIStudioLibraryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$template_id = 'template_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->getAiStudioTemplate($template_id, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AIStudioLibraryApi->getAiStudioTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_id** | **string**|  | |
| **workspace_id** | **string**|  | |

### Return type

[**\FlowHunt\Model\AIStudioFlowTemplateResponse**](../Model/AIStudioFlowTemplateResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAiStudioTemplates()`

```php
listAiStudioTemplates($workspace_id): \FlowHunt\Model\AIStudioFlowTemplateResponse[]
```

List Ai Studio Templates

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


$apiInstance = new FlowHunt\Api\AIStudioLibraryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->listAiStudioTemplates($workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AIStudioLibraryApi->listAiStudioTemplates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |

### Return type

[**\FlowHunt\Model\AIStudioFlowTemplateResponse[]**](../Model/AIStudioFlowTemplateResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
