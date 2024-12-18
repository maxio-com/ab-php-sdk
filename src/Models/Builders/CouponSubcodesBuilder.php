<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CouponSubcodes;
use Core\Utils\CoreHelper;

/**
 * Builder for model CouponSubcodes
 *
 * @see CouponSubcodes
 */
class CouponSubcodesBuilder
{
    /**
     * @var CouponSubcodes
     */
    private $instance;

    private function __construct(CouponSubcodes $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Coupon Subcodes Builder object.
     */
    public static function init(): self
    {
        return new self(new CouponSubcodes());
    }

    /**
     * Sets codes field.
     *
     * @param string[]|null $value
     */
    public function codes(?array $value): self
    {
        $this->instance->setCodes($value);
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
     * Initializes a new Coupon Subcodes object.
     */
    public function build(): CouponSubcodes
    {
        return CoreHelper::clone($this->instance);
    }
}
