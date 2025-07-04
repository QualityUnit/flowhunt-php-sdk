<?php
/**
 * ScheduleUrlResponse
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
 * ScheduleUrlResponse Class Doc Comment
 *
 * @category Class
 * @package  FlowHunt
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ScheduleUrlResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ScheduleUrlResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'schedule_id' => 'string',
        'domain_id' => 'string',
        'url_id' => 'string',
        'url' => 'string',
        'last_text_timestamp' => '\DateTime',
        'page_screenshot' => '\FlowHunt\Model\UrlScreenshotResponse',
        'url_title' => 'string',
        'url_meta_description' => 'string',
        'url_og_image' => 'string',
        'is_original_url' => 'bool',
        'dest_url_id' => 'string',
        'created_at' => '\DateTime'
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
        'last_text_timestamp' => 'date-time',
        'page_screenshot' => null,
        'url_title' => null,
        'url_meta_description' => null,
        'url_og_image' => null,
        'is_original_url' => null,
        'dest_url_id' => null,
        'created_at' => 'date-time'
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
        'last_text_timestamp' => true,
        'page_screenshot' => true,
        'url_title' => true,
        'url_meta_description' => true,
        'url_og_image' => true,
        'is_original_url' => false,
        'dest_url_id' => true,
        'created_at' => false
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
        'last_text_timestamp' => 'last_text_timestamp',
        'page_screenshot' => 'page_screenshot',
        'url_title' => 'url_title',
        'url_meta_description' => 'url_meta_description',
        'url_og_image' => 'url_og_image',
        'is_original_url' => 'is_original_url',
        'dest_url_id' => 'dest_url_id',
        'created_at' => 'created_at'
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
        'last_text_timestamp' => 'setLastTextTimestamp',
        'page_screenshot' => 'setPageScreenshot',
        'url_title' => 'setUrlTitle',
        'url_meta_description' => 'setUrlMetaDescription',
        'url_og_image' => 'setUrlOgImage',
        'is_original_url' => 'setIsOriginalUrl',
        'dest_url_id' => 'setDestUrlId',
        'created_at' => 'setCreatedAt'
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
        'last_text_timestamp' => 'getLastTextTimestamp',
        'page_screenshot' => 'getPageScreenshot',
        'url_title' => 'getUrlTitle',
        'url_meta_description' => 'getUrlMetaDescription',
        'url_og_image' => 'getUrlOgImage',
        'is_original_url' => 'getIsOriginalUrl',
        'dest_url_id' => 'getDestUrlId',
        'created_at' => 'getCreatedAt'
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
        $this->setIfExists('schedule_id', $data ?? [], null);
        $this->setIfExists('domain_id', $data ?? [], null);
        $this->setIfExists('url_id', $data ?? [], null);
        $this->setIfExists('url', $data ?? [], null);
        $this->setIfExists('last_text_timestamp', $data ?? [], null);
        $this->setIfExists('page_screenshot', $data ?? [], null);
        $this->setIfExists('url_title', $data ?? [], null);
        $this->setIfExists('url_meta_description', $data ?? [], null);
        $this->setIfExists('url_og_image', $data ?? [], null);
        $this->setIfExists('is_original_url', $data ?? [], null);
        $this->setIfExists('dest_url_id', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
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

        if ($this->container['schedule_id'] === null) {
            $invalidProperties[] = "'schedule_id' can't be null";
        }
        if ($this->container['domain_id'] === null) {
            $invalidProperties[] = "'domain_id' can't be null";
        }
        if ($this->container['url_id'] === null) {
            $invalidProperties[] = "'url_id' can't be null";
        }
        if ($this->container['url'] === null) {
            $invalidProperties[] = "'url' can't be null";
        }
        if ($this->container['last_text_timestamp'] === null) {
            $invalidProperties[] = "'last_text_timestamp' can't be null";
        }
        if ($this->container['page_screenshot'] === null) {
            $invalidProperties[] = "'page_screenshot' can't be null";
        }
        if ($this->container['url_title'] === null) {
            $invalidProperties[] = "'url_title' can't be null";
        }
        if ($this->container['url_meta_description'] === null) {
            $invalidProperties[] = "'url_meta_description' can't be null";
        }
        if ($this->container['url_og_image'] === null) {
            $invalidProperties[] = "'url_og_image' can't be null";
        }
        if ($this->container['is_original_url'] === null) {
            $invalidProperties[] = "'is_original_url' can't be null";
        }
        if ($this->container['dest_url_id'] === null) {
            $invalidProperties[] = "'dest_url_id' can't be null";
        }
        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
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
     * Gets schedule_id
     *
     * @return string
     */
    public function getScheduleId()
    {
        return $this->container['schedule_id'];
    }

    /**
     * Sets schedule_id
     *
     * @param string $schedule_id schedule_id
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
     * @return string
     */
    public function getDomainId()
    {
        return $this->container['domain_id'];
    }

    /**
     * Sets domain_id
     *
     * @param string $domain_id domain_id
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
     * @return string
     */
    public function getUrlId()
    {
        return $this->container['url_id'];
    }

    /**
     * Sets url_id
     *
     * @param string $url_id url_id
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
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string $url url
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
     * Gets last_text_timestamp
     *
     * @return \DateTime
     */
    public function getLastTextTimestamp()
    {
        return $this->container['last_text_timestamp'];
    }

    /**
     * Sets last_text_timestamp
     *
     * @param \DateTime $last_text_timestamp last_text_timestamp
     *
     * @return self
     */
    public function setLastTextTimestamp($last_text_timestamp)
    {
        if (is_null($last_text_timestamp)) {
            array_push($this->openAPINullablesSetToNull, 'last_text_timestamp');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('last_text_timestamp', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['last_text_timestamp'] = $last_text_timestamp;

        return $this;
    }

    /**
     * Gets page_screenshot
     *
     * @return \FlowHunt\Model\UrlScreenshotResponse
     */
    public function getPageScreenshot()
    {
        return $this->container['page_screenshot'];
    }

    /**
     * Sets page_screenshot
     *
     * @param \FlowHunt\Model\UrlScreenshotResponse $page_screenshot page_screenshot
     *
     * @return self
     */
    public function setPageScreenshot($page_screenshot)
    {
        if (is_null($page_screenshot)) {
            array_push($this->openAPINullablesSetToNull, 'page_screenshot');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('page_screenshot', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['page_screenshot'] = $page_screenshot;

        return $this;
    }

    /**
     * Gets url_title
     *
     * @return string
     */
    public function getUrlTitle()
    {
        return $this->container['url_title'];
    }

    /**
     * Sets url_title
     *
     * @param string $url_title url_title
     *
     * @return self
     */
    public function setUrlTitle($url_title)
    {
        if (is_null($url_title)) {
            array_push($this->openAPINullablesSetToNull, 'url_title');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('url_title', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['url_title'] = $url_title;

        return $this;
    }

    /**
     * Gets url_meta_description
     *
     * @return string
     */
    public function getUrlMetaDescription()
    {
        return $this->container['url_meta_description'];
    }

    /**
     * Sets url_meta_description
     *
     * @param string $url_meta_description url_meta_description
     *
     * @return self
     */
    public function setUrlMetaDescription($url_meta_description)
    {
        if (is_null($url_meta_description)) {
            array_push($this->openAPINullablesSetToNull, 'url_meta_description');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('url_meta_description', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['url_meta_description'] = $url_meta_description;

        return $this;
    }

    /**
     * Gets url_og_image
     *
     * @return string
     */
    public function getUrlOgImage()
    {
        return $this->container['url_og_image'];
    }

    /**
     * Sets url_og_image
     *
     * @param string $url_og_image url_og_image
     *
     * @return self
     */
    public function setUrlOgImage($url_og_image)
    {
        if (is_null($url_og_image)) {
            array_push($this->openAPINullablesSetToNull, 'url_og_image');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('url_og_image', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['url_og_image'] = $url_og_image;

        return $this;
    }

    /**
     * Gets is_original_url
     *
     * @return bool
     */
    public function getIsOriginalUrl()
    {
        return $this->container['is_original_url'];
    }

    /**
     * Sets is_original_url
     *
     * @param bool $is_original_url is_original_url
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
     * Gets dest_url_id
     *
     * @return string
     */
    public function getDestUrlId()
    {
        return $this->container['dest_url_id'];
    }

    /**
     * Sets dest_url_id
     *
     * @param string $dest_url_id dest_url_id
     *
     * @return self
     */
    public function setDestUrlId($dest_url_id)
    {
        if (is_null($dest_url_id)) {
            array_push($this->openAPINullablesSetToNull, 'dest_url_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('dest_url_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['dest_url_id'] = $dest_url_id;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime $created_at created_at
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        if (is_null($created_at)) {
            throw new \InvalidArgumentException('non-nullable created_at cannot be null');
        }
        $this->container['created_at'] = $created_at;

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


