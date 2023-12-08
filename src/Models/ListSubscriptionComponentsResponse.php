<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class ListSubscriptionComponentsResponse implements \JsonSerializable
{
    /**
     * @var SubscriptionComponent[]
     */
    private $subscriptionsComponents;

    /**
     * @param SubscriptionComponent[] $subscriptionsComponents
     */
    public function __construct(array $subscriptionsComponents)
    {
        $this->subscriptionsComponents = $subscriptionsComponents;
    }

    /**
     * Returns Subscriptions Components.
     *
     * @return SubscriptionComponent[]
     */
    public function getSubscriptionsComponents(): array
    {
        return $this->subscriptionsComponents;
    }

    /**
     * Sets Subscriptions Components.
     *
     * @required
     * @maps subscriptions_components
     *
     * @param SubscriptionComponent[] $subscriptionsComponents
     */
    public function setSubscriptionsComponents(array $subscriptionsComponents): void
    {
        $this->subscriptionsComponents = $subscriptionsComponents;
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
        $json['subscriptions_components'] = $this->subscriptionsComponents;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
