<?php
/**
 * BroadcastItem
 *
 * PHP version 5
 *
 * @category Class
 * @package  RadioCorp
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Public RadioCorp API
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
use \RadioCorp\ObjectSerializer;

/**
 * BroadcastItem Class Doc Comment
 *
 * @category Class
 * @package  RadioCorp
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class BroadcastItem extends ProgramCompact 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'BroadcastItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'program_id' => 'int',
        'title' => 'string',
        'short_name' => 'string',
        'type' => 'string',
        'station' => '\RadioCorp\Model\Station',
        'info' => '\RadioCorp\Model\ProgramInfo',
        'header' => '\RadioCorp\Model\ProgramHeader',
        'presenters' => '\RadioCorp\Model\Presenter[]',
        'broadcast_id' => 'int',
        'start' => '\DateTime',
        'stop' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'program_id' => 'int32',
        'title' => null,
        'short_name' => null,
        'type' => null,
        'station' => null,
        'info' => null,
        'header' => null,
        'presenters' => null,
        'broadcast_id' => 'int32',
        'start' => 'date',
        'stop' => 'date'
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes + parent::openAPITypes();
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats + parent::openAPIFormats();
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'program_id' => 'program_id',
        'title' => 'title',
        'short_name' => 'short_name',
        'type' => 'type',
        'station' => 'station',
        'info' => 'info',
        'header' => 'header',
        'presenters' => 'presenters',
        'broadcast_id' => 'broadcast_id',
        'start' => 'start',
        'stop' => 'stop'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'program_id' => 'setProgramId',
        'title' => 'setTitle',
        'short_name' => 'setShortName',
        'type' => 'setType',
        'station' => 'setStation',
        'info' => 'setInfo',
        'header' => 'setHeader',
        'presenters' => 'setPresenters',
        'broadcast_id' => 'setBroadcastId',
        'start' => 'setStart',
        'stop' => 'setStop'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'program_id' => 'getProgramId',
        'title' => 'getTitle',
        'short_name' => 'getShortName',
        'type' => 'getType',
        'station' => 'getStation',
        'info' => 'getInfo',
        'header' => 'getHeader',
        'presenters' => 'getPresenters',
        'broadcast_id' => 'getBroadcastId',
        'start' => 'getStart',
        'stop' => 'getStop'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return parent::attributeMap() + self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return parent::setters() + self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return parent::getters() + self::$getters;
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

    const TYPE_LIVE = 'live';
    const TYPE_NONSTOP = 'nonstop';
    const TYPE_RECORDED = 'recorded';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_LIVE,
            self::TYPE_NONSTOP,
            self::TYPE_RECORDED,
        ];
    }
    


    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        parent::__construct($data);

        $this->container['program_id'] = isset($data['program_id']) ? $data['program_id'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['short_name'] = isset($data['short_name']) ? $data['short_name'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['station'] = isset($data['station']) ? $data['station'] : null;
        $this->container['info'] = isset($data['info']) ? $data['info'] : null;
        $this->container['header'] = isset($data['header']) ? $data['header'] : null;
        $this->container['presenters'] = isset($data['presenters']) ? $data['presenters'] : null;
        $this->container['broadcast_id'] = isset($data['broadcast_id']) ? $data['broadcast_id'] : null;
        $this->container['start'] = isset($data['start']) ? $data['start'] : null;
        $this->container['stop'] = isset($data['stop']) ? $data['stop'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets program_id
     *
     * @return int|null
     */
    public function getProgramId()
    {
        return $this->container['program_id'];
    }

    /**
     * Sets program_id
     *
     * @param int|null $program_id program_id
     *
     * @return $this
     */
    public function setProgramId($program_id)
    {
        $this->container['program_id'] = $program_id;

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
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets short_name
     *
     * @return string|null
     */
    public function getShortName()
    {
        return $this->container['short_name'];
    }

    /**
     * Sets short_name
     *
     * @param string|null $short_name short_name
     *
     * @return $this
     */
    public function setShortName($short_name)
    {
        $this->container['short_name'] = $short_name;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($type) && !in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets station
     *
     * @return \RadioCorp\Model\Station|null
     */
    public function getStation()
    {
        return $this->container['station'];
    }

    /**
     * Sets station
     *
     * @param \RadioCorp\Model\Station|null $station station
     *
     * @return $this
     */
    public function setStation($station)
    {
        $this->container['station'] = $station;

        return $this;
    }

    /**
     * Gets info
     *
     * @return \RadioCorp\Model\ProgramInfo|null
     */
    public function getInfo()
    {
        return $this->container['info'];
    }

    /**
     * Sets info
     *
     * @param \RadioCorp\Model\ProgramInfo|null $info info
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
     * @return \RadioCorp\Model\ProgramHeader|null
     */
    public function getHeader()
    {
        return $this->container['header'];
    }

    /**
     * Sets header
     *
     * @param \RadioCorp\Model\ProgramHeader|null $header header
     *
     * @return $this
     */
    public function setHeader($header)
    {
        $this->container['header'] = $header;

        return $this;
    }

    /**
     * Gets presenters
     *
     * @return \RadioCorp\Model\Presenter[]|null
     */
    public function getPresenters()
    {
        return $this->container['presenters'];
    }

    /**
     * Sets presenters
     *
     * @param \RadioCorp\Model\Presenter[]|null $presenters presenters
     *
     * @return $this
     */
    public function setPresenters($presenters)
    {
        $this->container['presenters'] = $presenters;

        return $this;
    }

    /**
     * Gets broadcast_id
     *
     * @return int|null
     */
    public function getBroadcastId()
    {
        return $this->container['broadcast_id'];
    }

    /**
     * Sets broadcast_id
     *
     * @param int|null $broadcast_id broadcast_id
     *
     * @return $this
     */
    public function setBroadcastId($broadcast_id)
    {
        $this->container['broadcast_id'] = $broadcast_id;

        return $this;
    }

    /**
     * Gets start
     *
     * @return \DateTime|null
     */
    public function getStart()
    {
        return $this->container['start'];
    }

    /**
     * Sets start
     *
     * @param \DateTime|null $start start
     *
     * @return $this
     */
    public function setStart($start)
    {
        $this->container['start'] = $start;

        return $this;
    }

    /**
     * Gets stop
     *
     * @return \DateTime|null
     */
    public function getStop()
    {
        return $this->container['stop'];
    }

    /**
     * Sets stop
     *
     * @param \DateTime|null $stop stop
     *
     * @return $this
     */
    public function setStop($stop)
    {
        $this->container['stop'] = $stop;

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


