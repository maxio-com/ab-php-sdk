<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CreateInvoiceCoupon;
use Core\Utils\CoreHelper;

/**
 * Builder for model CreateInvoiceCoupon
 *
 * @see CreateInvoiceCoupon
 */
class CreateInvoiceCouponBuilder
{
    /**
     * @var CreateInvoiceCoupon
     */
    private $instance;

    private function __construct(CreateInvoiceCoupon $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new create invoice coupon Builder object.
     */
    public static function init(): self
    {
        return new self(new CreateInvoiceCoupon());
    }

    /**
     * Sets code field.
     */
    public function code(?string $value): self
    {
        $this->instance->setCode($value);
        return $this;
    }

    /**
     * Sets percentage field.
     */
    public function percentage($value): self
    {
        $this->instance->setPercentage($value);
        return $this;
    }

    /**
     * Sets amount field.
     */
    public function amount($value): self
    {
        $this->instance->setAmount($value);
        return $this;
    }

    /**
     * Sets description field.
     */
    public function description(?string $value): self
    {
        $this->instance->setDescription($value);
        return $this;
    }

    /**
     * Sets product family id field.
     */
    public function productFamilyId($value): self
    {
        $this->instance->setProductFamilyId($value);
        return $this;
    }

    /**
     * Sets compounding strategy field.
     */
    public function compoundingStrategy(?string $value): self
    {
        $this->instance->setCompoundingStrategy($value);
        return $this;
    }

    /**
     * Initializes a new create invoice coupon object.
     */
    public function build(): CreateInvoiceCoupon
    {
        return CoreHelper::clone($this->instance);
    }
}
