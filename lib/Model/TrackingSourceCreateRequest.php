<?php
/**
 * TrackingSourceCreateRequest
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
 * TrackingSourceCreateRequest Class Doc Comment
 *
 * @category Class
 * @package  FlowHunt
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class TrackingSourceCreateRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TrackingSourceCreateRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'customer_id' => 'int',
        'click_id' => 'string',
        'click_id_name' => '\FlowHunt\Model\TrackingClickIdNames',
        'utm_source' => 'string',
        'utm_medium' => 'string',
        'utm_campaign' => 'string',
        'utm_term' => 'string',
        'utm_content' => 'string',
        'ga' => 'string',
        'url' => 'string',
        'links' => 'string[]',
        'valid_days' => 'int',
        'with_address' => 'bool',
        'event_data' => '\FlowHunt\Model\TrackingEventData[]',
        'unique_id' => 'string',
        'fp' => 'string',
        'session_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'customer_id' => null,
        'click_id' => null,
        'click_id_name' => null,
        'utm_source' => null,
        'utm_medium' => null,
        'utm_campaign' => null,
        'utm_term' => null,
        'utm_content' => null,
        'ga' => null,
        'url' => null,
        'links' => null,
        'valid_days' => null,
        'with_address' => null,
        'event_data' => null,
        'unique_id' => null,
        'fp' => null,
        'session_id' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'customer_id' => true,
        'click_id' => true,
        'click_id_name' => true,
        'utm_source' => true,
        'utm_medium' => true,
        'utm_campaign' => true,
        'utm_term' => true,
        'utm_content' => true,
        'ga' => true,
        'url' => true,
        'links' => false,
        'valid_days' => true,
        'with_address' => true,
        'event_data' => true,
        'unique_id' => true,
        'fp' => true,
        'session_id' => true
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
        'customer_id' => 'customer_id',
        'click_id' => 'click_id',
        'click_id_name' => 'click_id_name',
        'utm_source' => 'utm_source',
        'utm_medium' => 'utm_medium',
        'utm_campaign' => 'utm_campaign',
        'utm_term' => 'utm_term',
        'utm_content' => 'utm_content',
        'ga' => 'ga',
        'url' => 'url',
        'links' => 'links',
        'valid_days' => 'valid_days',
        'with_address' => 'with_address',
        'event_data' => 'event_data',
        'unique_id' => 'unique_id',
        'fp' => 'fp',
        'session_id' => 'session_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'customer_id' => 'setCustomerId',
        'click_id' => 'setClickId',
        'click_id_name' => 'setClickIdName',
        'utm_source' => 'setUtmSource',
        'utm_medium' => 'setUtmMedium',
        'utm_campaign' => 'setUtmCampaign',
        'utm_term' => 'setUtmTerm',
        'utm_content' => 'setUtmContent',
        'ga' => 'setGa',
        'url' => 'setUrl',
        'links' => 'setLinks',
        'valid_days' => 'setValidDays',
        'with_address' => 'setWithAddress',
        'event_data' => 'setEventData',
        'unique_id' => 'setUniqueId',
        'fp' => 'setFp',
        'session_id' => 'setSessionId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'customer_id' => 'getCustomerId',
        'click_id' => 'getClickId',
        'click_id_name' => 'getClickIdName',
        'utm_source' => 'getUtmSource',
        'utm_medium' => 'getUtmMedium',
        'utm_campaign' => 'getUtmCampaign',
        'utm_term' => 'getUtmTerm',
        'utm_content' => 'getUtmContent',
        'ga' => 'getGa',
        'url' => 'getUrl',
        'links' => 'getLinks',
        'valid_days' => 'getValidDays',
        'with_address' => 'getWithAddress',
        'event_data' => 'getEventData',
        'unique_id' => 'getUniqueId',
        'fp' => 'getFp',
        'session_id' => 'getSessionId'
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
        $this->setIfExists('customer_id', $data ?? [], null);
        $this->setIfExists('click_id', $data ?? [], null);
        $this->setIfExists('click_id_name', $data ?? [], null);
        $this->setIfExists('utm_source', $data ?? [], null);
        $this->setIfExists('utm_medium', $data ?? [], null);
        $this->setIfExists('utm_campaign', $data ?? [], null);
        $this->setIfExists('utm_term', $data ?? [], null);
        $this->setIfExists('utm_content', $data ?? [], null);
        $this->setIfExists('ga', $data ?? [], null);
        $this->setIfExists('url', $data ?? [], null);
        $this->setIfExists('links', $data ?? [], null);
        $this->setIfExists('valid_days', $data ?? [], null);
        $this->setIfExists('with_address', $data ?? [], null);
        $this->setIfExists('event_data', $data ?? [], null);
        $this->setIfExists('unique_id', $data ?? [], null);
        $this->setIfExists('fp', $data ?? [], null);
        $this->setIfExists('session_id', $data ?? [], null);
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
     * Gets customer_id
     *
     * @return int|null
     */
    public function getCustomerId()
    {
        return $this->container['customer_id'];
    }

    /**
     * Sets customer_id
     *
     * @param int|null $customer_id customer_id
     *
     * @return self
     */
    public function setCustomerId($customer_id)
    {
        if (is_null($customer_id)) {
            array_push($this->openAPINullablesSetToNull, 'customer_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('customer_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['customer_id'] = $customer_id;

        return $this;
    }

    /**
     * Gets click_id
     *
     * @return string|null
     */
    public function getClickId()
    {
        return $this->container['click_id'];
    }

    /**
     * Sets click_id
     *
     * @param string|null $click_id click_id
     *
     * @return self
     */
    public function setClickId($click_id)
    {
        if (is_null($click_id)) {
            array_push($this->openAPINullablesSetToNull, 'click_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('click_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['click_id'] = $click_id;

        return $this;
    }

    /**
     * Gets click_id_name
     *
     * @return \FlowHunt\Model\TrackingClickIdNames|null
     */
    public function getClickIdName()
    {
        return $this->container['click_id_name'];
    }

    /**
     * Sets click_id_name
     *
     * @param \FlowHunt\Model\TrackingClickIdNames|null $click_id_name click_id_name
     *
     * @return self
     */
    public function setClickIdName($click_id_name)
    {
        if (is_null($click_id_name)) {
            array_push($this->openAPINullablesSetToNull, 'click_id_name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('click_id_name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['click_id_name'] = $click_id_name;

        return $this;
    }

    /**
     * Gets utm_source
     *
     * @return string|null
     */
    public function getUtmSource()
    {
        return $this->container['utm_source'];
    }

    /**
     * Sets utm_source
     *
     * @param string|null $utm_source utm_source
     *
     * @return self
     */
    public function setUtmSource($utm_source)
    {
        if (is_null($utm_source)) {
            array_push($this->openAPINullablesSetToNull, 'utm_source');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('utm_source', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['utm_source'] = $utm_source;

        return $this;
    }

    /**
     * Gets utm_medium
     *
     * @return string|null
     */
    public function getUtmMedium()
    {
        return $this->container['utm_medium'];
    }

    /**
     * Sets utm_medium
     *
     * @param string|null $utm_medium utm_medium
     *
     * @return self
     */
    public function setUtmMedium($utm_medium)
    {
        if (is_null($utm_medium)) {
            array_push($this->openAPINullablesSetToNull, 'utm_medium');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('utm_medium', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['utm_medium'] = $utm_medium;

        return $this;
    }

    /**
     * Gets utm_campaign
     *
     * @return string|null
     */
    public function getUtmCampaign()
    {
        return $this->container['utm_campaign'];
    }

    /**
     * Sets utm_campaign
     *
     * @param string|null $utm_campaign utm_campaign
     *
     * @return self
     */
    public function setUtmCampaign($utm_campaign)
    {
        if (is_null($utm_campaign)) {
            array_push($this->openAPINullablesSetToNull, 'utm_campaign');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('utm_campaign', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['utm_campaign'] = $utm_campaign;

        return $this;
    }

    /**
     * Gets utm_term
     *
     * @return string|null
     */
    public function getUtmTerm()
    {
        return $this->container['utm_term'];
    }

    /**
     * Sets utm_term
     *
     * @param string|null $utm_term utm_term
     *
     * @return self
     */
    public function setUtmTerm($utm_term)
    {
        if (is_null($utm_term)) {
            array_push($this->openAPINullablesSetToNull, 'utm_term');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('utm_term', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['utm_term'] = $utm_term;

        return $this;
    }

    /**
     * Gets utm_content
     *
     * @return string|null
     */
    public function getUtmContent()
    {
        return $this->container['utm_content'];
    }

    /**
     * Sets utm_content
     *
     * @param string|null $utm_content utm_content
     *
     * @return self
     */
    public function setUtmContent($utm_content)
    {
        if (is_null($utm_content)) {
            array_push($this->openAPINullablesSetToNull, 'utm_content');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('utm_content', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['utm_content'] = $utm_content;

        return $this;
    }

    /**
     * Gets ga
     *
     * @return string|null
     */
    public function getGa()
    {
        return $this->container['ga'];
    }

    /**
     * Sets ga
     *
     * @param string|null $ga ga
     *
     * @return self
     */
    public function setGa($ga)
    {
        if (is_null($ga)) {
            array_push($this->openAPINullablesSetToNull, 'ga');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ga', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ga'] = $ga;

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
     * Gets links
     *
     * @return string[]|null
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     *
     * @param string[]|null $links The links of the traffic source
     *
     * @return self
     */
    public function setLinks($links)
    {
        if (is_null($links)) {
            throw new \InvalidArgumentException('non-nullable links cannot be null');
        }
        $this->container['links'] = $links;

        return $this;
    }

    /**
     * Gets valid_days
     *
     * @return int|null
     */
    public function getValidDays()
    {
        return $this->container['valid_days'];
    }

    /**
     * Sets valid_days
     *
     * @param int|null $valid_days valid_days
     *
     * @return self
     */
    public function setValidDays($valid_days)
    {
        if (is_null($valid_days)) {
            array_push($this->openAPINullablesSetToNull, 'valid_days');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('valid_days', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['valid_days'] = $valid_days;

        return $this;
    }

    /**
     * Gets with_address
     *
     * @return bool|null
     */
    public function getWithAddress()
    {
        return $this->container['with_address'];
    }

    /**
     * Sets with_address
     *
     * @param bool|null $with_address with_address
     *
     * @return self
     */
    public function setWithAddress($with_address)
    {
        if (is_null($with_address)) {
            array_push($this->openAPINullablesSetToNull, 'with_address');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('with_address', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['with_address'] = $with_address;

        return $this;
    }

    /**
     * Gets event_data
     *
     * @return \FlowHunt\Model\TrackingEventData[]|null
     */
    public function getEventData()
    {
        return $this->container['event_data'];
    }

    /**
     * Sets event_data
     *
     * @param \FlowHunt\Model\TrackingEventData[]|null $event_data event_data
     *
     * @return self
     */
    public function setEventData($event_data)
    {
        if (is_null($event_data)) {
            array_push($this->openAPINullablesSetToNull, 'event_data');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('event_data', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['event_data'] = $event_data;

        return $this;
    }

    /**
     * Gets unique_id
     *
     * @return string|null
     */
    public function getUniqueId()
    {
        return $this->container['unique_id'];
    }

    /**
     * Sets unique_id
     *
     * @param string|null $unique_id unique_id
     *
     * @return self
     */
    public function setUniqueId($unique_id)
    {
        if (is_null($unique_id)) {
            array_push($this->openAPINullablesSetToNull, 'unique_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('unique_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['unique_id'] = $unique_id;

        return $this;
    }

    /**
     * Gets fp
     *
     * @return string|null
     */
    public function getFp()
    {
        return $this->container['fp'];
    }

    /**
     * Sets fp
     *
     * @param string|null $fp fp
     *
     * @return self
     */
    public function setFp($fp)
    {
        if (is_null($fp)) {
            array_push($this->openAPINullablesSetToNull, 'fp');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('fp', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['fp'] = $fp;

        return $this;
    }

    /**
     * Gets session_id
     *
     * @return string|null
     */
    public function getSessionId()
    {
        return $this->container['session_id'];
    }

    /**
     * Sets session_id
     *
     * @param string|null $session_id session_id
     *
     * @return self
     */
    public function setSessionId($session_id)
    {
        if (is_null($session_id)) {
            array_push($this->openAPINullablesSetToNull, 'session_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('session_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['session_id'] = $session_id;

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


