# # V3ToolParameterResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Parameter name |
**display_name** | **string** | Display name for UI |
**description** | **string** | Parameter description | [optional] [default to '']
**field_type** | **string** | V3 field type (e.g., &#39;str&#39;, &#39;int&#39;, &#39;dict&#39;) |
**required** | **bool** | Whether the parameter is required | [optional] [default to false]
**default** | [**AnyOf**](AnyOf.md) | Default value | [optional]
**options** | **string[]** |  | [optional]
**range_spec** | **array<string,mixed>** |  | [optional]
**multiline** | **bool** |  | [optional]
**advanced** | **bool** |  | [optional]
**user_specified_param** | **bool** | If True, parameter must be set by user, not AI agent | [optional] [default to false]
**loading_options_api** | **string** |  | [optional]
**exclusive_group** | **string** |  | [optional]
**exclusive_label** | **string** |  | [optional]
**exclusive_order** | **int** |  | [optional]
**exclusive_default** | **bool** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
