<?php
/**
 * GridColumnCreateRequest
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
 * GridColumnCreateRequest Class Doc Comment
 *
 * @category Class
 * @package  FlowHunt
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GridColumnCreateRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GridColumnCreateRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'position' => 'int',
        'data_type' => '\FlowHunt\Model\ColumnDataType',
        'data_type_options' => 'string',
        'input_columns' => 'string[]',
        'executor_type' => '\FlowHunt\Model\ColumnExecutorType',
        'executor_flow_id' => 'string',
        'executor_input_template' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'name' => null,
        'position' => null,
        'data_type' => null,
        'data_type_options' => null,
        'input_columns' => 'uuid',
        'executor_type' => null,
        'executor_flow_id' => 'uuid',
        'executor_input_template' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'name' => false,
        'position' => false,
        'data_type' => false,
        'data_type_options' => true,
        'input_columns' => true,
        'executor_type' => false,
        'executor_flow_id' => true,
        'executor_input_template' => true
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
        'name' => 'name',
        'position' => 'position',
        'data_type' => 'data_type',
        'data_type_options' => 'data_type_options',
        'input_columns' => 'input_columns',
        'executor_type' => 'executor_type',
        'executor_flow_id' => 'executor_flow_id',
        'executor_input_template' => 'executor_input_template'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'position' => 'setPosition',
        'data_type' => 'setDataType',
        'data_type_options' => 'setDataTypeOptions',
        'input_columns' => 'setInputColumns',
        'executor_type' => 'setExecutorType',
        'executor_flow_id' => 'setExecutorFlowId',
        'executor_input_template' => 'setExecutorInputTemplate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'position' => 'getPosition',
        'data_type' => 'getDataType',
        'data_type_options' => 'getDataTypeOptions',
        'input_columns' => 'getInputColumns',
        'executor_type' => 'getExecutorType',
        'executor_flow_id' => 'getExecutorFlowId',
        'executor_input_template' => 'getExecutorInputTemplate'
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
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('position', $data ?? [], null);
        $this->setIfExists('data_type', $data ?? [], null);
        $this->setIfExists('data_type_options', $data ?? [], null);
        $this->setIfExists('input_columns', $data ?? [], null);
        $this->setIfExists('executor_type', $data ?? [], null);
        $this->setIfExists('executor_flow_id', $data ?? [], null);
        $this->setIfExists('executor_input_template', $data ?? [], null);
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

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['position'] === null) {
            $invalidProperties[] = "'position' can't be null";
        }
        if ($this->container['data_type'] === null) {
            $invalidProperties[] = "'data_type' can't be null";
        }
        if ($this->container['executor_type'] === null) {
            $invalidProperties[] = "'executor_type' can't be null";
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
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Name of the grid column
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets position
     *
     * @return int
     */
    public function getPosition()
    {
        return $this->container['position'];
    }

    /**
     * Sets position
     *
     * @param int $position Position of the grid column
     *
     * @return self
     */
    public function setPosition($position)
    {
        if (is_null($position)) {
            throw new \InvalidArgumentException('non-nullable position cannot be null');
        }
        $this->container['position'] = $position;

        return $this;
    }

    /**
     * Gets data_type
     *
     * @return \FlowHunt\Model\ColumnDataType
     */
    public function getDataType()
    {
        return $this->container['data_type'];
    }

    /**
     * Sets data_type
     *
     * @param \FlowHunt\Model\ColumnDataType $data_type Data type of the grid column
     *
     * @return self
     */
    public function setDataType($data_type)
    {
        if (is_null($data_type)) {
            throw new \InvalidArgumentException('non-nullable data_type cannot be null');
        }
        $this->container['data_type'] = $data_type;

        return $this;
    }

    /**
     * Gets data_type_options
     *
     * @return string|null
     */
    public function getDataTypeOptions()
    {
        return $this->container['data_type_options'];
    }

    /**
     * Sets data_type_options
     *
     * @param string|null $data_type_options data_type_options
     *
     * @return self
     */
    public function setDataTypeOptions($data_type_options)
    {
        if (is_null($data_type_options)) {
            array_push($this->openAPINullablesSetToNull, 'data_type_options');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('data_type_options', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['data_type_options'] = $data_type_options;

        return $this;
    }

    /**
     * Gets input_columns
     *
     * @return string[]|null
     */
    public function getInputColumns()
    {
        return $this->container['input_columns'];
    }

    /**
     * Sets input_columns
     *
     * @param string[]|null $input_columns input_columns
     *
     * @return self
     */
    public function setInputColumns($input_columns)
    {
        if (is_null($input_columns)) {
            array_push($this->openAPINullablesSetToNull, 'input_columns');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('input_columns', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['input_columns'] = $input_columns;

        return $this;
    }

    /**
     * Gets executor_type
     *
     * @return \FlowHunt\Model\ColumnExecutorType
     */
    public function getExecutorType()
    {
        return $this->container['executor_type'];
    }

    /**
     * Sets executor_type
     *
     * @param \FlowHunt\Model\ColumnExecutorType $executor_type Executor type of the grid column
     *
     * @return self
     */
    public function setExecutorType($executor_type)
    {
        if (is_null($executor_type)) {
            throw new \InvalidArgumentException('non-nullable executor_type cannot be null');
        }
        $this->container['executor_type'] = $executor_type;

        return $this;
    }

    /**
     * Gets executor_flow_id
     *
     * @return string|null
     */
    public function getExecutorFlowId()
    {
        return $this->container['executor_flow_id'];
    }

    /**
     * Sets executor_flow_id
     *
     * @param string|null $executor_flow_id executor_flow_id
     *
     * @return self
     */
    public function setExecutorFlowId($executor_flow_id)
    {
        if (is_null($executor_flow_id)) {
            array_push($this->openAPINullablesSetToNull, 'executor_flow_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('executor_flow_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['executor_flow_id'] = $executor_flow_id;

        return $this;
    }

    /**
     * Gets executor_input_template
     *
     * @return string|null
     */
    public function getExecutorInputTemplate()
    {
        return $this->container['executor_input_template'];
    }

    /**
     * Sets executor_input_template
     *
     * @param string|null $executor_input_template executor_input_template
     *
     * @return self
     */
    public function setExecutorInputTemplate($executor_input_template)
    {
        if (is_null($executor_input_template)) {
            array_push($this->openAPINullablesSetToNull, 'executor_input_template');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('executor_input_template', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['executor_input_template'] = $executor_input_template;

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

