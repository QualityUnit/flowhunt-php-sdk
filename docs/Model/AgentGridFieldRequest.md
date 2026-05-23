# # AgentGridFieldRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Field name (must be snake_case: lowercase letters, numbers, underscores only) |
**field_type** | [**\FlowHunt\Model\AgentGridFieldType**](AgentGridFieldType.md) | Field type |
**required** | **bool** | Whether the field is required | [optional] [default to false]
**unique** | **bool** | Whether the field is part of the unique-key set. Rows with the same composite values across all unique fields upsert in place instead of duplicating. Unique fields must also be required and cannot be of type boolean. | [optional] [default to false]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
