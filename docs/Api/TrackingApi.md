# FlowHunt\TrackingApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**searchEvents()**](TrackingApi.md#searchEvents) | **POST** /v2/tracking/events | Search Events |
| [**searchLinks()**](TrackingApi.md#searchLinks) | **POST** /v2/tracking/links | Search Links |
| [**searchSources()**](TrackingApi.md#searchSources) | **POST** /v2/tracking/sources | Search Sources |
| [**trackClick()**](TrackingApi.md#trackClick) | **POST** /v2/tracking/clk | Track Click |
| [**trackEvent()**](TrackingApi.md#trackEvent) | **POST** /v2/tracking/evnt | Track Event |
| [**trackLink()**](TrackingApi.md#trackLink) | **POST** /v2/tracking/lnk | Track Link |


## `searchEvents()`

```php
searchEvents($workspace_id, $tracking_event_search_request): \FlowHunt\Model\TrackingEventsResponse
```

Search Events

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


$apiInstance = new FlowHunt\Api\TrackingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$tracking_event_search_request = new \FlowHunt\Model\TrackingEventSearchRequest(); // \FlowHunt\Model\TrackingEventSearchRequest

try {
    $result = $apiInstance->searchEvents($workspace_id, $tracking_event_search_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackingApi->searchEvents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **tracking_event_search_request** | [**\FlowHunt\Model\TrackingEventSearchRequest**](../Model/TrackingEventSearchRequest.md)|  | |

### Return type

[**\FlowHunt\Model\TrackingEventsResponse**](../Model/TrackingEventsResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchLinks()`

```php
searchLinks($workspace_id, $tracking_link_search_request): \FlowHunt\Model\TrackingLinksResponse
```

Search Links

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


$apiInstance = new FlowHunt\Api\TrackingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$tracking_link_search_request = new \FlowHunt\Model\TrackingLinkSearchRequest(); // \FlowHunt\Model\TrackingLinkSearchRequest

try {
    $result = $apiInstance->searchLinks($workspace_id, $tracking_link_search_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackingApi->searchLinks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **tracking_link_search_request** | [**\FlowHunt\Model\TrackingLinkSearchRequest**](../Model/TrackingLinkSearchRequest.md)|  | |

### Return type

[**\FlowHunt\Model\TrackingLinksResponse**](../Model/TrackingLinksResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchSources()`

```php
searchSources($workspace_id, $tracking_source_search_request): \FlowHunt\Model\TrackingSourcesResponse
```

Search Sources

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


$apiInstance = new FlowHunt\Api\TrackingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$tracking_source_search_request = new \FlowHunt\Model\TrackingSourceSearchRequest(); // \FlowHunt\Model\TrackingSourceSearchRequest

try {
    $result = $apiInstance->searchSources($workspace_id, $tracking_source_search_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackingApi->searchSources: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **tracking_source_search_request** | [**\FlowHunt\Model\TrackingSourceSearchRequest**](../Model/TrackingSourceSearchRequest.md)|  | |

### Return type

[**\FlowHunt\Model\TrackingSourcesResponse**](../Model/TrackingSourcesResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `trackClick()`

```php
trackClick($workspace_id, $tracking_source_create_request): \FlowHunt\Model\Completed
```

Track Click

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FlowHunt\Api\TrackingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$workspace_id = 'workspace_id_example'; // string
$tracking_source_create_request = new \FlowHunt\Model\TrackingSourceCreateRequest(); // \FlowHunt\Model\TrackingSourceCreateRequest

try {
    $result = $apiInstance->trackClick($workspace_id, $tracking_source_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackingApi->trackClick: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **tracking_source_create_request** | [**\FlowHunt\Model\TrackingSourceCreateRequest**](../Model/TrackingSourceCreateRequest.md)|  | |

### Return type

[**\FlowHunt\Model\Completed**](../Model/Completed.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `trackEvent()`

```php
trackEvent($workspace_id, $tracking_event_create_requests): \FlowHunt\Model\Completed
```

Track Event

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FlowHunt\Api\TrackingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$workspace_id = 'workspace_id_example'; // string
$tracking_event_create_requests = new \FlowHunt\Model\TrackingEventCreateRequests(); // \FlowHunt\Model\TrackingEventCreateRequests

try {
    $result = $apiInstance->trackEvent($workspace_id, $tracking_event_create_requests);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackingApi->trackEvent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **tracking_event_create_requests** | [**\FlowHunt\Model\TrackingEventCreateRequests**](../Model/TrackingEventCreateRequests.md)|  | |

### Return type

[**\FlowHunt\Model\Completed**](../Model/Completed.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `trackLink()`

```php
trackLink($workspace_id, $tracking_links_create_request): \FlowHunt\Model\Completed
```

Track Link

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FlowHunt\Api\TrackingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$workspace_id = 'workspace_id_example'; // string
$tracking_links_create_request = new \FlowHunt\Model\TrackingLinksCreateRequest(); // \FlowHunt\Model\TrackingLinksCreateRequest

try {
    $result = $apiInstance->trackLink($workspace_id, $tracking_links_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackingApi->trackLink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **tracking_links_create_request** | [**\FlowHunt\Model\TrackingLinksCreateRequest**](../Model/TrackingLinksCreateRequest.md)|  | |

### Return type

[**\FlowHunt\Model\Completed**](../Model/Completed.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
