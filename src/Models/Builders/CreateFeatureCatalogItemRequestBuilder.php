<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CreateFeatureCatalogItemRequest;
use AdvancedBillingLib\Models\Feature2;
use Core\Utils\CoreHelper;

/**
 * Builder for model CreateFeatureCatalogItemRequest
 *
 * @see CreateFeatureCatalogItemRequest
 */
class CreateFeatureCatalogItemRequestBuilder
{
    /**
     * @var CreateFeatureCatalogItemRequest
     */
    private $instance;

    private function __construct(CreateFeatureCatalogItemRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Create Feature Catalog Item Request Builder object.
     *
     * @param Feature2 $feature
     */
    public static function init(Feature2 $feature): self
    {
        return new self(new CreateFeatureCatalogItemRequest($feature));
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
     * Initializes a new Create Feature Catalog Item Request object.
     */
    public function build(): CreateFeatureCatalogItemRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
