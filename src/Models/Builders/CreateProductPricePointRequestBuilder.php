<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CreateProductPricePoint;
use AdvancedBillingLib\Models\CreateProductPricePointRequest;
use Core\Utils\CoreHelper;

/**
 * Builder for model CreateProductPricePointRequest
 *
 * @see CreateProductPricePointRequest
 */
class CreateProductPricePointRequestBuilder
{
    /**
     * @var CreateProductPricePointRequest
     */
    private $instance;

    private function __construct(CreateProductPricePointRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Create Product Price Point Request Builder object.
     *
     * @param CreateProductPricePoint $pricePoint
     */
    public static function init(CreateProductPricePoint $pricePoint): self
    {
        return new self(new CreateProductPricePointRequest($pricePoint));
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
     * Initializes a new Create Product Price Point Request object.
     */
    public function build(): CreateProductPricePointRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
