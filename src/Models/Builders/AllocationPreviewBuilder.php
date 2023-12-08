<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\AllocationPreview;
use Core\Utils\CoreHelper;

/**
 * Builder for model AllocationPreview
 *
 * @see AllocationPreview
 */
class AllocationPreviewBuilder
{
    /**
     * @var AllocationPreview
     */
    private $instance;

    private function __construct(AllocationPreview $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new allocation preview Builder object.
     */
    public static function init(): self
    {
        return new self(new AllocationPreview());
    }

    /**
     * Sets start date field.
     */
    public function startDate(?string $value): self
    {
        $this->instance->setStartDate($value);
        return $this;
    }

    /**
     * Sets end date field.
     */
    public function endDate(?string $value): self
    {
        $this->instance->setEndDate($value);
        return $this;
    }

    /**
     * Sets subtotal in cents field.
     */
    public function subtotalInCents(?int $value): self
    {
        $this->instance->setSubtotalInCents($value);
        return $this;
    }

    /**
     * Sets total tax in cents field.
     */
    public function totalTaxInCents(?int $value): self
    {
        $this->instance->setTotalTaxInCents($value);
        return $this;
    }

    /**
     * Sets total discount in cents field.
     */
    public function totalDiscountInCents(?int $value): self
    {
        $this->instance->setTotalDiscountInCents($value);
        return $this;
    }

    /**
     * Sets total in cents field.
     */
    public function totalInCents(?int $value): self
    {
        $this->instance->setTotalInCents($value);
        return $this;
    }

    /**
     * Sets direction field.
     */
    public function direction(?string $value): self
    {
        $this->instance->setDirection($value);
        return $this;
    }

    /**
     * Sets proration scheme field.
     */
    public function prorationScheme(?string $value): self
    {
        $this->instance->setProrationScheme($value);
        return $this;
    }

    /**
     * Sets line items field.
     */
    public function lineItems(?array $value): self
    {
        $this->instance->setLineItems($value);
        return $this;
    }

    /**
     * Sets accrue charge field.
     */
    public function accrueCharge(?bool $value): self
    {
        $this->instance->setAccrueCharge($value);
        return $this;
    }

    /**
     * Sets allocations field.
     */
    public function allocations(?array $value): self
    {
        $this->instance->setAllocations($value);
        return $this;
    }

    /**
     * Sets period type field.
     */
    public function periodType(?string $value): self
    {
        $this->instance->setPeriodType($value);
        return $this;
    }

    /**
     * Sets existing balance in cents field.
     */
    public function existingBalanceInCents(?int $value): self
    {
        $this->instance->setExistingBalanceInCents($value);
        return $this;
    }

    /**
     * Initializes a new allocation preview object.
     */
    public function build(): AllocationPreview
    {
        return CoreHelper::clone($this->instance);
    }
}
