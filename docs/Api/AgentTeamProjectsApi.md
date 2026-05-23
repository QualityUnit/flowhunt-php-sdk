# FlowHunt\AgentTeamProjectsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**cancelChat()**](AgentTeamProjectsApi.md#cancelChat) | **POST** /v2/projects/{project_id}/chat/{session_id}/cancel | Cancel Chat |
| [**createProject()**](AgentTeamProjectsApi.md#createProject) | **POST** /v2/projects/create | Create Project |
| [**deleteAgentTeamProject()**](AgentTeamProjectsApi.md#deleteAgentTeamProject) | **DELETE** /v2/projects/{project_id} | Delete Agent Team Project |
| [**generateSuggestions()**](AgentTeamProjectsApi.md#generateSuggestions) | **POST** /v2/projects/{project_id}/suggestions/generate | Generate Suggestions |
| [**generateTitle()**](AgentTeamProjectsApi.md#generateTitle) | **POST** /v2/projects/{project_id}/chat/{session_id}/generate-title | Generate Title |
| [**getProject()**](AgentTeamProjectsApi.md#getProject) | **GET** /v2/projects/{project_id} | Get Project |
| [**getSuggestions()**](AgentTeamProjectsApi.md#getSuggestions) | **GET** /v2/projects/{project_id}/suggestions | Get Suggestions |
| [**hitlRespond()**](AgentTeamProjectsApi.md#hitlRespond) | **POST** /v2/projects/{project_id}/chat/{session_id}/hitl-respond | Hitl Respond |
| [**pollChat()**](AgentTeamProjectsApi.md#pollChat) | **POST** /v2/projects/{project_id}/chat/{session_id}/events/{from_timestamp} | Poll Chat |
| [**pollGenerateAgentConfig()**](AgentTeamProjectsApi.md#pollGenerateAgentConfig) | **POST** /v2/projects/generate-agent-config/{session_id}/events/{from_timestamp} | Poll Generate Agent Config |
| [**searchProjects()**](AgentTeamProjectsApi.md#searchProjects) | **POST** /v2/projects/ | Search Projects |
| [**startChat()**](AgentTeamProjectsApi.md#startChat) | **POST** /v2/projects/{project_id}/chat | Start Chat |
| [**startGenerateAgentConfig()**](AgentTeamProjectsApi.md#startGenerateAgentConfig) | **POST** /v2/projects/generate-agent-config | Start Generate Agent Config |
| [**testChannelConnection()**](AgentTeamProjectsApi.md#testChannelConnection) | **POST** /v2/projects/channels/test | Test Channel Connection |
| [**updateProject()**](AgentTeamProjectsApi.md#updateProject) | **PUT** /v2/projects/{project_id} | Update Project |


## `cancelChat()`

```php
cancelChat($project_id, $session_id, $workspace_id): \FlowHunt\Model\Completed
```

Cancel Chat

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


$apiInstance = new FlowHunt\Api\AgentTeamProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string
$session_id = 'session_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->cancelChat($project_id, $session_id, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentTeamProjectsApi->cancelChat: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **string**|  | |
| **session_id** | **string**|  | |
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

## `createProject()`

```php
createProject($workspace_id, $agent_team_project_create): \FlowHunt\Model\AgentTeamProjectResponse
```

Create Project

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


$apiInstance = new FlowHunt\Api\AgentTeamProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$agent_team_project_create = new \FlowHunt\Model\AgentTeamProjectCreate(); // \FlowHunt\Model\AgentTeamProjectCreate

try {
    $result = $apiInstance->createProject($workspace_id, $agent_team_project_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentTeamProjectsApi->createProject: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **agent_team_project_create** | [**\FlowHunt\Model\AgentTeamProjectCreate**](../Model/AgentTeamProjectCreate.md)|  | |

### Return type

[**\FlowHunt\Model\AgentTeamProjectResponse**](../Model/AgentTeamProjectResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAgentTeamProject()`

```php
deleteAgentTeamProject($project_id, $workspace_id): \FlowHunt\Model\Completed
```

Delete Agent Team Project

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


$apiInstance = new FlowHunt\Api\AgentTeamProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->deleteAgentTeamProject($project_id, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentTeamProjectsApi->deleteAgentTeamProject: ', $e->getMessage(), PHP_EOL;
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

## `generateSuggestions()`

```php
generateSuggestions($project_id, $workspace_id): \FlowHunt\Model\SuggestionResponse[]
```

Generate Suggestions

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


$apiInstance = new FlowHunt\Api\AgentTeamProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->generateSuggestions($project_id, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentTeamProjectsApi->generateSuggestions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **string**|  | |
| **workspace_id** | **string**|  | |

### Return type

[**\FlowHunt\Model\SuggestionResponse[]**](../Model/SuggestionResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateTitle()`

```php
generateTitle($project_id, $session_id, $workspace_id): \FlowHunt\Model\FlowSessionViewResponse
```

Generate Title

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


$apiInstance = new FlowHunt\Api\AgentTeamProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string
$session_id = 'session_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->generateTitle($project_id, $session_id, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentTeamProjectsApi->generateTitle: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **string**|  | |
| **session_id** | **string**|  | |
| **workspace_id** | **string**|  | |

### Return type

[**\FlowHunt\Model\FlowSessionViewResponse**](../Model/FlowSessionViewResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProject()`

```php
getProject($project_id, $workspace_id): \FlowHunt\Model\AgentTeamProjectResponse
```

Get Project

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


$apiInstance = new FlowHunt\Api\AgentTeamProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->getProject($project_id, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentTeamProjectsApi->getProject: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **string**|  | |
| **workspace_id** | **string**|  | |

### Return type

[**\FlowHunt\Model\AgentTeamProjectResponse**](../Model/AgentTeamProjectResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSuggestions()`

```php
getSuggestions($project_id, $workspace_id): \FlowHunt\Model\SuggestionResponse[]
```

Get Suggestions

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


$apiInstance = new FlowHunt\Api\AgentTeamProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->getSuggestions($project_id, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentTeamProjectsApi->getSuggestions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **string**|  | |
| **workspace_id** | **string**|  | |

### Return type

[**\FlowHunt\Model\SuggestionResponse[]**](../Model/SuggestionResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `hitlRespond()`

```php
hitlRespond($project_id, $session_id, $workspace_id, $hitl_respond_request): \FlowHunt\Model\Completed
```

Hitl Respond

Respond to an HITL tool approval request from the dashboard UI.  Emits a ``task.hitl_resolved`` signal on the ``agent_team_comms`` stream so the stream step resumes and the router can re-spawn the agent. This is durable and works across process restarts / multiple nodes.

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


$apiInstance = new FlowHunt\Api\AgentTeamProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string
$session_id = 'session_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$hitl_respond_request = new \FlowHunt\Model\HITLRespondRequest(); // \FlowHunt\Model\HITLRespondRequest

try {
    $result = $apiInstance->hitlRespond($project_id, $session_id, $workspace_id, $hitl_respond_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentTeamProjectsApi->hitlRespond: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **string**|  | |
| **session_id** | **string**|  | |
| **workspace_id** | **string**|  | |
| **hitl_respond_request** | [**\FlowHunt\Model\HITLRespondRequest**](../Model/HITLRespondRequest.md)|  | |

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

## `pollChat()`

```php
pollChat($project_id, $session_id, $from_timestamp, $workspace_id): \FlowHunt\Model\FlowSessionEvent[]
```

Poll Chat

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


$apiInstance = new FlowHunt\Api\AgentTeamProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string
$session_id = 'session_id_example'; // string
$from_timestamp = 'from_timestamp_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->pollChat($project_id, $session_id, $from_timestamp, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentTeamProjectsApi->pollChat: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **string**|  | |
| **session_id** | **string**|  | |
| **from_timestamp** | **string**|  | |
| **workspace_id** | **string**|  | |

### Return type

[**\FlowHunt\Model\FlowSessionEvent[]**](../Model/FlowSessionEvent.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pollGenerateAgentConfig()`

```php
pollGenerateAgentConfig($session_id, $from_timestamp, $workspace_id): \FlowHunt\Model\FlowSessionEvent[]
```

Poll Generate Agent Config

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


$apiInstance = new FlowHunt\Api\AgentTeamProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$session_id = 'session_id_example'; // string
$from_timestamp = 'from_timestamp_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->pollGenerateAgentConfig($session_id, $from_timestamp, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentTeamProjectsApi->pollGenerateAgentConfig: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **session_id** | **string**|  | |
| **from_timestamp** | **string**|  | |
| **workspace_id** | **string**|  | |

### Return type

[**\FlowHunt\Model\FlowSessionEvent[]**](../Model/FlowSessionEvent.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchProjects()`

```php
searchProjects($workspace_id, $agent_team_project_search_request): \FlowHunt\Model\AgentTeamProjectResponse[]
```

Search Projects

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


$apiInstance = new FlowHunt\Api\AgentTeamProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$agent_team_project_search_request = new \FlowHunt\Model\AgentTeamProjectSearchRequest(); // \FlowHunt\Model\AgentTeamProjectSearchRequest

try {
    $result = $apiInstance->searchProjects($workspace_id, $agent_team_project_search_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentTeamProjectsApi->searchProjects: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **agent_team_project_search_request** | [**\FlowHunt\Model\AgentTeamProjectSearchRequest**](../Model/AgentTeamProjectSearchRequest.md)|  | |

### Return type

[**\FlowHunt\Model\AgentTeamProjectResponse[]**](../Model/AgentTeamProjectResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `startChat()`

```php
startChat($project_id, $workspace_id, $agent_team_project_chat_request): \FlowHunt\Model\ChatStartResponse
```

Start Chat

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


$apiInstance = new FlowHunt\Api\AgentTeamProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$agent_team_project_chat_request = new \FlowHunt\Model\AgentTeamProjectChatRequest(); // \FlowHunt\Model\AgentTeamProjectChatRequest

try {
    $result = $apiInstance->startChat($project_id, $workspace_id, $agent_team_project_chat_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentTeamProjectsApi->startChat: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **string**|  | |
| **workspace_id** | **string**|  | |
| **agent_team_project_chat_request** | [**\FlowHunt\Model\AgentTeamProjectChatRequest**](../Model/AgentTeamProjectChatRequest.md)|  | |

### Return type

[**\FlowHunt\Model\ChatStartResponse**](../Model/ChatStartResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `startGenerateAgentConfig()`

```php
startGenerateAgentConfig($workspace_id, $generate_agent_config_request): \FlowHunt\Model\GenerateAgentConfigStartResponse
```

Start Generate Agent Config

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


$apiInstance = new FlowHunt\Api\AgentTeamProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$generate_agent_config_request = new \FlowHunt\Model\GenerateAgentConfigRequest(); // \FlowHunt\Model\GenerateAgentConfigRequest

try {
    $result = $apiInstance->startGenerateAgentConfig($workspace_id, $generate_agent_config_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentTeamProjectsApi->startGenerateAgentConfig: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **generate_agent_config_request** | [**\FlowHunt\Model\GenerateAgentConfigRequest**](../Model/GenerateAgentConfigRequest.md)|  | |

### Return type

[**\FlowHunt\Model\GenerateAgentConfigStartResponse**](../Model/GenerateAgentConfigStartResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `testChannelConnection()`

```php
testChannelConnection($workspace_id, $channel_test_request): \FlowHunt\Model\ChannelTestResponse
```

Test Channel Connection

Send a test message to the configured channel.

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


$apiInstance = new FlowHunt\Api\AgentTeamProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$channel_test_request = new \FlowHunt\Model\ChannelTestRequest(); // \FlowHunt\Model\ChannelTestRequest

try {
    $result = $apiInstance->testChannelConnection($workspace_id, $channel_test_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentTeamProjectsApi->testChannelConnection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **channel_test_request** | [**\FlowHunt\Model\ChannelTestRequest**](../Model/ChannelTestRequest.md)|  | |

### Return type

[**\FlowHunt\Model\ChannelTestResponse**](../Model/ChannelTestResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateProject()`

```php
updateProject($project_id, $workspace_id, $agent_team_project_update): \FlowHunt\Model\AgentTeamProjectResponse
```

Update Project

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


$apiInstance = new FlowHunt\Api\AgentTeamProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$agent_team_project_update = new \FlowHunt\Model\AgentTeamProjectUpdate(); // \FlowHunt\Model\AgentTeamProjectUpdate

try {
    $result = $apiInstance->updateProject($project_id, $workspace_id, $agent_team_project_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentTeamProjectsApi->updateProject: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **string**|  | |
| **workspace_id** | **string**|  | |
| **agent_team_project_update** | [**\FlowHunt\Model\AgentTeamProjectUpdate**](../Model/AgentTeamProjectUpdate.md)|  | |

### Return type

[**\FlowHunt\Model\AgentTeamProjectResponse**](../Model/AgentTeamProjectResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
