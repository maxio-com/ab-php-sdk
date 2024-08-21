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
 * Example schema for an `refund_invoice` event
 */
class RefundInvoiceEventData implements \JsonSerializable
{
    /**
     * @var bool
     */
    private $applyCredit;

    /**
     * @var string|null
     */
    private $consolidationLevel;

    /**
     * @var CreditNote
     */
    private $creditNoteAttributes;

    /**
     * @var string|null
     */
    private $memo;

    /**
     * @var string|null
     */
    private $originalAmount;

    /**
     * @var int
     */
    private $paymentId;

    /**
     * @var string
     */
    private $refundAmount;

    /**
     * @var int
     */
    private $refundId;

    /**
     * @var \DateTime
     */
    private $transactionTime;

    /**
     * @param bool $applyCredit
     * @param CreditNote $creditNoteAttributes
     * @param int $paymentId
     * @param string $refundAmount
     * @param int $refundId
     * @param \DateTime $transactionTime
     */
    public function __construct(
        bool $applyCredit,
        CreditNote $creditNoteAttributes,
        int $paymentId,
        string $refundAmount,
        int $refundId,
        \DateTime $transactionTime
    ) {
        $this->applyCredit = $applyCredit;
        $this->creditNoteAttributes = $creditNoteAttributes;
        $this->paymentId = $paymentId;
        $this->refundAmount = $refundAmount;
        $this->refundId = $refundId;
        $this->transactionTime = $transactionTime;
    }

    /**
     * Returns Apply Credit.
     * If true, credit was created and applied it to the invoice.
     */
    public function getApplyCredit(): bool
    {
        return $this->applyCredit;
    }

    /**
     * Sets Apply Credit.
     * If true, credit was created and applied it to the invoice.
     *
     * @required
     * @maps apply_credit
     */
    public function setApplyCredit(bool $applyCredit): void
    {
        $this->applyCredit = $applyCredit;
    }

    /**
     * Returns Consolidation Level.
     * Consolidation level of the invoice, which is applicable to invoice consolidation.  It will hold one
     * of the following values:
     *
     * * "none": A normal invoice with no consolidation.
     * * "child": An invoice segment which has been combined into a consolidated invoice.
     * * "parent": A consolidated invoice, whose contents are composed of invoice segments.
     *
     * "Parent" invoices do not have lines of their own, but they have subtotals and totals which aggregate
     * the member invoice segments.
     *
     * See also the [invoice consolidation documentation](https://maxio.zendesk.com/hc/en-
     * us/articles/24252269909389-Invoice-Consolidation).
     */
    public function getConsolidationLevel(): ?string
    {
        return $this->consolidationLevel;
    }

    /**
     * Sets Consolidation Level.
     * Consolidation level of the invoice, which is applicable to invoice consolidation.  It will hold one
     * of the following values:
     *
     * * "none": A normal invoice with no consolidation.
     * * "child": An invoice segment which has been combined into a consolidated invoice.
     * * "parent": A consolidated invoice, whose contents are composed of invoice segments.
     *
     * "Parent" invoices do not have lines of their own, but they have subtotals and totals which aggregate
     * the member invoice segments.
     *
     * See also the [invoice consolidation documentation](https://maxio.zendesk.com/hc/en-
     * us/articles/24252269909389-Invoice-Consolidation).
     *
     * @maps consolidation_level
     * @factory \AdvancedBillingLib\Models\InvoiceConsolidationLevel::checkValue
     */
    public function setConsolidationLevel(?string $consolidationLevel): void
    {
        $this->consolidationLevel = $consolidationLevel;
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
     * The refund memo.
     */
    public function getMemo(): ?string
    {
        return $this->memo;
    }

    /**
     * Sets Memo.
     * The refund memo.
     *
     * @maps memo
     */
    public function setMemo(?string $memo): void
    {
        $this->memo = $memo;
    }

    /**
     * Returns Original Amount.
     * The full, original amount of the refund.
     */
    public function getOriginalAmount(): ?string
    {
        return $this->originalAmount;
    }

    /**
     * Sets Original Amount.
     * The full, original amount of the refund.
     *
     * @maps original_amount
     */
    public function setOriginalAmount(?string $originalAmount): void
    {
        $this->originalAmount = $originalAmount;
    }

    /**
     * Returns Payment Id.
     * The ID of the payment transaction to be refunded.
     */
    public function getPaymentId(): int
    {
        return $this->paymentId;
    }

    /**
     * Sets Payment Id.
     * The ID of the payment transaction to be refunded.
     *
     * @required
     * @maps payment_id
     */
    public function setPaymentId(int $paymentId): void
    {
        $this->paymentId = $paymentId;
    }

    /**
     * Returns Refund Amount.
     * The amount of the refund.
     */
    public function getRefundAmount(): string
    {
        return $this->refundAmount;
    }

    /**
     * Sets Refund Amount.
     * The amount of the refund.
     *
     * @required
     * @maps refund_amount
     */
    public function setRefundAmount(string $refundAmount): void
    {
        $this->refundAmount = $refundAmount;
    }

    /**
     * Returns Refund Id.
     * The ID of the refund transaction.
     */
    public function getRefundId(): int
    {
        return $this->refundId;
    }

    /**
     * Sets Refund Id.
     * The ID of the refund transaction.
     *
     * @required
     * @maps refund_id
     */
    public function setRefundId(int $refundId): void
    {
        $this->refundId = $refundId;
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
        $json['apply_credit']            = $this->applyCredit;
        if (isset($this->consolidationLevel)) {
            $json['consolidation_level'] = InvoiceConsolidationLevel::checkValue($this->consolidationLevel);
        }
        $json['credit_note_attributes']  = $this->creditNoteAttributes;
        if (isset($this->memo)) {
            $json['memo']                = $this->memo;
        }
        if (isset($this->originalAmount)) {
            $json['original_amount']     = $this->originalAmount;
        }
        $json['payment_id']              = $this->paymentId;
        $json['refund_amount']           = $this->refundAmount;
        $json['refund_id']               = $this->refundId;
        $json['transaction_time']        = DateTimeHelper::toRfc3339DateTime($this->transactionTime);
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
