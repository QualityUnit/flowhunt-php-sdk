# # Metadata

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**message_id** | **string** | Message ID |
**message** | **string** | Message |
**sender** | [**\FlowHunt\Model\HumanAgentSender**](HumanAgentSender.md) |  | [optional]
**tool_name** | **string** | Tool name |
**loading_desc** | **string** | Loading description |
**icon** | **string** |  | [optional]
**color** | **string** |  | [optional]
**detailed_description** | **string** |  | [optional]
**feedback_message_id** | **string** | Message ID |
**feedback** | [**\FlowHunt\Model\MessageFeedback**](MessageFeedback.md) |  | [optional]
**agent_query** | **string** | Tool input arguments |
**tool_response** | **string** | Tool response |
**task_name** | **string** |  |
**task_input** | **string** |  |
**agent** | **string** |  |
**task_response** | **string** |  |
**artefacts** | [**\FlowHunt\Model\FlowSessionArtefactInfo[]**](FlowSessionArtefactInfo.md) | List of artefact files created by agent |
**cot_id** | **string** | Unique CoT identifier for updates |
**content** | **string** | Chain of thought / reasoning text |
**todo_id** | **string** | Unique todo list identifier for updates |
**todos** | [**\FlowHunt\Model\TodoItem[]**](TodoItem.md) | List of todo items |
**action_description** | **string** |  | [optional]
**duration_ms** | **int** |  | [optional]
**stage** | **string** | Initialization stage (e.g., &#39;starting&#39;, &#39;creating_agent&#39;, &#39;ready&#39;) |
**hook_id** | **string** | Hook ID for resuming the hook |
**hook_name** | **string** | Hook name (e.g., &#39;wait_for_user_input&#39;) |
**prompt_message** | **string** | Message to show the user |
**action_id** | **string** | Action ID |
**component_id** | **string** | Component ID |
**component_type** | **string** | Component name |
**component_display_name** | **string** |  | [optional]
**component_icon** | **string** |  | [optional]
**parameter_values** | **array<string,mixed>** |  | [optional]
**source_component_id** | **string** | Source component ID |
**target_component_id** | **string** | Target component ID |
**source_field_name** | **string** |  | [optional]
**target_field_name** | **string** |  | [optional]
**flow_name** | **string** | Agent name |
**flow_description** | **string** |  | [optional]
**flow_id** | **string** | Agent ID |
**file_id** | **string** | File ID |
**file_name** | **string** | File name |
**file_type** | **string** |  | [optional]
**document_type** | [**\FlowHunt\Model\DocumentType**](DocumentType.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
