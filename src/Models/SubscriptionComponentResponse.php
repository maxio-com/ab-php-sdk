<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class SubscriptionComponentResponse implements \JsonSerializable
{
    /**
     * @var SubscriptionComponent|null
     */
    private $component;

    /**
     * Returns Component.
     */
    public function getComponent(): ?SubscriptionComponent
    {
        return $this->component;
    }

    /**
     * Sets Component.
     *
     * @maps component
     */
    public function setComponent(?SubscriptionComponent $component): void
    {
        $this->component = $component;
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
        if (isset($this->component)) {
            $json['component'] = $this->component;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
