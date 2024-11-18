# # ApiEndpointResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**endpoint_id** | **string** | The ID of the API endpoint. |
**path** | **string** | The path of the API endpoint. |
**description** | **string** | The description of the API endpoint. |
**method** | [**\FlowHunt\Model\ApiMethod**](ApiMethod.md) | The method of the API endpoint. |
**parameters** | [**AnyOf**](AnyOf.md) | The parameters of the API endpoint. | [optional]
**request_body** | [**AnyOf**](AnyOf.md) | The request body of the API endpoint. | [optional]
**success_response** | [**AnyOf**](AnyOf.md) | The success response of the API endpoint. | [optional]
**security_scheme** | **string[]** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
