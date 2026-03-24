# FlowHunt\ZendeskChannelApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**adminUi()**](ZendeskChannelApi.md#adminUi) | **POST** /v2/integrations/zendesk_channel/admin_ui | Admin Ui |
| [**channelback()**](ZendeskChannelApi.md#channelback) | **POST** /v2/integrations/zendesk_channel/channelback | Channelback |
| [**eventsCallback()**](ZendeskChannelApi.md#eventsCallback) | **POST** /v2/integrations/zendesk_channel/events | Events Callback |
| [**manifest()**](ZendeskChannelApi.md#manifest) | **GET** /v2/integrations/zendesk_channel/manifest.json | Manifest |
| [**messagingWebhook()**](ZendeskChannelApi.md#messagingWebhook) | **POST** /v2/integrations/zendesk_channel/messaging_webhook | Messaging Webhook |
| [**messagingWebhookHead()**](ZendeskChannelApi.md#messagingWebhookHead) | **HEAD** /v2/integrations/zendesk_channel/messaging_webhook | Messaging Webhook Head |


## `adminUi()`

```php
adminUi(): string
```

Admin Ui

Zendesk Channel Framework admin UI callback.  Zendesk sends a URL-encoded form POST with account information.  We persist the push credentials on the matching integration record and return a small HTML page that auto-submits back to Zendesk's ``return_url``.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FlowHunt\Api\ZendeskChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->adminUi();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZendeskChannelApi->adminUi: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `channelback()`

```php
channelback(): mixed
```

Channelback

Zendesk Channel Framework channelback endpoint.  Called by Zendesk when an agent replies to a ticket that was created via the Channel Framework push API.  The agent's message is routed back to the originating chat session.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FlowHunt\Api\ZendeskChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->channelback();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZendeskChannelApi->channelback: ', $e->getMessage(), PHP_EOL;
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

## `eventsCallback()`

```php
eventsCallback(): mixed
```

Events Callback

Zendesk Channel Framework event callback.  Receives event notifications from Zendesk (e.g. resource lifecycle events).  Logged for debugging and acknowledged with 200 OK.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FlowHunt\Api\ZendeskChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->eventsCallback();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZendeskChannelApi->eventsCallback: ', $e->getMessage(), PHP_EOL;
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

## `manifest()`

```php
manifest(): mixed
```

Manifest

Return the Zendesk Channel Framework manifest.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FlowHunt\Api\ZendeskChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->manifest();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZendeskChannelApi->manifest: ', $e->getMessage(), PHP_EOL;
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

## `messagingWebhook()`

```php
messagingWebhook(): mixed
```

Messaging Webhook

Zendesk Sunshine Conversations (Messaging API) webhook endpoint.  Receives webhook events from the Sunshine Conversations API: - conversation:message -- agent replies to escalated conversations - switchboard:passControl -- control handed back to our bot - switchboard:releaseControl -- agent releases control  Agent messages are routed back to the originating FlowHunt session via the ZendeskAgentReply trigger.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FlowHunt\Api\ZendeskChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->messagingWebhook();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZendeskChannelApi->messagingWebhook: ', $e->getMessage(), PHP_EOL;
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

## `messagingWebhookHead()`

```php
messagingWebhookHead(): mixed
```

Messaging Webhook Head

Health check endpoint for Zendesk webhook registration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FlowHunt\Api\ZendeskChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->messagingWebhookHead();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZendeskChannelApi->messagingWebhookHead: ', $e->getMessage(), PHP_EOL;
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
