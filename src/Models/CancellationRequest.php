<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class CancellationRequest implements \JsonSerializable
{
    /**
     * @var CancellationOptions
     */
    private $subscription;

    /**
     * @param CancellationOptions $subscription
     */
    public function __construct(CancellationOptions $subscription)
    {
        $this->subscription = $subscription;
    }

    /**
     * Returns Subscription.
     */
    public function getSubscription(): CancellationOptions
    {
        return $this->subscription;
    }

    /**
     * Sets Subscription.
     *
     * @required
     * @maps subscription
     */
    public function setSubscription(CancellationOptions $subscription): void
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
