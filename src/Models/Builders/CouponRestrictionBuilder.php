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
     * Initializes a new Coupon Restriction Builder object.
     */
    public static function init(): self
    {
        return new self(new CouponRestriction());
    }

    /**
     * Sets id field.
     *
     * @param int|null $value
     */
    public function id(?int $value): self
    {
        $this->instance->setId($value);
        return $this;
    }

    /**
     * Sets item type field.
     *
     * @param string|null $value
     */
    public function itemType(?string $value): self
    {
        $this->instance->setItemType($value);
        return $this;
    }

    /**
     * Sets item id field.
     *
     * @param int|null $value
     */
    public function itemId(?int $value): self
    {
        $this->instance->setItemId($value);
        return $this;
    }

    /**
     * Sets name field.
     *
     * @param string|null $value
     */
    public function name(?string $value): self
    {
        $this->instance->setName($value);
        return $this;
    }

    /**
     * Sets handle field.
     *
     * @param string|null $value
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
     * Initializes a new Coupon Restriction object.
     */
    public function build(): CouponRestriction
    {
        return CoreHelper::clone($this->instance);
    }
}
