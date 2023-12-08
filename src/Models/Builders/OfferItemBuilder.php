<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

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
     * Initializes a new offer item Builder object.
     */
    public static function init(): self
    {
        return new self(new OfferItem());
    }

    /**
     * Sets component id field.
     */
    public function componentId(?int $value): self
    {
        $this->instance->setComponentId($value);
        return $this;
    }

    /**
     * Sets price point id field.
     */
    public function pricePointId(?int $value): self
    {
        $this->instance->setPricePointId($value);
        return $this;
    }

    /**
     * Sets starting quantity field.
     */
    public function startingQuantity(?string $value): self
    {
        $this->instance->setStartingQuantity($value);
        return $this;
    }

    /**
     * Sets editable field.
     */
    public function editable(?bool $value): self
    {
        $this->instance->setEditable($value);
        return $this;
    }

    /**
     * Sets component unit price field.
     */
    public function componentUnitPrice(?string $value): self
    {
        $this->instance->setComponentUnitPrice($value);
        return $this;
    }

    /**
     * Sets component name field.
     */
    public function componentName(?string $value): self
    {
        $this->instance->setComponentName($value);
        return $this;
    }

    /**
     * Sets price point name field.
     */
    public function pricePointName(?string $value): self
    {
        $this->instance->setPricePointName($value);
        return $this;
    }

    /**
     * Sets currency prices field.
     */
    public function currencyPrices(?array $value): self
    {
        $this->instance->setCurrencyPrices($value);
        return $this;
    }

    /**
     * Initializes a new offer item object.
     */
    public function build(): OfferItem
    {
        return CoreHelper::clone($this->instance);
    }
}
