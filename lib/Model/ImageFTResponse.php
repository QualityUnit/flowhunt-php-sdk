<?php
/**
 * ImageFTResponse
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
 * ImageFTResponse Class Doc Comment
 *
 * @category Class
 * @package  FlowHunt
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ImageFTResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ImageFTResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'ft_type' => '\FlowHunt\Model\FTType',
        'ft_id' => 'string',
        'name' => 'string',
        'steps' => 'int',
        'lora_rank' => 'int',
        'trigger_word' => 'string',
        'training_images' => 'string[]',
        'status' => '\FlowHunt\Model\FTStatus',
        'cover_image' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'ft_type' => null,
        'ft_id' => 'uuid',
        'name' => null,
        'steps' => null,
        'lora_rank' => null,
        'trigger_word' => null,
        'training_images' => null,
        'status' => null,
        'cover_image' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'ft_type' => false,
        'ft_id' => false,
        'name' => false,
        'steps' => false,
        'lora_rank' => false,
        'trigger_word' => false,
        'training_images' => false,
        'status' => false,
        'cover_image' => false
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
        'ft_type' => 'ft_type',
        'ft_id' => 'ft_id',
        'name' => 'name',
        'steps' => 'steps',
        'lora_rank' => 'lora_rank',
        'trigger_word' => 'trigger_word',
        'training_images' => 'training_images',
        'status' => 'status',
        'cover_image' => 'cover_image'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ft_type' => 'setFtType',
        'ft_id' => 'setFtId',
        'name' => 'setName',
        'steps' => 'setSteps',
        'lora_rank' => 'setLoraRank',
        'trigger_word' => 'setTriggerWord',
        'training_images' => 'setTrainingImages',
        'status' => 'setStatus',
        'cover_image' => 'setCoverImage'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ft_type' => 'getFtType',
        'ft_id' => 'getFtId',
        'name' => 'getName',
        'steps' => 'getSteps',
        'lora_rank' => 'getLoraRank',
        'trigger_word' => 'getTriggerWord',
        'training_images' => 'getTrainingImages',
        'status' => 'getStatus',
        'cover_image' => 'getCoverImage'
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
        $this->setIfExists('ft_type', $data ?? [], null);
        $this->setIfExists('ft_id', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('steps', $data ?? [], null);
        $this->setIfExists('lora_rank', $data ?? [], null);
        $this->setIfExists('trigger_word', $data ?? [], null);
        $this->setIfExists('training_images', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('cover_image', $data ?? [], null);
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

        if ($this->container['ft_type'] === null) {
            $invalidProperties[] = "'ft_type' can't be null";
        }
        if ($this->container['ft_id'] === null) {
            $invalidProperties[] = "'ft_id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['steps'] === null) {
            $invalidProperties[] = "'steps' can't be null";
        }
        if ($this->container['lora_rank'] === null) {
            $invalidProperties[] = "'lora_rank' can't be null";
        }
        if ($this->container['trigger_word'] === null) {
            $invalidProperties[] = "'trigger_word' can't be null";
        }
        if ($this->container['training_images'] === null) {
            $invalidProperties[] = "'training_images' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['cover_image'] === null) {
            $invalidProperties[] = "'cover_image' can't be null";
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
     * Gets ft_type
     *
     * @return \FlowHunt\Model\FTType
     */
    public function getFtType()
    {
        return $this->container['ft_type'];
    }

    /**
     * Sets ft_type
     *
     * @param \FlowHunt\Model\FTType $ft_type Fine tuning type
     *
     * @return self
     */
    public function setFtType($ft_type)
    {
        if (is_null($ft_type)) {
            throw new \InvalidArgumentException('non-nullable ft_type cannot be null');
        }
        $this->container['ft_type'] = $ft_type;

        return $this;
    }

    /**
     * Gets ft_id
     *
     * @return string
     */
    public function getFtId()
    {
        return $this->container['ft_id'];
    }

    /**
     * Sets ft_id
     *
     * @param string $ft_id Fine tuning id
     *
     * @return self
     */
    public function setFtId($ft_id)
    {
        if (is_null($ft_id)) {
            throw new \InvalidArgumentException('non-nullable ft_id cannot be null');
        }
        $this->container['ft_id'] = $ft_id;

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
     * @param string $name Fine tuning name
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
     * Gets steps
     *
     * @return int
     */
    public function getSteps()
    {
        return $this->container['steps'];
    }

    /**
     * Sets steps
     *
     * @param int $steps Number of steps
     *
     * @return self
     */
    public function setSteps($steps)
    {
        if (is_null($steps)) {
            throw new \InvalidArgumentException('non-nullable steps cannot be null');
        }
        $this->container['steps'] = $steps;

        return $this;
    }

    /**
     * Gets lora_rank
     *
     * @return int
     */
    public function getLoraRank()
    {
        return $this->container['lora_rank'];
    }

    /**
     * Sets lora_rank
     *
     * @param int $lora_rank Lora rank
     *
     * @return self
     */
    public function setLoraRank($lora_rank)
    {
        if (is_null($lora_rank)) {
            throw new \InvalidArgumentException('non-nullable lora_rank cannot be null');
        }
        $this->container['lora_rank'] = $lora_rank;

        return $this;
    }

    /**
     * Gets trigger_word
     *
     * @return string
     */
    public function getTriggerWord()
    {
        return $this->container['trigger_word'];
    }

    /**
     * Sets trigger_word
     *
     * @param string $trigger_word Trigger word
     *
     * @return self
     */
    public function setTriggerWord($trigger_word)
    {
        if (is_null($trigger_word)) {
            throw new \InvalidArgumentException('non-nullable trigger_word cannot be null');
        }
        $this->container['trigger_word'] = $trigger_word;

        return $this;
    }

    /**
     * Gets training_images
     *
     * @return string[]
     */
    public function getTrainingImages()
    {
        return $this->container['training_images'];
    }

    /**
     * Sets training_images
     *
     * @param string[] $training_images Training images
     *
     * @return self
     */
    public function setTrainingImages($training_images)
    {
        if (is_null($training_images)) {
            throw new \InvalidArgumentException('non-nullable training_images cannot be null');
        }
        $this->container['training_images'] = $training_images;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \FlowHunt\Model\FTStatus
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \FlowHunt\Model\FTStatus $status Status
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
     * Gets cover_image
     *
     * @return string
     */
    public function getCoverImage()
    {
        return $this->container['cover_image'];
    }

    /**
     * Sets cover_image
     *
     * @param string $cover_image Cover image
     *
     * @return self
     */
    public function setCoverImage($cover_image)
    {
        if (is_null($cover_image)) {
            throw new \InvalidArgumentException('non-nullable cover_image cannot be null');
        }
        $this->container['cover_image'] = $cover_image;

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


