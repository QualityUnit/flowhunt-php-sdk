# FlowHunt\ProjectIssuesApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addUserComment()**](ProjectIssuesApi.md#addUserComment) | **POST** /v2/projects/{project_id}/issues/{issue_id}/comments | Add User Comment |
| [**cancelAllIssues()**](ProjectIssuesApi.md#cancelAllIssues) | **POST** /v2/projects/{project_id}/issues/cancel-all | Cancel All Issues |
| [**cancelIssue()**](ProjectIssuesApi.md#cancelIssue) | **POST** /v2/projects/{project_id}/issues/{issue_id}/cancel | Cancel Issue |
| [**createProjectIssue()**](ProjectIssuesApi.md#createProjectIssue) | **POST** /v2/projects/{project_id}/issues/create | Create Project Issue |
| [**deleteIssue()**](ProjectIssuesApi.md#deleteIssue) | **DELETE** /v2/projects/{project_id}/issues/{issue_id} | Delete Issue |
| [**getProjectIssue()**](ProjectIssuesApi.md#getProjectIssue) | **GET** /v2/projects/{project_id}/issues/{issue_id} | Get Project Issue |
| [**searchProjectIssues()**](ProjectIssuesApi.md#searchProjectIssues) | **POST** /v2/projects/{project_id}/issues/ | Search Project Issues |
| [**updateProjectIssue()**](ProjectIssuesApi.md#updateProjectIssue) | **PUT** /v2/projects/{project_id}/issues/{issue_id} | Update Project Issue |


## `addUserComment()`

```php
addUserComment($project_id, $issue_id, $workspace_id, $project_issue_comment_create): \FlowHunt\Model\ProjectIssueResponse
```

Add User Comment

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


$apiInstance = new FlowHunt\Api\ProjectIssuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string
$issue_id = 'issue_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$project_issue_comment_create = new \FlowHunt\Model\ProjectIssueCommentCreate(); // \FlowHunt\Model\ProjectIssueCommentCreate

try {
    $result = $apiInstance->addUserComment($project_id, $issue_id, $workspace_id, $project_issue_comment_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectIssuesApi->addUserComment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **string**|  | |
| **issue_id** | **string**|  | |
| **workspace_id** | **string**|  | |
| **project_issue_comment_create** | [**\FlowHunt\Model\ProjectIssueCommentCreate**](../Model/ProjectIssueCommentCreate.md)|  | |

### Return type

[**\FlowHunt\Model\ProjectIssueResponse**](../Model/ProjectIssueResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cancelAllIssues()`

```php
cancelAllIssues($project_id, $workspace_id): \FlowHunt\Model\Completed
```

Cancel All Issues

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


$apiInstance = new FlowHunt\Api\ProjectIssuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->cancelAllIssues($project_id, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectIssuesApi->cancelAllIssues: ', $e->getMessage(), PHP_EOL;
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

## `cancelIssue()`

```php
cancelIssue($project_id, $issue_id, $workspace_id): \FlowHunt\Model\ProjectIssueResponse
```

Cancel Issue

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


$apiInstance = new FlowHunt\Api\ProjectIssuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string
$issue_id = 'issue_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->cancelIssue($project_id, $issue_id, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectIssuesApi->cancelIssue: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **string**|  | |
| **issue_id** | **string**|  | |
| **workspace_id** | **string**|  | |

### Return type

[**\FlowHunt\Model\ProjectIssueResponse**](../Model/ProjectIssueResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createProjectIssue()`

```php
createProjectIssue($project_id, $workspace_id, $project_issue_create): \FlowHunt\Model\ProjectIssueResponse
```

Create Project Issue

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


$apiInstance = new FlowHunt\Api\ProjectIssuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$project_issue_create = new \FlowHunt\Model\ProjectIssueCreate(); // \FlowHunt\Model\ProjectIssueCreate

try {
    $result = $apiInstance->createProjectIssue($project_id, $workspace_id, $project_issue_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectIssuesApi->createProjectIssue: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **string**|  | |
| **workspace_id** | **string**|  | |
| **project_issue_create** | [**\FlowHunt\Model\ProjectIssueCreate**](../Model/ProjectIssueCreate.md)|  | |

### Return type

[**\FlowHunt\Model\ProjectIssueResponse**](../Model/ProjectIssueResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteIssue()`

```php
deleteIssue($project_id, $issue_id, $workspace_id): \FlowHunt\Model\Completed
```

Delete Issue

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


$apiInstance = new FlowHunt\Api\ProjectIssuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string
$issue_id = 'issue_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->deleteIssue($project_id, $issue_id, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectIssuesApi->deleteIssue: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **string**|  | |
| **issue_id** | **string**|  | |
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

## `getProjectIssue()`

```php
getProjectIssue($project_id, $issue_id, $workspace_id): \FlowHunt\Model\ProjectIssueResponse
```

Get Project Issue

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


$apiInstance = new FlowHunt\Api\ProjectIssuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string
$issue_id = 'issue_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->getProjectIssue($project_id, $issue_id, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectIssuesApi->getProjectIssue: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **string**|  | |
| **issue_id** | **string**|  | |
| **workspace_id** | **string**|  | |

### Return type

[**\FlowHunt\Model\ProjectIssueResponse**](../Model/ProjectIssueResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchProjectIssues()`

```php
searchProjectIssues($project_id, $workspace_id, $project_issue_search_request): \FlowHunt\Model\ProjectIssueSearchResponse
```

Search Project Issues

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


$apiInstance = new FlowHunt\Api\ProjectIssuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$project_issue_search_request = new \FlowHunt\Model\ProjectIssueSearchRequest(); // \FlowHunt\Model\ProjectIssueSearchRequest

try {
    $result = $apiInstance->searchProjectIssues($project_id, $workspace_id, $project_issue_search_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectIssuesApi->searchProjectIssues: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **string**|  | |
| **workspace_id** | **string**|  | |
| **project_issue_search_request** | [**\FlowHunt\Model\ProjectIssueSearchRequest**](../Model/ProjectIssueSearchRequest.md)|  | |

### Return type

[**\FlowHunt\Model\ProjectIssueSearchResponse**](../Model/ProjectIssueSearchResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateProjectIssue()`

```php
updateProjectIssue($project_id, $issue_id, $workspace_id, $project_issue_update): \FlowHunt\Model\ProjectIssueResponse
```

Update Project Issue

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


$apiInstance = new FlowHunt\Api\ProjectIssuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string
$issue_id = 'issue_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$project_issue_update = new \FlowHunt\Model\ProjectIssueUpdate(); // \FlowHunt\Model\ProjectIssueUpdate

try {
    $result = $apiInstance->updateProjectIssue($project_id, $issue_id, $workspace_id, $project_issue_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectIssuesApi->updateProjectIssue: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **string**|  | |
| **issue_id** | **string**|  | |
| **workspace_id** | **string**|  | |
| **project_issue_update** | [**\FlowHunt\Model\ProjectIssueUpdate**](../Model/ProjectIssueUpdate.md)|  | |

### Return type

[**\FlowHunt\Model\ProjectIssueResponse**](../Model/ProjectIssueResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
