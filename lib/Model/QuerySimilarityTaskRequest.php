<?php
/**
 * QuerySimilarityTaskRequest
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
 * QuerySimilarityTaskRequest Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class QuerySimilarityTaskRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'QuerySimilarityTaskRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'post_back_url' => '\OpenAPI\Client\Model\PostBackUrl',
        'document_type' => '\OpenAPI\Client\Model\DocumentSimilarityRequestDocumentType',
        'pointer_type' => '\OpenAPI\Client\Model\DocumentSimilarityRequestPointerType',
        'schema_type' => '\OpenAPI\Client\Model\SchemaType',
        'limit' => '\OpenAPI\Client\Model\Limit2',
        'score_trheshold' => '\OpenAPI\Client\Model\ScoreTrheshold',
        'with_vectors' => '\OpenAPI\Client\Model\WithVectors',
        'pointer_position_from' => '\OpenAPI\Client\Model\PointerPositionFrom',
        'pointer_position_to' => '\OpenAPI\Client\Model\PointerPositionTo',
        'vector_id_from' => '\OpenAPI\Client\Model\VectorIdFrom',
        'vector_id_to' => '\OpenAPI\Client\Model\VectorIdTo',
        'query' => 'mixed'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'post_back_url' => null,
        'document_type' => null,
        'pointer_type' => null,
        'schema_type' => null,
        'limit' => null,
        'score_trheshold' => null,
        'with_vectors' => null,
        'pointer_position_from' => null,
        'pointer_position_to' => null,
        'vector_id_from' => null,
        'vector_id_to' => null,
        'query' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'post_back_url' => false,
        'document_type' => false,
        'pointer_type' => false,
        'schema_type' => false,
        'limit' => false,
        'score_trheshold' => false,
        'with_vectors' => false,
        'pointer_position_from' => false,
        'pointer_position_to' => false,
        'vector_id_from' => false,
        'vector_id_to' => false,
        'query' => true
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
        'post_back_url' => 'post_back_url',
        'document_type' => 'document_type',
        'pointer_type' => 'pointer_type',
        'schema_type' => 'schema_type',
        'limit' => 'limit',
        'score_trheshold' => 'score_trheshold',
        'with_vectors' => 'with_vectors',
        'pointer_position_from' => 'pointer_position_from',
        'pointer_position_to' => 'pointer_position_to',
        'vector_id_from' => 'vector_id_from',
        'vector_id_to' => 'vector_id_to',
        'query' => 'query'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'post_back_url' => 'setPostBackUrl',
        'document_type' => 'setDocumentType',
        'pointer_type' => 'setPointerType',
        'schema_type' => 'setSchemaType',
        'limit' => 'setLimit',
        'score_trheshold' => 'setScoreTrheshold',
        'with_vectors' => 'setWithVectors',
        'pointer_position_from' => 'setPointerPositionFrom',
        'pointer_position_to' => 'setPointerPositionTo',
        'vector_id_from' => 'setVectorIdFrom',
        'vector_id_to' => 'setVectorIdTo',
        'query' => 'setQuery'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'post_back_url' => 'getPostBackUrl',
        'document_type' => 'getDocumentType',
        'pointer_type' => 'getPointerType',
        'schema_type' => 'getSchemaType',
        'limit' => 'getLimit',
        'score_trheshold' => 'getScoreTrheshold',
        'with_vectors' => 'getWithVectors',
        'pointer_position_from' => 'getPointerPositionFrom',
        'pointer_position_to' => 'getPointerPositionTo',
        'vector_id_from' => 'getVectorIdFrom',
        'vector_id_to' => 'getVectorIdTo',
        'query' => 'getQuery'
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
        $this->setIfExists('post_back_url', $data ?? [], null);
        $this->setIfExists('document_type', $data ?? [], null);
        $this->setIfExists('pointer_type', $data ?? [], null);
        $this->setIfExists('schema_type', $data ?? [], null);
        $this->setIfExists('limit', $data ?? [], null);
        $this->setIfExists('score_trheshold', $data ?? [], null);
        $this->setIfExists('with_vectors', $data ?? [], null);
        $this->setIfExists('pointer_position_from', $data ?? [], null);
        $this->setIfExists('pointer_position_to', $data ?? [], null);
        $this->setIfExists('vector_id_from', $data ?? [], null);
        $this->setIfExists('vector_id_to', $data ?? [], null);
        $this->setIfExists('query', $data ?? [], null);
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
     * Gets post_back_url
     *
     * @return \OpenAPI\Client\Model\PostBackUrl|null
     */
    public function getPostBackUrl()
    {
        return $this->container['post_back_url'];
    }

    /**
     * Sets post_back_url
     *
     * @param \OpenAPI\Client\Model\PostBackUrl|null $post_back_url post_back_url
     *
     * @return self
     */
    public function setPostBackUrl($post_back_url)
    {
        if (is_null($post_back_url)) {
            throw new \InvalidArgumentException('non-nullable post_back_url cannot be null');
        }
        $this->container['post_back_url'] = $post_back_url;

        return $this;
    }

    /**
     * Gets document_type
     *
     * @return \OpenAPI\Client\Model\DocumentSimilarityRequestDocumentType|null
     */
    public function getDocumentType()
    {
        return $this->container['document_type'];
    }

    /**
     * Sets document_type
     *
     * @param \OpenAPI\Client\Model\DocumentSimilarityRequestDocumentType|null $document_type document_type
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
     * Gets pointer_type
     *
     * @return \OpenAPI\Client\Model\DocumentSimilarityRequestPointerType|null
     */
    public function getPointerType()
    {
        return $this->container['pointer_type'];
    }

    /**
     * Sets pointer_type
     *
     * @param \OpenAPI\Client\Model\DocumentSimilarityRequestPointerType|null $pointer_type pointer_type
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
     * @return \OpenAPI\Client\Model\SchemaType|null
     */
    public function getSchemaType()
    {
        return $this->container['schema_type'];
    }

    /**
     * Sets schema_type
     *
     * @param \OpenAPI\Client\Model\SchemaType|null $schema_type schema_type
     *
     * @return self
     */
    public function setSchemaType($schema_type)
    {
        if (is_null($schema_type)) {
            throw new \InvalidArgumentException('non-nullable schema_type cannot be null');
        }
        $this->container['schema_type'] = $schema_type;

        return $this;
    }

    /**
     * Gets limit
     *
     * @return \OpenAPI\Client\Model\Limit2|null
     */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
     * Sets limit
     *
     * @param \OpenAPI\Client\Model\Limit2|null $limit limit
     *
     * @return self
     */
    public function setLimit($limit)
    {
        if (is_null($limit)) {
            throw new \InvalidArgumentException('non-nullable limit cannot be null');
        }
        $this->container['limit'] = $limit;

        return $this;
    }

    /**
     * Gets score_trheshold
     *
     * @return \OpenAPI\Client\Model\ScoreTrheshold|null
     */
    public function getScoreTrheshold()
    {
        return $this->container['score_trheshold'];
    }

    /**
     * Sets score_trheshold
     *
     * @param \OpenAPI\Client\Model\ScoreTrheshold|null $score_trheshold score_trheshold
     *
     * @return self
     */
    public function setScoreTrheshold($score_trheshold)
    {
        if (is_null($score_trheshold)) {
            throw new \InvalidArgumentException('non-nullable score_trheshold cannot be null');
        }
        $this->container['score_trheshold'] = $score_trheshold;

        return $this;
    }

    /**
     * Gets with_vectors
     *
     * @return \OpenAPI\Client\Model\WithVectors|null
     */
    public function getWithVectors()
    {
        return $this->container['with_vectors'];
    }

    /**
     * Sets with_vectors
     *
     * @param \OpenAPI\Client\Model\WithVectors|null $with_vectors with_vectors
     *
     * @return self
     */
    public function setWithVectors($with_vectors)
    {
        if (is_null($with_vectors)) {
            throw new \InvalidArgumentException('non-nullable with_vectors cannot be null');
        }
        $this->container['with_vectors'] = $with_vectors;

        return $this;
    }

    /**
     * Gets pointer_position_from
     *
     * @return \OpenAPI\Client\Model\PointerPositionFrom|null
     */
    public function getPointerPositionFrom()
    {
        return $this->container['pointer_position_from'];
    }

    /**
     * Sets pointer_position_from
     *
     * @param \OpenAPI\Client\Model\PointerPositionFrom|null $pointer_position_from pointer_position_from
     *
     * @return self
     */
    public function setPointerPositionFrom($pointer_position_from)
    {
        if (is_null($pointer_position_from)) {
            throw new \InvalidArgumentException('non-nullable pointer_position_from cannot be null');
        }
        $this->container['pointer_position_from'] = $pointer_position_from;

        return $this;
    }

    /**
     * Gets pointer_position_to
     *
     * @return \OpenAPI\Client\Model\PointerPositionTo|null
     */
    public function getPointerPositionTo()
    {
        return $this->container['pointer_position_to'];
    }

    /**
     * Sets pointer_position_to
     *
     * @param \OpenAPI\Client\Model\PointerPositionTo|null $pointer_position_to pointer_position_to
     *
     * @return self
     */
    public function setPointerPositionTo($pointer_position_to)
    {
        if (is_null($pointer_position_to)) {
            throw new \InvalidArgumentException('non-nullable pointer_position_to cannot be null');
        }
        $this->container['pointer_position_to'] = $pointer_position_to;

        return $this;
    }

    /**
     * Gets vector_id_from
     *
     * @return \OpenAPI\Client\Model\VectorIdFrom|null
     */
    public function getVectorIdFrom()
    {
        return $this->container['vector_id_from'];
    }

    /**
     * Sets vector_id_from
     *
     * @param \OpenAPI\Client\Model\VectorIdFrom|null $vector_id_from vector_id_from
     *
     * @return self
     */
    public function setVectorIdFrom($vector_id_from)
    {
        if (is_null($vector_id_from)) {
            throw new \InvalidArgumentException('non-nullable vector_id_from cannot be null');
        }
        $this->container['vector_id_from'] = $vector_id_from;

        return $this;
    }

    /**
     * Gets vector_id_to
     *
     * @return \OpenAPI\Client\Model\VectorIdTo|null
     */
    public function getVectorIdTo()
    {
        return $this->container['vector_id_to'];
    }

    /**
     * Sets vector_id_to
     *
     * @param \OpenAPI\Client\Model\VectorIdTo|null $vector_id_to vector_id_to
     *
     * @return self
     */
    public function setVectorIdTo($vector_id_to)
    {
        if (is_null($vector_id_to)) {
            throw new \InvalidArgumentException('non-nullable vector_id_to cannot be null');
        }
        $this->container['vector_id_to'] = $vector_id_to;

        return $this;
    }

    /**
     * Gets query
     *
     * @return mixed|null
     */
    public function getQuery()
    {
        return $this->container['query'];
    }

    /**
     * Sets query
     *
     * @param mixed|null $query query
     *
     * @return self
     */
    public function setQuery($query)
    {
        if (is_null($query)) {
            array_push($this->openAPINullablesSetToNull, 'query');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('query', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['query'] = $query;

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


