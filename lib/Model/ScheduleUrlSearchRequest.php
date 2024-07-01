<?php
/**
 * ScheduleUrlSearchRequest
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
 * ScheduleUrlSearchRequest Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ScheduleUrlSearchRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ScheduleUrlSearchRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'schedule_id' => '\OpenAPI\Client\Model\ScheduleId',
        'domain_id' => '\OpenAPI\Client\Model\DomainId1',
        'url_id' => '\OpenAPI\Client\Model\UrlId1',
        'url' => '\OpenAPI\Client\Model\Url6',
        'text_timestamp_from' => '\OpenAPI\Client\Model\TextTimestampFrom',
        'text_timestamp_to' => '\OpenAPI\Client\Model\TextTimestampTo',
        'url_title' => '\OpenAPI\Client\Model\UrlTitle1',
        'is_original_url' => '\OpenAPI\Client\Model\IsOriginalUrl',
        'created_at_from' => '\OpenAPI\Client\Model\CreatedAtFrom2',
        'created_at_to' => '\OpenAPI\Client\Model\CreatedAtTo2'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'schedule_id' => null,
        'domain_id' => null,
        'url_id' => null,
        'url' => null,
        'text_timestamp_from' => null,
        'text_timestamp_to' => null,
        'url_title' => null,
        'is_original_url' => null,
        'created_at_from' => null,
        'created_at_to' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'schedule_id' => false,
        'domain_id' => false,
        'url_id' => false,
        'url' => false,
        'text_timestamp_from' => false,
        'text_timestamp_to' => false,
        'url_title' => false,
        'is_original_url' => false,
        'created_at_from' => false,
        'created_at_to' => false
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
        'schedule_id' => 'schedule_id',
        'domain_id' => 'domain_id',
        'url_id' => 'url_id',
        'url' => 'url',
        'text_timestamp_from' => 'text_timestamp_from',
        'text_timestamp_to' => 'text_timestamp_to',
        'url_title' => 'url_title',
        'is_original_url' => 'is_original_url',
        'created_at_from' => 'created_at_from',
        'created_at_to' => 'created_at_to'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'schedule_id' => 'setScheduleId',
        'domain_id' => 'setDomainId',
        'url_id' => 'setUrlId',
        'url' => 'setUrl',
        'text_timestamp_from' => 'setTextTimestampFrom',
        'text_timestamp_to' => 'setTextTimestampTo',
        'url_title' => 'setUrlTitle',
        'is_original_url' => 'setIsOriginalUrl',
        'created_at_from' => 'setCreatedAtFrom',
        'created_at_to' => 'setCreatedAtTo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'schedule_id' => 'getScheduleId',
        'domain_id' => 'getDomainId',
        'url_id' => 'getUrlId',
        'url' => 'getUrl',
        'text_timestamp_from' => 'getTextTimestampFrom',
        'text_timestamp_to' => 'getTextTimestampTo',
        'url_title' => 'getUrlTitle',
        'is_original_url' => 'getIsOriginalUrl',
        'created_at_from' => 'getCreatedAtFrom',
        'created_at_to' => 'getCreatedAtTo'
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
        $this->setIfExists('schedule_id', $data ?? [], null);
        $this->setIfExists('domain_id', $data ?? [], null);
        $this->setIfExists('url_id', $data ?? [], null);
        $this->setIfExists('url', $data ?? [], null);
        $this->setIfExists('text_timestamp_from', $data ?? [], null);
        $this->setIfExists('text_timestamp_to', $data ?? [], null);
        $this->setIfExists('url_title', $data ?? [], null);
        $this->setIfExists('is_original_url', $data ?? [], null);
        $this->setIfExists('created_at_from', $data ?? [], null);
        $this->setIfExists('created_at_to', $data ?? [], null);
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
     * Gets schedule_id
     *
     * @return \OpenAPI\Client\Model\ScheduleId|null
     */
    public function getScheduleId()
    {
        return $this->container['schedule_id'];
    }

    /**
     * Sets schedule_id
     *
     * @param \OpenAPI\Client\Model\ScheduleId|null $schedule_id schedule_id
     *
     * @return self
     */
    public function setScheduleId($schedule_id)
    {
        if (is_null($schedule_id)) {
            throw new \InvalidArgumentException('non-nullable schedule_id cannot be null');
        }
        $this->container['schedule_id'] = $schedule_id;

        return $this;
    }

    /**
     * Gets domain_id
     *
     * @return \OpenAPI\Client\Model\DomainId1|null
     */
    public function getDomainId()
    {
        return $this->container['domain_id'];
    }

    /**
     * Sets domain_id
     *
     * @param \OpenAPI\Client\Model\DomainId1|null $domain_id domain_id
     *
     * @return self
     */
    public function setDomainId($domain_id)
    {
        if (is_null($domain_id)) {
            throw new \InvalidArgumentException('non-nullable domain_id cannot be null');
        }
        $this->container['domain_id'] = $domain_id;

        return $this;
    }

    /**
     * Gets url_id
     *
     * @return \OpenAPI\Client\Model\UrlId1|null
     */
    public function getUrlId()
    {
        return $this->container['url_id'];
    }

    /**
     * Sets url_id
     *
     * @param \OpenAPI\Client\Model\UrlId1|null $url_id url_id
     *
     * @return self
     */
    public function setUrlId($url_id)
    {
        if (is_null($url_id)) {
            throw new \InvalidArgumentException('non-nullable url_id cannot be null');
        }
        $this->container['url_id'] = $url_id;

        return $this;
    }

    /**
     * Gets url
     *
     * @return \OpenAPI\Client\Model\Url6|null
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param \OpenAPI\Client\Model\Url6|null $url url
     *
     * @return self
     */
    public function setUrl($url)
    {
        if (is_null($url)) {
            throw new \InvalidArgumentException('non-nullable url cannot be null');
        }
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets text_timestamp_from
     *
     * @return \OpenAPI\Client\Model\TextTimestampFrom|null
     */
    public function getTextTimestampFrom()
    {
        return $this->container['text_timestamp_from'];
    }

    /**
     * Sets text_timestamp_from
     *
     * @param \OpenAPI\Client\Model\TextTimestampFrom|null $text_timestamp_from text_timestamp_from
     *
     * @return self
     */
    public function setTextTimestampFrom($text_timestamp_from)
    {
        if (is_null($text_timestamp_from)) {
            throw new \InvalidArgumentException('non-nullable text_timestamp_from cannot be null');
        }
        $this->container['text_timestamp_from'] = $text_timestamp_from;

        return $this;
    }

    /**
     * Gets text_timestamp_to
     *
     * @return \OpenAPI\Client\Model\TextTimestampTo|null
     */
    public function getTextTimestampTo()
    {
        return $this->container['text_timestamp_to'];
    }

    /**
     * Sets text_timestamp_to
     *
     * @param \OpenAPI\Client\Model\TextTimestampTo|null $text_timestamp_to text_timestamp_to
     *
     * @return self
     */
    public function setTextTimestampTo($text_timestamp_to)
    {
        if (is_null($text_timestamp_to)) {
            throw new \InvalidArgumentException('non-nullable text_timestamp_to cannot be null');
        }
        $this->container['text_timestamp_to'] = $text_timestamp_to;

        return $this;
    }

    /**
     * Gets url_title
     *
     * @return \OpenAPI\Client\Model\UrlTitle1|null
     */
    public function getUrlTitle()
    {
        return $this->container['url_title'];
    }

    /**
     * Sets url_title
     *
     * @param \OpenAPI\Client\Model\UrlTitle1|null $url_title url_title
     *
     * @return self
     */
    public function setUrlTitle($url_title)
    {
        if (is_null($url_title)) {
            throw new \InvalidArgumentException('non-nullable url_title cannot be null');
        }
        $this->container['url_title'] = $url_title;

        return $this;
    }

    /**
     * Gets is_original_url
     *
     * @return \OpenAPI\Client\Model\IsOriginalUrl|null
     */
    public function getIsOriginalUrl()
    {
        return $this->container['is_original_url'];
    }

    /**
     * Sets is_original_url
     *
     * @param \OpenAPI\Client\Model\IsOriginalUrl|null $is_original_url is_original_url
     *
     * @return self
     */
    public function setIsOriginalUrl($is_original_url)
    {
        if (is_null($is_original_url)) {
            throw new \InvalidArgumentException('non-nullable is_original_url cannot be null');
        }
        $this->container['is_original_url'] = $is_original_url;

        return $this;
    }

    /**
     * Gets created_at_from
     *
     * @return \OpenAPI\Client\Model\CreatedAtFrom2|null
     */
    public function getCreatedAtFrom()
    {
        return $this->container['created_at_from'];
    }

    /**
     * Sets created_at_from
     *
     * @param \OpenAPI\Client\Model\CreatedAtFrom2|null $created_at_from created_at_from
     *
     * @return self
     */
    public function setCreatedAtFrom($created_at_from)
    {
        if (is_null($created_at_from)) {
            throw new \InvalidArgumentException('non-nullable created_at_from cannot be null');
        }
        $this->container['created_at_from'] = $created_at_from;

        return $this;
    }

    /**
     * Gets created_at_to
     *
     * @return \OpenAPI\Client\Model\CreatedAtTo2|null
     */
    public function getCreatedAtTo()
    {
        return $this->container['created_at_to'];
    }

    /**
     * Sets created_at_to
     *
     * @param \OpenAPI\Client\Model\CreatedAtTo2|null $created_at_to created_at_to
     *
     * @return self
     */
    public function setCreatedAtTo($created_at_to)
    {
        if (is_null($created_at_to)) {
            throw new \InvalidArgumentException('non-nullable created_at_to cannot be null');
        }
        $this->container['created_at_to'] = $created_at_to;

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

