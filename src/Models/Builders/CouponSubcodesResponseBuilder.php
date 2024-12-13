<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CouponSubcodesResponse;
use Core\Utils\CoreHelper;

/**
 * Builder for model CouponSubcodesResponse
 *
 * @see CouponSubcodesResponse
 */
class CouponSubcodesResponseBuilder
{
    /**
     * @var CouponSubcodesResponse
     */
    private $instance;

    private function __construct(CouponSubcodesResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Coupon Subcodes Response Builder object.
     */
    public static function init(): self
    {
        return new self(new CouponSubcodesResponse());
    }

    /**
     * Sets created codes field.
     *
     * @param string[]|null $value
     */
    public function createdCodes(?array $value): self
    {
        $this->instance->setCreatedCodes($value);
        return $this;
    }

    /**
     * Sets duplicate codes field.
     *
     * @param string[]|null $value
     */
    public function duplicateCodes(?array $value): self
    {
        $this->instance->setDuplicateCodes($value);
        return $this;
    }

    /**
     * Sets invalid codes field.
     *
     * @param string[]|null $value
     */
    public function invalidCodes(?array $value): self
    {
        $this->instance->setInvalidCodes($value);
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
     * Initializes a new Coupon Subcodes Response object.
     */
    public function build(): CouponSubcodesResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
