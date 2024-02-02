<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class CustomerCustomFieldsChange implements \JsonSerializable
{
    /**
     * @var InvoiceCustomField[]
     */
    private $before;

    /**
     * @var InvoiceCustomField[]
     */
    private $after;

    /**
     * @param InvoiceCustomField[] $before
     * @param InvoiceCustomField[] $after
     */
    public function __construct(array $before, array $after)
    {
        $this->before = $before;
        $this->after = $after;
    }

    /**
     * Returns Before.
     *
     * @return InvoiceCustomField[]
     */
    public function getBefore(): array
    {
        return $this->before;
    }

    /**
     * Sets Before.
     *
     * @required
     * @maps before
     *
     * @param InvoiceCustomField[] $before
     */
    public function setBefore(array $before): void
    {
        $this->before = $before;
    }

    /**
     * Returns After.
     *
     * @return InvoiceCustomField[]
     */
    public function getAfter(): array
    {
        return $this->after;
    }

    /**
     * Sets After.
     *
     * @required
     * @maps after
     *
     * @param InvoiceCustomField[] $after
     */
    public function setAfter(array $after): void
    {
        $this->after = $after;
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
        $json['before'] = $this->before;
        $json['after']  = $this->after;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
