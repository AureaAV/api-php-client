<?php
/**
 * BeezUPCommonLinkParameter3
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Catalogs
 *
 * This API allows you to manage your catalogs
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
 * BeezUPCommonLinkParameter3 Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class BeezUPCommonLinkParameter3 implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'BeezUP.Common.LinkParameter3';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'value' => 'object',
        'required' => 'bool',
        'in' => '\Swagger\Client\Model\BeezUPCommonParameterIn',
        'type' => '\Swagger\Client\Model\BeezUPCommonParameterType',
        'lov_link' => '\Swagger\Client\Model\BeezUPCommonLOVLink3',
        'lov_required' => 'bool',
        'description' => 'string',
        'schema' => 'string',
        'properties' => 'map[string,\Swagger\Client\Model\BeezUPCommonLinkParameterProperty3]'
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
        'value' => 'value',
        'required' => 'required',
        'in' => 'in',
        'type' => 'type',
        'lov_link' => 'lovLink',
        'lov_required' => 'lovRequired',
        'description' => 'description',
        'schema' => 'schema',
        'properties' => 'properties'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'value' => 'setValue',
        'required' => 'setRequired',
        'in' => 'setIn',
        'type' => 'setType',
        'lov_link' => 'setLovLink',
        'lov_required' => 'setLovRequired',
        'description' => 'setDescription',
        'schema' => 'setSchema',
        'properties' => 'setProperties'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'value' => 'getValue',
        'required' => 'getRequired',
        'in' => 'getIn',
        'type' => 'getType',
        'lov_link' => 'getLovLink',
        'lov_required' => 'getLovRequired',
        'description' => 'getDescription',
        'schema' => 'getSchema',
        'properties' => 'getProperties'
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
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['required'] = isset($data['required']) ? $data['required'] : false;
        $this->container['in'] = isset($data['in']) ? $data['in'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['lov_link'] = isset($data['lov_link']) ? $data['lov_link'] : null;
        $this->container['lov_required'] = isset($data['lov_required']) ? $data['lov_required'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['schema'] = isset($data['schema']) ? $data['schema'] : null;
        $this->container['properties'] = isset($data['properties']) ? $data['properties'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['in'] === null) {
            $invalid_properties[] = "'in' can't be null";
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

        if ($this->container['in'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets value
     * @return object
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     * @param object $value The value of the parameter. It can be an integer a string or an object.
     * @return $this
     */
    public function setValue($value)
    {
        $this->container['value'] = $value;

        return $this;
    }

    /**
     * Gets required
     * @return bool
     */
    public function getRequired()
    {
        return $this->container['required'];
    }

    /**
     * Sets required
     * @param bool $required
     * @return $this
     */
    public function setRequired($required)
    {
        $this->container['required'] = $required;

        return $this;
    }

    /**
     * Gets in
     * @return \Swagger\Client\Model\BeezUPCommonParameterIn
     */
    public function getIn()
    {
        return $this->container['in'];
    }

    /**
     * Sets in
     * @param \Swagger\Client\Model\BeezUPCommonParameterIn $in
     * @return $this
     */
    public function setIn($in)
    {
        $this->container['in'] = $in;

        return $this;
    }

    /**
     * Gets type
     * @return \Swagger\Client\Model\BeezUPCommonParameterType
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     * @param \Swagger\Client\Model\BeezUPCommonParameterType $type
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets lov_link
     * @return \Swagger\Client\Model\BeezUPCommonLOVLink3
     */
    public function getLovLink()
    {
        return $this->container['lov_link'];
    }

    /**
     * Sets lov_link
     * @param \Swagger\Client\Model\BeezUPCommonLOVLink3 $lov_link
     * @return $this
     */
    public function setLovLink($lov_link)
    {
        $this->container['lov_link'] = $lov_link;

        return $this;
    }

    /**
     * Gets lov_required
     * @return bool
     */
    public function getLovRequired()
    {
        return $this->container['lov_required'];
    }

    /**
     * Sets lov_required
     * @param bool $lov_required If true, you MUST indicate a value from the list of values otherwise it's a freetext
     * @return $this
     */
    public function setLovRequired($lov_required)
    {
        $this->container['lov_required'] = $lov_required;

        return $this;
    }

    /**
     * Gets description
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     * @param string $description description of the parameter
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets schema
     * @return string
     */
    public function getSchema()
    {
        return $this->container['schema'];
    }

    /**
     * Sets schema
     * @param string $schema schema of the parameter
     * @return $this
     */
    public function setSchema($schema)
    {
        $this->container['schema'] = $schema;

        return $this;
    }

    /**
     * Gets properties
     * @return map[string,\Swagger\Client\Model\BeezUPCommonLinkParameterProperty3]
     */
    public function getProperties()
    {
        return $this->container['properties'];
    }

    /**
     * Sets properties
     * @param map[string,\Swagger\Client\Model\BeezUPCommonLinkParameterProperty3] $properties If the parameter is an object with flexible properties (additionProperties/dictionary), we will describe the properties of the object.
     * @return $this
     */
    public function setProperties($properties)
    {
        $this->container['properties'] = $properties;

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


