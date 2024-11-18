# FlowHunt\SchedulesApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createSchedules()**](SchedulesApi.md#createSchedules) | **POST** /v2/schedules/create | Create Schedules |
| [**deleteSchedule()**](SchedulesApi.md#deleteSchedule) | **DELETE** /v2/schedules/{schedule_id} | Delete Schedule |
| [**getSchedule()**](SchedulesApi.md#getSchedule) | **GET** /v2/schedules/{schedule_id} | Get Schedule |
| [**getScheduleUrlDetails()**](SchedulesApi.md#getScheduleUrlDetails) | **GET** /v2/schedules/{schedule_id}/urls/{domain_id}/{url_id} | Get Schedule Url Details |
| [**getSchedules()**](SchedulesApi.md#getSchedules) | **POST** /v2/schedules/ | Get Schedules |
| [**runSchedule()**](SchedulesApi.md#runSchedule) | **POST** /v2/schedules/run/{schedule_id} | Run Schedule |
| [**searchScheduleUrls()**](SchedulesApi.md#searchScheduleUrls) | **POST** /v2/schedules/urls/ | Search Schedule Urls |
| [**updateSchedule()**](SchedulesApi.md#updateSchedule) | **PUT** /v2/schedules/{schedule_id} | Update Schedule |


## `createSchedules()`

```php
createSchedules($workspace_id, $schedule_create_request): \FlowHunt\Model\ScheduleResponse[]
```

Create Schedules

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


$apiInstance = new FlowHunt\Api\SchedulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$schedule_create_request = array(new \FlowHunt\Model\ScheduleCreateRequest()); // \FlowHunt\Model\ScheduleCreateRequest[]

try {
    $result = $apiInstance->createSchedules($workspace_id, $schedule_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchedulesApi->createSchedules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **schedule_create_request** | [**\FlowHunt\Model\ScheduleCreateRequest[]**](../Model/ScheduleCreateRequest.md)|  | |

### Return type

[**\FlowHunt\Model\ScheduleResponse[]**](../Model/ScheduleResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteSchedule()`

```php
deleteSchedule($schedule_id, $workspace_id): \FlowHunt\Model\Completed
```

Delete Schedule

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


$apiInstance = new FlowHunt\Api\SchedulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$schedule_id = 'schedule_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->deleteSchedule($schedule_id, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchedulesApi->deleteSchedule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **schedule_id** | **string**|  | |
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

## `getSchedule()`

```php
getSchedule($schedule_id, $workspace_id): \FlowHunt\Model\ScheduleResponse
```

Get Schedule

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


$apiInstance = new FlowHunt\Api\SchedulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$schedule_id = 'schedule_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->getSchedule($schedule_id, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchedulesApi->getSchedule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **schedule_id** | **string**|  | |
| **workspace_id** | **string**|  | |

### Return type

[**\FlowHunt\Model\ScheduleResponse**](../Model/ScheduleResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getScheduleUrlDetails()`

```php
getScheduleUrlDetails($schedule_id, $url_id, $domain_id, $workspace_id): \FlowHunt\Model\ScheduleUrlDetailResponse
```

Get Schedule Url Details

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


$apiInstance = new FlowHunt\Api\SchedulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$schedule_id = 'schedule_id_example'; // string
$url_id = 'url_id_example'; // string
$domain_id = 'domain_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->getScheduleUrlDetails($schedule_id, $url_id, $domain_id, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchedulesApi->getScheduleUrlDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **schedule_id** | **string**|  | |
| **url_id** | **string**|  | |
| **domain_id** | **string**|  | |
| **workspace_id** | **string**|  | |

### Return type

[**\FlowHunt\Model\ScheduleUrlDetailResponse**](../Model/ScheduleUrlDetailResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSchedules()`

```php
getSchedules($workspace_id, $schedule_search_request): \FlowHunt\Model\ScheduleResponse[]
```

Get Schedules

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


$apiInstance = new FlowHunt\Api\SchedulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$schedule_search_request = new \FlowHunt\Model\ScheduleSearchRequest(); // \FlowHunt\Model\ScheduleSearchRequest

try {
    $result = $apiInstance->getSchedules($workspace_id, $schedule_search_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchedulesApi->getSchedules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **schedule_search_request** | [**\FlowHunt\Model\ScheduleSearchRequest**](../Model/ScheduleSearchRequest.md)|  | |

### Return type

[**\FlowHunt\Model\ScheduleResponse[]**](../Model/ScheduleResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `runSchedule()`

```php
runSchedule($schedule_id, $workspace_id): \FlowHunt\Model\Completed
```

Run Schedule

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


$apiInstance = new FlowHunt\Api\SchedulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$schedule_id = 'schedule_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->runSchedule($schedule_id, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchedulesApi->runSchedule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **schedule_id** | **string**|  | |
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

## `searchScheduleUrls()`

```php
searchScheduleUrls($workspace_id, $schedule_url_search_request): \FlowHunt\Model\ScheduleUrlResponse[]
```

Search Schedule Urls

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


$apiInstance = new FlowHunt\Api\SchedulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$schedule_url_search_request = new \FlowHunt\Model\ScheduleUrlSearchRequest(); // \FlowHunt\Model\ScheduleUrlSearchRequest

try {
    $result = $apiInstance->searchScheduleUrls($workspace_id, $schedule_url_search_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchedulesApi->searchScheduleUrls: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **schedule_url_search_request** | [**\FlowHunt\Model\ScheduleUrlSearchRequest**](../Model/ScheduleUrlSearchRequest.md)|  | |

### Return type

[**\FlowHunt\Model\ScheduleUrlResponse[]**](../Model/ScheduleUrlResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateSchedule()`

```php
updateSchedule($schedule_id, $workspace_id, $schedule_update_request): \FlowHunt\Model\ScheduleResponse
```

Update Schedule

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


$apiInstance = new FlowHunt\Api\SchedulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$schedule_id = 'schedule_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$schedule_update_request = new \FlowHunt\Model\ScheduleUpdateRequest(); // \FlowHunt\Model\ScheduleUpdateRequest

try {
    $result = $apiInstance->updateSchedule($schedule_id, $workspace_id, $schedule_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchedulesApi->updateSchedule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **schedule_id** | **string**|  | |
| **workspace_id** | **string**|  | |
| **schedule_update_request** | [**\FlowHunt\Model\ScheduleUpdateRequest**](../Model/ScheduleUpdateRequest.md)|  | |

### Return type

[**\FlowHunt\Model\ScheduleResponse**](../Model/ScheduleResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
