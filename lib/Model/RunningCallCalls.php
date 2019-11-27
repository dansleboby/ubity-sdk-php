<?php
/**
 * RunningCallCalls
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Ubity API
 *
 * The Ubity API allows you to initiate calls, send text messages (SMS), retrieve call recordings, get a user's phone presence status, and a whole lot more.
 *
 * OpenAPI spec version: 1.0
 * Contact: dev@ubity.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.14
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * RunningCallCalls Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RunningCallCalls implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'RunningCall_calls';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'api_call_uuid' => 'string',
'answered' => 'bool',
'from_callerid_name' => 'string',
'from_callerid_num' => 'int',
'to_callerid_name' => 'string',
'to_callerid_num' => 'int'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'api_call_uuid' => null,
'answered' => null,
'from_callerid_name' => null,
'from_callerid_num' => 'int64',
'to_callerid_name' => null,
'to_callerid_num' => 'int64'    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'api_call_uuid' => 'api_call_uuid',
'answered' => 'answered',
'from_callerid_name' => 'from_callerid_name',
'from_callerid_num' => 'from_callerid_num',
'to_callerid_name' => 'to_callerid_name',
'to_callerid_num' => 'to_callerid_num'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'api_call_uuid' => 'setApiCallUuid',
'answered' => 'setAnswered',
'from_callerid_name' => 'setFromCalleridName',
'from_callerid_num' => 'setFromCalleridNum',
'to_callerid_name' => 'setToCalleridName',
'to_callerid_num' => 'setToCalleridNum'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'api_call_uuid' => 'getApiCallUuid',
'answered' => 'getAnswered',
'from_callerid_name' => 'getFromCalleridName',
'from_callerid_num' => 'getFromCalleridNum',
'to_callerid_name' => 'getToCalleridName',
'to_callerid_num' => 'getToCalleridNum'    ];

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
        return self::$swaggerModelName;
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
        $this->container['api_call_uuid'] = isset($data['api_call_uuid']) ? $data['api_call_uuid'] : null;
        $this->container['answered'] = isset($data['answered']) ? $data['answered'] : null;
        $this->container['from_callerid_name'] = isset($data['from_callerid_name']) ? $data['from_callerid_name'] : null;
        $this->container['from_callerid_num'] = isset($data['from_callerid_num']) ? $data['from_callerid_num'] : null;
        $this->container['to_callerid_name'] = isset($data['to_callerid_name']) ? $data['to_callerid_name'] : null;
        $this->container['to_callerid_num'] = isset($data['to_callerid_num']) ? $data['to_callerid_num'] : null;
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
     * Gets api_call_uuid
     *
     * @return string
     */
    public function getApiCallUuid()
    {
        return $this->container['api_call_uuid'];
    }

    /**
     * Sets api_call_uuid
     *
     * @param string $api_call_uuid The api_call_uuid can be found or used with the following method (or because /call was used to trigger a call and you got it in response).
     *
     * @return $this
     */
    public function setApiCallUuid($api_call_uuid)
    {
        $this->container['api_call_uuid'] = $api_call_uuid;

        return $this;
    }

    /**
     * Gets answered
     *
     * @return bool
     */
    public function getAnswered()
    {
        return $this->container['answered'];
    }

    /**
     * Sets answered
     *
     * @param bool $answered answered
     *
     * @return $this
     */
    public function setAnswered($answered)
    {
        $this->container['answered'] = $answered;

        return $this;
    }

    /**
     * Gets from_callerid_name
     *
     * @return string
     */
    public function getFromCalleridName()
    {
        return $this->container['from_callerid_name'];
    }

    /**
     * Sets from_callerid_name
     *
     * @param string $from_callerid_name from_callerid_name
     *
     * @return $this
     */
    public function setFromCalleridName($from_callerid_name)
    {
        $this->container['from_callerid_name'] = $from_callerid_name;

        return $this;
    }

    /**
     * Gets from_callerid_num
     *
     * @return int
     */
    public function getFromCalleridNum()
    {
        return $this->container['from_callerid_num'];
    }

    /**
     * Sets from_callerid_num
     *
     * @param int $from_callerid_num from_callerid_num
     *
     * @return $this
     */
    public function setFromCalleridNum($from_callerid_num)
    {
        $this->container['from_callerid_num'] = $from_callerid_num;

        return $this;
    }

    /**
     * Gets to_callerid_name
     *
     * @return string
     */
    public function getToCalleridName()
    {
        return $this->container['to_callerid_name'];
    }

    /**
     * Sets to_callerid_name
     *
     * @param string $to_callerid_name to_callerid_name
     *
     * @return $this
     */
    public function setToCalleridName($to_callerid_name)
    {
        $this->container['to_callerid_name'] = $to_callerid_name;

        return $this;
    }

    /**
     * Gets to_callerid_num
     *
     * @return int
     */
    public function getToCalleridNum()
    {
        return $this->container['to_callerid_num'];
    }

    /**
     * Sets to_callerid_num
     *
     * @param int $to_callerid_num to_callerid_num
     *
     * @return $this
     */
    public function setToCalleridNum($to_callerid_num)
    {
        $this->container['to_callerid_num'] = $to_callerid_num;

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
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
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
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
