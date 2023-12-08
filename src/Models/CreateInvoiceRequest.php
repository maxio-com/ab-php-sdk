<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class CreateInvoiceRequest implements \JsonSerializable
{
    /**
     * @var CreateInvoice
     */
    private $invoice;

    /**
     * @param CreateInvoice $invoice
     */
    public function __construct(CreateInvoice $invoice)
    {
        $this->invoice = $invoice;
    }

    /**
     * Returns Invoice.
     */
    public function getInvoice(): CreateInvoice
    {
        return $this->invoice;
    }

    /**
     * Sets Invoice.
     *
     * @required
     * @maps invoice
     */
    public function setInvoice(CreateInvoice $invoice): void
    {
        $this->invoice = $invoice;
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
        $json['invoice'] = $this->invoice;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
