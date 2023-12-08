<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class RenewalPreview implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $nextAssessmentAt;

    /**
     * @var int|null
     */
    private $subtotalInCents;

    /**
     * @var int|null
     */
    private $totalTaxInCents;

    /**
     * @var int|null
     */
    private $totalDiscountInCents;

    /**
     * @var int|null
     */
    private $totalInCents;

    /**
     * @var int|null
     */
    private $existingBalanceInCents;

    /**
     * @var int|null
     */
    private $totalAmountDueInCents;

    /**
     * @var bool|null
     */
    private $uncalculatedTaxes;

    /**
     * @var RenewalPreviewLineItem[]|null
     */
    private $lineItems;

    /**
     * Returns Next Assessment At.
     * The timestamp for the subscription’s next renewal
     */
    public function getNextAssessmentAt(): ?string
    {
        return $this->nextAssessmentAt;
    }

    /**
     * Sets Next Assessment At.
     * The timestamp for the subscription’s next renewal
     *
     * @maps next_assessment_at
     */
    public function setNextAssessmentAt(?string $nextAssessmentAt): void
    {
        $this->nextAssessmentAt = $nextAssessmentAt;
    }

    /**
     * Returns Subtotal in Cents.
     * An integer representing the amount of the total pre-tax, pre-discount charges that will be assessed
     * at the next renewal
     */
    public function getSubtotalInCents(): ?int
    {
        return $this->subtotalInCents;
    }

    /**
     * Sets Subtotal in Cents.
     * An integer representing the amount of the total pre-tax, pre-discount charges that will be assessed
     * at the next renewal
     *
     * @maps subtotal_in_cents
     */
    public function setSubtotalInCents(?int $subtotalInCents): void
    {
        $this->subtotalInCents = $subtotalInCents;
    }

    /**
     * Returns Total Tax in Cents.
     * An integer representing the total tax charges that will be assessed at the next renewal
     */
    public function getTotalTaxInCents(): ?int
    {
        return $this->totalTaxInCents;
    }

    /**
     * Sets Total Tax in Cents.
     * An integer representing the total tax charges that will be assessed at the next renewal
     *
     * @maps total_tax_in_cents
     */
    public function setTotalTaxInCents(?int $totalTaxInCents): void
    {
        $this->totalTaxInCents = $totalTaxInCents;
    }

    /**
     * Returns Total Discount in Cents.
     * An integer representing the amount of the coupon discounts that will be applied to the next renewal
     */
    public function getTotalDiscountInCents(): ?int
    {
        return $this->totalDiscountInCents;
    }

    /**
     * Sets Total Discount in Cents.
     * An integer representing the amount of the coupon discounts that will be applied to the next renewal
     *
     * @maps total_discount_in_cents
     */
    public function setTotalDiscountInCents(?int $totalDiscountInCents): void
    {
        $this->totalDiscountInCents = $totalDiscountInCents;
    }

    /**
     * Returns Total in Cents.
     * An integer representing the total amount owed, less any discounts, that will be assessed at the next
     * renewal
     */
    public function getTotalInCents(): ?int
    {
        return $this->totalInCents;
    }

    /**
     * Sets Total in Cents.
     * An integer representing the total amount owed, less any discounts, that will be assessed at the next
     * renewal
     *
     * @maps total_in_cents
     */
    public function setTotalInCents(?int $totalInCents): void
    {
        $this->totalInCents = $totalInCents;
    }

    /**
     * Returns Existing Balance in Cents.
     * An integer representing the amount of the subscription’s current balance
     */
    public function getExistingBalanceInCents(): ?int
    {
        return $this->existingBalanceInCents;
    }

    /**
     * Sets Existing Balance in Cents.
     * An integer representing the amount of the subscription’s current balance
     *
     * @maps existing_balance_in_cents
     */
    public function setExistingBalanceInCents(?int $existingBalanceInCents): void
    {
        $this->existingBalanceInCents = $existingBalanceInCents;
    }

    /**
     * Returns Total Amount Due in Cents.
     * An integer representing the existing_balance_in_cents plus the total_in_cents
     */
    public function getTotalAmountDueInCents(): ?int
    {
        return $this->totalAmountDueInCents;
    }

    /**
     * Sets Total Amount Due in Cents.
     * An integer representing the existing_balance_in_cents plus the total_in_cents
     *
     * @maps total_amount_due_in_cents
     */
    public function setTotalAmountDueInCents(?int $totalAmountDueInCents): void
    {
        $this->totalAmountDueInCents = $totalAmountDueInCents;
    }

    /**
     * Returns Uncalculated Taxes.
     * A boolean indicating whether or not additional taxes will be calculated at the time of renewal. This
     * will be true if you are using Avalara and the address of the subscription is in one of your defined
     * taxable regions.
     */
    public function getUncalculatedTaxes(): ?bool
    {
        return $this->uncalculatedTaxes;
    }

    /**
     * Sets Uncalculated Taxes.
     * A boolean indicating whether or not additional taxes will be calculated at the time of renewal. This
     * will be true if you are using Avalara and the address of the subscription is in one of your defined
     * taxable regions.
     *
     * @maps uncalculated_taxes
     */
    public function setUncalculatedTaxes(?bool $uncalculatedTaxes): void
    {
        $this->uncalculatedTaxes = $uncalculatedTaxes;
    }

    /**
     * Returns Line Items.
     * An array of objects representing the individual transactions that will be created at the next
     * renewal
     *
     * @return RenewalPreviewLineItem[]|null
     */
    public function getLineItems(): ?array
    {
        return $this->lineItems;
    }

    /**
     * Sets Line Items.
     * An array of objects representing the individual transactions that will be created at the next
     * renewal
     *
     * @maps line_items
     *
     * @param RenewalPreviewLineItem[]|null $lineItems
     */
    public function setLineItems(?array $lineItems): void
    {
        $this->lineItems = $lineItems;
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
        if (isset($this->nextAssessmentAt)) {
            $json['next_assessment_at']        = $this->nextAssessmentAt;
        }
        if (isset($this->subtotalInCents)) {
            $json['subtotal_in_cents']         = $this->subtotalInCents;
        }
        if (isset($this->totalTaxInCents)) {
            $json['total_tax_in_cents']        = $this->totalTaxInCents;
        }
        if (isset($this->totalDiscountInCents)) {
            $json['total_discount_in_cents']   = $this->totalDiscountInCents;
        }
        if (isset($this->totalInCents)) {
            $json['total_in_cents']            = $this->totalInCents;
        }
        if (isset($this->existingBalanceInCents)) {
            $json['existing_balance_in_cents'] = $this->existingBalanceInCents;
        }
        if (isset($this->totalAmountDueInCents)) {
            $json['total_amount_due_in_cents'] = $this->totalAmountDueInCents;
        }
        if (isset($this->uncalculatedTaxes)) {
            $json['uncalculated_taxes']        = $this->uncalculatedTaxes;
        }
        if (isset($this->lineItems)) {
            $json['line_items']                = $this->lineItems;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
