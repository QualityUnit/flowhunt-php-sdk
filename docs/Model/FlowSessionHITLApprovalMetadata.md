# # FlowSessionHITLApprovalMetadata

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**hook_id** | **string** | Hook ID for resuming the hook |
**hitl_id** | **string** | HITL request ID for correlation | [optional] [default to '']
**tool_name** | **string** | Name of the tool requiring approval |
**tool_args** | **array<string,mixed>** | Arguments the tool would be called with |
**tool_description** | **string** | Description of the tool | [optional] [default to '']
**channel** | **string** | Notification channel type | [optional] [default to 'flowhunt']
**channel_config** | **array<string,mixed>** | Channel-specific configuration | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
