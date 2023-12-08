<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class SubscriptionStateChange implements \JsonSerializable
{
    /**
     * @var string
     */
    private $previousSubscriptionState;

    /**
     * @var string
     */
    private $newSubscriptionState;

    /**
     * @param string $previousSubscriptionState
     * @param string $newSubscriptionState
     */
    public function __construct(string $previousSubscriptionState, string $newSubscriptionState)
    {
        $this->previousSubscriptionState = $previousSubscriptionState;
        $this->newSubscriptionState = $newSubscriptionState;
    }

    /**
     * Returns Previous Subscription State.
     */
    public function getPreviousSubscriptionState(): string
    {
        return $this->previousSubscriptionState;
    }

    /**
     * Sets Previous Subscription State.
     *
     * @required
     * @maps previous_subscription_state
     */
    public function setPreviousSubscriptionState(string $previousSubscriptionState): void
    {
        $this->previousSubscriptionState = $previousSubscriptionState;
    }

    /**
     * Returns New Subscription State.
     */
    public function getNewSubscriptionState(): string
    {
        return $this->newSubscriptionState;
    }

    /**
     * Sets New Subscription State.
     *
     * @required
     * @maps new_subscription_state
     */
    public function setNewSubscriptionState(string $newSubscriptionState): void
    {
        $this->newSubscriptionState = $newSubscriptionState;
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
        $json['previous_subscription_state'] = $this->previousSubscriptionState;
        $json['new_subscription_state']      = $this->newSubscriptionState;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
