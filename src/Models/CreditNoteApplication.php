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

class CreditNoteApplication implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $uid;

    /**
     * @var \DateTime|null
     */
    private $transactionTime;

    /**
     * @var string|null
     */
    private $invoiceUid;

    /**
     * @var string|null
     */
    private $memo;

    /**
     * @var string|null
     */
    private $appliedAmount;

    /**
     * Returns Uid.
     */
    public function getUid(): ?string
    {
        return $this->uid;
    }

    /**
     * Sets Uid.
     *
     * @maps uid
     */
    public function setUid(?string $uid): void
    {
        $this->uid = $uid;
    }

    /**
     * Returns Transaction Time.
     */
    public function getTransactionTime(): ?\DateTime
    {
        return $this->transactionTime;
    }

    /**
     * Sets Transaction Time.
     *
     * @maps transaction_time
     * @factory \AdvancedBillingLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setTransactionTime(?\DateTime $transactionTime): void
    {
        $this->transactionTime = $transactionTime;
    }

    /**
     * Returns Invoice Uid.
     */
    public function getInvoiceUid(): ?string
    {
        return $this->invoiceUid;
    }

    /**
     * Sets Invoice Uid.
     *
     * @maps invoice_uid
     */
    public function setInvoiceUid(?string $invoiceUid): void
    {
        $this->invoiceUid = $invoiceUid;
    }

    /**
     * Returns Memo.
     */
    public function getMemo(): ?string
    {
        return $this->memo;
    }

    /**
     * Sets Memo.
     *
     * @maps memo
     */
    public function setMemo(?string $memo): void
    {
        $this->memo = $memo;
    }

    /**
     * Returns Applied Amount.
     */
    public function getAppliedAmount(): ?string
    {
        return $this->appliedAmount;
    }

    /**
     * Sets Applied Amount.
     *
     * @maps applied_amount
     */
    public function setAppliedAmount(?string $appliedAmount): void
    {
        $this->appliedAmount = $appliedAmount;
    }

    /**
     * Converts the CreditNoteApplication object to a human-readable string representation.
     *
     * @return string The string representation of the CreditNoteApplication object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'CreditNoteApplication',
            [
                'uid' => $this->uid,
                'transactionTime' => $this->transactionTime,
                'invoiceUid' => $this->invoiceUid,
                'memo' => $this->memo,
                'appliedAmount' => $this->appliedAmount,
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
        if (isset($this->uid)) {
            $json['uid']              = $this->uid;
        }
        if (isset($this->transactionTime)) {
            $json['transaction_time'] = DateTimeHelper::toRfc3339DateTime($this->transactionTime);
        }
        if (isset($this->invoiceUid)) {
            $json['invoice_uid']      = $this->invoiceUid;
        }
        if (isset($this->memo)) {
            $json['memo']             = $this->memo;
        }
        if (isset($this->appliedAmount)) {
            $json['applied_amount']   = $this->appliedAmount;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
