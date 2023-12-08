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
     * Initializes a new update currency price Builder object.
     */
    public static function init(int $id, int $price): self
    {
        return new self(new UpdateCurrencyPrice($id, $price));
    }

    /**
     * Initializes a new update currency price object.
     */
    public function build(): UpdateCurrencyPrice
    {
        return CoreHelper::clone($this->instance);
    }
}
