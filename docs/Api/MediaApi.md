# FlowHunt\MediaApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getTranscript()**](MediaApi.md#getTranscript) | **POST** /v2/media/transcript | Get Transcript |
| [**getTranscriptResult()**](MediaApi.md#getTranscriptResult) | **POST** /v2/media/transcript_status | Get Transcript Result |
| [**getYoutubeTranscript()**](MediaApi.md#getYoutubeTranscript) | **POST** /v2/media/youtube/transcript | Get Youtube Transcript |


## `getTranscript()`

```php
getTranscript($workspace_id, $file, $postback_url): \FlowHunt\Model\DocumentContentResponse
```

Get Transcript

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


$apiInstance = new FlowHunt\Api\MediaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$file = "/path/to/file.txt"; // \SplFileObject
$postback_url = 'postback_url_example'; // string | The post back URL where to send the response in body

try {
    $result = $apiInstance->getTranscript($workspace_id, $file, $postback_url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaApi->getTranscript: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **file** | **\SplFileObject****\SplFileObject**|  | |
| **postback_url** | **string**| The post back URL where to send the response in body | [optional] |

### Return type

[**\FlowHunt\Model\DocumentContentResponse**](../Model/DocumentContentResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTranscriptResult()`

```php
getTranscriptResult($workspace_id, $transcript_task_request): \FlowHunt\Model\DocumentContentResponse
```

Get Transcript Result

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


$apiInstance = new FlowHunt\Api\MediaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$transcript_task_request = new \FlowHunt\Model\TranscriptTaskRequest(); // \FlowHunt\Model\TranscriptTaskRequest

try {
    $result = $apiInstance->getTranscriptResult($workspace_id, $transcript_task_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaApi->getTranscriptResult: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **transcript_task_request** | [**\FlowHunt\Model\TranscriptTaskRequest**](../Model/TranscriptTaskRequest.md)|  | |

### Return type

[**\FlowHunt\Model\DocumentContentResponse**](../Model/DocumentContentResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getYoutubeTranscript()`

```php
getYoutubeTranscript($workspace_id, $youtube_transcript_request): \FlowHunt\Model\YoutubeTranscriptResponse
```

Get Youtube Transcript

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


$apiInstance = new FlowHunt\Api\MediaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$youtube_transcript_request = new \FlowHunt\Model\YoutubeTranscriptRequest(); // \FlowHunt\Model\YoutubeTranscriptRequest

try {
    $result = $apiInstance->getYoutubeTranscript($workspace_id, $youtube_transcript_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaApi->getYoutubeTranscript: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **youtube_transcript_request** | [**\FlowHunt\Model\YoutubeTranscriptRequest**](../Model/YoutubeTranscriptRequest.md)|  | |

### Return type

[**\FlowHunt\Model\YoutubeTranscriptResponse**](../Model/YoutubeTranscriptResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
