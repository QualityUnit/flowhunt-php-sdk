# FlowHunt\BillingApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addAddonToSubscription()**](BillingApi.md#addAddonToSubscription) | **POST** /v2/billing/addons/{product_id}/add | Add Addon To Subscription |
| [**confirmShopifySubscription()**](BillingApi.md#confirmShopifySubscription) | **GET** /v2/billing/shopify/confirm | Confirm Shopify Subscription |
| [**createChangePlanPortal()**](BillingApi.md#createChangePlanPortal) | **POST** /v2/billing/portal/change-plan/create | Create Change Plan Portal |
| [**createCheckout()**](BillingApi.md#createCheckout) | **POST** /v2/billing/checkout/create | Create Checkout |
| [**createUpdateInfoPortal()**](BillingApi.md#createUpdateInfoPortal) | **POST** /v2/billing/portal/update-info/create | Create Update Info Portal |
| [**getPricingPlans()**](BillingApi.md#getPricingPlans) | **GET** /v2/billing/plans | Get Pricing Plans |
| [**getUserPlan()**](BillingApi.md#getUserPlan) | **GET** /v2/billing/plans/me | Get User Plan |
| [**stripeWebhook()**](BillingApi.md#stripeWebhook) | **POST** /v2/billing/webhook | Stripe Webhook |


## `addAddonToSubscription()`

```php
addAddonToSubscription($product_id, $workspace_id, $add_on_add_request): string
```

Add Addon To Subscription

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = FlowHunt\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FlowHunt\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure Bearer authorization: HTTPBearer
$config = FlowHunt\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FlowHunt\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = 'product_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$add_on_add_request = new \FlowHunt\Model\AddOnAddRequest(); // \FlowHunt\Model\AddOnAddRequest

try {
    $result = $apiInstance->addAddonToSubscription($product_id, $workspace_id, $add_on_add_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->addAddonToSubscription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product_id** | **string**|  | |
| **workspace_id** | **string**|  | |
| **add_on_add_request** | [**\FlowHunt\Model\AddOnAddRequest**](../Model/AddOnAddRequest.md)|  | |

### Return type

**string**

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `confirmShopifySubscription()`

```php
confirmShopifySubscription($charge_id, $shop): \FlowHunt\Model\ShopifySubscriptionConfirmResponse
```

Confirm Shopify Subscription

Handle Shopify subscription confirmation redirect. This is the redirect URI after successful purchase of any Shopify plan.  Args:     charge_id: The charge ID from Shopify (query parameter)     shop: The shop domain (query parameter)  Returns:     ShopifySubscriptionConfirmResponse with subscription details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = FlowHunt\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FlowHunt\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure Bearer authorization: HTTPBearer
$config = FlowHunt\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FlowHunt\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$charge_id = 'charge_id_example'; // string
$shop = 'shop_example'; // string

try {
    $result = $apiInstance->confirmShopifySubscription($charge_id, $shop);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->confirmShopifySubscription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **charge_id** | **string**|  | |
| **shop** | **string**|  | |

### Return type

[**\FlowHunt\Model\ShopifySubscriptionConfirmResponse**](../Model/ShopifySubscriptionConfirmResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createChangePlanPortal()`

```php
createChangePlanPortal(): mixed
```

Create Change Plan Portal

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = FlowHunt\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FlowHunt\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure Bearer authorization: HTTPBearer
$config = FlowHunt\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FlowHunt\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createChangePlanPortal();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->createChangePlanPortal: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**mixed**

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createCheckout()`

```php
createCheckout($checkout_create_request): string
```

Create Checkout

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = FlowHunt\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FlowHunt\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure Bearer authorization: HTTPBearer
$config = FlowHunt\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FlowHunt\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$checkout_create_request = new \FlowHunt\Model\CheckoutCreateRequest(); // \FlowHunt\Model\CheckoutCreateRequest

try {
    $result = $apiInstance->createCheckout($checkout_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->createCheckout: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **checkout_create_request** | [**\FlowHunt\Model\CheckoutCreateRequest**](../Model/CheckoutCreateRequest.md)|  | |

### Return type

**string**

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createUpdateInfoPortal()`

```php
createUpdateInfoPortal(): string
```

Create Update Info Portal

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = FlowHunt\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FlowHunt\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure Bearer authorization: HTTPBearer
$config = FlowHunt\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FlowHunt\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createUpdateInfoPortal();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->createUpdateInfoPortal: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**string**

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPricingPlans()`

```php
getPricingPlans(): \FlowHunt\Model\PlanResponse
```

Get Pricing Plans

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FlowHunt\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getPricingPlans();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->getPricingPlans: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\FlowHunt\Model\PlanResponse**](../Model/PlanResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUserPlan()`

```php
getUserPlan($workspace_id): \FlowHunt\Model\UserPlanResponse
```

Get User Plan

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FlowHunt\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->getUserPlan($workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->getUserPlan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |

### Return type

[**\FlowHunt\Model\UserPlanResponse**](../Model/UserPlanResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `stripeWebhook()`

```php
stripeWebhook(): \FlowHunt\Model\Completed
```

Stripe Webhook

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FlowHunt\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->stripeWebhook();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->stripeWebhook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\FlowHunt\Model\Completed**](../Model/Completed.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
