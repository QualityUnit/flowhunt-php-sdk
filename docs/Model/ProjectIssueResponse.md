# # ProjectIssueResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Issue ID |
**project_id** | **string** | Project ID |
**workspace_id** | **string** | Workspace ID |
**title** | **string** | Issue title |
**description** | **string** |  | [optional]
**status** | **string** | Issue status |
**issue_type** | **string** | Issue type | [optional] [default to 'normal']
**frequency** | **string** |  | [optional]
**next_run** | **string** |  | [optional]
**last_run** | **string** |  | [optional]
**tag_ids** | **string[]** | Tag IDs | [optional]
**comments** | [**\FlowHunt\Model\ProjectIssueCommentResponse[]**](ProjectIssueCommentResponse.md) | Issue comments | [optional]
**created_at** | **string** | Created at |
**updated_at** | **string** | Updated at |
**created_by** | **string** | Created by user ID |
**run_user_comment_id** | **string** |  | [optional]
**session_id** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
