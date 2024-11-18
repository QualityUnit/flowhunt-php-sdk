<?php
/**
 * PointerType
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
 * PointerType Class Doc Comment
 *
 * @category Class
 * @package  FlowHunt
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PointerType
{
    /**
     * Possible values of this enum
     */
    public const C = 'C';

    public const J = 'J';

    public const I = 'I';

    public const O = 'O';

    public const A = 'A';

    public const U = 'U';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::C,
            self::J,
            self::I,
            self::O,
            self::A,
            self::U
        ];
    }
}


