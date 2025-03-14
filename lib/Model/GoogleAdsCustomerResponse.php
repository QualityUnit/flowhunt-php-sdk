<?php
/**
 * GoogleAdsCustomerResponse
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

use \ArrayAccess;
use \FlowHunt\ObjectSerializer;

/**
 * GoogleAdsCustomerResponse Class Doc Comment
 *
 * @category Class
 * @package  FlowHunt
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GoogleAdsCustomerResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GoogleAdsCustomerResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'workspace_id' => 'string',
        'customer_id' => 'string',
        'customer_name' => 'string',
        'language_code' => 'string',
        'country' => 'string',
        'min_queries' => 'int',
        'cluster_strength' => 'int',
        'min_impressions' => 'int',
        'min_clicks' => 'int',
        'last_update' => '\DateTime',
        'next_update' => '\DateTime',
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
        'workspace_id' => null,
        'customer_id' => null,
        'customer_name' => null,
        'language_code' => null,
        'country' => null,
        'min_queries' => null,
        'cluster_strength' => null,
        'min_impressions' => null,
        'min_clicks' => null,
        'last_update' => 'date-time',
        'next_update' => 'date-time',
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
        'workspace_id' => false,
        'customer_id' => false,
        'customer_name' => false,
        'language_code' => false,
        'country' => false,
        'min_queries' => false,
        'cluster_strength' => false,
        'min_impressions' => false,
        'min_clicks' => false,
        'last_update' => true,
        'next_update' => true,
        'cron_settings' => true,
        'action_type' => false,
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
        'workspace_id' => 'workspace_id',
        'customer_id' => 'customer_id',
        'customer_name' => 'customer_name',
        'language_code' => 'language_code',
        'country' => 'country',
        'min_queries' => 'min_queries',
        'cluster_strength' => 'cluster_strength',
        'min_impressions' => 'min_impressions',
        'min_clicks' => 'min_clicks',
        'last_update' => 'last_update',
        'next_update' => 'next_update',
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
        'workspace_id' => 'setWorkspaceId',
        'customer_id' => 'setCustomerId',
        'customer_name' => 'setCustomerName',
        'language_code' => 'setLanguageCode',
        'country' => 'setCountry',
        'min_queries' => 'setMinQueries',
        'cluster_strength' => 'setClusterStrength',
        'min_impressions' => 'setMinImpressions',
        'min_clicks' => 'setMinClicks',
        'last_update' => 'setLastUpdate',
        'next_update' => 'setNextUpdate',
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
        'workspace_id' => 'getWorkspaceId',
        'customer_id' => 'getCustomerId',
        'customer_name' => 'getCustomerName',
        'language_code' => 'getLanguageCode',
        'country' => 'getCountry',
        'min_queries' => 'getMinQueries',
        'cluster_strength' => 'getClusterStrength',
        'min_impressions' => 'getMinImpressions',
        'min_clicks' => 'getMinClicks',
        'last_update' => 'getLastUpdate',
        'next_update' => 'getNextUpdate',
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
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('workspace_id', $data ?? [], null);
        $this->setIfExists('customer_id', $data ?? [], null);
        $this->setIfExists('customer_name', $data ?? [], null);
        $this->setIfExists('language_code', $data ?? [], null);
        $this->setIfExists('country', $data ?? [], null);
        $this->setIfExists('min_queries', $data ?? [], null);
        $this->setIfExists('cluster_strength', $data ?? [], null);
        $this->setIfExists('min_impressions', $data ?? [], null);
        $this->setIfExists('min_clicks', $data ?? [], null);
        $this->setIfExists('last_update', $data ?? [], null);
        $this->setIfExists('next_update', $data ?? [], null);
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

        if ($this->container['workspace_id'] === null) {
            $invalidProperties[] = "'workspace_id' can't be null";
        }
        if ($this->container['customer_id'] === null) {
            $invalidProperties[] = "'customer_id' can't be null";
        }
        if ($this->container['customer_name'] === null) {
            $invalidProperties[] = "'customer_name' can't be null";
        }
        if ($this->container['language_code'] === null) {
            $invalidProperties[] = "'language_code' can't be null";
        }
        if ($this->container['country'] === null) {
            $invalidProperties[] = "'country' can't be null";
        }
        if ($this->container['min_queries'] === null) {
            $invalidProperties[] = "'min_queries' can't be null";
        }
        if ($this->container['cluster_strength'] === null) {
            $invalidProperties[] = "'cluster_strength' can't be null";
        }
        if ($this->container['min_impressions'] === null) {
            $invalidProperties[] = "'min_impressions' can't be null";
        }
        if ($this->container['min_clicks'] === null) {
            $invalidProperties[] = "'min_clicks' can't be null";
        }
        if ($this->container['action_type'] === null) {
            $invalidProperties[] = "'action_type' can't be null";
        }
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
     * Gets workspace_id
     *
     * @return string
     */
    public function getWorkspaceId()
    {
        return $this->container['workspace_id'];
    }

    /**
     * Sets workspace_id
     *
     * @param string $workspace_id Workspace ID
     *
     * @return self
     */
    public function setWorkspaceId($workspace_id)
    {
        if (is_null($workspace_id)) {
            throw new \InvalidArgumentException('non-nullable workspace_id cannot be null');
        }
        $this->container['workspace_id'] = $workspace_id;

        return $this;
    }

    /**
     * Gets customer_id
     *
     * @return string
     */
    public function getCustomerId()
    {
        return $this->container['customer_id'];
    }

    /**
     * Sets customer_id
     *
     * @param string $customer_id Google Ads Customer ID
     *
     * @return self
     */
    public function setCustomerId($customer_id)
    {
        if (is_null($customer_id)) {
            throw new \InvalidArgumentException('non-nullable customer_id cannot be null');
        }
        $this->container['customer_id'] = $customer_id;

        return $this;
    }

    /**
     * Gets customer_name
     *
     * @return string
     */
    public function getCustomerName()
    {
        return $this->container['customer_name'];
    }

    /**
     * Sets customer_name
     *
     * @param string $customer_name Google Ads Customer Name
     *
     * @return self
     */
    public function setCustomerName($customer_name)
    {
        if (is_null($customer_name)) {
            throw new \InvalidArgumentException('non-nullable customer_name cannot be null');
        }
        $this->container['customer_name'] = $customer_name;

        return $this;
    }

    /**
     * Gets language_code
     *
     * @return string
     */
    public function getLanguageCode()
    {
        return $this->container['language_code'];
    }

    /**
     * Sets language_code
     *
     * @param string $language_code Language Code
     *
     * @return self
     */
    public function setLanguageCode($language_code)
    {
        if (is_null($language_code)) {
            throw new \InvalidArgumentException('non-nullable language_code cannot be null');
        }
        $this->container['language_code'] = $language_code;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string $country Country Code
     *
     * @return self
     */
    public function setCountry($country)
    {
        if (is_null($country)) {
            throw new \InvalidArgumentException('non-nullable country cannot be null');
        }
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets min_queries
     *
     * @return int
     */
    public function getMinQueries()
    {
        return $this->container['min_queries'];
    }

    /**
     * Sets min_queries
     *
     * @param int $min_queries Minimum Queries
     *
     * @return self
     */
    public function setMinQueries($min_queries)
    {
        if (is_null($min_queries)) {
            throw new \InvalidArgumentException('non-nullable min_queries cannot be null');
        }
        $this->container['min_queries'] = $min_queries;

        return $this;
    }

    /**
     * Gets cluster_strength
     *
     * @return int
     */
    public function getClusterStrength()
    {
        return $this->container['cluster_strength'];
    }

    /**
     * Sets cluster_strength
     *
     * @param int $cluster_strength Cluster Strength
     *
     * @return self
     */
    public function setClusterStrength($cluster_strength)
    {
        if (is_null($cluster_strength)) {
            throw new \InvalidArgumentException('non-nullable cluster_strength cannot be null');
        }
        $this->container['cluster_strength'] = $cluster_strength;

        return $this;
    }

    /**
     * Gets min_impressions
     *
     * @return int
     */
    public function getMinImpressions()
    {
        return $this->container['min_impressions'];
    }

    /**
     * Sets min_impressions
     *
     * @param int $min_impressions Minimum Impressions
     *
     * @return self
     */
    public function setMinImpressions($min_impressions)
    {
        if (is_null($min_impressions)) {
            throw new \InvalidArgumentException('non-nullable min_impressions cannot be null');
        }
        $this->container['min_impressions'] = $min_impressions;

        return $this;
    }

    /**
     * Gets min_clicks
     *
     * @return int
     */
    public function getMinClicks()
    {
        return $this->container['min_clicks'];
    }

    /**
     * Sets min_clicks
     *
     * @param int $min_clicks Minimum Clicks
     *
     * @return self
     */
    public function setMinClicks($min_clicks)
    {
        if (is_null($min_clicks)) {
            throw new \InvalidArgumentException('non-nullable min_clicks cannot be null');
        }
        $this->container['min_clicks'] = $min_clicks;

        return $this;
    }

    /**
     * Gets last_update
     *
     * @return \DateTime|null
     */
    public function getLastUpdate()
    {
        return $this->container['last_update'];
    }

    /**
     * Sets last_update
     *
     * @param \DateTime|null $last_update last_update
     *
     * @return self
     */
    public function setLastUpdate($last_update)
    {
        if (is_null($last_update)) {
            array_push($this->openAPINullablesSetToNull, 'last_update');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('last_update', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['last_update'] = $last_update;

        return $this;
    }

    /**
     * Gets next_update
     *
     * @return \DateTime|null
     */
    public function getNextUpdate()
    {
        return $this->container['next_update'];
    }

    /**
     * Sets next_update
     *
     * @param \DateTime|null $next_update next_update
     *
     * @return self
     */
    public function setNextUpdate($next_update)
    {
        if (is_null($next_update)) {
            array_push($this->openAPINullablesSetToNull, 'next_update');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('next_update', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['next_update'] = $next_update;

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
     * @return \FlowHunt\Model\GoogleAdsActionType
     */
    public function getActionType()
    {
        return $this->container['action_type'];
    }

    /**
     * Sets action_type
     *
     * @param \FlowHunt\Model\GoogleAdsActionType $action_type Action Type
     *
     * @return self
     */
    public function setActionType($action_type)
    {
        if (is_null($action_type)) {
            throw new \InvalidArgumentException('non-nullable action_type cannot be null');
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


