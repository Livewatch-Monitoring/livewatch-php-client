<?php
/**
 * Check
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
 * OpenAPI Generator version: 5.2.1
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
 * Check Class Doc Comment
 *
 * @category Class
 * @package  LivewatchApi
 * @author   Livewatch.de
 * @link     https://www.livewatch.de
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Check implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Check';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'uuid' => 'string',
        'check_type' => 'string',
        'last_update' => 'string',
        'active' => 'bool',
        'status' => 'int',
        'stats' => '\LivewatchApi\Model\CheckStats[]',
        'check_type' => 'string',
        'last_update' => 'string'
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
        'uuid' => null,
        'check_type' => null,
        'last_update' => null,
        'active' => null,
        'status' => null,
        'stats' => null,
        'check_type' => null,
        'last_update' => null
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
        'name' => 'name',
        'uuid' => 'uuid',
        'check_type' => 'check_type',
        'last_update' => 'last_update',
        'active' => 'active',
        'status' => 'status',
        'stats' => 'stats',
        'check_type' => 'checkType',
        'last_update' => 'lastUpdate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'uuid' => 'setUuid',
        'check_type' => 'setCheckType',
        'last_update' => 'setLastUpdate',
        'active' => 'setActive',
        'status' => 'setStatus',
        'stats' => 'setStats',
        'check_type' => 'setCheckType',
        'last_update' => 'setLastUpdate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'uuid' => 'getUuid',
        'check_type' => 'getCheckType',
        'last_update' => 'getLastUpdate',
        'active' => 'getActive',
        'status' => 'getStatus',
        'stats' => 'getStats',
        'check_type' => 'getCheckType',
        'last_update' => 'getLastUpdate'
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
        $this->container['name'] = $data['name'] ?? null;
        $this->container['uuid'] = $data['uuid'] ?? null;
        $this->container['check_type'] = $data['check_type'] ?? null;
        $this->container['last_update'] = $data['last_update'] ?? null;
        $this->container['active'] = $data['active'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['stats'] = $data['stats'] ?? null;
        $this->container['check_type'] = $data['check_type'] ?? null;
        $this->container['last_update'] = $data['last_update'] ?? null;
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
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets uuid
     *
     * @return string|null
     */
    public function getUuid()
    {
        return $this->container['uuid'];
    }

    /**
     * Sets uuid
     *
     * @param string|null $uuid uuid
     *
     * @return self
     */
    public function setUuid($uuid)
    {
        $this->container['uuid'] = $uuid;

        return $this;
    }

    /**
     * Gets check_type
     *
     * @return string|null
     */
    public function getCheckType()
    {
        return $this->container['check_type'];
    }

    /**
     * Sets check_type
     *
     * @param string|null $check_type check_type
     *
     * @return self
     */
    public function setCheckType($check_type)
    {
        $this->container['check_type'] = $check_type;

        return $this;
    }

    /**
     * Gets last_update
     *
     * @return string|null
     */
    public function getLastUpdate()
    {
        return $this->container['last_update'];
    }

    /**
     * Sets last_update
     *
     * @param string|null $last_update last_update
     *
     * @return self
     */
    public function setLastUpdate($last_update)
    {
        $this->container['last_update'] = $last_update;

        return $this;
    }

    /**
     * Gets active
     *
     * @return bool|null
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     *
     * @param bool|null $active active
     *
     * @return self
     */
    public function setActive($active)
    {
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets status
     *
     * @return int|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param int|null $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets stats
     *
     * @return \LivewatchApi\Model\CheckStats[]|null
     */
    public function getStats()
    {
        return $this->container['stats'];
    }

    /**
     * Sets stats
     *
     * @param \LivewatchApi\Model\CheckStats[]|null $stats stats
     *
     * @return self
     */
    public function setStats($stats)
    {
        $this->container['stats'] = $stats;

        return $this;
    }

    /**
     * Gets check_type
     *
     * @return string|null
     */
    public function getCheckType()
    {
        return $this->container['check_type'];
    }

    /**
     * Sets check_type
     *
     * @param string|null $check_type check_type
     *
     * @return self
     */
    public function setCheckType($check_type)
    {
        $this->container['check_type'] = $check_type;

        return $this;
    }

    /**
     * Gets last_update
     *
     * @return string|null
     */
    public function getLastUpdate()
    {
        return $this->container['last_update'];
    }

    /**
     * Sets last_update
     *
     * @param string|null $last_update last_update
     *
     * @return self
     */
    public function setLastUpdate($last_update)
    {
        $this->container['last_update'] = $last_update;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
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


