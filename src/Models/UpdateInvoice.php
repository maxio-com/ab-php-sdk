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
 * Attributes of a draft ad hoc invoice which can be updated. Only the submitted attributes are changed.
 */
class UpdateInvoice implements \JsonSerializable
{
    /**
     * @var UpdateInvoiceItem[]|null
     */
    private $lineItems;

    /**
     * @var \DateTime|null
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
     * Returns Line Items.
     * Line item changes to apply. Line items without a `uid` are added, line items with a `uid` are
     * updated, and line items with a `uid` and `_destroy` set to `true` are removed. Existing line items
     * not referenced in the array remain unchanged.
     *
     * @return UpdateInvoiceItem[]|null
     */
    public function getLineItems(): ?array
    {
        return $this->lineItems;
    }

    /**
     * Sets Line Items.
     * Line item changes to apply. Line items without a `uid` are added, line items with a `uid` are
     * updated, and line items with a `uid` and `_destroy` set to `true` are removed. Existing line items
     * not referenced in the array remain unchanged.
     *
     * @maps line_items
     *
     * @param UpdateInvoiceItem[]|null $lineItems
     */
    public function setLineItems(?array $lineItems): void
    {
        $this->lineItems = $lineItems;
    }

    /**
     * Returns Issue Date.
     * New issue date for the invoice (format YYYY-MM-DD). This date is interpreted and validated in your
     * site's time zone. It must be today or a date in the past — future dates are not accepted. The due
     * date is recalculated from the issue date and net terms.
     */
    public function getIssueDate(): ?\DateTime
    {
        return $this->issueDate;
    }

    /**
     * Sets Issue Date.
     * New issue date for the invoice (format YYYY-MM-DD). This date is interpreted and validated in your
     * site's time zone. It must be today or a date in the past — future dates are not accepted. The due
     * date is recalculated from the issue date and net terms.
     *
     * @maps issue_date
     * @factory \AdvancedBillingLib\Utils\DateTimeHelper::fromSimpleDate
     */
    public function setIssueDate(?\DateTime $issueDate): void
    {
        $this->issueDate = $issueDate;
    }

    /**
     * Returns Net Terms.
     * Number of days after the issue date on which the invoice is due. The due date is recalculated when
     * net terms or the issue date change.
     */
    public function getNetTerms(): ?int
    {
        return $this->netTerms;
    }

    /**
     * Sets Net Terms.
     * Number of days after the issue date on which the invoice is due. The due date is recalculated when
     * net terms or the issue date change.
     *
     * @maps net_terms
     */
    public function setNetTerms(?int $netTerms): void
    {
        $this->netTerms = $netTerms;
    }

    /**
     * Returns Payment Instructions.
     * Custom payment instructions displayed on the invoice.
     */
    public function getPaymentInstructions(): ?string
    {
        return $this->paymentInstructions;
    }

    /**
     * Sets Payment Instructions.
     * Custom payment instructions displayed on the invoice.
     *
     * @maps payment_instructions
     */
    public function setPaymentInstructions(?string $paymentInstructions): void
    {
        $this->paymentInstructions = $paymentInstructions;
    }

    /**
     * Returns Memo.
     * A custom memo displayed on the invoice.
     */
    public function getMemo(): ?string
    {
        return $this->memo;
    }

    /**
     * Sets Memo.
     * A custom memo displayed on the invoice.
     *
     * @maps memo
     */
    public function setMemo(?string $memo): void
    {
        $this->memo = $memo;
    }

    /**
     * Returns Seller Address.
     * Replaces the seller address on the invoice
     */
    public function getSellerAddress(): ?CreateInvoiceAddress
    {
        return $this->sellerAddress;
    }

    /**
     * Sets Seller Address.
     * Replaces the seller address on the invoice
     *
     * @maps seller_address
     */
    public function setSellerAddress(?CreateInvoiceAddress $sellerAddress): void
    {
        $this->sellerAddress = $sellerAddress;
    }

    /**
     * Returns Billing Address.
     * Replaces the billing address on the invoice
     */
    public function getBillingAddress(): ?CreateInvoiceAddress
    {
        return $this->billingAddress;
    }

    /**
     * Sets Billing Address.
     * Replaces the billing address on the invoice
     *
     * @maps billing_address
     */
    public function setBillingAddress(?CreateInvoiceAddress $billingAddress): void
    {
        $this->billingAddress = $billingAddress;
    }

    /**
     * Returns Shipping Address.
     * Replaces the shipping address on the invoice
     */
    public function getShippingAddress(): ?CreateInvoiceAddress
    {
        return $this->shippingAddress;
    }

    /**
     * Sets Shipping Address.
     * Replaces the shipping address on the invoice
     *
     * @maps shipping_address
     */
    public function setShippingAddress(?CreateInvoiceAddress $shippingAddress): void
    {
        $this->shippingAddress = $shippingAddress;
    }

    /**
     * Returns Coupons.
     * When present, replaces all discounts currently applied to the invoice. Send an empty array to remove
     * all discounts.
     *
     * @return CreateInvoiceCoupon[]|null
     */
    public function getCoupons(): ?array
    {
        return $this->coupons;
    }

    /**
     * Sets Coupons.
     * When present, replaces all discounts currently applied to the invoice. Send an empty array to remove
     * all discounts.
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
     * Converts the UpdateInvoice object to a human-readable string representation.
     *
     * @return string The string representation of the UpdateInvoice object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'UpdateInvoice',
            [
                'lineItems' => $this->lineItems,
                'issueDate' => $this->issueDate,
                'netTerms' => $this->netTerms,
                'paymentInstructions' => $this->paymentInstructions,
                'memo' => $this->memo,
                'sellerAddress' => $this->sellerAddress,
                'billingAddress' => $this->billingAddress,
                'shippingAddress' => $this->shippingAddress,
                'coupons' => $this->coupons,
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
        if (isset($this->lineItems)) {
            $json['line_items']           = $this->lineItems;
        }
        if (isset($this->issueDate)) {
            $json['issue_date']           = DateTimeHelper::toSimpleDate($this->issueDate);
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
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
