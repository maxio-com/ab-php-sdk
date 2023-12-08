<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CreateOrUpdateCoupon;
use Core\Utils\CoreHelper;

/**
 * Builder for model CreateOrUpdateCoupon
 *
 * @see CreateOrUpdateCoupon
 */
class CreateOrUpdateCouponBuilder
{
    /**
     * @var CreateOrUpdateCoupon
     */
    private $instance;

    private function __construct(CreateOrUpdateCoupon $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new create or update coupon Builder object.
     */
    public static function init(): self
    {
        return new self(new CreateOrUpdateCoupon());
    }

    /**
     * Sets coupon field.
     */
    public function coupon($value): self
    {
        $this->instance->setCoupon($value);
        return $this;
    }

    /**
     * Sets restricted products field.
     */
    public function restrictedProducts(?array $value): self
    {
        $this->instance->setRestrictedProducts($value);
        return $this;
    }

    /**
     * Sets restricted components field.
     */
    public function restrictedComponents(?array $value): self
    {
        $this->instance->setRestrictedComponents($value);
        return $this;
    }

    /**
     * Initializes a new create or update coupon object.
     */
    public function build(): CreateOrUpdateCoupon
    {
        return CoreHelper::clone($this->instance);
    }
}
