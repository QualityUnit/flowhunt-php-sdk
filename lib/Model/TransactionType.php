<?php
/**
 * TransactionType
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
 * TransactionType Class Doc Comment
 *
 * @category Class
 * @package  FlowHunt
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class TransactionType
{
    /**
     * Possible values of this enum
     */
    public const G = 'G';

    public const K = 'K';

    public const V = 'V';

    public const S = 'S';

    public const T = 'T';

    public const D = 'D';

    public const M = 'M';

    public const F = 'F';

    public const I = 'I';

    public const C = 'C';

    public const A = 'A';

    public const Y = 'Y';

    public const E = 'E';

    public const X = 'X';

    public const P = 'P';

    public const W = 'W';

    public const O = 'O';

    public const N = 'N';

    public const FT_I = 'FT_I';

    public const DDG = 'DDG';

    public const CGD = 'CGD';

    public const CGS = 'CGS';

    public const RGS = 'RGS';

    public const UGS = 'UGS';

    public const IGI = 'IGI';

    public const TR = 'TR';

    public const FAT_GC = 'FAT_GC';

    public const CE_GC = 'CE_GC';

    public const VE_GC = 'VE_GC';

    public const CWP = 'CWP';

    public const DE_GC = 'DE_GC';

    public const AC_HS = 'AC_HS';

    public const GC_HS = 'GC_HS';

    public const UC_HS = 'UC_HS';

    public const SC_HS = 'SC_HS';

    public const SEQUENTIAL_AGENT = 'SEQUENTIAL_AGENT';

    public const SELF_MANAGED_AGENT = 'SELF_MANAGED_AGENT';

    public const TOOL_ARXIV = 'TOOL_ARXIV';

    public const TOOL_REDDIT = 'TOOL_REDDIT';

    public const TOOL_WIKIPEDIA = 'TOOL_WIKIPEDIA';

    public const TOOL_DALL_E = 'TOOL_DALL_E';

    public const TOOL_YOUTUBE_SEARCH = 'TOOL_YOUTUBE_SEARCH';

    public const TOOL_IFTTT_WEBHOOK = 'TOOL_IFTTT_WEBHOOK';

    public const TOOL_PUBMED = 'TOOL_PUBMED';

    public const TOOL_STACK_EXCHANGE = 'TOOL_STACK_EXCHANGE';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::G,
            self::K,
            self::V,
            self::S,
            self::T,
            self::D,
            self::M,
            self::F,
            self::I,
            self::C,
            self::A,
            self::Y,
            self::E,
            self::X,
            self::P,
            self::W,
            self::O,
            self::N,
            self::FT_I,
            self::DDG,
            self::CGD,
            self::CGS,
            self::RGS,
            self::UGS,
            self::IGI,
            self::TR,
            self::FAT_GC,
            self::CE_GC,
            self::VE_GC,
            self::CWP,
            self::DE_GC,
            self::AC_HS,
            self::GC_HS,
            self::UC_HS,
            self::SC_HS,
            self::SEQUENTIAL_AGENT,
            self::SELF_MANAGED_AGENT,
            self::TOOL_ARXIV,
            self::TOOL_REDDIT,
            self::TOOL_WIKIPEDIA,
            self::TOOL_DALL_E,
            self::TOOL_YOUTUBE_SEARCH,
            self::TOOL_IFTTT_WEBHOOK,
            self::TOOL_PUBMED,
            self::TOOL_STACK_EXCHANGE
        ];
    }
}


