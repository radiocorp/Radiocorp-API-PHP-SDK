<?php
/**
 * Presenter
 *
 * PHP version 5
 *
 * @category Class
 * @package  RadioCorp
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Public RadioCorp API [Development]
 *
 * Public/Private API for accessing RadioCorp recources through custom applications.\\ At the moment only available for the stations 100% NL, SLAM! and SLAM!TV ### Available formats ### Available formats (based on the 'Accept' header):\\ json, array, csv, html, jsonp, php, serialized, xml\\ The API defaults to application/json when no header supplied. ### Contact / License ###
 *
 * OpenAPI spec version: v0.0
 * Contact: beheer@radiocorp.nl
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.4
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace RadioCorp\Model;

use \ArrayAccess;
use \RadioCorp\ObjectSerializer;

/**
 * Presenter Class Doc Comment
 *
 * @category Class
 * @package  RadioCorp
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Presenter implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Presenter';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'presenter_id' => 'int',
        'fullname' => 'string',
        'info' => '\RadioCorp\Model\PresenterInfo',
        'header' => '\RadioCorp\Model\PresenterHeader'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'presenter_id' => 'int32',
        'fullname' => null,
        'info' => null,
        'header' => null
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
        'presenter_id' => 'presenter_id',
        'fullname' => 'fullname',
        'info' => 'info',
        'header' => 'header'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'presenter_id' => 'setPresenterId',
        'fullname' => 'setFullname',
        'info' => 'setInfo',
        'header' => 'setHeader'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'presenter_id' => 'getPresenterId',
        'fullname' => 'getFullname',
        'info' => 'getInfo',
        'header' => 'getHeader'
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
        $this->container['presenter_id'] = isset($data['presenter_id']) ? $data['presenter_id'] : null;
        $this->container['fullname'] = isset($data['fullname']) ? $data['fullname'] : null;
        $this->container['info'] = isset($data['info']) ? $data['info'] : null;
        $this->container['header'] = isset($data['header']) ? $data['header'] : null;
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
     * Gets presenter_id
     *
     * @return int|null
     */
    public function getPresenterId()
    {
        return $this->container['presenter_id'];
    }

    /**
     * Sets presenter_id
     *
     * @param int|null $presenter_id presenter_id
     *
     * @return $this
     */
    public function setPresenterId($presenter_id)
    {
        $this->container['presenter_id'] = $presenter_id;

        return $this;
    }

    /**
     * Gets fullname
     *
     * @return string|null
     */
    public function getFullname()
    {
        return $this->container['fullname'];
    }

    /**
     * Sets fullname
     *
     * @param string|null $fullname fullname
     *
     * @return $this
     */
    public function setFullname($fullname)
    {
        $this->container['fullname'] = $fullname;

        return $this;
    }

    /**
     * Gets info
     *
     * @return \RadioCorp\Model\PresenterInfo|null
     */
    public function getInfo()
    {
        return $this->container['info'];
    }

    /**
     * Sets info
     *
     * @param \RadioCorp\Model\PresenterInfo|null $info info
     *
     * @return $this
     */
    public function setInfo($info)
    {
        $this->container['info'] = $info;

        return $this;
    }

    /**
     * Gets header
     *
     * @return \RadioCorp\Model\PresenterHeader|null
     */
    public function getHeader()
    {
        return $this->container['header'];
    }

    /**
     * Sets header
     *
     * @param \RadioCorp\Model\PresenterHeader|null $header header
     *
     * @return $this
     */
    public function setHeader($header)
    {
        $this->container['header'] = $header;

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
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


