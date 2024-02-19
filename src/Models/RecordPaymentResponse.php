<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use AdvancedBillingLib\ApiHelper;
use stdClass;

class RecordPaymentResponse implements \JsonSerializable
{
    /**
     * @var PaidInvoice[]|null
     */
    private $paidInvoices;

    /**
     * @var array
     */
    private $prepayment = [];

    /**
     * Returns Paid Invoices.
     *
     * @return PaidInvoice[]|null
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
     * @param PaidInvoice[]|null $paidInvoices
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
        if (count($this->prepayment) == 0) {
            return null;
        }
        return $this->prepayment['value'];
    }

    /**
     * Sets Prepayment.
     *
     * @maps prepayment
     * @mapsBy anyOf(oneOf(InvoicePrePayment),null)
     */
    public function setPrepayment(?InvoicePrePayment $prepayment): void
    {
        $this->prepayment['value'] = $prepayment;
    }

    /**
     * Unsets Prepayment.
     */
    public function unsetPrepayment(): void
    {
        $this->prepayment = [];
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
        if (!empty($this->prepayment)) {
            $json['prepayment']    =
                ApiHelper::getJsonHelper()->verifyTypes(
                    $this->prepayment['value'],
                    'anyOf(oneOf(InvoicePrePayment),null)'
                );
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
