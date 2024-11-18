<?php
/**
 * IntegrationSlug
 *
 * PHP version 7.4
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
 * Generator version: 7.9.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace FlowHunt\Model;
use \FlowHunt\ObjectSerializer;

/**
 * IntegrationSlug Class Doc Comment
 *
 * @category Class
 * @package  FlowHunt
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class IntegrationSlug
{
    /**
     * Possible values of this enum
     */
    public const API_INTEGRATION = 'api_integration';

    public const LIVEAGENT_INTEGRATION = 'liveagent_integration';

    public const HUBSPOT_INTEGRATION = 'hubspot_integration';

    public const LIVECHAT_INTEGRATION = 'livechat_integration';

    public const SMARTSUPP_INTEGRATION = 'smartsupp_integration';

    public const FRESHCHAT_INTEGRATION = 'freshchat_integration';

    public const TAWK_INTEGRATION = 'tawk_integration';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::API_INTEGRATION,
            self::LIVEAGENT_INTEGRATION,
            self::HUBSPOT_INTEGRATION,
            self::LIVECHAT_INTEGRATION,
            self::SMARTSUPP_INTEGRATION,
            self::FRESHCHAT_INTEGRATION,
            self::TAWK_INTEGRATION
        ];
    }
}


