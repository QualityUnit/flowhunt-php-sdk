# # AgentTeamProjectResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Project ID |
**name** | **string** | Project name |
**description** | **string** |  | [optional]
**specification** | **string** |  | [optional]
**agents_spec** | **array<string,mixed>** |  | [optional]
**suggestions** | **array<string,mixed>[]** |  | [optional]
**color** | **string** |  | [optional]
**icon** | **string** |  | [optional]
**image_url** | **string** |  | [optional]
**channel_spec** | **array<string,mixed>** |  | [optional]
**created_at** | **\DateTime** | Created at |
**updated_at** | **\DateTime** |  | [optional]
**last_visited** | **\DateTime** |  | [optional]
**max_task_concurrency** | **int** |  | [optional]
**hitl_mode** | **string** | Tool approval mode: &#39;disabled&#39;, &#39;side_effects_only&#39;, or &#39;all_third_party&#39; | [optional] [default to 'disabled']
**hitl_approved_tools** | **string[]** |  | [optional]
**model_options** | **array<string,string[]>** |  | [optional]
**sandbox_enabled** | **bool** | Whether agents run inside an isolated sandbox container. | [optional] [default to false]
**sandbox_clone_url** | **string** |  | [optional]
**sandbox_clone_ref** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
