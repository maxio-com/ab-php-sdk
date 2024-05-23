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
 * Example schema for an `apply_credit_note` event
 */
class ApplyCreditNoteEventData1 implements \JsonSerializable
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
     * @var \DateTime
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
    private $consolidationLevel;

    /**
     * @var PaymentMethodApplePay|PaymentMethodBankAccount|PaymentMethodCreditCard|PaymentMethodExternal|PaymentMethodPaypal
     */
    private $paymentMethod;

    /**
     * @var int
     */
    private $transactionId;

    /**
     * @var array
     */
    private $parentInvoiceNumber = [];

    /**
     * @var array
     */
    private $remainingPrepaymentAmount = [];

    /**
     * @var bool
     */
    private $prepayment;

    /**
     * @var bool|null
     */
    private $external;

    /**
     * @var int|null
     */
    private $id;

    /**
     * @var int|null
     */
    private $siteId;

    /**
     * @var int|null
     */
    private $customerId;

    /**
     * @var int|null
     */
    private $subscriptionId;

    /**
     * @var string|null
     */
    private $number;

    /**
     * @var int|null
     */
    private $sequenceNumber;

    /**
     * @var \DateTime|null
     */
    private $createdAt;

    /**
     * @var \DateTime|null
     */
    private $updatedAt;

    /**
     * @var \DateTime|null
     */
    private $issueDate;

    /**
     * @var \DateTime|null
     */
    private $dueDate;

    /**
     * @var array
     */
    private $paidDate = [];

    /**
     * @var string|null
     */
    private $status;

    /**
     * @var array
     */
    private $parentInvoiceId = [];

    /**
     * @var string|null
     */
    private $collectionMethod;

    /**
     * @var string|null
     */
    private $paymentInstructions;

    /**
     * @var string|null
     */
    private $currency;

    /**
     * @var array
     */
    private $parentInvoiceUid = [];

    /**
     * @var array
     */
    private $subscriptionGroupId = [];

    /**
     * @var array
     */
    private $groupPrimarySubscriptionId = [];

    /**
     * @var string|null
     */
    private $productName;

    /**
     * @var string|null
     */
    private $productFamilyName;

    /**
     * @var InvoiceSeller|null
     */
    private $seller;

    /**
     * @var InvoiceCustomer|null
     */
    private $customer;

    /**
     * @var InvoicePayer|null
     */
    private $payer;

    /**
     * @var string[]|null
     */
    private $recipientEmails;

    /**
     * @var int|null
     */
    private $netTerms;

    /**
     * @var BillingAddress|null
     */
    private $billingAddress;

    /**
     * @var ShippingAddress|null
     */
    private $shippingAddress;

    /**
     * @var string|null
     */
    private $subtotalAmount;

    /**
     * @var string|null
     */
    private $discountAmount;

    /**
     * @var string|null
     */
    private $taxAmount;

    /**
     * @var string
     */
    private $totalAmount;

    /**
     * @var string|null
     */
    private $creditAmount;

    /**
     * @var string
     */
    private $refundAmount;

    /**
     * @var string|null
     */
    private $paidAmount;

    /**
     * @var string
     */
    private $dueAmount;

    /**
     * @var InvoiceLineItem2[]|null
     */
    private $lineItems;

    /**
     * @var InvoiceDiscount[]|null
     */
    private $discounts;

    /**
     * @var InvoiceTax[]|null
     */
    private $taxes;

    /**
     * @var InvoiceCredit[]|null
     */
    private $credits;

    /**
     * @var InvoiceRefund[]|null
     */
    private $refunds;

    /**
     * @var InvoicePayment[]|null
     */
    private $payments;

    /**
     * @var InvoiceCustomField[]|null
     */
    private $customFields;

    /**
     * @var InvoiceDisplaySettings|null
     */
    private $displaySettings;

    /**
     * @var string|null
     */
    private $publicUrl;

    /**
     * @var InvoicePreviousBalance|null
     */
    private $previousBalanceData;

    /**
     * @var string
     */
    private $chargebackStatus;

    /**
     * @var string
     */
    private $fromCollectionMethod;

    /**
     * @var string
     */
    private $toCollectionMethod;

    /**
     * @var string|null
     */
    private $gatewayTransId;

    /**
     * @var string|null
     */
    private $amount;

    /**
     * @var array
     */
    private $fromStatus;

    /**
     * @var array
     */
    private $toStatus;

    /**
     * @var \DateTime|null
     */
    private $appliedDate;

    /**
     * @var string|null
     */
    private $remainingAmount;

    /**
     * @var CreditNoteApplication[]|null
     */
    private $applications;

    /**
     * @var OriginInvoice[]|null
     */
    private $originInvoices;

    /**
     * @var string|null
     */
    private $originCreditNoteUid;

    /**
     * @var string|null
     */
    private $originCreditNoteNumber;

    /**
     * @var int
     */
    private $amountInCents;

    /**
     * @var bool
     */
    private $applyCredit;

    /**
     * @var CreditNote1
     */
    private $creditNoteAttributes;

    /**
     * @var int
     */
    private $paymentId;

    /**
     * @var int
     */
    private $refundId;

    /**
     * @var bool
     */
    private $isAdvanceInvoice;

    /**
     * @var string
     */
    private $reason;

    /**
     * @param string $uid
     * @param string $creditNoteNumber
     * @param string $creditNoteUid
     * @param string $originalAmount
     * @param string $appliedAmount
     * @param \DateTime $transactionTime
     * @param string $debitNoteNumber
     * @param string $debitNoteUid
     * @param string $consolidationLevel
     * @param PaymentMethodApplePay|PaymentMethodBankAccount|PaymentMethodCreditCard|PaymentMethodExternal|PaymentMethodPaypal $paymentMethod
     * @param int $transactionId
     * @param bool $prepayment
     * @param string $totalAmount
     * @param string $refundAmount
     * @param string $dueAmount
     * @param string $chargebackStatus
     * @param string $fromCollectionMethod
     * @param string $toCollectionMethod
     * @param array $fromStatus
     * @param array $toStatus
     * @param int $amountInCents
     * @param bool $applyCredit
     * @param CreditNote1 $creditNoteAttributes
     * @param int $paymentId
     * @param int $refundId
     * @param bool $isAdvanceInvoice
     * @param string $reason
     */
    public function __construct(
        string $uid,
        string $creditNoteNumber,
        string $creditNoteUid,
        string $originalAmount,
        string $appliedAmount,
        \DateTime $transactionTime,
        string $debitNoteNumber,
        string $debitNoteUid,
        string $consolidationLevel,
        $paymentMethod,
        int $transactionId,
        bool $prepayment,
        string $totalAmount,
        string $refundAmount,
        string $dueAmount,
        string $chargebackStatus,
        string $fromCollectionMethod,
        string $toCollectionMethod,
        array $fromStatus,
        array $toStatus,
        int $amountInCents,
        bool $applyCredit,
        CreditNote1 $creditNoteAttributes,
        int $paymentId,
        int $refundId,
        bool $isAdvanceInvoice,
        string $reason
    ) {
        $this->uid = $uid;
        $this->creditNoteNumber = $creditNoteNumber;
        $this->creditNoteUid = $creditNoteUid;
        $this->originalAmount = $originalAmount;
        $this->appliedAmount = $appliedAmount;
        $this->transactionTime = $transactionTime;
        $this->debitNoteNumber = $debitNoteNumber;
        $this->debitNoteUid = $debitNoteUid;
        $this->consolidationLevel = $consolidationLevel;
        $this->paymentMethod = $paymentMethod;
        $this->transactionId = $transactionId;
        $this->prepayment = $prepayment;
        $this->totalAmount = $totalAmount;
        $this->refundAmount = $refundAmount;
        $this->dueAmount = $dueAmount;
        $this->chargebackStatus = $chargebackStatus;
        $this->fromCollectionMethod = $fromCollectionMethod;
        $this->toCollectionMethod = $toCollectionMethod;
        $this->fromStatus = $fromStatus;
        $this->toStatus = $toStatus;
        $this->amountInCents = $amountInCents;
        $this->applyCredit = $applyCredit;
        $this->creditNoteAttributes = $creditNoteAttributes;
        $this->paymentId = $paymentId;
        $this->refundId = $refundId;
        $this->isAdvanceInvoice = $isAdvanceInvoice;
        $this->reason = $reason;
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
    public function getTransactionTime(): \DateTime
    {
        return $this->transactionTime;
    }

    /**
     * Sets Transaction Time.
     * The time the credit note was applied, in ISO 8601 format, i.e. "2019-06-07T17:20:06Z"
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
     * @factory \AdvancedBillingLib\Models\InvoiceRole2::checkValue
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
    public function getConsolidationLevel(): string
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
     * @required
     * @maps consolidation_level
     * @factory \AdvancedBillingLib\Models\InvoiceConsolidationLevel::checkValue
     */
    public function setConsolidationLevel(string $consolidationLevel): void
    {
        $this->consolidationLevel = $consolidationLevel;
    }

    /**
     * Returns Payment Method.
     * A nested data structure detailing the method of payment
     *
     * @return PaymentMethodApplePay|PaymentMethodBankAccount|PaymentMethodCreditCard|PaymentMethodExternal|PaymentMethodPaypal
     */
    public function getPaymentMethod()
    {
        return $this->paymentMethod;
    }

    /**
     * Sets Payment Method.
     * A nested data structure detailing the method of payment
     *
     * @required
     * @maps payment_method
     * @mapsBy anyOf(PaymentMethodApplePay,PaymentMethodBankAccount,PaymentMethodCreditCard,PaymentMethodExternal,PaymentMethodPaypal)
     *
     * @param PaymentMethodApplePay|PaymentMethodBankAccount|PaymentMethodCreditCard|PaymentMethodExternal|PaymentMethodPaypal $paymentMethod
     */
    public function setPaymentMethod($paymentMethod): void
    {
        $this->paymentMethod = $paymentMethod;
    }

    /**
     * Returns Transaction Id.
     * The Chargify id of the original payment
     */
    public function getTransactionId(): int
    {
        return $this->transactionId;
    }

    /**
     * Sets Transaction Id.
     * The Chargify id of the original payment
     *
     * @required
     * @maps transaction_id
     */
    public function setTransactionId(int $transactionId): void
    {
        $this->transactionId = $transactionId;
    }

    /**
     * Returns Parent Invoice Number.
     * For invoices with `consolidation_level` of `child`, this specifies the number of the parent
     * (consolidated) invoice.
     */
    public function getParentInvoiceNumber(): ?int
    {
        if (count($this->parentInvoiceNumber) == 0) {
            return null;
        }
        return $this->parentInvoiceNumber['value'];
    }

    /**
     * Sets Parent Invoice Number.
     * For invoices with `consolidation_level` of `child`, this specifies the number of the parent
     * (consolidated) invoice.
     *
     * @maps parent_invoice_number
     */
    public function setParentInvoiceNumber(?int $parentInvoiceNumber): void
    {
        $this->parentInvoiceNumber['value'] = $parentInvoiceNumber;
    }

    /**
     * Unsets Parent Invoice Number.
     * For invoices with `consolidation_level` of `child`, this specifies the number of the parent
     * (consolidated) invoice.
     */
    public function unsetParentInvoiceNumber(): void
    {
        $this->parentInvoiceNumber = [];
    }

    /**
     * Returns Remaining Prepayment Amount.
     */
    public function getRemainingPrepaymentAmount(): ?string
    {
        if (count($this->remainingPrepaymentAmount) == 0) {
            return null;
        }
        return $this->remainingPrepaymentAmount['value'];
    }

    /**
     * Sets Remaining Prepayment Amount.
     *
     * @maps remaining_prepayment_amount
     */
    public function setRemainingPrepaymentAmount(?string $remainingPrepaymentAmount): void
    {
        $this->remainingPrepaymentAmount['value'] = $remainingPrepaymentAmount;
    }

    /**
     * Unsets Remaining Prepayment Amount.
     */
    public function unsetRemainingPrepaymentAmount(): void
    {
        $this->remainingPrepaymentAmount = [];
    }

    /**
     * Returns Prepayment.
     * The flag that shows whether the original payment was a prepayment or not
     */
    public function getPrepayment(): bool
    {
        return $this->prepayment;
    }

    /**
     * Sets Prepayment.
     * The flag that shows whether the original payment was a prepayment or not
     *
     * @required
     * @maps prepayment
     */
    public function setPrepayment(bool $prepayment): void
    {
        $this->prepayment = $prepayment;
    }

    /**
     * Returns External.
     */
    public function getExternal(): ?bool
    {
        return $this->external;
    }

    /**
     * Sets External.
     *
     * @maps external
     */
    public function setExternal(?bool $external): void
    {
        $this->external = $external;
    }

    /**
     * Returns Id.
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Sets Id.
     *
     * @maps id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Site Id.
     * ID of the site to which the invoice belongs.
     */
    public function getSiteId(): ?int
    {
        return $this->siteId;
    }

    /**
     * Sets Site Id.
     * ID of the site to which the invoice belongs.
     *
     * @maps site_id
     */
    public function setSiteId(?int $siteId): void
    {
        $this->siteId = $siteId;
    }

    /**
     * Returns Customer Id.
     * ID of the customer to which the invoice belongs.
     */
    public function getCustomerId(): ?int
    {
        return $this->customerId;
    }

    /**
     * Sets Customer Id.
     * ID of the customer to which the invoice belongs.
     *
     * @maps customer_id
     */
    public function setCustomerId(?int $customerId): void
    {
        $this->customerId = $customerId;
    }

    /**
     * Returns Subscription Id.
     * ID of the subscription that generated the invoice.
     */
    public function getSubscriptionId(): ?int
    {
        return $this->subscriptionId;
    }

    /**
     * Sets Subscription Id.
     * ID of the subscription that generated the invoice.
     *
     * @maps subscription_id
     */
    public function setSubscriptionId(?int $subscriptionId): void
    {
        $this->subscriptionId = $subscriptionId;
    }

    /**
     * Returns Number.
     * A unique, identifying string that appears on the invoice and in places the invoice is referenced.
     *
     * While the UID is long and not appropriate to show to customers, the number is usually shorter and
     * consumable by the customer and the merchant alike.
     */
    public function getNumber(): ?string
    {
        return $this->number;
    }

    /**
     * Sets Number.
     * A unique, identifying string that appears on the invoice and in places the invoice is referenced.
     *
     * While the UID is long and not appropriate to show to customers, the number is usually shorter and
     * consumable by the customer and the merchant alike.
     *
     * @maps number
     */
    public function setNumber(?string $number): void
    {
        $this->number = $number;
    }

    /**
     * Returns Sequence Number.
     * A monotonically increasing number assigned to invoices as they are created.  This number is unique
     * within a site and can be used to sort and order invoices.
     */
    public function getSequenceNumber(): ?int
    {
        return $this->sequenceNumber;
    }

    /**
     * Sets Sequence Number.
     * A monotonically increasing number assigned to invoices as they are created.  This number is unique
     * within a site and can be used to sort and order invoices.
     *
     * @maps sequence_number
     */
    public function setSequenceNumber(?int $sequenceNumber): void
    {
        $this->sequenceNumber = $sequenceNumber;
    }

    /**
     * Returns Created At.
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    /**
     * Sets Created At.
     *
     * @maps created_at
     * @factory \AdvancedBillingLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setCreatedAt(?\DateTime $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * Returns Updated At.
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }

    /**
     * Sets Updated At.
     *
     * @maps updated_at
     * @factory \AdvancedBillingLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setUpdatedAt(?\DateTime $updatedAt): void
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * Returns Issue Date.
     * Date the invoice was issued to the customer.  This is the date that the invoice was made available
     * for payment.
     *
     * The format is `"YYYY-MM-DD"`.
     */
    public function getIssueDate(): ?\DateTime
    {
        return $this->issueDate;
    }

    /**
     * Sets Issue Date.
     * Date the invoice was issued to the customer.  This is the date that the invoice was made available
     * for payment.
     *
     * The format is `"YYYY-MM-DD"`.
     *
     * @maps issue_date
     * @factory \AdvancedBillingLib\Utils\DateTimeHelper::fromSimpleDate
     */
    public function setIssueDate(?\DateTime $issueDate): void
    {
        $this->issueDate = $issueDate;
    }

    /**
     * Returns Due Date.
     * Date the invoice is due.
     *
     * The format is `"YYYY-MM-DD"`.
     */
    public function getDueDate(): ?\DateTime
    {
        return $this->dueDate;
    }

    /**
     * Sets Due Date.
     * Date the invoice is due.
     *
     * The format is `"YYYY-MM-DD"`.
     *
     * @maps due_date
     * @factory \AdvancedBillingLib\Utils\DateTimeHelper::fromSimpleDate
     */
    public function setDueDate(?\DateTime $dueDate): void
    {
        $this->dueDate = $dueDate;
    }

    /**
     * Returns Paid Date.
     * Date the invoice became fully paid.
     *
     * If partial payments are applied to the invoice, this date will not be present until payment has been
     * made in full.
     *
     * The format is `"YYYY-MM-DD"`.
     */
    public function getPaidDate(): ?\DateTime
    {
        if (count($this->paidDate) == 0) {
            return null;
        }
        return $this->paidDate['value'];
    }

    /**
     * Sets Paid Date.
     * Date the invoice became fully paid.
     *
     * If partial payments are applied to the invoice, this date will not be present until payment has been
     * made in full.
     *
     * The format is `"YYYY-MM-DD"`.
     *
     * @maps paid_date
     * @factory \AdvancedBillingLib\Utils\DateTimeHelper::fromSimpleDate
     */
    public function setPaidDate(?\DateTime $paidDate): void
    {
        $this->paidDate['value'] = $paidDate;
    }

    /**
     * Unsets Paid Date.
     * Date the invoice became fully paid.
     *
     * If partial payments are applied to the invoice, this date will not be present until payment has been
     * made in full.
     *
     * The format is `"YYYY-MM-DD"`.
     */
    public function unsetPaidDate(): void
    {
        $this->paidDate = [];
    }

    /**
     * Returns Status.
     * The current status of the invoice. See [Invoice Statuses](https://maxio-chargify.zendesk.com/hc/en-
     * us/articles/5405078794253-Introduction-to-Invoices#invoice-statuses) for more.
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Sets Status.
     * The current status of the invoice. See [Invoice Statuses](https://maxio-chargify.zendesk.com/hc/en-
     * us/articles/5405078794253-Introduction-to-Invoices#invoice-statuses) for more.
     *
     * @maps status
     * @factory \AdvancedBillingLib\Models\InvoiceStatus::checkValue
     */
    public function setStatus(?string $status): void
    {
        $this->status = $status;
    }

    /**
     * Returns Parent Invoice Id.
     */
    public function getParentInvoiceId(): ?int
    {
        if (count($this->parentInvoiceId) == 0) {
            return null;
        }
        return $this->parentInvoiceId['value'];
    }

    /**
     * Sets Parent Invoice Id.
     *
     * @maps parent_invoice_id
     */
    public function setParentInvoiceId(?int $parentInvoiceId): void
    {
        $this->parentInvoiceId['value'] = $parentInvoiceId;
    }

    /**
     * Unsets Parent Invoice Id.
     */
    public function unsetParentInvoiceId(): void
    {
        $this->parentInvoiceId = [];
    }

    /**
     * Returns Collection Method.
     * The type of payment collection to be used in the subscription. For legacy Statements Architecture
     * valid options are - `invoice`, `automatic`. For current Relationship Invoicing Architecture valid
     * options are - `remittance`, `automatic`, `prepaid`.
     */
    public function getCollectionMethod(): ?string
    {
        return $this->collectionMethod;
    }

    /**
     * Sets Collection Method.
     * The type of payment collection to be used in the subscription. For legacy Statements Architecture
     * valid options are - `invoice`, `automatic`. For current Relationship Invoicing Architecture valid
     * options are - `remittance`, `automatic`, `prepaid`.
     *
     * @maps collection_method
     * @factory \AdvancedBillingLib\Models\CollectionMethod::checkValue
     */
    public function setCollectionMethod(?string $collectionMethod): void
    {
        $this->collectionMethod = $collectionMethod;
    }

    /**
     * Returns Payment Instructions.
     * A message that is printed on the invoice when it is marked for remittance collection. It is intended
     * to describe to the customer how they may make payment, and is configured by the merchant.
     */
    public function getPaymentInstructions(): ?string
    {
        return $this->paymentInstructions;
    }

    /**
     * Sets Payment Instructions.
     * A message that is printed on the invoice when it is marked for remittance collection. It is intended
     * to describe to the customer how they may make payment, and is configured by the merchant.
     *
     * @maps payment_instructions
     */
    public function setPaymentInstructions(?string $paymentInstructions): void
    {
        $this->paymentInstructions = $paymentInstructions;
    }

    /**
     * Returns Currency.
     * The ISO 4217 currency code (3 character string) representing the currency of invoice transaction.
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    /**
     * Sets Currency.
     * The ISO 4217 currency code (3 character string) representing the currency of invoice transaction.
     *
     * @maps currency
     */
    public function setCurrency(?string $currency): void
    {
        $this->currency = $currency;
    }

    /**
     * Returns Parent Invoice Uid.
     * For invoices with `consolidation_level` of `child`, this specifies the UID of the parent
     * (consolidated) invoice.
     */
    public function getParentInvoiceUid(): ?string
    {
        if (count($this->parentInvoiceUid) == 0) {
            return null;
        }
        return $this->parentInvoiceUid['value'];
    }

    /**
     * Sets Parent Invoice Uid.
     * For invoices with `consolidation_level` of `child`, this specifies the UID of the parent
     * (consolidated) invoice.
     *
     * @maps parent_invoice_uid
     */
    public function setParentInvoiceUid(?string $parentInvoiceUid): void
    {
        $this->parentInvoiceUid['value'] = $parentInvoiceUid;
    }

    /**
     * Unsets Parent Invoice Uid.
     * For invoices with `consolidation_level` of `child`, this specifies the UID of the parent
     * (consolidated) invoice.
     */
    public function unsetParentInvoiceUid(): void
    {
        $this->parentInvoiceUid = [];
    }

    /**
     * Returns Subscription Group Id.
     */
    public function getSubscriptionGroupId(): ?int
    {
        if (count($this->subscriptionGroupId) == 0) {
            return null;
        }
        return $this->subscriptionGroupId['value'];
    }

    /**
     * Sets Subscription Group Id.
     *
     * @maps subscription_group_id
     */
    public function setSubscriptionGroupId(?int $subscriptionGroupId): void
    {
        $this->subscriptionGroupId['value'] = $subscriptionGroupId;
    }

    /**
     * Unsets Subscription Group Id.
     */
    public function unsetSubscriptionGroupId(): void
    {
        $this->subscriptionGroupId = [];
    }

    /**
     * Returns Group Primary Subscription Id.
     * For invoices with `consolidation_level` of `parent`, this specifies the ID of the subscription which
     * was the primary subscription of the subscription group that generated the invoice.
     */
    public function getGroupPrimarySubscriptionId(): ?int
    {
        if (count($this->groupPrimarySubscriptionId) == 0) {
            return null;
        }
        return $this->groupPrimarySubscriptionId['value'];
    }

    /**
     * Sets Group Primary Subscription Id.
     * For invoices with `consolidation_level` of `parent`, this specifies the ID of the subscription which
     * was the primary subscription of the subscription group that generated the invoice.
     *
     * @maps group_primary_subscription_id
     */
    public function setGroupPrimarySubscriptionId(?int $groupPrimarySubscriptionId): void
    {
        $this->groupPrimarySubscriptionId['value'] = $groupPrimarySubscriptionId;
    }

    /**
     * Unsets Group Primary Subscription Id.
     * For invoices with `consolidation_level` of `parent`, this specifies the ID of the subscription which
     * was the primary subscription of the subscription group that generated the invoice.
     */
    public function unsetGroupPrimarySubscriptionId(): void
    {
        $this->groupPrimarySubscriptionId = [];
    }

    /**
     * Returns Product Name.
     * The name of the product subscribed when the invoice was generated.
     */
    public function getProductName(): ?string
    {
        return $this->productName;
    }

    /**
     * Sets Product Name.
     * The name of the product subscribed when the invoice was generated.
     *
     * @maps product_name
     */
    public function setProductName(?string $productName): void
    {
        $this->productName = $productName;
    }

    /**
     * Returns Product Family Name.
     * The name of the product family subscribed when the invoice was generated.
     */
    public function getProductFamilyName(): ?string
    {
        return $this->productFamilyName;
    }

    /**
     * Sets Product Family Name.
     * The name of the product family subscribed when the invoice was generated.
     *
     * @maps product_family_name
     */
    public function setProductFamilyName(?string $productFamilyName): void
    {
        $this->productFamilyName = $productFamilyName;
    }

    /**
     * Returns Seller.
     * Information about the seller (merchant) listed on the masthead of the invoice.
     */
    public function getSeller(): ?InvoiceSeller
    {
        return $this->seller;
    }

    /**
     * Sets Seller.
     * Information about the seller (merchant) listed on the masthead of the invoice.
     *
     * @maps seller
     */
    public function setSeller(?InvoiceSeller $seller): void
    {
        $this->seller = $seller;
    }

    /**
     * Returns Customer.
     * Information about the customer who is owner or recipient the invoiced subscription.
     */
    public function getCustomer(): ?InvoiceCustomer
    {
        return $this->customer;
    }

    /**
     * Sets Customer.
     * Information about the customer who is owner or recipient the invoiced subscription.
     *
     * @maps customer
     */
    public function setCustomer(?InvoiceCustomer $customer): void
    {
        $this->customer = $customer;
    }

    /**
     * Returns Payer.
     */
    public function getPayer(): ?InvoicePayer
    {
        return $this->payer;
    }

    /**
     * Sets Payer.
     *
     * @maps payer
     */
    public function setPayer(?InvoicePayer $payer): void
    {
        $this->payer = $payer;
    }

    /**
     * Returns Recipient Emails.
     *
     * @return string[]|null
     */
    public function getRecipientEmails(): ?array
    {
        return $this->recipientEmails;
    }

    /**
     * Sets Recipient Emails.
     *
     * @maps recipient_emails
     *
     * @param string[]|null $recipientEmails
     */
    public function setRecipientEmails(?array $recipientEmails): void
    {
        $this->recipientEmails = $recipientEmails;
    }

    /**
     * Returns Net Terms.
     */
    public function getNetTerms(): ?int
    {
        return $this->netTerms;
    }

    /**
     * Sets Net Terms.
     *
     * @maps net_terms
     */
    public function setNetTerms(?int $netTerms): void
    {
        $this->netTerms = $netTerms;
    }

    /**
     * Returns Billing Address.
     */
    public function getBillingAddress(): ?BillingAddress
    {
        return $this->billingAddress;
    }

    /**
     * Sets Billing Address.
     *
     * @maps billing_address
     */
    public function setBillingAddress(?BillingAddress $billingAddress): void
    {
        $this->billingAddress = $billingAddress;
    }

    /**
     * Returns Shipping Address.
     */
    public function getShippingAddress(): ?ShippingAddress
    {
        return $this->shippingAddress;
    }

    /**
     * Sets Shipping Address.
     *
     * @maps shipping_address
     */
    public function setShippingAddress(?ShippingAddress $shippingAddress): void
    {
        $this->shippingAddress = $shippingAddress;
    }

    /**
     * Returns Subtotal Amount.
     * Subtotal of the invoice, which is the sum of all line items before discounts or taxes.
     */
    public function getSubtotalAmount(): ?string
    {
        return $this->subtotalAmount;
    }

    /**
     * Sets Subtotal Amount.
     * Subtotal of the invoice, which is the sum of all line items before discounts or taxes.
     *
     * @maps subtotal_amount
     */
    public function setSubtotalAmount(?string $subtotalAmount): void
    {
        $this->subtotalAmount = $subtotalAmount;
    }

    /**
     * Returns Discount Amount.
     * Total discount applied to the invoice.
     */
    public function getDiscountAmount(): ?string
    {
        return $this->discountAmount;
    }

    /**
     * Sets Discount Amount.
     * Total discount applied to the invoice.
     *
     * @maps discount_amount
     */
    public function setDiscountAmount(?string $discountAmount): void
    {
        $this->discountAmount = $discountAmount;
    }

    /**
     * Returns Tax Amount.
     * Total tax on the invoice.
     */
    public function getTaxAmount(): ?string
    {
        return $this->taxAmount;
    }

    /**
     * Sets Tax Amount.
     * Total tax on the invoice.
     *
     * @maps tax_amount
     */
    public function setTaxAmount(?string $taxAmount): void
    {
        $this->taxAmount = $taxAmount;
    }

    /**
     * Returns Total Amount.
     * The invoice total, which is `subtotal_amount - discount_amount + tax_amount`.'
     */
    public function getTotalAmount(): string
    {
        return $this->totalAmount;
    }

    /**
     * Sets Total Amount.
     * The invoice total, which is `subtotal_amount - discount_amount + tax_amount`.'
     *
     * @required
     * @maps total_amount
     */
    public function setTotalAmount(string $totalAmount): void
    {
        $this->totalAmount = $totalAmount;
    }

    /**
     * Returns Credit Amount.
     * The amount of credit (from credit notes) applied to this invoice.
     *
     * Credits offset the amount due from the customer.
     */
    public function getCreditAmount(): ?string
    {
        return $this->creditAmount;
    }

    /**
     * Sets Credit Amount.
     * The amount of credit (from credit notes) applied to this invoice.
     *
     * Credits offset the amount due from the customer.
     *
     * @maps credit_amount
     */
    public function setCreditAmount(?string $creditAmount): void
    {
        $this->creditAmount = $creditAmount;
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
     * Returns Paid Amount.
     * The amount paid on the invoice by the customer.
     */
    public function getPaidAmount(): ?string
    {
        return $this->paidAmount;
    }

    /**
     * Sets Paid Amount.
     * The amount paid on the invoice by the customer.
     *
     * @maps paid_amount
     */
    public function setPaidAmount(?string $paidAmount): void
    {
        $this->paidAmount = $paidAmount;
    }

    /**
     * Returns Due Amount.
     * Amount due on the invoice, which is `total_amount - credit_amount - paid_amount`.
     */
    public function getDueAmount(): string
    {
        return $this->dueAmount;
    }

    /**
     * Sets Due Amount.
     * Amount due on the invoice, which is `total_amount - credit_amount - paid_amount`.
     *
     * @required
     * @maps due_amount
     */
    public function setDueAmount(string $dueAmount): void
    {
        $this->dueAmount = $dueAmount;
    }

    /**
     * Returns Line Items.
     * Line items on the invoice.
     *
     * @return InvoiceLineItem2[]|null
     */
    public function getLineItems(): ?array
    {
        return $this->lineItems;
    }

    /**
     * Sets Line Items.
     * Line items on the invoice.
     *
     * @maps line_items
     *
     * @param InvoiceLineItem2[]|null $lineItems
     */
    public function setLineItems(?array $lineItems): void
    {
        $this->lineItems = $lineItems;
    }

    /**
     * Returns Discounts.
     *
     * @return InvoiceDiscount[]|null
     */
    public function getDiscounts(): ?array
    {
        return $this->discounts;
    }

    /**
     * Sets Discounts.
     *
     * @maps discounts
     *
     * @param InvoiceDiscount[]|null $discounts
     */
    public function setDiscounts(?array $discounts): void
    {
        $this->discounts = $discounts;
    }

    /**
     * Returns Taxes.
     *
     * @return InvoiceTax[]|null
     */
    public function getTaxes(): ?array
    {
        return $this->taxes;
    }

    /**
     * Sets Taxes.
     *
     * @maps taxes
     *
     * @param InvoiceTax[]|null $taxes
     */
    public function setTaxes(?array $taxes): void
    {
        $this->taxes = $taxes;
    }

    /**
     * Returns Credits.
     *
     * @return InvoiceCredit[]|null
     */
    public function getCredits(): ?array
    {
        return $this->credits;
    }

    /**
     * Sets Credits.
     *
     * @maps credits
     *
     * @param InvoiceCredit[]|null $credits
     */
    public function setCredits(?array $credits): void
    {
        $this->credits = $credits;
    }

    /**
     * Returns Refunds.
     *
     * @return InvoiceRefund[]|null
     */
    public function getRefunds(): ?array
    {
        return $this->refunds;
    }

    /**
     * Sets Refunds.
     *
     * @maps refunds
     *
     * @param InvoiceRefund[]|null $refunds
     */
    public function setRefunds(?array $refunds): void
    {
        $this->refunds = $refunds;
    }

    /**
     * Returns Payments.
     *
     * @return InvoicePayment[]|null
     */
    public function getPayments(): ?array
    {
        return $this->payments;
    }

    /**
     * Sets Payments.
     *
     * @maps payments
     *
     * @param InvoicePayment[]|null $payments
     */
    public function setPayments(?array $payments): void
    {
        $this->payments = $payments;
    }

    /**
     * Returns Custom Fields.
     *
     * @return InvoiceCustomField[]|null
     */
    public function getCustomFields(): ?array
    {
        return $this->customFields;
    }

    /**
     * Sets Custom Fields.
     *
     * @maps custom_fields
     *
     * @param InvoiceCustomField[]|null $customFields
     */
    public function setCustomFields(?array $customFields): void
    {
        $this->customFields = $customFields;
    }

    /**
     * Returns Display Settings.
     */
    public function getDisplaySettings(): ?InvoiceDisplaySettings
    {
        return $this->displaySettings;
    }

    /**
     * Sets Display Settings.
     *
     * @maps display_settings
     */
    public function setDisplaySettings(?InvoiceDisplaySettings $displaySettings): void
    {
        $this->displaySettings = $displaySettings;
    }

    /**
     * Returns Public Url.
     * The public URL of the invoice
     */
    public function getPublicUrl(): ?string
    {
        return $this->publicUrl;
    }

    /**
     * Sets Public Url.
     * The public URL of the invoice
     *
     * @maps public_url
     */
    public function setPublicUrl(?string $publicUrl): void
    {
        $this->publicUrl = $publicUrl;
    }

    /**
     * Returns Previous Balance Data.
     */
    public function getPreviousBalanceData(): ?InvoicePreviousBalance
    {
        return $this->previousBalanceData;
    }

    /**
     * Sets Previous Balance Data.
     *
     * @maps previous_balance_data
     */
    public function setPreviousBalanceData(?InvoicePreviousBalance $previousBalanceData): void
    {
        $this->previousBalanceData = $previousBalanceData;
    }

    /**
     * Returns Chargeback Status.
     */
    public function getChargebackStatus(): string
    {
        return $this->chargebackStatus;
    }

    /**
     * Sets Chargeback Status.
     *
     * @required
     * @maps chargeback_status
     * @factory \AdvancedBillingLib\Models\ChargebackStatus::checkValue
     */
    public function setChargebackStatus(string $chargebackStatus): void
    {
        $this->chargebackStatus = $chargebackStatus;
    }

    /**
     * Returns From Collection Method.
     * The previous collection method of the invoice.
     */
    public function getFromCollectionMethod(): string
    {
        return $this->fromCollectionMethod;
    }

    /**
     * Sets From Collection Method.
     * The previous collection method of the invoice.
     *
     * @required
     * @maps from_collection_method
     */
    public function setFromCollectionMethod(string $fromCollectionMethod): void
    {
        $this->fromCollectionMethod = $fromCollectionMethod;
    }

    /**
     * Returns To Collection Method.
     * The new collection method of the invoice.
     */
    public function getToCollectionMethod(): string
    {
        return $this->toCollectionMethod;
    }

    /**
     * Sets To Collection Method.
     * The new collection method of the invoice.
     *
     * @required
     * @maps to_collection_method
     */
    public function setToCollectionMethod(string $toCollectionMethod): void
    {
        $this->toCollectionMethod = $toCollectionMethod;
    }

    /**
     * Returns Gateway Trans Id.
     * Identifier for the transaction within the payment gateway.
     */
    public function getGatewayTransId(): ?string
    {
        return $this->gatewayTransId;
    }

    /**
     * Sets Gateway Trans Id.
     * Identifier for the transaction within the payment gateway.
     *
     * @maps gateway_trans_id
     */
    public function setGatewayTransId(?string $gatewayTransId): void
    {
        $this->gatewayTransId = $gatewayTransId;
    }

    /**
     * Returns Amount.
     * The monetary value associated with the linked payment, expressed in dollars.
     */
    public function getAmount(): ?string
    {
        return $this->amount;
    }

    /**
     * Sets Amount.
     * The monetary value associated with the linked payment, expressed in dollars.
     *
     * @maps amount
     */
    public function setAmount(?string $amount): void
    {
        $this->amount = $amount;
    }

    /**
     * Returns From Status.
     */
    public function getFromStatus(): array
    {
        return $this->fromStatus;
    }

    /**
     * Sets From Status.
     *
     * @required
     * @maps from_status
     */
    public function setFromStatus(array $fromStatus): void
    {
        $this->fromStatus = $fromStatus;
    }

    /**
     * Returns To Status.
     */
    public function getToStatus(): array
    {
        return $this->toStatus;
    }

    /**
     * Sets To Status.
     *
     * @required
     * @maps to_status
     */
    public function setToStatus(array $toStatus): void
    {
        $this->toStatus = $toStatus;
    }

    /**
     * Returns Applied Date.
     * Credit notes are applied to invoices to offset invoiced amounts - they reduce the amount due. This
     * field is the date the credit note became fully applied to invoices.
     *
     * If the credit note has been partially applied, this field will not have a value until it has been
     * fully applied.
     *
     * The format is `"YYYY-MM-DD"`.
     */
    public function getAppliedDate(): ?\DateTime
    {
        return $this->appliedDate;
    }

    /**
     * Sets Applied Date.
     * Credit notes are applied to invoices to offset invoiced amounts - they reduce the amount due. This
     * field is the date the credit note became fully applied to invoices.
     *
     * If the credit note has been partially applied, this field will not have a value until it has been
     * fully applied.
     *
     * The format is `"YYYY-MM-DD"`.
     *
     * @maps applied_date
     * @factory \AdvancedBillingLib\Utils\DateTimeHelper::fromSimpleDate
     */
    public function setAppliedDate(?\DateTime $appliedDate): void
    {
        $this->appliedDate = $appliedDate;
    }

    /**
     * Returns Remaining Amount.
     * The amount of the credit note remaining to be applied to invoices, which is `total_amount -
     * applied_amount`.
     */
    public function getRemainingAmount(): ?string
    {
        return $this->remainingAmount;
    }

    /**
     * Sets Remaining Amount.
     * The amount of the credit note remaining to be applied to invoices, which is `total_amount -
     * applied_amount`.
     *
     * @maps remaining_amount
     */
    public function setRemainingAmount(?string $remainingAmount): void
    {
        $this->remainingAmount = $remainingAmount;
    }

    /**
     * Returns Applications.
     *
     * @return CreditNoteApplication[]|null
     */
    public function getApplications(): ?array
    {
        return $this->applications;
    }

    /**
     * Sets Applications.
     *
     * @maps applications
     *
     * @param CreditNoteApplication[]|null $applications
     */
    public function setApplications(?array $applications): void
    {
        $this->applications = $applications;
    }

    /**
     * Returns Origin Invoices.
     * An array of origin invoices for the credit note. Learn more about [Origin Invoice from our
     * docs](https://chargify.zendesk.com/hc/en-us/articles/4407753036699#origin-invoices)
     *
     * @return OriginInvoice[]|null
     */
    public function getOriginInvoices(): ?array
    {
        return $this->originInvoices;
    }

    /**
     * Sets Origin Invoices.
     * An array of origin invoices for the credit note. Learn more about [Origin Invoice from our
     * docs](https://chargify.zendesk.com/hc/en-us/articles/4407753036699#origin-invoices)
     *
     * @maps origin_invoices
     *
     * @param OriginInvoice[]|null $originInvoices
     */
    public function setOriginInvoices(?array $originInvoices): void
    {
        $this->originInvoices = $originInvoices;
    }

    /**
     * Returns Origin Credit Note Uid.
     * Unique identifier for the connected credit note. It is generated automatically by Chargify and has
     * the prefix "cn_" followed by alphanumeric characters.
     *
     * While the UID is long and not appropriate to show to customers, the number is usually shorter and
     * consumable by the customer and the merchant alike.
     */
    public function getOriginCreditNoteUid(): ?string
    {
        return $this->originCreditNoteUid;
    }

    /**
     * Sets Origin Credit Note Uid.
     * Unique identifier for the connected credit note. It is generated automatically by Chargify and has
     * the prefix "cn_" followed by alphanumeric characters.
     *
     * While the UID is long and not appropriate to show to customers, the number is usually shorter and
     * consumable by the customer and the merchant alike.
     *
     * @maps origin_credit_note_uid
     */
    public function setOriginCreditNoteUid(?string $originCreditNoteUid): void
    {
        $this->originCreditNoteUid = $originCreditNoteUid;
    }

    /**
     * Returns Origin Credit Note Number.
     * A unique, identifying string of the connected credit note.
     */
    public function getOriginCreditNoteNumber(): ?string
    {
        return $this->originCreditNoteNumber;
    }

    /**
     * Sets Origin Credit Note Number.
     * A unique, identifying string of the connected credit note.
     *
     * @maps origin_credit_note_number
     */
    public function setOriginCreditNoteNumber(?string $originCreditNoteNumber): void
    {
        $this->originCreditNoteNumber = $originCreditNoteNumber;
    }

    /**
     * Returns Amount in Cents.
     * The monetary value of the payment, expressed in cents.
     */
    public function getAmountInCents(): int
    {
        return $this->amountInCents;
    }

    /**
     * Sets Amount in Cents.
     * The monetary value of the payment, expressed in cents.
     *
     * @required
     * @maps amount_in_cents
     */
    public function setAmountInCents(int $amountInCents): void
    {
        $this->amountInCents = $amountInCents;
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
     * Returns Credit Note Attributes.
     */
    public function getCreditNoteAttributes(): CreditNote1
    {
        return $this->creditNoteAttributes;
    }

    /**
     * Sets Credit Note Attributes.
     *
     * @required
     * @maps credit_note_attributes
     */
    public function setCreditNoteAttributes(CreditNote1 $creditNoteAttributes): void
    {
        $this->creditNoteAttributes = $creditNoteAttributes;
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
     * Returns Is Advance Invoice.
     * If true, the invoice is an advance invoice.
     */
    public function getIsAdvanceInvoice(): bool
    {
        return $this->isAdvanceInvoice;
    }

    /**
     * Sets Is Advance Invoice.
     * If true, the invoice is an advance invoice.
     *
     * @required
     * @maps is_advance_invoice
     */
    public function setIsAdvanceInvoice(bool $isAdvanceInvoice): void
    {
        $this->isAdvanceInvoice = $isAdvanceInvoice;
    }

    /**
     * Returns Reason.
     * The reason for the void.
     */
    public function getReason(): string
    {
        return $this->reason;
    }

    /**
     * Sets Reason.
     * The reason for the void.
     *
     * @required
     * @maps reason
     */
    public function setReason(string $reason): void
    {
        $this->reason = $reason;
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
        $json['uid']                               = $this->uid;
        $json['credit_note_number']                = $this->creditNoteNumber;
        $json['credit_note_uid']                   = $this->creditNoteUid;
        $json['original_amount']                   = $this->originalAmount;
        $json['applied_amount']                    = $this->appliedAmount;
        $json['transaction_time']                  = DateTimeHelper::toRfc3339DateTime($this->transactionTime);
        $json['memo']                              = $this->memo;
        if (isset($this->role)) {
            $json['role']                          = InvoiceRole2::checkValue($this->role);
        }
        if (isset($this->consolidatedInvoice)) {
            $json['consolidated_invoice']          = $this->consolidatedInvoice;
        }
        if (isset($this->appliedCreditNotes)) {
            $json['applied_credit_notes']          = $this->appliedCreditNotes;
        }
        $json['debit_note_number']                 = $this->debitNoteNumber;
        $json['debit_note_uid']                    = $this->debitNoteUid;
        $json['consolidation_level']               = InvoiceConsolidationLevel::checkValue($this->consolidationLevel);
        $json['payment_method']                    =
            ApiHelper::getJsonHelper()->verifyTypes(
                $this->paymentMethod,
                'anyOf(PaymentMethodApplePay,PaymentMethodBankAccount,PaymentMethodCreditCard,Payment' .
                'MethodExternal,PaymentMethodPaypal)'
            );
        $json['transaction_id']                    = $this->transactionId;
        if (!empty($this->parentInvoiceNumber)) {
            $json['parent_invoice_number']         = $this->parentInvoiceNumber['value'];
        }
        if (!empty($this->remainingPrepaymentAmount)) {
            $json['remaining_prepayment_amount']   = $this->remainingPrepaymentAmount['value'];
        }
        $json['prepayment']                        = $this->prepayment;
        if (isset($this->external)) {
            $json['external']                      = $this->external;
        }
        if (isset($this->id)) {
            $json['id']                            = $this->id;
        }
        if (isset($this->siteId)) {
            $json['site_id']                       = $this->siteId;
        }
        if (isset($this->customerId)) {
            $json['customer_id']                   = $this->customerId;
        }
        if (isset($this->subscriptionId)) {
            $json['subscription_id']               = $this->subscriptionId;
        }
        if (isset($this->number)) {
            $json['number']                        = $this->number;
        }
        if (isset($this->sequenceNumber)) {
            $json['sequence_number']               = $this->sequenceNumber;
        }
        if (isset($this->createdAt)) {
            $json['created_at']                    = DateTimeHelper::toRfc3339DateTime($this->createdAt);
        }
        if (isset($this->updatedAt)) {
            $json['updated_at']                    = DateTimeHelper::toRfc3339DateTime($this->updatedAt);
        }
        if (isset($this->issueDate)) {
            $json['issue_date']                    = DateTimeHelper::toSimpleDate($this->issueDate);
        }
        if (isset($this->dueDate)) {
            $json['due_date']                      = DateTimeHelper::toSimpleDate($this->dueDate);
        }
        if (!empty($this->paidDate)) {
            $json['paid_date']                     = DateTimeHelper::toSimpleDate($this->paidDate['value']);
        }
        if (isset($this->status)) {
            $json['status']                        = InvoiceStatus::checkValue($this->status);
        }
        if (!empty($this->parentInvoiceId)) {
            $json['parent_invoice_id']             = $this->parentInvoiceId['value'];
        }
        if (isset($this->collectionMethod)) {
            $json['collection_method']             = CollectionMethod::checkValue($this->collectionMethod);
        }
        if (isset($this->paymentInstructions)) {
            $json['payment_instructions']          = $this->paymentInstructions;
        }
        if (isset($this->currency)) {
            $json['currency']                      = $this->currency;
        }
        if (!empty($this->parentInvoiceUid)) {
            $json['parent_invoice_uid']            = $this->parentInvoiceUid['value'];
        }
        if (!empty($this->subscriptionGroupId)) {
            $json['subscription_group_id']         = $this->subscriptionGroupId['value'];
        }
        if (!empty($this->groupPrimarySubscriptionId)) {
            $json['group_primary_subscription_id'] = $this->groupPrimarySubscriptionId['value'];
        }
        if (isset($this->productName)) {
            $json['product_name']                  = $this->productName;
        }
        if (isset($this->productFamilyName)) {
            $json['product_family_name']           = $this->productFamilyName;
        }
        if (isset($this->seller)) {
            $json['seller']                        = $this->seller;
        }
        if (isset($this->customer)) {
            $json['customer']                      = $this->customer;
        }
        if (isset($this->payer)) {
            $json['payer']                         = $this->payer;
        }
        if (isset($this->recipientEmails)) {
            $json['recipient_emails']              = $this->recipientEmails;
        }
        if (isset($this->netTerms)) {
            $json['net_terms']                     = $this->netTerms;
        }
        if (isset($this->billingAddress)) {
            $json['billing_address']               = $this->billingAddress;
        }
        if (isset($this->shippingAddress)) {
            $json['shipping_address']              = $this->shippingAddress;
        }
        if (isset($this->subtotalAmount)) {
            $json['subtotal_amount']               = $this->subtotalAmount;
        }
        if (isset($this->discountAmount)) {
            $json['discount_amount']               = $this->discountAmount;
        }
        if (isset($this->taxAmount)) {
            $json['tax_amount']                    = $this->taxAmount;
        }
        $json['total_amount']                      = $this->totalAmount;
        if (isset($this->creditAmount)) {
            $json['credit_amount']                 = $this->creditAmount;
        }
        $json['refund_amount']                     = $this->refundAmount;
        if (isset($this->paidAmount)) {
            $json['paid_amount']                   = $this->paidAmount;
        }
        $json['due_amount']                        = $this->dueAmount;
        if (isset($this->lineItems)) {
            $json['line_items']                    = $this->lineItems;
        }
        if (isset($this->discounts)) {
            $json['discounts']                     = $this->discounts;
        }
        if (isset($this->taxes)) {
            $json['taxes']                         = $this->taxes;
        }
        if (isset($this->credits)) {
            $json['credits']                       = $this->credits;
        }
        if (isset($this->refunds)) {
            $json['refunds']                       = $this->refunds;
        }
        if (isset($this->payments)) {
            $json['payments']                      = $this->payments;
        }
        if (isset($this->customFields)) {
            $json['custom_fields']                 = $this->customFields;
        }
        if (isset($this->displaySettings)) {
            $json['display_settings']              = $this->displaySettings;
        }
        if (isset($this->publicUrl)) {
            $json['public_url']                    = $this->publicUrl;
        }
        if (isset($this->previousBalanceData)) {
            $json['previous_balance_data']         = $this->previousBalanceData;
        }
        $json['chargeback_status']                 = ChargebackStatus::checkValue($this->chargebackStatus);
        $json['from_collection_method']            = $this->fromCollectionMethod;
        $json['to_collection_method']              = $this->toCollectionMethod;
        if (isset($this->gatewayTransId)) {
            $json['gateway_trans_id']              = $this->gatewayTransId;
        }
        if (isset($this->amount)) {
            $json['amount']                        = $this->amount;
        }
        $json['from_status']                       = $this->fromStatus;
        $json['to_status']                         = $this->toStatus;
        if (isset($this->appliedDate)) {
            $json['applied_date']                  = DateTimeHelper::toSimpleDate($this->appliedDate);
        }
        if (isset($this->remainingAmount)) {
            $json['remaining_amount']              = $this->remainingAmount;
        }
        if (isset($this->applications)) {
            $json['applications']                  = $this->applications;
        }
        if (isset($this->originInvoices)) {
            $json['origin_invoices']               = $this->originInvoices;
        }
        if (isset($this->originCreditNoteUid)) {
            $json['origin_credit_note_uid']        = $this->originCreditNoteUid;
        }
        if (isset($this->originCreditNoteNumber)) {
            $json['origin_credit_note_number']     = $this->originCreditNoteNumber;
        }
        $json['amount_in_cents']                   = $this->amountInCents;
        $json['apply_credit']                      = $this->applyCredit;
        $json['credit_note_attributes']            = $this->creditNoteAttributes;
        $json['payment_id']                        = $this->paymentId;
        $json['refund_id']                         = $this->refundId;
        $json['is_advance_invoice']                = $this->isAdvanceInvoice;
        $json['reason']                            = $this->reason;
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
