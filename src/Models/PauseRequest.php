<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

/**
 * Allows to pause a Subscription
 */
class PauseRequest implements \JsonSerializable
{
    /**
     * @var AutoResume|null
     */
    private $hold;

    /**
     * Returns Hold.
     */
    public function getHold(): ?AutoResume
    {
        return $this->hold;
    }

    /**
     * Sets Hold.
     *
     * @maps hold
     */
    public function setHold(?AutoResume $hold): void
    {
        $this->hold = $hold;
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
        if (isset($this->hold)) {
            $json['hold'] = $this->hold;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
