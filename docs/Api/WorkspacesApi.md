# OpenAPI\Client\WorkspacesApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addWorkspaceMember()**](WorkspacesApi.md#addWorkspaceMember) | **POST** /v2/workspaces/{workspace_id}/add-member | Add Workspace Member |
| [**createWorkspace()**](WorkspacesApi.md#createWorkspace) | **POST** /v2/workspaces/create | Create Workspace |
| [**deleteWorkspace()**](WorkspacesApi.md#deleteWorkspace) | **DELETE** /v2/workspaces/{workspace_id} | Delete Workspace |
| [**deleteWorkspaceMember()**](WorkspacesApi.md#deleteWorkspaceMember) | **DELETE** /v2/workspaces/{workspace_id}/{user_id} | Delete Workspace Member |
| [**getWorkspaceUsers()**](WorkspacesApi.md#getWorkspaceUsers) | **POST** /v2/workspaces/{workspace_id} | Get Workspace Users |
| [**updateWorkspace()**](WorkspacesApi.md#updateWorkspace) | **PUT** /v2/workspaces/{workspace_id} | Update Workspace |
| [**updateWorkspaceMember()**](WorkspacesApi.md#updateWorkspaceMember) | **PUT** /v2/workspaces/{workspace_id}/{user_id} | Update Workspace Member |


## `addWorkspaceMember()`

```php
addWorkspaceMember($workspace_id, $workspace_user_create_request): \OpenAPI\Client\Model\Completed
```

Add Workspace Member

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


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
    $result = $apiInstance->addWorkspaceMember($workspace_id, $workspace_user_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkspacesApi->addWorkspaceMember: ', $e->getMessage(), PHP_EOL;
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

[HTTPBearer](../../README.md#HTTPBearer)

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

[HTTPBearer](../../README.md#HTTPBearer)

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

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteWorkspaceMember()`

```php
deleteWorkspaceMember($workspace_id, $user_id): \OpenAPI\Client\Model\Completed
```

Delete Workspace Member

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


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
    $result = $apiInstance->deleteWorkspaceMember($workspace_id, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkspacesApi->deleteWorkspaceMember: ', $e->getMessage(), PHP_EOL;
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

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWorkspaceUsers()`

```php
getWorkspaceUsers($workspace_id, $workspace_search_request): \OpenAPI\Client\Model\WorkspaceResponse
```

Get Workspace Users

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WorkspacesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$workspace_search_request = new \OpenAPI\Client\Model\WorkspaceSearchRequest(); // \OpenAPI\Client\Model\WorkspaceSearchRequest

try {
    $result = $apiInstance->getWorkspaceUsers($workspace_id, $workspace_search_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkspacesApi->getWorkspaceUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **workspace_search_request** | [**\OpenAPI\Client\Model\WorkspaceSearchRequest**](../Model/WorkspaceSearchRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\WorkspaceResponse**](../Model/WorkspaceResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

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

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateWorkspaceMember()`

```php
updateWorkspaceMember($workspace_id, $user_id, $workspace_user_update_request): \OpenAPI\Client\Model\Completed
```

Update Workspace Member

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


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
    $result = $apiInstance->updateWorkspaceMember($workspace_id, $user_id, $workspace_user_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkspacesApi->updateWorkspaceMember: ', $e->getMessage(), PHP_EOL;
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

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
