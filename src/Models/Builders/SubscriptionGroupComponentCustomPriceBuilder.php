<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\SubscriptionGroupComponentCustomPrice;
use Core\Utils\CoreHelper;

/**
 * Builder for model SubscriptionGroupComponentCustomPrice
 *
 * @see SubscriptionGroupComponentCustomPrice
 */
class SubscriptionGroupComponentCustomPriceBuilder
{
    /**
     * @var SubscriptionGroupComponentCustomPrice
     */
    private $instance;

    private function __construct(SubscriptionGroupComponentCustomPrice $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new subscription group component custom price Builder object.
     */
    public static function init(): self
    {
        return new self(new SubscriptionGroupComponentCustomPrice());
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
    public function overagePricing(?array $value): self
    {
        $this->instance->setOveragePricing($value);
        return $this;
    }

    /**
     * Initializes a new subscription group component custom price object.
     */
    public function build(): SubscriptionGroupComponentCustomPrice
    {
        return CoreHelper::clone($this->instance);
    }
}
