<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\UpdateComponentPricePoint;
use AdvancedBillingLib\Models\UpdatePrice;
use Core\Utils\CoreHelper;

/**
 * Builder for model UpdateComponentPricePoint
 *
 * @see UpdateComponentPricePoint
 */
class UpdateComponentPricePointBuilder
{
    /**
     * @var UpdateComponentPricePoint
     */
    private $instance;

    private function __construct(UpdateComponentPricePoint $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Update Component Price Point Builder object.
     */
    public static function init(): self
    {
        return new self(new UpdateComponentPricePoint());
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
     * Sets prices field.
     *
     * @param UpdatePrice[]|null $value
     */
    public function prices(?array $value): self
    {
        $this->instance->setPrices($value);
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
     * Initializes a new Update Component Price Point object.
     */
    public function build(): UpdateComponentPricePoint
    {
        return CoreHelper::clone($this->instance);
    }
}
