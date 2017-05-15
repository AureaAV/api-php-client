<?php
/**
 * BeezUPCommonErrorSummary
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * User - List of Values
 *
 * This API gives you access to list of values.
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
 * BeezUPCommonErrorSummary Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class BeezUPCommonErrorSummary implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'BeezUP.Common.ErrorSummary';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'utc_date' => '\DateTime',
        'error_guid' => 'string',
        'error_code' => 'string',
        'error_message' => 'string',
        'technical_error_message' => 'string',
        'exception_detail' => '\Swagger\Client\Model\BeezUPCommonExceptionDetail',
        'error_arguments' => 'map[string,string]',
        'property_name' => 'string',
        'property_value' => 'string',
        'object_name' => 'string',
        'source' => 'string'
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
        'utc_date' => 'utcDate',
        'error_guid' => 'errorGuid',
        'error_code' => 'errorCode',
        'error_message' => 'errorMessage',
        'technical_error_message' => 'technicalErrorMessage',
        'exception_detail' => 'exceptionDetail',
        'error_arguments' => 'errorArguments',
        'property_name' => 'propertyName',
        'property_value' => 'propertyValue',
        'object_name' => 'objectName',
        'source' => 'source'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'utc_date' => 'setUtcDate',
        'error_guid' => 'setErrorGuid',
        'error_code' => 'setErrorCode',
        'error_message' => 'setErrorMessage',
        'technical_error_message' => 'setTechnicalErrorMessage',
        'exception_detail' => 'setExceptionDetail',
        'error_arguments' => 'setErrorArguments',
        'property_name' => 'setPropertyName',
        'property_value' => 'setPropertyValue',
        'object_name' => 'setObjectName',
        'source' => 'setSource'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'utc_date' => 'getUtcDate',
        'error_guid' => 'getErrorGuid',
        'error_code' => 'getErrorCode',
        'error_message' => 'getErrorMessage',
        'technical_error_message' => 'getTechnicalErrorMessage',
        'exception_detail' => 'getExceptionDetail',
        'error_arguments' => 'getErrorArguments',
        'property_name' => 'getPropertyName',
        'property_value' => 'getPropertyValue',
        'object_name' => 'getObjectName',
        'source' => 'getSource'
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
        $this->container['utc_date'] = isset($data['utc_date']) ? $data['utc_date'] : null;
        $this->container['error_guid'] = isset($data['error_guid']) ? $data['error_guid'] : null;
        $this->container['error_code'] = isset($data['error_code']) ? $data['error_code'] : null;
        $this->container['error_message'] = isset($data['error_message']) ? $data['error_message'] : null;
        $this->container['technical_error_message'] = isset($data['technical_error_message']) ? $data['technical_error_message'] : null;
        $this->container['exception_detail'] = isset($data['exception_detail']) ? $data['exception_detail'] : null;
        $this->container['error_arguments'] = isset($data['error_arguments']) ? $data['error_arguments'] : null;
        $this->container['property_name'] = isset($data['property_name']) ? $data['property_name'] : null;
        $this->container['property_value'] = isset($data['property_value']) ? $data['property_value'] : null;
        $this->container['object_name'] = isset($data['object_name']) ? $data['object_name'] : null;
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
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
     * Gets utc_date
     * @return \DateTime
     */
    public function getUtcDate()
    {
        return $this->container['utc_date'];
    }

    /**
     * Sets utc_date
     * @param \DateTime $utc_date
     * @return $this
     */
    public function setUtcDate($utc_date)
    {
        $this->container['utc_date'] = $utc_date;

        return $this;
    }

    /**
     * Gets error_guid
     * @return string
     */
    public function getErrorGuid()
    {
        return $this->container['error_guid'];
    }

    /**
     * Sets error_guid
     * @param string $error_guid
     * @return $this
     */
    public function setErrorGuid($error_guid)
    {
        $this->container['error_guid'] = $error_guid;

        return $this;
    }

    /**
     * Gets error_code
     * @return string
     */
    public function getErrorCode()
    {
        return $this->container['error_code'];
    }

    /**
     * Sets error_code
     * @param string $error_code
     * @return $this
     */
    public function setErrorCode($error_code)
    {
        $this->container['error_code'] = $error_code;

        return $this;
    }

    /**
     * Gets error_message
     * @return string
     */
    public function getErrorMessage()
    {
        return $this->container['error_message'];
    }

    /**
     * Sets error_message
     * @param string $error_message
     * @return $this
     */
    public function setErrorMessage($error_message)
    {
        $this->container['error_message'] = $error_message;

        return $this;
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
     * Gets exception_detail
     * @return \Swagger\Client\Model\BeezUPCommonExceptionDetail
     */
    public function getExceptionDetail()
    {
        return $this->container['exception_detail'];
    }

    /**
     * Sets exception_detail
     * @param \Swagger\Client\Model\BeezUPCommonExceptionDetail $exception_detail
     * @return $this
     */
    public function setExceptionDetail($exception_detail)
    {
        $this->container['exception_detail'] = $exception_detail;

        return $this;
    }

    /**
     * Gets error_arguments
     * @return map[string,string]
     */
    public function getErrorArguments()
    {
        return $this->container['error_arguments'];
    }

    /**
     * Sets error_arguments
     * @param map[string,string] $error_arguments
     * @return $this
     */
    public function setErrorArguments($error_arguments)
    {
        $this->container['error_arguments'] = $error_arguments;

        return $this;
    }

    /**
     * Gets property_name
     * @return string
     */
    public function getPropertyName()
    {
        return $this->container['property_name'];
    }

    /**
     * Sets property_name
     * @param string $property_name
     * @return $this
     */
    public function setPropertyName($property_name)
    {
        $this->container['property_name'] = $property_name;

        return $this;
    }

    /**
     * Gets property_value
     * @return string
     */
    public function getPropertyValue()
    {
        return $this->container['property_value'];
    }

    /**
     * Sets property_value
     * @param string $property_value
     * @return $this
     */
    public function setPropertyValue($property_value)
    {
        $this->container['property_value'] = $property_value;

        return $this;
    }

    /**
     * Gets object_name
     * @return string
     */
    public function getObjectName()
    {
        return $this->container['object_name'];
    }

    /**
     * Sets object_name
     * @param string $object_name
     * @return $this
     */
    public function setObjectName($object_name)
    {
        $this->container['object_name'] = $object_name;

        return $this;
    }

    /**
     * Gets source
     * @return string
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     * @param string $source
     * @return $this
     */
    public function setSource($source)
    {
        $this->container['source'] = $source;

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


