# FlowHunt\GatewayApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**resolveIntegrationGatewayToken()**](GatewayApi.md#resolveIntegrationGatewayToken) | **GET** /v2/integrations/integrate/gateway/{token} | Resolve an integration gateway token |


## `resolveIntegrationGatewayToken()`

```php
resolveIntegrationGatewayToken($token): \FlowHunt\Model\IntegrationGatewayResponse
```

Resolve an integration gateway token

Resolves a temporary token issued by an AI agent when a required integration is missing.  Returns the workspace and slug so the frontend can redirect to the integration setup page.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FlowHunt\Api\GatewayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = 'token_example'; // string

try {
    $result = $apiInstance->resolveIntegrationGatewayToken($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GatewayApi->resolveIntegrationGatewayToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **token** | **string**|  | |

### Return type

[**\FlowHunt\Model\IntegrationGatewayResponse**](../Model/IntegrationGatewayResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
