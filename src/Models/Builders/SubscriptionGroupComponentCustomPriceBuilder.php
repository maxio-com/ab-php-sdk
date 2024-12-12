<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ComponentCustomPrice;
use AdvancedBillingLib\Models\Price;
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
     * Initializes a new Subscription Group Component Custom Price Builder object.
     */
    public static function init(): self
    {
        return new self(new SubscriptionGroupComponentCustomPrice());
    }

    /**
     * Sets pricing scheme field.
     *
     * @param string|null $value
     */
    public function pricingScheme(?string $value): self
    {
        $this->instance->setPricingScheme($value);
        return $this;
    }

    /**
     * Sets prices field.
     *
     * @param Price[]|null $value
     */
    public function prices(?array $value): self
    {
        $this->instance->setPrices($value);
        return $this;
    }

    /**
     * Sets overage pricing field.
     *
     * @param ComponentCustomPrice[]|null $value
     */
    public function overagePricing(?array $value): self
    {
        $this->instance->setOveragePricing($value);
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
     * Initializes a new Subscription Group Component Custom Price object.
     */
    public function build(): SubscriptionGroupComponentCustomPrice
    {
        return CoreHelper::clone($this->instance);
    }
}
