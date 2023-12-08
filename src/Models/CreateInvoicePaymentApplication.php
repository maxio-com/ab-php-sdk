<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class CreateInvoicePaymentApplication implements \JsonSerializable
{
    /**
     * @var string
     */
    private $invoiceUid;

    /**
     * @var string
     */
    private $amount;

    /**
     * @param string $invoiceUid
     * @param string $amount
     */
    public function __construct(string $invoiceUid, string $amount)
    {
        $this->invoiceUid = $invoiceUid;
        $this->amount = $amount;
    }

    /**
     * Returns Invoice Uid.
     * Unique identifier for the invoice. It has the prefix "inv_" followed by alphanumeric characters.
     */
    public function getInvoiceUid(): string
    {
        return $this->invoiceUid;
    }

    /**
     * Sets Invoice Uid.
     * Unique identifier for the invoice. It has the prefix "inv_" followed by alphanumeric characters.
     *
     * @required
     * @maps invoice_uid
     */
    public function setInvoiceUid(string $invoiceUid): void
    {
        $this->invoiceUid = $invoiceUid;
    }

    /**
     * Returns Amount.
     * Dollar amount of the invoice payment (eg. "10.50" => $10.50).
     */
    public function getAmount(): string
    {
        return $this->amount;
    }

    /**
     * Sets Amount.
     * Dollar amount of the invoice payment (eg. "10.50" => $10.50).
     *
     * @required
     * @maps amount
     */
    public function setAmount(string $amount): void
    {
        $this->amount = $amount;
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
        $json['invoice_uid'] = $this->invoiceUid;
        $json['amount']      = $this->amount;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
