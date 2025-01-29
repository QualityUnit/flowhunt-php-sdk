# FlowHunt\FineTuningsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createImageFt()**](FineTuningsApi.md#createImageFt) | **POST** /v2/fine_tunings/images/ | Create Image Ft |
| [**deleteImageFt()**](FineTuningsApi.md#deleteImageFt) | **DELETE** /v2/fine_tunings/images/{ft_id} | Delete Image Ft |
| [**handleReplicateWebhook()**](FineTuningsApi.md#handleReplicateWebhook) | **POST** /v2/fine_tunings/webhooks/replicate | Handle Replicate Webhook |
| [**searchImageFts()**](FineTuningsApi.md#searchImageFts) | **POST** /v2/fine_tunings/images/search | Search Image Fts |
| [**trainImageFt()**](FineTuningsApi.md#trainImageFt) | **POST** /v2/fine_tunings/images/{ft_id}/train | Train Image Ft |
| [**updateImageFt()**](FineTuningsApi.md#updateImageFt) | **PUT** /v2/fine_tunings/images/{ft_id} | Update Image Ft |
| [**uploadImageFt()**](FineTuningsApi.md#uploadImageFt) | **POST** /v2/fine_tunings/images/{ft_id}/upload | Upload Image Ft |


## `createImageFt()`

```php
createImageFt($workspace_id, $image_ft_create_request): \FlowHunt\Model\ImageFTResponse
```

Create Image Ft

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


$apiInstance = new FlowHunt\Api\FineTuningsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$image_ft_create_request = new \FlowHunt\Model\ImageFTCreateRequest(); // \FlowHunt\Model\ImageFTCreateRequest

try {
    $result = $apiInstance->createImageFt($workspace_id, $image_ft_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FineTuningsApi->createImageFt: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **image_ft_create_request** | [**\FlowHunt\Model\ImageFTCreateRequest**](../Model/ImageFTCreateRequest.md)|  | |

### Return type

[**\FlowHunt\Model\ImageFTResponse**](../Model/ImageFTResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteImageFt()`

```php
deleteImageFt($ft_id, $workspace_id): \FlowHunt\Model\Completed
```

Delete Image Ft

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


$apiInstance = new FlowHunt\Api\FineTuningsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ft_id = 'ft_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->deleteImageFt($ft_id, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FineTuningsApi->deleteImageFt: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ft_id** | **string**|  | |
| **workspace_id** | **string**|  | |

### Return type

[**\FlowHunt\Model\Completed**](../Model/Completed.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `handleReplicateWebhook()`

```php
handleReplicateWebhook($workspace_id, $ft_id): \FlowHunt\Model\Completed
```

Handle Replicate Webhook

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FlowHunt\Api\FineTuningsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$workspace_id = 'workspace_id_example'; // string
$ft_id = 'ft_id_example'; // string

try {
    $result = $apiInstance->handleReplicateWebhook($workspace_id, $ft_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FineTuningsApi->handleReplicateWebhook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **ft_id** | **string**|  | |

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

## `searchImageFts()`

```php
searchImageFts($workspace_id, $image_ft_search_request): \FlowHunt\Model\ImageFTResponse[]
```

Search Image Fts

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


$apiInstance = new FlowHunt\Api\FineTuningsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$image_ft_search_request = new \FlowHunt\Model\ImageFTSearchRequest(); // \FlowHunt\Model\ImageFTSearchRequest

try {
    $result = $apiInstance->searchImageFts($workspace_id, $image_ft_search_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FineTuningsApi->searchImageFts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **image_ft_search_request** | [**\FlowHunt\Model\ImageFTSearchRequest**](../Model/ImageFTSearchRequest.md)|  | |

### Return type

[**\FlowHunt\Model\ImageFTResponse[]**](../Model/ImageFTResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `trainImageFt()`

```php
trainImageFt($ft_id, $workspace_id, $image_ft_train_request): \FlowHunt\Model\ImageFTResponse
```

Train Image Ft

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


$apiInstance = new FlowHunt\Api\FineTuningsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ft_id = 'ft_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$image_ft_train_request = new \FlowHunt\Model\ImageFTTrainRequest(); // \FlowHunt\Model\ImageFTTrainRequest

try {
    $result = $apiInstance->trainImageFt($ft_id, $workspace_id, $image_ft_train_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FineTuningsApi->trainImageFt: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ft_id** | **string**|  | |
| **workspace_id** | **string**|  | |
| **image_ft_train_request** | [**\FlowHunt\Model\ImageFTTrainRequest**](../Model/ImageFTTrainRequest.md)|  | |

### Return type

[**\FlowHunt\Model\ImageFTResponse**](../Model/ImageFTResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateImageFt()`

```php
updateImageFt($ft_id, $workspace_id, $image_ft_update_request): \FlowHunt\Model\ImageFTResponse
```

Update Image Ft

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


$apiInstance = new FlowHunt\Api\FineTuningsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ft_id = 'ft_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$image_ft_update_request = new \FlowHunt\Model\ImageFTUpdateRequest(); // \FlowHunt\Model\ImageFTUpdateRequest

try {
    $result = $apiInstance->updateImageFt($ft_id, $workspace_id, $image_ft_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FineTuningsApi->updateImageFt: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ft_id** | **string**|  | |
| **workspace_id** | **string**|  | |
| **image_ft_update_request** | [**\FlowHunt\Model\ImageFTUpdateRequest**](../Model/ImageFTUpdateRequest.md)|  | |

### Return type

[**\FlowHunt\Model\ImageFTResponse**](../Model/ImageFTResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `uploadImageFt()`

```php
uploadImageFt($ft_id, $workspace_id, $file): \FlowHunt\Model\ImageFTResponse
```

Upload Image Ft

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


$apiInstance = new FlowHunt\Api\FineTuningsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ft_id = 'ft_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$file = "/path/to/file.txt"; // \SplFileObject

try {
    $result = $apiInstance->uploadImageFt($ft_id, $workspace_id, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FineTuningsApi->uploadImageFt: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ft_id** | **string**|  | |
| **workspace_id** | **string**|  | |
| **file** | **\SplFileObject****\SplFileObject**|  | |

### Return type

[**\FlowHunt\Model\ImageFTResponse**](../Model/ImageFTResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
