# FlowHunt\WebAuthApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**activateAccount()**](WebAuthApi.md#activateAccount) | **GET** /v2/auth/activate | Activate Account |
| [**getUser()**](WebAuthApi.md#getUser) | **GET** /v2/auth/me | Get User |
| [**passwordRecoveryPage()**](WebAuthApi.md#passwordRecoveryPage) | **GET** /v2/auth/recover-password | Password Recovery Page |
| [**passwordRecoverySubmit()**](WebAuthApi.md#passwordRecoverySubmit) | **POST** /v2/auth/recover-password | Password Recovery Submit |
| [**registerPage()**](WebAuthApi.md#registerPage) | **GET** /v2/auth/register | Register Page |
| [**registerSubmit()**](WebAuthApi.md#registerSubmit) | **POST** /v2/auth/register | Register Submit |
| [**resetPasswordPage()**](WebAuthApi.md#resetPasswordPage) | **GET** /v2/auth/reset-password | Reset Password Page |
| [**resetPasswordSubmit()**](WebAuthApi.md#resetPasswordSubmit) | **POST** /v2/auth/reset-password | Reset Password Submit |


## `activateAccount()`

```php
activateAccount($token): mixed
```

Activate Account

Activate user account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FlowHunt\Api\WebAuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = 'token_example'; // string

try {
    $result = $apiInstance->activateAccount($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebAuthApi->activateAccount: ', $e->getMessage(), PHP_EOL;
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

## `getUser()`

```php
getUser(): \FlowHunt\Model\UserResponse
```

Get User

Get current authenticated user details.  This endpoint returns the current user's details including their product plans and API key workspace information. It follows DDD principles by delegating the business logic to the application service layer.  Args:     user: The current authenticated user (injected by dependency)     request: The HTTP request object     user_service: The user application service (injected by dependency)  Returns:     UserResponse: The user details response

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


$apiInstance = new FlowHunt\Api\WebAuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getUser();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebAuthApi->getUser: ', $e->getMessage(), PHP_EOL;
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

## `passwordRecoveryPage()`

```php
passwordRecoveryPage(): mixed
```

Password Recovery Page

Password recovery page

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FlowHunt\Api\WebAuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->passwordRecoveryPage();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebAuthApi->passwordRecoveryPage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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

## `passwordRecoverySubmit()`

```php
passwordRecoverySubmit($email): mixed
```

Password Recovery Submit

Handle password recovery form submission

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FlowHunt\Api\WebAuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$email = 'email_example'; // string

try {
    $result = $apiInstance->passwordRecoverySubmit($email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebAuthApi->passwordRecoverySubmit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **email** | **string**|  | |

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `registerPage()`

```php
registerPage($next): mixed
```

Register Page

Registration page

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FlowHunt\Api\WebAuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$next = 'next_example'; // string

try {
    $result = $apiInstance->registerPage($next);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebAuthApi->registerPage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **next** | **string**|  | [optional] |

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

## `registerSubmit()`

```php
registerSubmit($name, $email, $password, $next): mixed
```

Register Submit

Handle registration form submission

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FlowHunt\Api\WebAuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = 'name_example'; // string
$email = 'email_example'; // string
$password = 'password_example'; // string
$next = '/'; // string

try {
    $result = $apiInstance->registerSubmit($name, $email, $password, $next);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebAuthApi->registerSubmit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**|  | |
| **email** | **string**|  | |
| **password** | **string**|  | |
| **next** | **string**|  | [optional] [default to &#39;/&#39;] |

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `resetPasswordPage()`

```php
resetPasswordPage($token): mixed
```

Reset Password Page

Reset password page

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FlowHunt\Api\WebAuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = 'token_example'; // string

try {
    $result = $apiInstance->resetPasswordPage($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebAuthApi->resetPasswordPage: ', $e->getMessage(), PHP_EOL;
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

## `resetPasswordSubmit()`

```php
resetPasswordSubmit($token, $password, $confirm_password): mixed
```

Reset Password Submit

Handle reset password form submission

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FlowHunt\Api\WebAuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = 'token_example'; // string
$password = 'password_example'; // string
$confirm_password = 'confirm_password_example'; // string

try {
    $result = $apiInstance->resetPasswordSubmit($token, $password, $confirm_password);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebAuthApi->resetPasswordSubmit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **token** | **string**|  | |
| **password** | **string**|  | |
| **confirm_password** | **string**|  | |

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
