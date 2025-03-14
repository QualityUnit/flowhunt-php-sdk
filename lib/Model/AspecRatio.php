<?php
/**
 * AspecRatio
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
 * AspecRatio Class Doc Comment
 *
 * @category Class
 * @package  FlowHunt
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AspecRatio
{
    /**
     * Possible values of this enum
     */
    public const _11 = '1:1';

    public const _169 = '16:9';

    public const _219 = '21:9';

    public const _32 = '3:2';

    public const _23 = '2:3';

    public const _45 = '4:5';

    public const _54 = '5:4';

    public const _34 = '3:4';

    public const _43 = '4:3';

    public const _916 = '9:16';

    public const _921 = '9:21';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::_11,
            self::_169,
            self::_219,
            self::_32,
            self::_23,
            self::_45,
            self::_54,
            self::_34,
            self::_43,
            self::_916,
            self::_921
        ];
    }
}


