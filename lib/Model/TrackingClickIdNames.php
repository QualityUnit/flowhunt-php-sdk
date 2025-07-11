<?php
/**
 * TrackingClickIdNames
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
 * TrackingClickIdNames Class Doc Comment
 *
 * @category Class
 * @description Enum for tracking click ID names
 * @package  FlowHunt
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class TrackingClickIdNames
{
    /**
     * Possible values of this enum
     */
    public const GCLID = 'gclid';

    public const GBRAID = 'gbraid';

    public const WBRAID = 'wbraid';

    public const DCLID = 'dclid';

    public const FBCLID = 'fbclid';

    public const MSCLKID = 'msclkid';

    public const OTHER = 'other';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::GCLID,
            self::GBRAID,
            self::WBRAID,
            self::DCLID,
            self::FBCLID,
            self::MSCLKID,
            self::OTHER
        ];
    }
}


