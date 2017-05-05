<?php
/**
 * ChannelCatalogState
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Channel Catalogs
 *
 * This api allows you to manage your channel catalogs.   A channel catalog is an association between your store and a channel.  You will be able to: - map your catalog colums to channel columns. - map your catalog categories to the channel categories and define a cost of this category - configure the general and cost settings of the channel - enable or disable a channel - exclude products using filters for a channel - override product values for a channel - disable or reenable a product on a channel
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
 * ChannelCatalogState Class Doc Comment
 *
 * @category    Class
 * @description Channel Catalog State
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ChannelCatalogState implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'channelCatalogState';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'exported_product_count' => 'int',
        'column_mapping_status' => '\Swagger\Client\Model\ColumnMappingStatus',
        'category_mapping_state' => '\Swagger\Client\Model\CategoryMappingState',
        'api_setting_status' => '\Swagger\Client\Model\ApiSettingStatus'
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
        'exported_product_count' => 'exportedProductCount',
        'column_mapping_status' => 'columnMappingStatus',
        'category_mapping_state' => 'categoryMappingState',
        'api_setting_status' => 'apiSettingStatus'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'exported_product_count' => 'setExportedProductCount',
        'column_mapping_status' => 'setColumnMappingStatus',
        'category_mapping_state' => 'setCategoryMappingState',
        'api_setting_status' => 'setApiSettingStatus'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'exported_product_count' => 'getExportedProductCount',
        'column_mapping_status' => 'getColumnMappingStatus',
        'category_mapping_state' => 'getCategoryMappingState',
        'api_setting_status' => 'getApiSettingStatus'
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
        $this->container['exported_product_count'] = isset($data['exported_product_count']) ? $data['exported_product_count'] : null;
        $this->container['column_mapping_status'] = isset($data['column_mapping_status']) ? $data['column_mapping_status'] : null;
        $this->container['category_mapping_state'] = isset($data['category_mapping_state']) ? $data['category_mapping_state'] : null;
        $this->container['api_setting_status'] = isset($data['api_setting_status']) ? $data['api_setting_status'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['exported_product_count'] === null) {
            $invalid_properties[] = "'exported_product_count' can't be null";
        }
        if ($this->container['column_mapping_status'] === null) {
            $invalid_properties[] = "'column_mapping_status' can't be null";
        }
        if ($this->container['category_mapping_state'] === null) {
            $invalid_properties[] = "'category_mapping_state' can't be null";
        }
        if ($this->container['api_setting_status'] === null) {
            $invalid_properties[] = "'api_setting_status' can't be null";
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

        if ($this->container['exported_product_count'] === null) {
            return false;
        }
        if ($this->container['column_mapping_status'] === null) {
            return false;
        }
        if ($this->container['category_mapping_state'] === null) {
            return false;
        }
        if ($this->container['api_setting_status'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets exported_product_count
     * @return int
     */
    public function getExportedProductCount()
    {
        return $this->container['exported_product_count'];
    }

    /**
     * Sets exported_product_count
     * @param int $exported_product_count
     * @return $this
     */
    public function setExportedProductCount($exported_product_count)
    {
        $this->container['exported_product_count'] = $exported_product_count;

        return $this;
    }

    /**
     * Gets column_mapping_status
     * @return \Swagger\Client\Model\ColumnMappingStatus
     */
    public function getColumnMappingStatus()
    {
        return $this->container['column_mapping_status'];
    }

    /**
     * Sets column_mapping_status
     * @param \Swagger\Client\Model\ColumnMappingStatus $column_mapping_status
     * @return $this
     */
    public function setColumnMappingStatus($column_mapping_status)
    {
        $this->container['column_mapping_status'] = $column_mapping_status;

        return $this;
    }

    /**
     * Gets category_mapping_state
     * @return \Swagger\Client\Model\CategoryMappingState
     */
    public function getCategoryMappingState()
    {
        return $this->container['category_mapping_state'];
    }

    /**
     * Sets category_mapping_state
     * @param \Swagger\Client\Model\CategoryMappingState $category_mapping_state
     * @return $this
     */
    public function setCategoryMappingState($category_mapping_state)
    {
        $this->container['category_mapping_state'] = $category_mapping_state;

        return $this;
    }

    /**
     * Gets api_setting_status
     * @return \Swagger\Client\Model\ApiSettingStatus
     */
    public function getApiSettingStatus()
    {
        return $this->container['api_setting_status'];
    }

    /**
     * Sets api_setting_status
     * @param \Swagger\Client\Model\ApiSettingStatus $api_setting_status
     * @return $this
     */
    public function setApiSettingStatus($api_setting_status)
    {
        $this->container['api_setting_status'] = $api_setting_status;

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


