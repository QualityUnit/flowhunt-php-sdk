# FlowHunt\MicrosoftOutlookApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**updateAdminConsent()**](MicrosoftOutlookApi.md#updateAdminConsent) | **POST** /v2/integrations/microsoft_entra_id/admin_consent | Update Admin Consent |


## `updateAdminConsent()`

```php
updateAdminConsent($workspace_id, $integration_id): \FlowHunt\Model\IntegrationDetailResponse
```

Update Admin Consent

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = FlowHunt\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FlowHunt\Api\MicrosoftOutlookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$integration_id = 'integration_id_example'; // string

try {
    $result = $apiInstance->updateAdminConsent($workspace_id, $integration_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MicrosoftOutlookApi->updateAdminConsent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **integration_id** | **string**|  | |

### Return type

[**\FlowHunt\Model\IntegrationDetailResponse**](../Model/IntegrationDetailResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
