<?php
/**
 * UserPlanResponse
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
 * UserPlanResponse Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class UserPlanResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'UserPlanResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'product_id' => 'string',
        'price_amount' => 'int',
        'price_currency' => 'string',
        'last_renewal_date' => '\DateTime',
        'monthly_topup_credits' => 'int',
        'trial_end_date' => '\DateTime',
        'subscription_plan' => '\OpenAPI\Client\Model\SubscriptionPlan'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'product_id' => null,
        'price_amount' => null,
        'price_currency' => null,
        'last_renewal_date' => 'date-time',
        'monthly_topup_credits' => null,
        'trial_end_date' => 'date-time',
        'subscription_plan' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'product_id' => true,
        'price_amount' => false,
        'price_currency' => false,
        'last_renewal_date' => true,
        'monthly_topup_credits' => false,
        'trial_end_date' => true,
        'subscription_plan' => false
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
        'product_id' => 'product_id',
        'price_amount' => 'price_amount',
        'price_currency' => 'price_currency',
        'last_renewal_date' => 'last_renewal_date',
        'monthly_topup_credits' => 'monthly_topup_credits',
        'trial_end_date' => 'trial_end_date',
        'subscription_plan' => 'subscription_plan'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'product_id' => 'setProductId',
        'price_amount' => 'setPriceAmount',
        'price_currency' => 'setPriceCurrency',
        'last_renewal_date' => 'setLastRenewalDate',
        'monthly_topup_credits' => 'setMonthlyTopupCredits',
        'trial_end_date' => 'setTrialEndDate',
        'subscription_plan' => 'setSubscriptionPlan'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'product_id' => 'getProductId',
        'price_amount' => 'getPriceAmount',
        'price_currency' => 'getPriceCurrency',
        'last_renewal_date' => 'getLastRenewalDate',
        'monthly_topup_credits' => 'getMonthlyTopupCredits',
        'trial_end_date' => 'getTrialEndDate',
        'subscription_plan' => 'getSubscriptionPlan'
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
        $this->setIfExists('product_id', $data ?? [], null);
        $this->setIfExists('price_amount', $data ?? [], null);
        $this->setIfExists('price_currency', $data ?? [], null);
        $this->setIfExists('last_renewal_date', $data ?? [], null);
        $this->setIfExists('monthly_topup_credits', $data ?? [], null);
        $this->setIfExists('trial_end_date', $data ?? [], null);
        $this->setIfExists('subscription_plan', $data ?? [], null);
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

        if ($this->container['product_id'] === null) {
            $invalidProperties[] = "'product_id' can't be null";
        }
        if ($this->container['price_amount'] === null) {
            $invalidProperties[] = "'price_amount' can't be null";
        }
        if ($this->container['price_currency'] === null) {
            $invalidProperties[] = "'price_currency' can't be null";
        }
        if ($this->container['monthly_topup_credits'] === null) {
            $invalidProperties[] = "'monthly_topup_credits' can't be null";
        }
        if ($this->container['subscription_plan'] === null) {
            $invalidProperties[] = "'subscription_plan' can't be null";
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
     * Gets product_id
     *
     * @return string
     */
    public function getProductId()
    {
        return $this->container['product_id'];
    }

    /**
     * Sets product_id
     *
     * @param string $product_id product_id
     *
     * @return self
     */
    public function setProductId($product_id)
    {
        if (is_null($product_id)) {
            array_push($this->openAPINullablesSetToNull, 'product_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('product_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['product_id'] = $product_id;

        return $this;
    }

    /**
     * Gets price_amount
     *
     * @return int
     */
    public function getPriceAmount()
    {
        return $this->container['price_amount'];
    }

    /**
     * Sets price_amount
     *
     * @param int $price_amount price_amount
     *
     * @return self
     */
    public function setPriceAmount($price_amount)
    {
        if (is_null($price_amount)) {
            throw new \InvalidArgumentException('non-nullable price_amount cannot be null');
        }
        $this->container['price_amount'] = $price_amount;

        return $this;
    }

    /**
     * Gets price_currency
     *
     * @return string
     */
    public function getPriceCurrency()
    {
        return $this->container['price_currency'];
    }

    /**
     * Sets price_currency
     *
     * @param string $price_currency price_currency
     *
     * @return self
     */
    public function setPriceCurrency($price_currency)
    {
        if (is_null($price_currency)) {
            throw new \InvalidArgumentException('non-nullable price_currency cannot be null');
        }
        $this->container['price_currency'] = $price_currency;

        return $this;
    }

    /**
     * Gets last_renewal_date
     *
     * @return \DateTime|null
     */
    public function getLastRenewalDate()
    {
        return $this->container['last_renewal_date'];
    }

    /**
     * Sets last_renewal_date
     *
     * @param \DateTime|null $last_renewal_date last_renewal_date
     *
     * @return self
     */
    public function setLastRenewalDate($last_renewal_date)
    {
        if (is_null($last_renewal_date)) {
            array_push($this->openAPINullablesSetToNull, 'last_renewal_date');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('last_renewal_date', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['last_renewal_date'] = $last_renewal_date;

        return $this;
    }

    /**
     * Gets monthly_topup_credits
     *
     * @return int
     */
    public function getMonthlyTopupCredits()
    {
        return $this->container['monthly_topup_credits'];
    }

    /**
     * Sets monthly_topup_credits
     *
     * @param int $monthly_topup_credits monthly_topup_credits
     *
     * @return self
     */
    public function setMonthlyTopupCredits($monthly_topup_credits)
    {
        if (is_null($monthly_topup_credits)) {
            throw new \InvalidArgumentException('non-nullable monthly_topup_credits cannot be null');
        }
        $this->container['monthly_topup_credits'] = $monthly_topup_credits;

        return $this;
    }

    /**
     * Gets trial_end_date
     *
     * @return \DateTime|null
     */
    public function getTrialEndDate()
    {
        return $this->container['trial_end_date'];
    }

    /**
     * Sets trial_end_date
     *
     * @param \DateTime|null $trial_end_date trial_end_date
     *
     * @return self
     */
    public function setTrialEndDate($trial_end_date)
    {
        if (is_null($trial_end_date)) {
            array_push($this->openAPINullablesSetToNull, 'trial_end_date');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('trial_end_date', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['trial_end_date'] = $trial_end_date;

        return $this;
    }

    /**
     * Gets subscription_plan
     *
     * @return \OpenAPI\Client\Model\SubscriptionPlan
     */
    public function getSubscriptionPlan()
    {
        return $this->container['subscription_plan'];
    }

    /**
     * Sets subscription_plan
     *
     * @param \OpenAPI\Client\Model\SubscriptionPlan $subscription_plan subscription_plan
     *
     * @return self
     */
    public function setSubscriptionPlan($subscription_plan)
    {
        if (is_null($subscription_plan)) {
            throw new \InvalidArgumentException('non-nullable subscription_plan cannot be null');
        }
        $this->container['subscription_plan'] = $subscription_plan;

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


