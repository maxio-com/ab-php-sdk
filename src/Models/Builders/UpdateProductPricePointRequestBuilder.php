<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\UpdateProductPricePoint;
use AdvancedBillingLib\Models\UpdateProductPricePointRequest;
use Core\Utils\CoreHelper;

/**
 * Builder for model UpdateProductPricePointRequest
 *
 * @see UpdateProductPricePointRequest
 */
class UpdateProductPricePointRequestBuilder
{
    /**
     * @var UpdateProductPricePointRequest
     */
    private $instance;

    private function __construct(UpdateProductPricePointRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Update Product Price Point Request Builder object.
     *
     * @param UpdateProductPricePoint $pricePoint
     */
    public static function init(UpdateProductPricePoint $pricePoint): self
    {
        return new self(new UpdateProductPricePointRequest($pricePoint));
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
     * Initializes a new Update Product Price Point Request object.
     */
    public function build(): UpdateProductPricePointRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
