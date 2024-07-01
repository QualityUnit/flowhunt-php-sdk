# OpenAPI\Client\VideosApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getYoutubeTranscript()**](VideosApi.md#getYoutubeTranscript) | **POST** /v2/videos/youtube/transcript | Get Youtube Transcript |


## `getYoutubeTranscript()`

```php
getYoutubeTranscript($workspace_id, $youtube_transcript_request): \OpenAPI\Client\Model\YoutubeTranscriptResponse
```

Get Youtube Transcript

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


$apiInstance = new OpenAPI\Client\Api\VideosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$youtube_transcript_request = new \OpenAPI\Client\Model\YoutubeTranscriptRequest(); // \OpenAPI\Client\Model\YoutubeTranscriptRequest

try {
    $result = $apiInstance->getYoutubeTranscript($workspace_id, $youtube_transcript_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VideosApi->getYoutubeTranscript: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **youtube_transcript_request** | [**\OpenAPI\Client\Model\YoutubeTranscriptRequest**](../Model/YoutubeTranscriptRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\YoutubeTranscriptResponse**](../Model/YoutubeTranscriptResponse.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader), [HTTPBearer](../../README.md#HTTPBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
