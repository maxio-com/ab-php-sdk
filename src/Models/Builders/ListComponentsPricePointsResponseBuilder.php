<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ComponentPricePoint;
use AdvancedBillingLib\Models\ListComponentsPricePointsResponse;
use Core\Utils\CoreHelper;

/**
 * Builder for model ListComponentsPricePointsResponse
 *
 * @see ListComponentsPricePointsResponse
 */
class ListComponentsPricePointsResponseBuilder
{
    /**
     * @var ListComponentsPricePointsResponse
     */
    private $instance;

    private function __construct(ListComponentsPricePointsResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new List Components Price Points Response Builder object.
     *
     * @param ComponentPricePoint[] $pricePoints
     */
    public static function init(array $pricePoints): self
    {
        return new self(new ListComponentsPricePointsResponse($pricePoints));
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
     * Initializes a new List Components Price Points Response object.
     */
    public function build(): ListComponentsPricePointsResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
