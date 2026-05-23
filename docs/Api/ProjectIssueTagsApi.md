# FlowHunt\ProjectIssueTagsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createProjectIssueTag()**](ProjectIssueTagsApi.md#createProjectIssueTag) | **POST** /v2/projects/{project_id}/tags/create | Create Project Issue Tag |
| [**deleteProjectIssueTag()**](ProjectIssueTagsApi.md#deleteProjectIssueTag) | **DELETE** /v2/projects/{project_id}/tags/{tag_id} | Delete Project Issue Tag |
| [**getProjectIssueTag()**](ProjectIssueTagsApi.md#getProjectIssueTag) | **GET** /v2/projects/{project_id}/tags/{tag_id} | Get Project Issue Tag |
| [**searchProjectIssueTags()**](ProjectIssueTagsApi.md#searchProjectIssueTags) | **POST** /v2/projects/{project_id}/tags/ | Search Project Issue Tags |
| [**updateProjectIssueTag()**](ProjectIssueTagsApi.md#updateProjectIssueTag) | **PUT** /v2/projects/{project_id}/tags/{tag_id} | Update Project Issue Tag |


## `createProjectIssueTag()`

```php
createProjectIssueTag($project_id, $workspace_id, $project_issue_tag_create): \FlowHunt\Model\ProjectIssueTagResponse
```

Create Project Issue Tag

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


$apiInstance = new FlowHunt\Api\ProjectIssueTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$project_issue_tag_create = new \FlowHunt\Model\ProjectIssueTagCreate(); // \FlowHunt\Model\ProjectIssueTagCreate

try {
    $result = $apiInstance->createProjectIssueTag($project_id, $workspace_id, $project_issue_tag_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectIssueTagsApi->createProjectIssueTag: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **string**|  | |
| **workspace_id** | **string**|  | |
| **project_issue_tag_create** | [**\FlowHunt\Model\ProjectIssueTagCreate**](../Model/ProjectIssueTagCreate.md)|  | |

### Return type

[**\FlowHunt\Model\ProjectIssueTagResponse**](../Model/ProjectIssueTagResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteProjectIssueTag()`

```php
deleteProjectIssueTag($project_id, $tag_id, $workspace_id): \FlowHunt\Model\Completed
```

Delete Project Issue Tag

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


$apiInstance = new FlowHunt\Api\ProjectIssueTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string
$tag_id = 'tag_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->deleteProjectIssueTag($project_id, $tag_id, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectIssueTagsApi->deleteProjectIssueTag: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **string**|  | |
| **tag_id** | **string**|  | |
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

## `getProjectIssueTag()`

```php
getProjectIssueTag($project_id, $tag_id, $workspace_id): \FlowHunt\Model\ProjectIssueTagResponse
```

Get Project Issue Tag

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


$apiInstance = new FlowHunt\Api\ProjectIssueTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string
$tag_id = 'tag_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->getProjectIssueTag($project_id, $tag_id, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectIssueTagsApi->getProjectIssueTag: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **string**|  | |
| **tag_id** | **string**|  | |
| **workspace_id** | **string**|  | |

### Return type

[**\FlowHunt\Model\ProjectIssueTagResponse**](../Model/ProjectIssueTagResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchProjectIssueTags()`

```php
searchProjectIssueTags($project_id, $workspace_id, $project_issue_tag_search_request): \FlowHunt\Model\ProjectIssueTagResponse[]
```

Search Project Issue Tags

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


$apiInstance = new FlowHunt\Api\ProjectIssueTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$project_issue_tag_search_request = new \FlowHunt\Model\ProjectIssueTagSearchRequest(); // \FlowHunt\Model\ProjectIssueTagSearchRequest

try {
    $result = $apiInstance->searchProjectIssueTags($project_id, $workspace_id, $project_issue_tag_search_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectIssueTagsApi->searchProjectIssueTags: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **string**|  | |
| **workspace_id** | **string**|  | |
| **project_issue_tag_search_request** | [**\FlowHunt\Model\ProjectIssueTagSearchRequest**](../Model/ProjectIssueTagSearchRequest.md)|  | |

### Return type

[**\FlowHunt\Model\ProjectIssueTagResponse[]**](../Model/ProjectIssueTagResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateProjectIssueTag()`

```php
updateProjectIssueTag($project_id, $tag_id, $workspace_id, $project_issue_tag_update): \FlowHunt\Model\ProjectIssueTagResponse
```

Update Project Issue Tag

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


$apiInstance = new FlowHunt\Api\ProjectIssueTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string
$tag_id = 'tag_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$project_issue_tag_update = new \FlowHunt\Model\ProjectIssueTagUpdate(); // \FlowHunt\Model\ProjectIssueTagUpdate

try {
    $result = $apiInstance->updateProjectIssueTag($project_id, $tag_id, $workspace_id, $project_issue_tag_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectIssueTagsApi->updateProjectIssueTag: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **string**|  | |
| **tag_id** | **string**|  | |
| **workspace_id** | **string**|  | |
| **project_issue_tag_update** | [**\FlowHunt\Model\ProjectIssueTagUpdate**](../Model/ProjectIssueTagUpdate.md)|  | |

### Return type

[**\FlowHunt\Model\ProjectIssueTagResponse**](../Model/ProjectIssueTagResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
