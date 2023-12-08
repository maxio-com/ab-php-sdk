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
 * Refund an invoice or a segment of a consolidated invoice.
 */
class RefundInvoice implements \JsonSerializable
{
    /**
     * @var string
     */
    private $amount;

    /**
     * @var string
     */
    private $memo;

    /**
     * @var int
     */
    private $paymentId;

    /**
     * @var bool|null
     */
    private $external;

    /**
     * @var bool|null
     */
    private $applyCredit;

    /**
     * @var bool|null
     */
    private $voidInvoice;

    /**
     * @param string $amount
     * @param string $memo
     * @param int $paymentId
     */
    public function __construct(string $amount, string $memo, int $paymentId)
    {
        $this->amount = $amount;
        $this->memo = $memo;
        $this->paymentId = $paymentId;
    }

    /**
     * Returns Amount.
     * The amount to be refunded in decimal format as a string. Example: "10.50". Must not exceed the
     * remaining refundable balance of the payment.
     */
    public function getAmount(): string
    {
        return $this->amount;
    }

    /**
     * Sets Amount.
     * The amount to be refunded in decimal format as a string. Example: "10.50". Must not exceed the
     * remaining refundable balance of the payment.
     *
     * @required
     * @maps amount
     */
    public function setAmount(string $amount): void
    {
        $this->amount = $amount;
    }

    /**
     * Returns Memo.
     * A description that will be attached to the refund
     */
    public function getMemo(): string
    {
        return $this->memo;
    }

    /**
     * Sets Memo.
     * A description that will be attached to the refund
     *
     * @required
     * @maps memo
     */
    public function setMemo(string $memo): void
    {
        $this->memo = $memo;
    }

    /**
     * Returns Payment Id.
     * The ID of the payment to be refunded
     */
    public function getPaymentId(): int
    {
        return $this->paymentId;
    }

    /**
     * Sets Payment Id.
     * The ID of the payment to be refunded
     *
     * @required
     * @maps payment_id
     */
    public function setPaymentId(int $paymentId): void
    {
        $this->paymentId = $paymentId;
    }

    /**
     * Returns External.
     * Flag that marks refund as external (no money is returned to the customer). Defaults to `false`.
     */
    public function getExternal(): ?bool
    {
        return $this->external;
    }

    /**
     * Sets External.
     * Flag that marks refund as external (no money is returned to the customer). Defaults to `false`.
     *
     * @maps external
     */
    public function setExternal(?bool $external): void
    {
        $this->external = $external;
    }

    /**
     * Returns Apply Credit.
     * If set to true, creates credit and applies it to an invoice. Defaults to `false`.
     */
    public function getApplyCredit(): ?bool
    {
        return $this->applyCredit;
    }

    /**
     * Sets Apply Credit.
     * If set to true, creates credit and applies it to an invoice. Defaults to `false`.
     *
     * @maps apply_credit
     */
    public function setApplyCredit(?bool $applyCredit): void
    {
        $this->applyCredit = $applyCredit;
    }

    /**
     * Returns Void Invoice.
     * If `apply_credit` set to false and refunding full amount, if `void_invoice` set to true, invoice
     * will be voided after refund. Defaults to `false`.
     */
    public function getVoidInvoice(): ?bool
    {
        return $this->voidInvoice;
    }

    /**
     * Sets Void Invoice.
     * If `apply_credit` set to false and refunding full amount, if `void_invoice` set to true, invoice
     * will be voided after refund. Defaults to `false`.
     *
     * @maps void_invoice
     */
    public function setVoidInvoice(?bool $voidInvoice): void
    {
        $this->voidInvoice = $voidInvoice;
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
        $json['amount']           = $this->amount;
        $json['memo']             = $this->memo;
        $json['payment_id']       = $this->paymentId;
        if (isset($this->external)) {
            $json['external']     = $this->external;
        }
        if (isset($this->applyCredit)) {
            $json['apply_credit'] = $this->applyCredit;
        }
        if (isset($this->voidInvoice)) {
            $json['void_invoice'] = $this->voidInvoice;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
