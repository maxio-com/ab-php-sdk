<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\Product;
use AdvancedBillingLib\Models\ProductResponse;
use Core\Utils\CoreHelper;

/**
 * Builder for model ProductResponse
 *
 * @see ProductResponse
 */
class ProductResponseBuilder
{
    /**
     * @var ProductResponse
     */
    private $instance;

    private function __construct(ProductResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new product response Builder object.
     */
    public static function init(Product $product): self
    {
        return new self(new ProductResponse($product));
    }

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property
     * @param mixed $value Value of property
     */
    public function additionalProperty(string $name, $value): self
    {
        $this->instance->addAdditionalProperty($name, $value);
        return $this;
    }

    /**
     * Initializes a new product response object.
     */
    public function build(): ProductResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
