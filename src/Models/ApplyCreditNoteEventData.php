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
 * Example schema for an `apply_credit_note` event
 */
class ApplyCreditNoteEventData implements \JsonSerializable
{
    /**
     * @var string
     */
    private $uid;

    /**
     * @var string
     */
    private $creditNoteNumber;

    /**
     * @var string
     */
    private $creditNoteUid;

    /**
     * @var string
     */
    private $originalAmount;

    /**
     * @var string
     */
    private $appliedAmount;

    /**
     * @var \DateTime|null
     */
    private $transactionTime;

    /**
     * @var string|null
     */
    private $memo;

    /**
     * @var string|null
     */
    private $role;

    /**
     * @var bool|null
     */
    private $consolidatedInvoice;

    /**
     * @var AppliedCreditNoteData[]|null
     */
    private $appliedCreditNotes;

    /**
     * @param string $uid
     * @param string $creditNoteNumber
     * @param string $creditNoteUid
     * @param string $originalAmount
     * @param string $appliedAmount
     */
    public function __construct(
        string $uid,
        string $creditNoteNumber,
        string $creditNoteUid,
        string $originalAmount,
        string $appliedAmount
    ) {
        $this->uid = $uid;
        $this->creditNoteNumber = $creditNoteNumber;
        $this->creditNoteUid = $creditNoteUid;
        $this->originalAmount = $originalAmount;
        $this->appliedAmount = $appliedAmount;
    }

    /**
     * Returns Uid.
     * Unique identifier for the credit note application. It is generated automatically by Chargify and has
     * the prefix "cdt_" followed by alphanumeric characters.
     */
    public function getUid(): string
    {
        return $this->uid;
    }

    /**
     * Sets Uid.
     * Unique identifier for the credit note application. It is generated automatically by Chargify and has
     * the prefix "cdt_" followed by alphanumeric characters.
     *
     * @required
     * @maps uid
     */
    public function setUid(string $uid): void
    {
        $this->uid = $uid;
    }

    /**
     * Returns Credit Note Number.
     * A unique, identifying string that appears on the credit note and in places it is referenced.
     */
    public function getCreditNoteNumber(): string
    {
        return $this->creditNoteNumber;
    }

    /**
     * Sets Credit Note Number.
     * A unique, identifying string that appears on the credit note and in places it is referenced.
     *
     * @required
     * @maps credit_note_number
     */
    public function setCreditNoteNumber(string $creditNoteNumber): void
    {
        $this->creditNoteNumber = $creditNoteNumber;
    }

    /**
     * Returns Credit Note Uid.
     * Unique identifier for the credit note. It is generated automatically by Chargify and has the prefix
     * "cn_" followed by alphanumeric characters.
     */
    public function getCreditNoteUid(): string
    {
        return $this->creditNoteUid;
    }

    /**
     * Sets Credit Note Uid.
     * Unique identifier for the credit note. It is generated automatically by Chargify and has the prefix
     * "cn_" followed by alphanumeric characters.
     *
     * @required
     * @maps credit_note_uid
     */
    public function setCreditNoteUid(string $creditNoteUid): void
    {
        $this->creditNoteUid = $creditNoteUid;
    }

    /**
     * Returns Original Amount.
     * The full, original amount of the credit note.
     */
    public function getOriginalAmount(): string
    {
        return $this->originalAmount;
    }

    /**
     * Sets Original Amount.
     * The full, original amount of the credit note.
     *
     * @required
     * @maps original_amount
     */
    public function setOriginalAmount(string $originalAmount): void
    {
        $this->originalAmount = $originalAmount;
    }

    /**
     * Returns Applied Amount.
     * The amount of the credit note applied to invoice.
     */
    public function getAppliedAmount(): string
    {
        return $this->appliedAmount;
    }

    /**
     * Sets Applied Amount.
     * The amount of the credit note applied to invoice.
     *
     * @required
     * @maps applied_amount
     */
    public function setAppliedAmount(string $appliedAmount): void
    {
        $this->appliedAmount = $appliedAmount;
    }

    /**
     * Returns Transaction Time.
     * The time the credit note was applied, in ISO 8601 format, i.e. "2019-06-07T17:20:06Z"
     */
    public function getTransactionTime(): ?\DateTime
    {
        return $this->transactionTime;
    }

    /**
     * Sets Transaction Time.
     * The time the credit note was applied, in ISO 8601 format, i.e. "2019-06-07T17:20:06Z"
     *
     * @maps transaction_time
     * @factory \AdvancedBillingLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setTransactionTime(?\DateTime $transactionTime): void
    {
        $this->transactionTime = $transactionTime;
    }

    /**
     * Returns Memo.
     * The credit note memo.
     */
    public function getMemo(): ?string
    {
        return $this->memo;
    }

    /**
     * Sets Memo.
     * The credit note memo.
     *
     * @maps memo
     */
    public function setMemo(?string $memo): void
    {
        $this->memo = $memo;
    }

    /**
     * Returns Role.
     * The role of the credit note (e.g. 'general')
     */
    public function getRole(): ?string
    {
        return $this->role;
    }

    /**
     * Sets Role.
     * The role of the credit note (e.g. 'general')
     *
     * @maps role
     */
    public function setRole(?string $role): void
    {
        $this->role = $role;
    }

    /**
     * Returns Consolidated Invoice.
     * Shows whether it was applied to consolidated invoice or not
     */
    public function getConsolidatedInvoice(): ?bool
    {
        return $this->consolidatedInvoice;
    }

    /**
     * Sets Consolidated Invoice.
     * Shows whether it was applied to consolidated invoice or not
     *
     * @maps consolidated_invoice
     */
    public function setConsolidatedInvoice(?bool $consolidatedInvoice): void
    {
        $this->consolidatedInvoice = $consolidatedInvoice;
    }

    /**
     * Returns Applied Credit Notes.
     * List of credit notes applied to children invoices (if consolidated invoice)
     *
     * @return AppliedCreditNoteData[]|null
     */
    public function getAppliedCreditNotes(): ?array
    {
        return $this->appliedCreditNotes;
    }

    /**
     * Sets Applied Credit Notes.
     * List of credit notes applied to children invoices (if consolidated invoice)
     *
     * @maps applied_credit_notes
     *
     * @param AppliedCreditNoteData[]|null $appliedCreditNotes
     */
    public function setAppliedCreditNotes(?array $appliedCreditNotes): void
    {
        $this->appliedCreditNotes = $appliedCreditNotes;
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
        $json['uid']                      = $this->uid;
        $json['credit_note_number']       = $this->creditNoteNumber;
        $json['credit_note_uid']          = $this->creditNoteUid;
        $json['original_amount']          = $this->originalAmount;
        $json['applied_amount']           = $this->appliedAmount;
        if (isset($this->transactionTime)) {
            $json['transaction_time']     = DateTimeHelper::toRfc3339DateTime($this->transactionTime);
        }
        if (isset($this->memo)) {
            $json['memo']                 = $this->memo;
        }
        if (isset($this->role)) {
            $json['role']                 = $this->role;
        }
        if (isset($this->consolidatedInvoice)) {
            $json['consolidated_invoice'] = $this->consolidatedInvoice;
        }
        if (isset($this->appliedCreditNotes)) {
            $json['applied_credit_notes'] = $this->appliedCreditNotes;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
