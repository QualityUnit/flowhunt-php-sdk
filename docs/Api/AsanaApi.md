# FlowHunt\AsanaApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAsanaProjectTasks()**](AsanaApi.md#getAsanaProjectTasks) | **GET** /v2/integrations/asana/{integration_id}/projects/{project_gid}/tasks | Get Asana Project Tasks |
| [**getAsanaProjects()**](AsanaApi.md#getAsanaProjects) | **GET** /v2/integrations/asana/{integration_id}/projects | Get Asana Projects |
| [**getAsanaUsers()**](AsanaApi.md#getAsanaUsers) | **GET** /v2/integrations/asana/{integration_id}/users | Get Asana Users |
| [**getAsanaWorkspaces()**](AsanaApi.md#getAsanaWorkspaces) | **GET** /v2/integrations/asana/ | Get Asana Workspaces |


## `getAsanaProjectTasks()`

```php
getAsanaProjectTasks($integration_id, $project_gid, $workspace_id): \FlowHunt\Model\AsanaTaskResponse[]
```

Get Asana Project Tasks

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = FlowHunt\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FlowHunt\Api\AsanaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$integration_id = 'integration_id_example'; // string
$project_gid = 'project_gid_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->getAsanaProjectTasks($integration_id, $project_gid, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AsanaApi->getAsanaProjectTasks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **integration_id** | **string**|  | |
| **project_gid** | **string**|  | |
| **workspace_id** | **string**|  | |

### Return type

[**\FlowHunt\Model\AsanaTaskResponse[]**](../Model/AsanaTaskResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAsanaProjects()`

```php
getAsanaProjects($integration_id, $workspace_id): \FlowHunt\Model\AsanaProjectResponse[]
```

Get Asana Projects

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = FlowHunt\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FlowHunt\Api\AsanaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$integration_id = 'integration_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->getAsanaProjects($integration_id, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AsanaApi->getAsanaProjects: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **integration_id** | **string**|  | |
| **workspace_id** | **string**|  | |

### Return type

[**\FlowHunt\Model\AsanaProjectResponse[]**](../Model/AsanaProjectResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAsanaUsers()`

```php
getAsanaUsers($integration_id, $workspace_id): \FlowHunt\Model\AsanaUserResponse[]
```

Get Asana Users

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = FlowHunt\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FlowHunt\Api\AsanaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$integration_id = 'integration_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->getAsanaUsers($integration_id, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AsanaApi->getAsanaUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **integration_id** | **string**|  | |
| **workspace_id** | **string**|  | |

### Return type

[**\FlowHunt\Model\AsanaUserResponse[]**](../Model/AsanaUserResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAsanaWorkspaces()`

```php
getAsanaWorkspaces($workspace_id): \FlowHunt\Model\AsanaWorkspaceResponse[]
```

Get Asana Workspaces

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = FlowHunt\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FlowHunt\Api\AsanaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->getAsanaWorkspaces($workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AsanaApi->getAsanaWorkspaces: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |

### Return type

[**\FlowHunt\Model\AsanaWorkspaceResponse[]**](../Model/AsanaWorkspaceResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
