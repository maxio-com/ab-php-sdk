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

class Invoice implements \JsonSerializable
{
    /**
     * @var int|null
     */
    private $id;

    /**
     * @var string|null
     */
    private $uid;

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
    private $transactionTime;

    /**
     * @var \DateTime|null
     */
    private $createdAt;

    /**
     * @var \DateTime|null
     */
    private $updatedAt;

    /**
     * @var string|null
     */
    private $issueDate;

    /**
     * @var string|null
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
     * @var string|null
     */
    private $role;

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
     * @var string|null
     */
    private $consolidationLevel;

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
    private $parentInvoiceNumber = [];

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
     * @var string|null
     */
    private $memo;

    /**
     * @var InvoiceAddress|null
     */
    private $billingAddress;

    /**
     * @var InvoiceAddress|null
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
     * @var string|null
     */
    private $totalAmount;

    /**
     * @var string|null
     */
    private $creditAmount;

    /**
     * @var string|null
     */
    private $refundAmount;

    /**
     * @var string|null
     */
    private $paidAmount;

    /**
     * @var string|null
     */
    private $dueAmount;

    /**
     * @var InvoiceLineItem[]|null
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
     * Returns Uid.
     * Unique identifier for the invoice. It is generated automatically by Chargify and has the prefix
     * "inv_" followed by alphanumeric characters.
     */
    public function getUid(): ?string
    {
        return $this->uid;
    }

    /**
     * Sets Uid.
     * Unique identifier for the invoice. It is generated automatically by Chargify and has the prefix
     * "inv_" followed by alphanumeric characters.
     *
     * @maps uid
     */
    public function setUid(?string $uid): void
    {
        $this->uid = $uid;
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
    public function getIssueDate(): ?string
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
     */
    public function setIssueDate(?string $issueDate): void
    {
        $this->issueDate = $issueDate;
    }

    /**
     * Returns Due Date.
     * Date the invoice is due.
     *
     * The format is `"YYYY-MM-DD"`.
     */
    public function getDueDate(): ?string
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
     */
    public function setDueDate(?string $dueDate): void
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
    public function getPaidDate(): ?string
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
     */
    public function setPaidDate(?string $paidDate): void
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
     * The current status of the invoice. See [Invoice Statuses](https://chargify.zendesk.com/hc/en-
     * us/articles/4407737494171#line-item-breakdowns) for more.
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Sets Status.
     * The current status of the invoice. See [Invoice Statuses](https://chargify.zendesk.com/hc/en-
     * us/articles/4407737494171#line-item-breakdowns) for more.
     *
     * @maps status
     * @factory \AdvancedBillingLib\Models\Status::checkValue
     */
    public function setStatus(?string $status): void
    {
        $this->status = $status;
    }

    /**
     * Returns Role.
     */
    public function getRole(): ?string
    {
        return $this->role;
    }

    /**
     * Sets Role.
     *
     * @maps role
     */
    public function setRole(?string $role): void
    {
        $this->role = $role;
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
     * The collection method of the invoice, which is either "automatic" (tried and retried on an existing
     * payment method by Chargify) or "remittance" (payment must be remitted by the customer or keyed in by
     * the merchant).
     */
    public function getCollectionMethod(): ?string
    {
        return $this->collectionMethod;
    }

    /**
     * Sets Collection Method.
     * The collection method of the invoice, which is either "automatic" (tried and retried on an existing
     * payment method by Chargify) or "remittance" (payment must be remitted by the customer or keyed in by
     * the merchant).
     *
     * @maps collection_method
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
     * Returns Memo.
     * The memo printed on invoices of any collection type.  This message is in control of the merchant.
     */
    public function getMemo(): ?string
    {
        return $this->memo;
    }

    /**
     * Sets Memo.
     * The memo printed on invoices of any collection type.  This message is in control of the merchant.
     *
     * @maps memo
     */
    public function setMemo(?string $memo): void
    {
        $this->memo = $memo;
    }

    /**
     * Returns Billing Address.
     * The invoice billing address.
     */
    public function getBillingAddress(): ?InvoiceAddress
    {
        return $this->billingAddress;
    }

    /**
     * Sets Billing Address.
     * The invoice billing address.
     *
     * @maps billing_address
     */
    public function setBillingAddress(?InvoiceAddress $billingAddress): void
    {
        $this->billingAddress = $billingAddress;
    }

    /**
     * Returns Shipping Address.
     * The invoice shipping address.
     */
    public function getShippingAddress(): ?InvoiceAddress
    {
        return $this->shippingAddress;
    }

    /**
     * Sets Shipping Address.
     * The invoice shipping address.
     *
     * @maps shipping_address
     */
    public function setShippingAddress(?InvoiceAddress $shippingAddress): void
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
     */
    public function getRefundAmount(): ?string
    {
        return $this->refundAmount;
    }

    /**
     * Sets Refund Amount.
     *
     * @maps refund_amount
     */
    public function setRefundAmount(?string $refundAmount): void
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
     * Returns Line Items.
     * Line items on the invoice.
     *
     * @return InvoiceLineItem[]|null
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
     * @param InvoiceLineItem[]|null $lineItems
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
        if (isset($this->id)) {
            $json['id']                            = $this->id;
        }
        if (isset($this->uid)) {
            $json['uid']                           = $this->uid;
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
        if (isset($this->transactionTime)) {
            $json['transaction_time']              = DateTimeHelper::toRfc3339DateTime($this->transactionTime);
        }
        if (isset($this->createdAt)) {
            $json['created_at']                    = DateTimeHelper::toRfc3339DateTime($this->createdAt);
        }
        if (isset($this->updatedAt)) {
            $json['updated_at']                    = DateTimeHelper::toRfc3339DateTime($this->updatedAt);
        }
        if (isset($this->issueDate)) {
            $json['issue_date']                    = $this->issueDate;
        }
        if (isset($this->dueDate)) {
            $json['due_date']                      = $this->dueDate;
        }
        if (!empty($this->paidDate)) {
            $json['paid_date']                     = $this->paidDate['value'];
        }
        if (isset($this->status)) {
            $json['status']                        = Status::checkValue($this->status);
        }
        if (isset($this->role)) {
            $json['role']                          = $this->role;
        }
        if (!empty($this->parentInvoiceId)) {
            $json['parent_invoice_id']             = $this->parentInvoiceId['value'];
        }
        if (isset($this->collectionMethod)) {
            $json['collection_method']             = $this->collectionMethod;
        }
        if (isset($this->paymentInstructions)) {
            $json['payment_instructions']          = $this->paymentInstructions;
        }
        if (isset($this->currency)) {
            $json['currency']                      = $this->currency;
        }
        if (isset($this->consolidationLevel)) {
            $json['consolidation_level']           = InvoiceConsolidationLevel::checkValue($this->consolidationLevel);
        }
        if (!empty($this->parentInvoiceUid)) {
            $json['parent_invoice_uid']            = $this->parentInvoiceUid['value'];
        }
        if (!empty($this->subscriptionGroupId)) {
            $json['subscription_group_id']         = $this->subscriptionGroupId['value'];
        }
        if (!empty($this->parentInvoiceNumber)) {
            $json['parent_invoice_number']         = $this->parentInvoiceNumber['value'];
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
        if (isset($this->memo)) {
            $json['memo']                          = $this->memo;
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
        if (isset($this->totalAmount)) {
            $json['total_amount']                  = $this->totalAmount;
        }
        if (isset($this->creditAmount)) {
            $json['credit_amount']                 = $this->creditAmount;
        }
        if (isset($this->refundAmount)) {
            $json['refund_amount']                 = $this->refundAmount;
        }
        if (isset($this->paidAmount)) {
            $json['paid_amount']                   = $this->paidAmount;
        }
        if (isset($this->dueAmount)) {
            $json['due_amount']                    = $this->dueAmount;
        }
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

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
