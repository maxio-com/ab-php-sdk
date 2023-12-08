<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class PaymentResponse implements \JsonSerializable
{
    /**
     * @var Payment[]|null
     */
    private $paidInvoices;

    /**
     * @var InvoicePrePayment|null
     */
    private $prepayment;

    /**
     * Returns Paid Invoices.
     *
     * @return Payment[]|null
     */
    public function getPaidInvoices(): ?array
    {
        return $this->paidInvoices;
    }

    /**
     * Sets Paid Invoices.
     *
     * @maps paid_invoices
     *
     * @param Payment[]|null $paidInvoices
     */
    public function setPaidInvoices(?array $paidInvoices): void
    {
        $this->paidInvoices = $paidInvoices;
    }

    /**
     * Returns Prepayment.
     */
    public function getPrepayment(): ?InvoicePrePayment
    {
        return $this->prepayment;
    }

    /**
     * Sets Prepayment.
     *
     * @maps prepayment
     */
    public function setPrepayment(?InvoicePrePayment $prepayment): void
    {
        $this->prepayment = $prepayment;
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
        if (isset($this->paidInvoices)) {
            $json['paid_invoices'] = $this->paidInvoices;
        }
        if (isset($this->prepayment)) {
            $json['prepayment']    = $this->prepayment;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
