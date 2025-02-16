<?php
/**
 * ScheduleUpdateRequest
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
 * ScheduleUpdateRequest Class Doc Comment
 *
 * @category Class
 * @package  FlowHunt
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ScheduleUpdateRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ScheduleUpdateRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'frequency' => '\FlowHunt\Model\ScheduleFrequency',
        'status' => '\FlowHunt\Model\ScheduleStatus',
        'with_screenshot' => '\FlowHunt\Model\BoolChar',
        'with_browser' => '\FlowHunt\Model\BoolChar',
        'follow_links' => '\FlowHunt\Model\BoolChar',
        'with_proxy_rotation' => '\FlowHunt\Model\BoolChar',
        'disallow_urls' => 'string',
        'filter_urls' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'frequency' => null,
        'status' => null,
        'with_screenshot' => null,
        'with_browser' => null,
        'follow_links' => null,
        'with_proxy_rotation' => null,
        'disallow_urls' => null,
        'filter_urls' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'frequency' => true,
        'status' => true,
        'with_screenshot' => true,
        'with_browser' => true,
        'follow_links' => true,
        'with_proxy_rotation' => true,
        'disallow_urls' => true,
        'filter_urls' => true
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
        'frequency' => 'frequency',
        'status' => 'status',
        'with_screenshot' => 'with_screenshot',
        'with_browser' => 'with_browser',
        'follow_links' => 'follow_links',
        'with_proxy_rotation' => 'with_proxy_rotation',
        'disallow_urls' => 'disallow_urls',
        'filter_urls' => 'filter_urls'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'frequency' => 'setFrequency',
        'status' => 'setStatus',
        'with_screenshot' => 'setWithScreenshot',
        'with_browser' => 'setWithBrowser',
        'follow_links' => 'setFollowLinks',
        'with_proxy_rotation' => 'setWithProxyRotation',
        'disallow_urls' => 'setDisallowUrls',
        'filter_urls' => 'setFilterUrls'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'frequency' => 'getFrequency',
        'status' => 'getStatus',
        'with_screenshot' => 'getWithScreenshot',
        'with_browser' => 'getWithBrowser',
        'follow_links' => 'getFollowLinks',
        'with_proxy_rotation' => 'getWithProxyRotation',
        'disallow_urls' => 'getDisallowUrls',
        'filter_urls' => 'getFilterUrls'
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
        $this->setIfExists('frequency', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('with_screenshot', $data ?? [], null);
        $this->setIfExists('with_browser', $data ?? [], null);
        $this->setIfExists('follow_links', $data ?? [], null);
        $this->setIfExists('with_proxy_rotation', $data ?? [], null);
        $this->setIfExists('disallow_urls', $data ?? [], null);
        $this->setIfExists('filter_urls', $data ?? [], null);
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
     * Gets frequency
     *
     * @return \FlowHunt\Model\ScheduleFrequency|null
     */
    public function getFrequency()
    {
        return $this->container['frequency'];
    }

    /**
     * Sets frequency
     *
     * @param \FlowHunt\Model\ScheduleFrequency|null $frequency frequency
     *
     * @return self
     */
    public function setFrequency($frequency)
    {
        if (is_null($frequency)) {
            array_push($this->openAPINullablesSetToNull, 'frequency');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('frequency', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['frequency'] = $frequency;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \FlowHunt\Model\ScheduleStatus|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \FlowHunt\Model\ScheduleStatus|null $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            array_push($this->openAPINullablesSetToNull, 'status');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('status', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets with_screenshot
     *
     * @return \FlowHunt\Model\BoolChar|null
     */
    public function getWithScreenshot()
    {
        return $this->container['with_screenshot'];
    }

    /**
     * Sets with_screenshot
     *
     * @param \FlowHunt\Model\BoolChar|null $with_screenshot with_screenshot
     *
     * @return self
     */
    public function setWithScreenshot($with_screenshot)
    {
        if (is_null($with_screenshot)) {
            array_push($this->openAPINullablesSetToNull, 'with_screenshot');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('with_screenshot', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['with_screenshot'] = $with_screenshot;

        return $this;
    }

    /**
     * Gets with_browser
     *
     * @return \FlowHunt\Model\BoolChar|null
     */
    public function getWithBrowser()
    {
        return $this->container['with_browser'];
    }

    /**
     * Sets with_browser
     *
     * @param \FlowHunt\Model\BoolChar|null $with_browser with_browser
     *
     * @return self
     */
    public function setWithBrowser($with_browser)
    {
        if (is_null($with_browser)) {
            array_push($this->openAPINullablesSetToNull, 'with_browser');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('with_browser', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['with_browser'] = $with_browser;

        return $this;
    }

    /**
     * Gets follow_links
     *
     * @return \FlowHunt\Model\BoolChar|null
     */
    public function getFollowLinks()
    {
        return $this->container['follow_links'];
    }

    /**
     * Sets follow_links
     *
     * @param \FlowHunt\Model\BoolChar|null $follow_links follow_links
     *
     * @return self
     */
    public function setFollowLinks($follow_links)
    {
        if (is_null($follow_links)) {
            array_push($this->openAPINullablesSetToNull, 'follow_links');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('follow_links', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['follow_links'] = $follow_links;

        return $this;
    }

    /**
     * Gets with_proxy_rotation
     *
     * @return \FlowHunt\Model\BoolChar|null
     */
    public function getWithProxyRotation()
    {
        return $this->container['with_proxy_rotation'];
    }

    /**
     * Sets with_proxy_rotation
     *
     * @param \FlowHunt\Model\BoolChar|null $with_proxy_rotation with_proxy_rotation
     *
     * @return self
     */
    public function setWithProxyRotation($with_proxy_rotation)
    {
        if (is_null($with_proxy_rotation)) {
            array_push($this->openAPINullablesSetToNull, 'with_proxy_rotation');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('with_proxy_rotation', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['with_proxy_rotation'] = $with_proxy_rotation;

        return $this;
    }

    /**
     * Gets disallow_urls
     *
     * @return string|null
     */
    public function getDisallowUrls()
    {
        return $this->container['disallow_urls'];
    }

    /**
     * Sets disallow_urls
     *
     * @param string|null $disallow_urls disallow_urls
     *
     * @return self
     */
    public function setDisallowUrls($disallow_urls)
    {
        if (is_null($disallow_urls)) {
            array_push($this->openAPINullablesSetToNull, 'disallow_urls');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('disallow_urls', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['disallow_urls'] = $disallow_urls;

        return $this;
    }

    /**
     * Gets filter_urls
     *
     * @return string|null
     */
    public function getFilterUrls()
    {
        return $this->container['filter_urls'];
    }

    /**
     * Sets filter_urls
     *
     * @param string|null $filter_urls filter_urls
     *
     * @return self
     */
    public function setFilterUrls($filter_urls)
    {
        if (is_null($filter_urls)) {
            array_push($this->openAPINullablesSetToNull, 'filter_urls');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('filter_urls', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['filter_urls'] = $filter_urls;

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


