<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CouponRestriction;
use Core\Utils\CoreHelper;

/**
 * Builder for model CouponRestriction
 *
 * @see CouponRestriction
 */
class CouponRestrictionBuilder
{
    /**
     * @var CouponRestriction
     */
    private $instance;

    private function __construct(CouponRestriction $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new coupon restriction Builder object.
     */
    public static function init(): self
    {
        return new self(new CouponRestriction());
    }

    /**
     * Sets id field.
     */
    public function id(?int $value): self
    {
        $this->instance->setId($value);
        return $this;
    }

    /**
     * Sets item type field.
     */
    public function itemType(?string $value): self
    {
        $this->instance->setItemType($value);
        return $this;
    }

    /**
     * Sets item id field.
     */
    public function itemId(?int $value): self
    {
        $this->instance->setItemId($value);
        return $this;
    }

    /**
     * Sets name field.
     */
    public function name(?string $value): self
    {
        $this->instance->setName($value);
        return $this;
    }

    /**
     * Sets handle field.
     */
    public function handle(?string $value): self
    {
        $this->instance->setHandle($value);
        return $this;
    }

    /**
     * Unsets handle field.
     */
    public function unsetHandle(): self
    {
        $this->instance->unsetHandle();
        return $this;
    }

    /**
     * Initializes a new coupon restriction object.
     */
    public function build(): CouponRestriction
    {
        return CoreHelper::clone($this->instance);
    }
}
