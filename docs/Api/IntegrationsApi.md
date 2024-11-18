# FlowHunt\IntegrationsApi

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
createApiIntegration($workspace_id, $api_integration_create_request): \FlowHunt\Model\ApiIntegrationResponse
```

Create Api Integration

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


$apiInstance = new FlowHunt\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$api_integration_create_request = new \FlowHunt\Model\ApiIntegrationCreateRequest(); // \FlowHunt\Model\ApiIntegrationCreateRequest

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
| **api_integration_create_request** | [**\FlowHunt\Model\ApiIntegrationCreateRequest**](../Model/ApiIntegrationCreateRequest.md)|  | |

### Return type

[**\FlowHunt\Model\ApiIntegrationResponse**](../Model/ApiIntegrationResponse.md)

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
createApiIntegrationEndpoint($integration_id, $workspace_id, $api_endpoint_create_request): \FlowHunt\Model\ApiEndpointResponse
```

Create Api Integration Endpoint

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


$apiInstance = new FlowHunt\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$integration_id = 'integration_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$api_endpoint_create_request = new \FlowHunt\Model\ApiEndpointCreateRequest(); // \FlowHunt\Model\ApiEndpointCreateRequest

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
| **api_endpoint_create_request** | [**\FlowHunt\Model\ApiEndpointCreateRequest**](../Model/ApiEndpointCreateRequest.md)|  | |

### Return type

[**\FlowHunt\Model\ApiEndpointResponse**](../Model/ApiEndpointResponse.md)

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
getAllIntegrations($workspace_id): \FlowHunt\Model\IntegrationResponse[]
```

Get All Integrations

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


$apiInstance = new FlowHunt\Api\IntegrationsApi(
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

[**\FlowHunt\Model\IntegrationResponse[]**](../Model/IntegrationResponse.md)

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
getApiIntegration($workspace_id, $integration_id): \FlowHunt\Model\ApiIntegrationResponse
```

Get Api Integration

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


$apiInstance = new FlowHunt\Api\IntegrationsApi(
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

[**\FlowHunt\Model\ApiIntegrationResponse**](../Model/ApiIntegrationResponse.md)

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
getApiIntegrationAuthMethods(): \FlowHunt\Model\ApiIntegrationAuthenticationMethod[]
```

Get Api Integration Auth Methods

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


$apiInstance = new FlowHunt\Api\IntegrationsApi(
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

[**\FlowHunt\Model\ApiIntegrationAuthenticationMethod[]**](../Model/ApiIntegrationAuthenticationMethod.md)

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
getApiIntegrationEndpoints($integration_id, $workspace_id, $api_endpoint_search_request): \FlowHunt\Model\ApiEndpointResponse[]
```

Get Api Integration Endpoints

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


$apiInstance = new FlowHunt\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$integration_id = 'integration_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$api_endpoint_search_request = new \FlowHunt\Model\ApiEndpointSearchRequest(); // \FlowHunt\Model\ApiEndpointSearchRequest

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
| **api_endpoint_search_request** | [**\FlowHunt\Model\ApiEndpointSearchRequest**](../Model/ApiEndpointSearchRequest.md)|  | |

### Return type

[**\FlowHunt\Model\ApiEndpointResponse[]**](../Model/ApiEndpointResponse.md)

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
getApiIntegrations($workspace_id, $api_integration_search_request): \FlowHunt\Model\ApiIntegrationResponse[]
```

Get Api Integrations

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


$apiInstance = new FlowHunt\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$api_integration_search_request = new \FlowHunt\Model\ApiIntegrationSearchRequest(); // \FlowHunt\Model\ApiIntegrationSearchRequest

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
| **api_integration_search_request** | [**\FlowHunt\Model\ApiIntegrationSearchRequest**](../Model/ApiIntegrationSearchRequest.md)|  | |

### Return type

[**\FlowHunt\Model\ApiIntegrationResponse[]**](../Model/ApiIntegrationResponse.md)

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
getMyIntegrations($workspace_id, $integration_search_request): \FlowHunt\Model\IntegrationDetailResponse[]
```

Get My Integrations

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


$apiInstance = new FlowHunt\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$integration_search_request = new \FlowHunt\Model\IntegrationSearchRequest(); // \FlowHunt\Model\IntegrationSearchRequest

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
| **integration_search_request** | [**\FlowHunt\Model\IntegrationSearchRequest**](../Model/IntegrationSearchRequest.md)|  | |

### Return type

[**\FlowHunt\Model\IntegrationDetailResponse[]**](../Model/IntegrationDetailResponse.md)

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
importOpenapiSpec($integration_id, $workspace_id, $file): \FlowHunt\Model\ApiIntegrationResponse
```

Import Openapi Spec

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


$apiInstance = new FlowHunt\Api\IntegrationsApi(
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

[**\FlowHunt\Model\ApiIntegrationResponse**](../Model/ApiIntegrationResponse.md)

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
importOpenapiSpecFromUrl($integration_id, $workspace_id, $api_integration_open_api_import_request): \FlowHunt\Model\ApiIntegrationResponse
```

Import Openapi Spec From Url

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


$apiInstance = new FlowHunt\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$integration_id = 'integration_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$api_integration_open_api_import_request = new \FlowHunt\Model\ApiIntegrationOpenApiImportRequest(); // \FlowHunt\Model\ApiIntegrationOpenApiImportRequest

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
| **api_integration_open_api_import_request** | [**\FlowHunt\Model\ApiIntegrationOpenApiImportRequest**](../Model/ApiIntegrationOpenApiImportRequest.md)|  | |

### Return type

[**\FlowHunt\Model\ApiIntegrationResponse**](../Model/ApiIntegrationResponse.md)

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
removeApiIntegration($integration_id, $workspace_id): \FlowHunt\Model\Completed
```

Remove Api Integration

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


$apiInstance = new FlowHunt\Api\IntegrationsApi(
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

[**\FlowHunt\Model\Completed**](../Model/Completed.md)

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
removeApiIntegrationEndpoint($integration_id, $endpoint_id, $workspace_id): \FlowHunt\Model\Completed
```

Remove Api Integration Endpoint

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


$apiInstance = new FlowHunt\Api\IntegrationsApi(
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

[**\FlowHunt\Model\Completed**](../Model/Completed.md)

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
updateApiIntegration($integration_id, $workspace_id, $api_integration_update_request): \FlowHunt\Model\ApiIntegrationResponse
```

Update Api Integration

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


$apiInstance = new FlowHunt\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$integration_id = 'integration_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$api_integration_update_request = new \FlowHunt\Model\ApiIntegrationUpdateRequest(); // \FlowHunt\Model\ApiIntegrationUpdateRequest

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
| **api_integration_update_request** | [**\FlowHunt\Model\ApiIntegrationUpdateRequest**](../Model/ApiIntegrationUpdateRequest.md)|  | |

### Return type

[**\FlowHunt\Model\ApiIntegrationResponse**](../Model/ApiIntegrationResponse.md)

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
updateApiIntegrationEndpoint($integration_id, $endpoint_id, $workspace_id, $api_endpoint_update_request): \FlowHunt\Model\ApiEndpointResponse
```

Update Api Integration Endpoint

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


$apiInstance = new FlowHunt\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$integration_id = 'integration_id_example'; // string
$endpoint_id = 'endpoint_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$api_endpoint_update_request = new \FlowHunt\Model\ApiEndpointUpdateRequest(); // \FlowHunt\Model\ApiEndpointUpdateRequest

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
| **api_endpoint_update_request** | [**\FlowHunt\Model\ApiEndpointUpdateRequest**](../Model/ApiEndpointUpdateRequest.md)|  | |

### Return type

[**\FlowHunt\Model\ApiEndpointResponse**](../Model/ApiEndpointResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
