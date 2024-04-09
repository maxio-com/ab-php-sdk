<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class ListSubscriptionComponentsForSiteFilter implements \JsonSerializable
{
    /**
     * @var string[]|null
     */
    private $currencies;

    /**
     * @var bool|null
     */
    private $useSiteExchangeRate;

    /**
     * @var SubscriptionFilter|null
     */
    private $subscription;

    /**
     * Returns Currencies.
     * Allows fetching components allocation with matching currency based on provided values. Use in query
     * `filter[currencies]=USD,EUR`.
     *
     * @return string[]|null
     */
    public function getCurrencies(): ?array
    {
        return $this->currencies;
    }

    /**
     * Sets Currencies.
     * Allows fetching components allocation with matching currency based on provided values. Use in query
     * `filter[currencies]=USD,EUR`.
     *
     * @maps currencies
     *
     * @param string[]|null $currencies
     */
    public function setCurrencies(?array $currencies): void
    {
        $this->currencies = $currencies;
    }

    /**
     * Returns Use Site Exchange Rate.
     * Allows fetching components allocation with matching use_site_exchange_rate based on provided value.
     * Use in query `filter[use_site_exchange_rate]=true`.
     */
    public function getUseSiteExchangeRate(): ?bool
    {
        return $this->useSiteExchangeRate;
    }

    /**
     * Sets Use Site Exchange Rate.
     * Allows fetching components allocation with matching use_site_exchange_rate based on provided value.
     * Use in query `filter[use_site_exchange_rate]=true`.
     *
     * @maps use_site_exchange_rate
     */
    public function setUseSiteExchangeRate(?bool $useSiteExchangeRate): void
    {
        $this->useSiteExchangeRate = $useSiteExchangeRate;
    }

    /**
     * Returns Subscription.
     * Nested filter used for List Subscription Components For Site Filter
     */
    public function getSubscription(): ?SubscriptionFilter
    {
        return $this->subscription;
    }

    /**
     * Sets Subscription.
     * Nested filter used for List Subscription Components For Site Filter
     *
     * @maps subscription
     */
    public function setSubscription(?SubscriptionFilter $subscription): void
    {
        $this->subscription = $subscription;
    }

    private $additionalProperties = [];

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property
     * @param mixed $value Value of property
     */
    public function addAdditionalProperty(string $name, $value)
    {
        $this->additionalProperties[$name] = $value;
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
        if (isset($this->currencies)) {
            $json['currencies']             = $this->currencies;
        }
        if (isset($this->useSiteExchangeRate)) {
            $json['use_site_exchange_rate'] = $this->useSiteExchangeRate;
        }
        if (isset($this->subscription)) {
            $json['subscription']           = $this->subscription;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
