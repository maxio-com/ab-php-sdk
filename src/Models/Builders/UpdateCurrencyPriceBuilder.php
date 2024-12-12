<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\UpdateCurrencyPrice;
use Core\Utils\CoreHelper;

/**
 * Builder for model UpdateCurrencyPrice
 *
 * @see UpdateCurrencyPrice
 */
class UpdateCurrencyPriceBuilder
{
    /**
     * @var UpdateCurrencyPrice
     */
    private $instance;

    private function __construct(UpdateCurrencyPrice $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Update Currency Price Builder object.
     *
     * @param int $id
     * @param float $price
     */
    public static function init(int $id, float $price): self
    {
        return new self(new UpdateCurrencyPrice($id, $price));
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
     * Initializes a new Update Currency Price object.
     */
    public function build(): UpdateCurrencyPrice
    {
        return CoreHelper::clone($this->instance);
    }
}
