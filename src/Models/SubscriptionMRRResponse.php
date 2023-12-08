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

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
