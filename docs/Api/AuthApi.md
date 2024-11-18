# FlowHunt\AuthApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**activateUser()**](AuthApi.md#activateUser) | **GET** /v2/auth/activate | Activate User |
| [**getThirdPartyToken()**](AuthApi.md#getThirdPartyToken) | **POST** /v2/auth/token/{provider_name} | Get Third Party Token |
| [**getToken()**](AuthApi.md#getToken) | **POST** /v2/auth/token | Get Token |
| [**getUser()**](AuthApi.md#getUser) | **GET** /v2/auth/me | Get User |
| [**recoverPassword()**](AuthApi.md#recoverPassword) | **POST** /v2/auth/password-recovery/{email} | Recover Password |
| [**refreshToken()**](AuthApi.md#refreshToken) | **POST** /v2/auth/refresh-token | Refresh Token |
| [**registerUser()**](AuthApi.md#registerUser) | **POST** /v2/auth/ | Register User |
| [**resetPassword()**](AuthApi.md#resetPassword) | **POST** /v2/auth/reset-password | Reset Password |


## `activateUser()`

```php
activateUser($token): mixed
```

Activate User

Activate User :param token: :param auth_controller: :return:

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FlowHunt\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = 'token_example'; // string

try {
    $result = $apiInstance->activateUser($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->activateUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **token** | **string**|  | |

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getThirdPartyToken()`

```php
getThirdPartyToken($provider_name, $thrid_party_login_request): \FlowHunt\Model\UserTokenResponse
```

Get Third Party Token

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sudo_api_key_header
$config = FlowHunt\Configuration::getDefaultConfiguration()->setApiKey('Sudo-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FlowHunt\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Sudo-Api-Key', 'Bearer');


$apiInstance = new FlowHunt\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$provider_name = 'provider_name_example'; // string
$thrid_party_login_request = new \FlowHunt\Model\ThridPartyLoginRequest(); // \FlowHunt\Model\ThridPartyLoginRequest

try {
    $result = $apiInstance->getThirdPartyToken($provider_name, $thrid_party_login_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->getThirdPartyToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **provider_name** | **string**|  | |
| **thrid_party_login_request** | [**\FlowHunt\Model\ThridPartyLoginRequest**](../Model/ThridPartyLoginRequest.md)|  | |

### Return type

[**\FlowHunt\Model\UserTokenResponse**](../Model/UserTokenResponse.md)

### Authorization

[sudo_api_key_header](../../README.md#sudo_api_key_header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getToken()`

```php
getToken($login_user_request): \FlowHunt\Model\UserTokenResponse
```

Get Token

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sudo_api_key_header
$config = FlowHunt\Configuration::getDefaultConfiguration()->setApiKey('Sudo-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FlowHunt\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Sudo-Api-Key', 'Bearer');


$apiInstance = new FlowHunt\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$login_user_request = new \FlowHunt\Model\LoginUserRequest(); // \FlowHunt\Model\LoginUserRequest

try {
    $result = $apiInstance->getToken($login_user_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->getToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **login_user_request** | [**\FlowHunt\Model\LoginUserRequest**](../Model/LoginUserRequest.md)|  | |

### Return type

[**\FlowHunt\Model\UserTokenResponse**](../Model/UserTokenResponse.md)

### Authorization

[sudo_api_key_header](../../README.md#sudo_api_key_header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUser()`

```php
getUser(): \FlowHunt\Model\UserResponse
```

Get User

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


$apiInstance = new FlowHunt\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getUser();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->getUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\FlowHunt\Model\UserResponse**](../Model/UserResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `recoverPassword()`

```php
recoverPassword($email): \FlowHunt\Model\Completed
```

Recover Password

Password Recovery

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FlowHunt\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$email = 'email_example'; // string

try {
    $result = $apiInstance->recoverPassword($email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->recoverPassword: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **email** | **string**|  | |

### Return type

[**\FlowHunt\Model\Completed**](../Model/Completed.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `refreshToken()`

```php
refreshToken($refresh_token_request): \FlowHunt\Model\Token
```

Refresh Token

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FlowHunt\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$refresh_token_request = new \FlowHunt\Model\RefreshTokenRequest(); // \FlowHunt\Model\RefreshTokenRequest

try {
    $result = $apiInstance->refreshToken($refresh_token_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->refreshToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **refresh_token_request** | [**\FlowHunt\Model\RefreshTokenRequest**](../Model/RefreshTokenRequest.md)|  | |

### Return type

[**\FlowHunt\Model\Token**](../Model/Token.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `registerUser()`

```php
registerUser($register_user_request): \FlowHunt\Model\Completed
```

Register User

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FlowHunt\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$register_user_request = new \FlowHunt\Model\RegisterUserRequest(); // \FlowHunt\Model\RegisterUserRequest

try {
    $result = $apiInstance->registerUser($register_user_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->registerUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **register_user_request** | [**\FlowHunt\Model\RegisterUserRequest**](../Model/RegisterUserRequest.md)|  | |

### Return type

[**\FlowHunt\Model\Completed**](../Model/Completed.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `resetPassword()`

```php
resetPassword($new_password_request): \FlowHunt\Model\Completed
```

Reset Password

Reset Password :param auth_controller: :param new_password: :return:

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FlowHunt\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$new_password_request = new \FlowHunt\Model\NewPasswordRequest(); // \FlowHunt\Model\NewPasswordRequest

try {
    $result = $apiInstance->resetPassword($new_password_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->resetPassword: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **new_password_request** | [**\FlowHunt\Model\NewPasswordRequest**](../Model/NewPasswordRequest.md)|  | |

### Return type

[**\FlowHunt\Model\Completed**](../Model/Completed.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
