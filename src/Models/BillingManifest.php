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

class BillingManifest implements \JsonSerializable
{
    /**
     * @var BillingManifestItem[]|null
     */
    private $lineItems;

    /**
     * @var int|null
     */
    private $totalInCents;

    /**
     * @var int|null
     */
    private $totalDiscountInCents;

    /**
     * @var int|null
     */
    private $totalTaxInCents;

    /**
     * @var int|null
     */
    private $subtotalInCents;

    /**
     * @var \DateTime|null
     */
    private $startDate;

    /**
     * @var \DateTime|null
     */
    private $endDate;

    /**
     * @var string|null
     */
    private $periodType;

    /**
     * @var int|null
     */
    private $existingBalanceInCents;

    /**
     * Returns Line Items.
     *
     * @return BillingManifestItem[]|null
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
     * @param BillingManifestItem[]|null $lineItems
     */
    public function setLineItems(?array $lineItems): void
    {
        $this->lineItems = $lineItems;
    }

    /**
     * Returns Total in Cents.
     */
    public function getTotalInCents(): ?int
    {
        return $this->totalInCents;
    }

    /**
     * Sets Total in Cents.
     *
     * @maps total_in_cents
     */
    public function setTotalInCents(?int $totalInCents): void
    {
        $this->totalInCents = $totalInCents;
    }

    /**
     * Returns Total Discount in Cents.
     */
    public function getTotalDiscountInCents(): ?int
    {
        return $this->totalDiscountInCents;
    }

    /**
     * Sets Total Discount in Cents.
     *
     * @maps total_discount_in_cents
     */
    public function setTotalDiscountInCents(?int $totalDiscountInCents): void
    {
        $this->totalDiscountInCents = $totalDiscountInCents;
    }

    /**
     * Returns Total Tax in Cents.
     */
    public function getTotalTaxInCents(): ?int
    {
        return $this->totalTaxInCents;
    }

    /**
     * Sets Total Tax in Cents.
     *
     * @maps total_tax_in_cents
     */
    public function setTotalTaxInCents(?int $totalTaxInCents): void
    {
        $this->totalTaxInCents = $totalTaxInCents;
    }

    /**
     * Returns Subtotal in Cents.
     */
    public function getSubtotalInCents(): ?int
    {
        return $this->subtotalInCents;
    }

    /**
     * Sets Subtotal in Cents.
     *
     * @maps subtotal_in_cents
     */
    public function setSubtotalInCents(?int $subtotalInCents): void
    {
        $this->subtotalInCents = $subtotalInCents;
    }

    /**
     * Returns Start Date.
     */
    public function getStartDate(): ?\DateTime
    {
        return $this->startDate;
    }

    /**
     * Sets Start Date.
     *
     * @maps start_date
     * @factory \AdvancedBillingLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setStartDate(?\DateTime $startDate): void
    {
        $this->startDate = $startDate;
    }

    /**
     * Returns End Date.
     */
    public function getEndDate(): ?\DateTime
    {
        return $this->endDate;
    }

    /**
     * Sets End Date.
     *
     * @maps end_date
     * @factory \AdvancedBillingLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setEndDate(?\DateTime $endDate): void
    {
        $this->endDate = $endDate;
    }

    /**
     * Returns Period Type.
     */
    public function getPeriodType(): ?string
    {
        return $this->periodType;
    }

    /**
     * Sets Period Type.
     *
     * @maps period_type
     */
    public function setPeriodType(?string $periodType): void
    {
        $this->periodType = $periodType;
    }

    /**
     * Returns Existing Balance in Cents.
     */
    public function getExistingBalanceInCents(): ?int
    {
        return $this->existingBalanceInCents;
    }

    /**
     * Sets Existing Balance in Cents.
     *
     * @maps existing_balance_in_cents
     */
    public function setExistingBalanceInCents(?int $existingBalanceInCents): void
    {
        $this->existingBalanceInCents = $existingBalanceInCents;
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
            $json['line_items']                = $this->lineItems;
        }
        if (isset($this->totalInCents)) {
            $json['total_in_cents']            = $this->totalInCents;
        }
        if (isset($this->totalDiscountInCents)) {
            $json['total_discount_in_cents']   = $this->totalDiscountInCents;
        }
        if (isset($this->totalTaxInCents)) {
            $json['total_tax_in_cents']        = $this->totalTaxInCents;
        }
        if (isset($this->subtotalInCents)) {
            $json['subtotal_in_cents']         = $this->subtotalInCents;
        }
        if (isset($this->startDate)) {
            $json['start_date']                = DateTimeHelper::toRfc3339DateTime($this->startDate);
        }
        if (isset($this->endDate)) {
            $json['end_date']                  = DateTimeHelper::toRfc3339DateTime($this->endDate);
        }
        if (isset($this->periodType)) {
            $json['period_type']               = $this->periodType;
        }
        if (isset($this->existingBalanceInCents)) {
            $json['existing_balance_in_cents'] = $this->existingBalanceInCents;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
