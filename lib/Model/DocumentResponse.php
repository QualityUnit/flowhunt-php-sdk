<?php
/**
 * DocumentResponse
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
 * DocumentResponse Class Doc Comment
 *
 * @category Class
 * @package  FlowHunt
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class DocumentResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DocumentResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'doc_id' => 'string',
        'cat_id' => 'string',
        'workspace_id' => 'string',
        'doc_name' => 'string',
        'url' => 'string',
        'doc_type' => 'string',
        'user_status' => 'string',
        'status' => 'string',
        'updated_at' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'doc_id' => null,
        'cat_id' => null,
        'workspace_id' => null,
        'doc_name' => null,
        'url' => null,
        'doc_type' => null,
        'user_status' => null,
        'status' => null,
        'updated_at' => 'date-time'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'doc_id' => false,
        'cat_id' => false,
        'workspace_id' => false,
        'doc_name' => false,
        'url' => true,
        'doc_type' => false,
        'user_status' => false,
        'status' => false,
        'updated_at' => false
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
        'doc_id' => 'doc_id',
        'cat_id' => 'cat_id',
        'workspace_id' => 'workspace_id',
        'doc_name' => 'doc_name',
        'url' => 'url',
        'doc_type' => 'doc_type',
        'user_status' => 'user_status',
        'status' => 'status',
        'updated_at' => 'updated_at'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'doc_id' => 'setDocId',
        'cat_id' => 'setCatId',
        'workspace_id' => 'setWorkspaceId',
        'doc_name' => 'setDocName',
        'url' => 'setUrl',
        'doc_type' => 'setDocType',
        'user_status' => 'setUserStatus',
        'status' => 'setStatus',
        'updated_at' => 'setUpdatedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'doc_id' => 'getDocId',
        'cat_id' => 'getCatId',
        'workspace_id' => 'getWorkspaceId',
        'doc_name' => 'getDocName',
        'url' => 'getUrl',
        'doc_type' => 'getDocType',
        'user_status' => 'getUserStatus',
        'status' => 'getStatus',
        'updated_at' => 'getUpdatedAt'
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
        $this->setIfExists('doc_id', $data ?? [], null);
        $this->setIfExists('cat_id', $data ?? [], null);
        $this->setIfExists('workspace_id', $data ?? [], null);
        $this->setIfExists('doc_name', $data ?? [], null);
        $this->setIfExists('url', $data ?? [], null);
        $this->setIfExists('doc_type', $data ?? [], null);
        $this->setIfExists('user_status', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('updated_at', $data ?? [], null);
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

        if ($this->container['doc_id'] === null) {
            $invalidProperties[] = "'doc_id' can't be null";
        }
        if ($this->container['cat_id'] === null) {
            $invalidProperties[] = "'cat_id' can't be null";
        }
        if ($this->container['workspace_id'] === null) {
            $invalidProperties[] = "'workspace_id' can't be null";
        }
        if ($this->container['doc_name'] === null) {
            $invalidProperties[] = "'doc_name' can't be null";
        }
        if ($this->container['doc_type'] === null) {
            $invalidProperties[] = "'doc_type' can't be null";
        }
        if ($this->container['user_status'] === null) {
            $invalidProperties[] = "'user_status' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['updated_at'] === null) {
            $invalidProperties[] = "'updated_at' can't be null";
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
     * Gets doc_id
     *
     * @return string
     */
    public function getDocId()
    {
        return $this->container['doc_id'];
    }

    /**
     * Sets doc_id
     *
     * @param string $doc_id Document ID
     *
     * @return self
     */
    public function setDocId($doc_id)
    {
        if (is_null($doc_id)) {
            throw new \InvalidArgumentException('non-nullable doc_id cannot be null');
        }
        $this->container['doc_id'] = $doc_id;

        return $this;
    }

    /**
     * Gets cat_id
     *
     * @return string
     */
    public function getCatId()
    {
        return $this->container['cat_id'];
    }

    /**
     * Sets cat_id
     *
     * @param string $cat_id Category ID
     *
     * @return self
     */
    public function setCatId($cat_id)
    {
        if (is_null($cat_id)) {
            throw new \InvalidArgumentException('non-nullable cat_id cannot be null');
        }
        $this->container['cat_id'] = $cat_id;

        return $this;
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
     * Gets doc_name
     *
     * @return string
     */
    public function getDocName()
    {
        return $this->container['doc_name'];
    }

    /**
     * Sets doc_name
     *
     * @param string $doc_name Document name
     *
     * @return self
     */
    public function setDocName($doc_name)
    {
        if (is_null($doc_name)) {
            throw new \InvalidArgumentException('non-nullable doc_name cannot be null');
        }
        $this->container['doc_name'] = $doc_name;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string|null
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string|null $url url
     *
     * @return self
     */
    public function setUrl($url)
    {
        if (is_null($url)) {
            array_push($this->openAPINullablesSetToNull, 'url');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('url', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets doc_type
     *
     * @return string
     */
    public function getDocType()
    {
        return $this->container['doc_type'];
    }

    /**
     * Sets doc_type
     *
     * @param string $doc_type Document type
     *
     * @return self
     */
    public function setDocType($doc_type)
    {
        if (is_null($doc_type)) {
            throw new \InvalidArgumentException('non-nullable doc_type cannot be null');
        }
        $this->container['doc_type'] = $doc_type;

        return $this;
    }

    /**
     * Gets user_status
     *
     * @return string
     */
    public function getUserStatus()
    {
        return $this->container['user_status'];
    }

    /**
     * Sets user_status
     *
     * @param string $user_status User status
     *
     * @return self
     */
    public function setUserStatus($user_status)
    {
        if (is_null($user_status)) {
            throw new \InvalidArgumentException('non-nullable user_status cannot be null');
        }
        $this->container['user_status'] = $user_status;

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
     * @param string $status Document status
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
     * Gets updated_at
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param \DateTime $updated_at Document updated at
     *
     * @return self
     */
    public function setUpdatedAt($updated_at)
    {
        if (is_null($updated_at)) {
            throw new \InvalidArgumentException('non-nullable updated_at cannot be null');
        }
        $this->container['updated_at'] = $updated_at;

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


