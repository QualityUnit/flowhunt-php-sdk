# FlowHunt\CreditsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getCreditBalance()**](CreditsApi.md#getCreditBalance) | **GET** /v2/credits/balance | Get Credit Balance |
| [**getWorkspaceCreditBalance()**](CreditsApi.md#getWorkspaceCreditBalance) | **GET** /v2/credits/workspace_balance | Get Workspace Credit Balance |
| [**searchCreditTransactions()**](CreditsApi.md#searchCreditTransactions) | **POST** /v2/credits/search | Search Credit Transactions |
| [**searchDailyCreditTransactions()**](CreditsApi.md#searchDailyCreditTransactions) | **POST** /v2/credits/search_daily | Search Daily Credit Transactions |


## `getCreditBalance()`

```php
getCreditBalance(): \FlowHunt\Model\CreditBalanceResponse
```

Get Credit Balance

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


$apiInstance = new FlowHunt\Api\CreditsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getCreditBalance();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreditsApi->getCreditBalance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\FlowHunt\Model\CreditBalanceResponse**](../Model/CreditBalanceResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWorkspaceCreditBalance()`

```php
getWorkspaceCreditBalance($workspace_id): \FlowHunt\Model\CreditBalanceResponse
```

Get Workspace Credit Balance

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


$apiInstance = new FlowHunt\Api\CreditsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->getWorkspaceCreditBalance($workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreditsApi->getWorkspaceCreditBalance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |

### Return type

[**\FlowHunt\Model\CreditBalanceResponse**](../Model/CreditBalanceResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchCreditTransactions()`

```php
searchCreditTransactions($workspace_id, $credit_transaction_search_request): \FlowHunt\Model\CreditTransactionResponse[]
```

Search Credit Transactions

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


$apiInstance = new FlowHunt\Api\CreditsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$credit_transaction_search_request = new \FlowHunt\Model\CreditTransactionSearchRequest(); // \FlowHunt\Model\CreditTransactionSearchRequest

try {
    $result = $apiInstance->searchCreditTransactions($workspace_id, $credit_transaction_search_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreditsApi->searchCreditTransactions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **credit_transaction_search_request** | [**\FlowHunt\Model\CreditTransactionSearchRequest**](../Model/CreditTransactionSearchRequest.md)|  | |

### Return type

[**\FlowHunt\Model\CreditTransactionResponse[]**](../Model/CreditTransactionResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchDailyCreditTransactions()`

```php
searchDailyCreditTransactions($workspace_id, $credit_daily_transaction_search_request): \FlowHunt\Model\CreditDailyTransactionResponse[]
```

Search Daily Credit Transactions

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


$apiInstance = new FlowHunt\Api\CreditsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$credit_daily_transaction_search_request = new \FlowHunt\Model\CreditDailyTransactionSearchRequest(); // \FlowHunt\Model\CreditDailyTransactionSearchRequest

try {
    $result = $apiInstance->searchDailyCreditTransactions($workspace_id, $credit_daily_transaction_search_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreditsApi->searchDailyCreditTransactions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **credit_daily_transaction_search_request** | [**\FlowHunt\Model\CreditDailyTransactionSearchRequest**](../Model/CreditDailyTransactionSearchRequest.md)|  | |

### Return type

[**\FlowHunt\Model\CreditDailyTransactionResponse[]**](../Model/CreditDailyTransactionResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
