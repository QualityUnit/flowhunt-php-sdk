# FlowHunt\AirtableApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAirtableBases()**](AirtableApi.md#getAirtableBases) | **GET** /v2/integrations/airtable/ | Get Airtable Bases |
| [**getAirtableTables()**](AirtableApi.md#getAirtableTables) | **GET** /v2/integrations/airtable/bases/{base_id}/tables | Get Airtable Tables |


## `getAirtableBases()`

```php
getAirtableBases($workspace_id): \FlowHunt\Model\AirtableBasesResponse
```

Get Airtable Bases

Get all Airtable bases accessible through the workspace's Airtable integration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = FlowHunt\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FlowHunt\Api\AirtableApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->getAirtableBases($workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AirtableApi->getAirtableBases: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |

### Return type

[**\FlowHunt\Model\AirtableBasesResponse**](../Model/AirtableBasesResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAirtableTables()`

```php
getAirtableTables($base_id, $workspace_id): \FlowHunt\Model\AirtableTablesResponse
```

Get Airtable Tables

Get all tables for a specific Airtable base.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = FlowHunt\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FlowHunt\Api\AirtableApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$base_id = 'base_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->getAirtableTables($base_id, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AirtableApi->getAirtableTables: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **base_id** | **string**|  | |
| **workspace_id** | **string**|  | |

### Return type

[**\FlowHunt\Model\AirtableTablesResponse**](../Model/AirtableTablesResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
