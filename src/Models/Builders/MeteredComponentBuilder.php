<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ComponentPricePointItem;
use AdvancedBillingLib\Models\MeteredComponent;
use AdvancedBillingLib\Models\Price;
use Core\Utils\CoreHelper;

/**
 * Builder for model MeteredComponent
 *
 * @see MeteredComponent
 */
class MeteredComponentBuilder
{
    /**
     * @var MeteredComponent
     */
    private $instance;

    private function __construct(MeteredComponent $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Metered Component Builder object.
     *
     * @param string $name
     * @param string $unitName
     * @param string $pricingScheme
     */
    public static function init(string $name, string $unitName, string $pricingScheme): self
    {
        return new self(new MeteredComponent($name, $unitName, $pricingScheme));
    }

    /**
     * Sets description field.
     *
     * @param string|null $value
     */
    public function description(?string $value): self
    {
        $this->instance->setDescription($value);
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
     * Sets taxable field.
     *
     * @param bool|null $value
     */
    public function taxable(?bool $value): self
    {
        $this->instance->setTaxable($value);
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
     * Sets price points field.
     *
     * @param ComponentPricePointItem[]|null $value
     */
    public function pricePoints(?array $value): self
    {
        $this->instance->setPricePoints($value);
        return $this;
    }

    /**
     * Sets unit price field.
     *
     * @param string|float|null $value
     */
    public function unitPrice($value): self
    {
        $this->instance->setUnitPrice($value);
        return $this;
    }

    /**
     * Sets tax code field.
     *
     * @param string|null $value
     */
    public function taxCode(?string $value): self
    {
        $this->instance->setTaxCode($value);
        return $this;
    }

    /**
     * Sets hide date range on invoice field.
     *
     * @param bool|null $value
     */
    public function hideDateRangeOnInvoice(?bool $value): self
    {
        $this->instance->setHideDateRangeOnInvoice($value);
        return $this;
    }

    /**
     * Sets display on hosted page field.
     *
     * @param bool|null $value
     */
    public function displayOnHostedPage(?bool $value): self
    {
        $this->instance->setDisplayOnHostedPage($value);
        return $this;
    }

    /**
     * Sets allow fractional quantities field.
     *
     * @param bool|null $value
     */
    public function allowFractionalQuantities(?bool $value): self
    {
        $this->instance->setAllowFractionalQuantities($value);
        return $this;
    }

    /**
     * Sets public signup page ids field.
     *
     * @param int[]|null $value
     */
    public function publicSignupPageIds(?array $value): self
    {
        $this->instance->setPublicSignupPageIds($value);
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
     * Initializes a new Metered Component object.
     */
    public function build(): MeteredComponent
    {
        return CoreHelper::clone($this->instance);
    }
}
