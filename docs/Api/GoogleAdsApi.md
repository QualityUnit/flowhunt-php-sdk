# FlowHunt\GoogleAdsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addKeywordToGroup()**](GoogleAdsApi.md#addKeywordToGroup) | **POST** /v2/integrations/google_ads/keyword/add_to_group | Add Keyword To Group |
| [**analyzeNotAssignedKeywords()**](GoogleAdsApi.md#analyzeNotAssignedKeywords) | **POST** /v2/integrations/google_ads/analyze_not_assigned_keywords | Analyze Not Assigned Keywords |
| [**getGoogleAdsCampaigns()**](GoogleAdsApi.md#getGoogleAdsCampaigns) | **POST** /v2/integrations/google_ads/campaigns | Get Google Ads Campaigns |
| [**getGoogleAdsCustomers()**](GoogleAdsApi.md#getGoogleAdsCustomers) | **POST** /v2/integrations/google_ads/customers | Get Google Ads Customers |
| [**getGoogleAdsGroups()**](GoogleAdsApi.md#getGoogleAdsGroups) | **POST** /v2/integrations/google_ads/groups | Get Google Ads Groups |
| [**getRecommendations()**](GoogleAdsApi.md#getRecommendations) | **POST** /v2/integrations/google_ads/recommendations/ | Get Recommendations |
| [**importGoogleAdsCampaigns()**](GoogleAdsApi.md#importGoogleAdsCampaigns) | **POST** /v2/integrations/google_ads/campaigns/import | Import Google Ads Campaigns |
| [**importGoogleAdsCustomers()**](GoogleAdsApi.md#importGoogleAdsCustomers) | **POST** /v2/integrations/google_ads/customers/import | Import Google Ads Customers |
| [**importGoogleAdsGroups()**](GoogleAdsApi.md#importGoogleAdsGroups) | **POST** /v2/integrations/google_ads/groups/import | Import Google Ads Groups |
| [**removeKeywordFromGroup()**](GoogleAdsApi.md#removeKeywordFromGroup) | **POST** /v2/integrations/google_ads/keyword/remove_from_group | Remove Keyword From Group |
| [**updateGoogleAdsCampaign()**](GoogleAdsApi.md#updateGoogleAdsCampaign) | **PUT** /v2/integrations/google_ads/campaigns/{customer_id}/{campaign_id} | Update Google Ads Campaign |
| [**updateGoogleAdsCustomerUpdate()**](GoogleAdsApi.md#updateGoogleAdsCustomerUpdate) | **PUT** /v2/integrations/google_ads/customers/{customer_id} | Update Google Ads Customer Update |
| [**updateGoogleAdsGroup()**](GoogleAdsApi.md#updateGoogleAdsGroup) | **PUT** /v2/integrations/google_ads/groups/{customer_id}/{campaign_id}/{group_id} | Update Google Ads Group |


## `addKeywordToGroup()`

```php
addKeywordToGroup($workspace_id, $google_ads_keyword_add_request): \FlowHunt\Model\Completed
```

Add Keyword To Group

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


$apiInstance = new FlowHunt\Api\GoogleAdsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$google_ads_keyword_add_request = new \FlowHunt\Model\GoogleAdsKeywordAddRequest(); // \FlowHunt\Model\GoogleAdsKeywordAddRequest

try {
    $result = $apiInstance->addKeywordToGroup($workspace_id, $google_ads_keyword_add_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GoogleAdsApi->addKeywordToGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **google_ads_keyword_add_request** | [**\FlowHunt\Model\GoogleAdsKeywordAddRequest**](../Model/GoogleAdsKeywordAddRequest.md)|  | |

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

## `analyzeNotAssignedKeywords()`

```php
analyzeNotAssignedKeywords($workspace_id, $google_ads_analyze_keywords_request): \FlowHunt\Model\Completed
```

Analyze Not Assigned Keywords

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


$apiInstance = new FlowHunt\Api\GoogleAdsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$google_ads_analyze_keywords_request = new \FlowHunt\Model\GoogleAdsAnalyzeKeywordsRequest(); // \FlowHunt\Model\GoogleAdsAnalyzeKeywordsRequest

try {
    $result = $apiInstance->analyzeNotAssignedKeywords($workspace_id, $google_ads_analyze_keywords_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GoogleAdsApi->analyzeNotAssignedKeywords: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **google_ads_analyze_keywords_request** | [**\FlowHunt\Model\GoogleAdsAnalyzeKeywordsRequest**](../Model/GoogleAdsAnalyzeKeywordsRequest.md)|  | |

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

## `getGoogleAdsCampaigns()`

```php
getGoogleAdsCampaigns($workspace_id, $google_ads_campaigns_search_request): \FlowHunt\Model\GoogleAdsCampaignResponse[]
```

Get Google Ads Campaigns

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


$apiInstance = new FlowHunt\Api\GoogleAdsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$google_ads_campaigns_search_request = new \FlowHunt\Model\GoogleAdsCampaignsSearchRequest(); // \FlowHunt\Model\GoogleAdsCampaignsSearchRequest

try {
    $result = $apiInstance->getGoogleAdsCampaigns($workspace_id, $google_ads_campaigns_search_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GoogleAdsApi->getGoogleAdsCampaigns: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **google_ads_campaigns_search_request** | [**\FlowHunt\Model\GoogleAdsCampaignsSearchRequest**](../Model/GoogleAdsCampaignsSearchRequest.md)|  | |

### Return type

[**\FlowHunt\Model\GoogleAdsCampaignResponse[]**](../Model/GoogleAdsCampaignResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGoogleAdsCustomers()`

```php
getGoogleAdsCustomers($workspace_id, $google_ads_customers_search_request): \FlowHunt\Model\GoogleAdsCustomersResponse
```

Get Google Ads Customers

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


$apiInstance = new FlowHunt\Api\GoogleAdsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$google_ads_customers_search_request = new \FlowHunt\Model\GoogleAdsCustomersSearchRequest(); // \FlowHunt\Model\GoogleAdsCustomersSearchRequest

try {
    $result = $apiInstance->getGoogleAdsCustomers($workspace_id, $google_ads_customers_search_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GoogleAdsApi->getGoogleAdsCustomers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **google_ads_customers_search_request** | [**\FlowHunt\Model\GoogleAdsCustomersSearchRequest**](../Model/GoogleAdsCustomersSearchRequest.md)|  | |

### Return type

[**\FlowHunt\Model\GoogleAdsCustomersResponse**](../Model/GoogleAdsCustomersResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGoogleAdsGroups()`

```php
getGoogleAdsGroups($workspace_id, $google_ads_groups_search_request): \FlowHunt\Model\GoogleAdsGroupResponse[]
```

Get Google Ads Groups

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


$apiInstance = new FlowHunt\Api\GoogleAdsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$google_ads_groups_search_request = new \FlowHunt\Model\GoogleAdsGroupsSearchRequest(); // \FlowHunt\Model\GoogleAdsGroupsSearchRequest

try {
    $result = $apiInstance->getGoogleAdsGroups($workspace_id, $google_ads_groups_search_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GoogleAdsApi->getGoogleAdsGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **google_ads_groups_search_request** | [**\FlowHunt\Model\GoogleAdsGroupsSearchRequest**](../Model/GoogleAdsGroupsSearchRequest.md)|  | |

### Return type

[**\FlowHunt\Model\GoogleAdsGroupResponse[]**](../Model/GoogleAdsGroupResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRecommendations()`

```php
getRecommendations($workspace_id, $google_ads_recommendations_request): \FlowHunt\Model\GoogleAdsKeywordRecommendation[]
```

Get Recommendations

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


$apiInstance = new FlowHunt\Api\GoogleAdsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$google_ads_recommendations_request = new \FlowHunt\Model\GoogleAdsRecommendationsRequest(); // \FlowHunt\Model\GoogleAdsRecommendationsRequest

try {
    $result = $apiInstance->getRecommendations($workspace_id, $google_ads_recommendations_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GoogleAdsApi->getRecommendations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **google_ads_recommendations_request** | [**\FlowHunt\Model\GoogleAdsRecommendationsRequest**](../Model/GoogleAdsRecommendationsRequest.md)|  | |

### Return type

[**\FlowHunt\Model\GoogleAdsKeywordRecommendation[]**](../Model/GoogleAdsKeywordRecommendation.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `importGoogleAdsCampaigns()`

```php
importGoogleAdsCampaigns($workspace_id, $google_ads_campaigns_search_request): \FlowHunt\Model\GoogleAdsCampaignsResponse
```

Import Google Ads Campaigns

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


$apiInstance = new FlowHunt\Api\GoogleAdsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$google_ads_campaigns_search_request = new \FlowHunt\Model\GoogleAdsCampaignsSearchRequest(); // \FlowHunt\Model\GoogleAdsCampaignsSearchRequest

try {
    $result = $apiInstance->importGoogleAdsCampaigns($workspace_id, $google_ads_campaigns_search_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GoogleAdsApi->importGoogleAdsCampaigns: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **google_ads_campaigns_search_request** | [**\FlowHunt\Model\GoogleAdsCampaignsSearchRequest**](../Model/GoogleAdsCampaignsSearchRequest.md)|  | |

### Return type

[**\FlowHunt\Model\GoogleAdsCampaignsResponse**](../Model/GoogleAdsCampaignsResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `importGoogleAdsCustomers()`

```php
importGoogleAdsCustomers($workspace_id): \FlowHunt\Model\GoogleAdsCustomersResponse
```

Import Google Ads Customers

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


$apiInstance = new FlowHunt\Api\GoogleAdsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->importGoogleAdsCustomers($workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GoogleAdsApi->importGoogleAdsCustomers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |

### Return type

[**\FlowHunt\Model\GoogleAdsCustomersResponse**](../Model/GoogleAdsCustomersResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `importGoogleAdsGroups()`

```php
importGoogleAdsGroups($workspace_id, $google_ads_groups_search_request): \FlowHunt\Model\GoogleAdsGroupsResponse
```

Import Google Ads Groups

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


$apiInstance = new FlowHunt\Api\GoogleAdsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$google_ads_groups_search_request = new \FlowHunt\Model\GoogleAdsGroupsSearchRequest(); // \FlowHunt\Model\GoogleAdsGroupsSearchRequest

try {
    $result = $apiInstance->importGoogleAdsGroups($workspace_id, $google_ads_groups_search_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GoogleAdsApi->importGoogleAdsGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **google_ads_groups_search_request** | [**\FlowHunt\Model\GoogleAdsGroupsSearchRequest**](../Model/GoogleAdsGroupsSearchRequest.md)|  | |

### Return type

[**\FlowHunt\Model\GoogleAdsGroupsResponse**](../Model/GoogleAdsGroupsResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeKeywordFromGroup()`

```php
removeKeywordFromGroup($workspace_id, $google_ads_keyword_remove_request): \FlowHunt\Model\Completed
```

Remove Keyword From Group

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


$apiInstance = new FlowHunt\Api\GoogleAdsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$google_ads_keyword_remove_request = new \FlowHunt\Model\GoogleAdsKeywordRemoveRequest(); // \FlowHunt\Model\GoogleAdsKeywordRemoveRequest

try {
    $result = $apiInstance->removeKeywordFromGroup($workspace_id, $google_ads_keyword_remove_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GoogleAdsApi->removeKeywordFromGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **google_ads_keyword_remove_request** | [**\FlowHunt\Model\GoogleAdsKeywordRemoveRequest**](../Model/GoogleAdsKeywordRemoveRequest.md)|  | |

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

## `updateGoogleAdsCampaign()`

```php
updateGoogleAdsCampaign($customer_id, $campaign_id, $workspace_id, $google_ads_campaign_update_request): \FlowHunt\Model\GoogleAdsCampaignResponse
```

Update Google Ads Campaign

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


$apiInstance = new FlowHunt\Api\GoogleAdsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = 'customer_id_example'; // string
$campaign_id = 'campaign_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$google_ads_campaign_update_request = new \FlowHunt\Model\GoogleAdsCampaignUpdateRequest(); // \FlowHunt\Model\GoogleAdsCampaignUpdateRequest

try {
    $result = $apiInstance->updateGoogleAdsCampaign($customer_id, $campaign_id, $workspace_id, $google_ads_campaign_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GoogleAdsApi->updateGoogleAdsCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_id** | **string**|  | |
| **campaign_id** | **string**|  | |
| **workspace_id** | **string**|  | |
| **google_ads_campaign_update_request** | [**\FlowHunt\Model\GoogleAdsCampaignUpdateRequest**](../Model/GoogleAdsCampaignUpdateRequest.md)|  | |

### Return type

[**\FlowHunt\Model\GoogleAdsCampaignResponse**](../Model/GoogleAdsCampaignResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateGoogleAdsCustomerUpdate()`

```php
updateGoogleAdsCustomerUpdate($customer_id, $workspace_id, $google_ads_customer_update_request): \FlowHunt\Model\GoogleAdsCustomerResponse
```

Update Google Ads Customer Update

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


$apiInstance = new FlowHunt\Api\GoogleAdsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = 'customer_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$google_ads_customer_update_request = new \FlowHunt\Model\GoogleAdsCustomerUpdateRequest(); // \FlowHunt\Model\GoogleAdsCustomerUpdateRequest

try {
    $result = $apiInstance->updateGoogleAdsCustomerUpdate($customer_id, $workspace_id, $google_ads_customer_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GoogleAdsApi->updateGoogleAdsCustomerUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_id** | **string**|  | |
| **workspace_id** | **string**|  | |
| **google_ads_customer_update_request** | [**\FlowHunt\Model\GoogleAdsCustomerUpdateRequest**](../Model/GoogleAdsCustomerUpdateRequest.md)|  | |

### Return type

[**\FlowHunt\Model\GoogleAdsCustomerResponse**](../Model/GoogleAdsCustomerResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateGoogleAdsGroup()`

```php
updateGoogleAdsGroup($customer_id, $campaign_id, $group_id, $workspace_id, $google_ads_group_update_request): \FlowHunt\Model\GoogleAdsGroupResponse
```

Update Google Ads Group

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


$apiInstance = new FlowHunt\Api\GoogleAdsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = 'customer_id_example'; // string
$campaign_id = 'campaign_id_example'; // string
$group_id = 'group_id_example'; // string
$workspace_id = 'workspace_id_example'; // string
$google_ads_group_update_request = new \FlowHunt\Model\GoogleAdsGroupUpdateRequest(); // \FlowHunt\Model\GoogleAdsGroupUpdateRequest

try {
    $result = $apiInstance->updateGoogleAdsGroup($customer_id, $campaign_id, $group_id, $workspace_id, $google_ads_group_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GoogleAdsApi->updateGoogleAdsGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_id** | **string**|  | |
| **campaign_id** | **string**|  | |
| **group_id** | **string**|  | |
| **workspace_id** | **string**|  | |
| **google_ads_group_update_request** | [**\FlowHunt\Model\GoogleAdsGroupUpdateRequest**](../Model/GoogleAdsGroupUpdateRequest.md)|  | |

### Return type

[**\FlowHunt\Model\GoogleAdsGroupResponse**](../Model/GoogleAdsGroupResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
