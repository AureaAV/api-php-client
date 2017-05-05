<?php
/**
 * BeezUPCommonWarningSummary
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Marketplaces - Orders
 *
 * The features exposed in this API are centered around managing Orders harvested from your configured marketplaces.\\ This includes: - fetching current information (as known by BeezUP) for a single or multiple Orders, - requesting Order harvest to synchronize your marketplaces and BeezUP accounts, - changing BeezUP data and requesting changes to your marketplaces (accepting, shipping, etc), - configuring automatic changes to marketplace based our newly fetched data, - creating and exporting reports for your Orders.
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
 * BeezUPCommonWarningSummary Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class BeezUPCommonWarningSummary implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'BeezUP.Common.WarningSummary';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'technical_error_message' => 'string',
        'warning_message' => 'string',
        'warning_code' => 'string',
        'warning_arguments' => 'map[string,string]'
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
        'technical_error_message' => 'technicalErrorMessage',
        'warning_message' => 'warningMessage',
        'warning_code' => 'warningCode',
        'warning_arguments' => 'warningArguments'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'technical_error_message' => 'setTechnicalErrorMessage',
        'warning_message' => 'setWarningMessage',
        'warning_code' => 'setWarningCode',
        'warning_arguments' => 'setWarningArguments'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'technical_error_message' => 'getTechnicalErrorMessage',
        'warning_message' => 'getWarningMessage',
        'warning_code' => 'getWarningCode',
        'warning_arguments' => 'getWarningArguments'
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
        $this->container['technical_error_message'] = isset($data['technical_error_message']) ? $data['technical_error_message'] : null;
        $this->container['warning_message'] = isset($data['warning_message']) ? $data['warning_message'] : null;
        $this->container['warning_code'] = isset($data['warning_code']) ? $data['warning_code'] : null;
        $this->container['warning_arguments'] = isset($data['warning_arguments']) ? $data['warning_arguments'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

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

        return true;
    }


    /**
     * Gets technical_error_message
     * @return string
     */
    public function getTechnicalErrorMessage()
    {
        return $this->container['technical_error_message'];
    }

    /**
     * Sets technical_error_message
     * @param string $technical_error_message
     * @return $this
     */
    public function setTechnicalErrorMessage($technical_error_message)
    {
        $this->container['technical_error_message'] = $technical_error_message;

        return $this;
    }

    /**
     * Gets warning_message
     * @return string
     */
    public function getWarningMessage()
    {
        return $this->container['warning_message'];
    }

    /**
     * Sets warning_message
     * @param string $warning_message
     * @return $this
     */
    public function setWarningMessage($warning_message)
    {
        $this->container['warning_message'] = $warning_message;

        return $this;
    }

    /**
     * Gets warning_code
     * @return string
     */
    public function getWarningCode()
    {
        return $this->container['warning_code'];
    }

    /**
     * Sets warning_code
     * @param string $warning_code
     * @return $this
     */
    public function setWarningCode($warning_code)
    {
        $this->container['warning_code'] = $warning_code;

        return $this;
    }

    /**
     * Gets warning_arguments
     * @return map[string,string]
     */
    public function getWarningArguments()
    {
        return $this->container['warning_arguments'];
    }

    /**
     * Sets warning_arguments
     * @param map[string,string] $warning_arguments
     * @return $this
     */
    public function setWarningArguments($warning_arguments)
    {
        $this->container['warning_arguments'] = $warning_arguments;

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


