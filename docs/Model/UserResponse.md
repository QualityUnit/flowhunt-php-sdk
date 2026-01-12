# # UserResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**user_id** | **string** | User ID |
**email** | **string** | Email of the user |
**username** | **string** | Name of the user |
**is_active** | **bool** |  | [optional]
**avatar_url** | **string** |  | [optional]
**api_key_workspace_id** | **string** |  | [optional]
**product_plans** | [**array<string,\FlowHunt\Model\SubscriptionPlan>**](SubscriptionPlan.md) |  | [optional]
**billing_provider** | [**\FlowHunt\Model\BillingProvider**](BillingProvider.md) |  | [optional]
**sudoer** | **bool** | Whether the user has superuser privileges | [optional] [default to false]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
