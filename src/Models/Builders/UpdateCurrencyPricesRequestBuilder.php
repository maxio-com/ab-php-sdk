<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\UpdateCurrencyPricesRequest;
use Core\Utils\CoreHelper;

/**
 * Builder for model UpdateCurrencyPricesRequest
 *
 * @see UpdateCurrencyPricesRequest
 */
class UpdateCurrencyPricesRequestBuilder
{
    /**
     * @var UpdateCurrencyPricesRequest
     */
    private $instance;

    private function __construct(UpdateCurrencyPricesRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new update currency prices request Builder object.
     */
    public static function init(array $currencyPrices): self
    {
        return new self(new UpdateCurrencyPricesRequest($currencyPrices));
    }

    /**
     * Initializes a new update currency prices request object.
     */
    public function build(): UpdateCurrencyPricesRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
