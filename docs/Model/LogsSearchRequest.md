# # LogsSearchRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**log_types** | **string[]** |  | [optional]
**log_levels** | **string[]** |  | [optional]
**category_id** | **string** |  | [optional]
**from_date** | **string** |  | [optional]
**to_date** | **string** |  | [optional]
**search_text** | **string** |  | [optional]
**page** | **int** | Page number for pagination | [optional] [default to 1]
**page_size** | **int** | Number of results per page | [optional] [default to 50]
**sort_by** | **string** | Field to sort results by | [optional] [default to 'created_at']
**sort_direction** | [**\FlowHunt\Model\SortDirection**](SortDirection.md) | Sort direction (asc or desc) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
