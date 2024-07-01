<?php
/**
 * ChatbotUpdateRequest
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
 * ChatbotUpdateRequest Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ChatbotUpdateRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ChatbotUpdateRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'title' => '\OpenAPI\Client\Model\Title1',
        'flow_id' => '\OpenAPI\Client\Model\FlowId',
        'status' => '\OpenAPI\Client\Model\ChatbotUpdateRequestStatus',
        'url_suffix' => '\OpenAPI\Client\Model\UrlSuffix',
        'theme' => '\OpenAPI\Client\Model\Theme',
        'max_window_size' => '\OpenAPI\Client\Model\MaxWindowSize',
        'msg_rpm' => '\OpenAPI\Client\Model\MsgRpm',
        'msg_ip_rpm' => '\OpenAPI\Client\Model\MsgIpRpm'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'title' => null,
        'flow_id' => null,
        'status' => null,
        'url_suffix' => null,
        'theme' => null,
        'max_window_size' => null,
        'msg_rpm' => null,
        'msg_ip_rpm' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'title' => false,
        'flow_id' => false,
        'status' => false,
        'url_suffix' => false,
        'theme' => false,
        'max_window_size' => false,
        'msg_rpm' => false,
        'msg_ip_rpm' => false
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
        'title' => 'title',
        'flow_id' => 'flow_id',
        'status' => 'status',
        'url_suffix' => 'url_suffix',
        'theme' => 'theme',
        'max_window_size' => 'max_window_size',
        'msg_rpm' => 'msg_rpm',
        'msg_ip_rpm' => 'msg_ip_rpm'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'title' => 'setTitle',
        'flow_id' => 'setFlowId',
        'status' => 'setStatus',
        'url_suffix' => 'setUrlSuffix',
        'theme' => 'setTheme',
        'max_window_size' => 'setMaxWindowSize',
        'msg_rpm' => 'setMsgRpm',
        'msg_ip_rpm' => 'setMsgIpRpm'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'title' => 'getTitle',
        'flow_id' => 'getFlowId',
        'status' => 'getStatus',
        'url_suffix' => 'getUrlSuffix',
        'theme' => 'getTheme',
        'max_window_size' => 'getMaxWindowSize',
        'msg_rpm' => 'getMsgRpm',
        'msg_ip_rpm' => 'getMsgIpRpm'
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
        $this->setIfExists('title', $data ?? [], null);
        $this->setIfExists('flow_id', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('url_suffix', $data ?? [], null);
        $this->setIfExists('theme', $data ?? [], null);
        $this->setIfExists('max_window_size', $data ?? [], null);
        $this->setIfExists('msg_rpm', $data ?? [], null);
        $this->setIfExists('msg_ip_rpm', $data ?? [], null);
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
     * Gets title
     *
     * @return \OpenAPI\Client\Model\Title1|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param \OpenAPI\Client\Model\Title1|null $title title
     *
     * @return self
     */
    public function setTitle($title)
    {
        if (is_null($title)) {
            throw new \InvalidArgumentException('non-nullable title cannot be null');
        }
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets flow_id
     *
     * @return \OpenAPI\Client\Model\FlowId|null
     */
    public function getFlowId()
    {
        return $this->container['flow_id'];
    }

    /**
     * Sets flow_id
     *
     * @param \OpenAPI\Client\Model\FlowId|null $flow_id flow_id
     *
     * @return self
     */
    public function setFlowId($flow_id)
    {
        if (is_null($flow_id)) {
            throw new \InvalidArgumentException('non-nullable flow_id cannot be null');
        }
        $this->container['flow_id'] = $flow_id;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \OpenAPI\Client\Model\ChatbotUpdateRequestStatus|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \OpenAPI\Client\Model\ChatbotUpdateRequestStatus|null $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets url_suffix
     *
     * @return \OpenAPI\Client\Model\UrlSuffix|null
     */
    public function getUrlSuffix()
    {
        return $this->container['url_suffix'];
    }

    /**
     * Sets url_suffix
     *
     * @param \OpenAPI\Client\Model\UrlSuffix|null $url_suffix url_suffix
     *
     * @return self
     */
    public function setUrlSuffix($url_suffix)
    {
        if (is_null($url_suffix)) {
            throw new \InvalidArgumentException('non-nullable url_suffix cannot be null');
        }
        $this->container['url_suffix'] = $url_suffix;

        return $this;
    }

    /**
     * Gets theme
     *
     * @return \OpenAPI\Client\Model\Theme|null
     */
    public function getTheme()
    {
        return $this->container['theme'];
    }

    /**
     * Sets theme
     *
     * @param \OpenAPI\Client\Model\Theme|null $theme theme
     *
     * @return self
     */
    public function setTheme($theme)
    {
        if (is_null($theme)) {
            throw new \InvalidArgumentException('non-nullable theme cannot be null');
        }
        $this->container['theme'] = $theme;

        return $this;
    }

    /**
     * Gets max_window_size
     *
     * @return \OpenAPI\Client\Model\MaxWindowSize|null
     */
    public function getMaxWindowSize()
    {
        return $this->container['max_window_size'];
    }

    /**
     * Sets max_window_size
     *
     * @param \OpenAPI\Client\Model\MaxWindowSize|null $max_window_size max_window_size
     *
     * @return self
     */
    public function setMaxWindowSize($max_window_size)
    {
        if (is_null($max_window_size)) {
            throw new \InvalidArgumentException('non-nullable max_window_size cannot be null');
        }
        $this->container['max_window_size'] = $max_window_size;

        return $this;
    }

    /**
     * Gets msg_rpm
     *
     * @return \OpenAPI\Client\Model\MsgRpm|null
     */
    public function getMsgRpm()
    {
        return $this->container['msg_rpm'];
    }

    /**
     * Sets msg_rpm
     *
     * @param \OpenAPI\Client\Model\MsgRpm|null $msg_rpm msg_rpm
     *
     * @return self
     */
    public function setMsgRpm($msg_rpm)
    {
        if (is_null($msg_rpm)) {
            throw new \InvalidArgumentException('non-nullable msg_rpm cannot be null');
        }
        $this->container['msg_rpm'] = $msg_rpm;

        return $this;
    }

    /**
     * Gets msg_ip_rpm
     *
     * @return \OpenAPI\Client\Model\MsgIpRpm|null
     */
    public function getMsgIpRpm()
    {
        return $this->container['msg_ip_rpm'];
    }

    /**
     * Sets msg_ip_rpm
     *
     * @param \OpenAPI\Client\Model\MsgIpRpm|null $msg_ip_rpm msg_ip_rpm
     *
     * @return self
     */
    public function setMsgIpRpm($msg_ip_rpm)
    {
        if (is_null($msg_ip_rpm)) {
            throw new \InvalidArgumentException('non-nullable msg_ip_rpm cannot be null');
        }
        $this->container['msg_ip_rpm'] = $msg_ip_rpm;

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

