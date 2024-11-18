# FlowHunt\SecretsApi

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
createSecret($workspace_id, $secret_create_request): \FlowHunt\Model\SecretResponse
```

Create Secret

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = FlowHunt\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FlowHunt\Api\SecretsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$secret_create_request = new \FlowHunt\Model\SecretCreateRequest(); // \FlowHunt\Model\SecretCreateRequest

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
| **secret_create_request** | [**\FlowHunt\Model\SecretCreateRequest**](../Model/SecretCreateRequest.md)|  | |

### Return type

[**\FlowHunt\Model\SecretResponse**](../Model/SecretResponse.md)

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
deleteSecret($secret_id, $workspace_id): \FlowHunt\Model\Completed
```

Delete Secret

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = FlowHunt\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FlowHunt\Api\SecretsApi(
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

[**\FlowHunt\Model\Completed**](../Model/Completed.md)

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
getSecret($secret_id, $workspace_id): \FlowHunt\Model\SecretResponse
```

Get Secret

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = FlowHunt\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FlowHunt\Api\SecretsApi(
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

[**\FlowHunt\Model\SecretResponse**](../Model/SecretResponse.md)

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
searchSecret($workspace_id, $secret_search_request): \FlowHunt\Model\SecretResponse[]
```

Search Secret

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = FlowHunt\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FlowHunt\Api\SecretsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$secret_search_request = new \FlowHunt\Model\SecretSearchRequest(); // \FlowHunt\Model\SecretSearchRequest

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
| **secret_search_request** | [**\FlowHunt\Model\SecretSearchRequest**](../Model/SecretSearchRequest.md)|  | |

### Return type

[**\FlowHunt\Model\SecretResponse[]**](../Model/SecretResponse.md)

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
updateSecret($secret_id, $workspace_id, $secret_update_request): \FlowHunt\Model\SecretResponse
```

Update Secret

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = FlowHunt\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FlowHunt\Api\SecretsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$secret_id = 'secret_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$secret_update_request = new \FlowHunt\Model\SecretUpdateRequest(); // \FlowHunt\Model\SecretUpdateRequest

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
| **secret_update_request** | [**\FlowHunt\Model\SecretUpdateRequest**](../Model/SecretUpdateRequest.md)|  | |

### Return type

[**\FlowHunt\Model\SecretResponse**](../Model/SecretResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
