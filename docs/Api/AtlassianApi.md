# FlowHunt\AtlassianApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteJiraWebhook()**](AtlassianApi.md#deleteJiraWebhook) | **DELETE** /v2/integrations/atlassian/jira/webhooks/{webhook_id} | Delete Jira Webhook |
| [**getConfluencePages()**](AtlassianApi.md#getConfluencePages) | **GET** /v2/integrations/atlassian/confluence/spaces/{space_key}/pages | Get Confluence Pages |
| [**getConfluenceSpaces()**](AtlassianApi.md#getConfluenceSpaces) | **GET** /v2/integrations/atlassian/confluence/spaces | Get Confluence Spaces |
| [**getJiraAssignees()**](AtlassianApi.md#getJiraAssignees) | **GET** /v2/integrations/atlassian/jira/projects/{project_key}/assignees | Get Jira Assignees |
| [**getJiraIssues()**](AtlassianApi.md#getJiraIssues) | **GET** /v2/integrations/atlassian/jira/projects/{project_key}/issues | Get Jira Issues |
| [**getJiraProjects()**](AtlassianApi.md#getJiraProjects) | **GET** /v2/integrations/atlassian/jira/projects | Get Jira Projects |
| [**getJiraTransitions()**](AtlassianApi.md#getJiraTransitions) | **GET** /v2/integrations/atlassian/jira/issues/{issue_key}/transitions | Get Jira Transitions |
| [**listJiraWebhooks()**](AtlassianApi.md#listJiraWebhooks) | **GET** /v2/integrations/atlassian/jira/webhooks | List Jira Webhooks |


## `deleteJiraWebhook()`

```php
deleteJiraWebhook($webhook_id, $workspace_id)
```

Delete Jira Webhook

Delete a registered Jira webhook by ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = FlowHunt\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FlowHunt\Api\AtlassianApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_id = 56; // int
$workspace_id = 'workspace_id_example'; // string

try {
    $apiInstance->deleteJiraWebhook($webhook_id, $workspace_id);
} catch (Exception $e) {
    echo 'Exception when calling AtlassianApi->deleteJiraWebhook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_id** | **int**|  | |
| **workspace_id** | **string**|  | |

### Return type

void (empty response body)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getConfluencePages()`

```php
getConfluencePages($space_key, $workspace_id): \FlowHunt\Model\ConfluencePagesResponse
```

Get Confluence Pages

Get all pages in a Confluence space.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = FlowHunt\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FlowHunt\Api\AtlassianApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$space_key = 'space_key_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->getConfluencePages($space_key, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AtlassianApi->getConfluencePages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **space_key** | **string**|  | |
| **workspace_id** | **string**|  | |

### Return type

[**\FlowHunt\Model\ConfluencePagesResponse**](../Model/ConfluencePagesResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getConfluenceSpaces()`

```php
getConfluenceSpaces($workspace_id): \FlowHunt\Model\ConfluenceSpacesResponse
```

Get Confluence Spaces

Get all Confluence spaces accessible through the workspace's Atlassian integration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = FlowHunt\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FlowHunt\Api\AtlassianApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->getConfluenceSpaces($workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AtlassianApi->getConfluenceSpaces: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |

### Return type

[**\FlowHunt\Model\ConfluenceSpacesResponse**](../Model/ConfluenceSpacesResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getJiraAssignees()`

```php
getJiraAssignees($project_key, $workspace_id): \FlowHunt\Model\JiraAssigneesResponse
```

Get Jira Assignees

Get assignable users for a Jira project.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = FlowHunt\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FlowHunt\Api\AtlassianApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_key = 'project_key_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->getJiraAssignees($project_key, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AtlassianApi->getJiraAssignees: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_key** | **string**|  | |
| **workspace_id** | **string**|  | |

### Return type

[**\FlowHunt\Model\JiraAssigneesResponse**](../Model/JiraAssigneesResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getJiraIssues()`

```php
getJiraIssues($project_key, $workspace_id): \FlowHunt\Model\JiraIssuesResponse
```

Get Jira Issues

Get issues for a Jira project.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = FlowHunt\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FlowHunt\Api\AtlassianApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_key = 'project_key_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->getJiraIssues($project_key, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AtlassianApi->getJiraIssues: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_key** | **string**|  | |
| **workspace_id** | **string**|  | |

### Return type

[**\FlowHunt\Model\JiraIssuesResponse**](../Model/JiraIssuesResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getJiraProjects()`

```php
getJiraProjects($workspace_id): \FlowHunt\Model\JiraProjectsResponse
```

Get Jira Projects

Get all Jira projects accessible through the workspace's Atlassian integration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = FlowHunt\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FlowHunt\Api\AtlassianApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->getJiraProjects($workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AtlassianApi->getJiraProjects: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |

### Return type

[**\FlowHunt\Model\JiraProjectsResponse**](../Model/JiraProjectsResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getJiraTransitions()`

```php
getJiraTransitions($issue_key, $workspace_id): \FlowHunt\Model\JiraTransitionsResponse
```

Get Jira Transitions

Get available transitions for a Jira issue.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = FlowHunt\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FlowHunt\Api\AtlassianApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$issue_key = 'issue_key_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->getJiraTransitions($issue_key, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AtlassianApi->getJiraTransitions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **issue_key** | **string**|  | |
| **workspace_id** | **string**|  | |

### Return type

[**\FlowHunt\Model\JiraTransitionsResponse**](../Model/JiraTransitionsResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listJiraWebhooks()`

```php
listJiraWebhooks($workspace_id): \FlowHunt\Model\JiraWebhooksResponse
```

List Jira Webhooks

List all registered Jira webhooks for the workspace's Atlassian integration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = FlowHunt\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FlowHunt\Api\AtlassianApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->listJiraWebhooks($workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AtlassianApi->listJiraWebhooks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |

### Return type

[**\FlowHunt\Model\JiraWebhooksResponse**](../Model/JiraWebhooksResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
