# FlowHunt\SERPApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**searchClusterGroup()**](SERPApi.md#searchClusterGroup) | **POST** /v2/serp/cluster/search | Search Cluster Group |
| [**searchClusterQuery()**](SERPApi.md#searchClusterQuery) | **POST** /v2/serp/cluster/{group_id}/search | Search Cluster Query |
| [**serpClusterAddGroup()**](SERPApi.md#serpClusterAddGroup) | **POST** /v2/serp/cluster/create | Serp Cluster Add Group |
| [**serpClusterAddQueries()**](SERPApi.md#serpClusterAddQueries) | **POST** /v2/serp/cluster/add_queries | Serp Cluster Add Queries |
| [**serpClusterDeleteAll()**](SERPApi.md#serpClusterDeleteAll) | **DELETE** /v2/serp/cluster/delete_all | Serp Cluster Delete All |
| [**serpClusterDeleteGroup()**](SERPApi.md#serpClusterDeleteGroup) | **DELETE** /v2/serp/cluster/{group_id} | Serp Cluster Delete Group |
| [**serpClusterDeleteQuery()**](SERPApi.md#serpClusterDeleteQuery) | **DELETE** /v2/serp/cluster/{group_id}/{query_id} | Serp Cluster Delete Query |
| [**serpClusterGetBulkQueryIntersections()**](SERPApi.md#serpClusterGetBulkQueryIntersections) | **POST** /v2/serp/cluster/bulk_query_intersections | Serp Cluster Get Bulk Query Intersections |
| [**serpClusterGetQueryIntersections()**](SERPApi.md#serpClusterGetQueryIntersections) | **POST** /v2/serp/cluster/query_intersections | Serp Cluster Get Query Intersections |
| [**serpSearch()**](SERPApi.md#serpSearch) | **POST** /v2/serp/serp/search | Serp Search |
| [**serpVolumes()**](SERPApi.md#serpVolumes) | **POST** /v2/serp/serp/volumes | Serp Volumes |
| [**serpVolumesPingback()**](SERPApi.md#serpVolumesPingback) | **GET** /v2/serp/serp/volumes/pingback/{id}/{tag} | Serp Volumes Pingback |


## `searchClusterGroup()`

```php
searchClusterGroup($workspace_id, $serp_cluster_group_search_request): \FlowHunt\Model\SerpClusterGroupResponse[]
```

Search Cluster Group

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


$apiInstance = new FlowHunt\Api\SERPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$serp_cluster_group_search_request = new \FlowHunt\Model\SerpClusterGroupSearchRequest(); // \FlowHunt\Model\SerpClusterGroupSearchRequest

try {
    $result = $apiInstance->searchClusterGroup($workspace_id, $serp_cluster_group_search_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SERPApi->searchClusterGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **serp_cluster_group_search_request** | [**\FlowHunt\Model\SerpClusterGroupSearchRequest**](../Model/SerpClusterGroupSearchRequest.md)|  | |

### Return type

[**\FlowHunt\Model\SerpClusterGroupResponse[]**](../Model/SerpClusterGroupResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchClusterQuery()`

```php
searchClusterQuery($group_id, $workspace_id, $serp_cluster_group_search_request): \FlowHunt\Model\SerpClusterQueryResponse[]
```

Search Cluster Query

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


$apiInstance = new FlowHunt\Api\SERPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 'group_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$serp_cluster_group_search_request = new \FlowHunt\Model\SerpClusterGroupSearchRequest(); // \FlowHunt\Model\SerpClusterGroupSearchRequest

try {
    $result = $apiInstance->searchClusterQuery($group_id, $workspace_id, $serp_cluster_group_search_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SERPApi->searchClusterQuery: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **string**|  | |
| **workspace_id** | **string**|  | |
| **serp_cluster_group_search_request** | [**\FlowHunt\Model\SerpClusterGroupSearchRequest**](../Model/SerpClusterGroupSearchRequest.md)|  | |

### Return type

[**\FlowHunt\Model\SerpClusterQueryResponse[]**](../Model/SerpClusterQueryResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `serpClusterAddGroup()`

```php
serpClusterAddGroup($workspace_id, $serp_cluster_add_group_request): \FlowHunt\Model\SerpClusterGroupResponse
```

Serp Cluster Add Group

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


$apiInstance = new FlowHunt\Api\SERPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$serp_cluster_add_group_request = new \FlowHunt\Model\SerpClusterAddGroupRequest(); // \FlowHunt\Model\SerpClusterAddGroupRequest

try {
    $result = $apiInstance->serpClusterAddGroup($workspace_id, $serp_cluster_add_group_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SERPApi->serpClusterAddGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **serp_cluster_add_group_request** | [**\FlowHunt\Model\SerpClusterAddGroupRequest**](../Model/SerpClusterAddGroupRequest.md)|  | |

### Return type

[**\FlowHunt\Model\SerpClusterGroupResponse**](../Model/SerpClusterGroupResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `serpClusterAddQueries()`

```php
serpClusterAddQueries($workspace_id, $serp_cluster_add_query_requests): \FlowHunt\Model\TaskResponse[]
```

Serp Cluster Add Queries

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


$apiInstance = new FlowHunt\Api\SERPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$serp_cluster_add_query_requests = new \FlowHunt\Model\SerpClusterAddQueryRequests(); // \FlowHunt\Model\SerpClusterAddQueryRequests

try {
    $result = $apiInstance->serpClusterAddQueries($workspace_id, $serp_cluster_add_query_requests);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SERPApi->serpClusterAddQueries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **serp_cluster_add_query_requests** | [**\FlowHunt\Model\SerpClusterAddQueryRequests**](../Model/SerpClusterAddQueryRequests.md)|  | |

### Return type

[**\FlowHunt\Model\TaskResponse[]**](../Model/TaskResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `serpClusterDeleteAll()`

```php
serpClusterDeleteAll($workspace_id): \FlowHunt\Model\Completed
```

Serp Cluster Delete All

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


$apiInstance = new FlowHunt\Api\SERPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->serpClusterDeleteAll($workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SERPApi->serpClusterDeleteAll: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
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

## `serpClusterDeleteGroup()`

```php
serpClusterDeleteGroup($group_id, $workspace_id): \FlowHunt\Model\Completed
```

Serp Cluster Delete Group

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


$apiInstance = new FlowHunt\Api\SERPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 'group_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->serpClusterDeleteGroup($group_id, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SERPApi->serpClusterDeleteGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **string**|  | |
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

## `serpClusterDeleteQuery()`

```php
serpClusterDeleteQuery($group_id, $query_id, $workspace_id): \FlowHunt\Model\Completed
```

Serp Cluster Delete Query

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


$apiInstance = new FlowHunt\Api\SERPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 'group_id_example'; // string
$query_id = 'query_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->serpClusterDeleteQuery($group_id, $query_id, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SERPApi->serpClusterDeleteQuery: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **string**|  | |
| **query_id** | **string**|  | |
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

## `serpClusterGetBulkQueryIntersections()`

```php
serpClusterGetBulkQueryIntersections($workspace_id, $serp_cluster_query_intersections_request): \FlowHunt\Model\TaskResponse[]
```

Serp Cluster Get Bulk Query Intersections

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


$apiInstance = new FlowHunt\Api\SERPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$serp_cluster_query_intersections_request = array(new \FlowHunt\Model\SerpClusterQueryIntersectionsRequest()); // \FlowHunt\Model\SerpClusterQueryIntersectionsRequest[]

try {
    $result = $apiInstance->serpClusterGetBulkQueryIntersections($workspace_id, $serp_cluster_query_intersections_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SERPApi->serpClusterGetBulkQueryIntersections: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **serp_cluster_query_intersections_request** | [**\FlowHunt\Model\SerpClusterQueryIntersectionsRequest[]**](../Model/SerpClusterQueryIntersectionsRequest.md)|  | |

### Return type

[**\FlowHunt\Model\TaskResponse[]**](../Model/TaskResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `serpClusterGetQueryIntersections()`

```php
serpClusterGetQueryIntersections($workspace_id, $serp_cluster_query_intersections_request): \FlowHunt\Model\TaskResponse
```

Serp Cluster Get Query Intersections

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


$apiInstance = new FlowHunt\Api\SERPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$serp_cluster_query_intersections_request = new \FlowHunt\Model\SerpClusterQueryIntersectionsRequest(); // \FlowHunt\Model\SerpClusterQueryIntersectionsRequest

try {
    $result = $apiInstance->serpClusterGetQueryIntersections($workspace_id, $serp_cluster_query_intersections_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SERPApi->serpClusterGetQueryIntersections: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **serp_cluster_query_intersections_request** | [**\FlowHunt\Model\SerpClusterQueryIntersectionsRequest**](../Model/SerpClusterQueryIntersectionsRequest.md)|  | |

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

## `serpSearch()`

```php
serpSearch($workspace_id, $serp_search_requests): \FlowHunt\Model\TaskResponse[]
```

Serp Search

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


$apiInstance = new FlowHunt\Api\SERPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$serp_search_requests = new \FlowHunt\Model\SerpSearchRequests(); // \FlowHunt\Model\SerpSearchRequests

try {
    $result = $apiInstance->serpSearch($workspace_id, $serp_search_requests);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SERPApi->serpSearch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **serp_search_requests** | [**\FlowHunt\Model\SerpSearchRequests**](../Model/SerpSearchRequests.md)|  | |

### Return type

[**\FlowHunt\Model\TaskResponse[]**](../Model/TaskResponse.md)

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
serpVolumes($workspace_id, $serp_volume_request): \FlowHunt\Model\TaskResponse
```

Serp Volumes

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


$apiInstance = new FlowHunt\Api\SERPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$serp_volume_request = new \FlowHunt\Model\SerpVolumeRequest(); // \FlowHunt\Model\SerpVolumeRequest

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
| **serp_volume_request** | [**\FlowHunt\Model\SerpVolumeRequest**](../Model/SerpVolumeRequest.md)|  | |

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

## `serpVolumesPingback()`

```php
serpVolumesPingback($id, $tag): \FlowHunt\Model\TaskResponse
```

Serp Volumes Pingback

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FlowHunt\Api\SERPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$tag = 'tag_example'; // string

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
| **id** | **string**|  | |
| **tag** | **string**|  | |

### Return type

[**\FlowHunt\Model\TaskResponse**](../Model/TaskResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
