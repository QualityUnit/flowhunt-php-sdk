# flowhunt-php-sdk

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
require_once('/path/to/flowhunt-php-sdk/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ApiKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$api_key_create_request = new \OpenAPI\Client\Model\ApiKeyCreateRequest(); // \OpenAPI\Client\Model\ApiKeyCreateRequest

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
*ChatbotsApi* | [**createChatbot**](docs/Api/ChatbotsApi.md#createchatbot) | **POST** /v2/chatbots/create | Create Chatbot
*ChatbotsApi* | [**deleteChatbot**](docs/Api/ChatbotsApi.md#deletechatbot) | **DELETE** /v2/chatbots/{chatbot_id} | Delete Chatbot
*ChatbotsApi* | [**getChatbot**](docs/Api/ChatbotsApi.md#getchatbot) | **GET** /v2/chatbots/{chatbot_id} | Get Chatbot
*ChatbotsApi* | [**searchChatbots**](docs/Api/ChatbotsApi.md#searchchatbots) | **POST** /v2/chatbots/ | Search Chatbots
*ChatbotsApi* | [**updateChatbot**](docs/Api/ChatbotsApi.md#updatechatbot) | **PUT** /v2/chatbots/{chatbot_id} | Update Chatbot
*CreditsApi* | [**getCreditBalance**](docs/Api/CreditsApi.md#getcreditbalance) | **GET** /v2/credits/balance | Get Credit Balance
*CreditsApi* | [**searchCreditTransactions**](docs/Api/CreditsApi.md#searchcredittransactions) | **POST** /v2/credits/search | Search Credit Transactions
*CreditsApi* | [**searchDailyCreditTransactions**](docs/Api/CreditsApi.md#searchdailycredittransactions) | **POST** /v2/credits/search_daily | Search Daily Credit Transactions
*DocumentsApi* | [**createDocumentCategory**](docs/Api/DocumentsApi.md#createdocumentcategory) | **POST** /v2/documents/categories/create | Create Document Category
*DocumentsApi* | [**createFaq**](docs/Api/DocumentsApi.md#createfaq) | **POST** /v2/documents/faqs/create | Create Faq
*DocumentsApi* | [**deleteDocument**](docs/Api/DocumentsApi.md#deletedocument) | **DELETE** /v2/documents/{doc_id} | Delete Document
*DocumentsApi* | [**deleteDocumentCategory**](docs/Api/DocumentsApi.md#deletedocumentcategory) | **DELETE** /v2/documents/categories/{cat_id} | Delete Document Category
*DocumentsApi* | [**deleteFaq**](docs/Api/DocumentsApi.md#deletefaq) | **DELETE** /v2/documents/faqs/{faq_id} | Delete Faq
*DocumentsApi* | [**downloadBinaryDocument**](docs/Api/DocumentsApi.md#downloadbinarydocument) | **GET** /v2/documents/download/binary/{doc_id} | Download Binary Document
*DocumentsApi* | [**downloadTextDocument**](docs/Api/DocumentsApi.md#downloadtextdocument) | **GET** /v2/documents/download/text/{doc_id} | Download Text Document
*DocumentsApi* | [**searchDocumentCategories**](docs/Api/DocumentsApi.md#searchdocumentcategories) | **POST** /v2/documents/categories/search | Search Document Categories
*DocumentsApi* | [**searchDocuments**](docs/Api/DocumentsApi.md#searchdocuments) | **POST** /v2/documents/search | Search Documents
*DocumentsApi* | [**searchFaqs**](docs/Api/DocumentsApi.md#searchfaqs) | **POST** /v2/documents/faqs/search | Search Faqs
*DocumentsApi* | [**updateDocument**](docs/Api/DocumentsApi.md#updatedocument) | **PUT** /v2/documents/{doc_id} | Update Document
*DocumentsApi* | [**updateDocumentCategory**](docs/Api/DocumentsApi.md#updatedocumentcategory) | **PUT** /v2/documents/categories/{cat_id} | Update Document Category
*DocumentsApi* | [**updateFaq**](docs/Api/DocumentsApi.md#updatefaq) | **PUT** /v2/documents/faqs/{faq_id} | Update Faq
*DocumentsApi* | [**uploadDocument**](docs/Api/DocumentsApi.md#uploaddocument) | **POST** /v2/documents/upload/{cat_id} | Upload Document
*DocumentsApi* | [**uploadFromUrlDocument**](docs/Api/DocumentsApi.md#uploadfromurldocument) | **POST** /v2/documents/upload-from-url/{cat_id} | Upload From Url Document
*FlowMessagesApi* | [**searchFlowMessages**](docs/Api/FlowMessagesApi.md#searchflowmessages) | **POST** /v2/chatbots/search/{session_id} | Search Flow Messages
*FlowSessionsApi* | [**deleteChatbotSessionView**](docs/Api/FlowSessionsApi.md#deletechatbotsessionview) | **DELETE** /v2/chatbots/sessions/{session_id} | Delete Chatbot Session View
*FlowSessionsApi* | [**getChatbotSessionView**](docs/Api/FlowSessionsApi.md#getchatbotsessionview) | **GET** /v2/chatbots/sessions/{session_id} | Get Chatbot Session View
*FlowSessionsApi* | [**searchChatbotSessionsView**](docs/Api/FlowSessionsApi.md#searchchatbotsessionsview) | **POST** /v2/chatbots/sessions/search | Search Chatbot Sessions View
*FlowSessionsApi* | [**updateChatbotSessionView**](docs/Api/FlowSessionsApi.md#updatechatbotsessionview) | **PUT** /v2/chatbots/sessions/{session_id} | Update Chatbot Session View
*FlowsApi* | [**createChatbotSession**](docs/Api/FlowsApi.md#createchatbotsession) | **POST** /v2/flows/sessions/create | Create Chatbot Session
*FlowsApi* | [**createFlow**](docs/Api/FlowsApi.md#createflow) | **POST** /v2/flows/create | Create Flow
*FlowsApi* | [**createFlowSession**](docs/Api/FlowsApi.md#createflowsession) | **POST** /v2/flows/sessions/from_flow/create | Create Flow Session
*FlowsApi* | [**deleteFlow**](docs/Api/FlowsApi.md#deleteflow) | **DELETE** /v2/flows/{flow_id} | Delete Flow
*FlowsApi* | [**get**](docs/Api/FlowsApi.md#get) | **GET** /v2/flows/{flow_id} | Get
*FlowsApi* | [**getAllComponents**](docs/Api/FlowsApi.md#getallcomponents) | **GET** /v2/flows/components/all | Get All Components
*FlowsApi* | [**getInvokedFlowResults**](docs/Api/FlowsApi.md#getinvokedflowresults) | **GET** /v2/flows/{flow_id}/{task_id} | Get Invoked Flow Results
*FlowsApi* | [**getPublicFlow**](docs/Api/FlowsApi.md#getpublicflow) | **GET** /v2/flows/public/{flow_id} | Get Public Flow
*FlowsApi* | [**invokeFlow**](docs/Api/FlowsApi.md#invokeflow) | **POST** /v2/flows/{flow_id}/invoke | Invoke Flow
*FlowsApi* | [**search**](docs/Api/FlowsApi.md#search) | **POST** /v2/flows/ | Search
*FlowsApi* | [**streamFlowResponse**](docs/Api/FlowsApi.md#streamflowresponse) | **POST** /v2/flows/sessions/{session_id}/stream | Stream Flow Response
*FlowsApi* | [**updateFlow**](docs/Api/FlowsApi.md#updateflow) | **PUT** /v2/flows/{flow_id} | Update Flow
*HealthApi* | [**health**](docs/Api/HealthApi.md#health) | **GET** /v2/monitoring/health/ | Health
*ImagesApi* | [**convertImage**](docs/Api/ImagesApi.md#convertimage) | **POST** /v2/images/convert | Convert Image
*ImagesApi* | [**optimizeImage**](docs/Api/ImagesApi.md#optimizeimage) | **POST** /v2/images/optimize | Optimize Image
*PromptsApi* | [**createPrompt**](docs/Api/PromptsApi.md#createprompt) | **POST** /v2/prompts/create | Create Prompt
*PromptsApi* | [**createPromptCategory**](docs/Api/PromptsApi.md#createpromptcategory) | **POST** /v2/prompts/categories/create | Create Prompt Category
*PromptsApi* | [**deletePrompt**](docs/Api/PromptsApi.md#deleteprompt) | **DELETE** /v2/prompts/{prompt_id} | Delete Prompt
*PromptsApi* | [**deletePromptCategory**](docs/Api/PromptsApi.md#deletepromptcategory) | **DELETE** /v2/prompts/categories/{cat_id} | Delete Prompt Category
*PromptsApi* | [**searchPromptCategories**](docs/Api/PromptsApi.md#searchpromptcategories) | **POST** /v2/prompts/categories/search | Search Prompt Categories
*PromptsApi* | [**searchPrompts**](docs/Api/PromptsApi.md#searchprompts) | **POST** /v2/prompts/search | Search Prompts
*PromptsApi* | [**updatePrompt**](docs/Api/PromptsApi.md#updateprompt) | **PUT** /v2/prompts/{prompt_id} | Update Prompt
*PromptsApi* | [**updatePromptCategory**](docs/Api/PromptsApi.md#updatepromptcategory) | **PUT** /v2/prompts/categories/{cat_id} | Update Prompt Category
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
*SemanticSearchApi* | [**getSimilarDocsByDocId**](docs/Api/SemanticSearchApi.md#getsimilardocsbydocid) | **POST** /v2/similarities/document/live | Get Similar Docs By Doc Id
*SemanticSearchApi* | [**getSimilarDocsByQuery**](docs/Api/SemanticSearchApi.md#getsimilardocsbyquery) | **POST** /v2/similarities/query/live | Get Similar Docs By Query
*SemanticSearchApi* | [**scheduleSimilarDocsByDocId**](docs/Api/SemanticSearchApi.md#schedulesimilardocsbydocid) | **POST** /v2/similarities/document | Schedule Similar Docs By Doc Id
*SemanticSearchApi* | [**scheduleSimilarDocsByQuery**](docs/Api/SemanticSearchApi.md#schedulesimilardocsbyquery) | **POST** /v2/similarities/query | Schedule Similar Docs By Query
*TagsApi* | [**createTag**](docs/Api/TagsApi.md#createtag) | **POST** /v2/tags/create | Create Tag
*TagsApi* | [**deleteTag**](docs/Api/TagsApi.md#deletetag) | **DELETE** /v2/tags/{tag_id} | Delete Tag
*TagsApi* | [**searchTags**](docs/Api/TagsApi.md#searchtags) | **POST** /v2/tags/search | Search Tags
*TagsApi* | [**updateTag**](docs/Api/TagsApi.md#updatetag) | **PUT** /v2/tags/{tag_id} | Update Tag
*VideosApi* | [**getYoutubeTranscript**](docs/Api/VideosApi.md#getyoutubetranscript) | **POST** /v2/videos/youtube/transcript | Get Youtube Transcript
*WorkspacesApi* | [**addWorkspaceMember**](docs/Api/WorkspacesApi.md#addworkspacemember) | **POST** /v2/workspaces/{workspace_id}/add-member | Add Workspace Member
*WorkspacesApi* | [**createWorkspace**](docs/Api/WorkspacesApi.md#createworkspace) | **POST** /v2/workspaces/create | Create Workspace
*WorkspacesApi* | [**deleteWorkspace**](docs/Api/WorkspacesApi.md#deleteworkspace) | **DELETE** /v2/workspaces/{workspace_id} | Delete Workspace
*WorkspacesApi* | [**deleteWorkspaceMember**](docs/Api/WorkspacesApi.md#deleteworkspacemember) | **DELETE** /v2/workspaces/{workspace_id}/{user_id} | Delete Workspace Member
*WorkspacesApi* | [**getWorkspaceUsers**](docs/Api/WorkspacesApi.md#getworkspaceusers) | **POST** /v2/workspaces/{workspace_id} | Get Workspace Users
*WorkspacesApi* | [**updateWorkspace**](docs/Api/WorkspacesApi.md#updateworkspace) | **PUT** /v2/workspaces/{workspace_id} | Update Workspace
*WorkspacesApi* | [**updateWorkspaceMember**](docs/Api/WorkspacesApi.md#updateworkspacemember) | **PUT** /v2/workspaces/{workspace_id}/{user_id} | Update Workspace Member

## Models

- [AltContent](docs/Model/AltContent.md)
- [Answer](docs/Model/Answer.md)
- [Answer1](docs/Model/Answer1.md)
- [Answer2](docs/Model/Answer2.md)
- [ApiKeyCreateRequest](docs/Model/ApiKeyCreateRequest.md)
- [ApiKeyId](docs/Model/ApiKeyId.md)
- [ApiKeyResponse](docs/Model/ApiKeyResponse.md)
- [ApiKeySearchRequest](docs/Model/ApiKeySearchRequest.md)
- [ApiKeyUpdateRequest](docs/Model/ApiKeyUpdateRequest.md)
- [ApiKeyWorkspaceId](docs/Model/ApiKeyWorkspaceId.md)
- [AppUrl](docs/Model/AppUrl.md)
- [Artifacts](docs/Model/Artifacts.md)
- [Author](docs/Model/Author.md)
- [AvatarUrl](docs/Model/AvatarUrl.md)
- [AvatarUrl1](docs/Model/AvatarUrl1.md)
- [AvatarUrl2](docs/Model/AvatarUrl2.md)
- [CatColor](docs/Model/CatColor.md)
- [CatId](docs/Model/CatId.md)
- [CatId1](docs/Model/CatId1.md)
- [CatId2](docs/Model/CatId2.md)
- [CatName](docs/Model/CatName.md)
- [CatName1](docs/Model/CatName1.md)
- [ChannelId](docs/Model/ChannelId.md)
- [ChannelUrl](docs/Model/ChannelUrl.md)
- [ChatOutputResponse](docs/Model/ChatOutputResponse.md)
- [ChatbotCreateRequest](docs/Model/ChatbotCreateRequest.md)
- [ChatbotId](docs/Model/ChatbotId.md)
- [ChatbotId1](docs/Model/ChatbotId1.md)
- [ChatbotName](docs/Model/ChatbotName.md)
- [ChatbotResponse](docs/Model/ChatbotResponse.md)
- [ChatbotResponseStatus](docs/Model/ChatbotResponseStatus.md)
- [ChatbotSearchRequest](docs/Model/ChatbotSearchRequest.md)
- [ChatbotStatusInput](docs/Model/ChatbotStatusInput.md)
- [ChatbotStatusOutput](docs/Model/ChatbotStatusOutput.md)
- [ChatbotUpdateRequest](docs/Model/ChatbotUpdateRequest.md)
- [ChatbotUpdateRequestStatus](docs/Model/ChatbotUpdateRequestStatus.md)
- [CntCompleted](docs/Model/CntCompleted.md)
- [CntFailed](docs/Model/CntFailed.md)
- [CntScheduled](docs/Model/CntScheduled.md)
- [Color](docs/Model/Color.md)
- [Completed](docs/Model/Completed.md)
- [CompletionTokens](docs/Model/CompletionTokens.md)
- [ComponentDisplayName](docs/Model/ComponentDisplayName.md)
- [ComponentId](docs/Model/ComponentId.md)
- [Content](docs/Model/Content.md)
- [ContentHash](docs/Model/ContentHash.md)
- [ContentType](docs/Model/ContentType.md)
- [ContextDesc](docs/Model/ContextDesc.md)
- [ContextId](docs/Model/ContextId.md)
- [CountUrls](docs/Model/CountUrls.md)
- [Country](docs/Model/Country.md)
- [CreatedAt](docs/Model/CreatedAt.md)
- [CreatedAtFrom](docs/Model/CreatedAtFrom.md)
- [CreatedAtFrom1](docs/Model/CreatedAtFrom1.md)
- [CreatedAtFrom2](docs/Model/CreatedAtFrom2.md)
- [CreatedAtTo](docs/Model/CreatedAtTo.md)
- [CreatedAtTo1](docs/Model/CreatedAtTo1.md)
- [CreatedAtTo2](docs/Model/CreatedAtTo2.md)
- [CreditBalanceResponse](docs/Model/CreditBalanceResponse.md)
- [CreditDailyTransactionResponse](docs/Model/CreditDailyTransactionResponse.md)
- [CreditDailyTransactionSearchRequest](docs/Model/CreditDailyTransactionSearchRequest.md)
- [CreditDailyTransactionSearchRequestTransactionType](docs/Model/CreditDailyTransactionSearchRequestTransactionType.md)
- [CreditTransactionResponse](docs/Model/CreditTransactionResponse.md)
- [CreditTransactionSearchRequest](docs/Model/CreditTransactionSearchRequest.md)
- [Credits](docs/Model/Credits.md)
- [Data](docs/Model/Data.md)
- [Date](docs/Model/Date.md)
- [DateFrom](docs/Model/DateFrom.md)
- [DateTo](docs/Model/DateTo.md)
- [Description](docs/Model/Description.md)
- [Description1](docs/Model/Description1.md)
- [Description2](docs/Model/Description2.md)
- [Description3](docs/Model/Description3.md)
- [Description4](docs/Model/Description4.md)
- [Description5](docs/Model/Description5.md)
- [DestUrlId](docs/Model/DestUrlId.md)
- [DisplayName](docs/Model/DisplayName.md)
- [DocId](docs/Model/DocId.md)
- [DocName](docs/Model/DocName.md)
- [DocName1](docs/Model/DocName1.md)
- [DocumentCategoryCreateRequest](docs/Model/DocumentCategoryCreateRequest.md)
- [DocumentCategoryResponse](docs/Model/DocumentCategoryResponse.md)
- [DocumentCategorySearchRequest](docs/Model/DocumentCategorySearchRequest.md)
- [DocumentCategoryUpdateRequest](docs/Model/DocumentCategoryUpdateRequest.md)
- [DocumentContent](docs/Model/DocumentContent.md)
- [DocumentContentDocType](docs/Model/DocumentContentDocType.md)
- [DocumentId](docs/Model/DocumentId.md)
- [DocumentResponse](docs/Model/DocumentResponse.md)
- [DocumentSearchRequest](docs/Model/DocumentSearchRequest.md)
- [DocumentSearchRequestDocType](docs/Model/DocumentSearchRequestDocType.md)
- [DocumentSearchRequestStatus](docs/Model/DocumentSearchRequestStatus.md)
- [DocumentSearchRequestUserStatus](docs/Model/DocumentSearchRequestUserStatus.md)
- [DocumentSimilarityRequest](docs/Model/DocumentSimilarityRequest.md)
- [DocumentSimilarityRequestDocumentType](docs/Model/DocumentSimilarityRequestDocumentType.md)
- [DocumentSimilarityRequestPointerType](docs/Model/DocumentSimilarityRequestPointerType.md)
- [DocumentSimilarityTaskRequest](docs/Model/DocumentSimilarityTaskRequest.md)
- [DocumentStatus](docs/Model/DocumentStatus.md)
- [DocumentType](docs/Model/DocumentType.md)
- [DocumentUpdateRequest](docs/Model/DocumentUpdateRequest.md)
- [DomainId](docs/Model/DomainId.md)
- [DomainId1](docs/Model/DomainId1.md)
- [DownloadFileResponse](docs/Model/DownloadFileResponse.md)
- [Duration](docs/Model/Duration.md)
- [Duration1](docs/Model/Duration1.md)
- [Encoding](docs/Model/Encoding.md)
- [EndTime](docs/Model/EndTime.md)
- [ErrorMessage](docs/Model/ErrorMessage.md)
- [FaqCreateRequest](docs/Model/FaqCreateRequest.md)
- [FaqId](docs/Model/FaqId.md)
- [FaqId1](docs/Model/FaqId1.md)
- [FaqResponse](docs/Model/FaqResponse.md)
- [FaqSearchRequest](docs/Model/FaqSearchRequest.md)
- [FaqSearchRequestFaqType](docs/Model/FaqSearchRequestFaqType.md)
- [FaqSearchRequestStatus](docs/Model/FaqSearchRequestStatus.md)
- [FaqStatus](docs/Model/FaqStatus.md)
- [FaqType](docs/Model/FaqType.md)
- [FaqUpdateRequest](docs/Model/FaqUpdateRequest.md)
- [File](docs/Model/File.md)
- [FlowConfig](docs/Model/FlowConfig.md)
- [FlowCreate](docs/Model/FlowCreate.md)
- [FlowCreateFlowType](docs/Model/FlowCreateFlowType.md)
- [FlowCreditUsage](docs/Model/FlowCreditUsage.md)
- [FlowDetailResponse](docs/Model/FlowDetailResponse.md)
- [FlowId](docs/Model/FlowId.md)
- [FlowId1](docs/Model/FlowId1.md)
- [FlowInvokeRequest](docs/Model/FlowInvokeRequest.md)
- [FlowInvokeResponse](docs/Model/FlowInvokeResponse.md)
- [FlowMessageResponse](docs/Model/FlowMessageResponse.md)
- [FlowMessageRole](docs/Model/FlowMessageRole.md)
- [FlowName](docs/Model/FlowName.md)
- [FlowRequestChatRole](docs/Model/FlowRequestChatRole.md)
- [FlowResponse](docs/Model/FlowResponse.md)
- [FlowSearchRequest](docs/Model/FlowSearchRequest.md)
- [FlowSessionCreateFromFlowRequest](docs/Model/FlowSessionCreateFromFlowRequest.md)
- [FlowSessionCreateRequest](docs/Model/FlowSessionCreateRequest.md)
- [FlowSessionMessage](docs/Model/FlowSessionMessage.md)
- [FlowSessionResponse](docs/Model/FlowSessionResponse.md)
- [FlowSessionStreamRequest](docs/Model/FlowSessionStreamRequest.md)
- [FlowSessionViewResponse](docs/Model/FlowSessionViewResponse.md)
- [FlowSessionViewSearchRequest](docs/Model/FlowSessionViewSearchRequest.md)
- [FlowSessionViewUpdateRequest](docs/Model/FlowSessionViewUpdateRequest.md)
- [FlowType](docs/Model/FlowType.md)
- [HTTPValidationError](docs/Model/HTTPValidationError.md)
- [Health](docs/Model/Health.md)
- [ImageConvertRequest](docs/Model/ImageConvertRequest.md)
- [ImageOptimizeRequest](docs/Model/ImageOptimizeRequest.md)
- [ImgUrl](docs/Model/ImgUrl.md)
- [IncludeAdultKeywords](docs/Model/IncludeAdultKeywords.md)
- [IndexedAt](docs/Model/IndexedAt.md)
- [Ipaddress](docs/Model/Ipaddress.md)
- [IsOriginalUrl](docs/Model/IsOriginalUrl.md)
- [Keywords](docs/Model/Keywords.md)
- [Lang](docs/Model/Lang.md)
- [Language](docs/Model/Language.md)
- [LanguageCode](docs/Model/LanguageCode.md)
- [LastMsgAt](docs/Model/LastMsgAt.md)
- [LastTextTimestamp](docs/Model/LastTextTimestamp.md)
- [Limit](docs/Model/Limit.md)
- [Limit1](docs/Model/Limit1.md)
- [Limit2](docs/Model/Limit2.md)
- [Limit3](docs/Model/Limit3.md)
- [Link](docs/Model/Link.md)
- [Location](docs/Model/Location.md)
- [LocationName](docs/Model/LocationName.md)
- [LoginUserRequest](docs/Model/LoginUserRequest.md)
- [Mask](docs/Model/Mask.md)
- [MaxWindowSize](docs/Model/MaxWindowSize.md)
- [MaxWindowSize1](docs/Model/MaxWindowSize1.md)
- [Message](docs/Model/Message.md)
- [Messages](docs/Model/Messages.md)
- [Metadata](docs/Model/Metadata.md)
- [ModelName](docs/Model/ModelName.md)
- [MsgCount](docs/Model/MsgCount.md)
- [MsgIpRpm](docs/Model/MsgIpRpm.md)
- [MsgIpRpm1](docs/Model/MsgIpRpm1.md)
- [MsgRpm](docs/Model/MsgRpm.md)
- [MsgRpm1](docs/Model/MsgRpm1.md)
- [Name](docs/Model/Name.md)
- [Name1](docs/Model/Name1.md)
- [Name2](docs/Model/Name2.md)
- [NewPasswordRequest](docs/Model/NewPasswordRequest.md)
- [Organic](docs/Model/Organic.md)
- [OrganicPosition](docs/Model/OrganicPosition.md)
- [Outputs](docs/Model/Outputs.md)
- [ParentFaqId](docs/Model/ParentFaqId.md)
- [ParentFaqId1](docs/Model/ParentFaqId1.md)
- [Peoplealsoask](docs/Model/Peoplealsoask.md)
- [PointerPositionFrom](docs/Model/PointerPositionFrom.md)
- [PointerPositionTo](docs/Model/PointerPositionTo.md)
- [PointerType](docs/Model/PointerType.md)
- [PostBackUrl](docs/Model/PostBackUrl.md)
- [Pricerange](docs/Model/Pricerange.md)
- [PromptCategoryCreateRequest](docs/Model/PromptCategoryCreateRequest.md)
- [PromptCategoryResponse](docs/Model/PromptCategoryResponse.md)
- [PromptCategorySearchRequest](docs/Model/PromptCategorySearchRequest.md)
- [PromptCategoryUpdateRequest](docs/Model/PromptCategoryUpdateRequest.md)
- [PromptCreateRequest](docs/Model/PromptCreateRequest.md)
- [PromptCreateRequestPromptUrl](docs/Model/PromptCreateRequestPromptUrl.md)
- [PromptId](docs/Model/PromptId.md)
- [PromptResponse](docs/Model/PromptResponse.md)
- [PromptSearchRequest](docs/Model/PromptSearchRequest.md)
- [PromptText](docs/Model/PromptText.md)
- [PromptText1](docs/Model/PromptText1.md)
- [PromptTokens](docs/Model/PromptTokens.md)
- [PromptUpdateRequest](docs/Model/PromptUpdateRequest.md)
- [PromptUrl](docs/Model/PromptUrl.md)
- [PromptUrl1](docs/Model/PromptUrl1.md)
- [Quality](docs/Model/Quality.md)
- [Quality1](docs/Model/Quality1.md)
- [QuerySimilarityRequest](docs/Model/QuerySimilarityRequest.md)
- [QuerySimilarityTaskRequest](docs/Model/QuerySimilarityTaskRequest.md)
- [Question](docs/Model/Question.md)
- [Rating](docs/Model/Rating.md)
- [Ratingcount](docs/Model/Ratingcount.md)
- [RefreshTokenRequest](docs/Model/RefreshTokenRequest.md)
- [RegisterUserRequest](docs/Model/RegisterUserRequest.md)
- [RelatedQuestion](docs/Model/RelatedQuestion.md)
- [RelatedSearch](docs/Model/RelatedSearch.md)
- [Relatedsearches](docs/Model/Relatedsearches.md)
- [Result](docs/Model/Result.md)
- [Result1](docs/Model/Result1.md)
- [Result2](docs/Model/Result2.md)
- [Result3](docs/Model/Result3.md)
- [ResultData](docs/Model/ResultData.md)
- [Results](docs/Model/Results.md)
- [Role](docs/Model/Role.md)
- [RunOutputs](docs/Model/RunOutputs.md)
- [ScheduleCreateRequest](docs/Model/ScheduleCreateRequest.md)
- [ScheduleFrequency](docs/Model/ScheduleFrequency.md)
- [ScheduleId](docs/Model/ScheduleId.md)
- [ScheduleResponse](docs/Model/ScheduleResponse.md)
- [ScheduleSearchRequest](docs/Model/ScheduleSearchRequest.md)
- [ScheduleSearchRequestScheduleType](docs/Model/ScheduleSearchRequestScheduleType.md)
- [ScheduleSearchRequestStatus](docs/Model/ScheduleSearchRequestStatus.md)
- [ScheduleStatus](docs/Model/ScheduleStatus.md)
- [ScheduleType](docs/Model/ScheduleType.md)
- [ScheduleUpdateRequest](docs/Model/ScheduleUpdateRequest.md)
- [ScheduleUpdateRequestFrequency](docs/Model/ScheduleUpdateRequestFrequency.md)
- [ScheduleUpdateRequestStatus](docs/Model/ScheduleUpdateRequestStatus.md)
- [ScheduleUpdateStatus](docs/Model/ScheduleUpdateStatus.md)
- [ScheduleUrlDetailResponse](docs/Model/ScheduleUrlDetailResponse.md)
- [ScheduleUrlDetailResponsePageScreenshot](docs/Model/ScheduleUrlDetailResponsePageScreenshot.md)
- [ScheduleUrlResponse](docs/Model/ScheduleUrlResponse.md)
- [ScheduleUrlSearchRequest](docs/Model/ScheduleUrlSearchRequest.md)
- [SchemaType](docs/Model/SchemaType.md)
- [SchemaType1](docs/Model/SchemaType1.md)
- [ScoreTrheshold](docs/Model/ScoreTrheshold.md)
- [Searchparameters](docs/Model/Searchparameters.md)
- [Sender](docs/Model/Sender.md)
- [SenderName](docs/Model/SenderName.md)
- [SerpSearchRequest](docs/Model/SerpSearchRequest.md)
- [SerpVolumeRequest](docs/Model/SerpVolumeRequest.md)
- [SerpVolumeResponse](docs/Model/SerpVolumeResponse.md)
- [SerpVolumeScheduleResponse](docs/Model/SerpVolumeScheduleResponse.md)
- [SerperResponse](docs/Model/SerperResponse.md)
- [SerperResponseResult](docs/Model/SerperResponseResult.md)
- [SerperResult](docs/Model/SerperResult.md)
- [SessionId](docs/Model/SessionId.md)
- [SiteLink](docs/Model/SiteLink.md)
- [Sitelinks](docs/Model/Sitelinks.md)
- [Snippet](docs/Model/Snippet.md)
- [StartTime](docs/Model/StartTime.md)
- [Status](docs/Model/Status.md)
- [StatusCode](docs/Model/StatusCode.md)
- [StatusMessage](docs/Model/StatusMessage.md)
- [StreamUrl](docs/Model/StreamUrl.md)
- [Tag](docs/Model/Tag.md)
- [TagColor](docs/Model/TagColor.md)
- [TagCreateRequest](docs/Model/TagCreateRequest.md)
- [TagId](docs/Model/TagId.md)
- [TagName](docs/Model/TagName.md)
- [TagName1](docs/Model/TagName1.md)
- [TagResponse](docs/Model/TagResponse.md)
- [TagSearchRequest](docs/Model/TagSearchRequest.md)
- [TagUpdateRequest](docs/Model/TagUpdateRequest.md)
- [Tags](docs/Model/Tags.md)
- [Tags1](docs/Model/Tags1.md)
- [TaskFlowInvokeResponse](docs/Model/TaskFlowInvokeResponse.md)
- [TaskFlowInvokeResponseResult](docs/Model/TaskFlowInvokeResponseResult.md)
- [TaskStatuses](docs/Model/TaskStatuses.md)
- [TextTimestampFrom](docs/Model/TextTimestampFrom.md)
- [TextTimestampTo](docs/Model/TextTimestampTo.md)
- [Theme](docs/Model/Theme.md)
- [Theme1](docs/Model/Theme1.md)
- [ThridPartyLoginRequest](docs/Model/ThridPartyLoginRequest.md)
- [Timedelta](docs/Model/Timedelta.md)
- [Title](docs/Model/Title.md)
- [Title1](docs/Model/Title1.md)
- [Title2](docs/Model/Title2.md)
- [Title3](docs/Model/Title3.md)
- [Token](docs/Model/Token.md)
- [TotalTokens](docs/Model/TotalTokens.md)
- [TransactionId](docs/Model/TransactionId.md)
- [TransactionType](docs/Model/TransactionType.md)
- [UpdatedAtFrom](docs/Model/UpdatedAtFrom.md)
- [UpdatedAtTo](docs/Model/UpdatedAtTo.md)
- [Url](docs/Model/Url.md)
- [Url1](docs/Model/Url1.md)
- [Url2](docs/Model/Url2.md)
- [Url3](docs/Model/Url3.md)
- [Url4](docs/Model/Url4.md)
- [Url5](docs/Model/Url5.md)
- [Url6](docs/Model/Url6.md)
- [UrlId](docs/Model/UrlId.md)
- [UrlId1](docs/Model/UrlId1.md)
- [UrlMetaDescription](docs/Model/UrlMetaDescription.md)
- [UrlOgImage](docs/Model/UrlOgImage.md)
- [UrlScreenshotResponse](docs/Model/UrlScreenshotResponse.md)
- [UrlSuffix](docs/Model/UrlSuffix.md)
- [UrlSuffix1](docs/Model/UrlSuffix1.md)
- [UrlText](docs/Model/UrlText.md)
- [UrlTitle](docs/Model/UrlTitle.md)
- [UrlTitle1](docs/Model/UrlTitle1.md)
- [UsedFrozenResult](docs/Model/UsedFrozenResult.md)
- [UserDocumentStatus](docs/Model/UserDocumentStatus.md)
- [UserResponse](docs/Model/UserResponse.md)
- [UserTokenResponse](docs/Model/UserTokenResponse.md)
- [ValidationError](docs/Model/ValidationError.md)
- [Variables](docs/Model/Variables.md)
- [Vector](docs/Model/Vector.md)
- [VectorDocumentResponse](docs/Model/VectorDocumentResponse.md)
- [VectorDocumentType](docs/Model/VectorDocumentType.md)
- [VectorDocumentsTaskResponse](docs/Model/VectorDocumentsTaskResponse.md)
- [VectorIdFrom](docs/Model/VectorIdFrom.md)
- [VectorIdTo](docs/Model/VectorIdTo.md)
- [VideoId](docs/Model/VideoId.md)
- [VideoUrl](docs/Model/VideoUrl.md)
- [WithVectors](docs/Model/WithVectors.md)
- [WorkspaceCreateRequest](docs/Model/WorkspaceCreateRequest.md)
- [WorkspaceResponse](docs/Model/WorkspaceResponse.md)
- [WorkspaceRole](docs/Model/WorkspaceRole.md)
- [WorkspaceSearchRequest](docs/Model/WorkspaceSearchRequest.md)
- [WorkspaceSearchRequestRole](docs/Model/WorkspaceSearchRequestRole.md)
- [WorkspaceUpdateRequest](docs/Model/WorkspaceUpdateRequest.md)
- [WorkspaceUserCreateRequest](docs/Model/WorkspaceUserCreateRequest.md)
- [WorkspaceUserResponse](docs/Model/WorkspaceUserResponse.md)
- [WorkspaceUserUpdateRequest](docs/Model/WorkspaceUserUpdateRequest.md)
- [YoutubeTranscriptRequest](docs/Model/YoutubeTranscriptRequest.md)
- [YoutubeTranscriptResponse](docs/Model/YoutubeTranscriptResponse.md)
- [YoutubeTranscriptResponseResult](docs/Model/YoutubeTranscriptResponseResult.md)

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
    - Package version: `1.0.2`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
