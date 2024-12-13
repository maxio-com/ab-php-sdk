<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class SubscriptionMRRResponse implements \JsonSerializable
{
    /**
     * @var SubscriptionMRR[]
     */
    private $subscriptionsMrr;

    /**
     * @param SubscriptionMRR[] $subscriptionsMrr
     */
    public function __construct(array $subscriptionsMrr)
    {
        $this->subscriptionsMrr = $subscriptionsMrr;
    }

    /**
     * Returns Subscriptions Mrr.
     *
     * @return SubscriptionMRR[]
     */
    public function getSubscriptionsMrr(): array
    {
        return $this->subscriptionsMrr;
    }

    /**
     * Sets Subscriptions Mrr.
     *
     * @required
     * @maps subscriptions_mrr
     *
     * @param SubscriptionMRR[] $subscriptionsMrr
     */
    public function setSubscriptionsMrr(array $subscriptionsMrr): void
    {
        $this->subscriptionsMrr = $subscriptionsMrr;
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
        $json['subscriptions_mrr'] = $this->subscriptionsMrr;
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
