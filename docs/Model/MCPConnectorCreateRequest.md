# # MCPConnectorCreateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Slug-shaped label: must be lowercase ascii — letters, digits, and single underscores between words only (e.g. &#39;betmana_mcp&#39;, &#39;my_mcp_server&#39;) |
**url** | **string** | MCP server URL |
**transport** | **string** | Transport: &#39;streamable_http&#39; or &#39;sse&#39; |
**auth_type** | **string** | Auth type: &#39;none&#39; | &#39;bearer&#39; | &#39;basic&#39; | &#39;custom_header&#39; | &#39;oauth&#39; | [optional] [default to 'none']
**auth_payload** | [**\FlowHunt\Model\MCPConnectorAuthPayload**](MCPConnectorAuthPayload.md) |  | [optional]
**headers** | **array<string,string>** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
