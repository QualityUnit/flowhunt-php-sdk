# FlowHunt\ShopifyApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**customerDataRequest()**](ShopifyApi.md#customerDataRequest) | **POST** /v2/integrations/shopify/webhooks/customers/data_request | Customer Data Request |
| [**customerRedact()**](ShopifyApi.md#customerRedact) | **POST** /v2/integrations/shopify/webhooks/customers/redact | Customer Redact |
| [**shopRedact()**](ShopifyApi.md#shopRedact) | **POST** /v2/integrations/shopify/webhooks/shop/redact | Shop Redact |


## `customerDataRequest()`

```php
customerDataRequest($customer_data_request_payload): mixed
```

Customer Data Request

Handle customer data request webhooks from Shopify.  This endpoint is called when a customer requests their data from a Shopify store.  Args:     request: The FastAPI request object     payload: The webhook payload  Returns:     A 200 OK response if the webhook is valid and processed successfully

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = FlowHunt\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FlowHunt\Api\ShopifyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_data_request_payload = new \FlowHunt\Model\CustomerDataRequestPayload(); // \FlowHunt\Model\CustomerDataRequestPayload

try {
    $result = $apiInstance->customerDataRequest($customer_data_request_payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShopifyApi->customerDataRequest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_data_request_payload** | [**\FlowHunt\Model\CustomerDataRequestPayload**](../Model/CustomerDataRequestPayload.md)|  | |

### Return type

**mixed**

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customerRedact()`

```php
customerRedact($customer_redact_payload): mixed
```

Customer Redact

Handle customer redact webhooks from Shopify.  This endpoint is called when a customer requests their data to be deleted from a Shopify store.  Args:     request: The FastAPI request object     payload: The webhook payload  Returns:     A 200 OK response if the webhook is valid and processed successfully

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = FlowHunt\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FlowHunt\Api\ShopifyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_redact_payload = new \FlowHunt\Model\CustomerRedactPayload(); // \FlowHunt\Model\CustomerRedactPayload

try {
    $result = $apiInstance->customerRedact($customer_redact_payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShopifyApi->customerRedact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_redact_payload** | [**\FlowHunt\Model\CustomerRedactPayload**](../Model/CustomerRedactPayload.md)|  | |

### Return type

**mixed**

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `shopRedact()`

```php
shopRedact($shop_redact_payload): mixed
```

Shop Redact

Handle shop redact webhooks from Shopify.  This endpoint is called 48 hours after a store owner uninstalls the app.  Args:     request: The FastAPI request object     payload: The webhook payload  Returns:     A 200 OK response if the webhook is valid and processed successfully

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = FlowHunt\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FlowHunt\Api\ShopifyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shop_redact_payload = new \FlowHunt\Model\ShopRedactPayload(); // \FlowHunt\Model\ShopRedactPayload

try {
    $result = $apiInstance->shopRedact($shop_redact_payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShopifyApi->shopRedact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **shop_redact_payload** | [**\FlowHunt\Model\ShopRedactPayload**](../Model/ShopRedactPayload.md)|  | |

### Return type

**mixed**

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
