# # FlowBatchRunDetailResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**batch_run_id** | **string** |  |
**flow_id** | **string** |  |
**workspace_id** | **string** |  |
**user_id** | **string** |  | [optional]
**name** | **string** |  |
**columns** | [**\FlowHunt\Model\FlowBatchColumnDefinition[]**](FlowBatchColumnDefinition.md) |  | [optional]
**max_parallel** | **int** |  |
**status** | [**\FlowHunt\Model\FlowBatchRunStatus**](FlowBatchRunStatus.md) |  |
**total_rows** | **int** |  |
**completed_rows** | **int** |  |
**failed_rows** | **int** |  |
**created_at** | **\DateTime** |  | [optional]
**updated_at** | **\DateTime** |  | [optional]
**rows** | [**\FlowHunt\Model\FlowBatchRowResponse[]**](FlowBatchRowResponse.md) |  | [optional]
**next_cursor** | **int** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
