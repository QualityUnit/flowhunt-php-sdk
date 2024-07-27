# OpenAPI\Client\IntegrationsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createIntegration()**](IntegrationsApi.md#createIntegration) | **POST** /v2/integrations/{integration_slug}/create | Create Integration |
| [**getAllIntegrations()**](IntegrationsApi.md#getAllIntegrations) | **GET** /v2/integrations/all | Get All Integrations |
| [**getMyIntegrations()**](IntegrationsApi.md#getMyIntegrations) | **POST** /v2/integrations/ | Get My Integrations |
| [**removeIntegration()**](IntegrationsApi.md#removeIntegration) | **DELETE** /v2/integrations/ | Remove Integration |
| [**updateIntegration()**](IntegrationsApi.md#updateIntegration) | **PUT** /v2/integrations/{integration_slug}/{integration_id} | Update Integration |


## `createIntegration()`

```php
createIntegration($integration_slug, $workspace_id, $integration_create_request): \OpenAPI\Client\Model\IntegrationDetailResponse
```

Create Integration

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


$apiInstance = new OpenAPI\Client\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$integration_slug = new \OpenAPI\Client\Model\IntegrationSlug(); // IntegrationSlug
$workspace_id = 'workspace_id_example'; // string
$integration_create_request = new \OpenAPI\Client\Model\IntegrationCreateRequest(); // \OpenAPI\Client\Model\IntegrationCreateRequest

try {
    $result = $apiInstance->createIntegration($integration_slug, $workspace_id, $integration_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->createIntegration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **integration_slug** | [**IntegrationSlug**](../Model/.md)|  | |
| **workspace_id** | **string**|  | |
| **integration_create_request** | [**\OpenAPI\Client\Model\IntegrationCreateRequest**](../Model/IntegrationCreateRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\IntegrationDetailResponse**](../Model/IntegrationDetailResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllIntegrations()`

```php
getAllIntegrations($workspace_id): \OpenAPI\Client\Model\IntegrationResponse[]
```

Get All Integrations

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


$apiInstance = new OpenAPI\Client\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->getAllIntegrations($workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->getAllIntegrations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\IntegrationResponse[]**](../Model/IntegrationResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMyIntegrations()`

```php
getMyIntegrations($workspace_id, $integration_search_request): \OpenAPI\Client\Model\IntegrationDetailResponse[]
```

Get My Integrations

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


$apiInstance = new OpenAPI\Client\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$integration_search_request = new \OpenAPI\Client\Model\IntegrationSearchRequest(); // \OpenAPI\Client\Model\IntegrationSearchRequest

try {
    $result = $apiInstance->getMyIntegrations($workspace_id, $integration_search_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->getMyIntegrations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **integration_search_request** | [**\OpenAPI\Client\Model\IntegrationSearchRequest**](../Model/IntegrationSearchRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\IntegrationDetailResponse[]**](../Model/IntegrationDetailResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeIntegration()`

```php
removeIntegration($workspace_id, $integration_slug, $integration_id): mixed
```

Remove Integration

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


$apiInstance = new OpenAPI\Client\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$integration_slug = new \OpenAPI\Client\Model\IntegrationSlug(); // IntegrationSlug
$integration_id = 'integration_id_example'; // string

try {
    $result = $apiInstance->removeIntegration($workspace_id, $integration_slug, $integration_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->removeIntegration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **integration_slug** | [**IntegrationSlug**](../Model/.md)|  | |
| **integration_id** | **string**|  | |

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

## `updateIntegration()`

```php
updateIntegration($integration_slug, $integration_id, $workspace_id, $integration_create_request): \OpenAPI\Client\Model\IntegrationDetailResponse
```

Update Integration

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


$apiInstance = new OpenAPI\Client\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$integration_slug = new \OpenAPI\Client\Model\IntegrationSlug(); // IntegrationSlug
$integration_id = 'integration_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$integration_create_request = new \OpenAPI\Client\Model\IntegrationCreateRequest(); // \OpenAPI\Client\Model\IntegrationCreateRequest

try {
    $result = $apiInstance->updateIntegration($integration_slug, $integration_id, $workspace_id, $integration_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->updateIntegration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **integration_slug** | [**IntegrationSlug**](../Model/.md)|  | |
| **integration_id** | **string**|  | |
| **workspace_id** | **string**|  | |
| **integration_create_request** | [**\OpenAPI\Client\Model\IntegrationCreateRequest**](../Model/IntegrationCreateRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\IntegrationDetailResponse**](../Model/IntegrationDetailResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
