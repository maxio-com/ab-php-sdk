<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ComponentPricePointCurrencyOverageResponse;
use AdvancedBillingLib\Models\CurrencyOveragePrices;
use Core\Utils\CoreHelper;

/**
 * Builder for model ComponentPricePointCurrencyOverageResponse
 *
 * @see ComponentPricePointCurrencyOverageResponse
 */
class ComponentPricePointCurrencyOverageResponseBuilder
{
    /**
     * @var ComponentPricePointCurrencyOverageResponse
     */
    private $instance;

    private function __construct(ComponentPricePointCurrencyOverageResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Component Price Point Currency Overage Response Builder object.
     *
     * @param CurrencyOveragePrices $pricePoint
     */
    public static function init(CurrencyOveragePrices $pricePoint): self
    {
        return new self(new ComponentPricePointCurrencyOverageResponse($pricePoint));
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
     * Initializes a new Component Price Point Currency Overage Response object.
     */
    public function build(): ComponentPricePointCurrencyOverageResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
