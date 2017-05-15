<?php
/**
 * OrderListRequest
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
 * OrderListRequest Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class OrderListRequest implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'orderListRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'marketplace_technical_codes' => '\Swagger\Client\Model\MarketplaceTechnicalCode[]',
        'marketplace_business_codes' => '\Swagger\Client\Model\MarketplaceBusinessCode[]',
        'account_ids' => '\Swagger\Client\Model\AccountId[]',
        'beez_up_order_statuses' => '\Swagger\Client\Model\BeezUPOrderStatus[]',
        'date_search_type' => '\Swagger\Client\Model\DateSearchType',
        'begin_period_utc_date' => '\DateTime',
        'end_period_utc_date' => '\DateTime',
        'order_buyer_name' => '\Swagger\Client\Model\OrderBuyerName',
        'marketplace_order_ids' => '\Swagger\Client\Model\MarketplaceOrderId[]',
        'order_merchant_order_ids' => '\Swagger\Client\Model\OrderMerchantOrderId[]',
        'page_size' => '\Swagger\Client\Model\PageSize',
        'page_number' => '\Swagger\Client\Model\PageNumber'
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
        'marketplace_technical_codes' => 'marketplaceTechnicalCodes',
        'marketplace_business_codes' => 'marketplaceBusinessCodes',
        'account_ids' => 'accountIds',
        'beez_up_order_statuses' => 'beezUPOrderStatuses',
        'date_search_type' => 'dateSearchType',
        'begin_period_utc_date' => 'beginPeriodUtcDate',
        'end_period_utc_date' => 'endPeriodUtcDate',
        'order_buyer_name' => 'order_Buyer_Name',
        'marketplace_order_ids' => 'marketplaceOrderIds',
        'order_merchant_order_ids' => 'order_MerchantOrderIds',
        'page_size' => 'pageSize',
        'page_number' => 'pageNumber'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'marketplace_technical_codes' => 'setMarketplaceTechnicalCodes',
        'marketplace_business_codes' => 'setMarketplaceBusinessCodes',
        'account_ids' => 'setAccountIds',
        'beez_up_order_statuses' => 'setBeezUpOrderStatuses',
        'date_search_type' => 'setDateSearchType',
        'begin_period_utc_date' => 'setBeginPeriodUtcDate',
        'end_period_utc_date' => 'setEndPeriodUtcDate',
        'order_buyer_name' => 'setOrderBuyerName',
        'marketplace_order_ids' => 'setMarketplaceOrderIds',
        'order_merchant_order_ids' => 'setOrderMerchantOrderIds',
        'page_size' => 'setPageSize',
        'page_number' => 'setPageNumber'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'marketplace_technical_codes' => 'getMarketplaceTechnicalCodes',
        'marketplace_business_codes' => 'getMarketplaceBusinessCodes',
        'account_ids' => 'getAccountIds',
        'beez_up_order_statuses' => 'getBeezUpOrderStatuses',
        'date_search_type' => 'getDateSearchType',
        'begin_period_utc_date' => 'getBeginPeriodUtcDate',
        'end_period_utc_date' => 'getEndPeriodUtcDate',
        'order_buyer_name' => 'getOrderBuyerName',
        'marketplace_order_ids' => 'getMarketplaceOrderIds',
        'order_merchant_order_ids' => 'getOrderMerchantOrderIds',
        'page_size' => 'getPageSize',
        'page_number' => 'getPageNumber'
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
        $this->container['marketplace_technical_codes'] = isset($data['marketplace_technical_codes']) ? $data['marketplace_technical_codes'] : null;
        $this->container['marketplace_business_codes'] = isset($data['marketplace_business_codes']) ? $data['marketplace_business_codes'] : null;
        $this->container['account_ids'] = isset($data['account_ids']) ? $data['account_ids'] : null;
        $this->container['beez_up_order_statuses'] = isset($data['beez_up_order_statuses']) ? $data['beez_up_order_statuses'] : null;
        $this->container['date_search_type'] = isset($data['date_search_type']) ? $data['date_search_type'] : null;
        $this->container['begin_period_utc_date'] = isset($data['begin_period_utc_date']) ? $data['begin_period_utc_date'] : null;
        $this->container['end_period_utc_date'] = isset($data['end_period_utc_date']) ? $data['end_period_utc_date'] : null;
        $this->container['order_buyer_name'] = isset($data['order_buyer_name']) ? $data['order_buyer_name'] : null;
        $this->container['marketplace_order_ids'] = isset($data['marketplace_order_ids']) ? $data['marketplace_order_ids'] : null;
        $this->container['order_merchant_order_ids'] = isset($data['order_merchant_order_ids']) ? $data['order_merchant_order_ids'] : null;
        $this->container['page_size'] = isset($data['page_size']) ? $data['page_size'] : null;
        $this->container['page_number'] = isset($data['page_number']) ? $data['page_number'] : null;
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
     * Gets marketplace_technical_codes
     * @return \Swagger\Client\Model\MarketplaceTechnicalCode[]
     */
    public function getMarketplaceTechnicalCodes()
    {
        return $this->container['marketplace_technical_codes'];
    }

    /**
     * Sets marketplace_technical_codes
     * @param \Swagger\Client\Model\MarketplaceTechnicalCode[] $marketplace_technical_codes
     * @return $this
     */
    public function setMarketplaceTechnicalCodes($marketplace_technical_codes)
    {
        $this->container['marketplace_technical_codes'] = $marketplace_technical_codes;

        return $this;
    }

    /**
     * Gets marketplace_business_codes
     * @return \Swagger\Client\Model\MarketplaceBusinessCode[]
     */
    public function getMarketplaceBusinessCodes()
    {
        return $this->container['marketplace_business_codes'];
    }

    /**
     * Sets marketplace_business_codes
     * @param \Swagger\Client\Model\MarketplaceBusinessCode[] $marketplace_business_codes
     * @return $this
     */
    public function setMarketplaceBusinessCodes($marketplace_business_codes)
    {
        $this->container['marketplace_business_codes'] = $marketplace_business_codes;

        return $this;
    }

    /**
     * Gets account_ids
     * @return \Swagger\Client\Model\AccountId[]
     */
    public function getAccountIds()
    {
        return $this->container['account_ids'];
    }

    /**
     * Sets account_ids
     * @param \Swagger\Client\Model\AccountId[] $account_ids Account id list
     * @return $this
     */
    public function setAccountIds($account_ids)
    {
        $this->container['account_ids'] = $account_ids;

        return $this;
    }

    /**
     * Gets beez_up_order_statuses
     * @return \Swagger\Client\Model\BeezUPOrderStatus[]
     */
    public function getBeezUpOrderStatuses()
    {
        return $this->container['beez_up_order_statuses'];
    }

    /**
     * Sets beez_up_order_statuses
     * @param \Swagger\Client\Model\BeezUPOrderStatus[] $beez_up_order_statuses
     * @return $this
     */
    public function setBeezUpOrderStatuses($beez_up_order_statuses)
    {
        $this->container['beez_up_order_statuses'] = $beez_up_order_statuses;

        return $this;
    }

    /**
     * Gets date_search_type
     * @return \Swagger\Client\Model\DateSearchType
     */
    public function getDateSearchType()
    {
        return $this->container['date_search_type'];
    }

    /**
     * Sets date_search_type
     * @param \Swagger\Client\Model\DateSearchType $date_search_type
     * @return $this
     */
    public function setDateSearchType($date_search_type)
    {
        $this->container['date_search_type'] = $date_search_type;

        return $this;
    }

    /**
     * Gets begin_period_utc_date
     * @return \DateTime
     */
    public function getBeginPeriodUtcDate()
    {
        return $this->container['begin_period_utc_date'];
    }

    /**
     * Sets begin_period_utc_date
     * @param \DateTime $begin_period_utc_date The begin period you want to make the search. The period MUST not be greater than 30 days. If null, the current date minus 30 days will be used.
     * @return $this
     */
    public function setBeginPeriodUtcDate($begin_period_utc_date)
    {
        $this->container['begin_period_utc_date'] = $begin_period_utc_date;

        return $this;
    }

    /**
     * Gets end_period_utc_date
     * @return \DateTime
     */
    public function getEndPeriodUtcDate()
    {
        return $this->container['end_period_utc_date'];
    }

    /**
     * Sets end_period_utc_date
     * @param \DateTime $end_period_utc_date The end period of you search. The period MUST not be greater than 30 days. If null the current date will be used.
     * @return $this
     */
    public function setEndPeriodUtcDate($end_period_utc_date)
    {
        $this->container['end_period_utc_date'] = $end_period_utc_date;

        return $this;
    }

    /**
     * Gets order_buyer_name
     * @return \Swagger\Client\Model\OrderBuyerName
     */
    public function getOrderBuyerName()
    {
        return $this->container['order_buyer_name'];
    }

    /**
     * Sets order_buyer_name
     * @param \Swagger\Client\Model\OrderBuyerName $order_buyer_name
     * @return $this
     */
    public function setOrderBuyerName($order_buyer_name)
    {
        $this->container['order_buyer_name'] = $order_buyer_name;

        return $this;
    }

    /**
     * Gets marketplace_order_ids
     * @return \Swagger\Client\Model\MarketplaceOrderId[]
     */
    public function getMarketplaceOrderIds()
    {
        return $this->container['marketplace_order_ids'];
    }

    /**
     * Sets marketplace_order_ids
     * @param \Swagger\Client\Model\MarketplaceOrderId[] $marketplace_order_ids
     * @return $this
     */
    public function setMarketplaceOrderIds($marketplace_order_ids)
    {
        $this->container['marketplace_order_ids'] = $marketplace_order_ids;

        return $this;
    }

    /**
     * Gets order_merchant_order_ids
     * @return \Swagger\Client\Model\OrderMerchantOrderId[]
     */
    public function getOrderMerchantOrderIds()
    {
        return $this->container['order_merchant_order_ids'];
    }

    /**
     * Sets order_merchant_order_ids
     * @param \Swagger\Client\Model\OrderMerchantOrderId[] $order_merchant_order_ids Merchant order id list
     * @return $this
     */
    public function setOrderMerchantOrderIds($order_merchant_order_ids)
    {
        $this->container['order_merchant_order_ids'] = $order_merchant_order_ids;

        return $this;
    }

    /**
     * Gets page_size
     * @return \Swagger\Client\Model\PageSize
     */
    public function getPageSize()
    {
        return $this->container['page_size'];
    }

    /**
     * Sets page_size
     * @param \Swagger\Client\Model\PageSize $page_size
     * @return $this
     */
    public function setPageSize($page_size)
    {
        $this->container['page_size'] = $page_size;

        return $this;
    }

    /**
     * Gets page_number
     * @return \Swagger\Client\Model\PageNumber
     */
    public function getPageNumber()
    {
        return $this->container['page_number'];
    }

    /**
     * Sets page_number
     * @param \Swagger\Client\Model\PageNumber $page_number
     * @return $this
     */
    public function setPageNumber($page_number)
    {
        $this->container['page_number'] = $page_number;

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


