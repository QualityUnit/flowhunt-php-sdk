# FlowHunt\PowerBIApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getPowerbiWorkspaces()**](PowerBIApi.md#getPowerbiWorkspaces) | **GET** /v2/integrations/powerbi/workspaces | Get Powerbi Workspaces |


## `getPowerbiWorkspaces()`

```php
getPowerbiWorkspaces($workspace_id): \FlowHunt\Model\PowerBIWorkspacesResponse
```

Get Powerbi Workspaces

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = FlowHunt\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FlowHunt\Api\PowerBIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->getPowerbiWorkspaces($workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PowerBIApi->getPowerbiWorkspaces: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |

### Return type

[**\FlowHunt\Model\PowerBIWorkspacesResponse**](../Model/PowerBIWorkspacesResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
