<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\OveragePricing;
use AdvancedBillingLib\Models\PrepaidComponentPricePoint;
use Core\Utils\CoreHelper;

/**
 * Builder for model PrepaidComponentPricePoint
 *
 * @see PrepaidComponentPricePoint
 */
class PrepaidComponentPricePointBuilder
{
    /**
     * @var PrepaidComponentPricePoint
     */
    private $instance;

    private function __construct(PrepaidComponentPricePoint $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new prepaid component price point Builder object.
     */
    public static function init(): self
    {
        return new self(new PrepaidComponentPricePoint());
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
     * Sets pricing scheme field.
     */
    public function pricingScheme(?string $value): self
    {
        $this->instance->setPricingScheme($value);
        return $this;
    }

    /**
     * Sets prices field.
     */
    public function prices(?array $value): self
    {
        $this->instance->setPrices($value);
        return $this;
    }

    /**
     * Sets overage pricing field.
     */
    public function overagePricing(?OveragePricing $value): self
    {
        $this->instance->setOveragePricing($value);
        return $this;
    }

    /**
     * Initializes a new prepaid component price point object.
     */
    public function build(): PrepaidComponentPricePoint
    {
        return CoreHelper::clone($this->instance);
    }
}
