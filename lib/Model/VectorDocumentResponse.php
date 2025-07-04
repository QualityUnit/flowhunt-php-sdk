<?php
/**
 * VectorDocumentResponse
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
 * VectorDocumentResponse Class Doc Comment
 *
 * @category Class
 * @package  FlowHunt
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class VectorDocumentResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'VectorDocumentResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'document_id' => 'string',
        'workspace_id' => 'string',
        'document_type' => '\FlowHunt\Model\VectorDocumentType',
        'point_id' => 'string',
        'pointer_position' => 'int',
        'pointer_type' => '\FlowHunt\Model\PointerType',
        'schema_type' => 'string',
        'kb_key' => 'string',
        'vector' => 'float[]',
        'vector_id' => 'int',
        'data' => '\FlowHunt\Model\Data'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'document_id' => null,
        'workspace_id' => null,
        'document_type' => null,
        'point_id' => null,
        'pointer_position' => null,
        'pointer_type' => null,
        'schema_type' => null,
        'kb_key' => null,
        'vector' => null,
        'vector_id' => null,
        'data' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'document_id' => false,
        'workspace_id' => false,
        'document_type' => false,
        'point_id' => false,
        'pointer_position' => false,
        'pointer_type' => false,
        'schema_type' => true,
        'kb_key' => false,
        'vector' => true,
        'vector_id' => false,
        'data' => true
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
        'document_id' => 'document_id',
        'workspace_id' => 'workspace_id',
        'document_type' => 'document_type',
        'point_id' => 'point_id',
        'pointer_position' => 'pointer_position',
        'pointer_type' => 'pointer_type',
        'schema_type' => 'schema_type',
        'kb_key' => 'kb_key',
        'vector' => 'vector',
        'vector_id' => 'vector_id',
        'data' => 'data'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'document_id' => 'setDocumentId',
        'workspace_id' => 'setWorkspaceId',
        'document_type' => 'setDocumentType',
        'point_id' => 'setPointId',
        'pointer_position' => 'setPointerPosition',
        'pointer_type' => 'setPointerType',
        'schema_type' => 'setSchemaType',
        'kb_key' => 'setKbKey',
        'vector' => 'setVector',
        'vector_id' => 'setVectorId',
        'data' => 'setData'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'document_id' => 'getDocumentId',
        'workspace_id' => 'getWorkspaceId',
        'document_type' => 'getDocumentType',
        'point_id' => 'getPointId',
        'pointer_position' => 'getPointerPosition',
        'pointer_type' => 'getPointerType',
        'schema_type' => 'getSchemaType',
        'kb_key' => 'getKbKey',
        'vector' => 'getVector',
        'vector_id' => 'getVectorId',
        'data' => 'getData'
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
        $this->setIfExists('document_id', $data ?? [], null);
        $this->setIfExists('workspace_id', $data ?? [], null);
        $this->setIfExists('document_type', $data ?? [], null);
        $this->setIfExists('point_id', $data ?? [], null);
        $this->setIfExists('pointer_position', $data ?? [], null);
        $this->setIfExists('pointer_type', $data ?? [], null);
        $this->setIfExists('schema_type', $data ?? [], null);
        $this->setIfExists('kb_key', $data ?? [], null);
        $this->setIfExists('vector', $data ?? [], null);
        $this->setIfExists('vector_id', $data ?? [], null);
        $this->setIfExists('data', $data ?? [], null);
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

        if ($this->container['document_id'] === null) {
            $invalidProperties[] = "'document_id' can't be null";
        }
        if ($this->container['workspace_id'] === null) {
            $invalidProperties[] = "'workspace_id' can't be null";
        }
        if ($this->container['document_type'] === null) {
            $invalidProperties[] = "'document_type' can't be null";
        }
        if ($this->container['point_id'] === null) {
            $invalidProperties[] = "'point_id' can't be null";
        }
        if ($this->container['pointer_position'] === null) {
            $invalidProperties[] = "'pointer_position' can't be null";
        }
        if ($this->container['pointer_type'] === null) {
            $invalidProperties[] = "'pointer_type' can't be null";
        }
        if ($this->container['kb_key'] === null) {
            $invalidProperties[] = "'kb_key' can't be null";
        }
        if ($this->container['vector'] === null) {
            $invalidProperties[] = "'vector' can't be null";
        }
        if ($this->container['vector_id'] === null) {
            $invalidProperties[] = "'vector_id' can't be null";
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
     * Gets document_id
     *
     * @return string
     */
    public function getDocumentId()
    {
        return $this->container['document_id'];
    }

    /**
     * Sets document_id
     *
     * @param string $document_id Document ID
     *
     * @return self
     */
    public function setDocumentId($document_id)
    {
        if (is_null($document_id)) {
            throw new \InvalidArgumentException('non-nullable document_id cannot be null');
        }
        $this->container['document_id'] = $document_id;

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
     * Gets document_type
     *
     * @return \FlowHunt\Model\VectorDocumentType
     */
    public function getDocumentType()
    {
        return $this->container['document_type'];
    }

    /**
     * Sets document_type
     *
     * @param \FlowHunt\Model\VectorDocumentType $document_type Document type
     *
     * @return self
     */
    public function setDocumentType($document_type)
    {
        if (is_null($document_type)) {
            throw new \InvalidArgumentException('non-nullable document_type cannot be null');
        }
        $this->container['document_type'] = $document_type;

        return $this;
    }

    /**
     * Gets point_id
     *
     * @return string
     */
    public function getPointId()
    {
        return $this->container['point_id'];
    }

    /**
     * Sets point_id
     *
     * @param string $point_id Point ID
     *
     * @return self
     */
    public function setPointId($point_id)
    {
        if (is_null($point_id)) {
            throw new \InvalidArgumentException('non-nullable point_id cannot be null');
        }
        $this->container['point_id'] = $point_id;

        return $this;
    }

    /**
     * Gets pointer_position
     *
     * @return int
     */
    public function getPointerPosition()
    {
        return $this->container['pointer_position'];
    }

    /**
     * Sets pointer_position
     *
     * @param int $pointer_position Pointer position
     *
     * @return self
     */
    public function setPointerPosition($pointer_position)
    {
        if (is_null($pointer_position)) {
            throw new \InvalidArgumentException('non-nullable pointer_position cannot be null');
        }
        $this->container['pointer_position'] = $pointer_position;

        return $this;
    }

    /**
     * Gets pointer_type
     *
     * @return \FlowHunt\Model\PointerType
     */
    public function getPointerType()
    {
        return $this->container['pointer_type'];
    }

    /**
     * Sets pointer_type
     *
     * @param \FlowHunt\Model\PointerType $pointer_type Pointer type
     *
     * @return self
     */
    public function setPointerType($pointer_type)
    {
        if (is_null($pointer_type)) {
            throw new \InvalidArgumentException('non-nullable pointer_type cannot be null');
        }
        $this->container['pointer_type'] = $pointer_type;

        return $this;
    }

    /**
     * Gets schema_type
     *
     * @return string|null
     */
    public function getSchemaType()
    {
        return $this->container['schema_type'];
    }

    /**
     * Sets schema_type
     *
     * @param string|null $schema_type schema_type
     *
     * @return self
     */
    public function setSchemaType($schema_type)
    {
        if (is_null($schema_type)) {
            array_push($this->openAPINullablesSetToNull, 'schema_type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('schema_type', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['schema_type'] = $schema_type;

        return $this;
    }

    /**
     * Gets kb_key
     *
     * @return string
     */
    public function getKbKey()
    {
        return $this->container['kb_key'];
    }

    /**
     * Sets kb_key
     *
     * @param string $kb_key Knowledge key - schedule id or category id
     *
     * @return self
     */
    public function setKbKey($kb_key)
    {
        if (is_null($kb_key)) {
            throw new \InvalidArgumentException('non-nullable kb_key cannot be null');
        }
        $this->container['kb_key'] = $kb_key;

        return $this;
    }

    /**
     * Gets vector
     *
     * @return float[]
     */
    public function getVector()
    {
        return $this->container['vector'];
    }

    /**
     * Sets vector
     *
     * @param float[] $vector vector
     *
     * @return self
     */
    public function setVector($vector)
    {
        if (is_null($vector)) {
            array_push($this->openAPINullablesSetToNull, 'vector');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('vector', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['vector'] = $vector;

        return $this;
    }

    /**
     * Gets vector_id
     *
     * @return int
     */
    public function getVectorId()
    {
        return $this->container['vector_id'];
    }

    /**
     * Sets vector_id
     *
     * @param int $vector_id Vector ID
     *
     * @return self
     */
    public function setVectorId($vector_id)
    {
        if (is_null($vector_id)) {
            throw new \InvalidArgumentException('non-nullable vector_id cannot be null');
        }
        $this->container['vector_id'] = $vector_id;

        return $this;
    }

    /**
     * Gets data
     *
     * @return \FlowHunt\Model\Data|null
     */
    public function getData()
    {
        return $this->container['data'];
    }

    /**
     * Sets data
     *
     * @param \FlowHunt\Model\Data|null $data data
     *
     * @return self
     */
    public function setData($data)
    {
        if (is_null($data)) {
            array_push($this->openAPINullablesSetToNull, 'data');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('data', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['data'] = $data;

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


