# FlowHunt\MeApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**completeUserOnboarding()**](MeApi.md#completeUserOnboarding) | **PATCH** /v2/users/me/onboarding | Complete User Onboarding |
| [**getUserOnboarding()**](MeApi.md#getUserOnboarding) | **GET** /v2/users/me/onboarding | Get User Onboarding |


## `completeUserOnboarding()`

```php
completeUserOnboarding($complete_onboarding_request): \FlowHunt\Model\OnboardingStateResponse
```

Complete User Onboarding

Mark onboarding complete with the user's selected primary goal.

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


$apiInstance = new FlowHunt\Api\MeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$complete_onboarding_request = new \FlowHunt\Model\CompleteOnboardingRequest(); // \FlowHunt\Model\CompleteOnboardingRequest

try {
    $result = $apiInstance->completeUserOnboarding($complete_onboarding_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeApi->completeUserOnboarding: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **complete_onboarding_request** | [**\FlowHunt\Model\CompleteOnboardingRequest**](../Model/CompleteOnboardingRequest.md)|  | |

### Return type

[**\FlowHunt\Model\OnboardingStateResponse**](../Model/OnboardingStateResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUserOnboarding()`

```php
getUserOnboarding(): \FlowHunt\Model\OnboardingStateResponse
```

Get User Onboarding

Return the current user's onboarding state.

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


$apiInstance = new FlowHunt\Api\MeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getUserOnboarding();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeApi->getUserOnboarding: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\FlowHunt\Model\OnboardingStateResponse**](../Model/OnboardingStateResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
