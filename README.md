# FlowHunt

FlowHunt API


## Installation & Usage

### Requirements

PHP 8.1 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/flowhunt-php-sdk.git"
    }
  ],
  "require": {
    "GIT_USER_ID/flowhunt-php-sdk": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/FlowHunt/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure API key authorization: APIKeyHeader
$config = FlowHunt\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FlowHunt\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure Bearer authorization: HTTPBearer
$config = FlowHunt\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FlowHunt\Api\AgentGridsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$agent_grid_create_request = new \FlowHunt\Model\AgentGridCreateRequest(); // \FlowHunt\Model\AgentGridCreateRequest

try {
    $result = $apiInstance->createAgentGrid($workspace_id, $agent_grid_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentGridsApi->createAgentGrid: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *http://localhost*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AgentGridsApi* | [**createAgentGrid**](docs/Api/AgentGridsApi.md#createagentgrid) | **POST** /v2/agent_grids/ | Create a Flow Table
*AgentGridsApi* | [**deleteAgentGrid**](docs/Api/AgentGridsApi.md#deleteagentgrid) | **DELETE** /v2/agent_grids/{agent_grid_id} | Delete a Flow Table
*AgentGridsApi* | [**deleteAgentGridRow**](docs/Api/AgentGridsApi.md#deleteagentgridrow) | **DELETE** /v2/agent_grids/{agent_grid_id}/rows/{row_id} | Delete a row
*AgentGridsApi* | [**getAgentGrid**](docs/Api/AgentGridsApi.md#getagentgrid) | **GET** /v2/agent_grids/{agent_grid_id} | Get a Flow Table
*AgentGridsApi* | [**getAgentGridPreview**](docs/Api/AgentGridsApi.md#getagentgridpreview) | **GET** /v2/agent_grids/{agent_grid_id}/preview | Get Flow Table preview
*AgentGridsApi* | [**getImportStatus**](docs/Api/AgentGridsApi.md#getimportstatus) | **GET** /v2/agent_grids/{agent_grid_id}/import-status/{import_id} | Get import status
*AgentGridsApi* | [**importAgentGridCsv**](docs/Api/AgentGridsApi.md#importagentgridcsv) | **POST** /v2/agent_grids/{agent_grid_id}/import-csv | Import CSV
*AgentGridsApi* | [**insertRow**](docs/Api/AgentGridsApi.md#insertrow) | **POST** /v2/agent_grids/{agent_grid_id}/rows | Insert a row
*AgentGridsApi* | [**insertRowsBulk**](docs/Api/AgentGridsApi.md#insertrowsbulk) | **POST** /v2/agent_grids/{agent_grid_id}/rows/bulk | Bulk insert rows
*AgentGridsApi* | [**listAgentGrids**](docs/Api/AgentGridsApi.md#listagentgrids) | **GET** /v2/agent_grids/ | List all Flow Tables
*AgentGridsApi* | [**searchRows**](docs/Api/AgentGridsApi.md#searchrows) | **POST** /v2/agent_grids/{agent_grid_id}/search | Search rows
*AirtableApi* | [**getAirtableBases**](docs/Api/AirtableApi.md#getairtablebases) | **GET** /v2/integrations/airtable/ | Get Airtable Bases
*AirtableApi* | [**getAirtableTables**](docs/Api/AirtableApi.md#getairtabletables) | **GET** /v2/integrations/airtable/bases/{base_id}/tables | Get Airtable Tables
*ApiKeysApi* | [**createApiKey**](docs/Api/ApiKeysApi.md#createapikey) | **POST** /v2/api_keys/create | Create Api Key
*ApiKeysApi* | [**deleteApiKey**](docs/Api/ApiKeysApi.md#deleteapikey) | **DELETE** /v2/api_keys/{api_key_id} | Delete Api Key
*ApiKeysApi* | [**searchApiKey**](docs/Api/ApiKeysApi.md#searchapikey) | **POST** /v2/api_keys/search | Search Api Key
*ApiKeysApi* | [**updateApiKey**](docs/Api/ApiKeysApi.md#updateapikey) | **PUT** /v2/api_keys/{api_key_id} | Update Api Key
*AtlassianApi* | [**deleteJiraWebhook**](docs/Api/AtlassianApi.md#deletejirawebhook) | **DELETE** /v2/integrations/atlassian/jira/webhooks/{webhook_id} | Delete Jira Webhook
*AtlassianApi* | [**getConfluencePages**](docs/Api/AtlassianApi.md#getconfluencepages) | **GET** /v2/integrations/atlassian/confluence/spaces/{space_key}/pages | Get Confluence Pages
*AtlassianApi* | [**getConfluenceSpaces**](docs/Api/AtlassianApi.md#getconfluencespaces) | **GET** /v2/integrations/atlassian/confluence/spaces | Get Confluence Spaces
*AtlassianApi* | [**getJiraAssignees**](docs/Api/AtlassianApi.md#getjiraassignees) | **GET** /v2/integrations/atlassian/jira/projects/{project_key}/assignees | Get Jira Assignees
*AtlassianApi* | [**getJiraIssues**](docs/Api/AtlassianApi.md#getjiraissues) | **GET** /v2/integrations/atlassian/jira/projects/{project_key}/issues | Get Jira Issues
*AtlassianApi* | [**getJiraProjects**](docs/Api/AtlassianApi.md#getjiraprojects) | **GET** /v2/integrations/atlassian/jira/projects | Get Jira Projects
*AtlassianApi* | [**getJiraTransitions**](docs/Api/AtlassianApi.md#getjiratransitions) | **GET** /v2/integrations/atlassian/jira/issues/{issue_key}/transitions | Get Jira Transitions
*AtlassianApi* | [**listJiraWebhooks**](docs/Api/AtlassianApi.md#listjirawebhooks) | **GET** /v2/integrations/atlassian/jira/webhooks | List Jira Webhooks
*ChatbotsApi* | [**createChatbot**](docs/Api/ChatbotsApi.md#createchatbot) | **POST** /v2/chatbots/create | Create Chatbot
*ChatbotsApi* | [**deleteChatbot**](docs/Api/ChatbotsApi.md#deletechatbot) | **DELETE** /v2/chatbots/{chatbot_id} | Delete Chatbot
*ChatbotsApi* | [**getChatbot**](docs/Api/ChatbotsApi.md#getchatbot) | **GET** /v2/chatbots/{chatbot_id} | Get Chatbot
*ChatbotsApi* | [**searchChatbots**](docs/Api/ChatbotsApi.md#searchchatbots) | **POST** /v2/chatbots/ | Search Chatbots
*ChatbotsApi* | [**updateChatbot**](docs/Api/ChatbotsApi.md#updatechatbot) | **PUT** /v2/chatbots/{chatbot_id} | Update Chatbot
*ClickUpApi* | [**getClickupSpaces**](docs/Api/ClickUpApi.md#getclickupspaces) | **GET** /v2/integrations/clickup/{integration_id}/spaces | Get Clickup Spaces
*ClickUpApi* | [**getClickupWorkspaces**](docs/Api/ClickUpApi.md#getclickupworkspaces) | **GET** /v2/integrations/clickup/ | Get Clickup Workspaces
*CreditsApi* | [**getCreditBalance**](docs/Api/CreditsApi.md#getcreditbalance) | **GET** /v2/credits/balance | Get Credit Balance
*CreditsApi* | [**getDailyChartData**](docs/Api/CreditsApi.md#getdailychartdata) | **POST** /v2/credits/daily/chart | Get Daily Chart Data
*CreditsApi* | [**getWorkspaceCreditBalance**](docs/Api/CreditsApi.md#getworkspacecreditbalance) | **GET** /v2/credits/workspace_balance | Get Workspace Credit Balance
*CreditsApi* | [**searchCreditTransactions**](docs/Api/CreditsApi.md#searchcredittransactions) | **POST** /v2/credits/search | Search Credit Transactions
*CreditsApi* | [**searchDailyCreditTransactions**](docs/Api/CreditsApi.md#searchdailycredittransactions) | **POST** /v2/credits/search_daily | Search Daily Credit Transactions
*DefaultApi* | [**getBranding**](docs/Api/DefaultApi.md#getbranding) | **GET** /v2/settings/branding | Get Branding
*DefaultApi* | [**getPublicBranding**](docs/Api/DefaultApi.md#getpublicbranding) | **GET** /v2/settings/branding/public | Get Public Branding
*DefaultApi* | [**updateBranding**](docs/Api/DefaultApi.md#updatebranding) | **PUT** /v2/settings/branding | Update Branding
*DocumentsApi* | [**createDocumentCategory**](docs/Api/DocumentsApi.md#createdocumentcategory) | **POST** /v2/documents/categories/create | Create Document Category
*DocumentsApi* | [**createFaq**](docs/Api/DocumentsApi.md#createfaq) | **POST** /v2/documents/faqs/create | Create Faq
*DocumentsApi* | [**deleteDocument**](docs/Api/DocumentsApi.md#deletedocument) | **DELETE** /v2/documents/{doc_id} | Delete Document
*DocumentsApi* | [**deleteDocumentCategory**](docs/Api/DocumentsApi.md#deletedocumentcategory) | **DELETE** /v2/documents/categories/{cat_id} | Delete Document Category
*DocumentsApi* | [**deleteFaq**](docs/Api/DocumentsApi.md#deletefaq) | **DELETE** /v2/documents/faqs/{faq_id} | Delete Faq
*DocumentsApi* | [**downloadBinaryDocument**](docs/Api/DocumentsApi.md#downloadbinarydocument) | **GET** /v2/documents/download/binary/{doc_id} | Download Binary Document
*DocumentsApi* | [**downloadTextDocument**](docs/Api/DocumentsApi.md#downloadtextdocument) | **GET** /v2/documents/download/text/{doc_id} | Download Text Document
*DocumentsApi* | [**importFaq**](docs/Api/DocumentsApi.md#importfaq) | **POST** /v2/documents/faqs/import | Import Faq
*DocumentsApi* | [**searchDocumentCategories**](docs/Api/DocumentsApi.md#searchdocumentcategories) | **POST** /v2/documents/categories/search | Search Document Categories
*DocumentsApi* | [**searchDocuments**](docs/Api/DocumentsApi.md#searchdocuments) | **POST** /v2/documents/search | Search Documents
*DocumentsApi* | [**searchFaqs**](docs/Api/DocumentsApi.md#searchfaqs) | **POST** /v2/documents/faqs/search | Search Faqs
*DocumentsApi* | [**updateDocument**](docs/Api/DocumentsApi.md#updatedocument) | **PUT** /v2/documents/{doc_id} | Update Document
*DocumentsApi* | [**updateDocumentCategory**](docs/Api/DocumentsApi.md#updatedocumentcategory) | **PUT** /v2/documents/categories/{cat_id} | Update Document Category
*DocumentsApi* | [**updateFaq**](docs/Api/DocumentsApi.md#updatefaq) | **PUT** /v2/documents/faqs/{faq_id} | Update Faq
*DocumentsApi* | [**uploadFromUrlDocument**](docs/Api/DocumentsApi.md#uploadfromurldocument) | **POST** /v2/documents/upload-from-url/{cat_id} | Upload From Url Document
*DocumentsApi* | [**uploadMemoryDocument**](docs/Api/DocumentsApi.md#uploadmemorydocument) | **POST** /v2/documents/upload/{cat_id} | Upload Memory Document
*FineTuningsApi* | [**createImageFt**](docs/Api/FineTuningsApi.md#createimageft) | **POST** /v2/photo_ai/images/ | Create Image Ft
*FineTuningsApi* | [**deleteFileFt**](docs/Api/FineTuningsApi.md#deletefileft) | **DELETE** /v2/photo_ai/files/{file_key} | Delete File Ft
*FineTuningsApi* | [**deleteImageFt**](docs/Api/FineTuningsApi.md#deleteimageft) | **DELETE** /v2/photo_ai/images/{ft_id} | Delete Image Ft
*FineTuningsApi* | [**generateImagePrompt**](docs/Api/FineTuningsApi.md#generateimageprompt) | **POST** /v2/photo_ai/inference/images/generate-prompt | Generate Image Prompt
*FineTuningsApi* | [**generateImages**](docs/Api/FineTuningsApi.md#generateimages) | **POST** /v2/photo_ai/inference/images | Generate Images
*FineTuningsApi* | [**getFileFt**](docs/Api/FineTuningsApi.md#getfileft) | **GET** /v2/photo_ai/files/{file_key} | Get File Ft
*FineTuningsApi* | [**getInferenceResults**](docs/Api/FineTuningsApi.md#getinferenceresults) | **GET** /v2/photo_ai/inference/results/{inference_id} | Get Inference Results
*FineTuningsApi* | [**handleReplicateWebhook**](docs/Api/FineTuningsApi.md#handlereplicatewebhook) | **POST** /v2/photo_ai/webhooks/replicate | Handle Replicate Webhook
*FineTuningsApi* | [**searchImageFts**](docs/Api/FineTuningsApi.md#searchimagefts) | **POST** /v2/photo_ai/images/search | Search Image Fts
*FineTuningsApi* | [**searchInferenceHistory**](docs/Api/FineTuningsApi.md#searchinferencehistory) | **POST** /v2/photo_ai/inference/history | Search Inference History
*FineTuningsApi* | [**updateImageFt**](docs/Api/FineTuningsApi.md#updateimageft) | **PUT** /v2/photo_ai/images/{ft_id} | Update Image Ft
*FineTuningsApi* | [**uploadImageFt**](docs/Api/FineTuningsApi.md#uploadimageft) | **POST** /v2/photo_ai/files/{ft_type}/upload | Upload Image Ft
*FlowAssistantV3Api* | [**createV3FlowAssistantSession**](docs/Api/FlowAssistantV3Api.md#createv3flowassistantsession) | **POST** /v3/flow-assistants/create | Create V3 Flow Assistant Session
*FlowAssistantV3Api* | [**invokeV3FlowAssistantResponse**](docs/Api/FlowAssistantV3Api.md#invokev3flowassistantresponse) | **POST** /v3/flow-assistants/{session_id}/invoke | Invoke V3 Flow Assistant Response
*FlowAssistantV3Api* | [**pollV3FlowAssistantResponse**](docs/Api/FlowAssistantV3Api.md#pollv3flowassistantresponse) | **POST** /v3/flow-assistants/{session_id}/invocation_response/{from_timestamp} | Poll V3 Flow Assistant Response
*FlowBatchApi* | [**addRows**](docs/Api/FlowBatchApi.md#addrows) | **POST** /v2/flows/{flow_id}/batch/{batch_run_id}/rows | Add Rows
*FlowBatchApi* | [**addRows_0**](docs/Api/FlowBatchApi.md#addrows_0) | **POST** /v2/flows/{flow_id}/batch/{batch_run_id}/rows | Add Rows
*FlowBatchApi* | [**createBatchRun**](docs/Api/FlowBatchApi.md#createbatchrun) | **POST** /v2/flows/{flow_id}/batch | Create Batch Run
*FlowBatchApi* | [**createBatchRun_0**](docs/Api/FlowBatchApi.md#createbatchrun_0) | **POST** /v2/flows/{flow_id}/batch | Create Batch Run
*FlowBatchApi* | [**deleteBatchRun**](docs/Api/FlowBatchApi.md#deletebatchrun) | **DELETE** /v2/flows/{flow_id}/batch/{batch_run_id} | Delete Batch Run
*FlowBatchApi* | [**deleteBatchRun_0**](docs/Api/FlowBatchApi.md#deletebatchrun_0) | **DELETE** /v2/flows/{flow_id}/batch/{batch_run_id} | Delete Batch Run
*FlowBatchApi* | [**deleteRow**](docs/Api/FlowBatchApi.md#deleterow) | **DELETE** /v2/flows/{flow_id}/batch/{batch_run_id}/rows/{row_id} | Delete Row
*FlowBatchApi* | [**deleteRow_0**](docs/Api/FlowBatchApi.md#deleterow_0) | **DELETE** /v2/flows/{flow_id}/batch/{batch_run_id}/rows/{row_id} | Delete Row
*FlowBatchApi* | [**executeBatch**](docs/Api/FlowBatchApi.md#executebatch) | **POST** /v2/flows/{flow_id}/batch/{batch_run_id}/execute | Execute Batch
*FlowBatchApi* | [**executeBatch_0**](docs/Api/FlowBatchApi.md#executebatch_0) | **POST** /v2/flows/{flow_id}/batch/{batch_run_id}/execute | Execute Batch
*FlowBatchApi* | [**executeFiltered**](docs/Api/FlowBatchApi.md#executefiltered) | **POST** /v2/flows/{flow_id}/batch/{batch_run_id}/execute-filtered | Execute Filtered
*FlowBatchApi* | [**executeFiltered_0**](docs/Api/FlowBatchApi.md#executefiltered_0) | **POST** /v2/flows/{flow_id}/batch/{batch_run_id}/execute-filtered | Execute Filtered
*FlowBatchApi* | [**executeRow**](docs/Api/FlowBatchApi.md#executerow) | **POST** /v2/flows/{flow_id}/batch/{batch_run_id}/rows/{row_id}/execute | Execute Row
*FlowBatchApi* | [**executeRow_0**](docs/Api/FlowBatchApi.md#executerow_0) | **POST** /v2/flows/{flow_id}/batch/{batch_run_id}/rows/{row_id}/execute | Execute Row
*FlowBatchApi* | [**exportCsv**](docs/Api/FlowBatchApi.md#exportcsv) | **GET** /v2/flows/{flow_id}/batch/{batch_run_id}/export-csv | Export Csv
*FlowBatchApi* | [**exportCsv_0**](docs/Api/FlowBatchApi.md#exportcsv_0) | **GET** /v2/flows/{flow_id}/batch/{batch_run_id}/export-csv | Export Csv
*FlowBatchApi* | [**getBatchRun**](docs/Api/FlowBatchApi.md#getbatchrun) | **GET** /v2/flows/{flow_id}/batch/{batch_run_id} | Get Batch Run
*FlowBatchApi* | [**getBatchRun_0**](docs/Api/FlowBatchApi.md#getbatchrun_0) | **GET** /v2/flows/{flow_id}/batch/{batch_run_id} | Get Batch Run
*FlowBatchApi* | [**getExportZipStatus**](docs/Api/FlowBatchApi.md#getexportzipstatus) | **GET** /v2/flows/{flow_id}/batch/{batch_run_id}/export-zip/{task_id} | Get Export Zip Status
*FlowBatchApi* | [**getExportZipStatus_0**](docs/Api/FlowBatchApi.md#getexportzipstatus_0) | **GET** /v2/flows/{flow_id}/batch/{batch_run_id}/export-zip/{task_id} | Get Export Zip Status
*FlowBatchApi* | [**importCsv**](docs/Api/FlowBatchApi.md#importcsv) | **POST** /v2/flows/{flow_id}/batch/{batch_run_id}/import-csv | Import Csv
*FlowBatchApi* | [**importCsv_0**](docs/Api/FlowBatchApi.md#importcsv_0) | **POST** /v2/flows/{flow_id}/batch/{batch_run_id}/import-csv | Import Csv
*FlowBatchApi* | [**listBatchRuns**](docs/Api/FlowBatchApi.md#listbatchruns) | **GET** /v2/flows/{flow_id}/batch | List Batch Runs
*FlowBatchApi* | [**listBatchRuns_0**](docs/Api/FlowBatchApi.md#listbatchruns_0) | **GET** /v2/flows/{flow_id}/batch | List Batch Runs
*FlowBatchApi* | [**startExportZip**](docs/Api/FlowBatchApi.md#startexportzip) | **POST** /v2/flows/{flow_id}/batch/{batch_run_id}/export-zip | Start Export Zip
*FlowBatchApi* | [**startExportZip_0**](docs/Api/FlowBatchApi.md#startexportzip_0) | **POST** /v2/flows/{flow_id}/batch/{batch_run_id}/export-zip | Start Export Zip
*FlowBatchApi* | [**stopAllRows**](docs/Api/FlowBatchApi.md#stopallrows) | **POST** /v2/flows/{flow_id}/batch/{batch_run_id}/stop-all | Stop All Rows
*FlowBatchApi* | [**stopAllRows_0**](docs/Api/FlowBatchApi.md#stopallrows_0) | **POST** /v2/flows/{flow_id}/batch/{batch_run_id}/stop-all | Stop All Rows
*FlowBatchApi* | [**stopRow**](docs/Api/FlowBatchApi.md#stoprow) | **POST** /v2/flows/{flow_id}/batch/{batch_run_id}/rows/{row_id}/stop | Stop Row
*FlowBatchApi* | [**stopRow_0**](docs/Api/FlowBatchApi.md#stoprow_0) | **POST** /v2/flows/{flow_id}/batch/{batch_run_id}/rows/{row_id}/stop | Stop Row
*FlowBatchApi* | [**updateBatchRun**](docs/Api/FlowBatchApi.md#updatebatchrun) | **PUT** /v2/flows/{flow_id}/batch/{batch_run_id} | Update Batch Run
*FlowBatchApi* | [**updateBatchRun_0**](docs/Api/FlowBatchApi.md#updatebatchrun_0) | **PUT** /v2/flows/{flow_id}/batch/{batch_run_id} | Update Batch Run
*FlowBatchApi* | [**updateRow**](docs/Api/FlowBatchApi.md#updaterow) | **PUT** /v2/flows/{flow_id}/batch/{batch_run_id}/rows/{row_id} | Update Row
*FlowBatchApi* | [**updateRow_0**](docs/Api/FlowBatchApi.md#updaterow_0) | **PUT** /v2/flows/{flow_id}/batch/{batch_run_id}/rows/{row_id} | Update Row
*FlowMessagesApi* | [**searchFlowMessages**](docs/Api/FlowMessagesApi.md#searchflowmessages) | **POST** /v2/chatbots/search/{session_id} | Search Flow Messages
*FlowSessionsApi* | [**deleteChatbotSessionView**](docs/Api/FlowSessionsApi.md#deletechatbotsessionview) | **DELETE** /v2/chatbots/sessions/{session_id} | Delete Chatbot Session View
*FlowSessionsApi* | [**getChartFeedback**](docs/Api/FlowSessionsApi.md#getchartfeedback) | **POST** /v2/chatbots/sessions/charts | Get Chart Feedback
*FlowSessionsApi* | [**getChartSessionDuration**](docs/Api/FlowSessionsApi.md#getchartsessionduration) | **POST** /v2/chatbots/sessions/chart_session_duration | Get Chart Session Duration
*FlowSessionsApi* | [**getChatbotSessionView**](docs/Api/FlowSessionsApi.md#getchatbotsessionview) | **GET** /v2/chatbots/sessions/{session_id} | Get Chatbot Session View
*FlowSessionsApi* | [**getToolCallsChartFeedback**](docs/Api/FlowSessionsApi.md#gettoolcallschartfeedback) | **POST** /v2/chatbots/sessions/chart_tool_calls | Get Tool Calls Chart Feedback
*FlowSessionsApi* | [**searchChatbotSessionsView**](docs/Api/FlowSessionsApi.md#searchchatbotsessionsview) | **POST** /v2/chatbots/sessions/search | Search Chatbot Sessions View
*FlowSessionsApi* | [**searchFlowEvent**](docs/Api/FlowSessionsApi.md#searchflowevent) | **POST** /v2/chatbots/sessions/search_event | Search Flow Event
*FlowSessionsApi* | [**updateChatbotSessionView**](docs/Api/FlowSessionsApi.md#updatechatbotsessionview) | **PUT** /v2/chatbots/sessions/{session_id} | Update Chatbot Session View
*FlowWebhooksApi* | [**executeThirdPartyWebhook**](docs/Api/FlowWebhooksApi.md#executethirdpartywebhook) | **POST** /v2/flows/webhooks/third_party_integrations/{trigger_type} | Execute Third Party Webhook
*FlowWebhooksApi* | [**executeWebhook**](docs/Api/FlowWebhooksApi.md#executewebhook) | **POST** /v2/flows/webhooks/{chatbot_id} | Execute Webhook
*FlowWebhooksApi* | [**executeWebhookFromFlow**](docs/Api/FlowWebhooksApi.md#executewebhookfromflow) | **POST** /v2/flows/webhooks/from_flow/{flow_id} | Execute Webhook From Flow
*FlowWebhooksApi* | [**executeWebhookTriggerGet**](docs/Api/FlowWebhooksApi.md#executewebhooktriggerget) | **GET** /v2/flows/webhooks/trigger/{webhook_id} | Execute Webhook Trigger Get
*FlowWebhooksApi* | [**executeWebhookTriggerPost**](docs/Api/FlowWebhooksApi.md#executewebhooktriggerpost) | **POST** /v2/flows/webhooks/trigger/{webhook_id} | Execute Webhook Trigger Post
*FlowWebhooksApi* | [**getInstallationMetadata**](docs/Api/FlowWebhooksApi.md#getinstallationmetadata) | **GET** /v2/flows/webhooks/third_party_integrations/installation_metadata | Get Installation Metadata
*FlowsApi* | [**cancelFlowSession**](docs/Api/FlowsApi.md#cancelflowsession) | **POST** /v2/flows/sessions/{session_id}/cancel | Cancel Flow Session
*FlowsApi* | [**createChatbotSession**](docs/Api/FlowsApi.md#createchatbotsession) | **POST** /v2/flows/sessions/create | Create Chatbot Session
*FlowsApi* | [**createFlow**](docs/Api/FlowsApi.md#createflow) | **POST** /v2/flows/create | Create Flow
*FlowsApi* | [**createFlowCategory**](docs/Api/FlowsApi.md#createflowcategory) | **POST** /v2/flows/categories/create | Create Flow Category
*FlowsApi* | [**createFlowCron**](docs/Api/FlowsApi.md#createflowcron) | **POST** /v2/flows/crons/create | Create Flow Cron
*FlowsApi* | [**createFlowSession**](docs/Api/FlowsApi.md#createflowsession) | **POST** /v2/flows/sessions/from_flow/create | Create Flow Session
*FlowsApi* | [**createMessageFeedback**](docs/Api/FlowsApi.md#createmessagefeedback) | **POST** /v2/flows/sessions/{session_id}/feedback | Create Message Feedback
*FlowsApi* | [**deleteAttachment**](docs/Api/FlowsApi.md#deleteattachment) | **DELETE** /v2/flows/sessions/{session_id}/attachments/{file_id} | Delete Attachment
*FlowsApi* | [**deleteFlow**](docs/Api/FlowsApi.md#deleteflow) | **DELETE** /v2/flows/{flow_id} | Delete Flow
*FlowsApi* | [**deleteFlowCategory**](docs/Api/FlowsApi.md#deleteflowcategory) | **DELETE** /v2/flows/categories/{cat_id} | Delete Flow Category
*FlowsApi* | [**deleteFlowCron**](docs/Api/FlowsApi.md#deleteflowcron) | **DELETE** /v2/flows/crons/{flow_id}/{cron_id} | Delete Flow Cron
*FlowsApi* | [**downloadAttachment**](docs/Api/FlowsApi.md#downloadattachment) | **GET** /v2/flows/sessions/{session_id}/attachments/{file_id} | Download attachment
*FlowsApi* | [**executeFlowCron**](docs/Api/FlowsApi.md#executeflowcron) | **POST** /v2/flows/crons/{flow_id}/{cron_id}/execute | Execute Flow Cron
*FlowsApi* | [**generateCommitMessage**](docs/Api/FlowsApi.md#generatecommitmessage) | **POST** /v2/flows/{flow_id}/generate-commit-msg | Generate Commit Message
*FlowsApi* | [**get**](docs/Api/FlowsApi.md#get) | **GET** /v2/flows/{flow_id} | Get
*FlowsApi* | [**getAllComponents**](docs/Api/FlowsApi.md#getallcomponents) | **GET** /v2/flows/components/all | Get All Components
*FlowsApi* | [**getArtefactContent**](docs/Api/FlowsApi.md#getartefactcontent) | **GET** /v2/flows/sessions/{session_id}/artefacts/{artefact_id} | Get artefact content
*FlowsApi* | [**getAttachments**](docs/Api/FlowsApi.md#getattachments) | **GET** /v2/flows/sessions/{session_id}/attachments | Get Attachments
*FlowsApi* | [**getFlowVersions**](docs/Api/FlowsApi.md#getflowversions) | **GET** /v2/flows/{flow_id}/version_history | Get Flow Versions
*FlowsApi* | [**getInvokedFlowResults**](docs/Api/FlowsApi.md#getinvokedflowresults) | **GET** /v2/flows/{flow_id}/{task_id} | Get Invoked Flow Results
*FlowsApi* | [**getPublicFlow**](docs/Api/FlowsApi.md#getpublicflow) | **GET** /v2/flows/public/{flow_id} | Get Public Flow
*FlowsApi* | [**getTriggerTypes**](docs/Api/FlowsApi.md#gettriggertypes) | **POST** /v2/flows/{flow_id}/triggers | Get Trigger Types
*FlowsApi* | [**invokeFlow**](docs/Api/FlowsApi.md#invokeflow) | **POST** /v2/flows/{flow_id}/invoke | Invoke Flow
*FlowsApi* | [**invokeFlowResponse**](docs/Api/FlowsApi.md#invokeflowresponse) | **POST** /v2/flows/sessions/{session_id}/invoke | Invoke Flow Response
*FlowsApi* | [**invokeFlowSingleton**](docs/Api/FlowsApi.md#invokeflowsingleton) | **POST** /v2/flows/{flow_id}/invoke_singleton | Invoke Flow Singleton
*FlowsApi* | [**pollFlowResponse**](docs/Api/FlowsApi.md#pollflowresponse) | **POST** /v2/flows/sessions/{session_id}/invocation_response/{from_timestamp} | Poll Flow Response
*FlowsApi* | [**publishFlow**](docs/Api/FlowsApi.md#publishflow) | **POST** /v2/flows/{flow_id}/publish | Publish Flow
*FlowsApi* | [**restoreFlowVersion**](docs/Api/FlowsApi.md#restoreflowversion) | **POST** /v2/flows/{flow_id}/version_history/{branch}/restore | Restore Flow Version
*FlowsApi* | [**resumeHook**](docs/Api/FlowsApi.md#resumehook) | **POST** /v2/flows/sessions/{session_id}/resume-hook | Resume Hook
*FlowsApi* | [**search**](docs/Api/FlowsApi.md#search) | **POST** /v2/flows/ | Search
*FlowsApi* | [**searchAll**](docs/Api/FlowsApi.md#searchall) | **POST** /v2/flows/all | Search All
*FlowsApi* | [**searchFlowCategories**](docs/Api/FlowsApi.md#searchflowcategories) | **POST** /v2/flows/categories/search | Search Flow Categories
*FlowsApi* | [**searchFlowCrons**](docs/Api/FlowsApi.md#searchflowcrons) | **POST** /v2/flows/crons/search | Search Flow Crons
*FlowsApi* | [**updateFlow**](docs/Api/FlowsApi.md#updateflow) | **PUT** /v2/flows/{flow_id} | Update Flow
*FlowsApi* | [**updateFlowCategory**](docs/Api/FlowsApi.md#updateflowcategory) | **PUT** /v2/flows/categories/{cat_id} | Update Flow Category
*FlowsApi* | [**updateFlowCron**](docs/Api/FlowsApi.md#updateflowcron) | **PUT** /v2/flows/crons/{flow_id}/{cron_id} | Update Flow Cron
*FlowsApi* | [**uploadAttachments**](docs/Api/FlowsApi.md#uploadattachments) | **POST** /v2/flows/sessions/{session_id}/attachments | Upload Attachments
*GitHubApi* | [**getRepos**](docs/Api/GitHubApi.md#getrepos) | **GET** /v2/integrations/github/repos | Get Repos
*GitLabApi* | [**getBranches**](docs/Api/GitLabApi.md#getbranches) | **GET** /v2/integrations/gitlab/branches | Get Branches
*GitLabApi* | [**getProjects**](docs/Api/GitLabApi.md#getprojects) | **GET** /v2/integrations/gitlab/projects | Get Projects
*GoogleApi* | [**getCalendars**](docs/Api/GoogleApi.md#getcalendars) | **GET** /v2/integrations/google/calendar | Get Calendars
*GoogleApi* | [**getPickerToken**](docs/Api/GoogleApi.md#getpickertoken) | **GET** /v2/integrations/google/picker_token | Get Picker Token
*GoogleApi* | [**getSheets**](docs/Api/GoogleApi.md#getsheets) | **GET** /v2/integrations/google/sheets/{document_id} | Get Sheets
*GoogleAdsApi* | [**addKeywordToGroup**](docs/Api/GoogleAdsApi.md#addkeywordtogroup) | **POST** /v2/integrations/google_ads/keyword/add_to_group | Add Keyword To Group
*GoogleAdsApi* | [**analyzeNotAssignedKeywords**](docs/Api/GoogleAdsApi.md#analyzenotassignedkeywords) | **POST** /v2/integrations/google_ads/analyze_not_assigned_keywords | Analyze Not Assigned Keywords
*GoogleAdsApi* | [**getGoogleAdsCampaigns**](docs/Api/GoogleAdsApi.md#getgoogleadscampaigns) | **POST** /v2/integrations/google_ads/campaigns | Get Google Ads Campaigns
*GoogleAdsApi* | [**getGoogleAdsCustomers**](docs/Api/GoogleAdsApi.md#getgoogleadscustomers) | **POST** /v2/integrations/google_ads/customers | Get Google Ads Customers
*GoogleAdsApi* | [**getGoogleAdsGroups**](docs/Api/GoogleAdsApi.md#getgoogleadsgroups) | **POST** /v2/integrations/google_ads/groups | Get Google Ads Groups
*GoogleAdsApi* | [**getRecommendations**](docs/Api/GoogleAdsApi.md#getrecommendations) | **POST** /v2/integrations/google_ads/recommendations/ | Get Recommendations
*GoogleAdsApi* | [**importGoogleAdsCampaigns**](docs/Api/GoogleAdsApi.md#importgoogleadscampaigns) | **POST** /v2/integrations/google_ads/campaigns/import | Import Google Ads Campaigns
*GoogleAdsApi* | [**importGoogleAdsCustomers**](docs/Api/GoogleAdsApi.md#importgoogleadscustomers) | **POST** /v2/integrations/google_ads/customers/import | Import Google Ads Customers
*GoogleAdsApi* | [**importGoogleAdsGroups**](docs/Api/GoogleAdsApi.md#importgoogleadsgroups) | **POST** /v2/integrations/google_ads/groups/import | Import Google Ads Groups
*GoogleAdsApi* | [**removeKeywordFromGroup**](docs/Api/GoogleAdsApi.md#removekeywordfromgroup) | **POST** /v2/integrations/google_ads/keyword/remove_from_group | Remove Keyword From Group
*GoogleAdsApi* | [**updateGoogleAdsCampaign**](docs/Api/GoogleAdsApi.md#updategoogleadscampaign) | **PUT** /v2/integrations/google_ads/campaigns/{customer_id}/{campaign_id} | Update Google Ads Campaign
*GoogleAdsApi* | [**updateGoogleAdsCustomerUpdate**](docs/Api/GoogleAdsApi.md#updategoogleadscustomerupdate) | **PUT** /v2/integrations/google_ads/customers/{customer_id} | Update Google Ads Customer Update
*GoogleAdsApi* | [**updateGoogleAdsGroup**](docs/Api/GoogleAdsApi.md#updategoogleadsgroup) | **PUT** /v2/integrations/google_ads/groups/{customer_id}/{campaign_id}/{group_id} | Update Google Ads Group
*HubSpotApi* | [**getActors**](docs/Api/HubSpotApi.md#getactors) | **GET** /v2/integrations/hubspot/actors/ | Get Actors
*ImagesApi* | [**convertImage**](docs/Api/ImagesApi.md#convertimage) | **POST** /v2/images/convert | Convert Image
*ImagesApi* | [**getScreenshot**](docs/Api/ImagesApi.md#getscreenshot) | **POST** /v2/images/screenshot | Get Screenshot
*ImagesApi* | [**optimizeImage**](docs/Api/ImagesApi.md#optimizeimage) | **POST** /v2/images/optimize | Optimize Image
*InstagramApi* | [**getProfileInformation**](docs/Api/InstagramApi.md#getprofileinformation) | **GET** /v2/integrations/instagram/profile_information | Get Profile Information
*IntegrationsApi* | [**adminUi**](docs/Api/IntegrationsApi.md#adminui) | **POST** /v2/integrations/zendesk_channel/admin_ui | Admin Ui
*IntegrationsApi* | [**channelback**](docs/Api/IntegrationsApi.md#channelback) | **POST** /v2/integrations/zendesk_channel/channelback | Channelback
*IntegrationsApi* | [**createIntegration**](docs/Api/IntegrationsApi.md#createintegration) | **POST** /v2/integrations/{slug}/integrate | Create Integration
*IntegrationsApi* | [**customerDataRequest**](docs/Api/IntegrationsApi.md#customerdatarequest) | **POST** /v2/integrations/shopify/webhooks/customers/data_request | Customer Data Request
*IntegrationsApi* | [**customerRedact**](docs/Api/IntegrationsApi.md#customerredact) | **POST** /v2/integrations/shopify/webhooks/customers/redact | Customer Redact
*IntegrationsApi* | [**deleteIntegration**](docs/Api/IntegrationsApi.md#deleteintegration) | **DELETE** /v2/integrations/{slug}/{integration_id} | Delete Integration
*IntegrationsApi* | [**deleteJiraWebhook**](docs/Api/IntegrationsApi.md#deletejirawebhook) | **DELETE** /v2/integrations/atlassian/jira/webhooks/{webhook_id} | Delete Jira Webhook
*IntegrationsApi* | [**eventsCallback**](docs/Api/IntegrationsApi.md#eventscallback) | **POST** /v2/integrations/zendesk_channel/events | Events Callback
*IntegrationsApi* | [**getActors**](docs/Api/IntegrationsApi.md#getactors) | **GET** /v2/integrations/hubspot/actors/ | Get Actors
*IntegrationsApi* | [**getAirtableBases**](docs/Api/IntegrationsApi.md#getairtablebases) | **GET** /v2/integrations/airtable/ | Get Airtable Bases
*IntegrationsApi* | [**getAirtableTables**](docs/Api/IntegrationsApi.md#getairtabletables) | **GET** /v2/integrations/airtable/bases/{base_id}/tables | Get Airtable Tables
*IntegrationsApi* | [**getAllIntegrations**](docs/Api/IntegrationsApi.md#getallintegrations) | **GET** /v2/integrations/all | Get All Integrations
*IntegrationsApi* | [**getBranches**](docs/Api/IntegrationsApi.md#getbranches) | **GET** /v2/integrations/gitlab/branches | Get Branches
*IntegrationsApi* | [**getCalendars**](docs/Api/IntegrationsApi.md#getcalendars) | **GET** /v2/integrations/google/calendar | Get Calendars
*IntegrationsApi* | [**getClickupSpaces**](docs/Api/IntegrationsApi.md#getclickupspaces) | **GET** /v2/integrations/clickup/{integration_id}/spaces | Get Clickup Spaces
*IntegrationsApi* | [**getClickupWorkspaces**](docs/Api/IntegrationsApi.md#getclickupworkspaces) | **GET** /v2/integrations/clickup/ | Get Clickup Workspaces
*IntegrationsApi* | [**getConfluencePages**](docs/Api/IntegrationsApi.md#getconfluencepages) | **GET** /v2/integrations/atlassian/confluence/spaces/{space_key}/pages | Get Confluence Pages
*IntegrationsApi* | [**getConfluenceSpaces**](docs/Api/IntegrationsApi.md#getconfluencespaces) | **GET** /v2/integrations/atlassian/confluence/spaces | Get Confluence Spaces
*IntegrationsApi* | [**getHubspotCustomChannelConnect**](docs/Api/IntegrationsApi.md#gethubspotcustomchannelconnect) | **GET** /v2/integrations/hubspot_custom_channel_connect | Get Hubspot Custom Channel Connect
*IntegrationsApi* | [**getIntegration**](docs/Api/IntegrationsApi.md#getintegration) | **GET** /v2/integrations/{slug}/{integration_id} | Get Integration
*IntegrationsApi* | [**getJiraAssignees**](docs/Api/IntegrationsApi.md#getjiraassignees) | **GET** /v2/integrations/atlassian/jira/projects/{project_key}/assignees | Get Jira Assignees
*IntegrationsApi* | [**getJiraIssues**](docs/Api/IntegrationsApi.md#getjiraissues) | **GET** /v2/integrations/atlassian/jira/projects/{project_key}/issues | Get Jira Issues
*IntegrationsApi* | [**getJiraProjects**](docs/Api/IntegrationsApi.md#getjiraprojects) | **GET** /v2/integrations/atlassian/jira/projects | Get Jira Projects
*IntegrationsApi* | [**getJiraTransitions**](docs/Api/IntegrationsApi.md#getjiratransitions) | **GET** /v2/integrations/atlassian/jira/issues/{issue_key}/transitions | Get Jira Transitions
*IntegrationsApi* | [**getMembers**](docs/Api/IntegrationsApi.md#getmembers) | **GET** /v2/integrations/wix/members | Get Members
*IntegrationsApi* | [**getPickerToken**](docs/Api/IntegrationsApi.md#getpickertoken) | **GET** /v2/integrations/google/picker_token | Get Picker Token
*IntegrationsApi* | [**getProfileInformation**](docs/Api/IntegrationsApi.md#getprofileinformation) | **GET** /v2/integrations/instagram/profile_information | Get Profile Information
*IntegrationsApi* | [**getProjects**](docs/Api/IntegrationsApi.md#getprojects) | **GET** /v2/integrations/gitlab/projects | Get Projects
*IntegrationsApi* | [**getRepos**](docs/Api/IntegrationsApi.md#getrepos) | **GET** /v2/integrations/github/repos | Get Repos
*IntegrationsApi* | [**getSheets**](docs/Api/IntegrationsApi.md#getsheets) | **GET** /v2/integrations/google/sheets/{document_id} | Get Sheets
*IntegrationsApi* | [**getShopify**](docs/Api/IntegrationsApi.md#getshopify) | **GET** /v2/integrations/shopify/ | Get Shopify
*IntegrationsApi* | [**getSlackChannels**](docs/Api/IntegrationsApi.md#getslackchannels) | **GET** /v2/integrations/slack/{slack_team_id}/channels | Get Slack Channels
*IntegrationsApi* | [**getSlackWorkspaces**](docs/Api/IntegrationsApi.md#getslackworkspaces) | **GET** /v2/integrations/slack/ | Get Slack Workspaces
*IntegrationsApi* | [**getWordpressPostCategories**](docs/Api/IntegrationsApi.md#getwordpresspostcategories) | **GET** /v2/integrations/wordpress/{integration_id}/categories | Get Wordpress Post Categories
*IntegrationsApi* | [**getWordpressPostTags**](docs/Api/IntegrationsApi.md#getwordpressposttags) | **GET** /v2/integrations/wordpress/{integration_id}/tags | Get Wordpress Post Tags
*IntegrationsApi* | [**getWordpressSites**](docs/Api/IntegrationsApi.md#getwordpresssites) | **GET** /v2/integrations/wordpress/sites | Get Wordpress Sites
*IntegrationsApi* | [**integrationCallback**](docs/Api/IntegrationsApi.md#integrationcallback) | **GET** /v2/integrations/{slug}/callback | Integration Callback
*IntegrationsApi* | [**listJiraWebhooks**](docs/Api/IntegrationsApi.md#listjirawebhooks) | **GET** /v2/integrations/atlassian/jira/webhooks | List Jira Webhooks
*IntegrationsApi* | [**listZendeskKbCategories**](docs/Api/IntegrationsApi.md#listzendeskkbcategories) | **GET** /v2/integrations/zendesk/kb/categories | List Zendesk Kb Categories
*IntegrationsApi* | [**listZendeskKbLabels**](docs/Api/IntegrationsApi.md#listzendeskkblabels) | **GET** /v2/integrations/zendesk/kb/labels | List Zendesk Kb Labels
*IntegrationsApi* | [**listZendeskKbSections**](docs/Api/IntegrationsApi.md#listzendeskkbsections) | **GET** /v2/integrations/zendesk/kb/sections | List Zendesk Kb Sections
*IntegrationsApi* | [**manifest**](docs/Api/IntegrationsApi.md#manifest) | **GET** /v2/integrations/zendesk_channel/manifest.json | Manifest
*IntegrationsApi* | [**messagingWebhook**](docs/Api/IntegrationsApi.md#messagingwebhook) | **POST** /v2/integrations/zendesk_channel/messaging_webhook | Messaging Webhook
*IntegrationsApi* | [**messagingWebhookHead**](docs/Api/IntegrationsApi.md#messagingwebhookhead) | **HEAD** /v2/integrations/zendesk_channel/messaging_webhook | Messaging Webhook Head
*IntegrationsApi* | [**searchIntegrations**](docs/Api/IntegrationsApi.md#searchintegrations) | **POST** /v2/integrations/{slug} | Search Integrations
*IntegrationsApi* | [**shopRedact**](docs/Api/IntegrationsApi.md#shopredact) | **POST** /v2/integrations/shopify/webhooks/shop/redact | Shop Redact
*IntegrationsApi* | [**subscriptionCancel**](docs/Api/IntegrationsApi.md#subscriptioncancel) | **POST** /v2/integrations/shopify/webhooks/billing/subscription_cancel | Subscription Cancel
*IntegrationsApi* | [**subscriptionUpdate**](docs/Api/IntegrationsApi.md#subscriptionupdate) | **POST** /v2/integrations/shopify/webhooks/billing/subscription_update | Subscription Update
*IntegrationsApi* | [**updateAdminConsent**](docs/Api/IntegrationsApi.md#updateadminconsent) | **POST** /v2/integrations/microsoft_entra_id/admin_consent | Update Admin Consent
*LogsApi* | [**searchLogs**](docs/Api/LogsApi.md#searchlogs) | **POST** /v2/logs/search | Search logs
*MCPServersApi* | [**createMcpServer**](docs/Api/MCPServersApi.md#createmcpserver) | **POST** /v2/mcp_servers/create | Create Mcp Server
*MCPServersApi* | [**deleteMcpServer**](docs/Api/MCPServersApi.md#deletemcpserver) | **DELETE** /v2/mcp_servers/{mcp_server_id} | Delete Mcp Server
*MCPServersApi* | [**getAllMcpSubservers**](docs/Api/MCPServersApi.md#getallmcpsubservers) | **GET** /v2/mcp_servers/all | Get All Mcp Subservers
*MCPServersApi* | [**getMcpServer**](docs/Api/MCPServersApi.md#getmcpserver) | **GET** /v2/mcp_servers/{mcp_server_id} | Get Mcp Server
*MCPServersApi* | [**searchMcpServers**](docs/Api/MCPServersApi.md#searchmcpservers) | **POST** /v2/mcp_servers/ | Search Mcp Servers
*MCPServersApi* | [**updateMcpServer**](docs/Api/MCPServersApi.md#updatemcpserver) | **PUT** /v2/mcp_servers/{mcp_server_id} | Update Mcp Server
*MediaApi* | [**getTranscript**](docs/Api/MediaApi.md#gettranscript) | **POST** /v2/media/transcript | Get Transcript
*MediaApi* | [**getTranscriptResult**](docs/Api/MediaApi.md#gettranscriptresult) | **POST** /v2/media/transcript_status | Get Transcript Result
*MediaApi* | [**getYoutubeTranscript**](docs/Api/MediaApi.md#getyoutubetranscript) | **POST** /v2/media/youtube/transcript | Get Youtube Transcript
*MemoryApi* | [**createNode**](docs/Api/MemoryApi.md#createnode) | **POST** /v2/memory/node/create | Create Node
*MemoryApi* | [**deleteNode**](docs/Api/MemoryApi.md#deletenode) | **DELETE** /v2/memory/node/{node_id} | Delete Node
*MemoryApi* | [**getNode**](docs/Api/MemoryApi.md#getnode) | **POST** /v2/memory/node/{node_id} | Get Node
*MemoryApi* | [**getOffloadedContent**](docs/Api/MemoryApi.md#getoffloadedcontent) | **POST** /v2/memory/node/{node_id}/offload/{offload_id} | Get Offloaded Content
*MemoryApi* | [**processDocuments**](docs/Api/MemoryApi.md#processdocuments) | **POST** /v2/memory/process-documents | Process Documents
*MemoryApi* | [**searchMemoryCategories**](docs/Api/MemoryApi.md#searchmemorycategories) | **POST** /v2/memory/search | Search Memory Categories
*MemoryApi* | [**searchMemoryNodeName**](docs/Api/MemoryApi.md#searchmemorynodename) | **POST** /v2/memory/search_node_name | Search Memory Node Name
*MemoryApi* | [**searchMemoryNodePath**](docs/Api/MemoryApi.md#searchmemorynodepath) | **POST** /v2/memory/search_node_path | Search Memory Node Path
*MemoryApi* | [**updateNode**](docs/Api/MemoryApi.md#updatenode) | **PUT** /v2/memory/node/{node_id} | Update Node
*MemoryApi* | [**uploadMemoryNodeDocument**](docs/Api/MemoryApi.md#uploadmemorynodedocument) | **POST** /v2/memory/upload/{cat_id} | Upload Memory Node Document
*MicrosoftOutlookApi* | [**updateAdminConsent**](docs/Api/MicrosoftOutlookApi.md#updateadminconsent) | **POST** /v2/integrations/microsoft_entra_id/admin_consent | Update Admin Consent
*ObservabilityDriverApi* | [**activateLangfuseObservabilityDriver**](docs/Api/ObservabilityDriverApi.md#activatelangfuseobservabilitydriver) | **POST** /v2/observability_driver/langfuse | Activate Langfuse Observability Driver
*ObservabilityDriverApi* | [**activatePowerBiObservabilityDriver**](docs/Api/ObservabilityDriverApi.md#activatepowerbiobservabilitydriver) | **POST** /v2/observability_driver/power_bi | Activate Power Bi Observability Driver
*ObservabilityDriverApi* | [**createPowerBiPushDataset**](docs/Api/ObservabilityDriverApi.md#createpowerbipushdataset) | **POST** /v2/observability_driver/power_bi/push_dataset | Create Power Bi Push Dataset
*ObservabilityDriverApi* | [**deleteObservabilityDriver**](docs/Api/ObservabilityDriverApi.md#deleteobservabilitydriver) | **DELETE** /v2/observability_driver/{driver_type} | Delete Observability Driver
*ObservabilityDriverApi* | [**getObservabilityDriver**](docs/Api/ObservabilityDriverApi.md#getobservabilitydriver) | **GET** /v2/observability_driver/{driver_type} | Get Observability Driver
*ObservabilityDriverApi* | [**getObservabilityDriverWorkspace**](docs/Api/ObservabilityDriverApi.md#getobservabilitydriverworkspace) | **POST** /v2/observability_driver/ | Get Observability Driver Workspace
*ObservabilityDriverApi* | [**listPowerBiDatasets**](docs/Api/ObservabilityDriverApi.md#listpowerbidatasets) | **POST** /v2/observability_driver/power_bi/datasets | List Power Bi Datasets
*ObservabilityDriverApi* | [**listPowerBiTables**](docs/Api/ObservabilityDriverApi.md#listpowerbitables) | **POST** /v2/observability_driver/power_bi/tables | List Power Bi Tables
*ObservabilityDriverApi* | [**listPowerBiWorkspaces**](docs/Api/ObservabilityDriverApi.md#listpowerbiworkspaces) | **GET** /v2/observability_driver/power_bi/workspaces | List Power Bi Workspaces
*ObservabilityDriverApi* | [**updateLangfuseObservabilityDriver**](docs/Api/ObservabilityDriverApi.md#updatelangfuseobservabilitydriver) | **PUT** /v2/observability_driver/langfuse | Update Langfuse Observability Driver
*ObservabilityDriverApi* | [**updatePowerBiObservabilityDriver**](docs/Api/ObservabilityDriverApi.md#updatepowerbiobservabilitydriver) | **PUT** /v2/observability_driver/power_bi | Update Power Bi Observability Driver
*ObservabilityDriverApi* | [**validatePushDatasetTable**](docs/Api/ObservabilityDriverApi.md#validatepushdatasettable) | **POST** /v2/observability_driver/power_bi/validate_push_dataset | Validate Push Dataset Table
*PhotoAIApi* | [**explore**](docs/Api/PhotoAIApi.md#explore) | **GET** /v2/photo_ai/public/explore | Explore
*PhotoAIApi* | [**getEffects**](docs/Api/PhotoAIApi.md#geteffects) | **GET** /v2/photo_ai/public/effects | Get Effects
*PhotoAIApi* | [**getStyles**](docs/Api/PhotoAIApi.md#getstyles) | **GET** /v2/photo_ai/public/styles | Get Styles
*PhotoAIApi* | [**getTemplates**](docs/Api/PhotoAIApi.md#gettemplates) | **GET** /v2/photo_ai/public/templates | Get Templates
*PromptsApi* | [**createPrompt**](docs/Api/PromptsApi.md#createprompt) | **POST** /v2/prompts/create | Create Prompt
*PromptsApi* | [**createPromptCategory**](docs/Api/PromptsApi.md#createpromptcategory) | **POST** /v2/prompts/categories/create | Create Prompt Category
*PromptsApi* | [**deletePrompt**](docs/Api/PromptsApi.md#deleteprompt) | **DELETE** /v2/prompts/{prompt_id} | Delete Prompt
*PromptsApi* | [**deletePromptCategory**](docs/Api/PromptsApi.md#deletepromptcategory) | **DELETE** /v2/prompts/categories/{cat_id} | Delete Prompt Category
*PromptsApi* | [**optimizePrompt**](docs/Api/PromptsApi.md#optimizeprompt) | **POST** /v2/prompts/optimize | Optimize Prompt
*PromptsApi* | [**searchPromptCategories**](docs/Api/PromptsApi.md#searchpromptcategories) | **POST** /v2/prompts/categories/search | Search Prompt Categories
*PromptsApi* | [**searchPrompts**](docs/Api/PromptsApi.md#searchprompts) | **POST** /v2/prompts/search | Search Prompts
*PromptsApi* | [**updatePrompt**](docs/Api/PromptsApi.md#updateprompt) | **PUT** /v2/prompts/{prompt_id} | Update Prompt
*PromptsApi* | [**updatePromptCategory**](docs/Api/PromptsApi.md#updatepromptcategory) | **PUT** /v2/prompts/categories/{cat_id} | Update Prompt Category
*SERPApi* | [**searchClusterQuery**](docs/Api/SERPApi.md#searchclusterquery) | **POST** /v2/serp/clusters/keywords | Search Cluster Query
*SERPApi* | [**serpClusterAddQueries**](docs/Api/SERPApi.md#serpclusteraddqueries) | **POST** /v2/serp/clusters/{customer_id}/{campaign_id}/{group_id}/add_keywords | Serp Cluster Add Queries
*SERPApi* | [**serpClusterDeleteCampaign**](docs/Api/SERPApi.md#serpclusterdeletecampaign) | **DELETE** /v2/serp/clusters/{customer_id}/{campaign_id} | Serp Cluster Delete Campaign
*SERPApi* | [**serpClusterDeleteCustomer**](docs/Api/SERPApi.md#serpclusterdeletecustomer) | **DELETE** /v2/serp/clusters/{customer_id} | Serp Cluster Delete Customer
*SERPApi* | [**serpClusterDeleteGroup**](docs/Api/SERPApi.md#serpclusterdeletegroup) | **DELETE** /v2/serp/clusters/{customer_id}/{campaign_id}/{group_id} | Serp Cluster Delete Group
*SERPApi* | [**serpClusterDeleteGroupQueries**](docs/Api/SERPApi.md#serpclusterdeletegroupqueries) | **DELETE** /v2/serp/clusters/{customer_id}/{campaign_id}/{group_id}/delete_queries | Serp Cluster Delete Group Queries
*SERPApi* | [**serpClusterGetGraphNodes**](docs/Api/SERPApi.md#serpclustergetgraphnodes) | **POST** /v2/serp/clusters/graph_nodes | Serp Cluster Get Graph Nodes
*SERPApi* | [**serpClusterGetMatchingGroupsToQuery**](docs/Api/SERPApi.md#serpclustergetmatchinggroupstoquery) | **POST** /v2/serp/clusters/recommended_groups | Serp Cluster Get Matching Groups To Query
*SERPApi* | [**serpClusterGetRelatedKeywordsToQuery**](docs/Api/SERPApi.md#serpclustergetrelatedkeywordstoquery) | **POST** /v2/serp/clusters/related_keywords | Serp Cluster Get Related Keywords To Query
*SERPApi* | [**serpClusterSplitToSubClusters**](docs/Api/SERPApi.md#serpclustersplittosubclusters) | **POST** /v2/serp/clusters/split_sub_clusters | Serp Cluster Split To Sub Clusters
*SERPApi* | [**serpSearch**](docs/Api/SERPApi.md#serpsearch) | **POST** /v2/serp/serp/search | Serp Search
*SERPApi* | [**serpVolumes**](docs/Api/SERPApi.md#serpvolumes) | **POST** /v2/serp/serp/volumes | Serp Volumes
*SERPApi* | [**serpVolumesPingback**](docs/Api/SERPApi.md#serpvolumespingback) | **GET** /v2/serp/serp/volumes/pingback/{id}/{tag} | Serp Volumes Pingback
*SchedulesApi* | [**createSchedules**](docs/Api/SchedulesApi.md#createschedules) | **POST** /v2/schedules/create | Create Schedules
*SchedulesApi* | [**deleteSchedule**](docs/Api/SchedulesApi.md#deleteschedule) | **DELETE** /v2/schedules/{schedule_id} | Delete Schedule
*SchedulesApi* | [**deleteScheduleUrl**](docs/Api/SchedulesApi.md#deletescheduleurl) | **DELETE** /v2/schedules/{schedule_id}/urls/{domain_id}/{url_id} | Delete Schedule Url
*SchedulesApi* | [**getSchedule**](docs/Api/SchedulesApi.md#getschedule) | **GET** /v2/schedules/{schedule_id} | Get Schedule
*SchedulesApi* | [**getScheduleUrlDetails**](docs/Api/SchedulesApi.md#getscheduleurldetails) | **GET** /v2/schedules/{schedule_id}/urls/{domain_id}/{url_id} | Get Schedule Url Details
*SchedulesApi* | [**getSchedules**](docs/Api/SchedulesApi.md#getschedules) | **POST** /v2/schedules/ | Get Schedules
*SchedulesApi* | [**runSchedule**](docs/Api/SchedulesApi.md#runschedule) | **POST** /v2/schedules/run/{schedule_id} | Run Schedule
*SchedulesApi* | [**searchScheduleUrls**](docs/Api/SchedulesApi.md#searchscheduleurls) | **POST** /v2/schedules/urls/ | Search Schedule Urls
*SchedulesApi* | [**updateSchedule**](docs/Api/SchedulesApi.md#updateschedule) | **PUT** /v2/schedules/{schedule_id} | Update Schedule
*SemanticSearchApi* | [**getSimilarDocsByDocId**](docs/Api/SemanticSearchApi.md#getsimilardocsbydocid) | **POST** /v2/similarities/document/live | Get Similar Docs By Doc Id
*SemanticSearchApi* | [**getSimilarDocsByQuery**](docs/Api/SemanticSearchApi.md#getsimilardocsbyquery) | **POST** /v2/similarities/query/live | Get Similar Docs By Query
*SemanticSearchApi* | [**scheduleSimilarDocsByDocId**](docs/Api/SemanticSearchApi.md#schedulesimilardocsbydocid) | **POST** /v2/similarities/document | Schedule Similar Docs By Doc Id
*SemanticSearchApi* | [**scheduleSimilarDocsByQuery**](docs/Api/SemanticSearchApi.md#schedulesimilardocsbyquery) | **POST** /v2/similarities/query | Schedule Similar Docs By Query
*ShopifyApi* | [**customerDataRequest**](docs/Api/ShopifyApi.md#customerdatarequest) | **POST** /v2/integrations/shopify/webhooks/customers/data_request | Customer Data Request
*ShopifyApi* | [**customerRedact**](docs/Api/ShopifyApi.md#customerredact) | **POST** /v2/integrations/shopify/webhooks/customers/redact | Customer Redact
*ShopifyApi* | [**getShopify**](docs/Api/ShopifyApi.md#getshopify) | **GET** /v2/integrations/shopify/ | Get Shopify
*ShopifyApi* | [**shopRedact**](docs/Api/ShopifyApi.md#shopredact) | **POST** /v2/integrations/shopify/webhooks/shop/redact | Shop Redact
*ShopifyApi* | [**subscriptionCancel**](docs/Api/ShopifyApi.md#subscriptioncancel) | **POST** /v2/integrations/shopify/webhooks/billing/subscription_cancel | Subscription Cancel
*ShopifyApi* | [**subscriptionUpdate**](docs/Api/ShopifyApi.md#subscriptionupdate) | **POST** /v2/integrations/shopify/webhooks/billing/subscription_update | Subscription Update
*SlackApi* | [**getSlackChannels**](docs/Api/SlackApi.md#getslackchannels) | **GET** /v2/integrations/slack/{slack_team_id}/channels | Get Slack Channels
*SlackApi* | [**getSlackWorkspaces**](docs/Api/SlackApi.md#getslackworkspaces) | **GET** /v2/integrations/slack/ | Get Slack Workspaces
*TagsApi* | [**createTag**](docs/Api/TagsApi.md#createtag) | **POST** /v2/tags/create | Create Tag
*TagsApi* | [**deleteTag**](docs/Api/TagsApi.md#deletetag) | **DELETE** /v2/tags/{tag_id} | Delete Tag
*TagsApi* | [**searchTags**](docs/Api/TagsApi.md#searchtags) | **POST** /v2/tags/search | Search Tags
*TagsApi* | [**updateTag**](docs/Api/TagsApi.md#updatetag) | **PUT** /v2/tags/{tag_id} | Update Tag
*TrackingApi* | [**searchEvents**](docs/Api/TrackingApi.md#searchevents) | **POST** /v2/tracking/events | Search Events
*TrackingApi* | [**searchLinks**](docs/Api/TrackingApi.md#searchlinks) | **POST** /v2/tracking/links | Search Links
*TrackingApi* | [**searchSources**](docs/Api/TrackingApi.md#searchsources) | **POST** /v2/tracking/sources | Search Sources
*TrackingApi* | [**trackClick**](docs/Api/TrackingApi.md#trackclick) | **POST** /v2/tracking/clk | Track Click
*TrackingApi* | [**trackEvent**](docs/Api/TrackingApi.md#trackevent) | **POST** /v2/tracking/evnt | Track Event
*TrackingApi* | [**trackLink**](docs/Api/TrackingApi.md#tracklink) | **POST** /v2/tracking/lnk | Track Link
*V3Api* | [**checkMigrationReadiness**](docs/Api/V3Api.md#checkmigrationreadiness) | **GET** /v3/flows/{flow_id}/migration-readiness | Check Migration Readiness
*V3Api* | [**createV3FlowAssistantSession**](docs/Api/V3Api.md#createv3flowassistantsession) | **POST** /v3/flow-assistants/create | Create V3 Flow Assistant Session
*V3Api* | [**getAllComponentsV3**](docs/Api/V3Api.md#getallcomponentsv3) | **GET** /v3/flows/components/all | Get All Components V3
*V3Api* | [**getTool**](docs/Api/V3Api.md#gettool) | **GET** /v3/tools/{step_name} | Get Tool
*V3Api* | [**getV3Components**](docs/Api/V3Api.md#getv3components) | **GET** /v3/flows/components/v3 | Get V3 Components
*V3Api* | [**invokeV3FlowAssistantResponse**](docs/Api/V3Api.md#invokev3flowassistantresponse) | **POST** /v3/flow-assistants/{session_id}/invoke | Invoke V3 Flow Assistant Response
*V3Api* | [**listTools**](docs/Api/V3Api.md#listtools) | **GET** /v3/tools | List Tools
*V3Api* | [**migrateFlowToV3**](docs/Api/V3Api.md#migrateflowtov3) | **POST** /v3/flows/{flow_id}/migrate-to-v3 | Migrate Flow To V3
*V3Api* | [**pollV3FlowAssistantResponse**](docs/Api/V3Api.md#pollv3flowassistantresponse) | **POST** /v3/flow-assistants/{session_id}/invocation_response/{from_timestamp} | Poll V3 Flow Assistant Response
*V3Api* | [**validateComponent**](docs/Api/V3Api.md#validatecomponent) | **POST** /v3/flows/components/{component_id}/validate | Validate Component
*V3Api* | [**validateFlow**](docs/Api/V3Api.md#validateflow) | **POST** /v3/flows/validate | Validate Flow
*WebAuthApi* | [**getUser**](docs/Api/WebAuthApi.md#getuser) | **GET** /v2/auth/me | Get User
*WixApi* | [**getMembers**](docs/Api/WixApi.md#getmembers) | **GET** /v2/integrations/wix/members | Get Members
*WordPressApi* | [**getWordpressPostCategories**](docs/Api/WordPressApi.md#getwordpresspostcategories) | **GET** /v2/integrations/wordpress/{integration_id}/categories | Get Wordpress Post Categories
*WordPressApi* | [**getWordpressPostTags**](docs/Api/WordPressApi.md#getwordpressposttags) | **GET** /v2/integrations/wordpress/{integration_id}/tags | Get Wordpress Post Tags
*WordPressApi* | [**getWordpressSites**](docs/Api/WordPressApi.md#getwordpresssites) | **GET** /v2/integrations/wordpress/sites | Get Wordpress Sites
*WorkspacesApi* | [**addWorkspaceUser**](docs/Api/WorkspacesApi.md#addworkspaceuser) | **POST** /v2/workspaces/{workspace_id}/add-member | Add Workspace User
*WorkspacesApi* | [**createWorkspace**](docs/Api/WorkspacesApi.md#createworkspace) | **POST** /v2/workspaces/create | Create Workspace
*WorkspacesApi* | [**deleteWorkspace**](docs/Api/WorkspacesApi.md#deleteworkspace) | **DELETE** /v2/workspaces/{workspace_id} | Delete Workspace
*WorkspacesApi* | [**deleteWorkspaceUser**](docs/Api/WorkspacesApi.md#deleteworkspaceuser) | **DELETE** /v2/workspaces/{workspace_id}/{user_id} | Delete Workspace User
*WorkspacesApi* | [**getWorkspace**](docs/Api/WorkspacesApi.md#getworkspace) | **POST** /v2/workspaces/{workspace_id} | Get Workspace
*WorkspacesApi* | [**searchMyWorkspaces**](docs/Api/WorkspacesApi.md#searchmyworkspaces) | **POST** /v2/workspaces/me/my_workspaces | Search My Workspaces
*WorkspacesApi* | [**searchWorkspaceUsers**](docs/Api/WorkspacesApi.md#searchworkspaceusers) | **POST** /v2/workspaces/{workspace_id}/users | Search Workspace Users
*WorkspacesApi* | [**transferWorkspaceOwnership**](docs/Api/WorkspacesApi.md#transferworkspaceownership) | **POST** /v2/workspaces/{workspace_id}/transfer-ownership/{new_owner_user_id} | Transfer Workspace Ownership
*WorkspacesApi* | [**updateWorkspace**](docs/Api/WorkspacesApi.md#updateworkspace) | **PUT** /v2/workspaces/{workspace_id} | Update Workspace
*WorkspacesApi* | [**updateWorkspaceCreditAlertThreshold**](docs/Api/WorkspacesApi.md#updateworkspacecreditalertthreshold) | **PUT** /v2/workspaces/{workspace_id}/credit-alert-threshold | Update Workspace Credit Alert Threshold
*WorkspacesApi* | [**updateWorkspaceCreditLimit**](docs/Api/WorkspacesApi.md#updateworkspacecreditlimit) | **PUT** /v2/workspaces/{workspace_id}/credit-limit | Update Workspace Credit Limit
*WorkspacesApi* | [**updateWorkspaceUser**](docs/Api/WorkspacesApi.md#updateworkspaceuser) | **PUT** /v2/workspaces/{workspace_id}/{user_id} | Update Workspace User
*ZendeskApi* | [**listZendeskKbCategories**](docs/Api/ZendeskApi.md#listzendeskkbcategories) | **GET** /v2/integrations/zendesk/kb/categories | List Zendesk Kb Categories
*ZendeskApi* | [**listZendeskKbLabels**](docs/Api/ZendeskApi.md#listzendeskkblabels) | **GET** /v2/integrations/zendesk/kb/labels | List Zendesk Kb Labels
*ZendeskApi* | [**listZendeskKbSections**](docs/Api/ZendeskApi.md#listzendeskkbsections) | **GET** /v2/integrations/zendesk/kb/sections | List Zendesk Kb Sections
*ZendeskChannelApi* | [**adminUi**](docs/Api/ZendeskChannelApi.md#adminui) | **POST** /v2/integrations/zendesk_channel/admin_ui | Admin Ui
*ZendeskChannelApi* | [**channelback**](docs/Api/ZendeskChannelApi.md#channelback) | **POST** /v2/integrations/zendesk_channel/channelback | Channelback
*ZendeskChannelApi* | [**eventsCallback**](docs/Api/ZendeskChannelApi.md#eventscallback) | **POST** /v2/integrations/zendesk_channel/events | Events Callback
*ZendeskChannelApi* | [**manifest**](docs/Api/ZendeskChannelApi.md#manifest) | **GET** /v2/integrations/zendesk_channel/manifest.json | Manifest
*ZendeskChannelApi* | [**messagingWebhook**](docs/Api/ZendeskChannelApi.md#messagingwebhook) | **POST** /v2/integrations/zendesk_channel/messaging_webhook | Messaging Webhook
*ZendeskChannelApi* | [**messagingWebhookHead**](docs/Api/ZendeskChannelApi.md#messagingwebhookhead) | **HEAD** /v2/integrations/zendesk_channel/messaging_webhook | Messaging Webhook Head

## Models

- [AgentGridBulkInsertResponse](docs/Model/AgentGridBulkInsertResponse.md)
- [AgentGridCreateRequest](docs/Model/AgentGridCreateRequest.md)
- [AgentGridFieldRequest](docs/Model/AgentGridFieldRequest.md)
- [AgentGridFieldResponse](docs/Model/AgentGridFieldResponse.md)
- [AgentGridFieldType](docs/Model/AgentGridFieldType.md)
- [AgentGridImportError](docs/Model/AgentGridImportError.md)
- [AgentGridImportStartResponse](docs/Model/AgentGridImportStartResponse.md)
- [AgentGridImportStatusResponse](docs/Model/AgentGridImportStatusResponse.md)
- [AgentGridPreviewResponse](docs/Model/AgentGridPreviewResponse.md)
- [AgentGridResponse](docs/Model/AgentGridResponse.md)
- [AgentGridRowInsertRequest](docs/Model/AgentGridRowInsertRequest.md)
- [AgentGridRowInsertResponse](docs/Model/AgentGridRowInsertResponse.md)
- [AgentGridRowsBulkInsertRequest](docs/Model/AgentGridRowsBulkInsertRequest.md)
- [AgentGridSearchRequest](docs/Model/AgentGridSearchRequest.md)
- [AgentGridSearchResponse](docs/Model/AgentGridSearchResponse.md)
- [AirtableBaseResponse](docs/Model/AirtableBaseResponse.md)
- [AirtableBasesResponse](docs/Model/AirtableBasesResponse.md)
- [AirtableFieldResponse](docs/Model/AirtableFieldResponse.md)
- [AirtableTableResponse](docs/Model/AirtableTableResponse.md)
- [AirtableTablesResponse](docs/Model/AirtableTablesResponse.md)
- [AirtableViewResponse](docs/Model/AirtableViewResponse.md)
- [AllFlowsSearchRequest](docs/Model/AllFlowsSearchRequest.md)
- [ApiKeyCreateRequest](docs/Model/ApiKeyCreateRequest.md)
- [ApiKeyResponse](docs/Model/ApiKeyResponse.md)
- [ApiKeySearchRequest](docs/Model/ApiKeySearchRequest.md)
- [ApiKeyUpdateRequest](docs/Model/ApiKeyUpdateRequest.md)
- [AppUrlInput](docs/Model/AppUrlInput.md)
- [AppUrlOutput](docs/Model/AppUrlOutput.md)
- [AspecRatio](docs/Model/AspecRatio.md)
- [BaseFoundationModel](docs/Model/BaseFoundationModel.md)
- [BillingProvider](docs/Model/BillingProvider.md)
- [BoolChar](docs/Model/BoolChar.md)
- [BrandingResponse](docs/Model/BrandingResponse.md)
- [BrandingUpdateRequest](docs/Model/BrandingUpdateRequest.md)
- [CategoryType](docs/Model/CategoryType.md)
- [ChartSessionDurationResponse](docs/Model/ChartSessionDurationResponse.md)
- [ChartsFeedbackRequest](docs/Model/ChartsFeedbackRequest.md)
- [ChatbotCreateRequest](docs/Model/ChatbotCreateRequest.md)
- [ChatbotResponse](docs/Model/ChatbotResponse.md)
- [ChatbotSearchRequest](docs/Model/ChatbotSearchRequest.md)
- [ChatbotStatus](docs/Model/ChatbotStatus.md)
- [ChatbotUpdateRequest](docs/Model/ChatbotUpdateRequest.md)
- [ClickUpSpaceResponse](docs/Model/ClickUpSpaceResponse.md)
- [ClickUpWorkspaceResponse](docs/Model/ClickUpWorkspaceResponse.md)
- [CommunityImageGenerationsResponse](docs/Model/CommunityImageGenerationsResponse.md)
- [Completed](docs/Model/Completed.md)
- [ComponentValidateRequest](docs/Model/ComponentValidateRequest.md)
- [ComponentValidationError](docs/Model/ComponentValidationError.md)
- [ComponentValidationResponse](docs/Model/ComponentValidationResponse.md)
- [ConfluencePageResponse](docs/Model/ConfluencePageResponse.md)
- [ConfluencePagesResponse](docs/Model/ConfluencePagesResponse.md)
- [ConfluenceSpaceResponse](docs/Model/ConfluenceSpaceResponse.md)
- [ConfluenceSpacesResponse](docs/Model/ConfluenceSpacesResponse.md)
- [CreditBalanceResponse](docs/Model/CreditBalanceResponse.md)
- [CreditDailyChartDataRow](docs/Model/CreditDailyChartDataRow.md)
- [CreditDailyChartRequest](docs/Model/CreditDailyChartRequest.md)
- [CreditDailyChartResponse](docs/Model/CreditDailyChartResponse.md)
- [CreditDailyTransactionResponse](docs/Model/CreditDailyTransactionResponse.md)
- [CreditDailyTransactionSearchRequest](docs/Model/CreditDailyTransactionSearchRequest.md)
- [CreditTransactionResponse](docs/Model/CreditTransactionResponse.md)
- [CreditTransactionSearchRequest](docs/Model/CreditTransactionSearchRequest.md)
- [CustomerDataRequestPayload](docs/Model/CustomerDataRequestPayload.md)
- [CustomerRedactPayload](docs/Model/CustomerRedactPayload.md)
- [Data](docs/Model/Data.md)
- [DeleteNodeRequest](docs/Model/DeleteNodeRequest.md)
- [DocumentCategoryCreateRequest](docs/Model/DocumentCategoryCreateRequest.md)
- [DocumentCategoryResponse](docs/Model/DocumentCategoryResponse.md)
- [DocumentCategorySearchRequest](docs/Model/DocumentCategorySearchRequest.md)
- [DocumentCategoryUpdateRequest](docs/Model/DocumentCategoryUpdateRequest.md)
- [DocumentContent](docs/Model/DocumentContent.md)
- [DocumentContentResponse](docs/Model/DocumentContentResponse.md)
- [DocumentResponse](docs/Model/DocumentResponse.md)
- [DocumentSearchRequest](docs/Model/DocumentSearchRequest.md)
- [DocumentSimilarityRequest](docs/Model/DocumentSimilarityRequest.md)
- [DocumentSimilarityTaskRequest](docs/Model/DocumentSimilarityTaskRequest.md)
- [DocumentStatus](docs/Model/DocumentStatus.md)
- [DocumentType](docs/Model/DocumentType.md)
- [DocumentUpdateRequest](docs/Model/DocumentUpdateRequest.md)
- [DriverSuccessResponse](docs/Model/DriverSuccessResponse.md)
- [DriverType](docs/Model/DriverType.md)
- [FTStatus](docs/Model/FTStatus.md)
- [FTType](docs/Model/FTType.md)
- [FailedFaqItem](docs/Model/FailedFaqItem.md)
- [FaqCreateRequest](docs/Model/FaqCreateRequest.md)
- [FaqImportResponse](docs/Model/FaqImportResponse.md)
- [FaqResponse](docs/Model/FaqResponse.md)
- [FaqSearchRequest](docs/Model/FaqSearchRequest.md)
- [FaqStatus](docs/Model/FaqStatus.md)
- [FaqType](docs/Model/FaqType.md)
- [FaqUpdateRequest](docs/Model/FaqUpdateRequest.md)
- [FeedbackChartResponse](docs/Model/FeedbackChartResponse.md)
- [FileUploadResponse](docs/Model/FileUploadResponse.md)
- [FlowAssistantAIModel](docs/Model/FlowAssistantAIModel.md)
- [FlowAssistantAddComponentMetadata](docs/Model/FlowAssistantAddComponentMetadata.md)
- [FlowAssistantAddConnectionMetadata](docs/Model/FlowAssistantAddConnectionMetadata.md)
- [FlowAssistantCreateBlankFlowMetadata](docs/Model/FlowAssistantCreateBlankFlowMetadata.md)
- [FlowAssistantDeleteComponentMetadata](docs/Model/FlowAssistantDeleteComponentMetadata.md)
- [FlowAssistantDeleteConnectionMetadata](docs/Model/FlowAssistantDeleteConnectionMetadata.md)
- [FlowAssistantInvokeRequest](docs/Model/FlowAssistantInvokeRequest.md)
- [FlowAssistantSessionCreateRequest](docs/Model/FlowAssistantSessionCreateRequest.md)
- [FlowAssistantUpdateComponentMetadata](docs/Model/FlowAssistantUpdateComponentMetadata.md)
- [FlowBatchArtefactInfo](docs/Model/FlowBatchArtefactInfo.md)
- [FlowBatchColumnDefinition](docs/Model/FlowBatchColumnDefinition.md)
- [FlowBatchFilteredExecuteRequest](docs/Model/FlowBatchFilteredExecuteRequest.md)
- [FlowBatchRowCreateRequest](docs/Model/FlowBatchRowCreateRequest.md)
- [FlowBatchRowResponse](docs/Model/FlowBatchRowResponse.md)
- [FlowBatchRowStatus](docs/Model/FlowBatchRowStatus.md)
- [FlowBatchRowUpdateRequest](docs/Model/FlowBatchRowUpdateRequest.md)
- [FlowBatchRowsBulkCreateRequest](docs/Model/FlowBatchRowsBulkCreateRequest.md)
- [FlowBatchRunCreateRequest](docs/Model/FlowBatchRunCreateRequest.md)
- [FlowBatchRunDetailResponse](docs/Model/FlowBatchRunDetailResponse.md)
- [FlowBatchRunResponse](docs/Model/FlowBatchRunResponse.md)
- [FlowBatchRunStatus](docs/Model/FlowBatchRunStatus.md)
- [FlowBatchRunUpdateRequest](docs/Model/FlowBatchRunUpdateRequest.md)
- [FlowBranch](docs/Model/FlowBranch.md)
- [FlowCategoryCreateRequest](docs/Model/FlowCategoryCreateRequest.md)
- [FlowCategoryResponse](docs/Model/FlowCategoryResponse.md)
- [FlowCategorySearchRequest](docs/Model/FlowCategorySearchRequest.md)
- [FlowCommitRequest](docs/Model/FlowCommitRequest.md)
- [FlowCommitResponse](docs/Model/FlowCommitResponse.md)
- [FlowConfig](docs/Model/FlowConfig.md)
- [FlowCreate](docs/Model/FlowCreate.md)
- [FlowCronCreateRequest](docs/Model/FlowCronCreateRequest.md)
- [FlowCronResponse](docs/Model/FlowCronResponse.md)
- [FlowCronSearchRequest](docs/Model/FlowCronSearchRequest.md)
- [FlowCronStatus](docs/Model/FlowCronStatus.md)
- [FlowCronUpdateRequest](docs/Model/FlowCronUpdateRequest.md)
- [FlowDetailResponse](docs/Model/FlowDetailResponse.md)
- [FlowEngineVersion](docs/Model/FlowEngineVersion.md)
- [FlowEventActionType](docs/Model/FlowEventActionType.md)
- [FlowEventsSearchRequest](docs/Model/FlowEventsSearchRequest.md)
- [FlowEventsSearchResponse](docs/Model/FlowEventsSearchResponse.md)
- [FlowHuntProductSlug](docs/Model/FlowHuntProductSlug.md)
- [FlowInvokeRequest](docs/Model/FlowInvokeRequest.md)
- [FlowMessageFeedbackRequest](docs/Model/FlowMessageFeedbackRequest.md)
- [FlowMessageFeedbackResponse](docs/Model/FlowMessageFeedbackResponse.md)
- [FlowNode](docs/Model/FlowNode.md)
- [FlowNodeData](docs/Model/FlowNodeData.md)
- [FlowResponse](docs/Model/FlowResponse.md)
- [FlowSearchRequest](docs/Model/FlowSearchRequest.md)
- [FlowSessionAgentCotMetadata](docs/Model/FlowSessionAgentCotMetadata.md)
- [FlowSessionArtefactContentResponse](docs/Model/FlowSessionArtefactContentResponse.md)
- [FlowSessionArtefactInfo](docs/Model/FlowSessionArtefactInfo.md)
- [FlowSessionArtefactsMetadata](docs/Model/FlowSessionArtefactsMetadata.md)
- [FlowSessionAttachmentMetadata](docs/Model/FlowSessionAttachmentMetadata.md)
- [FlowSessionAttachmentResponse](docs/Model/FlowSessionAttachmentResponse.md)
- [FlowSessionCreateFromFlowRequest](docs/Model/FlowSessionCreateFromFlowRequest.md)
- [FlowSessionCreateRequest](docs/Model/FlowSessionCreateRequest.md)
- [FlowSessionEvent](docs/Model/FlowSessionEvent.md)
- [FlowSessionHookWaitingMetadata](docs/Model/FlowSessionHookWaitingMetadata.md)
- [FlowSessionInvocationResponse](docs/Model/FlowSessionInvocationResponse.md)
- [FlowSessionInvokeRequest](docs/Model/FlowSessionInvokeRequest.md)
- [FlowSessionLoadingMetadata](docs/Model/FlowSessionLoadingMetadata.md)
- [FlowSessionMessageFeedbackMetadata](docs/Model/FlowSessionMessageFeedbackMetadata.md)
- [FlowSessionMessageMetadata](docs/Model/FlowSessionMessageMetadata.md)
- [FlowSessionResponse](docs/Model/FlowSessionResponse.md)
- [FlowSessionResumeHookRequest](docs/Model/FlowSessionResumeHookRequest.md)
- [FlowSessionTaskResponseMetadata](docs/Model/FlowSessionTaskResponseMetadata.md)
- [FlowSessionTodoListMetadata](docs/Model/FlowSessionTodoListMetadata.md)
- [FlowSessionToolCallMetadata](docs/Model/FlowSessionToolCallMetadata.md)
- [FlowSessionV3FlowAssistantInitMetadata](docs/Model/FlowSessionV3FlowAssistantInitMetadata.md)
- [FlowSessionV3ToolCallEndMetadata](docs/Model/FlowSessionV3ToolCallEndMetadata.md)
- [FlowSessionV3ToolCallStartMetadata](docs/Model/FlowSessionV3ToolCallStartMetadata.md)
- [FlowSessionViewResponse](docs/Model/FlowSessionViewResponse.md)
- [FlowSessionViewSearchRequest](docs/Model/FlowSessionViewSearchRequest.md)
- [FlowSessionViewUpdateRequest](docs/Model/FlowSessionViewUpdateRequest.md)
- [FlowType](docs/Model/FlowType.md)
- [FlowUpdate](docs/Model/FlowUpdate.md)
- [FlowValidateRequest](docs/Model/FlowValidateRequest.md)
- [FlowValidationError](docs/Model/FlowValidationError.md)
- [FlowValidationResponse](docs/Model/FlowValidationResponse.md)
- [FlowVersionHistoryResponse](docs/Model/FlowVersionHistoryResponse.md)
- [GeneralMCPSubserverCapabilitiesResponse](docs/Model/GeneralMCPSubserverCapabilitiesResponse.md)
- [GeneralMCPSubserverResponse](docs/Model/GeneralMCPSubserverResponse.md)
- [GetNodeRequest](docs/Model/GetNodeRequest.md)
- [GitHubRepoResponse](docs/Model/GitHubRepoResponse.md)
- [GitHubReposResponse](docs/Model/GitHubReposResponse.md)
- [GitLabBranchResponse](docs/Model/GitLabBranchResponse.md)
- [GitLabBranchesResponse](docs/Model/GitLabBranchesResponse.md)
- [GitLabProjectResponse](docs/Model/GitLabProjectResponse.md)
- [GitLabProjectsResponse](docs/Model/GitLabProjectsResponse.md)
- [GoogleAdsActionType](docs/Model/GoogleAdsActionType.md)
- [GoogleAdsAnalyzeKeywordsRequest](docs/Model/GoogleAdsAnalyzeKeywordsRequest.md)
- [GoogleAdsCampaignResponse](docs/Model/GoogleAdsCampaignResponse.md)
- [GoogleAdsCampaignStatus](docs/Model/GoogleAdsCampaignStatus.md)
- [GoogleAdsCampaignUpdateRequest](docs/Model/GoogleAdsCampaignUpdateRequest.md)
- [GoogleAdsCampaignsResponse](docs/Model/GoogleAdsCampaignsResponse.md)
- [GoogleAdsCampaignsSearchRequest](docs/Model/GoogleAdsCampaignsSearchRequest.md)
- [GoogleAdsCustomerResponse](docs/Model/GoogleAdsCustomerResponse.md)
- [GoogleAdsCustomerUpdateRequest](docs/Model/GoogleAdsCustomerUpdateRequest.md)
- [GoogleAdsCustomersResponse](docs/Model/GoogleAdsCustomersResponse.md)
- [GoogleAdsCustomersSearchRequest](docs/Model/GoogleAdsCustomersSearchRequest.md)
- [GoogleAdsGroupResponse](docs/Model/GoogleAdsGroupResponse.md)
- [GoogleAdsGroupStatus](docs/Model/GoogleAdsGroupStatus.md)
- [GoogleAdsGroupUpdateRequest](docs/Model/GoogleAdsGroupUpdateRequest.md)
- [GoogleAdsGroupsResponse](docs/Model/GoogleAdsGroupsResponse.md)
- [GoogleAdsGroupsSearchRequest](docs/Model/GoogleAdsGroupsSearchRequest.md)
- [GoogleAdsKeywordAddRequest](docs/Model/GoogleAdsKeywordAddRequest.md)
- [GoogleAdsKeywordRecommendation](docs/Model/GoogleAdsKeywordRecommendation.md)
- [GoogleAdsKeywordRemoveRequest](docs/Model/GoogleAdsKeywordRemoveRequest.md)
- [GoogleAdsMatchType](docs/Model/GoogleAdsMatchType.md)
- [GoogleAdsRecommendation](docs/Model/GoogleAdsRecommendation.md)
- [GoogleAdsRecommendationConfidence](docs/Model/GoogleAdsRecommendationConfidence.md)
- [GoogleAdsRecommendationStatus](docs/Model/GoogleAdsRecommendationStatus.md)
- [GoogleAdsRecommendationType](docs/Model/GoogleAdsRecommendationType.md)
- [GoogleAdsRecommendationsRequest](docs/Model/GoogleAdsRecommendationsRequest.md)
- [GoogleCalendarResponse](docs/Model/GoogleCalendarResponse.md)
- [GoogleCalendarsResponse](docs/Model/GoogleCalendarsResponse.md)
- [GooglePickerTokenResponse](docs/Model/GooglePickerTokenResponse.md)
- [GoogleSheetResponse](docs/Model/GoogleSheetResponse.md)
- [GoogleSheetsResponse](docs/Model/GoogleSheetsResponse.md)
- [GroupingPeriod](docs/Model/GroupingPeriod.md)
- [HTTPValidationError](docs/Model/HTTPValidationError.md)
- [HubSpotActorIdResponse](docs/Model/HubSpotActorIdResponse.md)
- [HubSpotActorsResponse](docs/Model/HubSpotActorsResponse.md)
- [HumanAgentSender](docs/Model/HumanAgentSender.md)
- [ImageConvertRequest](docs/Model/ImageConvertRequest.md)
- [ImageFTCreateRequest](docs/Model/ImageFTCreateRequest.md)
- [ImageFTResponse](docs/Model/ImageFTResponse.md)
- [ImageFTSearchRequest](docs/Model/ImageFTSearchRequest.md)
- [ImageFTUpdateRequest](docs/Model/ImageFTUpdateRequest.md)
- [ImageInferenceRequest](docs/Model/ImageInferenceRequest.md)
- [ImageInferenceResponse](docs/Model/ImageInferenceResponse.md)
- [ImageInferenceResultResponse](docs/Model/ImageInferenceResultResponse.md)
- [ImageInferenceScheduleResponse](docs/Model/ImageInferenceScheduleResponse.md)
- [ImageInferenceScrollResponse](docs/Model/ImageInferenceScrollResponse.md)
- [ImageOptimizeRequest](docs/Model/ImageOptimizeRequest.md)
- [ImagePromptGenerationRequest](docs/Model/ImagePromptGenerationRequest.md)
- [ImagePromptResponse](docs/Model/ImagePromptResponse.md)
- [InferenceFileType](docs/Model/InferenceFileType.md)
- [InferenceHistorySearchRequest](docs/Model/InferenceHistorySearchRequest.md)
- [InstagramProfileInformationResponse](docs/Model/InstagramProfileInformationResponse.md)
- [IntegrationCategory](docs/Model/IntegrationCategory.md)
- [IntegrationDetailResponse](docs/Model/IntegrationDetailResponse.md)
- [IntegrationFlowResponse](docs/Model/IntegrationFlowResponse.md)
- [IntegrationResponse](docs/Model/IntegrationResponse.md)
- [IntegrationSearchRequest](docs/Model/IntegrationSearchRequest.md)
- [IntegrationSlug](docs/Model/IntegrationSlug.md)
- [JiraAssigneeResponse](docs/Model/JiraAssigneeResponse.md)
- [JiraAssigneesResponse](docs/Model/JiraAssigneesResponse.md)
- [JiraIssueResponse](docs/Model/JiraIssueResponse.md)
- [JiraIssuesResponse](docs/Model/JiraIssuesResponse.md)
- [JiraProjectResponse](docs/Model/JiraProjectResponse.md)
- [JiraProjectsResponse](docs/Model/JiraProjectsResponse.md)
- [JiraTransitionResponse](docs/Model/JiraTransitionResponse.md)
- [JiraTransitionsResponse](docs/Model/JiraTransitionsResponse.md)
- [JiraWebhookResponse](docs/Model/JiraWebhookResponse.md)
- [JiraWebhooksResponse](docs/Model/JiraWebhooksResponse.md)
- [LangfuseRequest](docs/Model/LangfuseRequest.md)
- [LogEntryLevel](docs/Model/LogEntryLevel.md)
- [LogEntryType](docs/Model/LogEntryType.md)
- [LogResponse](docs/Model/LogResponse.md)
- [LogsSearchRequest](docs/Model/LogsSearchRequest.md)
- [MCPCapabilityBinding](docs/Model/MCPCapabilityBinding.md)
- [MCPServerCreateRequest](docs/Model/MCPServerCreateRequest.md)
- [MCPServerResponse](docs/Model/MCPServerResponse.md)
- [MCPServerSearchRequest](docs/Model/MCPServerSearchRequest.md)
- [MCPSubServerBinding](docs/Model/MCPSubServerBinding.md)
- [MemoryDocumentProcessRequest](docs/Model/MemoryDocumentProcessRequest.md)
- [MemoryDocumentUploadResponse](docs/Model/MemoryDocumentUploadResponse.md)
- [MemoryMessageResponse](docs/Model/MemoryMessageResponse.md)
- [MemoryNodeDetailResponse](docs/Model/MemoryNodeDetailResponse.md)
- [MemoryNodeNameSearchRequest](docs/Model/MemoryNodeNameSearchRequest.md)
- [MemoryNodePathSearchRequest](docs/Model/MemoryNodePathSearchRequest.md)
- [MemoryNodeResponse](docs/Model/MemoryNodeResponse.md)
- [MemorySearchRequest](docs/Model/MemorySearchRequest.md)
- [MemorySearchResponse](docs/Model/MemorySearchResponse.md)
- [MerchantMetadata](docs/Model/MerchantMetadata.md)
- [MessageFeedback](docs/Model/MessageFeedback.md)
- [MessageType](docs/Model/MessageType.md)
- [Metadata](docs/Model/Metadata.md)
- [MicrosoftPowerBiDatasetResponse](docs/Model/MicrosoftPowerBiDatasetResponse.md)
- [MicrosoftPowerBiDatasetsResponse](docs/Model/MicrosoftPowerBiDatasetsResponse.md)
- [MicrosoftPowerBiPushDatasetResponse](docs/Model/MicrosoftPowerBiPushDatasetResponse.md)
- [MicrosoftPowerBiTableResponse](docs/Model/MicrosoftPowerBiTableResponse.md)
- [MicrosoftPowerBiTableValidateResponse](docs/Model/MicrosoftPowerBiTableValidateResponse.md)
- [MicrosoftPowerBiTablesResponse](docs/Model/MicrosoftPowerBiTablesResponse.md)
- [MicrosoftPowerBiWorkspaceResponse](docs/Model/MicrosoftPowerBiWorkspaceResponse.md)
- [MicrosoftPowerBiWorkspacesResponse](docs/Model/MicrosoftPowerBiWorkspacesResponse.md)
- [NodeDetailRequest](docs/Model/NodeDetailRequest.md)
- [NodeUpdateRequest](docs/Model/NodeUpdateRequest.md)
- [ObservabilityDriverResponse](docs/Model/ObservabilityDriverResponse.md)
- [OptimizedPromptResponse](docs/Model/OptimizedPromptResponse.md)
- [Pagination](docs/Model/Pagination.md)
- [PerDayFeedback](docs/Model/PerDayFeedback.md)
- [PerDaySessionDurationResponse](docs/Model/PerDaySessionDurationResponse.md)
- [PhotoAIEffectResponse](docs/Model/PhotoAIEffectResponse.md)
- [PhotoAIStyleResponse](docs/Model/PhotoAIStyleResponse.md)
- [PhotoAITemplateResponse](docs/Model/PhotoAITemplateResponse.md)
- [PointerType](docs/Model/PointerType.md)
- [PowerBiDatasetRequest](docs/Model/PowerBiDatasetRequest.md)
- [PowerBiPushDatasetRequest](docs/Model/PowerBiPushDatasetRequest.md)
- [PowerBiRequest](docs/Model/PowerBiRequest.md)
- [PowerBiTableRequest](docs/Model/PowerBiTableRequest.md)
- [PromptCategoryCreateRequest](docs/Model/PromptCategoryCreateRequest.md)
- [PromptCategoryResponse](docs/Model/PromptCategoryResponse.md)
- [PromptCategorySearchRequest](docs/Model/PromptCategorySearchRequest.md)
- [PromptCategoryUpdateRequest](docs/Model/PromptCategoryUpdateRequest.md)
- [PromptCreateRequest](docs/Model/PromptCreateRequest.md)
- [PromptOptimizerRequest](docs/Model/PromptOptimizerRequest.md)
- [PromptResponse](docs/Model/PromptResponse.md)
- [PromptSearchRequest](docs/Model/PromptSearchRequest.md)
- [PromptUpdateRequest](docs/Model/PromptUpdateRequest.md)
- [QuerySimilarityRequest](docs/Model/QuerySimilarityRequest.md)
- [QuerySimilarityTaskRequest](docs/Model/QuerySimilarityTaskRequest.md)
- [Role](docs/Model/Role.md)
- [ScheduleCreateRequest](docs/Model/ScheduleCreateRequest.md)
- [ScheduleFrequency](docs/Model/ScheduleFrequency.md)
- [ScheduleResponse](docs/Model/ScheduleResponse.md)
- [ScheduleSearchRequest](docs/Model/ScheduleSearchRequest.md)
- [ScheduleStatus](docs/Model/ScheduleStatus.md)
- [ScheduleType](docs/Model/ScheduleType.md)
- [ScheduleUpdateRequest](docs/Model/ScheduleUpdateRequest.md)
- [ScheduleUrlDeleteRequest](docs/Model/ScheduleUrlDeleteRequest.md)
- [ScheduleUrlDetailResponse](docs/Model/ScheduleUrlDetailResponse.md)
- [ScheduleUrlResponse](docs/Model/ScheduleUrlResponse.md)
- [ScheduleUrlSearchRequest](docs/Model/ScheduleUrlSearchRequest.md)
- [ScreenshotRequest](docs/Model/ScreenshotRequest.md)
- [ScreenshotResponse](docs/Model/ScreenshotResponse.md)
- [SearchType](docs/Model/SearchType.md)
- [SerpClusterAddQueryRequest](docs/Model/SerpClusterAddQueryRequest.md)
- [SerpClusterAddQueryRequests](docs/Model/SerpClusterAddQueryRequests.md)
- [SerpClusterBestGroupsRequest](docs/Model/SerpClusterBestGroupsRequest.md)
- [SerpClusterGroupIntersectionsRequest](docs/Model/SerpClusterGroupIntersectionsRequest.md)
- [SerpClusterGroupSearchRequest](docs/Model/SerpClusterGroupSearchRequest.md)
- [SerpClusterGroupSubClustersRequest](docs/Model/SerpClusterGroupSubClustersRequest.md)
- [SerpClusterKeywordIntersectionsRequest](docs/Model/SerpClusterKeywordIntersectionsRequest.md)
- [SerpClusterKeywordResponse](docs/Model/SerpClusterKeywordResponse.md)
- [SerpGroupIntersection](docs/Model/SerpGroupIntersection.md)
- [SerpKeyword](docs/Model/SerpKeyword.md)
- [SerpKeywordRelation](docs/Model/SerpKeywordRelation.md)
- [SerpQueryRequest](docs/Model/SerpQueryRequest.md)
- [SerpSearchEngineType](docs/Model/SerpSearchEngineType.md)
- [SerpSearchRequest](docs/Model/SerpSearchRequest.md)
- [SerpSearchRequests](docs/Model/SerpSearchRequests.md)
- [SerpSubclusterKeywordsResponse](docs/Model/SerpSubclusterKeywordsResponse.md)
- [SerpVolumeRequest](docs/Model/SerpVolumeRequest.md)
- [ShopRedactPayload](docs/Model/ShopRedactPayload.md)
- [ShopifyIntegrationResponse](docs/Model/ShopifyIntegrationResponse.md)
- [SlackChannelResponse](docs/Model/SlackChannelResponse.md)
- [SlackWorkspaceResponse](docs/Model/SlackWorkspaceResponse.md)
- [SortDirection](docs/Model/SortDirection.md)
- [Source](docs/Model/Source.md)
- [SubscriptionPlan](docs/Model/SubscriptionPlan.md)
- [SystemMessageMetadata](docs/Model/SystemMessageMetadata.md)
- [TagCreateRequest](docs/Model/TagCreateRequest.md)
- [TagResponse](docs/Model/TagResponse.md)
- [TagSearchRequest](docs/Model/TagSearchRequest.md)
- [TagUpdateRequest](docs/Model/TagUpdateRequest.md)
- [TaskResponse](docs/Model/TaskResponse.md)
- [TaskStatus](docs/Model/TaskStatus.md)
- [TodoItem](docs/Model/TodoItem.md)
- [ToolCallFeedbackResponse](docs/Model/ToolCallFeedbackResponse.md)
- [ToolFeedback](docs/Model/ToolFeedback.md)
- [TotalFeedback](docs/Model/TotalFeedback.md)
- [TrackingClickIdNames](docs/Model/TrackingClickIdNames.md)
- [TrackingEventCreateRequest](docs/Model/TrackingEventCreateRequest.md)
- [TrackingEventCreateRequests](docs/Model/TrackingEventCreateRequests.md)
- [TrackingEventData](docs/Model/TrackingEventData.md)
- [TrackingEventResponse](docs/Model/TrackingEventResponse.md)
- [TrackingEventSearchRequest](docs/Model/TrackingEventSearchRequest.md)
- [TrackingEventsResponse](docs/Model/TrackingEventsResponse.md)
- [TrackingLinkCreateRequest](docs/Model/TrackingLinkCreateRequest.md)
- [TrackingLinkResponse](docs/Model/TrackingLinkResponse.md)
- [TrackingLinkSearchRequest](docs/Model/TrackingLinkSearchRequest.md)
- [TrackingLinksCreateRequest](docs/Model/TrackingLinksCreateRequest.md)
- [TrackingLinksResponse](docs/Model/TrackingLinksResponse.md)
- [TrackingSourceCreateRequest](docs/Model/TrackingSourceCreateRequest.md)
- [TrackingSourceResponse](docs/Model/TrackingSourceResponse.md)
- [TrackingSourceSearchRequest](docs/Model/TrackingSourceSearchRequest.md)
- [TrackingSourceTypes](docs/Model/TrackingSourceTypes.md)
- [TrackingSourcesResponse](docs/Model/TrackingSourcesResponse.md)
- [TransactionType](docs/Model/TransactionType.md)
- [TranscriptTaskRequest](docs/Model/TranscriptTaskRequest.md)
- [TriggerResponse](docs/Model/TriggerResponse.md)
- [TriggerType](docs/Model/TriggerType.md)
- [UrlScreenshotResponse](docs/Model/UrlScreenshotResponse.md)
- [UserDocumentStatus](docs/Model/UserDocumentStatus.md)
- [UserResponse](docs/Model/UserResponse.md)
- [V3ExclusiveGroupResponse](docs/Model/V3ExclusiveGroupResponse.md)
- [V3ToolListResponse](docs/Model/V3ToolListResponse.md)
- [V3ToolParameterResponse](docs/Model/V3ToolParameterResponse.md)
- [V3ToolResponse](docs/Model/V3ToolResponse.md)
- [ValidationError](docs/Model/ValidationError.md)
- [ValidationErrorLocInner](docs/Model/ValidationErrorLocInner.md)
- [VectorDocumentResponse](docs/Model/VectorDocumentResponse.md)
- [VectorDocumentType](docs/Model/VectorDocumentType.md)
- [VectorDocumentsTaskResponse](docs/Model/VectorDocumentsTaskResponse.md)
- [WixMemberResponse](docs/Model/WixMemberResponse.md)
- [WixMembersResponse](docs/Model/WixMembersResponse.md)
- [WordPressCategoryResponse](docs/Model/WordPressCategoryResponse.md)
- [WordPressSiteResponse](docs/Model/WordPressSiteResponse.md)
- [WordPressTagsResponse](docs/Model/WordPressTagsResponse.md)
- [WorkspaceCreateRequest](docs/Model/WorkspaceCreateRequest.md)
- [WorkspaceCreditAlertThresholdRequest](docs/Model/WorkspaceCreditAlertThresholdRequest.md)
- [WorkspaceCreditLimitRequest](docs/Model/WorkspaceCreditLimitRequest.md)
- [WorkspaceResponse](docs/Model/WorkspaceResponse.md)
- [WorkspaceRole](docs/Model/WorkspaceRole.md)
- [WorkspaceSearchRequest](docs/Model/WorkspaceSearchRequest.md)
- [WorkspaceUpdateRequest](docs/Model/WorkspaceUpdateRequest.md)
- [WorkspaceUserCreateRequest](docs/Model/WorkspaceUserCreateRequest.md)
- [WorkspaceUserResponse](docs/Model/WorkspaceUserResponse.md)
- [WorkspaceUserUpdateRequest](docs/Model/WorkspaceUserUpdateRequest.md)
- [WorkspaceUsersSearchRequest](docs/Model/WorkspaceUsersSearchRequest.md)
- [YoutubeContent](docs/Model/YoutubeContent.md)
- [YoutubeTranscriptRequest](docs/Model/YoutubeTranscriptRequest.md)
- [YoutubeTranscriptResponse](docs/Model/YoutubeTranscriptResponse.md)
- [ZendeskKBCategoryResponse](docs/Model/ZendeskKBCategoryResponse.md)
- [ZendeskKBLabelResponse](docs/Model/ZendeskKBLabelResponse.md)
- [ZendeskKBSectionResponse](docs/Model/ZendeskKBSectionResponse.md)

## Authorization

Authentication schemes defined for the API:
### APIKeyHeader

- **Type**: API key
- **API key parameter name**: Api-Key
- **Location**: HTTP header


### HTTPBearer

- **Type**: Bearer authentication

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `2.0.0`
    - Package version: `3.18.1`
    - Generator version: `7.14.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
