# # AgentGridImportStatusResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**import_id** | **string** | Import identifier |
**status** | **string** | Import status: processing, completed, or failed |
**total_rows** | **int** | Total number of rows being imported |
**processed_batches** | **int** | Number of batches processed so far |
**total_batches** | **int** | Total number of batches |
**successful_rows** | **int** | Number of rows successfully imported |
**failed_rows** | **int** | Number of rows that failed to import |
**progress_percentage** | **float** | Import progress as a percentage (0-100) |
**errors** | [**\FlowHunt\Model\AgentGridImportError[]**](AgentGridImportError.md) | List of import errors (max 1000) | [optional]
**started_at** | **string** |  | [optional]
**completed_at** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
