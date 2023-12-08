<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class SubscriptionGroupSignupRequest implements \JsonSerializable
{
    /**
     * @var SubscriptionGroupSignup
     */
    private $subscriptionGroup;

    /**
     * @param SubscriptionGroupSignup $subscriptionGroup
     */
    public function __construct(SubscriptionGroupSignup $subscriptionGroup)
    {
        $this->subscriptionGroup = $subscriptionGroup;
    }

    /**
     * Returns Subscription Group.
     */
    public function getSubscriptionGroup(): SubscriptionGroupSignup
    {
        return $this->subscriptionGroup;
    }

    /**
     * Sets Subscription Group.
     *
     * @required
     * @maps subscription_group
     */
    public function setSubscriptionGroup(SubscriptionGroupSignup $subscriptionGroup): void
    {
        $this->subscriptionGroup = $subscriptionGroup;
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

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
