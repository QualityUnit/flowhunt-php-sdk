# OpenAPI\Client\SERPApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**serpSearch()**](SERPApi.md#serpSearch) | **POST** /v2/serp/serp/search | Serp Search |
| [**serpVolumes()**](SERPApi.md#serpVolumes) | **POST** /v2/serp/serp/volumes | Serp Volumes |
| [**serpVolumesPingback()**](SERPApi.md#serpVolumesPingback) | **GET** /v2/serp/serp/volumes/pingback/{id}/{tag} | Serp Volumes Pingback |


## `serpSearch()`

```php
serpSearch($workspace_id, $serp_search_request): \OpenAPI\Client\Model\SerperResponse
```

Serp Search

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


$apiInstance = new OpenAPI\Client\Api\SERPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$serp_search_request = new \OpenAPI\Client\Model\SerpSearchRequest(); // \OpenAPI\Client\Model\SerpSearchRequest

try {
    $result = $apiInstance->serpSearch($workspace_id, $serp_search_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SERPApi->serpSearch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **serp_search_request** | [**\OpenAPI\Client\Model\SerpSearchRequest**](../Model/SerpSearchRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\SerperResponse**](../Model/SerperResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `serpVolumes()`

```php
serpVolumes($workspace_id, $serp_volume_request): \OpenAPI\Client\Model\SerpVolumeScheduleResponse
```

Serp Volumes

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


$apiInstance = new OpenAPI\Client\Api\SERPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$serp_volume_request = new \OpenAPI\Client\Model\SerpVolumeRequest(); // \OpenAPI\Client\Model\SerpVolumeRequest

try {
    $result = $apiInstance->serpVolumes($workspace_id, $serp_volume_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SERPApi->serpVolumes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **serp_volume_request** | [**\OpenAPI\Client\Model\SerpVolumeRequest**](../Model/SerpVolumeRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\SerpVolumeScheduleResponse**](../Model/SerpVolumeScheduleResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `serpVolumesPingback()`

```php
serpVolumesPingback($id, $tag): \OpenAPI\Client\Model\SerpVolumeResponse
```

Serp Volumes Pingback

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SERPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = NULL; // mixed
$tag = new \OpenAPI\Client\Model\Tag(); // Tag

try {
    $result = $apiInstance->serpVolumesPingback($id, $tag);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SERPApi->serpVolumesPingback: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**mixed**](../Model/.md)|  | |
| **tag** | [**Tag**](../Model/.md)|  | |

### Return type

[**\OpenAPI\Client\Model\SerpVolumeResponse**](../Model/SerpVolumeResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
