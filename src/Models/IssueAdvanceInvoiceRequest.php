<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class IssueAdvanceInvoiceRequest implements \JsonSerializable
{
    /**
     * @var bool|null
     */
    private $force;

    /**
     * Returns Force.
     */
    public function getForce(): ?bool
    {
        return $this->force;
    }

    /**
     * Sets Force.
     *
     * @maps force
     */
    public function setForce(?bool $force): void
    {
        $this->force = $force;
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
        if (isset($this->force)) {
            $json['force'] = $this->force;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
