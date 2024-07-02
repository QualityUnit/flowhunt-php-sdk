# OpenAPI\Client\CreditsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getCreditBalance()**](CreditsApi.md#getCreditBalance) | **GET** /v2/credits/balance | Get Credit Balance |
| [**searchCreditTransactions()**](CreditsApi.md#searchCreditTransactions) | **POST** /v2/credits/search | Search Credit Transactions |
| [**searchDailyCreditTransactions()**](CreditsApi.md#searchDailyCreditTransactions) | **POST** /v2/credits/search_daily | Search Daily Credit Transactions |


## `getCreditBalance()`

```php
getCreditBalance(): \OpenAPI\Client\Model\CreditBalanceResponse
```

Get Credit Balance

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CreditsApi(
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

[**\OpenAPI\Client\Model\CreditBalanceResponse**](../Model/CreditBalanceResponse.md)

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
searchCreditTransactions($workspace_id, $credit_transaction_search_request): \OpenAPI\Client\Model\CreditTransactionResponse[]
```

Search Credit Transactions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CreditsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$credit_transaction_search_request = new \OpenAPI\Client\Model\CreditTransactionSearchRequest(); // \OpenAPI\Client\Model\CreditTransactionSearchRequest

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
| **credit_transaction_search_request** | [**\OpenAPI\Client\Model\CreditTransactionSearchRequest**](../Model/CreditTransactionSearchRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\CreditTransactionResponse[]**](../Model/CreditTransactionResponse.md)

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
searchDailyCreditTransactions($workspace_id, $credit_daily_transaction_search_request): \OpenAPI\Client\Model\CreditDailyTransactionResponse[]
```

Search Daily Credit Transactions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CreditsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$credit_daily_transaction_search_request = new \OpenAPI\Client\Model\CreditDailyTransactionSearchRequest(); // \OpenAPI\Client\Model\CreditDailyTransactionSearchRequest

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
| **credit_daily_transaction_search_request** | [**\OpenAPI\Client\Model\CreditDailyTransactionSearchRequest**](../Model/CreditDailyTransactionSearchRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\CreditDailyTransactionResponse[]**](../Model/CreditDailyTransactionResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
