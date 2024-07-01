<?php
/**
 * FlowCreditUsage
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
 * FlowCreditUsage Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class FlowCreditUsage implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FlowCreditUsage';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'cost' => 'mixed',
        'component_name' => 'mixed',
        'completion_tokens' => '\OpenAPI\Client\Model\CompletionTokens',
        'prompt_tokens' => '\OpenAPI\Client\Model\PromptTokens',
        'model_name' => '\OpenAPI\Client\Model\ModelName',
        'operation_date' => 'mixed',
        'total_tokens' => '\OpenAPI\Client\Model\TotalTokens'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'cost' => null,
        'component_name' => null,
        'completion_tokens' => null,
        'prompt_tokens' => null,
        'model_name' => null,
        'operation_date' => 'date-time',
        'total_tokens' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'cost' => true,
        'component_name' => true,
        'completion_tokens' => false,
        'prompt_tokens' => false,
        'model_name' => false,
        'operation_date' => true,
        'total_tokens' => false
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
        'cost' => 'cost',
        'component_name' => 'component_name',
        'completion_tokens' => 'completion_tokens',
        'prompt_tokens' => 'prompt_tokens',
        'model_name' => 'model_name',
        'operation_date' => 'operation_date',
        'total_tokens' => 'total_tokens'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cost' => 'setCost',
        'component_name' => 'setComponentName',
        'completion_tokens' => 'setCompletionTokens',
        'prompt_tokens' => 'setPromptTokens',
        'model_name' => 'setModelName',
        'operation_date' => 'setOperationDate',
        'total_tokens' => 'setTotalTokens'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cost' => 'getCost',
        'component_name' => 'getComponentName',
        'completion_tokens' => 'getCompletionTokens',
        'prompt_tokens' => 'getPromptTokens',
        'model_name' => 'getModelName',
        'operation_date' => 'getOperationDate',
        'total_tokens' => 'getTotalTokens'
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
        $this->setIfExists('cost', $data ?? [], null);
        $this->setIfExists('component_name', $data ?? [], null);
        $this->setIfExists('completion_tokens', $data ?? [], null);
        $this->setIfExists('prompt_tokens', $data ?? [], null);
        $this->setIfExists('model_name', $data ?? [], null);
        $this->setIfExists('operation_date', $data ?? [], null);
        $this->setIfExists('total_tokens', $data ?? [], null);
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

        if ($this->container['cost'] === null) {
            $invalidProperties[] = "'cost' can't be null";
        }
        if ($this->container['component_name'] === null) {
            $invalidProperties[] = "'component_name' can't be null";
        }
        if ($this->container['operation_date'] === null) {
            $invalidProperties[] = "'operation_date' can't be null";
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
     * Gets cost
     *
     * @return mixed
     */
    public function getCost()
    {
        return $this->container['cost'];
    }

    /**
     * Sets cost
     *
     * @param mixed $cost cost
     *
     * @return self
     */
    public function setCost($cost)
    {
        if (is_null($cost)) {
            array_push($this->openAPINullablesSetToNull, 'cost');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('cost', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['cost'] = $cost;

        return $this;
    }

    /**
     * Gets component_name
     *
     * @return mixed
     */
    public function getComponentName()
    {
        return $this->container['component_name'];
    }

    /**
     * Sets component_name
     *
     * @param mixed $component_name component_name
     *
     * @return self
     */
    public function setComponentName($component_name)
    {
        if (is_null($component_name)) {
            array_push($this->openAPINullablesSetToNull, 'component_name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('component_name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['component_name'] = $component_name;

        return $this;
    }

    /**
     * Gets completion_tokens
     *
     * @return \OpenAPI\Client\Model\CompletionTokens|null
     */
    public function getCompletionTokens()
    {
        return $this->container['completion_tokens'];
    }

    /**
     * Sets completion_tokens
     *
     * @param \OpenAPI\Client\Model\CompletionTokens|null $completion_tokens completion_tokens
     *
     * @return self
     */
    public function setCompletionTokens($completion_tokens)
    {
        if (is_null($completion_tokens)) {
            throw new \InvalidArgumentException('non-nullable completion_tokens cannot be null');
        }
        $this->container['completion_tokens'] = $completion_tokens;

        return $this;
    }

    /**
     * Gets prompt_tokens
     *
     * @return \OpenAPI\Client\Model\PromptTokens|null
     */
    public function getPromptTokens()
    {
        return $this->container['prompt_tokens'];
    }

    /**
     * Sets prompt_tokens
     *
     * @param \OpenAPI\Client\Model\PromptTokens|null $prompt_tokens prompt_tokens
     *
     * @return self
     */
    public function setPromptTokens($prompt_tokens)
    {
        if (is_null($prompt_tokens)) {
            throw new \InvalidArgumentException('non-nullable prompt_tokens cannot be null');
        }
        $this->container['prompt_tokens'] = $prompt_tokens;

        return $this;
    }

    /**
     * Gets model_name
     *
     * @return \OpenAPI\Client\Model\ModelName|null
     */
    public function getModelName()
    {
        return $this->container['model_name'];
    }

    /**
     * Sets model_name
     *
     * @param \OpenAPI\Client\Model\ModelName|null $model_name model_name
     *
     * @return self
     */
    public function setModelName($model_name)
    {
        if (is_null($model_name)) {
            throw new \InvalidArgumentException('non-nullable model_name cannot be null');
        }
        $this->container['model_name'] = $model_name;

        return $this;
    }

    /**
     * Gets operation_date
     *
     * @return mixed
     */
    public function getOperationDate()
    {
        return $this->container['operation_date'];
    }

    /**
     * Sets operation_date
     *
     * @param mixed $operation_date operation_date
     *
     * @return self
     */
    public function setOperationDate($operation_date)
    {
        if (is_null($operation_date)) {
            array_push($this->openAPINullablesSetToNull, 'operation_date');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('operation_date', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['operation_date'] = $operation_date;

        return $this;
    }

    /**
     * Gets total_tokens
     *
     * @return \OpenAPI\Client\Model\TotalTokens|null
     */
    public function getTotalTokens()
    {
        return $this->container['total_tokens'];
    }

    /**
     * Sets total_tokens
     *
     * @param \OpenAPI\Client\Model\TotalTokens|null $total_tokens total_tokens
     *
     * @return self
     */
    public function setTotalTokens($total_tokens)
    {
        if (is_null($total_tokens)) {
            throw new \InvalidArgumentException('non-nullable total_tokens cannot be null');
        }
        $this->container['total_tokens'] = $total_tokens;

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


