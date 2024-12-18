<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class ListProductsFilter implements \JsonSerializable
{
    /**
     * @var int[]|null
     */
    private $ids;

    /**
     * @var PrepaidProductPricePointFilter|null
     */
    private $prepaidProductPricePoint;

    /**
     * @var bool|null
     */
    private $useSiteExchangeRate;

    /**
     * Returns Ids.
     * Allows fetching products with matching id based on provided values. Use in query `filter[ids]=1,2,3`.
     *
     * @return int[]|null
     */
    public function getIds(): ?array
    {
        return $this->ids;
    }

    /**
     * Sets Ids.
     * Allows fetching products with matching id based on provided values. Use in query `filter[ids]=1,2,3`.
     *
     * @maps ids
     *
     * @param int[]|null $ids
     */
    public function setIds(?array $ids): void
    {
        $this->ids = $ids;
    }

    /**
     * Returns Prepaid Product Price Point.
     * Allows fetching products only if a prepaid product price point is present or not. To use this filter
     * you also have to include the following param in the request `include=prepaid_product_price_point`.
     * Use in query `filter[prepaid_product_price_point][product_price_point_id]=not_null`.
     */
    public function getPrepaidProductPricePoint(): ?PrepaidProductPricePointFilter
    {
        return $this->prepaidProductPricePoint;
    }

    /**
     * Sets Prepaid Product Price Point.
     * Allows fetching products only if a prepaid product price point is present or not. To use this filter
     * you also have to include the following param in the request `include=prepaid_product_price_point`.
     * Use in query `filter[prepaid_product_price_point][product_price_point_id]=not_null`.
     *
     * @maps prepaid_product_price_point
     */
    public function setPrepaidProductPricePoint(?PrepaidProductPricePointFilter $prepaidProductPricePoint): void
    {
        $this->prepaidProductPricePoint = $prepaidProductPricePoint;
    }

    /**
     * Returns Use Site Exchange Rate.
     * Allows fetching products with matching use_site_exchange_rate based on provided value (refers to
     * default price point). Use in query `filter[use_site_exchange_rate]=true`.
     */
    public function getUseSiteExchangeRate(): ?bool
    {
        return $this->useSiteExchangeRate;
    }

    /**
     * Sets Use Site Exchange Rate.
     * Allows fetching products with matching use_site_exchange_rate based on provided value (refers to
     * default price point). Use in query `filter[use_site_exchange_rate]=true`.
     *
     * @maps use_site_exchange_rate
     */
    public function setUseSiteExchangeRate(?bool $useSiteExchangeRate): void
    {
        $this->useSiteExchangeRate = $useSiteExchangeRate;
    }

    private $additionalProperties = [];

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property.
     * @param mixed $value Value of property.
     */
    public function addAdditionalProperty(string $name, $value)
    {
        $this->additionalProperties[$name] = $value;
    }

    /**
     * Find an additional property by name in this model or false if property does not exist.
     *
     * @param string $name Name of property.
     *
     * @return mixed|false Value of the property.
     */
    public function findAdditionalProperty(string $name)
    {
        if (isset($this->additionalProperties[$name])) {
            return $this->additionalProperties[$name];
        }
        return false;
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        if (isset($this->ids)) {
            $json['ids']                         = $this->ids;
        }
        if (isset($this->prepaidProductPricePoint)) {
            $json['prepaid_product_price_point'] = $this->prepaidProductPricePoint;
        }
        if (isset($this->useSiteExchangeRate)) {
            $json['use_site_exchange_rate']      = $this->useSiteExchangeRate;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
