<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\BillingManifest;
use Core\Utils\CoreHelper;

/**
 * Builder for model BillingManifest
 *
 * @see BillingManifest
 */
class BillingManifestBuilder
{
    /**
     * @var BillingManifest
     */
    private $instance;

    private function __construct(BillingManifest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new billing manifest Builder object.
     */
    public static function init(): self
    {
        return new self(new BillingManifest());
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
     * Sets total in cents field.
     */
    public function totalInCents(?int $value): self
    {
        $this->instance->setTotalInCents($value);
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
     * Sets total tax in cents field.
     */
    public function totalTaxInCents(?int $value): self
    {
        $this->instance->setTotalTaxInCents($value);
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
     * Sets start date field.
     */
    public function startDate(?\DateTime $value): self
    {
        $this->instance->setStartDate($value);
        return $this;
    }

    /**
     * Unsets start date field.
     */
    public function unsetStartDate(): self
    {
        $this->instance->unsetStartDate();
        return $this;
    }

    /**
     * Sets end date field.
     */
    public function endDate(?\DateTime $value): self
    {
        $this->instance->setEndDate($value);
        return $this;
    }

    /**
     * Unsets end date field.
     */
    public function unsetEndDate(): self
    {
        $this->instance->unsetEndDate();
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
     * Unsets period type field.
     */
    public function unsetPeriodType(): self
    {
        $this->instance->unsetPeriodType();
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
     * Add an additional property to this model.
     *
     * @param string $name Name of property
     * @param mixed $value Value of property
     */
    public function additionalProperty(string $name, $value): self
    {
        $this->instance->addAdditionalProperty($name, $value);
        return $this;
    }

    /**
     * Initializes a new billing manifest object.
     */
    public function build(): BillingManifest
    {
        return CoreHelper::clone($this->instance);
    }
}
