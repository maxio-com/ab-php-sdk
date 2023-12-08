<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use AdvancedBillingLib\Utils\DateTimeHelper;
use stdClass;

/**
 * Example schema for an `void_invoice` event
 */
class VoidInvoiceEventData implements \JsonSerializable
{
    /**
     * @var CreditNote|null
     */
    private $creditNoteAttributes;

    /**
     * @var string|null
     */
    private $memo;

    /**
     * @var string|null
     */
    private $appliedAmount;

    /**
     * @var \DateTime|null
     */
    private $transactionTime;

    /**
     * @var bool|null
     */
    private $isAdvanceInvoice;

    /**
     * Returns Credit Note Attributes.
     */
    public function getCreditNoteAttributes(): ?CreditNote
    {
        return $this->creditNoteAttributes;
    }

    /**
     * Sets Credit Note Attributes.
     *
     * @maps credit_note_attributes
     */
    public function setCreditNoteAttributes(?CreditNote $creditNoteAttributes): void
    {
        $this->creditNoteAttributes = $creditNoteAttributes;
    }

    /**
     * Returns Memo.
     * The memo provided during invoice voiding.
     */
    public function getMemo(): ?string
    {
        return $this->memo;
    }

    /**
     * Sets Memo.
     * The memo provided during invoice voiding.
     *
     * @maps memo
     */
    public function setMemo(?string $memo): void
    {
        $this->memo = $memo;
    }

    /**
     * Returns Applied Amount.
     * The amount of the void.
     */
    public function getAppliedAmount(): ?string
    {
        return $this->appliedAmount;
    }

    /**
     * Sets Applied Amount.
     * The amount of the void.
     *
     * @maps applied_amount
     */
    public function setAppliedAmount(?string $appliedAmount): void
    {
        $this->appliedAmount = $appliedAmount;
    }

    /**
     * Returns Transaction Time.
     * The time the refund was applied, in ISO 8601 format, i.e. "2019-06-07T17:20:06Z"
     */
    public function getTransactionTime(): ?\DateTime
    {
        return $this->transactionTime;
    }

    /**
     * Sets Transaction Time.
     * The time the refund was applied, in ISO 8601 format, i.e. "2019-06-07T17:20:06Z"
     *
     * @maps transaction_time
     * @factory \AdvancedBillingLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setTransactionTime(?\DateTime $transactionTime): void
    {
        $this->transactionTime = $transactionTime;
    }

    /**
     * Returns Is Advance Invoice.
     * If true, the invoice is an advance invoice.
     */
    public function getIsAdvanceInvoice(): ?bool
    {
        return $this->isAdvanceInvoice;
    }

    /**
     * Sets Is Advance Invoice.
     * If true, the invoice is an advance invoice.
     *
     * @maps is_advance_invoice
     */
    public function setIsAdvanceInvoice(?bool $isAdvanceInvoice): void
    {
        $this->isAdvanceInvoice = $isAdvanceInvoice;
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
        if (isset($this->creditNoteAttributes)) {
            $json['credit_note_attributes'] = $this->creditNoteAttributes;
        }
        if (isset($this->memo)) {
            $json['memo']                   = $this->memo;
        }
        if (isset($this->appliedAmount)) {
            $json['applied_amount']         = $this->appliedAmount;
        }
        if (isset($this->transactionTime)) {
            $json['transaction_time']       = DateTimeHelper::toRfc3339DateTime($this->transactionTime);
        }
        if (isset($this->isAdvanceInvoice)) {
            $json['is_advance_invoice']     = $this->isAdvanceInvoice;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
