# FlowHunt\WorkspacesSSODomainVerificationApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createDomainVerification()**](WorkspacesSSODomainVerificationApi.md#createDomainVerification) | **POST** /v2/workspaces/{workspace_id}/sso/domain-verification | Create Domain Verification |
| [**deleteDomainVerification()**](WorkspacesSSODomainVerificationApi.md#deleteDomainVerification) | **DELETE** /v2/workspaces/{workspace_id}/sso/domain-verification | Delete Domain Verification |
| [**listDomainVerifications()**](WorkspacesSSODomainVerificationApi.md#listDomainVerifications) | **GET** /v2/workspaces/{workspace_id}/sso/domain-verification | List Domain Verifications |
| [**verifyDomain()**](WorkspacesSSODomainVerificationApi.md#verifyDomain) | **POST** /v2/workspaces/{workspace_id}/sso/domain-verification/verify | Verify Domain |


## `createDomainVerification()`

```php
createDomainVerification($workspace_id, $workspace_sso_domain_verification_create_request): \FlowHunt\Model\WorkspaceSSODomainVerificationResponse
```

Create Domain Verification

Create a new domain verification record. Admin endpoint - requires workspace admin permissions. Enterprise feature - requires enterprise subscription.

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


$apiInstance = new FlowHunt\Api\WorkspacesSSODomainVerificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$workspace_sso_domain_verification_create_request = new \FlowHunt\Model\WorkspaceSSODomainVerificationCreateRequest(); // \FlowHunt\Model\WorkspaceSSODomainVerificationCreateRequest

try {
    $result = $apiInstance->createDomainVerification($workspace_id, $workspace_sso_domain_verification_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkspacesSSODomainVerificationApi->createDomainVerification: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **workspace_sso_domain_verification_create_request** | [**\FlowHunt\Model\WorkspaceSSODomainVerificationCreateRequest**](../Model/WorkspaceSSODomainVerificationCreateRequest.md)|  | |

### Return type

[**\FlowHunt\Model\WorkspaceSSODomainVerificationResponse**](../Model/WorkspaceSSODomainVerificationResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteDomainVerification()`

```php
deleteDomainVerification($workspace_id): \FlowHunt\Model\Completed
```

Delete Domain Verification

Delete a domain verification record. Admin endpoint - requires workspace admin permissions. Enterprise feature - requires enterprise subscription.

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


$apiInstance = new FlowHunt\Api\WorkspacesSSODomainVerificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->deleteDomainVerification($workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkspacesSSODomainVerificationApi->deleteDomainVerification: ', $e->getMessage(), PHP_EOL;
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

## `listDomainVerifications()`

```php
listDomainVerifications($workspace_id): \FlowHunt\Model\WorkspaceSSODomainVerificationResponse[]
```

List Domain Verifications

List all domain verifications for a workspace. Admin endpoint - requires workspace admin permissions. Enterprise feature - requires enterprise subscription.

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


$apiInstance = new FlowHunt\Api\WorkspacesSSODomainVerificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->listDomainVerifications($workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkspacesSSODomainVerificationApi->listDomainVerifications: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |

### Return type

[**\FlowHunt\Model\WorkspaceSSODomainVerificationResponse[]**](../Model/WorkspaceSSODomainVerificationResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `verifyDomain()`

```php
verifyDomain($workspace_id): \FlowHunt\Model\WorkspaceSSODomainVerificationResponse
```

Verify Domain

Verify a domain by checking DNS TXT records. Admin endpoint - requires workspace admin permissions. Enterprise feature - requires enterprise subscription.

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


$apiInstance = new FlowHunt\Api\WorkspacesSSODomainVerificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->verifyDomain($workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkspacesSSODomainVerificationApi->verifyDomain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |

### Return type

[**\FlowHunt\Model\WorkspaceSSODomainVerificationResponse**](../Model/WorkspaceSSODomainVerificationResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
