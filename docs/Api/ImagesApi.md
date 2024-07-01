# OpenAPI\Client\ImagesApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**convertImage()**](ImagesApi.md#convertImage) | **POST** /v2/images/convert | Convert Image |
| [**optimizeImage()**](ImagesApi.md#optimizeImage) | **POST** /v2/images/optimize | Optimize Image |


## `convertImage()`

```php
convertImage($workspace_id, $image_convert_request): \OpenAPI\Client\Model\DownloadFileResponse
```

Convert Image

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


$apiInstance = new OpenAPI\Client\Api\ImagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$image_convert_request = new \OpenAPI\Client\Model\ImageConvertRequest(); // \OpenAPI\Client\Model\ImageConvertRequest

try {
    $result = $apiInstance->convertImage($workspace_id, $image_convert_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImagesApi->convertImage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **image_convert_request** | [**\OpenAPI\Client\Model\ImageConvertRequest**](../Model/ImageConvertRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\DownloadFileResponse**](../Model/DownloadFileResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `optimizeImage()`

```php
optimizeImage($workspace_id, $image_optimize_request): \OpenAPI\Client\Model\DownloadFileResponse
```

Optimize Image

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


$apiInstance = new OpenAPI\Client\Api\ImagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$image_optimize_request = new \OpenAPI\Client\Model\ImageOptimizeRequest(); // \OpenAPI\Client\Model\ImageOptimizeRequest

try {
    $result = $apiInstance->optimizeImage($workspace_id, $image_optimize_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImagesApi->optimizeImage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **image_optimize_request** | [**\OpenAPI\Client\Model\ImageOptimizeRequest**](../Model/ImageOptimizeRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\DownloadFileResponse**](../Model/DownloadFileResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)