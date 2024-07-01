<?php
/**
 * SerperResult
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
 * OpenAPI Generator version: 7.2.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * SerperResult Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SerperResult implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SerperResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'search_parameters' => '\OpenAPI\Client\Model\Searchparameters',
        'organic' => '\OpenAPI\Client\Model\Organic',
        'people_also_ask' => '\OpenAPI\Client\Model\Peoplealsoask',
        'related_searches' => '\OpenAPI\Client\Model\Relatedsearches'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'search_parameters' => null,
        'organic' => null,
        'people_also_ask' => null,
        'related_searches' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'search_parameters' => false,
        'organic' => false,
        'people_also_ask' => false,
        'related_searches' => false
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
        'search_parameters' => 'searchParameters',
        'organic' => 'organic',
        'people_also_ask' => 'peopleAlsoAsk',
        'related_searches' => 'relatedSearches'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'search_parameters' => 'setSearchParameters',
        'organic' => 'setOrganic',
        'people_also_ask' => 'setPeopleAlsoAsk',
        'related_searches' => 'setRelatedSearches'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'search_parameters' => 'getSearchParameters',
        'organic' => 'getOrganic',
        'people_also_ask' => 'getPeopleAlsoAsk',
        'related_searches' => 'getRelatedSearches'
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
        $this->setIfExists('search_parameters', $data ?? [], null);
        $this->setIfExists('organic', $data ?? [], null);
        $this->setIfExists('people_also_ask', $data ?? [], null);
        $this->setIfExists('related_searches', $data ?? [], null);
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
     * Gets search_parameters
     *
     * @return \OpenAPI\Client\Model\Searchparameters|null
     */
    public function getSearchParameters()
    {
        return $this->container['search_parameters'];
    }

    /**
     * Sets search_parameters
     *
     * @param \OpenAPI\Client\Model\Searchparameters|null $search_parameters search_parameters
     *
     * @return self
     */
    public function setSearchParameters($search_parameters)
    {
        if (is_null($search_parameters)) {
            throw new \InvalidArgumentException('non-nullable search_parameters cannot be null');
        }
        $this->container['search_parameters'] = $search_parameters;

        return $this;
    }

    /**
     * Gets organic
     *
     * @return \OpenAPI\Client\Model\Organic|null
     */
    public function getOrganic()
    {
        return $this->container['organic'];
    }

    /**
     * Sets organic
     *
     * @param \OpenAPI\Client\Model\Organic|null $organic organic
     *
     * @return self
     */
    public function setOrganic($organic)
    {
        if (is_null($organic)) {
            throw new \InvalidArgumentException('non-nullable organic cannot be null');
        }
        $this->container['organic'] = $organic;

        return $this;
    }

    /**
     * Gets people_also_ask
     *
     * @return \OpenAPI\Client\Model\Peoplealsoask|null
     */
    public function getPeopleAlsoAsk()
    {
        return $this->container['people_also_ask'];
    }

    /**
     * Sets people_also_ask
     *
     * @param \OpenAPI\Client\Model\Peoplealsoask|null $people_also_ask people_also_ask
     *
     * @return self
     */
    public function setPeopleAlsoAsk($people_also_ask)
    {
        if (is_null($people_also_ask)) {
            throw new \InvalidArgumentException('non-nullable people_also_ask cannot be null');
        }
        $this->container['people_also_ask'] = $people_also_ask;

        return $this;
    }

    /**
     * Gets related_searches
     *
     * @return \OpenAPI\Client\Model\Relatedsearches|null
     */
    public function getRelatedSearches()
    {
        return $this->container['related_searches'];
    }

    /**
     * Sets related_searches
     *
     * @param \OpenAPI\Client\Model\Relatedsearches|null $related_searches related_searches
     *
     * @return self
     */
    public function setRelatedSearches($related_searches)
    {
        if (is_null($related_searches)) {
            throw new \InvalidArgumentException('non-nullable related_searches cannot be null');
        }
        $this->container['related_searches'] = $related_searches;

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


