<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class CreateSubscriptionRequest implements \JsonSerializable
{
    /**
     * @var CreateSubscription
     */
    private $subscription;

    /**
     * @param CreateSubscription $subscription
     */
    public function __construct(CreateSubscription $subscription)
    {
        $this->subscription = $subscription;
    }

    /**
     * Returns Subscription.
     */
    public function getSubscription(): CreateSubscription
    {
        return $this->subscription;
    }

    /**
     * Sets Subscription.
     *
     * @required
     * @maps subscription
     */
    public function setSubscription(CreateSubscription $subscription): void
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
        $json['subscription'] = $this->subscription;
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
