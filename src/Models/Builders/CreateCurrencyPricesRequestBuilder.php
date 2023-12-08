<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CreateCurrencyPricesRequest;
use Core\Utils\CoreHelper;

/**
 * Builder for model CreateCurrencyPricesRequest
 *
 * @see CreateCurrencyPricesRequest
 */
class CreateCurrencyPricesRequestBuilder
{
    /**
     * @var CreateCurrencyPricesRequest
     */
    private $instance;

    private function __construct(CreateCurrencyPricesRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new create currency prices request Builder object.
     */
    public static function init(array $currencyPrices): self
    {
        return new self(new CreateCurrencyPricesRequest($currencyPrices));
    }

    /**
     * Initializes a new create currency prices request object.
     */
    public function build(): CreateCurrencyPricesRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
