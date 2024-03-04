<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CreateProductFamily;
use AdvancedBillingLib\Models\CreateProductFamilyRequest;
use Core\Utils\CoreHelper;

/**
 * Builder for model CreateProductFamilyRequest
 *
 * @see CreateProductFamilyRequest
 */
class CreateProductFamilyRequestBuilder
{
    /**
     * @var CreateProductFamilyRequest
     */
    private $instance;

    private function __construct(CreateProductFamilyRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new create product family request Builder object.
     */
    public static function init(CreateProductFamily $productFamily): self
    {
        return new self(new CreateProductFamilyRequest($productFamily));
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
     * Initializes a new create product family request object.
     */
    public function build(): CreateProductFamilyRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
