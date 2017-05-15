<?php
/**
 * RuleExecutionReporting
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
 * RuleExecutionReporting Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class RuleExecutionReporting implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ruleExecutionReporting';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'rule_id' => 'string',
        'rule_name' => 'string',
        'started_utc_date' => '\DateTime',
        'completed_utc_date' => '\DateTime',
        'status' => '\Swagger\Client\Model\RuleExecutionReportingStatus',
        'error_type' => '\Swagger\Client\Model\RuleExecutionReportingErrorType',
        'affected_product_count' => 'int',
        'active_affected_product_count' => 'int',
        'affected_channel_count' => 'int',
        'optimisation_action_name' => '\Swagger\Client\Model\OptimisationActionName',
        'user_id' => 'string',
        'execution_source' => '\Swagger\Client\Model\RuleExecutionReportingExecutionSource',
        'report_url' => 'string',
        'links' => '\Swagger\Client\Model\DefinitionsRuleExecutionReportingLinks'
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
        'rule_id' => 'ruleId',
        'rule_name' => 'ruleName',
        'started_utc_date' => 'startedUtcDate',
        'completed_utc_date' => 'completedUtcDate',
        'status' => 'status',
        'error_type' => 'errorType',
        'affected_product_count' => 'affectedProductCount',
        'active_affected_product_count' => 'activeAffectedProductCount',
        'affected_channel_count' => 'affectedChannelCount',
        'optimisation_action_name' => 'optimisationActionName',
        'user_id' => 'userId',
        'execution_source' => 'executionSource',
        'report_url' => 'reportUrl',
        'links' => 'links'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'rule_id' => 'setRuleId',
        'rule_name' => 'setRuleName',
        'started_utc_date' => 'setStartedUtcDate',
        'completed_utc_date' => 'setCompletedUtcDate',
        'status' => 'setStatus',
        'error_type' => 'setErrorType',
        'affected_product_count' => 'setAffectedProductCount',
        'active_affected_product_count' => 'setActiveAffectedProductCount',
        'affected_channel_count' => 'setAffectedChannelCount',
        'optimisation_action_name' => 'setOptimisationActionName',
        'user_id' => 'setUserId',
        'execution_source' => 'setExecutionSource',
        'report_url' => 'setReportUrl',
        'links' => 'setLinks'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'rule_id' => 'getRuleId',
        'rule_name' => 'getRuleName',
        'started_utc_date' => 'getStartedUtcDate',
        'completed_utc_date' => 'getCompletedUtcDate',
        'status' => 'getStatus',
        'error_type' => 'getErrorType',
        'affected_product_count' => 'getAffectedProductCount',
        'active_affected_product_count' => 'getActiveAffectedProductCount',
        'affected_channel_count' => 'getAffectedChannelCount',
        'optimisation_action_name' => 'getOptimisationActionName',
        'user_id' => 'getUserId',
        'execution_source' => 'getExecutionSource',
        'report_url' => 'getReportUrl',
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
        $this->container['rule_id'] = isset($data['rule_id']) ? $data['rule_id'] : null;
        $this->container['rule_name'] = isset($data['rule_name']) ? $data['rule_name'] : null;
        $this->container['started_utc_date'] = isset($data['started_utc_date']) ? $data['started_utc_date'] : null;
        $this->container['completed_utc_date'] = isset($data['completed_utc_date']) ? $data['completed_utc_date'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['error_type'] = isset($data['error_type']) ? $data['error_type'] : null;
        $this->container['affected_product_count'] = isset($data['affected_product_count']) ? $data['affected_product_count'] : null;
        $this->container['active_affected_product_count'] = isset($data['active_affected_product_count']) ? $data['active_affected_product_count'] : null;
        $this->container['affected_channel_count'] = isset($data['affected_channel_count']) ? $data['affected_channel_count'] : null;
        $this->container['optimisation_action_name'] = isset($data['optimisation_action_name']) ? $data['optimisation_action_name'] : null;
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
        $this->container['execution_source'] = isset($data['execution_source']) ? $data['execution_source'] : null;
        $this->container['report_url'] = isset($data['report_url']) ? $data['report_url'] : null;
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

        if ($this->container['rule_id'] === null) {
            $invalid_properties[] = "'rule_id' can't be null";
        }
        if ($this->container['rule_name'] === null) {
            $invalid_properties[] = "'rule_name' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalid_properties[] = "'status' can't be null";
        }
        if ($this->container['execution_source'] === null) {
            $invalid_properties[] = "'execution_source' can't be null";
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

        if ($this->container['rule_id'] === null) {
            return false;
        }
        if ($this->container['rule_name'] === null) {
            return false;
        }
        if ($this->container['status'] === null) {
            return false;
        }
        if ($this->container['execution_source'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets rule_id
     * @return string
     */
    public function getRuleId()
    {
        return $this->container['rule_id'];
    }

    /**
     * Sets rule_id
     * @param string $rule_id The rule identifier
     * @return $this
     */
    public function setRuleId($rule_id)
    {
        $this->container['rule_id'] = $rule_id;

        return $this;
    }

    /**
     * Gets rule_name
     * @return string
     */
    public function getRuleName()
    {
        return $this->container['rule_name'];
    }

    /**
     * Sets rule_name
     * @param string $rule_name The name of the rule
     * @return $this
     */
    public function setRuleName($rule_name)
    {
        $this->container['rule_name'] = $rule_name;

        return $this;
    }

    /**
     * Gets started_utc_date
     * @return \DateTime
     */
    public function getStartedUtcDate()
    {
        return $this->container['started_utc_date'];
    }

    /**
     * Sets started_utc_date
     * @param \DateTime $started_utc_date The start utc date of the execution of the rule
     * @return $this
     */
    public function setStartedUtcDate($started_utc_date)
    {
        $this->container['started_utc_date'] = $started_utc_date;

        return $this;
    }

    /**
     * Gets completed_utc_date
     * @return \DateTime
     */
    public function getCompletedUtcDate()
    {
        return $this->container['completed_utc_date'];
    }

    /**
     * Sets completed_utc_date
     * @param \DateTime $completed_utc_date The completed utc date of the execution of the rule
     * @return $this
     */
    public function setCompletedUtcDate($completed_utc_date)
    {
        $this->container['completed_utc_date'] = $completed_utc_date;

        return $this;
    }

    /**
     * Gets status
     * @return \Swagger\Client\Model\RuleExecutionReportingStatus
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param \Swagger\Client\Model\RuleExecutionReportingStatus $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets error_type
     * @return \Swagger\Client\Model\RuleExecutionReportingErrorType
     */
    public function getErrorType()
    {
        return $this->container['error_type'];
    }

    /**
     * Sets error_type
     * @param \Swagger\Client\Model\RuleExecutionReportingErrorType $error_type
     * @return $this
     */
    public function setErrorType($error_type)
    {
        $this->container['error_type'] = $error_type;

        return $this;
    }

    /**
     * Gets affected_product_count
     * @return int
     */
    public function getAffectedProductCount()
    {
        return $this->container['affected_product_count'];
    }

    /**
     * Sets affected_product_count
     * @param int $affected_product_count The count of affected products, active or not
     * @return $this
     */
    public function setAffectedProductCount($affected_product_count)
    {
        $this->container['affected_product_count'] = $affected_product_count;

        return $this;
    }

    /**
     * Gets active_affected_product_count
     * @return int
     */
    public function getActiveAffectedProductCount()
    {
        return $this->container['active_affected_product_count'];
    }

    /**
     * Sets active_affected_product_count
     * @param int $active_affected_product_count The count of affected active products
     * @return $this
     */
    public function setActiveAffectedProductCount($active_affected_product_count)
    {
        $this->container['active_affected_product_count'] = $active_affected_product_count;

        return $this;
    }

    /**
     * Gets affected_channel_count
     * @return int
     */
    public function getAffectedChannelCount()
    {
        return $this->container['affected_channel_count'];
    }

    /**
     * Sets affected_channel_count
     * @param int $affected_channel_count The count of affected Channels across all products
     * @return $this
     */
    public function setAffectedChannelCount($affected_channel_count)
    {
        $this->container['affected_channel_count'] = $affected_channel_count;

        return $this;
    }

    /**
     * Gets optimisation_action_name
     * @return \Swagger\Client\Model\OptimisationActionName
     */
    public function getOptimisationActionName()
    {
        return $this->container['optimisation_action_name'];
    }

    /**
     * Sets optimisation_action_name
     * @param \Swagger\Client\Model\OptimisationActionName $optimisation_action_name
     * @return $this
     */
    public function setOptimisationActionName($optimisation_action_name)
    {
        $this->container['optimisation_action_name'] = $optimisation_action_name;

        return $this;
    }

    /**
     * Gets user_id
     * @return string
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     * @param string $user_id The userId that executed the rule if any
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets execution_source
     * @return \Swagger\Client\Model\RuleExecutionReportingExecutionSource
     */
    public function getExecutionSource()
    {
        return $this->container['execution_source'];
    }

    /**
     * Sets execution_source
     * @param \Swagger\Client\Model\RuleExecutionReportingExecutionSource $execution_source
     * @return $this
     */
    public function setExecutionSource($execution_source)
    {
        $this->container['execution_source'] = $execution_source;

        return $this;
    }

    /**
     * Gets report_url
     * @return string
     */
    public function getReportUrl()
    {
        return $this->container['report_url'];
    }

    /**
     * Sets report_url
     * @param string $report_url The url for the excel report for this execution
     * @return $this
     */
    public function setReportUrl($report_url)
    {
        $this->container['report_url'] = $report_url;

        return $this;
    }

    /**
     * Gets links
     * @return \Swagger\Client\Model\DefinitionsRuleExecutionReportingLinks
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     * @param \Swagger\Client\Model\DefinitionsRuleExecutionReportingLinks $links
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


