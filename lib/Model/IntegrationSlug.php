<?php
/**
 * IntegrationSlug
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
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
 * Generator version: 7.7.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;
use \OpenAPI\Client\ObjectSerializer;

/**
 * IntegrationSlug Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class IntegrationSlug
{
    /**
     * Possible values of this enum
     */
    public const API_INTEGRATION = 'api_integration';

    public const LIVEAGENT_LIVECHAT_INTEGRATION = 'liveagent_livechat_integration';

    public const HUBSPOT_INTEGRATION = 'hubspot_integration';

    public const LIVECHAT_INTEGRATION = 'livechat_integration';

    public const SMARTSUPP_INTEGRATION = 'smartsupp_integration';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::API_INTEGRATION,
            self::LIVEAGENT_LIVECHAT_INTEGRATION,
            self::HUBSPOT_INTEGRATION,
            self::LIVECHAT_INTEGRATION,
            self::SMARTSUPP_INTEGRATION
        ];
    }
}


