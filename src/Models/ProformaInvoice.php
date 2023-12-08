<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

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
     * @var int|null
     */
    private $customerId;

    /**
     * @var int|null
     */
    private $subscriptionId;

    /**
     * @var int|null
     */
    private $number;

    /**
     * @var int|null
     */
    private $sequenceNumber;

    /**
     * @var string|null
     */
    private $createdAt;

    /**
     * @var string|null
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
     * @var ProformaCustomField[]|null
     */
    private $customFields;

    /**
     * @var string|null
     */
    private $publicUrl;

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
        return $this->customerId;
    }

    /**
     * Sets Customer Id.
     *
     * @maps customer_id
     */
    public function setCustomerId(?int $customerId): void
    {
        $this->customerId = $customerId;
    }

    /**
     * Returns Subscription Id.
     */
    public function getSubscriptionId(): ?int
    {
        return $this->subscriptionId;
    }

    /**
     * Sets Subscription Id.
     *
     * @maps subscription_id
     */
    public function setSubscriptionId(?int $subscriptionId): void
    {
        $this->subscriptionId = $subscriptionId;
    }

    /**
     * Returns Number.
     */
    public function getNumber(): ?int
    {
        return $this->number;
    }

    /**
     * Sets Number.
     *
     * @maps number
     */
    public function setNumber(?int $number): void
    {
        $this->number = $number;
    }

    /**
     * Returns Sequence Number.
     */
    public function getSequenceNumber(): ?int
    {
        return $this->sequenceNumber;
    }

    /**
     * Sets Sequence Number.
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
    public function getCreatedAt(): ?string
    {
        return $this->createdAt;
    }

    /**
     * Sets Created At.
     *
     * @maps created_at
     */
    public function setCreatedAt(?string $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * Returns Delivery Date.
     */
    public function getDeliveryDate(): ?string
    {
        return $this->deliveryDate;
    }

    /**
     * Sets Delivery Date.
     *
     * @maps delivery_date
     */
    public function setDeliveryDate(?string $deliveryDate): void
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
     */
    public function setStatus(?string $status): void
    {
        $this->status = $status;
    }

    /**
     * Returns Collection Method.
     */
    public function getCollectionMethod(): ?string
    {
        return $this->collectionMethod;
    }

    /**
     * Sets Collection Method.
     *
     * @maps collection_method
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
     */
    public function getConsolidationLevel(): ?string
    {
        return $this->consolidationLevel;
    }

    /**
     * Sets Consolidation Level.
     *
     * @maps consolidation_level
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
     * @return ProformaCustomField[]|null
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
     * @param ProformaCustomField[]|null $customFields
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
        return $this->publicUrl;
    }

    /**
     * Sets Public Url.
     *
     * @maps public_url
     */
    public function setPublicUrl(?string $publicUrl): void
    {
        $this->publicUrl = $publicUrl;
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
        if (isset($this->customerId)) {
            $json['customer_id']          = $this->customerId;
        }
        if (isset($this->subscriptionId)) {
            $json['subscription_id']      = $this->subscriptionId;
        }
        if (isset($this->number)) {
            $json['number']               = $this->number;
        }
        if (isset($this->sequenceNumber)) {
            $json['sequence_number']      = $this->sequenceNumber;
        }
        if (isset($this->createdAt)) {
            $json['created_at']           = $this->createdAt;
        }
        if (isset($this->deliveryDate)) {
            $json['delivery_date']        = $this->deliveryDate;
        }
        if (isset($this->status)) {
            $json['status']               = $this->status;
        }
        if (isset($this->collectionMethod)) {
            $json['collection_method']    = $this->collectionMethod;
        }
        if (isset($this->paymentInstructions)) {
            $json['payment_instructions'] = $this->paymentInstructions;
        }
        if (isset($this->currency)) {
            $json['currency']             = $this->currency;
        }
        if (isset($this->consolidationLevel)) {
            $json['consolidation_level']  = $this->consolidationLevel;
        }
        if (isset($this->productName)) {
            $json['product_name']         = $this->productName;
        }
        if (isset($this->productFamilyName)) {
            $json['product_family_name']  = $this->productFamilyName;
        }
        if (isset($this->role)) {
            $json['role']                 = $this->role;
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
        if (isset($this->publicUrl)) {
            $json['public_url']           = $this->publicUrl;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
