# # ScheduleResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**workspace_id** | **string** | Workspace ID |
**schedule_id** | **string** | Schedule ID |
**url** | **string** | URL to be scheduled |
**frequency** | [**\OpenAPI\Client\Model\ScheduleFrequency**](ScheduleFrequency.md) | Frequency of the schedule D - Daily, W - Weekly, M - Monthly, Y - Yearly |
**schedule_type** | [**\OpenAPI\Client\Model\ScheduleType**](ScheduleType.md) | Type of the schedule (U - URL, D - Domain, S - Sitemap) |
**start_time** | **\DateTime** |  | [optional]
**end_time** | **\DateTime** |  | [optional]
**status** | [**\OpenAPI\Client\Model\ScheduleStatus**](ScheduleStatus.md) | Status of the schedule (N - New, F - Finished, P - Pending, E - Error, C - Cancelled |
**status_message** | **string** |  | [optional]
**cnt_scheduled** | **int** |  |
**cnt_completed** | **int** |  |
**cnt_failed** | **int** |  |
**with_screenshot** | [**\OpenAPI\Client\Model\BoolChar**](BoolChar.md) |  |
**with_proxy_rotation** | [**\OpenAPI\Client\Model\BoolChar**](BoolChar.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
