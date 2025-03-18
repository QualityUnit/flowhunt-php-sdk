# FlowHunt

FlowHunt API


## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

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



// Configure Bearer authorization: HTTPBearer
$config = FlowHunt\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FlowHunt\Api\ApiKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$api_key_create_request = new \FlowHunt\Model\ApiKeyCreateRequest(); // \FlowHunt\Model\ApiKeyCreateRequest

try {
    $result = $apiInstance->createApiKey($workspace_id, $api_key_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiKeysApi->createApiKey: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *http://localhost*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ApiKeysApi* | [**createApiKey**](docs/Api/ApiKeysApi.md#createapikey) | **POST** /v2/api_keys/create | Create Api Key
*ApiKeysApi* | [**deleteApiKey**](docs/Api/ApiKeysApi.md#deleteapikey) | **DELETE** /v2/api_keys/{api_key_id} | Delete Api Key
*ApiKeysApi* | [**searchApiKey**](docs/Api/ApiKeysApi.md#searchapikey) | **POST** /v2/api_keys/search | Search Api Key
*ApiKeysApi* | [**updateApiKey**](docs/Api/ApiKeysApi.md#updateapikey) | **PUT** /v2/api_keys/{api_key_id} | Update Api Key
*AuthApi* | [**activateUser**](docs/Api/AuthApi.md#activateuser) | **GET** /v2/auth/activate | Activate User
*AuthApi* | [**getThirdPartyToken**](docs/Api/AuthApi.md#getthirdpartytoken) | **POST** /v2/auth/token/{provider_name} | Get Third Party Token
*AuthApi* | [**getToken**](docs/Api/AuthApi.md#gettoken) | **POST** /v2/auth/token | Get Token
*AuthApi* | [**getUser**](docs/Api/AuthApi.md#getuser) | **GET** /v2/auth/me | Get User
*AuthApi* | [**recoverPassword**](docs/Api/AuthApi.md#recoverpassword) | **POST** /v2/auth/password-recovery/{email} | Recover Password
*AuthApi* | [**refreshToken**](docs/Api/AuthApi.md#refreshtoken) | **POST** /v2/auth/refresh-token | Refresh Token
*AuthApi* | [**registerUser**](docs/Api/AuthApi.md#registeruser) | **POST** /v2/auth/ | Register User
*AuthApi* | [**resetPassword**](docs/Api/AuthApi.md#resetpassword) | **POST** /v2/auth/reset-password | Reset Password
*BillingApi* | [**createChangePlanPortal**](docs/Api/BillingApi.md#createchangeplanportal) | **POST** /v2/billing/portal/change-plan/create | Create Change Plan Portal
*BillingApi* | [**createCheckout**](docs/Api/BillingApi.md#createcheckout) | **POST** /v2/billing/checkout/create | Create Checkout
*BillingApi* | [**createUpdateInfoPortal**](docs/Api/BillingApi.md#createupdateinfoportal) | **POST** /v2/billing/portal/update-info/create | Create Update Info Portal
*BillingApi* | [**getPricingPlans**](docs/Api/BillingApi.md#getpricingplans) | **GET** /v2/billing/plans | Get Pricing Plans
*BillingApi* | [**getUserPlan**](docs/Api/BillingApi.md#getuserplan) | **GET** /v2/billing/plans/me | Get User Plan
*BillingApi* | [**stripeWebhook**](docs/Api/BillingApi.md#stripewebhook) | **POST** /v2/billing/webhook | Stripe Webhook
*ChatbotsApi* | [**createChatbot**](docs/Api/ChatbotsApi.md#createchatbot) | **POST** /v2/chatbots/create | Create Chatbot
*ChatbotsApi* | [**deleteChatbot**](docs/Api/ChatbotsApi.md#deletechatbot) | **DELETE** /v2/chatbots/{chatbot_id} | Delete Chatbot
*ChatbotsApi* | [**getChatbot**](docs/Api/ChatbotsApi.md#getchatbot) | **GET** /v2/chatbots/{chatbot_id} | Get Chatbot
*ChatbotsApi* | [**searchChatbots**](docs/Api/ChatbotsApi.md#searchchatbots) | **POST** /v2/chatbots/ | Search Chatbots
*ChatbotsApi* | [**updateChatbot**](docs/Api/ChatbotsApi.md#updatechatbot) | **PUT** /v2/chatbots/{chatbot_id} | Update Chatbot
*CreditsApi* | [**getCreditBalance**](docs/Api/CreditsApi.md#getcreditbalance) | **GET** /v2/credits/balance | Get Credit Balance
*CreditsApi* | [**getWorkspaceCreditBalance**](docs/Api/CreditsApi.md#getworkspacecreditbalance) | **GET** /v2/credits/workspace_balance | Get Workspace Credit Balance
*CreditsApi* | [**searchCreditTransactions**](docs/Api/CreditsApi.md#searchcredittransactions) | **POST** /v2/credits/search | Search Credit Transactions
*CreditsApi* | [**searchDailyCreditTransactions**](docs/Api/CreditsApi.md#searchdailycredittransactions) | **POST** /v2/credits/search_daily | Search Daily Credit Transactions
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
*DocumentsApi* | [**uploadDocument**](docs/Api/DocumentsApi.md#uploaddocument) | **POST** /v2/documents/upload/{cat_id} | Upload Document
*DocumentsApi* | [**uploadFromUrlDocument**](docs/Api/DocumentsApi.md#uploadfromurldocument) | **POST** /v2/documents/upload-from-url/{cat_id} | Upload From Url Document
*FineTuningsApi* | [**createImageFt**](docs/Api/FineTuningsApi.md#createimageft) | **POST** /v2/fine_tunings/images/ | Create Image Ft
*FineTuningsApi* | [**deleteFileFt**](docs/Api/FineTuningsApi.md#deletefileft) | **DELETE** /v2/fine_tunings/files/{file_key} | Delete File Ft
*FineTuningsApi* | [**deleteImageFt**](docs/Api/FineTuningsApi.md#deleteimageft) | **DELETE** /v2/fine_tunings/images/{ft_id} | Delete Image Ft
*FineTuningsApi* | [**generateImagePrompt**](docs/Api/FineTuningsApi.md#generateimageprompt) | **POST** /v2/fine_tunings/inference/images/generate-prompt | Generate Image Prompt
*FineTuningsApi* | [**generateImages**](docs/Api/FineTuningsApi.md#generateimages) | **POST** /v2/fine_tunings/inference/images | Generate Images
*FineTuningsApi* | [**getFileFt**](docs/Api/FineTuningsApi.md#getfileft) | **GET** /v2/fine_tunings/files/{file_key} | Get File Ft
*FineTuningsApi* | [**getInferenceResults**](docs/Api/FineTuningsApi.md#getinferenceresults) | **GET** /v2/fine_tunings/inference/results/{inference_id} | Get Inference Results
*FineTuningsApi* | [**handleReplicateWebhook**](docs/Api/FineTuningsApi.md#handlereplicatewebhook) | **POST** /v2/fine_tunings/webhooks/replicate | Handle Replicate Webhook
*FineTuningsApi* | [**searchImageFts**](docs/Api/FineTuningsApi.md#searchimagefts) | **POST** /v2/fine_tunings/images/search | Search Image Fts
*FineTuningsApi* | [**searchInferenceHistory**](docs/Api/FineTuningsApi.md#searchinferencehistory) | **POST** /v2/fine_tunings/inference/history | Search Inference History
*FineTuningsApi* | [**updateImageFt**](docs/Api/FineTuningsApi.md#updateimageft) | **PUT** /v2/fine_tunings/images/{ft_id} | Update Image Ft
*FineTuningsApi* | [**uploadImageFt**](docs/Api/FineTuningsApi.md#uploadimageft) | **POST** /v2/fine_tunings/files/{ft_type}/upload | Upload Image Ft
*FlowMessagesApi* | [**searchFlowMessages**](docs/Api/FlowMessagesApi.md#searchflowmessages) | **POST** /v2/chatbots/search/{session_id} | Search Flow Messages
*FlowSessionsApi* | [**deleteChatbotSessionView**](docs/Api/FlowSessionsApi.md#deletechatbotsessionview) | **DELETE** /v2/chatbots/sessions/{session_id} | Delete Chatbot Session View
*FlowSessionsApi* | [**getChatbotSessionView**](docs/Api/FlowSessionsApi.md#getchatbotsessionview) | **GET** /v2/chatbots/sessions/{session_id} | Get Chatbot Session View
*FlowSessionsApi* | [**searchChatbotSessionsView**](docs/Api/FlowSessionsApi.md#searchchatbotsessionsview) | **POST** /v2/chatbots/sessions/search | Search Chatbot Sessions View
*FlowSessionsApi* | [**updateChatbotSessionView**](docs/Api/FlowSessionsApi.md#updatechatbotsessionview) | **PUT** /v2/chatbots/sessions/{session_id} | Update Chatbot Session View
*FlowWebhooksApi* | [**executeThirdPartyWebhook**](docs/Api/FlowWebhooksApi.md#executethirdpartywebhook) | **POST** /v2/flows/webhooks/third_party_integrations/{trigger_type} | Execute Third Party Webhook
*FlowWebhooksApi* | [**executeWebhook**](docs/Api/FlowWebhooksApi.md#executewebhook) | **POST** /v2/flows/webhooks/{chatbot_id} | Execute Webhook
*FlowWebhooksApi* | [**executeWebhookFromFlow**](docs/Api/FlowWebhooksApi.md#executewebhookfromflow) | **POST** /v2/flows/webhooks/from_flow/{flow_id} | Execute Webhook From Flow
*FlowWebhooksApi* | [**pollWebhookResponse**](docs/Api/FlowWebhooksApi.md#pollwebhookresponse) | **POST** /v2/flows/webhooks/invocation_response/{message_id} | Poll Webhook Response
*FlowsApi* | [**createChatbotSession**](docs/Api/FlowsApi.md#createchatbotsession) | **POST** /v2/flows/sessions/create | Create Chatbot Session
*FlowsApi* | [**createFlow**](docs/Api/FlowsApi.md#createflow) | **POST** /v2/flows/create | Create Flow
*FlowsApi* | [**createFlowCategory**](docs/Api/FlowsApi.md#createflowcategory) | **POST** /v2/flows/categories/create | Create Flow Category
*FlowsApi* | [**createFlowCron**](docs/Api/FlowsApi.md#createflowcron) | **POST** /v2/flows/crons/create | Create Flow Cron
*FlowsApi* | [**createFlowSession**](docs/Api/FlowsApi.md#createflowsession) | **POST** /v2/flows/sessions/from_flow/create | Create Flow Session
*FlowsApi* | [**deleteAttachment**](docs/Api/FlowsApi.md#deleteattachment) | **DELETE** /v2/flows/sessions/{session_id}/attachments/{file_id} | Delete Attachment
*FlowsApi* | [**deleteFlow**](docs/Api/FlowsApi.md#deleteflow) | **DELETE** /v2/flows/{flow_id} | Delete Flow
*FlowsApi* | [**deleteFlowCategory**](docs/Api/FlowsApi.md#deleteflowcategory) | **DELETE** /v2/flows/categories/{cat_id} | Delete Flow Category
*FlowsApi* | [**deleteFlowCron**](docs/Api/FlowsApi.md#deleteflowcron) | **DELETE** /v2/flows/crons/{flow_id}/{cron_id} | Delete Flow Cron
*FlowsApi* | [**executeFlowCron**](docs/Api/FlowsApi.md#executeflowcron) | **POST** /v2/flows/crons/{flow_id}/{cron_id}/execute | Execute Flow Cron
*FlowsApi* | [**get**](docs/Api/FlowsApi.md#get) | **GET** /v2/flows/{flow_id} | Get
*FlowsApi* | [**getAllComponents**](docs/Api/FlowsApi.md#getallcomponents) | **GET** /v2/flows/components/all | Get All Components
*FlowsApi* | [**getAttachments**](docs/Api/FlowsApi.md#getattachments) | **GET** /v2/flows/sessions/{session_id}/attachments | Get Attachments
*FlowsApi* | [**getInvokedFlowResults**](docs/Api/FlowsApi.md#getinvokedflowresults) | **GET** /v2/flows/{flow_id}/{task_id} | Get Invoked Flow Results
*FlowsApi* | [**getPublicFlow**](docs/Api/FlowsApi.md#getpublicflow) | **GET** /v2/flows/public/{flow_id} | Get Public Flow
*FlowsApi* | [**getTriggerTypes**](docs/Api/FlowsApi.md#gettriggertypes) | **POST** /v2/flows/{flow_id}/triggers | Get Trigger Types
*FlowsApi* | [**invokeFlow**](docs/Api/FlowsApi.md#invokeflow) | **POST** /v2/flows/{flow_id}/invoke | Invoke Flow
*FlowsApi* | [**invokeFlowResponse**](docs/Api/FlowsApi.md#invokeflowresponse) | **POST** /v2/flows/sessions/{session_id}/invoke | Invoke Flow Response
*FlowsApi* | [**invokeFlowSingleton**](docs/Api/FlowsApi.md#invokeflowsingleton) | **POST** /v2/flows/{flow_id}/invoke_singleton | Invoke Flow Singleton
*FlowsApi* | [**pollFlowResponse**](docs/Api/FlowsApi.md#pollflowresponse) | **POST** /v2/flows/sessions/{session_id}/invocation_response/{from_timestamp} | Poll Flow Response
*FlowsApi* | [**search**](docs/Api/FlowsApi.md#search) | **POST** /v2/flows/ | Search
*FlowsApi* | [**searchAll**](docs/Api/FlowsApi.md#searchall) | **POST** /v2/flows/all | Search All
*FlowsApi* | [**searchFlowCategories**](docs/Api/FlowsApi.md#searchflowcategories) | **POST** /v2/flows/categories/search | Search Flow Categories
*FlowsApi* | [**searchFlowCrons**](docs/Api/FlowsApi.md#searchflowcrons) | **POST** /v2/flows/crons/search | Search Flow Crons
*FlowsApi* | [**streamFlowResponse**](docs/Api/FlowsApi.md#streamflowresponse) | **POST** /v2/flows/sessions/{session_id}/stream | Stream Flow Response
*FlowsApi* | [**updateFlow**](docs/Api/FlowsApi.md#updateflow) | **PUT** /v2/flows/{flow_id} | Update Flow
*FlowsApi* | [**updateFlowCategory**](docs/Api/FlowsApi.md#updateflowcategory) | **PUT** /v2/flows/categories/{cat_id} | Update Flow Category
*FlowsApi* | [**updateFlowCron**](docs/Api/FlowsApi.md#updateflowcron) | **PUT** /v2/flows/crons/{flow_id}/{cron_id} | Update Flow Cron
*FlowsApi* | [**uploadAttachments**](docs/Api/FlowsApi.md#uploadattachments) | **POST** /v2/flows/sessions/{session_id}/attachments | Upload Attachments
*GoogleApi* | [**getPickerToken_0**](docs/Api/GoogleApi.md#getpickertoken_0) | **GET** /v2/integrations/google/picker_token | Get Picker Token
*GoogleApi* | [**getSheets_0**](docs/Api/GoogleApi.md#getsheets_0) | **GET** /v2/integrations/google/sheets/{document_id} | Get Sheets
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
*HealthApi* | [**health**](docs/Api/HealthApi.md#health) | **GET** /v2/monitoring/health/ | Health
*ImagesApi* | [**convertImage**](docs/Api/ImagesApi.md#convertimage) | **POST** /v2/images/convert | Convert Image
*ImagesApi* | [**getScreenshot**](docs/Api/ImagesApi.md#getscreenshot) | **POST** /v2/images/screenshot | Get Screenshot
*ImagesApi* | [**optimizeImage**](docs/Api/ImagesApi.md#optimizeimage) | **POST** /v2/images/optimize | Optimize Image
*IntegrationsApi* | [**createIntegration**](docs/Api/IntegrationsApi.md#createintegration) | **POST** /v2/integrations/{slug}/integrate | Create Integration
*IntegrationsApi* | [**deleteIntegration**](docs/Api/IntegrationsApi.md#deleteintegration) | **DELETE** /v2/integrations/{slug}/{integration_id} | Delete Integration
*IntegrationsApi* | [**getAllIntegrations**](docs/Api/IntegrationsApi.md#getallintegrations) | **GET** /v2/integrations/all | Get All Integrations
*IntegrationsApi* | [**getIntegration**](docs/Api/IntegrationsApi.md#getintegration) | **GET** /v2/integrations/{slug}/{integration_id} | Get Integration
*IntegrationsApi* | [**getPickerToken**](docs/Api/IntegrationsApi.md#getpickertoken) | **GET** /v2/integrations/google/picker_token | Get Picker Token
*IntegrationsApi* | [**getSheets**](docs/Api/IntegrationsApi.md#getsheets) | **GET** /v2/integrations/google/sheets/{document_id} | Get Sheets
*IntegrationsApi* | [**getSlackChannels**](docs/Api/IntegrationsApi.md#getslackchannels) | **GET** /v2/integrations/slack/{slack_team_id}/channels | Get Slack Channels
*IntegrationsApi* | [**getSlackWorkspaces**](docs/Api/IntegrationsApi.md#getslackworkspaces) | **GET** /v2/integrations/slack/ | Get Slack Workspaces
*IntegrationsApi* | [**getWordpressPostCategories**](docs/Api/IntegrationsApi.md#getwordpresspostcategories) | **GET** /v2/integrations/wordpress/{integration_id}/categories | Get Wordpress Post Categories
*IntegrationsApi* | [**getWordpressPostTags**](docs/Api/IntegrationsApi.md#getwordpressposttags) | **GET** /v2/integrations/wordpress/{integration_id}/tags | Get Wordpress Post Tags
*IntegrationsApi* | [**getWordpressSites**](docs/Api/IntegrationsApi.md#getwordpresssites) | **GET** /v2/integrations/wordpress/sites | Get Wordpress Sites
*IntegrationsApi* | [**integrationCallback**](docs/Api/IntegrationsApi.md#integrationcallback) | **GET** /v2/integrations/{slug}/callback | Integration Callback
*IntegrationsApi* | [**searchIntegrations**](docs/Api/IntegrationsApi.md#searchintegrations) | **POST** /v2/integrations/{slug} | Search Integrations
*LogsApi* | [**searchLogs**](docs/Api/LogsApi.md#searchlogs) | **POST** /v2/logs/search | Search logs
*MediaApi* | [**getTranscript**](docs/Api/MediaApi.md#gettranscript) | **POST** /v2/media/transcript | Get Transcript
*MediaApi* | [**getTranscriptResult**](docs/Api/MediaApi.md#gettranscriptresult) | **POST** /v2/media/transcript_status | Get Transcript Result
*MediaApi* | [**getYoutubeTranscript**](docs/Api/MediaApi.md#getyoutubetranscript) | **POST** /v2/media/youtube/transcript | Get Youtube Transcript
*PhotoAIApi* | [**explore**](docs/Api/PhotoAIApi.md#explore) | **GET** /v2/photo_ai/explore | Explore
*PhotoAIApi* | [**getEffects**](docs/Api/PhotoAIApi.md#geteffects) | **GET** /v2/photo_ai/effects | Get Effects
*PhotoAIApi* | [**getStyles**](docs/Api/PhotoAIApi.md#getstyles) | **GET** /v2/photo_ai/styles | Get Styles
*PhotoAIApi* | [**getTemplates**](docs/Api/PhotoAIApi.md#gettemplates) | **GET** /v2/photo_ai/templates | Get Templates
*PromptsApi* | [**createPrompt**](docs/Api/PromptsApi.md#createprompt) | **POST** /v2/prompts/create | Create Prompt
*PromptsApi* | [**createPromptCategory**](docs/Api/PromptsApi.md#createpromptcategory) | **POST** /v2/prompts/categories/create | Create Prompt Category
*PromptsApi* | [**deletePrompt**](docs/Api/PromptsApi.md#deleteprompt) | **DELETE** /v2/prompts/{prompt_id} | Delete Prompt
*PromptsApi* | [**deletePromptCategory**](docs/Api/PromptsApi.md#deletepromptcategory) | **DELETE** /v2/prompts/categories/{cat_id} | Delete Prompt Category
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
*SchedulesApi* | [**getSchedule**](docs/Api/SchedulesApi.md#getschedule) | **GET** /v2/schedules/{schedule_id} | Get Schedule
*SchedulesApi* | [**getScheduleUrlDetails**](docs/Api/SchedulesApi.md#getscheduleurldetails) | **GET** /v2/schedules/{schedule_id}/urls/{domain_id}/{url_id} | Get Schedule Url Details
*SchedulesApi* | [**getSchedules**](docs/Api/SchedulesApi.md#getschedules) | **POST** /v2/schedules/ | Get Schedules
*SchedulesApi* | [**runSchedule**](docs/Api/SchedulesApi.md#runschedule) | **POST** /v2/schedules/run/{schedule_id} | Run Schedule
*SchedulesApi* | [**searchScheduleUrls**](docs/Api/SchedulesApi.md#searchscheduleurls) | **POST** /v2/schedules/urls/ | Search Schedule Urls
*SchedulesApi* | [**updateSchedule**](docs/Api/SchedulesApi.md#updateschedule) | **PUT** /v2/schedules/{schedule_id} | Update Schedule
*SecretsApi* | [**createSecret**](docs/Api/SecretsApi.md#createsecret) | **POST** /v2/secrets/create | Create Secret
*SecretsApi* | [**deleteSecret**](docs/Api/SecretsApi.md#deletesecret) | **DELETE** /v2/secrets/{secret_id} | Delete Secret
*SecretsApi* | [**getSecret**](docs/Api/SecretsApi.md#getsecret) | **GET** /v2/secrets/{secret_id} | Get Secret
*SecretsApi* | [**searchSecret**](docs/Api/SecretsApi.md#searchsecret) | **POST** /v2/secrets/search | Search Secret
*SecretsApi* | [**updateSecret**](docs/Api/SecretsApi.md#updatesecret) | **PUT** /v2/secrets/{secret_id} | Update Secret
*SemanticSearchApi* | [**getSimilarDocsByDocId**](docs/Api/SemanticSearchApi.md#getsimilardocsbydocid) | **POST** /v2/similarities/document/live | Get Similar Docs By Doc Id
*SemanticSearchApi* | [**getSimilarDocsByQuery**](docs/Api/SemanticSearchApi.md#getsimilardocsbyquery) | **POST** /v2/similarities/query/live | Get Similar Docs By Query
*SemanticSearchApi* | [**scheduleSimilarDocsByDocId**](docs/Api/SemanticSearchApi.md#schedulesimilardocsbydocid) | **POST** /v2/similarities/document | Schedule Similar Docs By Doc Id
*SemanticSearchApi* | [**scheduleSimilarDocsByQuery**](docs/Api/SemanticSearchApi.md#schedulesimilardocsbyquery) | **POST** /v2/similarities/query | Schedule Similar Docs By Query
*SlackApi* | [**getSlackChannels_0**](docs/Api/SlackApi.md#getslackchannels_0) | **GET** /v2/integrations/slack/{slack_team_id}/channels | Get Slack Channels
*SlackApi* | [**getSlackWorkspaces_0**](docs/Api/SlackApi.md#getslackworkspaces_0) | **GET** /v2/integrations/slack/ | Get Slack Workspaces
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
*WordPressApi* | [**getWordpressPostCategories_0**](docs/Api/WordPressApi.md#getwordpresspostcategories_0) | **GET** /v2/integrations/wordpress/{integration_id}/categories | Get Wordpress Post Categories
*WordPressApi* | [**getWordpressPostTags_0**](docs/Api/WordPressApi.md#getwordpressposttags_0) | **GET** /v2/integrations/wordpress/{integration_id}/tags | Get Wordpress Post Tags
*WordPressApi* | [**getWordpressSites_0**](docs/Api/WordPressApi.md#getwordpresssites_0) | **GET** /v2/integrations/wordpress/sites | Get Wordpress Sites
*WorkspacesApi* | [**addWorkspaceUser**](docs/Api/WorkspacesApi.md#addworkspaceuser) | **POST** /v2/workspaces/{workspace_id}/add-member | Add Workspace User
*WorkspacesApi* | [**createWorkspace**](docs/Api/WorkspacesApi.md#createworkspace) | **POST** /v2/workspaces/create | Create Workspace
*WorkspacesApi* | [**deleteWorkspace**](docs/Api/WorkspacesApi.md#deleteworkspace) | **DELETE** /v2/workspaces/{workspace_id} | Delete Workspace
*WorkspacesApi* | [**deleteWorkspaceUser**](docs/Api/WorkspacesApi.md#deleteworkspaceuser) | **DELETE** /v2/workspaces/{workspace_id}/{user_id} | Delete Workspace User
*WorkspacesApi* | [**getWorkspace**](docs/Api/WorkspacesApi.md#getworkspace) | **POST** /v2/workspaces/{workspace_id} | Get Workspace
*WorkspacesApi* | [**searchMyWorkspaces**](docs/Api/WorkspacesApi.md#searchmyworkspaces) | **POST** /v2/workspaces/me/my_workspaces | Search My Workspaces
*WorkspacesApi* | [**searchWorkspaceUsers**](docs/Api/WorkspacesApi.md#searchworkspaceusers) | **POST** /v2/workspaces/{workspace_id}/users | Search Workspace Users
*WorkspacesApi* | [**updateWorkspace**](docs/Api/WorkspacesApi.md#updateworkspace) | **PUT** /v2/workspaces/{workspace_id} | Update Workspace
*WorkspacesApi* | [**updateWorkspaceUser**](docs/Api/WorkspacesApi.md#updateworkspaceuser) | **PUT** /v2/workspaces/{workspace_id}/{user_id} | Update Workspace User

## Models

- [AllFlowsSearchRequest](docs/Model/AllFlowsSearchRequest.md)
- [ApiKeyCreateRequest](docs/Model/ApiKeyCreateRequest.md)
- [ApiKeyResponse](docs/Model/ApiKeyResponse.md)
- [ApiKeySearchRequest](docs/Model/ApiKeySearchRequest.md)
- [ApiKeyUpdateRequest](docs/Model/ApiKeyUpdateRequest.md)
- [AppUrlInput](docs/Model/AppUrlInput.md)
- [AppUrlOutput](docs/Model/AppUrlOutput.md)
- [AspecRatio](docs/Model/AspecRatio.md)
- [BaseFoundationModel](docs/Model/BaseFoundationModel.md)
- [BoolChar](docs/Model/BoolChar.md)
- [ChatbotCreateRequest](docs/Model/ChatbotCreateRequest.md)
- [ChatbotResponse](docs/Model/ChatbotResponse.md)
- [ChatbotSearchRequest](docs/Model/ChatbotSearchRequest.md)
- [ChatbotStatus](docs/Model/ChatbotStatus.md)
- [ChatbotUpdateRequest](docs/Model/ChatbotUpdateRequest.md)
- [CheckoutCreateRequest](docs/Model/CheckoutCreateRequest.md)
- [CommunityImageGenerationsResponse](docs/Model/CommunityImageGenerationsResponse.md)
- [Completed](docs/Model/Completed.md)
- [CreditBalanceResponse](docs/Model/CreditBalanceResponse.md)
- [CreditDailyTransactionResponse](docs/Model/CreditDailyTransactionResponse.md)
- [CreditDailyTransactionSearchRequest](docs/Model/CreditDailyTransactionSearchRequest.md)
- [CreditTransactionResponse](docs/Model/CreditTransactionResponse.md)
- [CreditTransactionSearchRequest](docs/Model/CreditTransactionSearchRequest.md)
- [Data](docs/Model/Data.md)
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
- [FTStatus](docs/Model/FTStatus.md)
- [FTType](docs/Model/FTType.md)
- [FaqCreateRequest](docs/Model/FaqCreateRequest.md)
- [FaqResponse](docs/Model/FaqResponse.md)
- [FaqSearchRequest](docs/Model/FaqSearchRequest.md)
- [FaqStatus](docs/Model/FaqStatus.md)
- [FaqType](docs/Model/FaqType.md)
- [FaqUpdateRequest](docs/Model/FaqUpdateRequest.md)
- [FeatureResponse](docs/Model/FeatureResponse.md)
- [FileUploadResponse](docs/Model/FileUploadResponse.md)
- [FlowCategoryCreateRequest](docs/Model/FlowCategoryCreateRequest.md)
- [FlowCategoryResponse](docs/Model/FlowCategoryResponse.md)
- [FlowCategorySearchRequest](docs/Model/FlowCategorySearchRequest.md)
- [FlowConfig](docs/Model/FlowConfig.md)
- [FlowCreate](docs/Model/FlowCreate.md)
- [FlowCronCreateRequest](docs/Model/FlowCronCreateRequest.md)
- [FlowCronResponse](docs/Model/FlowCronResponse.md)
- [FlowCronSearchRequest](docs/Model/FlowCronSearchRequest.md)
- [FlowCronStatus](docs/Model/FlowCronStatus.md)
- [FlowCronUpdateRequest](docs/Model/FlowCronUpdateRequest.md)
- [FlowDetailResponse](docs/Model/FlowDetailResponse.md)
- [FlowEventActionType](docs/Model/FlowEventActionType.md)
- [FlowInvokeRequest](docs/Model/FlowInvokeRequest.md)
- [FlowLoadingIndicator](docs/Model/FlowLoadingIndicator.md)
- [FlowRequestChatRole](docs/Model/FlowRequestChatRole.md)
- [FlowResponse](docs/Model/FlowResponse.md)
- [FlowSearchRequest](docs/Model/FlowSearchRequest.md)
- [FlowSessionAttachmentResponse](docs/Model/FlowSessionAttachmentResponse.md)
- [FlowSessionCreateFromFlowRequest](docs/Model/FlowSessionCreateFromFlowRequest.md)
- [FlowSessionCreateRequest](docs/Model/FlowSessionCreateRequest.md)
- [FlowSessionEvent](docs/Model/FlowSessionEvent.md)
- [FlowSessionInvocationMessageResponse](docs/Model/FlowSessionInvocationMessageResponse.md)
- [FlowSessionInvocationResponse](docs/Model/FlowSessionInvocationResponse.md)
- [FlowSessionInvokeRequest](docs/Model/FlowSessionInvokeRequest.md)
- [FlowSessionLoadingMetadata](docs/Model/FlowSessionLoadingMetadata.md)
- [FlowSessionMessage](docs/Model/FlowSessionMessage.md)
- [FlowSessionMessageMetadata](docs/Model/FlowSessionMessageMetadata.md)
- [FlowSessionResponse](docs/Model/FlowSessionResponse.md)
- [FlowSessionStatus](docs/Model/FlowSessionStatus.md)
- [FlowSessionStreamRequest](docs/Model/FlowSessionStreamRequest.md)
- [FlowSessionTaskResponseMetadata](docs/Model/FlowSessionTaskResponseMetadata.md)
- [FlowSessionToolCallMetadata](docs/Model/FlowSessionToolCallMetadata.md)
- [FlowSessionViewResponse](docs/Model/FlowSessionViewResponse.md)
- [FlowSessionViewSearchRequest](docs/Model/FlowSessionViewSearchRequest.md)
- [FlowSessionViewUpdateRequest](docs/Model/FlowSessionViewUpdateRequest.md)
- [FlowType](docs/Model/FlowType.md)
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
- [GooglePickerTokenResponse](docs/Model/GooglePickerTokenResponse.md)
- [GoogleSheetResponse](docs/Model/GoogleSheetResponse.md)
- [GoogleSheetsResponse](docs/Model/GoogleSheetsResponse.md)
- [HTTPValidationError](docs/Model/HTTPValidationError.md)
- [Health](docs/Model/Health.md)
- [ImageConvertRequest](docs/Model/ImageConvertRequest.md)
- [ImageFTCreateRequest](docs/Model/ImageFTCreateRequest.md)
- [ImageFTResponse](docs/Model/ImageFTResponse.md)
- [ImageFTSearchRequest](docs/Model/ImageFTSearchRequest.md)
- [ImageFTUpdateRequest](docs/Model/ImageFTUpdateRequest.md)
- [ImageInferenceRequest](docs/Model/ImageInferenceRequest.md)
- [ImageInferenceResponse](docs/Model/ImageInferenceResponse.md)
- [ImageInferenceResultResponse](docs/Model/ImageInferenceResultResponse.md)
- [ImageInferenceScheduleResponse](docs/Model/ImageInferenceScheduleResponse.md)
- [ImageOptimizeRequest](docs/Model/ImageOptimizeRequest.md)
- [ImagePromptResponse](docs/Model/ImagePromptResponse.md)
- [InferenceFileType](docs/Model/InferenceFileType.md)
- [InferenceHistorySearchRequest](docs/Model/InferenceHistorySearchRequest.md)
- [IntegrationCategory](docs/Model/IntegrationCategory.md)
- [IntegrationDetailResponse](docs/Model/IntegrationDetailResponse.md)
- [IntegrationFlowResponse](docs/Model/IntegrationFlowResponse.md)
- [IntegrationResponse](docs/Model/IntegrationResponse.md)
- [IntegrationSearchRequest](docs/Model/IntegrationSearchRequest.md)
- [IntegrationSlug](docs/Model/IntegrationSlug.md)
- [LogEntryLevel](docs/Model/LogEntryLevel.md)
- [LogEntryType](docs/Model/LogEntryType.md)
- [LogResponse](docs/Model/LogResponse.md)
- [LoginUserRequest](docs/Model/LoginUserRequest.md)
- [LogsSearchRequest](docs/Model/LogsSearchRequest.md)
- [MessageType](docs/Model/MessageType.md)
- [Metadata](docs/Model/Metadata.md)
- [NewPasswordRequest](docs/Model/NewPasswordRequest.md)
- [OutputFormat](docs/Model/OutputFormat.md)
- [PhotoAIEffectResponse](docs/Model/PhotoAIEffectResponse.md)
- [PhotoAIStyleResponse](docs/Model/PhotoAIStyleResponse.md)
- [PhotoAITemplateResponse](docs/Model/PhotoAITemplateResponse.md)
- [PlanResponse](docs/Model/PlanResponse.md)
- [PointerType](docs/Model/PointerType.md)
- [PromptCategoryCreateRequest](docs/Model/PromptCategoryCreateRequest.md)
- [PromptCategoryResponse](docs/Model/PromptCategoryResponse.md)
- [PromptCategorySearchRequest](docs/Model/PromptCategorySearchRequest.md)
- [PromptCategoryUpdateRequest](docs/Model/PromptCategoryUpdateRequest.md)
- [PromptCreateRequest](docs/Model/PromptCreateRequest.md)
- [PromptResponse](docs/Model/PromptResponse.md)
- [PromptSearchRequest](docs/Model/PromptSearchRequest.md)
- [PromptUpdateRequest](docs/Model/PromptUpdateRequest.md)
- [QuerySimilarityRequest](docs/Model/QuerySimilarityRequest.md)
- [QuerySimilarityTaskRequest](docs/Model/QuerySimilarityTaskRequest.md)
- [RefreshTokenRequest](docs/Model/RefreshTokenRequest.md)
- [RegisterUserRequest](docs/Model/RegisterUserRequest.md)
- [Role](docs/Model/Role.md)
- [ScheduleCreateRequest](docs/Model/ScheduleCreateRequest.md)
- [ScheduleFrequency](docs/Model/ScheduleFrequency.md)
- [ScheduleResponse](docs/Model/ScheduleResponse.md)
- [ScheduleSearchRequest](docs/Model/ScheduleSearchRequest.md)
- [ScheduleStatus](docs/Model/ScheduleStatus.md)
- [ScheduleType](docs/Model/ScheduleType.md)
- [ScheduleUpdateRequest](docs/Model/ScheduleUpdateRequest.md)
- [ScheduleUrlDetailResponse](docs/Model/ScheduleUrlDetailResponse.md)
- [ScheduleUrlResponse](docs/Model/ScheduleUrlResponse.md)
- [ScheduleUrlSearchRequest](docs/Model/ScheduleUrlSearchRequest.md)
- [ScreenshotRequest](docs/Model/ScreenshotRequest.md)
- [ScreenshotResponse](docs/Model/ScreenshotResponse.md)
- [SecretCreateRequest](docs/Model/SecretCreateRequest.md)
- [SecretResponse](docs/Model/SecretResponse.md)
- [SecretSearchRequest](docs/Model/SecretSearchRequest.md)
- [SecretUpdateRequest](docs/Model/SecretUpdateRequest.md)
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
- [SlackChannelResponse](docs/Model/SlackChannelResponse.md)
- [SlackWorkspaceResponse](docs/Model/SlackWorkspaceResponse.md)
- [SortDirection](docs/Model/SortDirection.md)
- [SubscriptionPlan](docs/Model/SubscriptionPlan.md)
- [TagCreateRequest](docs/Model/TagCreateRequest.md)
- [TagResponse](docs/Model/TagResponse.md)
- [TagSearchRequest](docs/Model/TagSearchRequest.md)
- [TagUpdateRequest](docs/Model/TagUpdateRequest.md)
- [TaskOutput](docs/Model/TaskOutput.md)
- [TaskResponse](docs/Model/TaskResponse.md)
- [TaskStatus](docs/Model/TaskStatus.md)
- [ThridPartyLoginRequest](docs/Model/ThridPartyLoginRequest.md)
- [Token](docs/Model/Token.md)
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
- [UserPlanResponse](docs/Model/UserPlanResponse.md)
- [UserResponse](docs/Model/UserResponse.md)
- [UserTokenResponse](docs/Model/UserTokenResponse.md)
- [ValidationError](docs/Model/ValidationError.md)
- [ValidationErrorLocInner](docs/Model/ValidationErrorLocInner.md)
- [VectorDocumentResponse](docs/Model/VectorDocumentResponse.md)
- [VectorDocumentType](docs/Model/VectorDocumentType.md)
- [VectorDocumentsTaskResponse](docs/Model/VectorDocumentsTaskResponse.md)
- [WordPressCategoryResponse](docs/Model/WordPressCategoryResponse.md)
- [WordPressSiteResponse](docs/Model/WordPressSiteResponse.md)
- [WordPressTagsResponse](docs/Model/WordPressTagsResponse.md)
- [WorkspaceCreateRequest](docs/Model/WorkspaceCreateRequest.md)
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

## Authorization

Authentication schemes defined for the API:
### sudo_api_key_header

- **Type**: API key
- **API key parameter name**: Sudo-Api-Key
- **Location**: HTTP header


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
    - Package version: `3.13.1`
    - Generator version: `7.9.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
