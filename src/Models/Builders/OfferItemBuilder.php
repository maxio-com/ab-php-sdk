<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CurrencyPrice;
use AdvancedBillingLib\Models\OfferItem;
use Core\Utils\CoreHelper;

/**
 * Builder for model OfferItem
 *
 * @see OfferItem
 */
class OfferItemBuilder
{
    /**
     * @var OfferItem
     */
    private $instance;

    private function __construct(OfferItem $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Offer Item Builder object.
     */
    public static function init(): self
    {
        return new self(new OfferItem());
    }

    /**
     * Sets component id field.
     *
     * @param int|null $value
     */
    public function componentId(?int $value): self
    {
        $this->instance->setComponentId($value);
        return $this;
    }

    /**
     * Sets price point id field.
     *
     * @param int|null $value
     */
    public function pricePointId(?int $value): self
    {
        $this->instance->setPricePointId($value);
        return $this;
    }

    /**
     * Sets starting quantity field.
     *
     * @param string|null $value
     */
    public function startingQuantity(?string $value): self
    {
        $this->instance->setStartingQuantity($value);
        return $this;
    }

    /**
     * Sets editable field.
     *
     * @param bool|null $value
     */
    public function editable(?bool $value): self
    {
        $this->instance->setEditable($value);
        return $this;
    }

    /**
     * Sets component unit price field.
     *
     * @param string|null $value
     */
    public function componentUnitPrice(?string $value): self
    {
        $this->instance->setComponentUnitPrice($value);
        return $this;
    }

    /**
     * Sets component name field.
     *
     * @param string|null $value
     */
    public function componentName(?string $value): self
    {
        $this->instance->setComponentName($value);
        return $this;
    }

    /**
     * Sets price point name field.
     *
     * @param string|null $value
     */
    public function pricePointName(?string $value): self
    {
        $this->instance->setPricePointName($value);
        return $this;
    }

    /**
     * Sets currency prices field.
     *
     * @param CurrencyPrice[]|null $value
     */
    public function currencyPrices(?array $value): self
    {
        $this->instance->setCurrencyPrices($value);
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
     * Initializes a new Offer Item object.
     */
    public function build(): OfferItem
    {
        return CoreHelper::clone($this->instance);
    }
}
