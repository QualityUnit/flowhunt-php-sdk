# # WorkspaceSSOCreateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**provider** | **string** | SSO provider (e.g., &#39;microsoft&#39;) |
**enabled** | **bool** | Whether SSO is enabled | [optional] [default to true]
**idp_sso_url** | **string** | Identity Provider SSO URL | [optional]
**jit_provisioning_enabled** | **bool** |  | [optional]
**email_attribute** | **string** |  | [optional]
**name_id_format** | **string** |  | [optional]
**first_name_attribute** | **string** |  | [optional]
**last_name_attribute** | **string** |  | [optional]
**role_attribute** | **string** |  | [optional]
**login_method** | [**\FlowHunt\Model\SamlLoginMethod**](SamlLoginMethod.md) |  | [optional]
**idp_metadata_xml** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
