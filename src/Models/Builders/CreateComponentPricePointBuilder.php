<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CreateComponentPricePoint;
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
     * Initializes a new create component price point Builder object.
     */
    public static function init(string $name, string $pricingScheme, array $prices): self
    {
        return new self(new CreateComponentPricePoint($name, $pricingScheme, $prices));
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
     * Sets use site exchange rate field.
     */
    public function useSiteExchangeRate(?bool $value): self
    {
        $this->instance->setUseSiteExchangeRate($value);
        return $this;
    }

    /**
     * Sets tax included field.
     */
    public function taxIncluded(?bool $value): self
    {
        $this->instance->setTaxIncluded($value);
        return $this;
    }

    /**
     * Sets interval field.
     */
    public function interval(?int $value): self
    {
        $this->instance->setInterval($value);
        return $this;
    }

    /**
     * Sets interval unit field.
     */
    public function intervalUnit(?string $value): self
    {
        $this->instance->setIntervalUnit($value);
        return $this;
    }

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property
     * @param mixed $value Value of property
     */
    public function additionalProperty(string $name, $value): self
    {
        $this->instance->addAdditionalProperty($name, $value);
        return $this;
    }

    /**
     * Initializes a new create component price point object.
     */
    public function build(): CreateComponentPricePoint
    {
        return CoreHelper::clone($this->instance);
    }
}
