# OpenAPI\Client\IntegrationsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createApiIntegration()**](IntegrationsApi.md#createApiIntegration) | **POST** /v2/integrations/api_integrations/create | Create Api Integration |
| [**createApiIntegrationEndpoint()**](IntegrationsApi.md#createApiIntegrationEndpoint) | **POST** /v2/integrations/api_integrations/{integration_id}/endpoints/create | Create Api Integration Endpoint |
| [**getAllIntegrations()**](IntegrationsApi.md#getAllIntegrations) | **GET** /v2/integrations/all | Get All Integrations |
| [**getApiIntegration()**](IntegrationsApi.md#getApiIntegration) | **GET** /v2/integrations/api_integrations/ | Get Api Integration |
| [**getApiIntegrationAuthMethods()**](IntegrationsApi.md#getApiIntegrationAuthMethods) | **GET** /v2/integrations/api_integrations/auth_methods | Get Api Integration Auth Methods |
| [**getApiIntegrationEndpoints()**](IntegrationsApi.md#getApiIntegrationEndpoints) | **POST** /v2/integrations/api_integrations/{integration_id}/endpoints | Get Api Integration Endpoints |
| [**getApiIntegrations()**](IntegrationsApi.md#getApiIntegrations) | **POST** /v2/integrations/api_integrations/ | Get Api Integrations |
| [**getMyIntegrations()**](IntegrationsApi.md#getMyIntegrations) | **POST** /v2/integrations/ | Get My Integrations |
| [**importOpenapiSpec()**](IntegrationsApi.md#importOpenapiSpec) | **POST** /v2/integrations/api_integrations/{integration_id}/import/openapi-file | Import Openapi Spec |
| [**importOpenapiSpecFromUrl()**](IntegrationsApi.md#importOpenapiSpecFromUrl) | **POST** /v2/integrations/api_integrations/{integration_id}/import/openapi-url | Import Openapi Spec From Url |
| [**removeApiIntegration()**](IntegrationsApi.md#removeApiIntegration) | **DELETE** /v2/integrations/api_integrations/{integration_id} | Remove Api Integration |
| [**removeApiIntegrationEndpoint()**](IntegrationsApi.md#removeApiIntegrationEndpoint) | **DELETE** /v2/integrations/api_integrations/{integration_id}/endpoints/{endpoint_id} | Remove Api Integration Endpoint |
| [**updateApiIntegration()**](IntegrationsApi.md#updateApiIntegration) | **PUT** /v2/integrations/api_integrations/{integration_id} | Update Api Integration |
| [**updateApiIntegrationEndpoint()**](IntegrationsApi.md#updateApiIntegrationEndpoint) | **PUT** /v2/integrations/api_integrations/{integration_id}/endpoints/{endpoint_id} | Update Api Integration Endpoint |


## `createApiIntegration()`

```php
createApiIntegration($workspace_id, $api_integration_create_request): \OpenAPI\Client\Model\ApiIntegrationResponse
```

Create Api Integration

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
$api_integration_create_request = new \OpenAPI\Client\Model\ApiIntegrationCreateRequest(); // \OpenAPI\Client\Model\ApiIntegrationCreateRequest

try {
    $result = $apiInstance->createApiIntegration($workspace_id, $api_integration_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->createApiIntegration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **api_integration_create_request** | [**\OpenAPI\Client\Model\ApiIntegrationCreateRequest**](../Model/ApiIntegrationCreateRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ApiIntegrationResponse**](../Model/ApiIntegrationResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createApiIntegrationEndpoint()`

```php
createApiIntegrationEndpoint($integration_id, $workspace_id, $api_endpoint_create_request): \OpenAPI\Client\Model\ApiEndpointResponse
```

Create Api Integration Endpoint

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
$integration_id = 'integration_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$api_endpoint_create_request = new \OpenAPI\Client\Model\ApiEndpointCreateRequest(); // \OpenAPI\Client\Model\ApiEndpointCreateRequest

try {
    $result = $apiInstance->createApiIntegrationEndpoint($integration_id, $workspace_id, $api_endpoint_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->createApiIntegrationEndpoint: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **integration_id** | **string**|  | |
| **workspace_id** | **string**|  | |
| **api_endpoint_create_request** | [**\OpenAPI\Client\Model\ApiEndpointCreateRequest**](../Model/ApiEndpointCreateRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ApiEndpointResponse**](../Model/ApiEndpointResponse.md)

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

## `getApiIntegration()`

```php
getApiIntegration($workspace_id, $integration_id): \OpenAPI\Client\Model\ApiIntegrationResponse
```

Get Api Integration

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
$integration_id = 'integration_id_example'; // string

try {
    $result = $apiInstance->getApiIntegration($workspace_id, $integration_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->getApiIntegration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **integration_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\ApiIntegrationResponse**](../Model/ApiIntegrationResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiIntegrationAuthMethods()`

```php
getApiIntegrationAuthMethods(): \OpenAPI\Client\Model\ApiIntegrationAuthenticationMethod[]
```

Get Api Integration Auth Methods

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

try {
    $result = $apiInstance->getApiIntegrationAuthMethods();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->getApiIntegrationAuthMethods: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\ApiIntegrationAuthenticationMethod[]**](../Model/ApiIntegrationAuthenticationMethod.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiIntegrationEndpoints()`

```php
getApiIntegrationEndpoints($integration_id, $workspace_id, $api_endpoint_search_request): \OpenAPI\Client\Model\ApiEndpointResponse[]
```

Get Api Integration Endpoints

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
$integration_id = 'integration_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$api_endpoint_search_request = new \OpenAPI\Client\Model\ApiEndpointSearchRequest(); // \OpenAPI\Client\Model\ApiEndpointSearchRequest

try {
    $result = $apiInstance->getApiIntegrationEndpoints($integration_id, $workspace_id, $api_endpoint_search_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->getApiIntegrationEndpoints: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **integration_id** | **string**|  | |
| **workspace_id** | **string**|  | |
| **api_endpoint_search_request** | [**\OpenAPI\Client\Model\ApiEndpointSearchRequest**](../Model/ApiEndpointSearchRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ApiEndpointResponse[]**](../Model/ApiEndpointResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiIntegrations()`

```php
getApiIntegrations($workspace_id, $api_integration_search_request): \OpenAPI\Client\Model\ApiIntegrationResponse[]
```

Get Api Integrations

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
$api_integration_search_request = new \OpenAPI\Client\Model\ApiIntegrationSearchRequest(); // \OpenAPI\Client\Model\ApiIntegrationSearchRequest

try {
    $result = $apiInstance->getApiIntegrations($workspace_id, $api_integration_search_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->getApiIntegrations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **api_integration_search_request** | [**\OpenAPI\Client\Model\ApiIntegrationSearchRequest**](../Model/ApiIntegrationSearchRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ApiIntegrationResponse[]**](../Model/ApiIntegrationResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
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

## `importOpenapiSpec()`

```php
importOpenapiSpec($integration_id, $workspace_id, $file): \OpenAPI\Client\Model\ApiIntegrationResponse
```

Import Openapi Spec

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
$integration_id = 'integration_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$file = "/path/to/file.txt"; // \SplFileObject

try {
    $result = $apiInstance->importOpenapiSpec($integration_id, $workspace_id, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->importOpenapiSpec: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **integration_id** | **string**|  | |
| **workspace_id** | **string**|  | |
| **file** | **\SplFileObject****\SplFileObject**|  | |

### Return type

[**\OpenAPI\Client\Model\ApiIntegrationResponse**](../Model/ApiIntegrationResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `importOpenapiSpecFromUrl()`

```php
importOpenapiSpecFromUrl($integration_id, $workspace_id, $api_integration_open_api_import_request): \OpenAPI\Client\Model\ApiIntegrationResponse
```

Import Openapi Spec From Url

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
$integration_id = 'integration_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$api_integration_open_api_import_request = new \OpenAPI\Client\Model\ApiIntegrationOpenApiImportRequest(); // \OpenAPI\Client\Model\ApiIntegrationOpenApiImportRequest

try {
    $result = $apiInstance->importOpenapiSpecFromUrl($integration_id, $workspace_id, $api_integration_open_api_import_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->importOpenapiSpecFromUrl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **integration_id** | **string**|  | |
| **workspace_id** | **string**|  | |
| **api_integration_open_api_import_request** | [**\OpenAPI\Client\Model\ApiIntegrationOpenApiImportRequest**](../Model/ApiIntegrationOpenApiImportRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ApiIntegrationResponse**](../Model/ApiIntegrationResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeApiIntegration()`

```php
removeApiIntegration($integration_id, $workspace_id): \OpenAPI\Client\Model\Completed
```

Remove Api Integration

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
$integration_id = 'integration_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->removeApiIntegration($integration_id, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->removeApiIntegration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **integration_id** | **string**|  | |
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

## `removeApiIntegrationEndpoint()`

```php
removeApiIntegrationEndpoint($integration_id, $endpoint_id, $workspace_id): \OpenAPI\Client\Model\Completed
```

Remove Api Integration Endpoint

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
$integration_id = 'integration_id_example'; // string
$endpoint_id = 'endpoint_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->removeApiIntegrationEndpoint($integration_id, $endpoint_id, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->removeApiIntegrationEndpoint: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **integration_id** | **string**|  | |
| **endpoint_id** | **string**|  | |
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

## `updateApiIntegration()`

```php
updateApiIntegration($integration_id, $workspace_id, $api_integration_update_request): \OpenAPI\Client\Model\ApiIntegrationResponse
```

Update Api Integration

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
$integration_id = 'integration_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$api_integration_update_request = new \OpenAPI\Client\Model\ApiIntegrationUpdateRequest(); // \OpenAPI\Client\Model\ApiIntegrationUpdateRequest

try {
    $result = $apiInstance->updateApiIntegration($integration_id, $workspace_id, $api_integration_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->updateApiIntegration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **integration_id** | **string**|  | |
| **workspace_id** | **string**|  | |
| **api_integration_update_request** | [**\OpenAPI\Client\Model\ApiIntegrationUpdateRequest**](../Model/ApiIntegrationUpdateRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ApiIntegrationResponse**](../Model/ApiIntegrationResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateApiIntegrationEndpoint()`

```php
updateApiIntegrationEndpoint($integration_id, $endpoint_id, $workspace_id, $api_endpoint_update_request): \OpenAPI\Client\Model\ApiEndpointResponse
```

Update Api Integration Endpoint

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
$integration_id = 'integration_id_example'; // string
$endpoint_id = 'endpoint_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$api_endpoint_update_request = new \OpenAPI\Client\Model\ApiEndpointUpdateRequest(); // \OpenAPI\Client\Model\ApiEndpointUpdateRequest

try {
    $result = $apiInstance->updateApiIntegrationEndpoint($integration_id, $endpoint_id, $workspace_id, $api_endpoint_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->updateApiIntegrationEndpoint: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **integration_id** | **string**|  | |
| **endpoint_id** | **string**|  | |
| **workspace_id** | **string**|  | |
| **api_endpoint_update_request** | [**\OpenAPI\Client\Model\ApiEndpointUpdateRequest**](../Model/ApiEndpointUpdateRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ApiEndpointResponse**](../Model/ApiEndpointResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
