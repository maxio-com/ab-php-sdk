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
     * @var string
     */
    private $debitNoteNumber;

    /**
     * @var string
     */
    private $debitNoteUid;

    /**
     * @var string
     */
    private $originalAmount;

    /**
     * @var string
     */
    private $appliedAmount;

    /**
     * @param string $debitNoteNumber
     * @param string $debitNoteUid
     * @param string $originalAmount
     * @param string $appliedAmount
     */
    public function __construct(
        string $debitNoteNumber,
        string $debitNoteUid,
        string $originalAmount,
        string $appliedAmount
    ) {
        $this->debitNoteNumber = $debitNoteNumber;
        $this->debitNoteUid = $debitNoteUid;
        $this->originalAmount = $originalAmount;
        $this->appliedAmount = $appliedAmount;
    }

    /**
     * Returns Debit Note Number.
     * A unique, identifying string that appears on the debit note and in places it is referenced.
     */
    public function getDebitNoteNumber(): string
    {
        return $this->debitNoteNumber;
    }

    /**
     * Sets Debit Note Number.
     * A unique, identifying string that appears on the debit note and in places it is referenced.
     *
     * @required
     * @maps debit_note_number
     */
    public function setDebitNoteNumber(string $debitNoteNumber): void
    {
        $this->debitNoteNumber = $debitNoteNumber;
    }

    /**
     * Returns Debit Note Uid.
     * Unique identifier for the debit note. It is generated automatically by Chargify and has the prefix
     * "db_" followed by alphanumeric characters.
     */
    public function getDebitNoteUid(): string
    {
        return $this->debitNoteUid;
    }

    /**
     * Sets Debit Note Uid.
     * Unique identifier for the debit note. It is generated automatically by Chargify and has the prefix
     * "db_" followed by alphanumeric characters.
     *
     * @required
     * @maps debit_note_uid
     */
    public function setDebitNoteUid(string $debitNoteUid): void
    {
        $this->debitNoteUid = $debitNoteUid;
    }

    /**
     * Returns Original Amount.
     * The full, original amount of the debit note.
     */
    public function getOriginalAmount(): string
    {
        return $this->originalAmount;
    }

    /**
     * Sets Original Amount.
     * The full, original amount of the debit note.
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
     * The amount of the debit note applied to invoice.
     */
    public function getAppliedAmount(): string
    {
        return $this->appliedAmount;
    }

    /**
     * Sets Applied Amount.
     * The amount of the debit note applied to invoice.
     *
     * @required
     * @maps applied_amount
     */
    public function setAppliedAmount(string $appliedAmount): void
    {
        $this->appliedAmount = $appliedAmount;
    }

    private $additionalProperties = [];

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property
     * @param mixed $value Value of property
     */
    public function addAdditionalProperty(string $name, $value)
    {
        $this->additionalProperties[$name] = $value;
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
        $json['debit_note_number'] = $this->debitNoteNumber;
        $json['debit_note_uid']    = $this->debitNoteUid;
        $json['original_amount']   = $this->originalAmount;
        $json['applied_amount']    = $this->appliedAmount;
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
