<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CreateOrUpdateProduct;
use AdvancedBillingLib\Models\CreateOrUpdateProductRequest;
use Core\Utils\CoreHelper;

/**
 * Builder for model CreateOrUpdateProductRequest
 *
 * @see CreateOrUpdateProductRequest
 */
class CreateOrUpdateProductRequestBuilder
{
    /**
     * @var CreateOrUpdateProductRequest
     */
    private $instance;

    private function __construct(CreateOrUpdateProductRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Create Or Update Product Request Builder object.
     *
     * @param CreateOrUpdateProduct $product
     */
    public static function init(CreateOrUpdateProduct $product): self
    {
        return new self(new CreateOrUpdateProductRequest($product));
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
     * Initializes a new Create Or Update Product Request object.
     */
    public function build(): CreateOrUpdateProductRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
