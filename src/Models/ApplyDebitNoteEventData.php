<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use AdvancedBillingLib\ApiHelper;
use AdvancedBillingLib\Utils\DateTimeHelper;
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
     * @var array
     */
    private $memo = [];

    /**
     * @var array
     */
    private $transactionTime = [];

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

    /**
     * Returns Memo.
     * The debit note memo.
     */
    public function getMemo(): ?string
    {
        if (count($this->memo) == 0) {
            return null;
        }
        return $this->memo['value'];
    }

    /**
     * Sets Memo.
     * The debit note memo.
     *
     * @maps memo
     */
    public function setMemo(?string $memo): void
    {
        $this->memo['value'] = $memo;
    }

    /**
     * Unsets Memo.
     * The debit note memo.
     */
    public function unsetMemo(): void
    {
        $this->memo = [];
    }

    /**
     * Returns Transaction Time.
     * The time the debit note was applied, in ISO 8601 format, i.e. "2019-06-07T17:20:06Z"
     */
    public function getTransactionTime(): ?\DateTime
    {
        if (count($this->transactionTime) == 0) {
            return null;
        }
        return $this->transactionTime['value'];
    }

    /**
     * Sets Transaction Time.
     * The time the debit note was applied, in ISO 8601 format, i.e. "2019-06-07T17:20:06Z"
     *
     * @maps transaction_time
     * @factory \AdvancedBillingLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setTransactionTime(?\DateTime $transactionTime): void
    {
        $this->transactionTime['value'] = $transactionTime;
    }

    /**
     * Unsets Transaction Time.
     * The time the debit note was applied, in ISO 8601 format, i.e. "2019-06-07T17:20:06Z"
     */
    public function unsetTransactionTime(): void
    {
        $this->transactionTime = [];
    }

    /**
     * Converts the ApplyDebitNoteEventData object to a human-readable string representation.
     *
     * @return string The string representation of the ApplyDebitNoteEventData object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'ApplyDebitNoteEventData',
            [
                'debitNoteNumber' => $this->debitNoteNumber,
                'debitNoteUid' => $this->debitNoteUid,
                'originalAmount' => $this->originalAmount,
                'appliedAmount' => $this->appliedAmount,
                'memo' => $this->getMemo(),
                'transactionTime' => $this->getTransactionTime(),
                'additionalProperties' => $this->additionalProperties
            ]
        );
    }

    private $additionalProperties = [];

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property.
     * @param mixed $value Value of property.
     */
    public function addAdditionalProperty(string $name, $value)
    {
        $this->additionalProperties[$name] = $value;
    }

    /**
     * Find an additional property by name in this model or false if property does not exist.
     *
     * @param string $name Name of property.
     *
     * @return mixed|false Value of the property.
     */
    public function findAdditionalProperty(string $name)
    {
        if (isset($this->additionalProperties[$name])) {
            return $this->additionalProperties[$name];
        }
        return false;
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
        $json['debit_note_number']    = $this->debitNoteNumber;
        $json['debit_note_uid']       = $this->debitNoteUid;
        $json['original_amount']      = $this->originalAmount;
        $json['applied_amount']       = $this->appliedAmount;
        if (!empty($this->memo)) {
            $json['memo']             = $this->memo['value'];
        }
        if (!empty($this->transactionTime)) {
            $json['transaction_time'] = DateTimeHelper::toRfc3339DateTime($this->transactionTime['value']);
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
