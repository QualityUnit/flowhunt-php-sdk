# FlowHunt\GoogleApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getDriveDocumentDetail_0()**](GoogleApi.md#getDriveDocumentDetail_0) | **POST** /v2/integrations/google/drive/files/{document_id} | Get Drive Document Detail |
| [**getDriveDocuments_0()**](GoogleApi.md#getDriveDocuments_0) | **POST** /v2/integrations/google/{integration_slug}/drive/files | Get Drive Documents |


## `getDriveDocumentDetail_0()`

```php
getDriveDocumentDetail_0($document_id, $workspace_id): \FlowHunt\Model\GoogleDriveFileResponse
```

Get Drive Document Detail

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = FlowHunt\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FlowHunt\Api\GoogleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$document_id = 'document_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->getDriveDocumentDetail_0($document_id, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GoogleApi->getDriveDocumentDetail_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **document_id** | **string**|  | |
| **workspace_id** | **string**|  | |

### Return type

[**\FlowHunt\Model\GoogleDriveFileResponse**](../Model/GoogleDriveFileResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDriveDocuments_0()`

```php
getDriveDocuments_0($integration_slug, $workspace_id, $google_drive_search_query): \FlowHunt\Model\GoogleDriveSearchResponse
```

Get Drive Documents

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = FlowHunt\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FlowHunt\Api\GoogleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$integration_slug = new \FlowHunt\Model\\FlowHunt\Model\IntegrationSlug(); // \FlowHunt\Model\IntegrationSlug
$workspace_id = 'workspace_id_example'; // string
$google_drive_search_query = new \FlowHunt\Model\GoogleDriveSearchQuery(); // \FlowHunt\Model\GoogleDriveSearchQuery

try {
    $result = $apiInstance->getDriveDocuments_0($integration_slug, $workspace_id, $google_drive_search_query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GoogleApi->getDriveDocuments_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **integration_slug** | [**\FlowHunt\Model\IntegrationSlug**](../Model/.md)|  | |
| **workspace_id** | **string**|  | |
| **google_drive_search_query** | [**\FlowHunt\Model\GoogleDriveSearchQuery**](../Model/GoogleDriveSearchQuery.md)|  | |

### Return type

[**\FlowHunt\Model\GoogleDriveSearchResponse**](../Model/GoogleDriveSearchResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
