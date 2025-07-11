<?php
/**
 * DocumentContent
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
 * DocumentContent Class Doc Comment
 *
 * @category Class
 * @package  FlowHunt
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class DocumentContent implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DocumentContent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'url' => 'string',
        'img_url' => 'string',
        'status_code' => 'int',
        'created_at' => 'float',
        'published_at' => 'float',
        'title' => 'string',
        'doc_name' => 'string',
        'lang' => 'string',
        'content_type' => 'string',
        'encoding' => 'string',
        'apparent_encoding' => 'string',
        'description' => 'string',
        'content' => 'mixed[][]',
        'metadata' => 'array<string,mixed>',
        'alt_content' => 'string[]',
        'content_hash' => 'string',
        'author' => 'string',
        'channel_id' => 'string',
        'channel_url' => 'string',
        'channel_title' => 'string',
        'duration' => 'int',
        'keywords' => 'string[]',
        'doc_type' => '\FlowHunt\Model\DocumentType',
        'credits' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'url' => null,
        'img_url' => null,
        'status_code' => null,
        'created_at' => null,
        'published_at' => null,
        'title' => null,
        'doc_name' => null,
        'lang' => null,
        'content_type' => null,
        'encoding' => null,
        'apparent_encoding' => null,
        'description' => null,
        'content' => null,
        'metadata' => null,
        'alt_content' => null,
        'content_hash' => null,
        'author' => null,
        'channel_id' => null,
        'channel_url' => null,
        'channel_title' => null,
        'duration' => null,
        'keywords' => null,
        'doc_type' => null,
        'credits' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'url' => true,
        'img_url' => true,
        'status_code' => true,
        'created_at' => true,
        'published_at' => true,
        'title' => true,
        'doc_name' => true,
        'lang' => true,
        'content_type' => true,
        'encoding' => true,
        'apparent_encoding' => true,
        'description' => true,
        'content' => true,
        'metadata' => true,
        'alt_content' => true,
        'content_hash' => true,
        'author' => true,
        'channel_id' => true,
        'channel_url' => true,
        'channel_title' => true,
        'duration' => true,
        'keywords' => true,
        'doc_type' => true,
        'credits' => true
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
        'url' => 'url',
        'img_url' => 'img_url',
        'status_code' => 'status_code',
        'created_at' => 'created_at',
        'published_at' => 'published_at',
        'title' => 'title',
        'doc_name' => 'doc_name',
        'lang' => 'lang',
        'content_type' => 'content_type',
        'encoding' => 'encoding',
        'apparent_encoding' => 'apparent_encoding',
        'description' => 'description',
        'content' => 'content',
        'metadata' => 'metadata',
        'alt_content' => 'alt_content',
        'content_hash' => 'content_hash',
        'author' => 'author',
        'channel_id' => 'channel_id',
        'channel_url' => 'channel_url',
        'channel_title' => 'channel_title',
        'duration' => 'duration',
        'keywords' => 'keywords',
        'doc_type' => 'doc_type',
        'credits' => 'credits'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'url' => 'setUrl',
        'img_url' => 'setImgUrl',
        'status_code' => 'setStatusCode',
        'created_at' => 'setCreatedAt',
        'published_at' => 'setPublishedAt',
        'title' => 'setTitle',
        'doc_name' => 'setDocName',
        'lang' => 'setLang',
        'content_type' => 'setContentType',
        'encoding' => 'setEncoding',
        'apparent_encoding' => 'setApparentEncoding',
        'description' => 'setDescription',
        'content' => 'setContent',
        'metadata' => 'setMetadata',
        'alt_content' => 'setAltContent',
        'content_hash' => 'setContentHash',
        'author' => 'setAuthor',
        'channel_id' => 'setChannelId',
        'channel_url' => 'setChannelUrl',
        'channel_title' => 'setChannelTitle',
        'duration' => 'setDuration',
        'keywords' => 'setKeywords',
        'doc_type' => 'setDocType',
        'credits' => 'setCredits'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'url' => 'getUrl',
        'img_url' => 'getImgUrl',
        'status_code' => 'getStatusCode',
        'created_at' => 'getCreatedAt',
        'published_at' => 'getPublishedAt',
        'title' => 'getTitle',
        'doc_name' => 'getDocName',
        'lang' => 'getLang',
        'content_type' => 'getContentType',
        'encoding' => 'getEncoding',
        'apparent_encoding' => 'getApparentEncoding',
        'description' => 'getDescription',
        'content' => 'getContent',
        'metadata' => 'getMetadata',
        'alt_content' => 'getAltContent',
        'content_hash' => 'getContentHash',
        'author' => 'getAuthor',
        'channel_id' => 'getChannelId',
        'channel_url' => 'getChannelUrl',
        'channel_title' => 'getChannelTitle',
        'duration' => 'getDuration',
        'keywords' => 'getKeywords',
        'doc_type' => 'getDocType',
        'credits' => 'getCredits'
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
        $this->setIfExists('url', $data ?? [], null);
        $this->setIfExists('img_url', $data ?? [], null);
        $this->setIfExists('status_code', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('published_at', $data ?? [], null);
        $this->setIfExists('title', $data ?? [], null);
        $this->setIfExists('doc_name', $data ?? [], null);
        $this->setIfExists('lang', $data ?? [], null);
        $this->setIfExists('content_type', $data ?? [], null);
        $this->setIfExists('encoding', $data ?? [], null);
        $this->setIfExists('apparent_encoding', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('content', $data ?? [], null);
        $this->setIfExists('metadata', $data ?? [], null);
        $this->setIfExists('alt_content', $data ?? [], null);
        $this->setIfExists('content_hash', $data ?? [], null);
        $this->setIfExists('author', $data ?? [], null);
        $this->setIfExists('channel_id', $data ?? [], null);
        $this->setIfExists('channel_url', $data ?? [], null);
        $this->setIfExists('channel_title', $data ?? [], null);
        $this->setIfExists('duration', $data ?? [], null);
        $this->setIfExists('keywords', $data ?? [], null);
        $this->setIfExists('doc_type', $data ?? [], null);
        $this->setIfExists('credits', $data ?? [], null);
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
     * Gets img_url
     *
     * @return string|null
     */
    public function getImgUrl()
    {
        return $this->container['img_url'];
    }

    /**
     * Sets img_url
     *
     * @param string|null $img_url img_url
     *
     * @return self
     */
    public function setImgUrl($img_url)
    {
        if (is_null($img_url)) {
            array_push($this->openAPINullablesSetToNull, 'img_url');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('img_url', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['img_url'] = $img_url;

        return $this;
    }

    /**
     * Gets status_code
     *
     * @return int|null
     */
    public function getStatusCode()
    {
        return $this->container['status_code'];
    }

    /**
     * Sets status_code
     *
     * @param int|null $status_code status_code
     *
     * @return self
     */
    public function setStatusCode($status_code)
    {
        if (is_null($status_code)) {
            array_push($this->openAPINullablesSetToNull, 'status_code');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('status_code', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['status_code'] = $status_code;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return float|null
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param float|null $created_at created_at
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        if (is_null($created_at)) {
            array_push($this->openAPINullablesSetToNull, 'created_at');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('created_at', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets published_at
     *
     * @return float|null
     */
    public function getPublishedAt()
    {
        return $this->container['published_at'];
    }

    /**
     * Sets published_at
     *
     * @param float|null $published_at published_at
     *
     * @return self
     */
    public function setPublishedAt($published_at)
    {
        if (is_null($published_at)) {
            array_push($this->openAPINullablesSetToNull, 'published_at');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('published_at', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['published_at'] = $published_at;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title title
     *
     * @return self
     */
    public function setTitle($title)
    {
        if (is_null($title)) {
            array_push($this->openAPINullablesSetToNull, 'title');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('title', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets doc_name
     *
     * @return string|null
     */
    public function getDocName()
    {
        return $this->container['doc_name'];
    }

    /**
     * Sets doc_name
     *
     * @param string|null $doc_name doc_name
     *
     * @return self
     */
    public function setDocName($doc_name)
    {
        if (is_null($doc_name)) {
            array_push($this->openAPINullablesSetToNull, 'doc_name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('doc_name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['doc_name'] = $doc_name;

        return $this;
    }

    /**
     * Gets lang
     *
     * @return string|null
     */
    public function getLang()
    {
        return $this->container['lang'];
    }

    /**
     * Sets lang
     *
     * @param string|null $lang lang
     *
     * @return self
     */
    public function setLang($lang)
    {
        if (is_null($lang)) {
            array_push($this->openAPINullablesSetToNull, 'lang');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('lang', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['lang'] = $lang;

        return $this;
    }

    /**
     * Gets content_type
     *
     * @return string|null
     */
    public function getContentType()
    {
        return $this->container['content_type'];
    }

    /**
     * Sets content_type
     *
     * @param string|null $content_type content_type
     *
     * @return self
     */
    public function setContentType($content_type)
    {
        if (is_null($content_type)) {
            array_push($this->openAPINullablesSetToNull, 'content_type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('content_type', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['content_type'] = $content_type;

        return $this;
    }

    /**
     * Gets encoding
     *
     * @return string|null
     */
    public function getEncoding()
    {
        return $this->container['encoding'];
    }

    /**
     * Sets encoding
     *
     * @param string|null $encoding encoding
     *
     * @return self
     */
    public function setEncoding($encoding)
    {
        if (is_null($encoding)) {
            array_push($this->openAPINullablesSetToNull, 'encoding');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('encoding', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['encoding'] = $encoding;

        return $this;
    }

    /**
     * Gets apparent_encoding
     *
     * @return string|null
     */
    public function getApparentEncoding()
    {
        return $this->container['apparent_encoding'];
    }

    /**
     * Sets apparent_encoding
     *
     * @param string|null $apparent_encoding apparent_encoding
     *
     * @return self
     */
    public function setApparentEncoding($apparent_encoding)
    {
        if (is_null($apparent_encoding)) {
            array_push($this->openAPINullablesSetToNull, 'apparent_encoding');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('apparent_encoding', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['apparent_encoding'] = $apparent_encoding;

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
     * Gets content
     *
     * @return mixed[][]|null
     */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
     * Sets content
     *
     * @param mixed[][]|null $content content
     *
     * @return self
     */
    public function setContent($content)
    {
        if (is_null($content)) {
            array_push($this->openAPINullablesSetToNull, 'content');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('content', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['content'] = $content;

        return $this;
    }

    /**
     * Gets metadata
     *
     * @return array<string,mixed>|null
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     *
     * @param array<string,mixed>|null $metadata metadata
     *
     * @return self
     */
    public function setMetadata($metadata)
    {
        if (is_null($metadata)) {
            array_push($this->openAPINullablesSetToNull, 'metadata');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('metadata', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['metadata'] = $metadata;

        return $this;
    }

    /**
     * Gets alt_content
     *
     * @return string[]|null
     */
    public function getAltContent()
    {
        return $this->container['alt_content'];
    }

    /**
     * Sets alt_content
     *
     * @param string[]|null $alt_content alt_content
     *
     * @return self
     */
    public function setAltContent($alt_content)
    {
        if (is_null($alt_content)) {
            array_push($this->openAPINullablesSetToNull, 'alt_content');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('alt_content', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['alt_content'] = $alt_content;

        return $this;
    }

    /**
     * Gets content_hash
     *
     * @return string|null
     */
    public function getContentHash()
    {
        return $this->container['content_hash'];
    }

    /**
     * Sets content_hash
     *
     * @param string|null $content_hash content_hash
     *
     * @return self
     */
    public function setContentHash($content_hash)
    {
        if (is_null($content_hash)) {
            array_push($this->openAPINullablesSetToNull, 'content_hash');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('content_hash', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['content_hash'] = $content_hash;

        return $this;
    }

    /**
     * Gets author
     *
     * @return string|null
     */
    public function getAuthor()
    {
        return $this->container['author'];
    }

    /**
     * Sets author
     *
     * @param string|null $author author
     *
     * @return self
     */
    public function setAuthor($author)
    {
        if (is_null($author)) {
            array_push($this->openAPINullablesSetToNull, 'author');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('author', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['author'] = $author;

        return $this;
    }

    /**
     * Gets channel_id
     *
     * @return string|null
     */
    public function getChannelId()
    {
        return $this->container['channel_id'];
    }

    /**
     * Sets channel_id
     *
     * @param string|null $channel_id channel_id
     *
     * @return self
     */
    public function setChannelId($channel_id)
    {
        if (is_null($channel_id)) {
            array_push($this->openAPINullablesSetToNull, 'channel_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('channel_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['channel_id'] = $channel_id;

        return $this;
    }

    /**
     * Gets channel_url
     *
     * @return string|null
     */
    public function getChannelUrl()
    {
        return $this->container['channel_url'];
    }

    /**
     * Sets channel_url
     *
     * @param string|null $channel_url channel_url
     *
     * @return self
     */
    public function setChannelUrl($channel_url)
    {
        if (is_null($channel_url)) {
            array_push($this->openAPINullablesSetToNull, 'channel_url');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('channel_url', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['channel_url'] = $channel_url;

        return $this;
    }

    /**
     * Gets channel_title
     *
     * @return string|null
     */
    public function getChannelTitle()
    {
        return $this->container['channel_title'];
    }

    /**
     * Sets channel_title
     *
     * @param string|null $channel_title channel_title
     *
     * @return self
     */
    public function setChannelTitle($channel_title)
    {
        if (is_null($channel_title)) {
            array_push($this->openAPINullablesSetToNull, 'channel_title');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('channel_title', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['channel_title'] = $channel_title;

        return $this;
    }

    /**
     * Gets duration
     *
     * @return int|null
     */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
     * Sets duration
     *
     * @param int|null $duration duration
     *
     * @return self
     */
    public function setDuration($duration)
    {
        if (is_null($duration)) {
            array_push($this->openAPINullablesSetToNull, 'duration');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('duration', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['duration'] = $duration;

        return $this;
    }

    /**
     * Gets keywords
     *
     * @return string[]|null
     */
    public function getKeywords()
    {
        return $this->container['keywords'];
    }

    /**
     * Sets keywords
     *
     * @param string[]|null $keywords keywords
     *
     * @return self
     */
    public function setKeywords($keywords)
    {
        if (is_null($keywords)) {
            array_push($this->openAPINullablesSetToNull, 'keywords');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('keywords', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['keywords'] = $keywords;

        return $this;
    }

    /**
     * Gets doc_type
     *
     * @return \FlowHunt\Model\DocumentType|null
     */
    public function getDocType()
    {
        return $this->container['doc_type'];
    }

    /**
     * Sets doc_type
     *
     * @param \FlowHunt\Model\DocumentType|null $doc_type doc_type
     *
     * @return self
     */
    public function setDocType($doc_type)
    {
        if (is_null($doc_type)) {
            array_push($this->openAPINullablesSetToNull, 'doc_type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('doc_type', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['doc_type'] = $doc_type;

        return $this;
    }

    /**
     * Gets credits
     *
     * @return int|null
     */
    public function getCredits()
    {
        return $this->container['credits'];
    }

    /**
     * Sets credits
     *
     * @param int|null $credits credits
     *
     * @return self
     */
    public function setCredits($credits)
    {
        if (is_null($credits)) {
            array_push($this->openAPINullablesSetToNull, 'credits');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('credits', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['credits'] = $credits;

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


