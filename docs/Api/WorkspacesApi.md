# OpenAPI\Client\WorkspacesApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addWorkspaceUser()**](WorkspacesApi.md#addWorkspaceUser) | **POST** /v2/workspaces/{workspace_id}/add-member | Add Workspace User |
| [**createWorkspace()**](WorkspacesApi.md#createWorkspace) | **POST** /v2/workspaces/create | Create Workspace |
| [**deleteWorkspace()**](WorkspacesApi.md#deleteWorkspace) | **DELETE** /v2/workspaces/{workspace_id} | Delete Workspace |
| [**deleteWorkspaceUser()**](WorkspacesApi.md#deleteWorkspaceUser) | **DELETE** /v2/workspaces/{workspace_id}/{user_id} | Delete Workspace User |
| [**getWorkspace()**](WorkspacesApi.md#getWorkspace) | **POST** /v2/workspaces/{workspace_id} | Get Workspace |
| [**searchMyWorkspaces()**](WorkspacesApi.md#searchMyWorkspaces) | **POST** /v2/workspaces/me/my_workspaces | Search My Workspaces |
| [**searchWorkspaceUsers()**](WorkspacesApi.md#searchWorkspaceUsers) | **POST** /v2/workspaces/{workspace_id}/users | Search Workspace Users |
| [**updateWorkspace()**](WorkspacesApi.md#updateWorkspace) | **PUT** /v2/workspaces/{workspace_id} | Update Workspace |
| [**updateWorkspaceUser()**](WorkspacesApi.md#updateWorkspaceUser) | **PUT** /v2/workspaces/{workspace_id}/{user_id} | Update Workspace User |


## `addWorkspaceUser()`

```php
addWorkspaceUser($workspace_id, $workspace_user_create_request): \OpenAPI\Client\Model\Completed
```

Add Workspace User

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


$apiInstance = new OpenAPI\Client\Api\WorkspacesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$workspace_user_create_request = new \OpenAPI\Client\Model\WorkspaceUserCreateRequest(); // \OpenAPI\Client\Model\WorkspaceUserCreateRequest

try {
    $result = $apiInstance->addWorkspaceUser($workspace_id, $workspace_user_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkspacesApi->addWorkspaceUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **workspace_user_create_request** | [**\OpenAPI\Client\Model\WorkspaceUserCreateRequest**](../Model/WorkspaceUserCreateRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Completed**](../Model/Completed.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createWorkspace()`

```php
createWorkspace($workspace_create_request): \OpenAPI\Client\Model\WorkspaceResponse
```

Create Workspace

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


$apiInstance = new OpenAPI\Client\Api\WorkspacesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_create_request = new \OpenAPI\Client\Model\WorkspaceCreateRequest(); // \OpenAPI\Client\Model\WorkspaceCreateRequest

try {
    $result = $apiInstance->createWorkspace($workspace_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkspacesApi->createWorkspace: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_create_request** | [**\OpenAPI\Client\Model\WorkspaceCreateRequest**](../Model/WorkspaceCreateRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\WorkspaceResponse**](../Model/WorkspaceResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteWorkspace()`

```php
deleteWorkspace($workspace_id): \OpenAPI\Client\Model\Completed
```

Delete Workspace

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


$apiInstance = new OpenAPI\Client\Api\WorkspacesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->deleteWorkspace($workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkspacesApi->deleteWorkspace: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
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

## `deleteWorkspaceUser()`

```php
deleteWorkspaceUser($workspace_id, $user_id): \OpenAPI\Client\Model\Completed
```

Delete Workspace User

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


$apiInstance = new OpenAPI\Client\Api\WorkspacesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$user_id = 'user_id_example'; // string

try {
    $result = $apiInstance->deleteWorkspaceUser($workspace_id, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkspacesApi->deleteWorkspaceUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **user_id** | **string**|  | |

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

## `getWorkspace()`

```php
getWorkspace($workspace_id): \OpenAPI\Client\Model\WorkspaceResponse
```

Get Workspace

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


$apiInstance = new OpenAPI\Client\Api\WorkspacesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->getWorkspace($workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkspacesApi->getWorkspace: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\WorkspaceResponse**](../Model/WorkspaceResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchMyWorkspaces()`

```php
searchMyWorkspaces($workspace_search_request): \OpenAPI\Client\Model\WorkspaceRole[]
```

Search My Workspaces

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


$apiInstance = new OpenAPI\Client\Api\WorkspacesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_search_request = new \OpenAPI\Client\Model\WorkspaceSearchRequest(); // \OpenAPI\Client\Model\WorkspaceSearchRequest

try {
    $result = $apiInstance->searchMyWorkspaces($workspace_search_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkspacesApi->searchMyWorkspaces: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_search_request** | [**\OpenAPI\Client\Model\WorkspaceSearchRequest**](../Model/WorkspaceSearchRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\WorkspaceRole[]**](../Model/WorkspaceRole.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchWorkspaceUsers()`

```php
searchWorkspaceUsers($workspace_id, $workspace_users_search_request): \OpenAPI\Client\Model\WorkspaceUserResponse[]
```

Search Workspace Users

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


$apiInstance = new OpenAPI\Client\Api\WorkspacesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$workspace_users_search_request = new \OpenAPI\Client\Model\WorkspaceUsersSearchRequest(); // \OpenAPI\Client\Model\WorkspaceUsersSearchRequest

try {
    $result = $apiInstance->searchWorkspaceUsers($workspace_id, $workspace_users_search_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkspacesApi->searchWorkspaceUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **workspace_users_search_request** | [**\OpenAPI\Client\Model\WorkspaceUsersSearchRequest**](../Model/WorkspaceUsersSearchRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\WorkspaceUserResponse[]**](../Model/WorkspaceUserResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateWorkspace()`

```php
updateWorkspace($workspace_id, $workspace_update_request): \OpenAPI\Client\Model\Completed
```

Update Workspace

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


$apiInstance = new OpenAPI\Client\Api\WorkspacesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$workspace_update_request = new \OpenAPI\Client\Model\WorkspaceUpdateRequest(); // \OpenAPI\Client\Model\WorkspaceUpdateRequest

try {
    $result = $apiInstance->updateWorkspace($workspace_id, $workspace_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkspacesApi->updateWorkspace: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **workspace_update_request** | [**\OpenAPI\Client\Model\WorkspaceUpdateRequest**](../Model/WorkspaceUpdateRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Completed**](../Model/Completed.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateWorkspaceUser()`

```php
updateWorkspaceUser($workspace_id, $user_id, $workspace_user_update_request): \OpenAPI\Client\Model\Completed
```

Update Workspace User

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


$apiInstance = new OpenAPI\Client\Api\WorkspacesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$user_id = 'user_id_example'; // string
$workspace_user_update_request = new \OpenAPI\Client\Model\WorkspaceUserUpdateRequest(); // \OpenAPI\Client\Model\WorkspaceUserUpdateRequest

try {
    $result = $apiInstance->updateWorkspaceUser($workspace_id, $user_id, $workspace_user_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkspacesApi->updateWorkspaceUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **user_id** | **string**|  | |
| **workspace_user_update_request** | [**\OpenAPI\Client\Model\WorkspaceUserUpdateRequest**](../Model/WorkspaceUserUpdateRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Completed**](../Model/Completed.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
