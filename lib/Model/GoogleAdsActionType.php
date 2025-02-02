<?php
/**
 * GoogleAdsActionType
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
 * GoogleAdsActionType Class Doc Comment
 *
 * @category Class
 * @package  FlowHunt
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class GoogleAdsActionType
{
    /**
     * Possible values of this enum
     */
    public const I = 'I';

    public const N = 'N';

    public const Z = 'Z';

    public const R = 'R';

    public const H = 'H';

    public const M = 'M';

    public const L = 'L';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::I,
            self::N,
            self::Z,
            self::R,
            self::H,
            self::M,
            self::L
        ];
    }
}


