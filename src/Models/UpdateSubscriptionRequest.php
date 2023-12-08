<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class UpdateSubscriptionRequest implements \JsonSerializable
{
    /**
     * @var UpdateSubscription
     */
    private $subscription;

    /**
     * @param UpdateSubscription $subscription
     */
    public function __construct(UpdateSubscription $subscription)
    {
        $this->subscription = $subscription;
    }

    /**
     * Returns Subscription.
     */
    public function getSubscription(): UpdateSubscription
    {
        return $this->subscription;
    }

    /**
     * Sets Subscription.
     *
     * @required
     * @maps subscription
     */
    public function setSubscription(UpdateSubscription $subscription): void
    {
        $this->subscription = $subscription;
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

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
