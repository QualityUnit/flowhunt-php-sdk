# OpenAPI\Client\SecretsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createSecret()**](SecretsApi.md#createSecret) | **POST** /v2/secrets/create | Create Secret |
| [**deleteSecret()**](SecretsApi.md#deleteSecret) | **DELETE** /v2/secrets/{secret_id} | Delete Secret |
| [**getSecret()**](SecretsApi.md#getSecret) | **GET** /v2/secrets/{secret_id} | Get Secret |
| [**searchSecret()**](SecretsApi.md#searchSecret) | **POST** /v2/secrets/search | Search Secret |
| [**updateSecret()**](SecretsApi.md#updateSecret) | **PUT** /v2/secrets/{secret_id} | Update Secret |


## `createSecret()`

```php
createSecret($workspace_id, $secret_create_request): \OpenAPI\Client\Model\SecretResponse
```

Create Secret

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SecretsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$secret_create_request = new \OpenAPI\Client\Model\SecretCreateRequest(); // \OpenAPI\Client\Model\SecretCreateRequest

try {
    $result = $apiInstance->createSecret($workspace_id, $secret_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecretsApi->createSecret: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **secret_create_request** | [**\OpenAPI\Client\Model\SecretCreateRequest**](../Model/SecretCreateRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\SecretResponse**](../Model/SecretResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteSecret()`

```php
deleteSecret($secret_id, $workspace_id): \OpenAPI\Client\Model\Completed
```

Delete Secret

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SecretsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$secret_id = 'secret_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->deleteSecret($secret_id, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecretsApi->deleteSecret: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **secret_id** | **string**|  | |
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

## `getSecret()`

```php
getSecret($secret_id, $workspace_id): \OpenAPI\Client\Model\SecretResponse
```

Get Secret

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SecretsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$secret_id = 'secret_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->getSecret($secret_id, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecretsApi->getSecret: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **secret_id** | **string**|  | |
| **workspace_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\SecretResponse**](../Model/SecretResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchSecret()`

```php
searchSecret($workspace_id, $secret_search_request): \OpenAPI\Client\Model\SecretResponse[]
```

Search Secret

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SecretsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$secret_search_request = new \OpenAPI\Client\Model\SecretSearchRequest(); // \OpenAPI\Client\Model\SecretSearchRequest

try {
    $result = $apiInstance->searchSecret($workspace_id, $secret_search_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecretsApi->searchSecret: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **secret_search_request** | [**\OpenAPI\Client\Model\SecretSearchRequest**](../Model/SecretSearchRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\SecretResponse[]**](../Model/SecretResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateSecret()`

```php
updateSecret($secret_id, $workspace_id, $secret_update_request): \OpenAPI\Client\Model\SecretResponse
```

Update Secret

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SecretsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$secret_id = 'secret_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$secret_update_request = new \OpenAPI\Client\Model\SecretUpdateRequest(); // \OpenAPI\Client\Model\SecretUpdateRequest

try {
    $result = $apiInstance->updateSecret($secret_id, $workspace_id, $secret_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecretsApi->updateSecret: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **secret_id** | **string**|  | |
| **workspace_id** | **string**|  | |
| **secret_update_request** | [**\OpenAPI\Client\Model\SecretUpdateRequest**](../Model/SecretUpdateRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\SecretResponse**](../Model/SecretResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
