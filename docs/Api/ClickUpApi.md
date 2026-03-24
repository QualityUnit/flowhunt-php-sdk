# FlowHunt\ClickUpApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getClickupSpaces()**](ClickUpApi.md#getClickupSpaces) | **GET** /v2/integrations/clickup/{integration_id}/spaces | Get Clickup Spaces |
| [**getClickupWorkspaces()**](ClickUpApi.md#getClickupWorkspaces) | **GET** /v2/integrations/clickup/ | Get Clickup Workspaces |


## `getClickupSpaces()`

```php
getClickupSpaces($integration_id, $workspace_id): \FlowHunt\Model\ClickUpSpaceResponse[]
```

Get Clickup Spaces

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = FlowHunt\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FlowHunt\Api\ClickUpApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$integration_id = 'integration_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->getClickupSpaces($integration_id, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClickUpApi->getClickupSpaces: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **integration_id** | **string**|  | |
| **workspace_id** | **string**|  | |

### Return type

[**\FlowHunt\Model\ClickUpSpaceResponse[]**](../Model/ClickUpSpaceResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getClickupWorkspaces()`

```php
getClickupWorkspaces($workspace_id): \FlowHunt\Model\ClickUpWorkspaceResponse[]
```

Get Clickup Workspaces

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = FlowHunt\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FlowHunt\Api\ClickUpApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->getClickupWorkspaces($workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClickUpApi->getClickupWorkspaces: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |

### Return type

[**\FlowHunt\Model\ClickUpWorkspaceResponse[]**](../Model/ClickUpWorkspaceResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
