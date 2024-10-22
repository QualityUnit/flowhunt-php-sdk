<?php
/**
 * PromptResponse
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
 * PromptResponse Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PromptResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PromptResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'prompt_id' => 'string',
        'cat_id' => 'string',
        'workspace_id' => 'string',
        'name' => 'string',
        'description' => 'string',
        'prompt_text' => 'string',
        'prompt_url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'prompt_id' => null,
        'cat_id' => null,
        'workspace_id' => null,
        'name' => null,
        'description' => null,
        'prompt_text' => null,
        'prompt_url' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'prompt_id' => false,
        'cat_id' => false,
        'workspace_id' => false,
        'name' => false,
        'description' => true,
        'prompt_text' => false,
        'prompt_url' => true
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
        'prompt_id' => 'prompt_id',
        'cat_id' => 'cat_id',
        'workspace_id' => 'workspace_id',
        'name' => 'name',
        'description' => 'description',
        'prompt_text' => 'prompt_text',
        'prompt_url' => 'prompt_url'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'prompt_id' => 'setPromptId',
        'cat_id' => 'setCatId',
        'workspace_id' => 'setWorkspaceId',
        'name' => 'setName',
        'description' => 'setDescription',
        'prompt_text' => 'setPromptText',
        'prompt_url' => 'setPromptUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'prompt_id' => 'getPromptId',
        'cat_id' => 'getCatId',
        'workspace_id' => 'getWorkspaceId',
        'name' => 'getName',
        'description' => 'getDescription',
        'prompt_text' => 'getPromptText',
        'prompt_url' => 'getPromptUrl'
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
        $this->setIfExists('prompt_id', $data ?? [], null);
        $this->setIfExists('cat_id', $data ?? [], null);
        $this->setIfExists('workspace_id', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('prompt_text', $data ?? [], null);
        $this->setIfExists('prompt_url', $data ?? [], null);
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

        if ($this->container['prompt_id'] === null) {
            $invalidProperties[] = "'prompt_id' can't be null";
        }
        if ($this->container['cat_id'] === null) {
            $invalidProperties[] = "'cat_id' can't be null";
        }
        if ($this->container['workspace_id'] === null) {
            $invalidProperties[] = "'workspace_id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['prompt_text'] === null) {
            $invalidProperties[] = "'prompt_text' can't be null";
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
     * Gets prompt_id
     *
     * @return string
     */
    public function getPromptId()
    {
        return $this->container['prompt_id'];
    }

    /**
     * Sets prompt_id
     *
     * @param string $prompt_id Prompt ID
     *
     * @return self
     */
    public function setPromptId($prompt_id)
    {
        if (is_null($prompt_id)) {
            throw new \InvalidArgumentException('non-nullable prompt_id cannot be null');
        }
        $this->container['prompt_id'] = $prompt_id;

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
     * @param string $name Prompt name
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
     * Gets prompt_text
     *
     * @return string
     */
    public function getPromptText()
    {
        return $this->container['prompt_text'];
    }

    /**
     * Sets prompt_text
     *
     * @param string $prompt_text Prompt text
     *
     * @return self
     */
    public function setPromptText($prompt_text)
    {
        if (is_null($prompt_text)) {
            throw new \InvalidArgumentException('non-nullable prompt_text cannot be null');
        }
        $this->container['prompt_text'] = $prompt_text;

        return $this;
    }

    /**
     * Gets prompt_url
     *
     * @return string|null
     */
    public function getPromptUrl()
    {
        return $this->container['prompt_url'];
    }

    /**
     * Sets prompt_url
     *
     * @param string|null $prompt_url prompt_url
     *
     * @return self
     */
    public function setPromptUrl($prompt_url)
    {
        if (is_null($prompt_url)) {
            array_push($this->openAPINullablesSetToNull, 'prompt_url');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('prompt_url', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['prompt_url'] = $prompt_url;

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


