<?php
/**
 * IntegrationCategory
 *
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

namespace FlowHunt\Model;
use \FlowHunt\ObjectSerializer;

/**
 * IntegrationCategory Class Doc Comment
 *
 * @category Class
 * @package  FlowHunt
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class IntegrationCategory
{
    /**
     * Possible values of this enum
     */
    public const DEV_TOOLS = 'dev_tools';

    public const CRM = 'crm';

    public const SOCIAL_MEDIA = 'social_media';

    public const ECOMMERCE = 'ecommerce';

    public const CONTENT = 'content';

    public const SALES = 'sales';

    public const MARKETING = 'marketing';

    public const CMS = 'cms';

    public const GOOGLE = 'google';

    public const COMMUNICATION = 'communication';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DEV_TOOLS,
            self::CRM,
            self::SOCIAL_MEDIA,
            self::ECOMMERCE,
            self::CONTENT,
            self::SALES,
            self::MARKETING,
            self::CMS,
            self::GOOGLE,
            self::COMMUNICATION
        ];
    }
}


