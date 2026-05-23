# # Metadata

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**message_id** | **string** | Message ID |
**message** | **string** | User-facing message explaining why access is needed | [default to '']
**sender** | [**\FlowHunt\Model\HumanAgentSender**](HumanAgentSender.md) |  | [optional]
**tool_name** | **string** | Name of the tool requiring approval |
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
**agent_name** | **string** | Name of the agent |
**agent_type** | **string** | Agent type: supervisor, lead, or worker |
**model** | **string** | LLM model name used by the agent |
**task** | **string** | The full prompt sent to the subagent. |
**started_by** | **string** | Name of the agent that initiated this delegation. |
**target_agent** | **string** | Name of the subagent receiving the task. |
**todo_id** | **string** | Unique todo list identifier for updates |
**todos** | [**\FlowHunt\Model\TodoItem[]**](TodoItem.md) | List of todo items |
**action_description** | **string** |  | [optional]
**duration_ms** | **int** |  | [optional]
**stage** | **string** | Initialization stage (e.g., &#39;starting&#39;, &#39;creating_agent&#39;, &#39;ready&#39;) |
**hook_id** | **string** | Hook ID for resuming the hook |
**hook_name** | **string** | Internal pyworkflow hook name |
**prompt_message** | **string** | Message to show the user |
**script** | **string** | JS expression to evaluate in the visitor&#39;s browser |
**timeout_ms** | **int** | Maximum time the widget should wait before returning a timeout error | [optional] [default to 5000]
**request_id** | **string** | Correlates the request with the response posted back from the widget |
**hitl_id** | **string** | HITL request ID for correlation | [optional] [default to '']
**tool_args** | **array<string,mixed>** | Arguments the tool would be called with |
**tool_description** | **string** | Description of the tool | [optional] [default to '']
**channel** | **string** | Notification channel type | [optional] [default to 'flowhunt']
**channel_config** | **array<string,mixed>** | Channel-specific configuration | [optional]
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
**document_type** | **string** | Type of document (e.g., google_sheets) |
**slug** | **string** | Integration slug that is missing |
**integration_url** | **string** | URL for the user to set up the integration |
**document_id** | **string** | ID of the document requiring access |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
