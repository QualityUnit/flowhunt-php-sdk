# # FlowDetailResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Agent ID |
**name** | **string** | Agent name |
**description** | **string** | Agent description |
**detailed_description** | **string** |  | [optional]
**config** | [**\FlowHunt\Model\FlowConfig**](FlowConfig.md) | Agent configuration |
**flow_type** | [**\FlowHunt\Model\FlowType**](FlowType.md) | Agent type |
**executed_at** | **\DateTime** |  | [optional]
**category_id** | **string** |  | [optional]
**branch** | **string** | Agent branch |
**enable_cache** | **bool** | Enable cache |
**draft_version_nr** | **int** |  | [optional]
**prod_version_nr** | **int** |  | [optional]
**engine_version** | **string** |  | [optional]
**last_modified** | **\DateTime** |  | [optional]
**integration_slugs** | **string[]** |  | [optional]
**webhook_base_url** | **string** |  | [optional]
**try_flow_input_placeholder** | **string** |  | [optional]
**disable_text_input** | **bool** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
