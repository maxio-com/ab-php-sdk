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
     * Initializes a new Subscription Product Migration Builder object.
     */
    public static function init(): self
    {
        return new self(new SubscriptionProductMigration());
    }

    /**
     * Sets product id field.
     *
     * @param int|null $value
     */
    public function productId(?int $value): self
    {
        $this->instance->setProductId($value);
        return $this;
    }

    /**
     * Sets product price point id field.
     *
     * @param int|null $value
     */
    public function productPricePointId(?int $value): self
    {
        $this->instance->setProductPricePointId($value);
        return $this;
    }

    /**
     * Sets include trial field.
     *
     * @param bool|null $value
     */
    public function includeTrial(?bool $value): self
    {
        $this->instance->setIncludeTrial($value);
        return $this;
    }

    /**
     * Sets include initial charge field.
     *
     * @param bool|null $value
     */
    public function includeInitialCharge(?bool $value): self
    {
        $this->instance->setIncludeInitialCharge($value);
        return $this;
    }

    /**
     * Sets include coupons field.
     *
     * @param bool|null $value
     */
    public function includeCoupons(?bool $value): self
    {
        $this->instance->setIncludeCoupons($value);
        return $this;
    }

    /**
     * Sets preserve period field.
     *
     * @param bool|null $value
     */
    public function preservePeriod(?bool $value): self
    {
        $this->instance->setPreservePeriod($value);
        return $this;
    }

    /**
     * Sets product handle field.
     *
     * @param string|null $value
     */
    public function productHandle(?string $value): self
    {
        $this->instance->setProductHandle($value);
        return $this;
    }

    /**
     * Sets product price point handle field.
     *
     * @param string|null $value
     */
    public function productPricePointHandle(?string $value): self
    {
        $this->instance->setProductPricePointHandle($value);
        return $this;
    }

    /**
     * Sets proration field.
     *
     * @param Proration|null $value
     */
    public function proration(?Proration $value): self
    {
        $this->instance->setProration($value);
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
     * Initializes a new Subscription Product Migration object.
     */
    public function build(): SubscriptionProductMigration
    {
        return CoreHelper::clone($this->instance);
    }
}
