# FlowHunt\AIProjectsLibraryApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAiProjectsTemplate()**](AIProjectsLibraryApi.md#getAiProjectsTemplate) | **GET** /v2/ai_projects_library/templates/{template_id} | Get Ai Projects Template |
| [**listAiProjectsTemplates()**](AIProjectsLibraryApi.md#listAiProjectsTemplates) | **GET** /v2/ai_projects_library/templates | List Ai Projects Templates |


## `getAiProjectsTemplate()`

```php
getAiProjectsTemplate($template_id, $workspace_id): \FlowHunt\Model\AIProjectTemplateDetailResponse
```

Get Ai Projects Template

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


$apiInstance = new FlowHunt\Api\AIProjectsLibraryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$template_id = 'template_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->getAiProjectsTemplate($template_id, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AIProjectsLibraryApi->getAiProjectsTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_id** | **string**|  | |
| **workspace_id** | **string**|  | |

### Return type

[**\FlowHunt\Model\AIProjectTemplateDetailResponse**](../Model/AIProjectTemplateDetailResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAiProjectsTemplates()`

```php
listAiProjectsTemplates($workspace_id): \FlowHunt\Model\AIProjectTemplateCardResponse[]
```

List Ai Projects Templates

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


$apiInstance = new FlowHunt\Api\AIProjectsLibraryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->listAiProjectsTemplates($workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AIProjectsLibraryApi->listAiProjectsTemplates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |

### Return type

[**\FlowHunt\Model\AIProjectTemplateCardResponse[]**](../Model/AIProjectTemplateCardResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
