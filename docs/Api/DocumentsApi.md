# FlowHunt\DocumentsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createDocumentCategory()**](DocumentsApi.md#createDocumentCategory) | **POST** /v2/documents/categories/create | Create Document Category |
| [**createFaq()**](DocumentsApi.md#createFaq) | **POST** /v2/documents/faqs/create | Create Faq |
| [**deleteDocument()**](DocumentsApi.md#deleteDocument) | **DELETE** /v2/documents/{doc_id} | Delete Document |
| [**deleteDocumentCategory()**](DocumentsApi.md#deleteDocumentCategory) | **DELETE** /v2/documents/categories/{cat_id} | Delete Document Category |
| [**deleteFaq()**](DocumentsApi.md#deleteFaq) | **DELETE** /v2/documents/faqs/{faq_id} | Delete Faq |
| [**downloadBinaryDocument()**](DocumentsApi.md#downloadBinaryDocument) | **GET** /v2/documents/download/binary/{doc_id} | Download Binary Document |
| [**downloadTextDocument()**](DocumentsApi.md#downloadTextDocument) | **GET** /v2/documents/download/text/{doc_id} | Download Text Document |
| [**searchDocumentCategories()**](DocumentsApi.md#searchDocumentCategories) | **POST** /v2/documents/categories/search | Search Document Categories |
| [**searchDocuments()**](DocumentsApi.md#searchDocuments) | **POST** /v2/documents/search | Search Documents |
| [**searchFaqs()**](DocumentsApi.md#searchFaqs) | **POST** /v2/documents/faqs/search | Search Faqs |
| [**updateDocument()**](DocumentsApi.md#updateDocument) | **PUT** /v2/documents/{doc_id} | Update Document |
| [**updateDocumentCategory()**](DocumentsApi.md#updateDocumentCategory) | **PUT** /v2/documents/categories/{cat_id} | Update Document Category |
| [**updateFaq()**](DocumentsApi.md#updateFaq) | **PUT** /v2/documents/faqs/{faq_id} | Update Faq |
| [**uploadDocument()**](DocumentsApi.md#uploadDocument) | **POST** /v2/documents/upload/{cat_id} | Upload Document |
| [**uploadFromUrlDocument()**](DocumentsApi.md#uploadFromUrlDocument) | **POST** /v2/documents/upload-from-url/{cat_id} | Upload From Url Document |


## `createDocumentCategory()`

```php
createDocumentCategory($workspace_id, $document_category_create_request): \FlowHunt\Model\DocumentCategoryResponse
```

Create Document Category

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


$apiInstance = new FlowHunt\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$document_category_create_request = new \FlowHunt\Model\DocumentCategoryCreateRequest(); // \FlowHunt\Model\DocumentCategoryCreateRequest

try {
    $result = $apiInstance->createDocumentCategory($workspace_id, $document_category_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->createDocumentCategory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **document_category_create_request** | [**\FlowHunt\Model\DocumentCategoryCreateRequest**](../Model/DocumentCategoryCreateRequest.md)|  | |

### Return type

[**\FlowHunt\Model\DocumentCategoryResponse**](../Model/DocumentCategoryResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createFaq()`

```php
createFaq($workspace_id, $faq_create_request): \FlowHunt\Model\FaqResponse[]
```

Create Faq

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


$apiInstance = new FlowHunt\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$faq_create_request = new \FlowHunt\Model\FaqCreateRequest(); // \FlowHunt\Model\FaqCreateRequest

try {
    $result = $apiInstance->createFaq($workspace_id, $faq_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->createFaq: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **faq_create_request** | [**\FlowHunt\Model\FaqCreateRequest**](../Model/FaqCreateRequest.md)|  | |

### Return type

[**\FlowHunt\Model\FaqResponse[]**](../Model/FaqResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteDocument()`

```php
deleteDocument($doc_id, $workspace_id): \FlowHunt\Model\Completed
```

Delete Document

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


$apiInstance = new FlowHunt\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$doc_id = 'doc_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->deleteDocument($doc_id, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->deleteDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **doc_id** | **string**|  | |
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

## `deleteDocumentCategory()`

```php
deleteDocumentCategory($cat_id, $workspace_id): \FlowHunt\Model\Completed
```

Delete Document Category

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


$apiInstance = new FlowHunt\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cat_id = 'cat_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->deleteDocumentCategory($cat_id, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->deleteDocumentCategory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cat_id** | **string**|  | |
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

## `deleteFaq()`

```php
deleteFaq($faq_id, $workspace_id): \FlowHunt\Model\Completed
```

Delete Faq

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


$apiInstance = new FlowHunt\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$faq_id = 'faq_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->deleteFaq($faq_id, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->deleteFaq: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **faq_id** | **string**|  | |
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

## `downloadBinaryDocument()`

```php
downloadBinaryDocument($doc_id, $workspace_id): mixed
```

Download Binary Document

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


$apiInstance = new FlowHunt\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$doc_id = 'doc_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->downloadBinaryDocument($doc_id, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->downloadBinaryDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **doc_id** | **string**|  | |
| **workspace_id** | **string**|  | |

### Return type

**mixed**

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `downloadTextDocument()`

```php
downloadTextDocument($doc_id, $workspace_id): \FlowHunt\Model\DocumentContent
```

Download Text Document

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


$apiInstance = new FlowHunt\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$doc_id = 'doc_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->downloadTextDocument($doc_id, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->downloadTextDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **doc_id** | **string**|  | |
| **workspace_id** | **string**|  | |

### Return type

[**\FlowHunt\Model\DocumentContent**](../Model/DocumentContent.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchDocumentCategories()`

```php
searchDocumentCategories($workspace_id, $document_category_search_request): \FlowHunt\Model\DocumentCategoryResponse[]
```

Search Document Categories

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


$apiInstance = new FlowHunt\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$document_category_search_request = new \FlowHunt\Model\DocumentCategorySearchRequest(); // \FlowHunt\Model\DocumentCategorySearchRequest

try {
    $result = $apiInstance->searchDocumentCategories($workspace_id, $document_category_search_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->searchDocumentCategories: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **document_category_search_request** | [**\FlowHunt\Model\DocumentCategorySearchRequest**](../Model/DocumentCategorySearchRequest.md)|  | |

### Return type

[**\FlowHunt\Model\DocumentCategoryResponse[]**](../Model/DocumentCategoryResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchDocuments()`

```php
searchDocuments($workspace_id, $document_search_request): \FlowHunt\Model\DocumentResponse[]
```

Search Documents

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


$apiInstance = new FlowHunt\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$document_search_request = new \FlowHunt\Model\DocumentSearchRequest(); // \FlowHunt\Model\DocumentSearchRequest

try {
    $result = $apiInstance->searchDocuments($workspace_id, $document_search_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->searchDocuments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **document_search_request** | [**\FlowHunt\Model\DocumentSearchRequest**](../Model/DocumentSearchRequest.md)|  | |

### Return type

[**\FlowHunt\Model\DocumentResponse[]**](../Model/DocumentResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchFaqs()`

```php
searchFaqs($workspace_id, $faq_search_request): \FlowHunt\Model\FaqResponse[]
```

Search Faqs

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


$apiInstance = new FlowHunt\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$faq_search_request = new \FlowHunt\Model\FaqSearchRequest(); // \FlowHunt\Model\FaqSearchRequest

try {
    $result = $apiInstance->searchFaqs($workspace_id, $faq_search_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->searchFaqs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **faq_search_request** | [**\FlowHunt\Model\FaqSearchRequest**](../Model/FaqSearchRequest.md)|  | |

### Return type

[**\FlowHunt\Model\FaqResponse[]**](../Model/FaqResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateDocument()`

```php
updateDocument($doc_id, $workspace_id, $document_update_request): \FlowHunt\Model\DocumentResponse
```

Update Document

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


$apiInstance = new FlowHunt\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$doc_id = 'doc_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$document_update_request = new \FlowHunt\Model\DocumentUpdateRequest(); // \FlowHunt\Model\DocumentUpdateRequest

try {
    $result = $apiInstance->updateDocument($doc_id, $workspace_id, $document_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->updateDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **doc_id** | **string**|  | |
| **workspace_id** | **string**|  | |
| **document_update_request** | [**\FlowHunt\Model\DocumentUpdateRequest**](../Model/DocumentUpdateRequest.md)|  | |

### Return type

[**\FlowHunt\Model\DocumentResponse**](../Model/DocumentResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateDocumentCategory()`

```php
updateDocumentCategory($cat_id, $workspace_id, $document_category_update_request): \FlowHunt\Model\DocumentCategoryResponse
```

Update Document Category

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


$apiInstance = new FlowHunt\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cat_id = 'cat_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$document_category_update_request = new \FlowHunt\Model\DocumentCategoryUpdateRequest(); // \FlowHunt\Model\DocumentCategoryUpdateRequest

try {
    $result = $apiInstance->updateDocumentCategory($cat_id, $workspace_id, $document_category_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->updateDocumentCategory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cat_id** | **string**|  | |
| **workspace_id** | **string**|  | |
| **document_category_update_request** | [**\FlowHunt\Model\DocumentCategoryUpdateRequest**](../Model/DocumentCategoryUpdateRequest.md)|  | |

### Return type

[**\FlowHunt\Model\DocumentCategoryResponse**](../Model/DocumentCategoryResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateFaq()`

```php
updateFaq($faq_id, $workspace_id, $faq_update_request): \FlowHunt\Model\FaqResponse[]
```

Update Faq

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


$apiInstance = new FlowHunt\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$faq_id = 'faq_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$faq_update_request = new \FlowHunt\Model\FaqUpdateRequest(); // \FlowHunt\Model\FaqUpdateRequest

try {
    $result = $apiInstance->updateFaq($faq_id, $workspace_id, $faq_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->updateFaq: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **faq_id** | **string**|  | |
| **workspace_id** | **string**|  | |
| **faq_update_request** | [**\FlowHunt\Model\FaqUpdateRequest**](../Model/FaqUpdateRequest.md)|  | |

### Return type

[**\FlowHunt\Model\FaqResponse[]**](../Model/FaqResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `uploadDocument()`

```php
uploadDocument($cat_id, $workspace_id, $file): \FlowHunt\Model\DocumentResponse
```

Upload Document

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


$apiInstance = new FlowHunt\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cat_id = 'cat_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$file = "/path/to/file.txt"; // \SplFileObject

try {
    $result = $apiInstance->uploadDocument($cat_id, $workspace_id, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->uploadDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cat_id** | **string**|  | |
| **workspace_id** | **string**|  | |
| **file** | **\SplFileObject****\SplFileObject**|  | |

### Return type

[**\FlowHunt\Model\DocumentResponse**](../Model/DocumentResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `uploadFromUrlDocument()`

```php
uploadFromUrlDocument($cat_id, $workspace_id, $app_url_input): \FlowHunt\Model\DocumentResponse
```

Upload From Url Document

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


$apiInstance = new FlowHunt\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cat_id = 'cat_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$app_url_input = new \FlowHunt\Model\AppUrlInput(); // \FlowHunt\Model\AppUrlInput

try {
    $result = $apiInstance->uploadFromUrlDocument($cat_id, $workspace_id, $app_url_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->uploadFromUrlDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cat_id** | **string**|  | |
| **workspace_id** | **string**|  | |
| **app_url_input** | [**\FlowHunt\Model\AppUrlInput**](../Model/AppUrlInput.md)|  | |

### Return type

[**\FlowHunt\Model\DocumentResponse**](../Model/DocumentResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
