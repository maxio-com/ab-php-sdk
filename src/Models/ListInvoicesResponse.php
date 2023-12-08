<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class ListInvoicesResponse implements \JsonSerializable
{
    /**
     * @var Invoice[]
     */
    private $invoices;

    /**
     * @param Invoice[] $invoices
     */
    public function __construct(array $invoices)
    {
        $this->invoices = $invoices;
    }

    /**
     * Returns Invoices.
     *
     * @return Invoice[]
     */
    public function getInvoices(): array
    {
        return $this->invoices;
    }

    /**
     * Sets Invoices.
     *
     * @required
     * @maps invoices
     *
     * @param Invoice[] $invoices
     */
    public function setInvoices(array $invoices): void
    {
        $this->invoices = $invoices;
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
        $json['invoices'] = $this->invoices;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
