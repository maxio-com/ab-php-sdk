<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CurrencyPricesResponse;
use Core\Utils\CoreHelper;

/**
 * Builder for model CurrencyPricesResponse
 *
 * @see CurrencyPricesResponse
 */
class CurrencyPricesResponseBuilder
{
    /**
     * @var CurrencyPricesResponse
     */
    private $instance;

    private function __construct(CurrencyPricesResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new currency prices response Builder object.
     */
    public static function init(array $currencyPrices): self
    {
        return new self(new CurrencyPricesResponse($currencyPrices));
    }

    /**
     * Initializes a new currency prices response object.
     */
    public function build(): CurrencyPricesResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
