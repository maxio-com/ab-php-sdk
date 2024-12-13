<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CouponPayload;
use AdvancedBillingLib\Models\CouponRequest;
use Core\Utils\CoreHelper;

/**
 * Builder for model CouponRequest
 *
 * @see CouponRequest
 */
class CouponRequestBuilder
{
    /**
     * @var CouponRequest
     */
    private $instance;

    private function __construct(CouponRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Coupon Request Builder object.
     */
    public static function init(): self
    {
        return new self(new CouponRequest());
    }

    /**
     * Sets coupon field.
     *
     * @param CouponPayload|null $value
     */
    public function coupon(?CouponPayload $value): self
    {
        $this->instance->setCoupon($value);
        return $this;
    }

    /**
     * Sets restricted products field.
     *
     * @param array<string,bool>|null $value
     */
    public function restrictedProducts(?array $value): self
    {
        $this->instance->setRestrictedProducts($value);
        return $this;
    }

    /**
     * Sets restricted components field.
     *
     * @param array<string,bool>|null $value
     */
    public function restrictedComponents(?array $value): self
    {
        $this->instance->setRestrictedComponents($value);
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
     * Initializes a new Coupon Request object.
     */
    public function build(): CouponRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
