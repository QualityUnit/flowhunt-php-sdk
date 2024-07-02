# OpenAPI\Client\ApiKeysApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createApiKey()**](ApiKeysApi.md#createApiKey) | **POST** /v2/api_keys/create | Create Api Key |
| [**deleteApiKey()**](ApiKeysApi.md#deleteApiKey) | **DELETE** /v2/api_keys/{api_key_id} | Delete Api Key |
| [**searchApiKey()**](ApiKeysApi.md#searchApiKey) | **POST** /v2/api_keys/search | Search Api Key |
| [**updateApiKey()**](ApiKeysApi.md#updateApiKey) | **PUT** /v2/api_keys/{api_key_id} | Update Api Key |


## `createApiKey()`

```php
createApiKey($workspace_id, $api_key_create_request): \OpenAPI\Client\Model\ApiKeyResponse
```

Create Api Key

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ApiKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$api_key_create_request = new \OpenAPI\Client\Model\ApiKeyCreateRequest(); // \OpenAPI\Client\Model\ApiKeyCreateRequest

try {
    $result = $apiInstance->createApiKey($workspace_id, $api_key_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiKeysApi->createApiKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **api_key_create_request** | [**\OpenAPI\Client\Model\ApiKeyCreateRequest**](../Model/ApiKeyCreateRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ApiKeyResponse**](../Model/ApiKeyResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteApiKey()`

```php
deleteApiKey($api_key_id, $workspace_id): \OpenAPI\Client\Model\Completed
```

Delete Api Key

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ApiKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$api_key_id = 'api_key_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->deleteApiKey($api_key_id, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiKeysApi->deleteApiKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **api_key_id** | **string**|  | |
| **workspace_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\Completed**](../Model/Completed.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchApiKey()`

```php
searchApiKey($workspace_id, $api_key_search_request): \OpenAPI\Client\Model\ApiKeyResponse[]
```

Search Api Key

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ApiKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$api_key_search_request = new \OpenAPI\Client\Model\ApiKeySearchRequest(); // \OpenAPI\Client\Model\ApiKeySearchRequest

try {
    $result = $apiInstance->searchApiKey($workspace_id, $api_key_search_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiKeysApi->searchApiKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **api_key_search_request** | [**\OpenAPI\Client\Model\ApiKeySearchRequest**](../Model/ApiKeySearchRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ApiKeyResponse[]**](../Model/ApiKeyResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateApiKey()`

```php
updateApiKey($api_key_id, $workspace_id, $api_key_update_request): \OpenAPI\Client\Model\ApiKeyResponse
```

Update Api Key

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ApiKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$api_key_id = 'api_key_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$api_key_update_request = new \OpenAPI\Client\Model\ApiKeyUpdateRequest(); // \OpenAPI\Client\Model\ApiKeyUpdateRequest

try {
    $result = $apiInstance->updateApiKey($api_key_id, $workspace_id, $api_key_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiKeysApi->updateApiKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **api_key_id** | **string**|  | |
| **workspace_id** | **string**|  | |
| **api_key_update_request** | [**\OpenAPI\Client\Model\ApiKeyUpdateRequest**](../Model/ApiKeyUpdateRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ApiKeyResponse**](../Model/ApiKeyResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
