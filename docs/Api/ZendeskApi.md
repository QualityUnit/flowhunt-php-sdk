# FlowHunt\ZendeskApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**listZendeskKbCategories()**](ZendeskApi.md#listZendeskKbCategories) | **GET** /v2/integrations/zendesk/kb/categories | List Zendesk Kb Categories |
| [**listZendeskKbLabels()**](ZendeskApi.md#listZendeskKbLabels) | **GET** /v2/integrations/zendesk/kb/labels | List Zendesk Kb Labels |
| [**listZendeskKbSections()**](ZendeskApi.md#listZendeskKbSections) | **GET** /v2/integrations/zendesk/kb/sections | List Zendesk Kb Sections |


## `listZendeskKbCategories()`

```php
listZendeskKbCategories($workspace_id, $locale): \FlowHunt\Model\ZendeskKBCategoryResponse[]
```

List Zendesk Kb Categories

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


$apiInstance = new FlowHunt\Api\ZendeskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$locale = 'locale_example'; // string | Locale filter (e.g. en-us)

try {
    $result = $apiInstance->listZendeskKbCategories($workspace_id, $locale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZendeskApi->listZendeskKbCategories: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **locale** | **string**| Locale filter (e.g. en-us) | [optional] |

### Return type

[**\FlowHunt\Model\ZendeskKBCategoryResponse[]**](../Model/ZendeskKBCategoryResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listZendeskKbLabels()`

```php
listZendeskKbLabels($workspace_id): \FlowHunt\Model\ZendeskKBLabelResponse[]
```

List Zendesk Kb Labels

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


$apiInstance = new FlowHunt\Api\ZendeskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->listZendeskKbLabels($workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZendeskApi->listZendeskKbLabels: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |

### Return type

[**\FlowHunt\Model\ZendeskKBLabelResponse[]**](../Model/ZendeskKBLabelResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listZendeskKbSections()`

```php
listZendeskKbSections($workspace_id, $category_id): \FlowHunt\Model\ZendeskKBSectionResponse[]
```

List Zendesk Kb Sections

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


$apiInstance = new FlowHunt\Api\ZendeskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$category_id = 56; // int | Category ID to filter sections

try {
    $result = $apiInstance->listZendeskKbSections($workspace_id, $category_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZendeskApi->listZendeskKbSections: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **category_id** | **int**| Category ID to filter sections | [optional] |

### Return type

[**\FlowHunt\Model\ZendeskKBSectionResponse[]**](../Model/ZendeskKBSectionResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
