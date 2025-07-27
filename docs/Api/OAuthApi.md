# FlowHunt\OAuthApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**oauthAuthorize()**](OAuthApi.md#oauthAuthorize) | **GET** /v2/auth/oauth/authorize | Oauth Authorize |
| [**oauthAuthorizePost()**](OAuthApi.md#oauthAuthorizePost) | **POST** /v2/auth/oauth/authorize | Oauth Authorize Post |
| [**oauthCallback()**](OAuthApi.md#oauthCallback) | **GET** /v2/auth/oauth/callback | Oauth Callback |
| [**oauthLogin()**](OAuthApi.md#oauthLogin) | **GET** /v2/auth/oauth/login | Oauth Login |
| [**oauthLoginGithub()**](OAuthApi.md#oauthLoginGithub) | **GET** /v2/auth/oauth/login/github | Oauth Login Github |
| [**oauthLoginGoogle()**](OAuthApi.md#oauthLoginGoogle) | **GET** /v2/auth/oauth/login/google | Oauth Login Google |
| [**oauthLoginPost()**](OAuthApi.md#oauthLoginPost) | **POST** /v2/auth/oauth/login | Oauth Login Post |
| [**oauthLoginShopify()**](OAuthApi.md#oauthLoginShopify) | **GET** /v2/auth/oauth/login/shopify | Oauth Login Shopify |
| [**oauthLogout()**](OAuthApi.md#oauthLogout) | **GET** /v2/auth/oauth/logout | Oauth Logout |
| [**oauthRevoke()**](OAuthApi.md#oauthRevoke) | **POST** /v2/auth/oauth/revoke | Oauth Revoke |
| [**oauthToken()**](OAuthApi.md#oauthToken) | **POST** /v2/auth/oauth/token | Oauth Token |
| [**oauthUserinfo()**](OAuthApi.md#oauthUserinfo) | **GET** /v2/auth/oauth/userinfo | Oauth Userinfo |
| [**samlCallback()**](OAuthApi.md#samlCallback) | **POST** /v2/auth/oauth/callback/saml/{random_id} | Saml Callback |


## `oauthAuthorize()`

```php
oauthAuthorize(): mixed
```

Oauth Authorize

OAuth authorization endpoint

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FlowHunt\Api\OAuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->oauthAuthorize();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OAuthApi->oauthAuthorize: ', $e->getMessage(), PHP_EOL;
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

## `oauthAuthorizePost()`

```php
oauthAuthorizePost(): mixed
```

Oauth Authorize Post

OAuth authorization endpoint (consent form submission)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FlowHunt\Api\OAuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->oauthAuthorizePost();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OAuthApi->oauthAuthorizePost: ', $e->getMessage(), PHP_EOL;
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

## `oauthCallback()`

```php
oauthCallback(): mixed
```

Oauth Callback

OAuth callback endpoint for third-party providers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FlowHunt\Api\OAuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->oauthCallback();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OAuthApi->oauthCallback: ', $e->getMessage(), PHP_EOL;
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

## `oauthLogin()`

```php
oauthLogin(): mixed
```

Oauth Login

OAuth login page

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FlowHunt\Api\OAuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->oauthLogin();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OAuthApi->oauthLogin: ', $e->getMessage(), PHP_EOL;
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

## `oauthLoginGithub()`

```php
oauthLoginGithub(): mixed
```

Oauth Login Github

OAuth login with GitHub

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FlowHunt\Api\OAuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->oauthLoginGithub();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OAuthApi->oauthLoginGithub: ', $e->getMessage(), PHP_EOL;
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

## `oauthLoginGoogle()`

```php
oauthLoginGoogle(): mixed
```

Oauth Login Google

OAuth login with Google

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FlowHunt\Api\OAuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->oauthLoginGoogle();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OAuthApi->oauthLoginGoogle: ', $e->getMessage(), PHP_EOL;
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

## `oauthLoginPost()`

```php
oauthLoginPost(): mixed
```

Oauth Login Post

OAuth login form submission

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FlowHunt\Api\OAuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->oauthLoginPost();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OAuthApi->oauthLoginPost: ', $e->getMessage(), PHP_EOL;
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

## `oauthLoginShopify()`

```php
oauthLoginShopify(): mixed
```

Oauth Login Shopify

OAuth login with Shopify for app installation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FlowHunt\Api\OAuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->oauthLoginShopify();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OAuthApi->oauthLoginShopify: ', $e->getMessage(), PHP_EOL;
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

## `oauthLogout()`

```php
oauthLogout(): mixed
```

Oauth Logout

OAuth logout endpoint - revokes tokens, clears session and redirects to specified URL

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FlowHunt\Api\OAuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->oauthLogout();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OAuthApi->oauthLogout: ', $e->getMessage(), PHP_EOL;
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

## `oauthRevoke()`

```php
oauthRevoke(): mixed
```

Oauth Revoke

OAuth token revocation endpoint

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FlowHunt\Api\OAuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->oauthRevoke();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OAuthApi->oauthRevoke: ', $e->getMessage(), PHP_EOL;
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

## `oauthToken()`

```php
oauthToken(): mixed
```

Oauth Token

OAuth token endpoint

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FlowHunt\Api\OAuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->oauthToken();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OAuthApi->oauthToken: ', $e->getMessage(), PHP_EOL;
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

## `oauthUserinfo()`

```php
oauthUserinfo(): mixed
```

Oauth Userinfo

OpenID Connect userinfo endpoint

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FlowHunt\Api\OAuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->oauthUserinfo();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OAuthApi->oauthUserinfo: ', $e->getMessage(), PHP_EOL;
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

## `samlCallback()`

```php
samlCallback($random_id, $workspace_id): mixed
```

Saml Callback

SAML callback endpoint (Assertion Consumer Service) Handles the SAML response from the Identity Provider after successful authentication

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FlowHunt\Api\OAuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$random_id = 'random_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->samlCallback($random_id, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OAuthApi->samlCallback: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **random_id** | **string**|  | |
| **workspace_id** | **string**|  | [optional] |

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
