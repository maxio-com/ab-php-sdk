<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\RenewalPreview;
use Core\Utils\CoreHelper;

/**
 * Builder for model RenewalPreview
 *
 * @see RenewalPreview
 */
class RenewalPreviewBuilder
{
    /**
     * @var RenewalPreview
     */
    private $instance;

    private function __construct(RenewalPreview $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new renewal preview Builder object.
     */
    public static function init(): self
    {
        return new self(new RenewalPreview());
    }

    /**
     * Sets next assessment at field.
     */
    public function nextAssessmentAt(?string $value): self
    {
        $this->instance->setNextAssessmentAt($value);
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
     * Sets existing balance in cents field.
     */
    public function existingBalanceInCents(?int $value): self
    {
        $this->instance->setExistingBalanceInCents($value);
        return $this;
    }

    /**
     * Sets total amount due in cents field.
     */
    public function totalAmountDueInCents(?int $value): self
    {
        $this->instance->setTotalAmountDueInCents($value);
        return $this;
    }

    /**
     * Sets uncalculated taxes field.
     */
    public function uncalculatedTaxes(?bool $value): self
    {
        $this->instance->setUncalculatedTaxes($value);
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
     * Initializes a new renewal preview object.
     */
    public function build(): RenewalPreview
    {
        return CoreHelper::clone($this->instance);
    }
}
