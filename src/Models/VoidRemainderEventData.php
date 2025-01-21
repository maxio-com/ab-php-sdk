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
 * Example schema for an `void_remainder` event
 */
class VoidRemainderEventData implements \JsonSerializable
{
    /**
     * @var CreditNote
     */
    private $creditNoteAttributes;

    /**
     * @var string
     */
    private $memo;

    /**
     * @var string
     */
    private $appliedAmount;

    /**
     * @var \DateTime
     */
    private $transactionTime;

    /**
     * @param CreditNote $creditNoteAttributes
     * @param string $memo
     * @param string $appliedAmount
     * @param \DateTime $transactionTime
     */
    public function __construct(
        CreditNote $creditNoteAttributes,
        string $memo,
        string $appliedAmount,
        \DateTime $transactionTime
    ) {
        $this->creditNoteAttributes = $creditNoteAttributes;
        $this->memo = $memo;
        $this->appliedAmount = $appliedAmount;
        $this->transactionTime = $transactionTime;
    }

    /**
     * Returns Credit Note Attributes.
     */
    public function getCreditNoteAttributes(): CreditNote
    {
        return $this->creditNoteAttributes;
    }

    /**
     * Sets Credit Note Attributes.
     *
     * @required
     * @maps credit_note_attributes
     */
    public function setCreditNoteAttributes(CreditNote $creditNoteAttributes): void
    {
        $this->creditNoteAttributes = $creditNoteAttributes;
    }

    /**
     * Returns Memo.
     * The memo provided during invoice remainder voiding.
     */
    public function getMemo(): string
    {
        return $this->memo;
    }

    /**
     * Sets Memo.
     * The memo provided during invoice remainder voiding.
     *
     * @required
     * @maps memo
     */
    public function setMemo(string $memo): void
    {
        $this->memo = $memo;
    }

    /**
     * Returns Applied Amount.
     * The amount of the void.
     */
    public function getAppliedAmount(): string
    {
        return $this->appliedAmount;
    }

    /**
     * Sets Applied Amount.
     * The amount of the void.
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
     * The time the refund was applied, in ISO 8601 format, i.e. "2019-06-07T17:20:06Z"
     */
    public function getTransactionTime(): \DateTime
    {
        return $this->transactionTime;
    }

    /**
     * Sets Transaction Time.
     * The time the refund was applied, in ISO 8601 format, i.e. "2019-06-07T17:20:06Z"
     *
     * @required
     * @maps transaction_time
     * @factory \AdvancedBillingLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setTransactionTime(\DateTime $transactionTime): void
    {
        $this->transactionTime = $transactionTime;
    }

    /**
     * Converts the VoidRemainderEventData object to a human-readable string representation.
     *
     * @return string The string representation of the VoidRemainderEventData object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'VoidRemainderEventData',
            [
                'creditNoteAttributes' => $this->creditNoteAttributes,
                'memo' => $this->memo,
                'appliedAmount' => $this->appliedAmount,
                'transactionTime' => $this->transactionTime,
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
        $json['credit_note_attributes'] = $this->creditNoteAttributes;
        $json['memo']                   = $this->memo;
        $json['applied_amount']         = $this->appliedAmount;
        $json['transaction_time']       = DateTimeHelper::toRfc3339DateTime($this->transactionTime);
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
