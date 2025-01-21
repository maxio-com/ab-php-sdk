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

class ProformaInvoice implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $uid;

    /**
     * @var int|null
     */
    private $siteId;

    /**
     * @var array
     */
    private $customerId = [];

    /**
     * @var array
     */
    private $subscriptionId = [];

    /**
     * @var array
     */
    private $number = [];

    /**
     * @var array
     */
    private $sequenceNumber = [];

    /**
     * @var \DateTime|null
     */
    private $createdAt;

    /**
     * @var \DateTime|null
     */
    private $deliveryDate;

    /**
     * @var string|null
     */
    private $status;

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
     * @var string|null
     */
    private $productName;

    /**
     * @var string|null
     */
    private $productFamilyName;

    /**
     * @var string|null
     */
    private $role;

    /**
     * @var InvoiceSeller|null
     */
    private $seller;

    /**
     * @var InvoiceCustomer|null
     */
    private $customer;

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
    private $paidAmount;

    /**
     * @var string|null
     */
    private $refundAmount;

    /**
     * @var string|null
     */
    private $dueAmount;

    /**
     * @var InvoiceLineItem[]|null
     */
    private $lineItems;

    /**
     * @var ProformaInvoiceDiscount[]|null
     */
    private $discounts;

    /**
     * @var ProformaInvoiceTax[]|null
     */
    private $taxes;

    /**
     * @var ProformaInvoiceCredit[]|null
     */
    private $credits;

    /**
     * @var ProformaInvoicePayment[]|null
     */
    private $payments;

    /**
     * @var InvoiceCustomField[]|null
     */
    private $customFields;

    /**
     * @var array
     */
    private $publicUrl = [];

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
     * Returns Site Id.
     */
    public function getSiteId(): ?int
    {
        return $this->siteId;
    }

    /**
     * Sets Site Id.
     *
     * @maps site_id
     */
    public function setSiteId(?int $siteId): void
    {
        $this->siteId = $siteId;
    }

    /**
     * Returns Customer Id.
     */
    public function getCustomerId(): ?int
    {
        if (count($this->customerId) == 0) {
            return null;
        }
        return $this->customerId['value'];
    }

    /**
     * Sets Customer Id.
     *
     * @maps customer_id
     */
    public function setCustomerId(?int $customerId): void
    {
        $this->customerId['value'] = $customerId;
    }

    /**
     * Unsets Customer Id.
     */
    public function unsetCustomerId(): void
    {
        $this->customerId = [];
    }

    /**
     * Returns Subscription Id.
     */
    public function getSubscriptionId(): ?int
    {
        if (count($this->subscriptionId) == 0) {
            return null;
        }
        return $this->subscriptionId['value'];
    }

    /**
     * Sets Subscription Id.
     *
     * @maps subscription_id
     */
    public function setSubscriptionId(?int $subscriptionId): void
    {
        $this->subscriptionId['value'] = $subscriptionId;
    }

    /**
     * Unsets Subscription Id.
     */
    public function unsetSubscriptionId(): void
    {
        $this->subscriptionId = [];
    }

    /**
     * Returns Number.
     */
    public function getNumber(): ?int
    {
        if (count($this->number) == 0) {
            return null;
        }
        return $this->number['value'];
    }

    /**
     * Sets Number.
     *
     * @maps number
     */
    public function setNumber(?int $number): void
    {
        $this->number['value'] = $number;
    }

    /**
     * Unsets Number.
     */
    public function unsetNumber(): void
    {
        $this->number = [];
    }

    /**
     * Returns Sequence Number.
     */
    public function getSequenceNumber(): ?int
    {
        if (count($this->sequenceNumber) == 0) {
            return null;
        }
        return $this->sequenceNumber['value'];
    }

    /**
     * Sets Sequence Number.
     *
     * @maps sequence_number
     */
    public function setSequenceNumber(?int $sequenceNumber): void
    {
        $this->sequenceNumber['value'] = $sequenceNumber;
    }

    /**
     * Unsets Sequence Number.
     */
    public function unsetSequenceNumber(): void
    {
        $this->sequenceNumber = [];
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
     * Returns Delivery Date.
     */
    public function getDeliveryDate(): ?\DateTime
    {
        return $this->deliveryDate;
    }

    /**
     * Sets Delivery Date.
     *
     * @maps delivery_date
     * @factory \AdvancedBillingLib\Utils\DateTimeHelper::fromSimpleDate
     */
    public function setDeliveryDate(?\DateTime $deliveryDate): void
    {
        $this->deliveryDate = $deliveryDate;
    }

    /**
     * Returns Status.
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Sets Status.
     *
     * @maps status
     * @factory \AdvancedBillingLib\Models\ProformaInvoiceStatus::checkValue
     */
    public function setStatus(?string $status): void
    {
        $this->status = $status;
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
     */
    public function getPaymentInstructions(): ?string
    {
        return $this->paymentInstructions;
    }

    /**
     * Sets Payment Instructions.
     *
     * @maps payment_instructions
     */
    public function setPaymentInstructions(?string $paymentInstructions): void
    {
        $this->paymentInstructions = $paymentInstructions;
    }

    /**
     * Returns Currency.
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    /**
     * Sets Currency.
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
     * Returns Product Name.
     */
    public function getProductName(): ?string
    {
        return $this->productName;
    }

    /**
     * Sets Product Name.
     *
     * @maps product_name
     */
    public function setProductName(?string $productName): void
    {
        $this->productName = $productName;
    }

    /**
     * Returns Product Family Name.
     */
    public function getProductFamilyName(): ?string
    {
        return $this->productFamilyName;
    }

    /**
     * Sets Product Family Name.
     *
     * @maps product_family_name
     */
    public function setProductFamilyName(?string $productFamilyName): void
    {
        $this->productFamilyName = $productFamilyName;
    }

    /**
     * Returns Role.
     * 'proforma' value is deprecated in favor of proforma_adhoc and proforma_automatic
     */
    public function getRole(): ?string
    {
        return $this->role;
    }

    /**
     * Sets Role.
     * 'proforma' value is deprecated in favor of proforma_adhoc and proforma_automatic
     *
     * @maps role
     * @factory \AdvancedBillingLib\Models\ProformaInvoiceRole::checkValue
     */
    public function setRole(?string $role): void
    {
        $this->role = $role;
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
     * Returns Billing Address.
     */
    public function getBillingAddress(): ?InvoiceAddress
    {
        return $this->billingAddress;
    }

    /**
     * Sets Billing Address.
     *
     * @maps billing_address
     */
    public function setBillingAddress(?InvoiceAddress $billingAddress): void
    {
        $this->billingAddress = $billingAddress;
    }

    /**
     * Returns Shipping Address.
     */
    public function getShippingAddress(): ?InvoiceAddress
    {
        return $this->shippingAddress;
    }

    /**
     * Sets Shipping Address.
     *
     * @maps shipping_address
     */
    public function setShippingAddress(?InvoiceAddress $shippingAddress): void
    {
        $this->shippingAddress = $shippingAddress;
    }

    /**
     * Returns Subtotal Amount.
     */
    public function getSubtotalAmount(): ?string
    {
        return $this->subtotalAmount;
    }

    /**
     * Sets Subtotal Amount.
     *
     * @maps subtotal_amount
     */
    public function setSubtotalAmount(?string $subtotalAmount): void
    {
        $this->subtotalAmount = $subtotalAmount;
    }

    /**
     * Returns Discount Amount.
     */
    public function getDiscountAmount(): ?string
    {
        return $this->discountAmount;
    }

    /**
     * Sets Discount Amount.
     *
     * @maps discount_amount
     */
    public function setDiscountAmount(?string $discountAmount): void
    {
        $this->discountAmount = $discountAmount;
    }

    /**
     * Returns Tax Amount.
     */
    public function getTaxAmount(): ?string
    {
        return $this->taxAmount;
    }

    /**
     * Sets Tax Amount.
     *
     * @maps tax_amount
     */
    public function setTaxAmount(?string $taxAmount): void
    {
        $this->taxAmount = $taxAmount;
    }

    /**
     * Returns Total Amount.
     */
    public function getTotalAmount(): ?string
    {
        return $this->totalAmount;
    }

    /**
     * Sets Total Amount.
     *
     * @maps total_amount
     */
    public function setTotalAmount(?string $totalAmount): void
    {
        $this->totalAmount = $totalAmount;
    }

    /**
     * Returns Credit Amount.
     */
    public function getCreditAmount(): ?string
    {
        return $this->creditAmount;
    }

    /**
     * Sets Credit Amount.
     *
     * @maps credit_amount
     */
    public function setCreditAmount(?string $creditAmount): void
    {
        $this->creditAmount = $creditAmount;
    }

    /**
     * Returns Paid Amount.
     */
    public function getPaidAmount(): ?string
    {
        return $this->paidAmount;
    }

    /**
     * Sets Paid Amount.
     *
     * @maps paid_amount
     */
    public function setPaidAmount(?string $paidAmount): void
    {
        $this->paidAmount = $paidAmount;
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
     * Returns Due Amount.
     */
    public function getDueAmount(): ?string
    {
        return $this->dueAmount;
    }

    /**
     * Sets Due Amount.
     *
     * @maps due_amount
     */
    public function setDueAmount(?string $dueAmount): void
    {
        $this->dueAmount = $dueAmount;
    }

    /**
     * Returns Line Items.
     *
     * @return InvoiceLineItem[]|null
     */
    public function getLineItems(): ?array
    {
        return $this->lineItems;
    }

    /**
     * Sets Line Items.
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
     * @return ProformaInvoiceDiscount[]|null
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
     * @param ProformaInvoiceDiscount[]|null $discounts
     */
    public function setDiscounts(?array $discounts): void
    {
        $this->discounts = $discounts;
    }

    /**
     * Returns Taxes.
     *
     * @return ProformaInvoiceTax[]|null
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
     * @param ProformaInvoiceTax[]|null $taxes
     */
    public function setTaxes(?array $taxes): void
    {
        $this->taxes = $taxes;
    }

    /**
     * Returns Credits.
     *
     * @return ProformaInvoiceCredit[]|null
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
     * @param ProformaInvoiceCredit[]|null $credits
     */
    public function setCredits(?array $credits): void
    {
        $this->credits = $credits;
    }

    /**
     * Returns Payments.
     *
     * @return ProformaInvoicePayment[]|null
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
     * @param ProformaInvoicePayment[]|null $payments
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
     * Returns Public Url.
     */
    public function getPublicUrl(): ?string
    {
        if (count($this->publicUrl) == 0) {
            return null;
        }
        return $this->publicUrl['value'];
    }

    /**
     * Sets Public Url.
     *
     * @maps public_url
     */
    public function setPublicUrl(?string $publicUrl): void
    {
        $this->publicUrl['value'] = $publicUrl;
    }

    /**
     * Unsets Public Url.
     */
    public function unsetPublicUrl(): void
    {
        $this->publicUrl = [];
    }

    /**
     * Converts the ProformaInvoice object to a human-readable string representation.
     *
     * @return string The string representation of the ProformaInvoice object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'ProformaInvoice',
            [
                'uid' => $this->uid,
                'siteId' => $this->siteId,
                'customerId' => $this->getCustomerId(),
                'subscriptionId' => $this->getSubscriptionId(),
                'number' => $this->getNumber(),
                'sequenceNumber' => $this->getSequenceNumber(),
                'createdAt' => $this->createdAt,
                'deliveryDate' => $this->deliveryDate,
                'status' => $this->status,
                'collectionMethod' => $this->collectionMethod,
                'paymentInstructions' => $this->paymentInstructions,
                'currency' => $this->currency,
                'consolidationLevel' => $this->consolidationLevel,
                'productName' => $this->productName,
                'productFamilyName' => $this->productFamilyName,
                'role' => $this->role,
                'seller' => $this->seller,
                'customer' => $this->customer,
                'memo' => $this->memo,
                'billingAddress' => $this->billingAddress,
                'shippingAddress' => $this->shippingAddress,
                'subtotalAmount' => $this->subtotalAmount,
                'discountAmount' => $this->discountAmount,
                'taxAmount' => $this->taxAmount,
                'totalAmount' => $this->totalAmount,
                'creditAmount' => $this->creditAmount,
                'paidAmount' => $this->paidAmount,
                'refundAmount' => $this->refundAmount,
                'dueAmount' => $this->dueAmount,
                'lineItems' => $this->lineItems,
                'discounts' => $this->discounts,
                'taxes' => $this->taxes,
                'credits' => $this->credits,
                'payments' => $this->payments,
                'customFields' => $this->customFields,
                'publicUrl' => $this->getPublicUrl(),
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
            $json['uid']                  = $this->uid;
        }
        if (isset($this->siteId)) {
            $json['site_id']              = $this->siteId;
        }
        if (!empty($this->customerId)) {
            $json['customer_id']          = $this->customerId['value'];
        }
        if (!empty($this->subscriptionId)) {
            $json['subscription_id']      = $this->subscriptionId['value'];
        }
        if (!empty($this->number)) {
            $json['number']               = $this->number['value'];
        }
        if (!empty($this->sequenceNumber)) {
            $json['sequence_number']      = $this->sequenceNumber['value'];
        }
        if (isset($this->createdAt)) {
            $json['created_at']           = DateTimeHelper::toRfc3339DateTime($this->createdAt);
        }
        if (isset($this->deliveryDate)) {
            $json['delivery_date']        = DateTimeHelper::toSimpleDate($this->deliveryDate);
        }
        if (isset($this->status)) {
            $json['status']               = ProformaInvoiceStatus::checkValue($this->status);
        }
        if (isset($this->collectionMethod)) {
            $json['collection_method']    = CollectionMethod::checkValue($this->collectionMethod);
        }
        if (isset($this->paymentInstructions)) {
            $json['payment_instructions'] = $this->paymentInstructions;
        }
        if (isset($this->currency)) {
            $json['currency']             = $this->currency;
        }
        if (isset($this->consolidationLevel)) {
            $json['consolidation_level']  = InvoiceConsolidationLevel::checkValue($this->consolidationLevel);
        }
        if (isset($this->productName)) {
            $json['product_name']         = $this->productName;
        }
        if (isset($this->productFamilyName)) {
            $json['product_family_name']  = $this->productFamilyName;
        }
        if (isset($this->role)) {
            $json['role']                 = ProformaInvoiceRole::checkValue($this->role);
        }
        if (isset($this->seller)) {
            $json['seller']               = $this->seller;
        }
        if (isset($this->customer)) {
            $json['customer']             = $this->customer;
        }
        if (isset($this->memo)) {
            $json['memo']                 = $this->memo;
        }
        if (isset($this->billingAddress)) {
            $json['billing_address']      = $this->billingAddress;
        }
        if (isset($this->shippingAddress)) {
            $json['shipping_address']     = $this->shippingAddress;
        }
        if (isset($this->subtotalAmount)) {
            $json['subtotal_amount']      = $this->subtotalAmount;
        }
        if (isset($this->discountAmount)) {
            $json['discount_amount']      = $this->discountAmount;
        }
        if (isset($this->taxAmount)) {
            $json['tax_amount']           = $this->taxAmount;
        }
        if (isset($this->totalAmount)) {
            $json['total_amount']         = $this->totalAmount;
        }
        if (isset($this->creditAmount)) {
            $json['credit_amount']        = $this->creditAmount;
        }
        if (isset($this->paidAmount)) {
            $json['paid_amount']          = $this->paidAmount;
        }
        if (isset($this->refundAmount)) {
            $json['refund_amount']        = $this->refundAmount;
        }
        if (isset($this->dueAmount)) {
            $json['due_amount']           = $this->dueAmount;
        }
        if (isset($this->lineItems)) {
            $json['line_items']           = $this->lineItems;
        }
        if (isset($this->discounts)) {
            $json['discounts']            = $this->discounts;
        }
        if (isset($this->taxes)) {
            $json['taxes']                = $this->taxes;
        }
        if (isset($this->credits)) {
            $json['credits']              = $this->credits;
        }
        if (isset($this->payments)) {
            $json['payments']             = $this->payments;
        }
        if (isset($this->customFields)) {
            $json['custom_fields']        = $this->customFields;
        }
        if (!empty($this->publicUrl)) {
            $json['public_url']           = $this->publicUrl['value'];
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
