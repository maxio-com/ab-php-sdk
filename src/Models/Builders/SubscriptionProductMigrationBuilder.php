<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\Proration;
use AdvancedBillingLib\Models\SubscriptionProductMigration;
use Core\Utils\CoreHelper;

/**
 * Builder for model SubscriptionProductMigration
 *
 * @see SubscriptionProductMigration
 */
class SubscriptionProductMigrationBuilder
{
    /**
     * @var SubscriptionProductMigration
     */
    private $instance;

    private function __construct(SubscriptionProductMigration $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new subscription product migration Builder object.
     */
    public static function init(): self
    {
        return new self(new SubscriptionProductMigration());
    }

    /**
     * Sets product id field.
     */
    public function productId(?int $value): self
    {
        $this->instance->setProductId($value);
        return $this;
    }

    /**
     * Sets product price point id field.
     */
    public function productPricePointId(?int $value): self
    {
        $this->instance->setProductPricePointId($value);
        return $this;
    }

    /**
     * Sets include trial field.
     */
    public function includeTrial(?bool $value): self
    {
        $this->instance->setIncludeTrial($value);
        return $this;
    }

    /**
     * Sets include initial charge field.
     */
    public function includeInitialCharge(?bool $value): self
    {
        $this->instance->setIncludeInitialCharge($value);
        return $this;
    }

    /**
     * Sets include coupons field.
     */
    public function includeCoupons(?bool $value): self
    {
        $this->instance->setIncludeCoupons($value);
        return $this;
    }

    /**
     * Sets preserve period field.
     */
    public function preservePeriod(?bool $value): self
    {
        $this->instance->setPreservePeriod($value);
        return $this;
    }

    /**
     * Sets product handle field.
     */
    public function productHandle(?string $value): self
    {
        $this->instance->setProductHandle($value);
        return $this;
    }

    /**
     * Sets product price point handle field.
     */
    public function productPricePointHandle(?string $value): self
    {
        $this->instance->setProductPricePointHandle($value);
        return $this;
    }

    /**
     * Sets proration field.
     */
    public function proration(?Proration $value): self
    {
        $this->instance->setProration($value);
        return $this;
    }

    /**
     * Initializes a new subscription product migration object.
     */
    public function build(): SubscriptionProductMigration
    {
        return CoreHelper::clone($this->instance);
    }
}
