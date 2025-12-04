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
     * Initializes a new Create Invoice Coupon Builder object.
     */
    public static function init(): self
    {
        return new self(new CreateInvoiceCoupon());
    }

    /**
     * Sets code field.
     *
     * @param string|null $value
     */
    public function code(?string $value): self
    {
        $this->instance->setCode($value);
        return $this;
    }

    /**
     * Sets subcode field.
     *
     * @param string|null $value
     */
    public function subcode(?string $value): self
    {
        $this->instance->setSubcode($value);
        return $this;
    }

    /**
     * Sets percentage field.
     *
     * @param string|float|null $value
     */
    public function percentage($value): self
    {
        $this->instance->setPercentage($value);
        return $this;
    }

    /**
     * Sets amount field.
     *
     * @param string|float|null $value
     */
    public function amount($value): self
    {
        $this->instance->setAmount($value);
        return $this;
    }

    /**
     * Sets description field.
     *
     * @param string|null $value
     */
    public function description(?string $value): self
    {
        $this->instance->setDescription($value);
        return $this;
    }

    /**
     * Sets product family id field.
     *
     * @param string|int|null $value
     */
    public function productFamilyId($value): self
    {
        $this->instance->setProductFamilyId($value);
        return $this;
    }

    /**
     * Sets compounding strategy field.
     *
     * @param string|null $value
     */
    public function compoundingStrategy(?string $value): self
    {
        $this->instance->setCompoundingStrategy($value);
        return $this;
    }

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property.
     * @param mixed $value Value of property.
     */
    public function additionalProperty(string $name, $value): self
    {
        $this->instance->addAdditionalProperty($name, $value);
        return $this;
    }

    /**
     * Initializes a new Create Invoice Coupon object.
     */
    public function build(): CreateInvoiceCoupon
    {
        return CoreHelper::clone($this->instance);
    }
}
