<?php
/**
 * Call
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
 * *** DISCLAMER *** The SDK is not support by Ubity. The Ubity API allows you to initiate calls, send text messages (SMS), retrieve call recordings, get a user's phone presence status, and a whole lot more!
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
 * Call Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Call implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Call';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'api_call_uuid' => 'string',
'api_key' => 'string',
'code' => 'int',
'diagnostic' => 'string',
'stamp' => 'string',
'url' => 'string',
'version' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'api_call_uuid' => null,
'api_key' => null,
'code' => null,
'diagnostic' => null,
'stamp' => null,
'url' => null,
'version' => null    ];

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
'api_key' => 'api_key',
'code' => 'code',
'diagnostic' => 'diagnostic',
'stamp' => 'stamp',
'url' => 'url',
'version' => 'version'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'api_call_uuid' => 'setApiCallUuid',
'api_key' => 'setApiKey',
'code' => 'setCode',
'diagnostic' => 'setDiagnostic',
'stamp' => 'setStamp',
'url' => 'setUrl',
'version' => 'setVersion'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'api_call_uuid' => 'getApiCallUuid',
'api_key' => 'getApiKey',
'code' => 'getCode',
'diagnostic' => 'getDiagnostic',
'stamp' => 'getStamp',
'url' => 'getUrl',
'version' => 'getVersion'    ];

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
        $this->container['api_key'] = isset($data['api_key']) ? $data['api_key'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['diagnostic'] = isset($data['diagnostic']) ? $data['diagnostic'] : null;
        $this->container['stamp'] = isset($data['stamp']) ? $data['stamp'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
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
     * Gets api_key
     *
     * @return string
     */
    public function getApiKey()
    {
        return $this->container['api_key'];
    }

    /**
     * Sets api_key
     *
     * @param string $api_key api_key
     *
     * @return $this
     */
    public function setApiKey($api_key)
    {
        $this->container['api_key'] = $api_key;

        return $this;
    }

    /**
     * Gets code
     *
     * @return int
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param int $code Http code
     *
     * @return $this
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets diagnostic
     *
     * @return string
     */
    public function getDiagnostic()
    {
        return $this->container['diagnostic'];
    }

    /**
     * Sets diagnostic
     *
     * @param string $diagnostic diagnostic
     *
     * @return $this
     */
    public function setDiagnostic($diagnostic)
    {
        $this->container['diagnostic'] = $diagnostic;

        return $this;
    }

    /**
     * Gets stamp
     *
     * @return string
     */
    public function getStamp()
    {
        return $this->container['stamp'];
    }

    /**
     * Sets stamp
     *
     * @param string $stamp Date YYYY-MM-DD HH:II
     *
     * @return $this
     */
    public function setStamp($stamp)
    {
        $this->container['stamp'] = $stamp;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string $url Called url
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets version
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param string $version version
     *
     * @return $this
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

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
