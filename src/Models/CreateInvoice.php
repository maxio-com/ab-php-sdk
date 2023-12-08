<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class CreateInvoice implements \JsonSerializable
{
    /**
     * @var CreateInvoiceItem[]|null
     */
    private $lineItems;

    /**
     * @var string|null
     */
    private $issueDate;

    /**
     * @var int|null
     */
    private $netTerms;

    /**
     * @var string|null
     */
    private $paymentInstructions;

    /**
     * @var string|null
     */
    private $memo;

    /**
     * @var CreateInvoiceAddress|null
     */
    private $sellerAddress;

    /**
     * @var CreateInvoiceAddress|null
     */
    private $billingAddress;

    /**
     * @var CreateInvoiceAddress|null
     */
    private $shippingAddress;

    /**
     * @var CreateInvoiceCoupon[]|null
     */
    private $coupons;

    /**
     * @var string|null
     */
    private $status = Status1::OPEN;

    /**
     * Returns Line Items.
     *
     * @return CreateInvoiceItem[]|null
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
     * @param CreateInvoiceItem[]|null $lineItems
     */
    public function setLineItems(?array $lineItems): void
    {
        $this->lineItems = $lineItems;
    }

    /**
     * Returns Issue Date.
     */
    public function getIssueDate(): ?string
    {
        return $this->issueDate;
    }

    /**
     * Sets Issue Date.
     *
     * @maps issue_date
     */
    public function setIssueDate(?string $issueDate): void
    {
        $this->issueDate = $issueDate;
    }

    /**
     * Returns Net Terms.
     * By default, invoices will be created with a due date matching the date of invoice creation. If a
     * different due date is desired, the net_terms parameter can be sent indicating the number of days in
     * advance the due date should be.
     */
    public function getNetTerms(): ?int
    {
        return $this->netTerms;
    }

    /**
     * Sets Net Terms.
     * By default, invoices will be created with a due date matching the date of invoice creation. If a
     * different due date is desired, the net_terms parameter can be sent indicating the number of days in
     * advance the due date should be.
     *
     * @maps net_terms
     */
    public function setNetTerms(?int $netTerms): void
    {
        $this->netTerms = $netTerms;
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
     * Returns Memo.
     * A custom memo can be sent to override the site's default.
     */
    public function getMemo(): ?string
    {
        return $this->memo;
    }

    /**
     * Sets Memo.
     * A custom memo can be sent to override the site's default.
     *
     * @maps memo
     */
    public function setMemo(?string $memo): void
    {
        $this->memo = $memo;
    }

    /**
     * Returns Seller Address.
     * Overrides the defaults for the site
     */
    public function getSellerAddress(): ?CreateInvoiceAddress
    {
        return $this->sellerAddress;
    }

    /**
     * Sets Seller Address.
     * Overrides the defaults for the site
     *
     * @maps seller_address
     */
    public function setSellerAddress(?CreateInvoiceAddress $sellerAddress): void
    {
        $this->sellerAddress = $sellerAddress;
    }

    /**
     * Returns Billing Address.
     * Overrides the default for the customer
     */
    public function getBillingAddress(): ?CreateInvoiceAddress
    {
        return $this->billingAddress;
    }

    /**
     * Sets Billing Address.
     * Overrides the default for the customer
     *
     * @maps billing_address
     */
    public function setBillingAddress(?CreateInvoiceAddress $billingAddress): void
    {
        $this->billingAddress = $billingAddress;
    }

    /**
     * Returns Shipping Address.
     * Overrides the default for the customer
     */
    public function getShippingAddress(): ?CreateInvoiceAddress
    {
        return $this->shippingAddress;
    }

    /**
     * Sets Shipping Address.
     * Overrides the default for the customer
     *
     * @maps shipping_address
     */
    public function setShippingAddress(?CreateInvoiceAddress $shippingAddress): void
    {
        $this->shippingAddress = $shippingAddress;
    }

    /**
     * Returns Coupons.
     *
     * @return CreateInvoiceCoupon[]|null
     */
    public function getCoupons(): ?array
    {
        return $this->coupons;
    }

    /**
     * Sets Coupons.
     *
     * @maps coupons
     *
     * @param CreateInvoiceCoupon[]|null $coupons
     */
    public function setCoupons(?array $coupons): void
    {
        $this->coupons = $coupons;
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
     * @factory \AdvancedBillingLib\Models\Status1::checkValue
     */
    public function setStatus(?string $status): void
    {
        $this->status = $status;
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
        if (isset($this->lineItems)) {
            $json['line_items']           = $this->lineItems;
        }
        if (isset($this->issueDate)) {
            $json['issue_date']           = $this->issueDate;
        }
        if (isset($this->netTerms)) {
            $json['net_terms']            = $this->netTerms;
        }
        if (isset($this->paymentInstructions)) {
            $json['payment_instructions'] = $this->paymentInstructions;
        }
        if (isset($this->memo)) {
            $json['memo']                 = $this->memo;
        }
        if (isset($this->sellerAddress)) {
            $json['seller_address']       = $this->sellerAddress;
        }
        if (isset($this->billingAddress)) {
            $json['billing_address']      = $this->billingAddress;
        }
        if (isset($this->shippingAddress)) {
            $json['shipping_address']     = $this->shippingAddress;
        }
        if (isset($this->coupons)) {
            $json['coupons']              = $this->coupons;
        }
        if (isset($this->status)) {
            $json['status']               = Status1::checkValue($this->status);
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
