# # ImageInferenceRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**base_model** | [**\FlowHunt\Model\BaseFoundationModel**](BaseFoundationModel.md) | The base model to use for inference |
**prompt** | **string** | The prompt to use for inference |
**image_fts** | **string[]** | The list of image FTs to use for inference |
**number_of_outputs** | **int** | The number of outputs to generate | [optional] [default to 1]
**aspect_ratio** | [**\FlowHunt\Model\AspecRatio**](AspecRatio.md) | The aspect ratio of the output images | [optional]
**steps** | **int** | The number of steps to take in the inference process | [optional] [default to 28]
**guidance_scale** | **float** | The guidance scale to use in the inference process | [optional] [default to 3.5]
**styles** | **string[]** |  | [optional]
**effects** | **string[]** |  | [optional]
**use_ai_agent** | **bool** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
