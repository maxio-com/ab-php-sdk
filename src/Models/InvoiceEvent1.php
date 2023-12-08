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
 * The event data is the data that, when combined with the command, results in the output invoice found
 * in the invoice field.
 */
class InvoiceEvent1 implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $uid;

    /**
     * @var string|null
     */
    private $creditNoteNumber;

    /**
     * @var string|null
     */
    private $creditNoteUid;

    /**
     * @var string|null
     */
    private $originalAmount;

    /**
     * @var string|null
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
     * @var AppliedCreditNote[]|null
     */
    private $appliedCreditNotes;

    /**
     * @var string|null
     */
    private $debitNoteNumber;

    /**
     * @var string|null
     */
    private $debitNoteUid;

    /**
     * @var PaymentMethodApplePayType|PaymentMethodBankAccountType|PaymentMethodCreditCardType|PaymentMethodExternalType|PaymentMethodPaypalType|null
     */
    private $paymentMethod;

    /**
     * @var int|null
     */
    private $transactionId;

    /**
     * @var string|null
     */
    private $fromCollectionMethod;

    /**
     * @var string|null
     */
    private $toCollectionMethod;

    /**
     * @var string|null
     */
    private $consolidationLevel;

    /**
     * @var string|null
     */
    private $fromStatus;

    /**
     * @var string|null
     */
    private $toStatus;

    /**
     * @var string|null
     */
    private $dueAmount;

    /**
     * @var string|null
     */
    private $totalAmount;

    /**
     * @var bool|null
     */
    private $applyCredit;

    /**
     * @var CreditNote1|null
     */
    private $creditNoteAttributes;

    /**
     * @var int|null
     */
    private $paymentId;

    /**
     * @var string|null
     */
    private $refundAmount;

    /**
     * @var int|null
     */
    private $refundId;

    /**
     * @var bool|null
     */
    private $prepayment;

    /**
     * @var bool|null
     */
    private $isAdvanceInvoice;

    /**
     * Returns Uid.
     * Unique identifier for the credit note application. It is generated automatically by Chargify and has
     * the prefix "cdt_" followed by alphanumeric characters.
     */
    public function getUid(): ?string
    {
        return $this->uid;
    }

    /**
     * Sets Uid.
     * Unique identifier for the credit note application. It is generated automatically by Chargify and has
     * the prefix "cdt_" followed by alphanumeric characters.
     *
     * @maps uid
     */
    public function setUid(?string $uid): void
    {
        $this->uid = $uid;
    }

    /**
     * Returns Credit Note Number.
     * A unique, identifying string that appears on the credit note and in places it is referenced.
     */
    public function getCreditNoteNumber(): ?string
    {
        return $this->creditNoteNumber;
    }

    /**
     * Sets Credit Note Number.
     * A unique, identifying string that appears on the credit note and in places it is referenced.
     *
     * @maps credit_note_number
     */
    public function setCreditNoteNumber(?string $creditNoteNumber): void
    {
        $this->creditNoteNumber = $creditNoteNumber;
    }

    /**
     * Returns Credit Note Uid.
     * Unique identifier for the credit note. It is generated automatically by Chargify and has the prefix
     * "cn_" followed by alphanumeric characters.
     */
    public function getCreditNoteUid(): ?string
    {
        return $this->creditNoteUid;
    }

    /**
     * Sets Credit Note Uid.
     * Unique identifier for the credit note. It is generated automatically by Chargify and has the prefix
     * "cn_" followed by alphanumeric characters.
     *
     * @maps credit_note_uid
     */
    public function setCreditNoteUid(?string $creditNoteUid): void
    {
        $this->creditNoteUid = $creditNoteUid;
    }

    /**
     * Returns Original Amount.
     * The full, original amount of the credit note.
     */
    public function getOriginalAmount(): ?string
    {
        return $this->originalAmount;
    }

    /**
     * Sets Original Amount.
     * The full, original amount of the credit note.
     *
     * @maps original_amount
     */
    public function setOriginalAmount(?string $originalAmount): void
    {
        $this->originalAmount = $originalAmount;
    }

    /**
     * Returns Applied Amount.
     * The amount of the credit note applied to invoice.
     */
    public function getAppliedAmount(): ?string
    {
        return $this->appliedAmount;
    }

    /**
     * Sets Applied Amount.
     * The amount of the credit note applied to invoice.
     *
     * @maps applied_amount
     */
    public function setAppliedAmount(?string $appliedAmount): void
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
     * @return AppliedCreditNote[]|null
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
     * @param AppliedCreditNote[]|null $appliedCreditNotes
     */
    public function setAppliedCreditNotes(?array $appliedCreditNotes): void
    {
        $this->appliedCreditNotes = $appliedCreditNotes;
    }

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
     * Returns Payment Method.
     * A nested data structure detailing the method of payment
     *
     * @return PaymentMethodApplePayType|PaymentMethodBankAccountType|PaymentMethodCreditCardType|PaymentMethodExternalType|PaymentMethodPaypalType|null
     */
    public function getPaymentMethod()
    {
        return $this->paymentMethod;
    }

    /**
     * Sets Payment Method.
     * A nested data structure detailing the method of payment
     *
     * @maps payment_method
     * @mapsBy anyOf(oneOf(PaymentMethodApplePayType,PaymentMethodBankAccountType,PaymentMethodCreditCardType,PaymentMethodExternalType,PaymentMethodPaypalType),null)
     *
     * @param PaymentMethodApplePayType|PaymentMethodBankAccountType|PaymentMethodCreditCardType|PaymentMethodExternalType|PaymentMethodPaypalType|null $paymentMethod
     */
    public function setPaymentMethod($paymentMethod): void
    {
        $this->paymentMethod = $paymentMethod;
    }

    /**
     * Returns Transaction Id.
     * The Chargify id of the original payment
     */
    public function getTransactionId(): ?int
    {
        return $this->transactionId;
    }

    /**
     * Sets Transaction Id.
     * The Chargify id of the original payment
     *
     * @maps transaction_id
     */
    public function setTransactionId(?int $transactionId): void
    {
        $this->transactionId = $transactionId;
    }

    /**
     * Returns From Collection Method.
     * The previous collection method of the invoice.
     */
    public function getFromCollectionMethod(): ?string
    {
        return $this->fromCollectionMethod;
    }

    /**
     * Sets From Collection Method.
     * The previous collection method of the invoice.
     *
     * @maps from_collection_method
     */
    public function setFromCollectionMethod(?string $fromCollectionMethod): void
    {
        $this->fromCollectionMethod = $fromCollectionMethod;
    }

    /**
     * Returns To Collection Method.
     * The new collection method of the invoice.
     */
    public function getToCollectionMethod(): ?string
    {
        return $this->toCollectionMethod;
    }

    /**
     * Sets To Collection Method.
     * The new collection method of the invoice.
     *
     * @maps to_collection_method
     */
    public function setToCollectionMethod(?string $toCollectionMethod): void
    {
        $this->toCollectionMethod = $toCollectionMethod;
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
     * See also the [invoice consolidation documentation](https://chargify.zendesk.com/hc/en-
     * us/articles/4407746391835).
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
     * See also the [invoice consolidation documentation](https://chargify.zendesk.com/hc/en-
     * us/articles/4407746391835).
     *
     * @maps consolidation_level
     * @factory \AdvancedBillingLib\Models\InvoiceConsolidationLevel::checkValue
     */
    public function setConsolidationLevel(?string $consolidationLevel): void
    {
        $this->consolidationLevel = $consolidationLevel;
    }

    /**
     * Returns From Status.
     * The status of the invoice before event occurence. See [Invoice Statuses](https://chargify.zendesk.
     * com/hc/en-us/articles/4407737494171#line-item-breakdowns) for more.
     */
    public function getFromStatus(): ?string
    {
        return $this->fromStatus;
    }

    /**
     * Sets From Status.
     * The status of the invoice before event occurence. See [Invoice Statuses](https://chargify.zendesk.
     * com/hc/en-us/articles/4407737494171#line-item-breakdowns) for more.
     *
     * @maps from_status
     * @factory \AdvancedBillingLib\Models\Status::checkValue
     */
    public function setFromStatus(?string $fromStatus): void
    {
        $this->fromStatus = $fromStatus;
    }

    /**
     * Returns To Status.
     * The status of the invoice after event occurence. See [Invoice Statuses](https://chargify.zendesk.
     * com/hc/en-us/articles/4407737494171#line-item-breakdowns) for more.
     */
    public function getToStatus(): ?string
    {
        return $this->toStatus;
    }

    /**
     * Sets To Status.
     * The status of the invoice after event occurence. See [Invoice Statuses](https://chargify.zendesk.
     * com/hc/en-us/articles/4407737494171#line-item-breakdowns) for more.
     *
     * @maps to_status
     * @factory \AdvancedBillingLib\Models\Status::checkValue
     */
    public function setToStatus(?string $toStatus): void
    {
        $this->toStatus = $toStatus;
    }

    /**
     * Returns Due Amount.
     * Amount due on the invoice, which is `total_amount - credit_amount - paid_amount`.
     */
    public function getDueAmount(): ?string
    {
        return $this->dueAmount;
    }

    /**
     * Sets Due Amount.
     * Amount due on the invoice, which is `total_amount - credit_amount - paid_amount`.
     *
     * @maps due_amount
     */
    public function setDueAmount(?string $dueAmount): void
    {
        $this->dueAmount = $dueAmount;
    }

    /**
     * Returns Total Amount.
     * The invoice total, which is `subtotal_amount - discount_amount + tax_amount`.'
     */
    public function getTotalAmount(): ?string
    {
        return $this->totalAmount;
    }

    /**
     * Sets Total Amount.
     * The invoice total, which is `subtotal_amount - discount_amount + tax_amount`.'
     *
     * @maps total_amount
     */
    public function setTotalAmount(?string $totalAmount): void
    {
        $this->totalAmount = $totalAmount;
    }

    /**
     * Returns Apply Credit.
     * If true, credit was created and applied it to the invoice.
     */
    public function getApplyCredit(): ?bool
    {
        return $this->applyCredit;
    }

    /**
     * Sets Apply Credit.
     * If true, credit was created and applied it to the invoice.
     *
     * @maps apply_credit
     */
    public function setApplyCredit(?bool $applyCredit): void
    {
        $this->applyCredit = $applyCredit;
    }

    /**
     * Returns Credit Note Attributes.
     */
    public function getCreditNoteAttributes(): ?CreditNote1
    {
        return $this->creditNoteAttributes;
    }

    /**
     * Sets Credit Note Attributes.
     *
     * @maps credit_note_attributes
     */
    public function setCreditNoteAttributes(?CreditNote1 $creditNoteAttributes): void
    {
        $this->creditNoteAttributes = $creditNoteAttributes;
    }

    /**
     * Returns Payment Id.
     * The ID of the payment transaction to be refunded.
     */
    public function getPaymentId(): ?int
    {
        return $this->paymentId;
    }

    /**
     * Sets Payment Id.
     * The ID of the payment transaction to be refunded.
     *
     * @maps payment_id
     */
    public function setPaymentId(?int $paymentId): void
    {
        $this->paymentId = $paymentId;
    }

    /**
     * Returns Refund Amount.
     * The amount of the refund.
     */
    public function getRefundAmount(): ?string
    {
        return $this->refundAmount;
    }

    /**
     * Sets Refund Amount.
     * The amount of the refund.
     *
     * @maps refund_amount
     */
    public function setRefundAmount(?string $refundAmount): void
    {
        $this->refundAmount = $refundAmount;
    }

    /**
     * Returns Refund Id.
     * The ID of the refund transaction.
     */
    public function getRefundId(): ?int
    {
        return $this->refundId;
    }

    /**
     * Sets Refund Id.
     * The ID of the refund transaction.
     *
     * @maps refund_id
     */
    public function setRefundId(?int $refundId): void
    {
        $this->refundId = $refundId;
    }

    /**
     * Returns Prepayment.
     * The flag that shows whether the original payment was a prepayment or not
     */
    public function getPrepayment(): ?bool
    {
        return $this->prepayment;
    }

    /**
     * Sets Prepayment.
     * The flag that shows whether the original payment was a prepayment or not
     *
     * @maps prepayment
     */
    public function setPrepayment(?bool $prepayment): void
    {
        $this->prepayment = $prepayment;
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
        if (isset($this->uid)) {
            $json['uid']                    = $this->uid;
        }
        if (isset($this->creditNoteNumber)) {
            $json['credit_note_number']     = $this->creditNoteNumber;
        }
        if (isset($this->creditNoteUid)) {
            $json['credit_note_uid']        = $this->creditNoteUid;
        }
        if (isset($this->originalAmount)) {
            $json['original_amount']        = $this->originalAmount;
        }
        if (isset($this->appliedAmount)) {
            $json['applied_amount']         = $this->appliedAmount;
        }
        if (isset($this->transactionTime)) {
            $json['transaction_time']       = DateTimeHelper::toRfc3339DateTime($this->transactionTime);
        }
        if (isset($this->memo)) {
            $json['memo']                   = $this->memo;
        }
        if (isset($this->role)) {
            $json['role']                   = $this->role;
        }
        if (isset($this->consolidatedInvoice)) {
            $json['consolidated_invoice']   = $this->consolidatedInvoice;
        }
        if (isset($this->appliedCreditNotes)) {
            $json['applied_credit_notes']   = $this->appliedCreditNotes;
        }
        if (isset($this->debitNoteNumber)) {
            $json['debit_note_number']      = $this->debitNoteNumber;
        }
        if (isset($this->debitNoteUid)) {
            $json['debit_note_uid']         = $this->debitNoteUid;
        }
        if (isset($this->paymentMethod)) {
            $json['payment_method']         =
                ApiHelper::getJsonHelper()->verifyTypes(
                    $this->paymentMethod,
                    'anyOf(oneOf(PaymentMethodApplePayType,PaymentMethodBankAccountType,PaymentMethod' .
                    'CreditCardType,PaymentMethodExternalType,PaymentMethodPaypalType),null)'
                );
        }
        if (isset($this->transactionId)) {
            $json['transaction_id']         = $this->transactionId;
        }
        if (isset($this->fromCollectionMethod)) {
            $json['from_collection_method'] = $this->fromCollectionMethod;
        }
        if (isset($this->toCollectionMethod)) {
            $json['to_collection_method']   = $this->toCollectionMethod;
        }
        if (isset($this->consolidationLevel)) {
            $json['consolidation_level']    = InvoiceConsolidationLevel::checkValue($this->consolidationLevel);
        }
        if (isset($this->fromStatus)) {
            $json['from_status']            = Status::checkValue($this->fromStatus);
        }
        if (isset($this->toStatus)) {
            $json['to_status']              = Status::checkValue($this->toStatus);
        }
        if (isset($this->dueAmount)) {
            $json['due_amount']             = $this->dueAmount;
        }
        if (isset($this->totalAmount)) {
            $json['total_amount']           = $this->totalAmount;
        }
        if (isset($this->applyCredit)) {
            $json['apply_credit']           = $this->applyCredit;
        }
        if (isset($this->creditNoteAttributes)) {
            $json['credit_note_attributes'] = $this->creditNoteAttributes;
        }
        if (isset($this->paymentId)) {
            $json['payment_id']             = $this->paymentId;
        }
        if (isset($this->refundAmount)) {
            $json['refund_amount']          = $this->refundAmount;
        }
        if (isset($this->refundId)) {
            $json['refund_id']              = $this->refundId;
        }
        if (isset($this->prepayment)) {
            $json['prepayment']             = $this->prepayment;
        }
        if (isset($this->isAdvanceInvoice)) {
            $json['is_advance_invoice']     = $this->isAdvanceInvoice;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
