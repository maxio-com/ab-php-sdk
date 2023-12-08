<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class CreditNoteApplication implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $uid;

    /**
     * @var string|null
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
    public function getTransactionTime(): ?string
    {
        return $this->transactionTime;
    }

    /**
     * Sets Transaction Time.
     *
     * @maps transaction_time
     */
    public function setTransactionTime(?string $transactionTime): void
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
            $json['transaction_time'] = $this->transactionTime;
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

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
