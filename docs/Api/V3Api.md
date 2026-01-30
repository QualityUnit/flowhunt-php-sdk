# FlowHunt\V3Api

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**checkMigrationReadiness()**](V3Api.md#checkMigrationReadiness) | **GET** /v3/flows/{flow_id}/migration-readiness | Check Migration Readiness |
| [**createV3FlowAssistantSession()**](V3Api.md#createV3FlowAssistantSession) | **POST** /v3/flow-assistants/create | Create V3 Flow Assistant Session |
| [**getAllComponentsV3()**](V3Api.md#getAllComponentsV3) | **GET** /v3/flows/components/all | Get All Components V3 |
| [**getTool()**](V3Api.md#getTool) | **GET** /v3/tools/{step_name} | Get Tool |
| [**getV3Components()**](V3Api.md#getV3Components) | **GET** /v3/flows/components/v3 | Get V3 Components |
| [**invokeV3FlowAssistantResponse()**](V3Api.md#invokeV3FlowAssistantResponse) | **POST** /v3/flow-assistants/{session_id}/invoke | Invoke V3 Flow Assistant Response |
| [**listTools()**](V3Api.md#listTools) | **GET** /v3/tools | List Tools |
| [**migrateFlowToV3()**](V3Api.md#migrateFlowToV3) | **POST** /v3/flows/{flow_id}/migrate-to-v3 | Migrate Flow To V3 |
| [**pollV3FlowAssistantResponse()**](V3Api.md#pollV3FlowAssistantResponse) | **POST** /v3/flow-assistants/{session_id}/invocation_response/{from_timestamp} | Poll V3 Flow Assistant Response |
| [**validateComponent()**](V3Api.md#validateComponent) | **POST** /v3/flows/components/{component_id}/validate | Validate Component |
| [**validateFlow()**](V3Api.md#validateFlow) | **POST** /v3/flows/validate | Validate Flow |


## `checkMigrationReadiness()`

```php
checkMigrationReadiness($flow_id, $workspace_id): array<string,mixed>
```

Check Migration Readiness

Check if a flow is ready to be migrated to v3.  Returns information about: - Whether the flow can be migrated - Current engine version - Incompatible components (if any) - List of available v3 components  Args:     workspace_id: The workspace ID     flow_id: The flow ID to check     flow_v3_controller: Injected controller     user: Current authenticated user  Returns:     Dict with migration readiness information

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FlowHunt\Api\V3Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$flow_id = 'flow_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->checkMigrationReadiness($flow_id, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V3Api->checkMigrationReadiness: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **flow_id** | **string**|  | |
| **workspace_id** | **string**|  | |

### Return type

**array<string,mixed>**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createV3FlowAssistantSession()`

```php
createV3FlowAssistantSession($workspace_id, $flow_assistant_session_create_request): \FlowHunt\Model\FlowSessionResponse
```

Create V3 Flow Assistant Session

Create a new assistant session.  Returns session_id and created_at for the new session.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: HTTPBearer
$config = FlowHunt\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FlowHunt\Api\V3Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$flow_assistant_session_create_request = new \FlowHunt\Model\FlowAssistantSessionCreateRequest(); // \FlowHunt\Model\FlowAssistantSessionCreateRequest

try {
    $result = $apiInstance->createV3FlowAssistantSession($workspace_id, $flow_assistant_session_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V3Api->createV3FlowAssistantSession: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **flow_assistant_session_create_request** | [**\FlowHunt\Model\FlowAssistantSessionCreateRequest**](../Model/FlowAssistantSessionCreateRequest.md)|  | |

### Return type

[**\FlowHunt\Model\FlowSessionResponse**](../Model/FlowSessionResponse.md)

### Authorization

[HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllComponentsV3()`

```php
getAllComponentsV3(): array<string,mixed>
```

Get All Components V3

Get all v3 components with full metadata, organized by category.  Returns V2-compatible component structure with rich metadata including: - display_name, description, icon - Parameter definitions with types, defaults, UI field types - Output field definitions - Category organization  This endpoint is compatible with the v2 flow editor UI.  Returns:     Dict mapping category names to component definitions.     Example: {\"inputs\": {\"ChatInput\": {...}}, \"llms\": {\"OpenAILLM\": {...}}}

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FlowHunt\Api\V3Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getAllComponentsV3();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V3Api->getAllComponentsV3: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**array<string,mixed>**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTool()`

```php
getTool($step_name, $workspace_id): \FlowHunt\Model\V3ToolResponse
```

Get Tool

Get a specific tool with full parameter details.  Returns detailed information about a tool including all parameters that can be configured or locked.  Args:     workspace_id: The workspace ID     step_name: The step name to retrieve     tools_controller: Injected controller     user: Current authenticated user  Returns:     V3ToolResponse with full tool details  Raises:     404: If tool not found

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FlowHunt\Api\V3Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$step_name = 'step_name_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->getTool($step_name, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V3Api->getTool: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **step_name** | **string**|  | |
| **workspace_id** | **string**|  | |

### Return type

[**\FlowHunt\Model\V3ToolResponse**](../Model/V3ToolResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getV3Components()`

```php
getV3Components(): array<string,mixed>
```

Get V3 Components

Get list of v3-compatible components.  Returns:     Dict with list of registered v3 components and count

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FlowHunt\Api\V3Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getV3Components();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V3Api->getV3Components: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**array<string,mixed>**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `invokeV3FlowAssistantResponse()`

```php
invokeV3FlowAssistantResponse($session_id, $flow_assistant_invoke_request): \FlowHunt\Model\FlowSessionInvocationResponse
```

Invoke V3 Flow Assistant Response

Start an assistant invocation.  Returns immediately - client polls for events via invocation_response endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FlowHunt\Api\V3Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$session_id = 'session_id_example'; // string
$flow_assistant_invoke_request = new \FlowHunt\Model\FlowAssistantInvokeRequest(); // \FlowHunt\Model\FlowAssistantInvokeRequest

try {
    $result = $apiInstance->invokeV3FlowAssistantResponse($session_id, $flow_assistant_invoke_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V3Api->invokeV3FlowAssistantResponse: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **session_id** | **string**|  | |
| **flow_assistant_invoke_request** | [**\FlowHunt\Model\FlowAssistantInvokeRequest**](../Model/FlowAssistantInvokeRequest.md)|  | |

### Return type

[**\FlowHunt\Model\FlowSessionInvocationResponse**](../Model/FlowSessionInvocationResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listTools()`

```php
listTools($workspace_id, $search, $category): \FlowHunt\Model\V3ToolListResponse
```

List Tools

List all available V3 tools.  Returns a list of tools that can be used with AI Agents. Supports optional search and category filtering.  Args:     workspace_id: The workspace ID     search: Optional search query     category: Optional category filter     tools_controller: Injected controller     user: Current authenticated user  Returns:     V3ToolListResponse with list of available tools

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FlowHunt\Api\V3Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$workspace_id = 'workspace_id_example'; // string
$search = 'search_example'; // string | Search query for tool name, description, or category
$category = 'category_example'; // string | Filter by category

try {
    $result = $apiInstance->listTools($workspace_id, $search, $category);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V3Api->listTools: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **search** | **string**| Search query for tool name, description, or category | [optional] |
| **category** | **string**| Filter by category | [optional] |

### Return type

[**\FlowHunt\Model\V3ToolListResponse**](../Model/V3ToolListResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `migrateFlowToV3()`

```php
migrateFlowToV3($flow_id, $workspace_id, $force, $remove_incompatible): \FlowHunt\Model\FlowDetailResponse
```

Migrate Flow To V3

Migrate a v2 flow to v3 engine.  This endpoint: 1. Validates that all components in the flow are v3-compatible 2. Creates a new draft version of the flow with engine_version='v3' 3. Returns the migrated flow details  Args:     workspace_id: The workspace ID     flow_id: The flow ID to migrate     force: If True, skip compatibility check (dangerous!)     remove_incompatible: If True, remove incompatible components instead of failing     flow_v3_controller: Injected controller     user: Current authenticated user  Returns:     FlowDetailResponse with the migrated flow

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FlowHunt\Api\V3Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$flow_id = 'flow_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$force = false; // bool | Skip compatibility check if True
$remove_incompatible = false; // bool | Remove incompatible components instead of failing

try {
    $result = $apiInstance->migrateFlowToV3($flow_id, $workspace_id, $force, $remove_incompatible);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V3Api->migrateFlowToV3: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **flow_id** | **string**|  | |
| **workspace_id** | **string**|  | |
| **force** | **bool**| Skip compatibility check if True | [optional] [default to false] |
| **remove_incompatible** | **bool**| Remove incompatible components instead of failing | [optional] [default to false] |

### Return type

[**\FlowHunt\Model\FlowDetailResponse**](../Model/FlowDetailResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pollV3FlowAssistantResponse()`

```php
pollV3FlowAssistantResponse($session_id, $from_timestamp): \FlowHunt\Model\FlowSessionEvent[]
```

Poll V3 Flow Assistant Response

Poll for events after the given timestamp.  Used by client to receive streamed responses from the assistant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FlowHunt\Api\V3Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$session_id = 'session_id_example'; // string
$from_timestamp = 'from_timestamp_example'; // string

try {
    $result = $apiInstance->pollV3FlowAssistantResponse($session_id, $from_timestamp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V3Api->pollV3FlowAssistantResponse: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **session_id** | **string**|  | |
| **from_timestamp** | **string**|  | |

### Return type

[**\FlowHunt\Model\FlowSessionEvent[]**](../Model/FlowSessionEvent.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `validateComponent()`

```php
validateComponent($component_id, $component_validate_request): \FlowHunt\Model\ComponentValidationResponse
```

Validate Component

Validate a V3 component configuration.  Validates that all required parameters have values and performs any component-specific validation rules.  Args:     component_id: The component type to validate (e.g., \"OpenAILLM\")     request: Request body with template values  Returns:     ComponentValidationResponse with is_valid flag and error list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FlowHunt\Api\V3Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$component_id = 'component_id_example'; // string
$component_validate_request = new \FlowHunt\Model\ComponentValidateRequest(); // \FlowHunt\Model\ComponentValidateRequest

try {
    $result = $apiInstance->validateComponent($component_id, $component_validate_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V3Api->validateComponent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **component_id** | **string**|  | |
| **component_validate_request** | [**\FlowHunt\Model\ComponentValidateRequest**](../Model/ComponentValidateRequest.md)|  | |

### Return type

[**\FlowHunt\Model\ComponentValidationResponse**](../Model/ComponentValidationResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `validateFlow()`

```php
validateFlow($flow_validate_request): \FlowHunt\Model\FlowValidationResponse
```

Validate Flow

Validate an entire V3 flow before publishing.  Validates all nodes in the flow, checking that required parameters have values and all component configurations are valid.  Args:     request: Request body with list of nodes to validate  Returns:     FlowValidationResponse with is_valid flag and list of errors     including node_id and component_type for each error

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FlowHunt\Api\V3Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$flow_validate_request = new \FlowHunt\Model\FlowValidateRequest(); // \FlowHunt\Model\FlowValidateRequest

try {
    $result = $apiInstance->validateFlow($flow_validate_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V3Api->validateFlow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **flow_validate_request** | [**\FlowHunt\Model\FlowValidateRequest**](../Model/FlowValidateRequest.md)|  | |

### Return type

[**\FlowHunt\Model\FlowValidationResponse**](../Model/FlowValidationResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
