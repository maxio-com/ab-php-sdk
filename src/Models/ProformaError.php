<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class ProformaError implements \JsonSerializable
{
    /**
     * @var BaseStringError|null
     */
    private $subscription;

    /**
     * Returns Subscription.
     * The error is base if it is not directly associated with a single attribute.
     */
    public function getSubscription(): ?BaseStringError
    {
        return $this->subscription;
    }

    /**
     * Sets Subscription.
     * The error is base if it is not directly associated with a single attribute.
     *
     * @maps subscription
     */
    public function setSubscription(?BaseStringError $subscription): void
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
        if (isset($this->subscription)) {
            $json['subscription'] = $this->subscription;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
