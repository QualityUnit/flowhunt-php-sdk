# # V3ToolResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**step_name** | **string** | Internal step name (e.g., &#39;Separator&#39;) |
**tool_name** | **string** | Tool name for AI agents (e.g., &#39;split_text&#39;) |
**tool_description** | **string** | Tool description for AI agents |
**display_name** | **string** | Display name for UI |
**category** | **string** | Tool category (e.g., &#39;data_processing&#39;, &#39;airtable&#39;) |
**icon** | **string** | Icon identifier |
**beta** | **bool** | Whether this tool is in beta | [optional] [default to false]
**least_available_plan** | **string** | Minimum subscription plan: T/S/P/E | [optional] [default to 'T']
**is_hitl** | **bool** | Whether this tool requires human-in-the-loop approval | [optional] [default to false]
**parameters** | [**\FlowHunt\Model\V3ToolParameterResponse[]**](V3ToolParameterResponse.md) | Tool parameters | [optional]
**exclusive_groups** | [**array<string,\FlowHunt\Model\V3ExclusiveGroupResponse>**](V3ExclusiveGroupResponse.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
