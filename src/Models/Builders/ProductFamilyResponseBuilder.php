<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ProductFamily;
use AdvancedBillingLib\Models\ProductFamilyResponse;
use Core\Utils\CoreHelper;

/**
 * Builder for model ProductFamilyResponse
 *
 * @see ProductFamilyResponse
 */
class ProductFamilyResponseBuilder
{
    /**
     * @var ProductFamilyResponse
     */
    private $instance;

    private function __construct(ProductFamilyResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Product Family Response Builder object.
     */
    public static function init(): self
    {
        return new self(new ProductFamilyResponse());
    }

    /**
     * Sets product family field.
     *
     * @param ProductFamily|null $value
     */
    public function productFamily(?ProductFamily $value): self
    {
        $this->instance->setProductFamily($value);
        return $this;
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
     * Initializes a new Product Family Response object.
     */
    public function build(): ProductFamilyResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
