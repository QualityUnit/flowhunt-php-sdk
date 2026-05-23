# FlowHunt\ProjectInboxApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**archive()**](ProjectInboxApi.md#archive) | **POST** /v2/projects/{project_id}/inbox/{entry_id}/archive | Archive |
| [**deleteEntry()**](ProjectInboxApi.md#deleteEntry) | **DELETE** /v2/projects/{project_id}/inbox/{entry_id} | Delete Entry |
| [**getEntry()**](ProjectInboxApi.md#getEntry) | **GET** /v2/projects/{project_id}/inbox/{entry_id} | Get Entry |
| [**markAllRead()**](ProjectInboxApi.md#markAllRead) | **POST** /v2/projects/{project_id}/inbox/mark-all-read | Mark All Read |
| [**markRead()**](ProjectInboxApi.md#markRead) | **POST** /v2/projects/{project_id}/inbox/{entry_id}/read | Mark Read |
| [**searchProjectInbox()**](ProjectInboxApi.md#searchProjectInbox) | **POST** /v2/projects/{project_id}/inbox/ | Search Project Inbox |
| [**unreadCount()**](ProjectInboxApi.md#unreadCount) | **GET** /v2/projects/{project_id}/inbox/unread-count | Unread Count |


## `archive()`

```php
archive($project_id, $entry_id, $workspace_id): \FlowHunt\Model\ProjectInboxEntryResponse
```

Archive

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


$apiInstance = new FlowHunt\Api\ProjectInboxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string
$entry_id = 'entry_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->archive($project_id, $entry_id, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectInboxApi->archive: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **string**|  | |
| **entry_id** | **string**|  | |
| **workspace_id** | **string**|  | |

### Return type

[**\FlowHunt\Model\ProjectInboxEntryResponse**](../Model/ProjectInboxEntryResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteEntry()`

```php
deleteEntry($project_id, $entry_id, $workspace_id): \FlowHunt\Model\Completed
```

Delete Entry

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


$apiInstance = new FlowHunt\Api\ProjectInboxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string
$entry_id = 'entry_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->deleteEntry($project_id, $entry_id, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectInboxApi->deleteEntry: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **string**|  | |
| **entry_id** | **string**|  | |
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

## `getEntry()`

```php
getEntry($project_id, $entry_id, $workspace_id): \FlowHunt\Model\ProjectInboxEntryResponse
```

Get Entry

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


$apiInstance = new FlowHunt\Api\ProjectInboxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string
$entry_id = 'entry_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->getEntry($project_id, $entry_id, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectInboxApi->getEntry: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **string**|  | |
| **entry_id** | **string**|  | |
| **workspace_id** | **string**|  | |

### Return type

[**\FlowHunt\Model\ProjectInboxEntryResponse**](../Model/ProjectInboxEntryResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `markAllRead()`

```php
markAllRead($project_id, $workspace_id): \FlowHunt\Model\Completed
```

Mark All Read

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


$apiInstance = new FlowHunt\Api\ProjectInboxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->markAllRead($project_id, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectInboxApi->markAllRead: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **string**|  | |
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

## `markRead()`

```php
markRead($project_id, $entry_id, $workspace_id): \FlowHunt\Model\ProjectInboxEntryResponse
```

Mark Read

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


$apiInstance = new FlowHunt\Api\ProjectInboxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string
$entry_id = 'entry_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->markRead($project_id, $entry_id, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectInboxApi->markRead: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **string**|  | |
| **entry_id** | **string**|  | |
| **workspace_id** | **string**|  | |

### Return type

[**\FlowHunt\Model\ProjectInboxEntryResponse**](../Model/ProjectInboxEntryResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchProjectInbox()`

```php
searchProjectInbox($project_id, $workspace_id, $project_inbox_search_request): \FlowHunt\Model\ProjectInboxSearchResponse
```

Search Project Inbox

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


$apiInstance = new FlowHunt\Api\ProjectInboxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$project_inbox_search_request = new \FlowHunt\Model\ProjectInboxSearchRequest(); // \FlowHunt\Model\ProjectInboxSearchRequest

try {
    $result = $apiInstance->searchProjectInbox($project_id, $workspace_id, $project_inbox_search_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectInboxApi->searchProjectInbox: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **string**|  | |
| **workspace_id** | **string**|  | |
| **project_inbox_search_request** | [**\FlowHunt\Model\ProjectInboxSearchRequest**](../Model/ProjectInboxSearchRequest.md)|  | |

### Return type

[**\FlowHunt\Model\ProjectInboxSearchResponse**](../Model/ProjectInboxSearchResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `unreadCount()`

```php
unreadCount($project_id, $workspace_id): \FlowHunt\Model\ProjectInboxUnreadCountResponse
```

Unread Count

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


$apiInstance = new FlowHunt\Api\ProjectInboxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->unreadCount($project_id, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectInboxApi->unreadCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **string**|  | |
| **workspace_id** | **string**|  | |

### Return type

[**\FlowHunt\Model\ProjectInboxUnreadCountResponse**](../Model/ProjectInboxUnreadCountResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
