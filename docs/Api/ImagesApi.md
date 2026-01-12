# FlowHunt\ImagesApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**convertImage()**](ImagesApi.md#convertImage) | **POST** /v2/images/convert | Convert Image |
| [**getScreenshot()**](ImagesApi.md#getScreenshot) | **POST** /v2/images/screenshot | Get Screenshot |
| [**optimizeImage()**](ImagesApi.md#optimizeImage) | **POST** /v2/images/optimize | Optimize Image |


## `convertImage()`

```php
convertImage($workspace_id, $image_convert_request): \FlowHunt\Model\TaskResponse
```

Convert Image

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


$apiInstance = new FlowHunt\Api\ImagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$image_convert_request = new \FlowHunt\Model\ImageConvertRequest(); // \FlowHunt\Model\ImageConvertRequest

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
| **image_convert_request** | [**\FlowHunt\Model\ImageConvertRequest**](../Model/ImageConvertRequest.md)|  | |

### Return type

[**\FlowHunt\Model\TaskResponse**](../Model/TaskResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getScreenshot()`

```php
getScreenshot($workspace_id, $screenshot_request): \FlowHunt\Model\ScreenshotResponse
```

Get Screenshot

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


$apiInstance = new FlowHunt\Api\ImagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$screenshot_request = new \FlowHunt\Model\ScreenshotRequest(); // \FlowHunt\Model\ScreenshotRequest

try {
    $result = $apiInstance->getScreenshot($workspace_id, $screenshot_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImagesApi->getScreenshot: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **screenshot_request** | [**\FlowHunt\Model\ScreenshotRequest**](../Model/ScreenshotRequest.md)|  | |

### Return type

[**\FlowHunt\Model\ScreenshotResponse**](../Model/ScreenshotResponse.md)

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
optimizeImage($workspace_id, $image_optimize_request): \FlowHunt\Model\TaskResponse
```

Optimize Image

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


$apiInstance = new FlowHunt\Api\ImagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$image_optimize_request = new \FlowHunt\Model\ImageOptimizeRequest(); // \FlowHunt\Model\ImageOptimizeRequest

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
| **image_optimize_request** | [**\FlowHunt\Model\ImageOptimizeRequest**](../Model/ImageOptimizeRequest.md)|  | |

### Return type

[**\FlowHunt\Model\TaskResponse**](../Model/TaskResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
