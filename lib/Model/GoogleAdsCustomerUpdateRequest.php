<?php
/**
 * GoogleAdsCustomerUpdateRequest
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

use \ArrayAccess;
use \FlowHunt\ObjectSerializer;

/**
 * GoogleAdsCustomerUpdateRequest Class Doc Comment
 *
 * @category Class
 * @package  FlowHunt
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GoogleAdsCustomerUpdateRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GoogleAdsCustomerUpdateRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'language_code' => 'string',
        'country' => 'string',
        'min_queries' => 'int',
        'cluster_strength' => 'int',
        'min_impressions' => 'int',
        'min_clicks' => 'int',
        'process_negative_keywords' => '\FlowHunt\Model\BoolChar',
        'cron_settings' => 'string',
        'action_type' => '\FlowHunt\Model\GoogleAdsActionType',
        'ga_measurement_id' => 'string',
        'ga_api_secret' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'language_code' => null,
        'country' => null,
        'min_queries' => null,
        'cluster_strength' => null,
        'min_impressions' => null,
        'min_clicks' => null,
        'process_negative_keywords' => null,
        'cron_settings' => null,
        'action_type' => null,
        'ga_measurement_id' => null,
        'ga_api_secret' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'language_code' => true,
        'country' => true,
        'min_queries' => true,
        'cluster_strength' => true,
        'min_impressions' => true,
        'min_clicks' => true,
        'process_negative_keywords' => true,
        'cron_settings' => true,
        'action_type' => true,
        'ga_measurement_id' => true,
        'ga_api_secret' => true
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'language_code' => 'language_code',
        'country' => 'country',
        'min_queries' => 'min_queries',
        'cluster_strength' => 'cluster_strength',
        'min_impressions' => 'min_impressions',
        'min_clicks' => 'min_clicks',
        'process_negative_keywords' => 'process_negative_keywords',
        'cron_settings' => 'cron_settings',
        'action_type' => 'action_type',
        'ga_measurement_id' => 'ga_measurement_id',
        'ga_api_secret' => 'ga_api_secret'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'language_code' => 'setLanguageCode',
        'country' => 'setCountry',
        'min_queries' => 'setMinQueries',
        'cluster_strength' => 'setClusterStrength',
        'min_impressions' => 'setMinImpressions',
        'min_clicks' => 'setMinClicks',
        'process_negative_keywords' => 'setProcessNegativeKeywords',
        'cron_settings' => 'setCronSettings',
        'action_type' => 'setActionType',
        'ga_measurement_id' => 'setGaMeasurementId',
        'ga_api_secret' => 'setGaApiSecret'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'language_code' => 'getLanguageCode',
        'country' => 'getCountry',
        'min_queries' => 'getMinQueries',
        'cluster_strength' => 'getClusterStrength',
        'min_impressions' => 'getMinImpressions',
        'min_clicks' => 'getMinClicks',
        'process_negative_keywords' => 'getProcessNegativeKeywords',
        'cron_settings' => 'getCronSettings',
        'action_type' => 'getActionType',
        'ga_measurement_id' => 'getGaMeasurementId',
        'ga_api_secret' => 'getGaApiSecret'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[]|null $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->setIfExists('language_code', $data ?? [], null);
        $this->setIfExists('country', $data ?? [], null);
        $this->setIfExists('min_queries', $data ?? [], null);
        $this->setIfExists('cluster_strength', $data ?? [], null);
        $this->setIfExists('min_impressions', $data ?? [], null);
        $this->setIfExists('min_clicks', $data ?? [], null);
        $this->setIfExists('process_negative_keywords', $data ?? [], null);
        $this->setIfExists('cron_settings', $data ?? [], null);
        $this->setIfExists('action_type', $data ?? [], null);
        $this->setIfExists('ga_measurement_id', $data ?? [], null);
        $this->setIfExists('ga_api_secret', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets language_code
     *
     * @return string|null
     */
    public function getLanguageCode()
    {
        return $this->container['language_code'];
    }

    /**
     * Sets language_code
     *
     * @param string|null $language_code language_code
     *
     * @return self
     */
    public function setLanguageCode($language_code)
    {
        if (is_null($language_code)) {
            array_push($this->openAPINullablesSetToNull, 'language_code');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('language_code', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['language_code'] = $language_code;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string|null
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string|null $country country
     *
     * @return self
     */
    public function setCountry($country)
    {
        if (is_null($country)) {
            array_push($this->openAPINullablesSetToNull, 'country');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('country', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets min_queries
     *
     * @return int|null
     */
    public function getMinQueries()
    {
        return $this->container['min_queries'];
    }

    /**
     * Sets min_queries
     *
     * @param int|null $min_queries min_queries
     *
     * @return self
     */
    public function setMinQueries($min_queries)
    {
        if (is_null($min_queries)) {
            array_push($this->openAPINullablesSetToNull, 'min_queries');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('min_queries', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['min_queries'] = $min_queries;

        return $this;
    }

    /**
     * Gets cluster_strength
     *
     * @return int|null
     */
    public function getClusterStrength()
    {
        return $this->container['cluster_strength'];
    }

    /**
     * Sets cluster_strength
     *
     * @param int|null $cluster_strength cluster_strength
     *
     * @return self
     */
    public function setClusterStrength($cluster_strength)
    {
        if (is_null($cluster_strength)) {
            array_push($this->openAPINullablesSetToNull, 'cluster_strength');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('cluster_strength', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['cluster_strength'] = $cluster_strength;

        return $this;
    }

    /**
     * Gets min_impressions
     *
     * @return int|null
     */
    public function getMinImpressions()
    {
        return $this->container['min_impressions'];
    }

    /**
     * Sets min_impressions
     *
     * @param int|null $min_impressions min_impressions
     *
     * @return self
     */
    public function setMinImpressions($min_impressions)
    {
        if (is_null($min_impressions)) {
            array_push($this->openAPINullablesSetToNull, 'min_impressions');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('min_impressions', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['min_impressions'] = $min_impressions;

        return $this;
    }

    /**
     * Gets min_clicks
     *
     * @return int|null
     */
    public function getMinClicks()
    {
        return $this->container['min_clicks'];
    }

    /**
     * Sets min_clicks
     *
     * @param int|null $min_clicks min_clicks
     *
     * @return self
     */
    public function setMinClicks($min_clicks)
    {
        if (is_null($min_clicks)) {
            array_push($this->openAPINullablesSetToNull, 'min_clicks');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('min_clicks', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['min_clicks'] = $min_clicks;

        return $this;
    }

    /**
     * Gets process_negative_keywords
     *
     * @return \FlowHunt\Model\BoolChar|null
     */
    public function getProcessNegativeKeywords()
    {
        return $this->container['process_negative_keywords'];
    }

    /**
     * Sets process_negative_keywords
     *
     * @param \FlowHunt\Model\BoolChar|null $process_negative_keywords process_negative_keywords
     *
     * @return self
     */
    public function setProcessNegativeKeywords($process_negative_keywords)
    {
        if (is_null($process_negative_keywords)) {
            array_push($this->openAPINullablesSetToNull, 'process_negative_keywords');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('process_negative_keywords', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['process_negative_keywords'] = $process_negative_keywords;

        return $this;
    }

    /**
     * Gets cron_settings
     *
     * @return string|null
     */
    public function getCronSettings()
    {
        return $this->container['cron_settings'];
    }

    /**
     * Sets cron_settings
     *
     * @param string|null $cron_settings cron_settings
     *
     * @return self
     */
    public function setCronSettings($cron_settings)
    {
        if (is_null($cron_settings)) {
            array_push($this->openAPINullablesSetToNull, 'cron_settings');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('cron_settings', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['cron_settings'] = $cron_settings;

        return $this;
    }

    /**
     * Gets action_type
     *
     * @return \FlowHunt\Model\GoogleAdsActionType|null
     */
    public function getActionType()
    {
        return $this->container['action_type'];
    }

    /**
     * Sets action_type
     *
     * @param \FlowHunt\Model\GoogleAdsActionType|null $action_type action_type
     *
     * @return self
     */
    public function setActionType($action_type)
    {
        if (is_null($action_type)) {
            array_push($this->openAPINullablesSetToNull, 'action_type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('action_type', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['action_type'] = $action_type;

        return $this;
    }

    /**
     * Gets ga_measurement_id
     *
     * @return string|null
     */
    public function getGaMeasurementId()
    {
        return $this->container['ga_measurement_id'];
    }

    /**
     * Sets ga_measurement_id
     *
     * @param string|null $ga_measurement_id ga_measurement_id
     *
     * @return self
     */
    public function setGaMeasurementId($ga_measurement_id)
    {
        if (is_null($ga_measurement_id)) {
            array_push($this->openAPINullablesSetToNull, 'ga_measurement_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ga_measurement_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ga_measurement_id'] = $ga_measurement_id;

        return $this;
    }

    /**
     * Gets ga_api_secret
     *
     * @return string|null
     */
    public function getGaApiSecret()
    {
        return $this->container['ga_api_secret'];
    }

    /**
     * Sets ga_api_secret
     *
     * @param string|null $ga_api_secret ga_api_secret
     *
     * @return self
     */
    public function setGaApiSecret($ga_api_secret)
    {
        if (is_null($ga_api_secret)) {
            array_push($this->openAPINullablesSetToNull, 'ga_api_secret');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ga_api_secret', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ga_api_secret'] = $ga_api_secret;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


