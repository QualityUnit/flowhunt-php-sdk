# FlowHunt\SERPApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**searchClusterQuery()**](SERPApi.md#searchClusterQuery) | **POST** /v2/serp/clusters/keywords | Search Cluster Query |
| [**serpClusterAddQueries()**](SERPApi.md#serpClusterAddQueries) | **POST** /v2/serp/clusters/{customer_id}/{campaign_id}/{group_id}/add_keywords | Serp Cluster Add Queries |
| [**serpClusterDeleteCampaign()**](SERPApi.md#serpClusterDeleteCampaign) | **DELETE** /v2/serp/clusters/{customer_id}/{campaign_id} | Serp Cluster Delete Campaign |
| [**serpClusterDeleteCustomer()**](SERPApi.md#serpClusterDeleteCustomer) | **DELETE** /v2/serp/clusters/{customer_id} | Serp Cluster Delete Customer |
| [**serpClusterDeleteGroup()**](SERPApi.md#serpClusterDeleteGroup) | **DELETE** /v2/serp/clusters/{customer_id}/{campaign_id}/{group_id} | Serp Cluster Delete Group |
| [**serpClusterDeleteGroupQueries()**](SERPApi.md#serpClusterDeleteGroupQueries) | **DELETE** /v2/serp/clusters/{customer_id}/{campaign_id}/{group_id}/delete_queries | Serp Cluster Delete Group Queries |
| [**serpClusterGetBulkQueryIntersections()**](SERPApi.md#serpClusterGetBulkQueryIntersections) | **POST** /v2/serp/clusters/intersections | Serp Cluster Get Bulk Query Intersections |
| [**serpClusterGetMatchingGroupsToQuery()**](SERPApi.md#serpClusterGetMatchingGroupsToQuery) | **POST** /v2/serp/clusters/recommended_groups | Serp Cluster Get Matching Groups To Query |
| [**serpClusterGetRelatedKeywordsToQuery()**](SERPApi.md#serpClusterGetRelatedKeywordsToQuery) | **POST** /v2/serp/clusters/related_keywords | Serp Cluster Get Related Keywords To Query |
| [**serpSearch()**](SERPApi.md#serpSearch) | **POST** /v2/serp/serp/search | Serp Search |
| [**serpVolumes()**](SERPApi.md#serpVolumes) | **POST** /v2/serp/serp/volumes | Serp Volumes |
| [**serpVolumesPingback()**](SERPApi.md#serpVolumesPingback) | **GET** /v2/serp/serp/volumes/pingback/{id}/{tag} | Serp Volumes Pingback |


## `searchClusterQuery()`

```php
searchClusterQuery($workspace_id, $serp_cluster_group_search_request): \FlowHunt\Model\SerpClusterKeywordResponse[]
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
$workspace_id = 'workspace_id_example'; // string
$serp_cluster_group_search_request = new \FlowHunt\Model\SerpClusterGroupSearchRequest(); // \FlowHunt\Model\SerpClusterGroupSearchRequest

try {
    $result = $apiInstance->searchClusterQuery($workspace_id, $serp_cluster_group_search_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SERPApi->searchClusterQuery: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **serp_cluster_group_search_request** | [**\FlowHunt\Model\SerpClusterGroupSearchRequest**](../Model/SerpClusterGroupSearchRequest.md)|  | |

### Return type

[**\FlowHunt\Model\SerpClusterKeywordResponse[]**](../Model/SerpClusterKeywordResponse.md)

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
serpClusterAddQueries($customer_id, $campaign_id, $group_id, $workspace_id, $serp_cluster_add_query_requests): \FlowHunt\Model\Completed
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
$customer_id = 56; // int
$campaign_id = 56; // int
$group_id = 56; // int
$workspace_id = 'workspace_id_example'; // string
$serp_cluster_add_query_requests = new \FlowHunt\Model\SerpClusterAddQueryRequests(); // \FlowHunt\Model\SerpClusterAddQueryRequests

try {
    $result = $apiInstance->serpClusterAddQueries($customer_id, $campaign_id, $group_id, $workspace_id, $serp_cluster_add_query_requests);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SERPApi->serpClusterAddQueries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_id** | **int**|  | |
| **campaign_id** | **int**|  | |
| **group_id** | **int**|  | |
| **workspace_id** | **string**|  | |
| **serp_cluster_add_query_requests** | [**\FlowHunt\Model\SerpClusterAddQueryRequests**](../Model/SerpClusterAddQueryRequests.md)|  | |

### Return type

[**\FlowHunt\Model\Completed**](../Model/Completed.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `serpClusterDeleteCampaign()`

```php
serpClusterDeleteCampaign($customer_id, $campaign_id, $workspace_id): \FlowHunt\Model\Completed
```

Serp Cluster Delete Campaign

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
$customer_id = 56; // int
$campaign_id = 56; // int
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->serpClusterDeleteCampaign($customer_id, $campaign_id, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SERPApi->serpClusterDeleteCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_id** | **int**|  | |
| **campaign_id** | **int**|  | |
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

## `serpClusterDeleteCustomer()`

```php
serpClusterDeleteCustomer($customer_id, $workspace_id): \FlowHunt\Model\Completed
```

Serp Cluster Delete Customer

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
$customer_id = 56; // int
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->serpClusterDeleteCustomer($customer_id, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SERPApi->serpClusterDeleteCustomer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_id** | **int**|  | |
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
serpClusterDeleteGroup($customer_id, $campaign_id, $group_id, $workspace_id): \FlowHunt\Model\Completed
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
$customer_id = 56; // int
$campaign_id = 56; // int
$group_id = 56; // int
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->serpClusterDeleteGroup($customer_id, $campaign_id, $group_id, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SERPApi->serpClusterDeleteGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_id** | **int**|  | |
| **campaign_id** | **int**|  | |
| **group_id** | **int**|  | |
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

## `serpClusterDeleteGroupQueries()`

```php
serpClusterDeleteGroupQueries($customer_id, $campaign_id, $group_id, $workspace_id, $serp_query_request): \FlowHunt\Model\Completed
```

Serp Cluster Delete Group Queries

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
$customer_id = 56; // int
$campaign_id = 56; // int
$group_id = 56; // int
$workspace_id = 'workspace_id_example'; // string
$serp_query_request = new \FlowHunt\Model\SerpQueryRequest(); // \FlowHunt\Model\SerpQueryRequest

try {
    $result = $apiInstance->serpClusterDeleteGroupQueries($customer_id, $campaign_id, $group_id, $workspace_id, $serp_query_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SERPApi->serpClusterDeleteGroupQueries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_id** | **int**|  | |
| **campaign_id** | **int**|  | |
| **group_id** | **int**|  | |
| **workspace_id** | **string**|  | |
| **serp_query_request** | [**\FlowHunt\Model\SerpQueryRequest**](../Model/SerpQueryRequest.md)|  | |

### Return type

[**\FlowHunt\Model\Completed**](../Model/Completed.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `serpClusterGetBulkQueryIntersections()`

```php
serpClusterGetBulkQueryIntersections($workspace_id, $serp_cluster_group_intersections_request): \FlowHunt\Model\SerpKeywordRelation[]
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
$serp_cluster_group_intersections_request = new \FlowHunt\Model\SerpClusterGroupIntersectionsRequest(); // \FlowHunt\Model\SerpClusterGroupIntersectionsRequest

try {
    $result = $apiInstance->serpClusterGetBulkQueryIntersections($workspace_id, $serp_cluster_group_intersections_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SERPApi->serpClusterGetBulkQueryIntersections: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **serp_cluster_group_intersections_request** | [**\FlowHunt\Model\SerpClusterGroupIntersectionsRequest**](../Model/SerpClusterGroupIntersectionsRequest.md)|  | |

### Return type

[**\FlowHunt\Model\SerpKeywordRelation[]**](../Model/SerpKeywordRelation.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `serpClusterGetMatchingGroupsToQuery()`

```php
serpClusterGetMatchingGroupsToQuery($workspace_id, $serp_cluster_best_groups_request): \FlowHunt\Model\SerpGroupIntersection[]
```

Serp Cluster Get Matching Groups To Query

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
$serp_cluster_best_groups_request = new \FlowHunt\Model\SerpClusterBestGroupsRequest(); // \FlowHunt\Model\SerpClusterBestGroupsRequest

try {
    $result = $apiInstance->serpClusterGetMatchingGroupsToQuery($workspace_id, $serp_cluster_best_groups_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SERPApi->serpClusterGetMatchingGroupsToQuery: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **serp_cluster_best_groups_request** | [**\FlowHunt\Model\SerpClusterBestGroupsRequest**](../Model/SerpClusterBestGroupsRequest.md)|  | |

### Return type

[**\FlowHunt\Model\SerpGroupIntersection[]**](../Model/SerpGroupIntersection.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `serpClusterGetRelatedKeywordsToQuery()`

```php
serpClusterGetRelatedKeywordsToQuery($workspace_id, $serp_cluster_keyword_intersections_request): \FlowHunt\Model\SerpKeywordRelation[]
```

Serp Cluster Get Related Keywords To Query

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
$serp_cluster_keyword_intersections_request = new \FlowHunt\Model\SerpClusterKeywordIntersectionsRequest(); // \FlowHunt\Model\SerpClusterKeywordIntersectionsRequest

try {
    $result = $apiInstance->serpClusterGetRelatedKeywordsToQuery($workspace_id, $serp_cluster_keyword_intersections_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SERPApi->serpClusterGetRelatedKeywordsToQuery: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **serp_cluster_keyword_intersections_request** | [**\FlowHunt\Model\SerpClusterKeywordIntersectionsRequest**](../Model/SerpClusterKeywordIntersectionsRequest.md)|  | |

### Return type

[**\FlowHunt\Model\SerpKeywordRelation[]**](../Model/SerpKeywordRelation.md)

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
