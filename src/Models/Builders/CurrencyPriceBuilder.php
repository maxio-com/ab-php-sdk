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
     * Initializes a new currency price Builder object.
     */
    public static function init(): self
    {
        return new self(new CurrencyPrice());
    }

    /**
     * Sets id field.
     */
    public function id(?int $value): self
    {
        $this->instance->setId($value);
        return $this;
    }

    /**
     * Sets currency field.
     */
    public function currency(?string $value): self
    {
        $this->instance->setCurrency($value);
        return $this;
    }

    /**
     * Sets price field.
     */
    public function price(?float $value): self
    {
        $this->instance->setPrice($value);
        return $this;
    }

    /**
     * Sets formatted price field.
     */
    public function formattedPrice(?string $value): self
    {
        $this->instance->setFormattedPrice($value);
        return $this;
    }

    /**
     * Sets product price point id field.
     */
    public function productPricePointId(?int $value): self
    {
        $this->instance->setProductPricePointId($value);
        return $this;
    }

    /**
     * Sets role field.
     */
    public function role(?string $value): self
    {
        $this->instance->setRole($value);
        return $this;
    }

    /**
     * Initializes a new currency price object.
     */
    public function build(): CurrencyPrice
    {
        return CoreHelper::clone($this->instance);
    }
}
