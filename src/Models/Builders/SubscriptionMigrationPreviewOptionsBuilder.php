<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\Proration;
use AdvancedBillingLib\Models\SubscriptionMigrationPreviewOptions;
use Core\Utils\CoreHelper;

/**
 * Builder for model SubscriptionMigrationPreviewOptions
 *
 * @see SubscriptionMigrationPreviewOptions
 */
class SubscriptionMigrationPreviewOptionsBuilder
{
    /**
     * @var SubscriptionMigrationPreviewOptions
     */
    private $instance;

    private function __construct(SubscriptionMigrationPreviewOptions $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Subscription Migration Preview Options Builder object.
     */
    public static function init(): self
    {
        return new self(new SubscriptionMigrationPreviewOptions());
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
     * Sets proration date field.
     *
     * @param \DateTime|null $value
     */
    public function prorationDate(?\DateTime $value): self
    {
        $this->instance->setProrationDate($value);
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
     * Initializes a new Subscription Migration Preview Options object.
     */
    public function build(): SubscriptionMigrationPreviewOptions
    {
        return CoreHelper::clone($this->instance);
    }
}
