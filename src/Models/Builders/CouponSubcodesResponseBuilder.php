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
     * Initializes a new coupon subcodes response Builder object.
     */
    public static function init(): self
    {
        return new self(new CouponSubcodesResponse());
    }

    /**
     * Sets created codes field.
     */
    public function createdCodes(?array $value): self
    {
        $this->instance->setCreatedCodes($value);
        return $this;
    }

    /**
     * Sets duplicate codes field.
     */
    public function duplicateCodes(?array $value): self
    {
        $this->instance->setDuplicateCodes($value);
        return $this;
    }

    /**
     * Sets invalid codes field.
     */
    public function invalidCodes(?array $value): self
    {
        $this->instance->setInvalidCodes($value);
        return $this;
    }

    /**
     * Initializes a new coupon subcodes response object.
     */
    public function build(): CouponSubcodesResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
