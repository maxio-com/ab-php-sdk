<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class Payment implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $invoiceUid;

    /**
     * @var string|null
     */
    private $status;

    /**
     * @var string|null
     */
    private $dueAmount;

    /**
     * @var string|null
     */
    private $paidAmount;

    /**
     * Returns Invoice Uid.
     * The uid of the paid invoice
     */
    public function getInvoiceUid(): ?string
    {
        return $this->invoiceUid;
    }

    /**
     * Sets Invoice Uid.
     * The uid of the paid invoice
     *
     * @maps invoice_uid
     */
    public function setInvoiceUid(?string $invoiceUid): void
    {
        $this->invoiceUid = $invoiceUid;
    }

    /**
     * Returns Status.
     * The current status of the invoice. See [Invoice Statuses](https://chargify.zendesk.com/hc/en-
     * us/articles/4407737494171#line-item-breakdowns) for more.
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Sets Status.
     * The current status of the invoice. See [Invoice Statuses](https://chargify.zendesk.com/hc/en-
     * us/articles/4407737494171#line-item-breakdowns) for more.
     *
     * @maps status
     * @factory \AdvancedBillingLib\Models\Status::checkValue
     */
    public function setStatus(?string $status): void
    {
        $this->status = $status;
    }

    /**
     * Returns Due Amount.
     * The remaining due amount on the invoice
     */
    public function getDueAmount(): ?string
    {
        return $this->dueAmount;
    }

    /**
     * Sets Due Amount.
     * The remaining due amount on the invoice
     *
     * @maps due_amount
     */
    public function setDueAmount(?string $dueAmount): void
    {
        $this->dueAmount = $dueAmount;
    }

    /**
     * Returns Paid Amount.
     * The total amount paid on this invoice (including any prior payments)
     */
    public function getPaidAmount(): ?string
    {
        return $this->paidAmount;
    }

    /**
     * Sets Paid Amount.
     * The total amount paid on this invoice (including any prior payments)
     *
     * @maps paid_amount
     */
    public function setPaidAmount(?string $paidAmount): void
    {
        $this->paidAmount = $paidAmount;
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
            $json['invoice_uid'] = $this->invoiceUid;
        }
        if (isset($this->status)) {
            $json['status']      = Status::checkValue($this->status);
        }
        if (isset($this->dueAmount)) {
            $json['due_amount']  = $this->dueAmount;
        }
        if (isset($this->paidAmount)) {
            $json['paid_amount'] = $this->paidAmount;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
