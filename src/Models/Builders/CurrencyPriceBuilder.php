<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CurrencyPrice;
use Core\Utils\CoreHelper;

/**
 * Builder for model CurrencyPrice
 *
 * @see CurrencyPrice
 */
class CurrencyPriceBuilder
{
    /**
     * @var CurrencyPrice
     */
    private $instance;

    private function __construct(CurrencyPrice $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Currency Price Builder object.
     */
    public static function init(): self
    {
        return new self(new CurrencyPrice());
    }

    /**
     * Sets id field.
     *
     * @param int|null $value
     */
    public function id(?int $value): self
    {
        $this->instance->setId($value);
        return $this;
    }

    /**
     * Sets currency field.
     *
     * @param string|null $value
     */
    public function currency(?string $value): self
    {
        $this->instance->setCurrency($value);
        return $this;
    }

    /**
     * Sets price field.
     *
     * @param float|null $value
     */
    public function price(?float $value): self
    {
        $this->instance->setPrice($value);
        return $this;
    }

    /**
     * Sets formatted price field.
     *
     * @param string|null $value
     */
    public function formattedPrice(?string $value): self
    {
        $this->instance->setFormattedPrice($value);
        return $this;
    }

    /**
     * Sets price id field.
     *
     * @param int|null $value
     */
    public function priceId(?int $value): self
    {
        $this->instance->setPriceId($value);
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
     * Sets role field.
     *
     * @param string|null $value
     */
    public function role(?string $value): self
    {
        $this->instance->setRole($value);
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
     * Initializes a new Currency Price object.
     */
    public function build(): CurrencyPrice
    {
        return CoreHelper::clone($this->instance);
    }
}
