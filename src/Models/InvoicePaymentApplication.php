<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class InvoicePaymentApplication implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $invoiceUid;

    /**
     * @var string|null
     */
    private $applicationUid;

    /**
     * @var string|null
     */
    private $appliedAmount;

    /**
     * Returns Invoice Uid.
     * Unique identifier for the paid invoice. It has the prefix "inv_" followed by alphanumeric characters.
     */
    public function getInvoiceUid(): ?string
    {
        return $this->invoiceUid;
    }

    /**
     * Sets Invoice Uid.
     * Unique identifier for the paid invoice. It has the prefix "inv_" followed by alphanumeric characters.
     *
     * @maps invoice_uid
     */
    public function setInvoiceUid(?string $invoiceUid): void
    {
        $this->invoiceUid = $invoiceUid;
    }

    /**
     * Returns Application Uid.
     * Unique identifier for the payment. It has the prefix "pmt_" followed by alphanumeric characters.
     */
    public function getApplicationUid(): ?string
    {
        return $this->applicationUid;
    }

    /**
     * Sets Application Uid.
     * Unique identifier for the payment. It has the prefix "pmt_" followed by alphanumeric characters.
     *
     * @maps application_uid
     */
    public function setApplicationUid(?string $applicationUid): void
    {
        $this->applicationUid = $applicationUid;
    }

    /**
     * Returns Applied Amount.
     * Dollar amount of the paid invoice.
     */
    public function getAppliedAmount(): ?string
    {
        return $this->appliedAmount;
    }

    /**
     * Sets Applied Amount.
     * Dollar amount of the paid invoice.
     *
     * @maps applied_amount
     */
    public function setAppliedAmount(?string $appliedAmount): void
    {
        $this->appliedAmount = $appliedAmount;
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
        if (isset($this->invoiceUid)) {
            $json['invoice_uid']     = $this->invoiceUid;
        }
        if (isset($this->applicationUid)) {
            $json['application_uid'] = $this->applicationUid;
        }
        if (isset($this->appliedAmount)) {
            $json['applied_amount']  = $this->appliedAmount;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
