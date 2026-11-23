<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CreateComponentPricePoint;
use AdvancedBillingLib\Models\Price;
use AdvancedBillingLib\Models\SecondaryPricing;
use Core\Utils\CoreHelper;

/**
 * Builder for model CreateComponentPricePoint
 *
 * @see CreateComponentPricePoint
 */
class CreateComponentPricePointBuilder
{
    /**
     * @var CreateComponentPricePoint
     */
    private $instance;

    private function __construct(CreateComponentPricePoint $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Create Component Price Point Builder object.
     *
     * @param string $name
     * @param string $pricingScheme
     * @param Price[] $prices
     */
    public static function init(string $name, string $pricingScheme, array $prices): self
    {
        return new self(new CreateComponentPricePoint($name, $pricingScheme, $prices));
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
     * Sets secondary pricing field.
     *
     * @param SecondaryPricing|null $value
     */
    public function secondaryPricing(?SecondaryPricing $value): self
    {
        $this->instance->setSecondaryPricing($value);
        return $this;
    }

    /**
     * Sets secondary pricing scheme field.
     *
     * @param string|null $value
     */
    public function secondaryPricingScheme(?string $value): self
    {
        $this->instance->setSecondaryPricingScheme($value);
        return $this;
    }

    /**
     * Sets use site exchange rate field.
     *
     * @param bool|null $value
     */
    public function useSiteExchangeRate(?bool $value): self
    {
        $this->instance->setUseSiteExchangeRate($value);
        return $this;
    }

    /**
     * Sets tax included field.
     *
     * @param bool|null $value
     */
    public function taxIncluded(?bool $value): self
    {
        $this->instance->setTaxIncluded($value);
        return $this;
    }

    /**
     * Sets interval field.
     *
     * @param int|null $value
     */
    public function interval(?int $value): self
    {
        $this->instance->setInterval($value);
        return $this;
    }

    /**
     * Sets interval unit field.
     *
     * @param string|null $value
     */
    public function intervalUnit(?string $value): self
    {
        $this->instance->setIntervalUnit($value);
        return $this;
    }

    /**
     * Unsets interval unit field.
     */
    public function unsetIntervalUnit(): self
    {
        $this->instance->unsetIntervalUnit();
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
     * Initializes a new Create Component Price Point object.
     */
    public function build(): CreateComponentPricePoint
    {
        return CoreHelper::clone($this->instance);
    }
}
