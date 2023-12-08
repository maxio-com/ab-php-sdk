<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class CustomerChangesPreviewResponse implements \JsonSerializable
{
    /**
     * @var CustomerChange
     */
    private $changes;

    /**
     * @param CustomerChange $changes
     */
    public function __construct(CustomerChange $changes)
    {
        $this->changes = $changes;
    }

    /**
     * Returns Changes.
     */
    public function getChanges(): CustomerChange
    {
        return $this->changes;
    }

    /**
     * Sets Changes.
     *
     * @required
     * @maps changes
     */
    public function setChanges(CustomerChange $changes): void
    {
        $this->changes = $changes;
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
        $json['changes'] = $this->changes;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
