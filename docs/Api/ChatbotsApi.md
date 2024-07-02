# OpenAPI\Client\ChatbotsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createChatbot()**](ChatbotsApi.md#createChatbot) | **POST** /v2/chatbots/create | Create Chatbot |
| [**deleteChatbot()**](ChatbotsApi.md#deleteChatbot) | **DELETE** /v2/chatbots/{chatbot_id} | Delete Chatbot |
| [**getChatbot()**](ChatbotsApi.md#getChatbot) | **GET** /v2/chatbots/{chatbot_id} | Get Chatbot |
| [**searchChatbots()**](ChatbotsApi.md#searchChatbots) | **POST** /v2/chatbots/ | Search Chatbots |
| [**updateChatbot()**](ChatbotsApi.md#updateChatbot) | **PUT** /v2/chatbots/{chatbot_id} | Update Chatbot |


## `createChatbot()`

```php
createChatbot($workspace_id, $chatbot_create_request): \OpenAPI\Client\Model\ChatbotResponse
```

Create Chatbot

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ChatbotsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$chatbot_create_request = new \OpenAPI\Client\Model\ChatbotCreateRequest(); // \OpenAPI\Client\Model\ChatbotCreateRequest

try {
    $result = $apiInstance->createChatbot($workspace_id, $chatbot_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatbotsApi->createChatbot: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **chatbot_create_request** | [**\OpenAPI\Client\Model\ChatbotCreateRequest**](../Model/ChatbotCreateRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ChatbotResponse**](../Model/ChatbotResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteChatbot()`

```php
deleteChatbot($chatbot_id, $workspace_id): \OpenAPI\Client\Model\Completed
```

Delete Chatbot

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ChatbotsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chatbot_id = 'chatbot_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->deleteChatbot($chatbot_id, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatbotsApi->deleteChatbot: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **chatbot_id** | **string**|  | |
| **workspace_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\Completed**](../Model/Completed.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getChatbot()`

```php
getChatbot($chatbot_id, $workspace_id): \OpenAPI\Client\Model\ChatbotResponse
```

Get Chatbot

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ChatbotsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chatbot_id = 'chatbot_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->getChatbot($chatbot_id, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatbotsApi->getChatbot: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **chatbot_id** | **string**|  | |
| **workspace_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\ChatbotResponse**](../Model/ChatbotResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchChatbots()`

```php
searchChatbots($workspace_id, $chatbot_search_request): \OpenAPI\Client\Model\ChatbotResponse[]
```

Search Chatbots

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ChatbotsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$chatbot_search_request = new \OpenAPI\Client\Model\ChatbotSearchRequest(); // \OpenAPI\Client\Model\ChatbotSearchRequest

try {
    $result = $apiInstance->searchChatbots($workspace_id, $chatbot_search_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatbotsApi->searchChatbots: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **chatbot_search_request** | [**\OpenAPI\Client\Model\ChatbotSearchRequest**](../Model/ChatbotSearchRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ChatbotResponse[]**](../Model/ChatbotResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateChatbot()`

```php
updateChatbot($chatbot_id, $workspace_id, $chatbot_update_request): \OpenAPI\Client\Model\ChatbotResponse
```

Update Chatbot

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyHeader
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ChatbotsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chatbot_id = 'chatbot_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$chatbot_update_request = new \OpenAPI\Client\Model\ChatbotUpdateRequest(); // \OpenAPI\Client\Model\ChatbotUpdateRequest

try {
    $result = $apiInstance->updateChatbot($chatbot_id, $workspace_id, $chatbot_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatbotsApi->updateChatbot: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **chatbot_id** | **string**|  | |
| **workspace_id** | **string**|  | |
| **chatbot_update_request** | [**\OpenAPI\Client\Model\ChatbotUpdateRequest**](../Model/ChatbotUpdateRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ChatbotResponse**](../Model/ChatbotResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
