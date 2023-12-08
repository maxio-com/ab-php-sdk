<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class InvoicePreviousBalance implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $captureDate;

    /**
     * @var InvoiceBalanceItem[]|null
     */
    private $invoices;

    /**
     * Returns Capture Date.
     */
    public function getCaptureDate(): ?string
    {
        return $this->captureDate;
    }

    /**
     * Sets Capture Date.
     *
     * @maps capture_date
     */
    public function setCaptureDate(?string $captureDate): void
    {
        $this->captureDate = $captureDate;
    }

    /**
     * Returns Invoices.
     *
     * @return InvoiceBalanceItem[]|null
     */
    public function getInvoices(): ?array
    {
        return $this->invoices;
    }

    /**
     * Sets Invoices.
     *
     * @maps invoices
     *
     * @param InvoiceBalanceItem[]|null $invoices
     */
    public function setInvoices(?array $invoices): void
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
        if (isset($this->captureDate)) {
            $json['capture_date'] = $this->captureDate;
        }
        if (isset($this->invoices)) {
            $json['invoices']     = $this->invoices;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
