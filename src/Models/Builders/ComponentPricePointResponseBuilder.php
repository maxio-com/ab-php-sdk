<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ComponentPricePoint;
use AdvancedBillingLib\Models\ComponentPricePointResponse;
use Core\Utils\CoreHelper;

/**
 * Builder for model ComponentPricePointResponse
 *
 * @see ComponentPricePointResponse
 */
class ComponentPricePointResponseBuilder
{
    /**
     * @var ComponentPricePointResponse
     */
    private $instance;

    private function __construct(ComponentPricePointResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Component Price Point Response Builder object.
     *
     * @param ComponentPricePoint $pricePoint
     */
    public static function init(ComponentPricePoint $pricePoint): self
    {
        return new self(new ComponentPricePointResponse($pricePoint));
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
     * Initializes a new Component Price Point Response object.
     */
    public function build(): ComponentPricePointResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
