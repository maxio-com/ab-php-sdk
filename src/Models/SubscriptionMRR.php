<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class SubscriptionMRR implements \JsonSerializable
{
    /**
     * @var int
     */
    private $subscriptionId;

    /**
     * @var int
     */
    private $mrrAmountInCents;

    /**
     * @var SubscriptionMRRBreakout|null
     */
    private $breakouts;

    /**
     * @param int $subscriptionId
     * @param int $mrrAmountInCents
     */
    public function __construct(int $subscriptionId, int $mrrAmountInCents)
    {
        $this->subscriptionId = $subscriptionId;
        $this->mrrAmountInCents = $mrrAmountInCents;
    }

    /**
     * Returns Subscription Id.
     */
    public function getSubscriptionId(): int
    {
        return $this->subscriptionId;
    }

    /**
     * Sets Subscription Id.
     *
     * @required
     * @maps subscription_id
     */
    public function setSubscriptionId(int $subscriptionId): void
    {
        $this->subscriptionId = $subscriptionId;
    }

    /**
     * Returns Mrr Amount in Cents.
     */
    public function getMrrAmountInCents(): int
    {
        return $this->mrrAmountInCents;
    }

    /**
     * Sets Mrr Amount in Cents.
     *
     * @required
     * @maps mrr_amount_in_cents
     */
    public function setMrrAmountInCents(int $mrrAmountInCents): void
    {
        $this->mrrAmountInCents = $mrrAmountInCents;
    }

    /**
     * Returns Breakouts.
     */
    public function getBreakouts(): ?SubscriptionMRRBreakout
    {
        return $this->breakouts;
    }

    /**
     * Sets Breakouts.
     *
     * @maps breakouts
     */
    public function setBreakouts(?SubscriptionMRRBreakout $breakouts): void
    {
        $this->breakouts = $breakouts;
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
        $json['subscription_id']     = $this->subscriptionId;
        $json['mrr_amount_in_cents'] = $this->mrrAmountInCents;
        if (isset($this->breakouts)) {
            $json['breakouts']       = $this->breakouts;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
