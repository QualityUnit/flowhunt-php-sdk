# # LogResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**log_id** | **string** | Unique identifier for the log entry |
**log_type** | [**\FlowHunt\Model\LogEntryType**](LogEntryType.md) | Type of log (e.g., &#39;system&#39;, &#39;application&#39;, &#39;user&#39;) |
**category_id** | **string** |  | [optional]
**log_level** | [**\FlowHunt\Model\LogEntryLevel**](LogEntryLevel.md) | Log level (e.g., &#39;info&#39;, &#39;warning&#39;, &#39;error&#39;, &#39;debug&#39;) |
**message** | **string** | Log message content |
**created_at** | **\DateTime** | Timestamp when the log was created |
**metadata** | **array<string,mixed>** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
