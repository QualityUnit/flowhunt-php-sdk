<?php
/**
 * ChatbotCreateRequest
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
 * Generator version: 7.9.0
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
 * ChatbotCreateRequest Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ChatbotCreateRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ChatbotCreateRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'title' => 'string',
        'description' => 'string',
        'flow_id' => 'string',
        'status' => 'string',
        'url_suffix' => 'string',
        'theme' => 'string',
        'max_window_size' => 'string',
        'msg_rpm' => 'int',
        'msg_ip_rpm' => 'int'
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
        'description' => null,
        'flow_id' => 'uuid',
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
        'description' => true,
        'flow_id' => false,
        'status' => false,
        'url_suffix' => true,
        'theme' => true,
        'max_window_size' => true,
        'msg_rpm' => true,
        'msg_ip_rpm' => true
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
        'description' => 'description',
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
        'description' => 'setDescription',
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
        'description' => 'getDescription',
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

    public const STATUS_A = 'A';
    public const STATUS_I = 'I';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_A,
            self::STATUS_I,
        ];
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
        $this->setIfExists('description', $data ?? [], null);
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

        if ($this->container['title'] === null) {
            $invalidProperties[] = "'title' can't be null";
        }
        if ((mb_strlen($this->container['title']) > 100)) {
            $invalidProperties[] = "invalid value for 'title', the character length must be smaller than or equal to 100.";
        }

        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
                implode("', '", $allowedValues)
            );
        }

        if ((mb_strlen($this->container['status']) > 1)) {
            $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 1.";
        }

        if (!is_null($this->container['url_suffix']) && (mb_strlen($this->container['url_suffix']) > 100)) {
            $invalidProperties[] = "invalid value for 'url_suffix', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['theme']) && (mb_strlen($this->container['theme']) > 1)) {
            $invalidProperties[] = "invalid value for 'theme', the character length must be smaller than or equal to 1.";
        }

        if (!is_null($this->container['max_window_size']) && (mb_strlen($this->container['max_window_size']) > 32)) {
            $invalidProperties[] = "invalid value for 'max_window_size', the character length must be smaller than or equal to 32.";
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
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title title
     *
     * @return self
     */
    public function setTitle($title)
    {
        if (is_null($title)) {
            throw new \InvalidArgumentException('non-nullable title cannot be null');
        }
        if ((mb_strlen($title) > 100)) {
            throw new \InvalidArgumentException('invalid length for $title when calling ChatbotCreateRequest., must be smaller than or equal to 100.');
        }

        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description description
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            array_push($this->openAPINullablesSetToNull, 'description');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('description', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets flow_id
     *
     * @return string|null
     */
    public function getFlowId()
    {
        return $this->container['flow_id'];
    }

    /**
     * Sets flow_id
     *
     * @param string|null $flow_id Chatbot Flow ID
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
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'status', must be one of '%s'",
                    $status,
                    implode("', '", $allowedValues)
                )
            );
        }
        if ((mb_strlen($status) > 1)) {
            throw new \InvalidArgumentException('invalid length for $status when calling ChatbotCreateRequest., must be smaller than or equal to 1.');
        }

        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets url_suffix
     *
     * @return string|null
     */
    public function getUrlSuffix()
    {
        return $this->container['url_suffix'];
    }

    /**
     * Sets url_suffix
     *
     * @param string|null $url_suffix url_suffix
     *
     * @return self
     */
    public function setUrlSuffix($url_suffix)
    {
        if (is_null($url_suffix)) {
            array_push($this->openAPINullablesSetToNull, 'url_suffix');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('url_suffix', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($url_suffix) && (mb_strlen($url_suffix) > 100)) {
            throw new \InvalidArgumentException('invalid length for $url_suffix when calling ChatbotCreateRequest., must be smaller than or equal to 100.');
        }

        $this->container['url_suffix'] = $url_suffix;

        return $this;
    }

    /**
     * Gets theme
     *
     * @return string|null
     */
    public function getTheme()
    {
        return $this->container['theme'];
    }

    /**
     * Sets theme
     *
     * @param string|null $theme theme
     *
     * @return self
     */
    public function setTheme($theme)
    {
        if (is_null($theme)) {
            array_push($this->openAPINullablesSetToNull, 'theme');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('theme', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($theme) && (mb_strlen($theme) > 1)) {
            throw new \InvalidArgumentException('invalid length for $theme when calling ChatbotCreateRequest., must be smaller than or equal to 1.');
        }

        $this->container['theme'] = $theme;

        return $this;
    }

    /**
     * Gets max_window_size
     *
     * @return string|null
     */
    public function getMaxWindowSize()
    {
        return $this->container['max_window_size'];
    }

    /**
     * Sets max_window_size
     *
     * @param string|null $max_window_size max_window_size
     *
     * @return self
     */
    public function setMaxWindowSize($max_window_size)
    {
        if (is_null($max_window_size)) {
            array_push($this->openAPINullablesSetToNull, 'max_window_size');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('max_window_size', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($max_window_size) && (mb_strlen($max_window_size) > 32)) {
            throw new \InvalidArgumentException('invalid length for $max_window_size when calling ChatbotCreateRequest., must be smaller than or equal to 32.');
        }

        $this->container['max_window_size'] = $max_window_size;

        return $this;
    }

    /**
     * Gets msg_rpm
     *
     * @return int|null
     */
    public function getMsgRpm()
    {
        return $this->container['msg_rpm'];
    }

    /**
     * Sets msg_rpm
     *
     * @param int|null $msg_rpm msg_rpm
     *
     * @return self
     */
    public function setMsgRpm($msg_rpm)
    {
        if (is_null($msg_rpm)) {
            array_push($this->openAPINullablesSetToNull, 'msg_rpm');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('msg_rpm', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['msg_rpm'] = $msg_rpm;

        return $this;
    }

    /**
     * Gets msg_ip_rpm
     *
     * @return int|null
     */
    public function getMsgIpRpm()
    {
        return $this->container['msg_ip_rpm'];
    }

    /**
     * Sets msg_ip_rpm
     *
     * @param int|null $msg_ip_rpm msg_ip_rpm
     *
     * @return self
     */
    public function setMsgIpRpm($msg_ip_rpm)
    {
        if (is_null($msg_ip_rpm)) {
            array_push($this->openAPINullablesSetToNull, 'msg_ip_rpm');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('msg_ip_rpm', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
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


