<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ProductPricePoint;
use AdvancedBillingLib\Models\ProductPricePointResponse;
use Core\Utils\CoreHelper;

/**
 * Builder for model ProductPricePointResponse
 *
 * @see ProductPricePointResponse
 */
class ProductPricePointResponseBuilder
{
    /**
     * @var ProductPricePointResponse
     */
    private $instance;

    private function __construct(ProductPricePointResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Product Price Point Response Builder object.
     *
     * @param ProductPricePoint $pricePoint
     */
    public static function init(ProductPricePoint $pricePoint): self
    {
        return new self(new ProductPricePointResponse($pricePoint));
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
     * Initializes a new Product Price Point Response object.
     */
    public function build(): ProductPricePointResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
