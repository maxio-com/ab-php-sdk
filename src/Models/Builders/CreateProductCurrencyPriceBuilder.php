<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CreateProductCurrencyPrice;
use Core\Utils\CoreHelper;

/**
 * Builder for model CreateProductCurrencyPrice
 *
 * @see CreateProductCurrencyPrice
 */
class CreateProductCurrencyPriceBuilder
{
    /**
     * @var CreateProductCurrencyPrice
     */
    private $instance;

    private function __construct(CreateProductCurrencyPrice $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new create product currency price Builder object.
     */
    public static function init(string $currency, int $price, string $role): self
    {
        return new self(new CreateProductCurrencyPrice($currency, $price, $role));
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
     * Initializes a new create product currency price object.
     */
    public function build(): CreateProductCurrencyPrice
    {
        return CoreHelper::clone($this->instance);
    }
}
