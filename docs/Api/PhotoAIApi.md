# FlowHunt\PhotoAIApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**explore()**](PhotoAIApi.md#explore) | **GET** /v2/photo_ai/explore | Explore |
| [**getEffects()**](PhotoAIApi.md#getEffects) | **GET** /v2/photo_ai/effects | Get Effects |
| [**getStyles()**](PhotoAIApi.md#getStyles) | **GET** /v2/photo_ai/styles | Get Styles |
| [**getTemplates()**](PhotoAIApi.md#getTemplates) | **GET** /v2/photo_ai/templates | Get Templates |


## `explore()`

```php
explore(): \FlowHunt\Model\CommunityImageGenerationsResponse[]
```

Explore

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FlowHunt\Api\PhotoAIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->explore();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhotoAIApi->explore: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\FlowHunt\Model\CommunityImageGenerationsResponse[]**](../Model/CommunityImageGenerationsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEffects()`

```php
getEffects(): \FlowHunt\Model\PhotoAIEffectResponse[]
```

Get Effects

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FlowHunt\Api\PhotoAIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getEffects();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhotoAIApi->getEffects: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\FlowHunt\Model\PhotoAIEffectResponse[]**](../Model/PhotoAIEffectResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStyles()`

```php
getStyles(): \FlowHunt\Model\PhotoAIStyleResponse[]
```

Get Styles

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FlowHunt\Api\PhotoAIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getStyles();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhotoAIApi->getStyles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\FlowHunt\Model\PhotoAIStyleResponse[]**](../Model/PhotoAIStyleResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTemplates()`

```php
getTemplates(): \FlowHunt\Model\PhotoAITemplateResponse[]
```

Get Templates

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FlowHunt\Api\PhotoAIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getTemplates();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhotoAIApi->getTemplates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\FlowHunt\Model\PhotoAITemplateResponse[]**](../Model/PhotoAITemplateResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
