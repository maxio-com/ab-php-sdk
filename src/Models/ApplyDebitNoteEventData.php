<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

/**
 * Example schema for an `apply_debit_note` event
 */
class ApplyDebitNoteEventData implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $debitNoteNumber;

    /**
     * @var string|null
     */
    private $debitNoteUid;

    /**
     * @var string|null
     */
    private $originalAmount;

    /**
     * @var string|null
     */
    private $appliedAmount;

    /**
     * Returns Debit Note Number.
     * A unique, identifying string that appears on the debit note and in places it is referenced.
     */
    public function getDebitNoteNumber(): ?string
    {
        return $this->debitNoteNumber;
    }

    /**
     * Sets Debit Note Number.
     * A unique, identifying string that appears on the debit note and in places it is referenced.
     *
     * @maps debit_note_number
     */
    public function setDebitNoteNumber(?string $debitNoteNumber): void
    {
        $this->debitNoteNumber = $debitNoteNumber;
    }

    /**
     * Returns Debit Note Uid.
     * Unique identifier for the debit note. It is generated automatically by Chargify and has the prefix
     * "db_" followed by alphanumeric characters.
     */
    public function getDebitNoteUid(): ?string
    {
        return $this->debitNoteUid;
    }

    /**
     * Sets Debit Note Uid.
     * Unique identifier for the debit note. It is generated automatically by Chargify and has the prefix
     * "db_" followed by alphanumeric characters.
     *
     * @maps debit_note_uid
     */
    public function setDebitNoteUid(?string $debitNoteUid): void
    {
        $this->debitNoteUid = $debitNoteUid;
    }

    /**
     * Returns Original Amount.
     * The full, original amount of the debit note.
     */
    public function getOriginalAmount(): ?string
    {
        return $this->originalAmount;
    }

    /**
     * Sets Original Amount.
     * The full, original amount of the debit note.
     *
     * @maps original_amount
     */
    public function setOriginalAmount(?string $originalAmount): void
    {
        $this->originalAmount = $originalAmount;
    }

    /**
     * Returns Applied Amount.
     * The amount of the debit note applied to invoice.
     */
    public function getAppliedAmount(): ?string
    {
        return $this->appliedAmount;
    }

    /**
     * Sets Applied Amount.
     * The amount of the debit note applied to invoice.
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
        if (isset($this->debitNoteNumber)) {
            $json['debit_note_number'] = $this->debitNoteNumber;
        }
        if (isset($this->debitNoteUid)) {
            $json['debit_note_uid']    = $this->debitNoteUid;
        }
        if (isset($this->originalAmount)) {
            $json['original_amount']   = $this->originalAmount;
        }
        if (isset($this->appliedAmount)) {
            $json['applied_amount']    = $this->appliedAmount;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
