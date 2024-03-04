<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class SubscriptionGroupSignupSuccess implements \JsonSerializable
{
    /**
     * @var SubscriptionGroupSignupSuccessData
     */
    private $subscriptionGroup;

    /**
     * @var Customer
     */
    private $customer;

    /**
     * @param SubscriptionGroupSignupSuccessData $subscriptionGroup
     * @param Customer $customer
     */
    public function __construct(SubscriptionGroupSignupSuccessData $subscriptionGroup, Customer $customer)
    {
        $this->subscriptionGroup = $subscriptionGroup;
        $this->customer = $customer;
    }

    /**
     * Returns Subscription Group.
     */
    public function getSubscriptionGroup(): SubscriptionGroupSignupSuccessData
    {
        return $this->subscriptionGroup;
    }

    /**
     * Sets Subscription Group.
     *
     * @required
     * @maps subscription_group
     */
    public function setSubscriptionGroup(SubscriptionGroupSignupSuccessData $subscriptionGroup): void
    {
        $this->subscriptionGroup = $subscriptionGroup;
    }

    /**
     * Returns Customer.
     */
    public function getCustomer(): Customer
    {
        return $this->customer;
    }

    /**
     * Sets Customer.
     *
     * @required
     * @maps customer
     */
    public function setCustomer(Customer $customer): void
    {
        $this->customer = $customer;
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
        $json['subscription_group'] = $this->subscriptionGroup;
        $json['customer']           = $this->customer;
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
