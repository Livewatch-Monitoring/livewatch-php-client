<?php
/**
 * CheckStats
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  LivewatchApi
 * @author   Livewatch.de
 * @link     https://www.livewatch.de
 */

/**
 * Livewatch API
 *
 * Livewatch Server Monitoring API
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://www.livewatch.de
 * OpenAPI Generator version: 6.2.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://www.livewatch.de).
 * https://www.livewatch.de
 * Do not edit the class manually.
 */

namespace LivewatchApi\Model;

use \ArrayAccess;
use \LivewatchApi\ObjectSerializer;

/**
 * CheckStats Class Doc Comment
 *
 * @category Class
 * @package  LivewatchApi
 * @author   Livewatch.de
 * @link     https://www.livewatch.de
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class CheckStats implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CheckStats';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'date' => 'string',
        'unknown' => 'int',
        'ok' => 'int',
        'warning' => 'int',
        'critical' => 'int',
        'total' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'date' => null,
        'unknown' => null,
        'ok' => null,
        'warning' => null,
        'critical' => null,
        'total' => null
    ];

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
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'date' => 'date',
        'unknown' => 'unknown',
        'ok' => 'ok',
        'warning' => 'warning',
        'critical' => 'critical',
        'total' => 'total'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'date' => 'setDate',
        'unknown' => 'setUnknown',
        'ok' => 'setOk',
        'warning' => 'setWarning',
        'critical' => 'setCritical',
        'total' => 'setTotal'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'date' => 'getDate',
        'unknown' => 'getUnknown',
        'ok' => 'getOk',
        'warning' => 'getWarning',
        'critical' => 'getCritical',
        'total' => 'getTotal'
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
        $this->container['date'] = $data['date'] ?? null;
        $this->container['unknown'] = $data['unknown'] ?? null;
        $this->container['ok'] = $data['ok'] ?? null;
        $this->container['warning'] = $data['warning'] ?? null;
        $this->container['critical'] = $data['critical'] ?? null;
        $this->container['total'] = $data['total'] ?? null;
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
     * Gets date
     *
     * @return string|null
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param string|null $date date
     *
     * @return self
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets unknown
     *
     * @return int|null
     */
    public function getUnknown()
    {
        return $this->container['unknown'];
    }

    /**
     * Sets unknown
     *
     * @param int|null $unknown unknown
     *
     * @return self
     */
    public function setUnknown($unknown)
    {
        $this->container['unknown'] = $unknown;

        return $this;
    }

    /**
     * Gets ok
     *
     * @return int|null
     */
    public function getOk()
    {
        return $this->container['ok'];
    }

    /**
     * Sets ok
     *
     * @param int|null $ok ok
     *
     * @return self
     */
    public function setOk($ok)
    {
        $this->container['ok'] = $ok;

        return $this;
    }

    /**
     * Gets warning
     *
     * @return int|null
     */
    public function getWarning()
    {
        return $this->container['warning'];
    }

    /**
     * Sets warning
     *
     * @param int|null $warning warning
     *
     * @return self
     */
    public function setWarning($warning)
    {
        $this->container['warning'] = $warning;

        return $this;
    }

    /**
     * Gets critical
     *
     * @return int|null
     */
    public function getCritical()
    {
        return $this->container['critical'];
    }

    /**
     * Sets critical
     *
     * @param int|null $critical critical
     *
     * @return self
     */
    public function setCritical($critical)
    {
        $this->container['critical'] = $critical;

        return $this;
    }

    /**
     * Gets total
     *
     * @return int|null
     */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
     * Sets total
     *
     * @param int|null $total total
     *
     * @return self
     */
    public function setTotal($total)
    {
        $this->container['total'] = $total;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
     #[\ReturnTypeWillChange]
    public function offsetExists($offset)
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
     #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
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
     #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
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


