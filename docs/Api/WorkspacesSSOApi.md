# FlowHunt\WorkspacesSSOApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createWorkspaceSsoSettings()**](WorkspacesSSOApi.md#createWorkspaceSsoSettings) | **POST** /v2/workspaces/{workspace_id}/sso | Create Workspace Sso Settings |
| [**deleteWorkspaceSsoSettings()**](WorkspacesSSOApi.md#deleteWorkspaceSsoSettings) | **DELETE** /v2/workspaces/{workspace_id}/sso/{provider} | Delete Workspace Sso Settings |
| [**getWorkspaceSsoSettings()**](WorkspacesSSOApi.md#getWorkspaceSsoSettings) | **GET** /v2/workspaces/{workspace_id}/sso/{provider} | Get Workspace Sso Settings |
| [**listWorkspaceSsoSettings()**](WorkspacesSSOApi.md#listWorkspaceSsoSettings) | **GET** /v2/workspaces/{workspace_id}/sso | List Workspace Sso Settings |
| [**updateWorkspaceSsoSettings()**](WorkspacesSSOApi.md#updateWorkspaceSsoSettings) | **PUT** /v2/workspaces/{workspace_id}/sso/{provider} | Update Workspace Sso Settings |


## `createWorkspaceSsoSettings()`

```php
createWorkspaceSsoSettings($workspace_id, $workspace_sso_create_request): \FlowHunt\Model\WorkspaceSSOResponse
```

Create Workspace Sso Settings

Create SSO settings for a workspace. Admin endpoint - requires workspace admin permissions.

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


$apiInstance = new FlowHunt\Api\WorkspacesSSOApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$workspace_sso_create_request = new \FlowHunt\Model\WorkspaceSSOCreateRequest(); // \FlowHunt\Model\WorkspaceSSOCreateRequest

try {
    $result = $apiInstance->createWorkspaceSsoSettings($workspace_id, $workspace_sso_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkspacesSSOApi->createWorkspaceSsoSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **workspace_sso_create_request** | [**\FlowHunt\Model\WorkspaceSSOCreateRequest**](../Model/WorkspaceSSOCreateRequest.md)|  | |

### Return type

[**\FlowHunt\Model\WorkspaceSSOResponse**](../Model/WorkspaceSSOResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteWorkspaceSsoSettings()`

```php
deleteWorkspaceSsoSettings($workspace_id, $provider): \FlowHunt\Model\Completed
```

Delete Workspace Sso Settings

Delete SSO settings for a workspace and provider. Admin endpoint - requires workspace admin permissions.

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


$apiInstance = new FlowHunt\Api\WorkspacesSSOApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$provider = 'provider_example'; // string

try {
    $result = $apiInstance->deleteWorkspaceSsoSettings($workspace_id, $provider);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkspacesSSOApi->deleteWorkspaceSsoSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **provider** | **string**|  | |

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

## `getWorkspaceSsoSettings()`

```php
getWorkspaceSsoSettings($workspace_id, $provider): \FlowHunt\Model\WorkspaceSSOResponse
```

Get Workspace Sso Settings

Get SSO settings for a specific workspace and provider. Admin endpoint - requires workspace admin permissions.

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


$apiInstance = new FlowHunt\Api\WorkspacesSSOApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$provider = 'provider_example'; // string

try {
    $result = $apiInstance->getWorkspaceSsoSettings($workspace_id, $provider);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkspacesSSOApi->getWorkspaceSsoSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **provider** | **string**|  | |

### Return type

[**\FlowHunt\Model\WorkspaceSSOResponse**](../Model/WorkspaceSSOResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listWorkspaceSsoSettings()`

```php
listWorkspaceSsoSettings($workspace_id): \FlowHunt\Model\WorkspaceSSOListResponse
```

List Workspace Sso Settings

List all SSO settings for a workspace. Admin endpoint - requires workspace admin permissions.

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


$apiInstance = new FlowHunt\Api\WorkspacesSSOApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->listWorkspaceSsoSettings($workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkspacesSSOApi->listWorkspaceSsoSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |

### Return type

[**\FlowHunt\Model\WorkspaceSSOListResponse**](../Model/WorkspaceSSOListResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateWorkspaceSsoSettings()`

```php
updateWorkspaceSsoSettings($workspace_id, $provider, $workspace_sso_update_request): \FlowHunt\Model\WorkspaceSSOResponse
```

Update Workspace Sso Settings

Update SSO settings for a workspace and provider. Admin endpoint - requires workspace admin permissions.

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


$apiInstance = new FlowHunt\Api\WorkspacesSSOApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$provider = 'provider_example'; // string
$workspace_sso_update_request = new \FlowHunt\Model\WorkspaceSSOUpdateRequest(); // \FlowHunt\Model\WorkspaceSSOUpdateRequest

try {
    $result = $apiInstance->updateWorkspaceSsoSettings($workspace_id, $provider, $workspace_sso_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkspacesSSOApi->updateWorkspaceSsoSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **provider** | **string**|  | |
| **workspace_sso_update_request** | [**\FlowHunt\Model\WorkspaceSSOUpdateRequest**](../Model/WorkspaceSSOUpdateRequest.md)|  | |

### Return type

[**\FlowHunt\Model\WorkspaceSSOResponse**](../Model/WorkspaceSSOResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
