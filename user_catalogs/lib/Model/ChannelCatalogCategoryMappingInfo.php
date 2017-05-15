<?php
/**
 * ChannelCatalogCategoryMappingInfo
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * BeezUP API
 *
 * This is the RESTful API of BeezUP which allows you to manage everything related to BeezUP
 *
 * OpenAPI spec version: 2.0
 * Contact: support@beezup.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * ChannelCatalogCategoryMappingInfo Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ChannelCatalogCategoryMappingInfo implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'channelCatalogCategoryMappingInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'catalog_category_path' => '\Swagger\Client\Model\BeezUPCommonCatalogCategoryPath',
        'channel_category_path' => '\Swagger\Client\Model\BeezUPCommonChannelCategoryPath',
        'cost_value' => 'float',
        'links' => '\Swagger\Client\Model\BeezUPCommonLink2[]'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'catalog_category_path' => 'catalogCategoryPath',
        'channel_category_path' => 'channelCategoryPath',
        'cost_value' => 'costValue',
        'links' => 'links'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'catalog_category_path' => 'setCatalogCategoryPath',
        'channel_category_path' => 'setChannelCategoryPath',
        'cost_value' => 'setCostValue',
        'links' => 'setLinks'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'catalog_category_path' => 'getCatalogCategoryPath',
        'channel_category_path' => 'getChannelCategoryPath',
        'cost_value' => 'getCostValue',
        'links' => 'getLinks'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['catalog_category_path'] = isset($data['catalog_category_path']) ? $data['catalog_category_path'] : null;
        $this->container['channel_category_path'] = isset($data['channel_category_path']) ? $data['channel_category_path'] : null;
        $this->container['cost_value'] = isset($data['cost_value']) ? $data['cost_value'] : null;
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['catalog_category_path'] === null) {
            $invalid_properties[] = "'catalog_category_path' can't be null";
        }
        if ($this->container['channel_category_path'] === null) {
            $invalid_properties[] = "'channel_category_path' can't be null";
        }
        if ($this->container['links'] === null) {
            $invalid_properties[] = "'links' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->container['catalog_category_path'] === null) {
            return false;
        }
        if ($this->container['channel_category_path'] === null) {
            return false;
        }
        if ($this->container['links'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets catalog_category_path
     * @return \Swagger\Client\Model\BeezUPCommonCatalogCategoryPath
     */
    public function getCatalogCategoryPath()
    {
        return $this->container['catalog_category_path'];
    }

    /**
     * Sets catalog_category_path
     * @param \Swagger\Client\Model\BeezUPCommonCatalogCategoryPath $catalog_category_path
     * @return $this
     */
    public function setCatalogCategoryPath($catalog_category_path)
    {
        $this->container['catalog_category_path'] = $catalog_category_path;

        return $this;
    }

    /**
     * Gets channel_category_path
     * @return \Swagger\Client\Model\BeezUPCommonChannelCategoryPath
     */
    public function getChannelCategoryPath()
    {
        return $this->container['channel_category_path'];
    }

    /**
     * Sets channel_category_path
     * @param \Swagger\Client\Model\BeezUPCommonChannelCategoryPath $channel_category_path
     * @return $this
     */
    public function setChannelCategoryPath($channel_category_path)
    {
        $this->container['channel_category_path'] = $channel_category_path;

        return $this;
    }

    /**
     * Gets cost_value
     * @return float
     */
    public function getCostValue()
    {
        return $this->container['cost_value'];
    }

    /**
     * Sets cost_value
     * @param float $cost_value In case of CPC_ByCategory or CPA_ByCategory cost type, you have to indicate the cost value.
     * @return $this
     */
    public function setCostValue($cost_value)
    {
        $this->container['cost_value'] = $cost_value;

        return $this;
    }

    /**
     * Gets links
     * @return \Swagger\Client\Model\BeezUPCommonLink2[]
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     * @param \Swagger\Client\Model\BeezUPCommonLink2[] $links
     * @return $this
     */
    public function setLinks($links)
    {
        $this->container['links'] = $links;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


