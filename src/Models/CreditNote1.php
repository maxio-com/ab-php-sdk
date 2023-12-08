<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class CreditNote1 implements \JsonSerializable
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
     * @var string|null
     */
    private $number;

    /**
     * @var int|null
     */
    private $sequenceNumber;

    /**
     * @var string|null
     */
    private $issueDate;

    /**
     * @var string|null
     */
    private $appliedDate;

    /**
     * @var string|null
     */
    private $status;

    /**
     * @var string|null
     */
    private $currency;

    /**
     * @var string|null
     */
    private $memo;

    /**
     * @var Seller|null
     */
    private $seller;

    /**
     * @var Customer1|null
     */
    private $customer;

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
     * @var string|null
     */
    private $totalAmount;

    /**
     * @var string|null
     */
    private $appliedAmount;

    /**
     * @var string|null
     */
    private $remainingAmount;

    /**
     * @var CreditNoteLineItem[]|null
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
     * @var CreditNoteApplication[]|null
     */
    private $applications;

    /**
     * @var InvoiceRefund[]|null
     */
    private $refunds;

    /**
     * @var OriginInvoice[]|null
     */
    private $originInvoices;

    /**
     * Returns Uid.
     * Unique identifier for the credit note. It is generated automatically by Chargify and has the prefix
     * "cn_" followed by alphanumeric characters.
     */
    public function getUid(): ?string
    {
        return $this->uid;
    }

    /**
     * Sets Uid.
     * Unique identifier for the credit note. It is generated automatically by Chargify and has the prefix
     * "cn_" followed by alphanumeric characters.
     *
     * @maps uid
     */
    public function setUid(?string $uid): void
    {
        $this->uid = $uid;
    }

    /**
     * Returns Site Id.
     * ID of the site to which the credit note belongs.
     */
    public function getSiteId(): ?int
    {
        return $this->siteId;
    }

    /**
     * Sets Site Id.
     * ID of the site to which the credit note belongs.
     *
     * @maps site_id
     */
    public function setSiteId(?int $siteId): void
    {
        $this->siteId = $siteId;
    }

    /**
     * Returns Customer Id.
     * ID of the customer to which the credit note belongs.
     */
    public function getCustomerId(): ?int
    {
        return $this->customerId;
    }

    /**
     * Sets Customer Id.
     * ID of the customer to which the credit note belongs.
     *
     * @maps customer_id
     */
    public function setCustomerId(?int $customerId): void
    {
        $this->customerId = $customerId;
    }

    /**
     * Returns Subscription Id.
     * ID of the subscription that generated the credit note.
     */
    public function getSubscriptionId(): ?int
    {
        return $this->subscriptionId;
    }

    /**
     * Sets Subscription Id.
     * ID of the subscription that generated the credit note.
     *
     * @maps subscription_id
     */
    public function setSubscriptionId(?int $subscriptionId): void
    {
        $this->subscriptionId = $subscriptionId;
    }

    /**
     * Returns Number.
     * A unique, identifying string that appears on the credit note and in places it is referenced.
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
     * A unique, identifying string that appears on the credit note and in places it is referenced.
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
     * A monotonically increasing number assigned to credit notes as they are created.  This number is
     * unique within a site and can be used to sort and order credit notes.
     */
    public function getSequenceNumber(): ?int
    {
        return $this->sequenceNumber;
    }

    /**
     * Sets Sequence Number.
     * A monotonically increasing number assigned to credit notes as they are created.  This number is
     * unique within a site and can be used to sort and order credit notes.
     *
     * @maps sequence_number
     */
    public function setSequenceNumber(?int $sequenceNumber): void
    {
        $this->sequenceNumber = $sequenceNumber;
    }

    /**
     * Returns Issue Date.
     * Date the credit note was issued to the customer.  This is the date that the credit was made
     * available for application, and may come before it is fully applied.
     *
     * The format is `"YYYY-MM-DD"`.
     */
    public function getIssueDate(): ?string
    {
        return $this->issueDate;
    }

    /**
     * Sets Issue Date.
     * Date the credit note was issued to the customer.  This is the date that the credit was made
     * available for application, and may come before it is fully applied.
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
     * Returns Applied Date.
     * Credit notes are applied to invoices to offset invoiced amounts - they reduce the amount due. This
     * field is the date the credit note became fully applied to invoices.
     *
     * If the credit note has been partially applied, this field will not have a value until it has been
     * fully applied.
     *
     * The format is `"YYYY-MM-DD"`.
     */
    public function getAppliedDate(): ?string
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
     */
    public function setAppliedDate(?string $appliedDate): void
    {
        $this->appliedDate = $appliedDate;
    }

    /**
     * Returns Status.
     * Current status of the credit note. Valid values:
     *
     * * open
     * * applied
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Sets Status.
     * Current status of the credit note. Valid values:
     *
     * * open
     * * applied
     *
     * @maps status
     */
    public function setStatus(?string $status): void
    {
        $this->status = $status;
    }

    /**
     * Returns Currency.
     * The ISO 4217 currency code (3 character string) representing the currency of the credit note amount
     * fields.
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    /**
     * Sets Currency.
     * The ISO 4217 currency code (3 character string) representing the currency of the credit note amount
     * fields.
     *
     * @maps currency
     */
    public function setCurrency(?string $currency): void
    {
        $this->currency = $currency;
    }

    /**
     * Returns Memo.
     * The memo printed on credit note, which is a description of the reason for the credit.
     */
    public function getMemo(): ?string
    {
        return $this->memo;
    }

    /**
     * Sets Memo.
     * The memo printed on credit note, which is a description of the reason for the credit.
     *
     * @maps memo
     */
    public function setMemo(?string $memo): void
    {
        $this->memo = $memo;
    }

    /**
     * Returns Seller.
     */
    public function getSeller(): ?Seller
    {
        return $this->seller;
    }

    /**
     * Sets Seller.
     *
     * @maps seller
     */
    public function setSeller(?Seller $seller): void
    {
        $this->seller = $seller;
    }

    /**
     * Returns Customer.
     */
    public function getCustomer(): ?Customer1
    {
        return $this->customer;
    }

    /**
     * Sets Customer.
     *
     * @maps customer
     */
    public function setCustomer(?Customer1 $customer): void
    {
        $this->customer = $customer;
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
     * Subtotal of the credit note, which is the sum of all line items before discounts or taxes. Note that
     * this is a positive amount representing the credit back to the customer.
     */
    public function getSubtotalAmount(): ?string
    {
        return $this->subtotalAmount;
    }

    /**
     * Sets Subtotal Amount.
     * Subtotal of the credit note, which is the sum of all line items before discounts or taxes. Note that
     * this is a positive amount representing the credit back to the customer.
     *
     * @maps subtotal_amount
     */
    public function setSubtotalAmount(?string $subtotalAmount): void
    {
        $this->subtotalAmount = $subtotalAmount;
    }

    /**
     * Returns Discount Amount.
     * Total discount applied to the credit note. Note that this is a positive amount representing the
     * discount amount being credited back to the customer (i.e. a credit on an earlier discount). For
     * example, if the original purchase was $1.00 and the original discount was $0.10, a credit of $0.50
     * of the original purchase (half) would have a discount credit of $0.05 (also half).
     */
    public function getDiscountAmount(): ?string
    {
        return $this->discountAmount;
    }

    /**
     * Sets Discount Amount.
     * Total discount applied to the credit note. Note that this is a positive amount representing the
     * discount amount being credited back to the customer (i.e. a credit on an earlier discount). For
     * example, if the original purchase was $1.00 and the original discount was $0.10, a credit of $0.50
     * of the original purchase (half) would have a discount credit of $0.05 (also half).
     *
     * @maps discount_amount
     */
    public function setDiscountAmount(?string $discountAmount): void
    {
        $this->discountAmount = $discountAmount;
    }

    /**
     * Returns Tax Amount.
     * Total tax of the credit note. Note that this is a positive amount representing a previously taxex
     * amount being credited back to the customer (i.e. a credit of an earlier tax). For example, if the
     * original purchase was $1.00 and the original tax was $0.10, a credit of $0.50 of the original
     * purchase (half) would also have a tax credit of $0.05 (also half).
     */
    public function getTaxAmount(): ?string
    {
        return $this->taxAmount;
    }

    /**
     * Sets Tax Amount.
     * Total tax of the credit note. Note that this is a positive amount representing a previously taxex
     * amount being credited back to the customer (i.e. a credit of an earlier tax). For example, if the
     * original purchase was $1.00 and the original tax was $0.10, a credit of $0.50 of the original
     * purchase (half) would also have a tax credit of $0.05 (also half).
     *
     * @maps tax_amount
     */
    public function setTaxAmount(?string $taxAmount): void
    {
        $this->taxAmount = $taxAmount;
    }

    /**
     * Returns Total Amount.
     * The credit note total, which is `subtotal_amount - discount_amount + tax_amount`.'
     */
    public function getTotalAmount(): ?string
    {
        return $this->totalAmount;
    }

    /**
     * Sets Total Amount.
     * The credit note total, which is `subtotal_amount - discount_amount + tax_amount`.'
     *
     * @maps total_amount
     */
    public function setTotalAmount(?string $totalAmount): void
    {
        $this->totalAmount = $totalAmount;
    }

    /**
     * Returns Applied Amount.
     * The amount of the credit note that has already been applied to invoices.
     */
    public function getAppliedAmount(): ?string
    {
        return $this->appliedAmount;
    }

    /**
     * Sets Applied Amount.
     * The amount of the credit note that has already been applied to invoices.
     *
     * @maps applied_amount
     */
    public function setAppliedAmount(?string $appliedAmount): void
    {
        $this->appliedAmount = $appliedAmount;
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
     * Returns Line Items.
     * Line items on the credit note.
     *
     * @return CreditNoteLineItem[]|null
     */
    public function getLineItems(): ?array
    {
        return $this->lineItems;
    }

    /**
     * Sets Line Items.
     * Line items on the credit note.
     *
     * @maps line_items
     *
     * @param CreditNoteLineItem[]|null $lineItems
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
        if (isset($this->siteId)) {
            $json['site_id']          = $this->siteId;
        }
        if (isset($this->customerId)) {
            $json['customer_id']      = $this->customerId;
        }
        if (isset($this->subscriptionId)) {
            $json['subscription_id']  = $this->subscriptionId;
        }
        if (isset($this->number)) {
            $json['number']           = $this->number;
        }
        if (isset($this->sequenceNumber)) {
            $json['sequence_number']  = $this->sequenceNumber;
        }
        if (isset($this->issueDate)) {
            $json['issue_date']       = $this->issueDate;
        }
        if (isset($this->appliedDate)) {
            $json['applied_date']     = $this->appliedDate;
        }
        if (isset($this->status)) {
            $json['status']           = $this->status;
        }
        if (isset($this->currency)) {
            $json['currency']         = $this->currency;
        }
        if (isset($this->memo)) {
            $json['memo']             = $this->memo;
        }
        if (isset($this->seller)) {
            $json['seller']           = $this->seller;
        }
        if (isset($this->customer)) {
            $json['customer']         = $this->customer;
        }
        if (isset($this->billingAddress)) {
            $json['billing_address']  = $this->billingAddress;
        }
        if (isset($this->shippingAddress)) {
            $json['shipping_address'] = $this->shippingAddress;
        }
        if (isset($this->subtotalAmount)) {
            $json['subtotal_amount']  = $this->subtotalAmount;
        }
        if (isset($this->discountAmount)) {
            $json['discount_amount']  = $this->discountAmount;
        }
        if (isset($this->taxAmount)) {
            $json['tax_amount']       = $this->taxAmount;
        }
        if (isset($this->totalAmount)) {
            $json['total_amount']     = $this->totalAmount;
        }
        if (isset($this->appliedAmount)) {
            $json['applied_amount']   = $this->appliedAmount;
        }
        if (isset($this->remainingAmount)) {
            $json['remaining_amount'] = $this->remainingAmount;
        }
        if (isset($this->lineItems)) {
            $json['line_items']       = $this->lineItems;
        }
        if (isset($this->discounts)) {
            $json['discounts']        = $this->discounts;
        }
        if (isset($this->taxes)) {
            $json['taxes']            = $this->taxes;
        }
        if (isset($this->applications)) {
            $json['applications']     = $this->applications;
        }
        if (isset($this->refunds)) {
            $json['refunds']          = $this->refunds;
        }
        if (isset($this->originInvoices)) {
            $json['origin_invoices']  = $this->originInvoices;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
