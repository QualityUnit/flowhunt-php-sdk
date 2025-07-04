<?php
/**
 * SlackApi
 * PHP version 8.1
 *
 * @category Class
 * @package  FlowHunt
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * FlowHunt
 *
 * FlowHunt API
 *
 * The version of the OpenAPI document: 2.0.0
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.14.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace FlowHunt\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use FlowHunt\ApiException;
use FlowHunt\Configuration;
use FlowHunt\FormDataProcessor;
use FlowHunt\HeaderSelector;
use FlowHunt\ObjectSerializer;

/**
 * SlackApi Class Doc Comment
 *
 * @category Class
 * @package  FlowHunt
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SlackApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /** @var string[] $contentTypes **/
    public const contentTypes = [
        'getSlackChannels' => [
            'application/json',
        ],
        'getSlackWorkspaces' => [
            'application/json',
        ],
    ];

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ?ClientInterface $client = null,
        ?Configuration $config = null,
        ?HeaderSelector $selector = null,
        int $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: Configuration::getDefaultConfiguration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation getSlackChannels
     *
     * Get Slack Channels
     *
     * @param  string $slack_team_id slack_team_id (required)
     * @param  string $workspace_id workspace_id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getSlackChannels'] to see the possible values for this operation
     *
     * @throws \FlowHunt\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \FlowHunt\Model\SlackChannelResponse[]|\FlowHunt\Model\HTTPValidationError
     */
    public function getSlackChannels($slack_team_id, $workspace_id, string $contentType = self::contentTypes['getSlackChannels'][0])
    {
        list($response) = $this->getSlackChannelsWithHttpInfo($slack_team_id, $workspace_id, $contentType);
        return $response;
    }

    /**
     * Operation getSlackChannelsWithHttpInfo
     *
     * Get Slack Channels
     *
     * @param  string $slack_team_id (required)
     * @param  string $workspace_id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getSlackChannels'] to see the possible values for this operation
     *
     * @throws \FlowHunt\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \FlowHunt\Model\SlackChannelResponse[]|\FlowHunt\Model\HTTPValidationError, HTTP status code, HTTP response headers (array of strings)
     */
    public function getSlackChannelsWithHttpInfo($slack_team_id, $workspace_id, string $contentType = self::contentTypes['getSlackChannels'][0])
    {
        $request = $this->getSlackChannelsRequest($slack_team_id, $workspace_id, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 200:
                    return $this->handleResponseWithDataType(
                        '\FlowHunt\Model\SlackChannelResponse[]',
                        $request,
                        $response,
                    );
                case 422:
                    return $this->handleResponseWithDataType(
                        '\FlowHunt\Model\HTTPValidationError',
                        $request,
                        $response,
                    );
            }

            

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return $this->handleResponseWithDataType(
                '\FlowHunt\Model\SlackChannelResponse[]',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\FlowHunt\Model\SlackChannelResponse[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 422:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\FlowHunt\Model\HTTPValidationError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation getSlackChannelsAsync
     *
     * Get Slack Channels
     *
     * @param  string $slack_team_id (required)
     * @param  string $workspace_id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getSlackChannels'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getSlackChannelsAsync($slack_team_id, $workspace_id, string $contentType = self::contentTypes['getSlackChannels'][0])
    {
        return $this->getSlackChannelsAsyncWithHttpInfo($slack_team_id, $workspace_id, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getSlackChannelsAsyncWithHttpInfo
     *
     * Get Slack Channels
     *
     * @param  string $slack_team_id (required)
     * @param  string $workspace_id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getSlackChannels'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getSlackChannelsAsyncWithHttpInfo($slack_team_id, $workspace_id, string $contentType = self::contentTypes['getSlackChannels'][0])
    {
        $returnType = '\FlowHunt\Model\SlackChannelResponse[]';
        $request = $this->getSlackChannelsRequest($slack_team_id, $workspace_id, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getSlackChannels'
     *
     * @param  string $slack_team_id (required)
     * @param  string $workspace_id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getSlackChannels'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getSlackChannelsRequest($slack_team_id, $workspace_id, string $contentType = self::contentTypes['getSlackChannels'][0])
    {

        // verify the required parameter 'slack_team_id' is set
        if ($slack_team_id === null || (is_array($slack_team_id) && count($slack_team_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $slack_team_id when calling getSlackChannels'
            );
        }

        // verify the required parameter 'workspace_id' is set
        if ($workspace_id === null || (is_array($workspace_id) && count($workspace_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $workspace_id when calling getSlackChannels'
            );
        }


        $resourcePath = '/v2/integrations/slack/{slack_team_id}/channels';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $workspace_id,
            'workspace_id', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            true // required
        ) ?? []);


        // path params
        if ($slack_team_id !== null) {
            $resourcePath = str_replace(
                '{' . 'slack_team_id' . '}',
                ObjectSerializer::toPathValue($slack_team_id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires Bearer authentication (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getSlackWorkspaces
     *
     * Get Slack Workspaces
     *
     * @param  string $workspace_id workspace_id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getSlackWorkspaces'] to see the possible values for this operation
     *
     * @throws \FlowHunt\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \FlowHunt\Model\SlackWorkspaceResponse[]|\FlowHunt\Model\HTTPValidationError
     */
    public function getSlackWorkspaces($workspace_id, string $contentType = self::contentTypes['getSlackWorkspaces'][0])
    {
        list($response) = $this->getSlackWorkspacesWithHttpInfo($workspace_id, $contentType);
        return $response;
    }

    /**
     * Operation getSlackWorkspacesWithHttpInfo
     *
     * Get Slack Workspaces
     *
     * @param  string $workspace_id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getSlackWorkspaces'] to see the possible values for this operation
     *
     * @throws \FlowHunt\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \FlowHunt\Model\SlackWorkspaceResponse[]|\FlowHunt\Model\HTTPValidationError, HTTP status code, HTTP response headers (array of strings)
     */
    public function getSlackWorkspacesWithHttpInfo($workspace_id, string $contentType = self::contentTypes['getSlackWorkspaces'][0])
    {
        $request = $this->getSlackWorkspacesRequest($workspace_id, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 200:
                    return $this->handleResponseWithDataType(
                        '\FlowHunt\Model\SlackWorkspaceResponse[]',
                        $request,
                        $response,
                    );
                case 422:
                    return $this->handleResponseWithDataType(
                        '\FlowHunt\Model\HTTPValidationError',
                        $request,
                        $response,
                    );
            }

            

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return $this->handleResponseWithDataType(
                '\FlowHunt\Model\SlackWorkspaceResponse[]',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\FlowHunt\Model\SlackWorkspaceResponse[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 422:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\FlowHunt\Model\HTTPValidationError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation getSlackWorkspacesAsync
     *
     * Get Slack Workspaces
     *
     * @param  string $workspace_id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getSlackWorkspaces'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getSlackWorkspacesAsync($workspace_id, string $contentType = self::contentTypes['getSlackWorkspaces'][0])
    {
        return $this->getSlackWorkspacesAsyncWithHttpInfo($workspace_id, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getSlackWorkspacesAsyncWithHttpInfo
     *
     * Get Slack Workspaces
     *
     * @param  string $workspace_id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getSlackWorkspaces'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getSlackWorkspacesAsyncWithHttpInfo($workspace_id, string $contentType = self::contentTypes['getSlackWorkspaces'][0])
    {
        $returnType = '\FlowHunt\Model\SlackWorkspaceResponse[]';
        $request = $this->getSlackWorkspacesRequest($workspace_id, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getSlackWorkspaces'
     *
     * @param  string $workspace_id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getSlackWorkspaces'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getSlackWorkspacesRequest($workspace_id, string $contentType = self::contentTypes['getSlackWorkspaces'][0])
    {

        // verify the required parameter 'workspace_id' is set
        if ($workspace_id === null || (is_array($workspace_id) && count($workspace_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $workspace_id when calling getSlackWorkspaces'
            );
        }


        $resourcePath = '/v2/integrations/slack/';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $workspace_id,
            'workspace_id', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            true // required
        ) ?? []);




        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires Bearer authentication (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }

    private function handleResponseWithDataType(
        string $dataType,
        RequestInterface $request,
        ResponseInterface $response
    ): array {
        if ($dataType === '\SplFileObject') {
            $content = $response->getBody(); //stream goes to serializer
        } else {
            $content = (string) $response->getBody();
            if ($dataType !== 'string') {
                try {
                    $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                } catch (\JsonException $exception) {
                    throw new ApiException(
                        sprintf(
                            'Error JSON decoding server response (%s)',
                            $request->getUri()
                        ),
                        $response->getStatusCode(),
                        $response->getHeaders(),
                        $content
                    );
                }
            }
        }

        return [
            ObjectSerializer::deserialize($content, $dataType, []),
            $response->getStatusCode(),
            $response->getHeaders()
        ];
    }

    private function responseWithinRangeCode(
        string $rangeCode,
        int $statusCode
    ): bool {
        $left = (int) ($rangeCode[0].'00');
        $right = (int) ($rangeCode[0].'99');

        return $statusCode >= $left && $statusCode <= $right;
    }
}
