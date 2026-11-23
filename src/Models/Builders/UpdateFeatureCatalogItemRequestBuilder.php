<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\Feature3;
use AdvancedBillingLib\Models\UpdateFeatureCatalogItemRequest;
use Core\Utils\CoreHelper;

/**
 * Builder for model UpdateFeatureCatalogItemRequest
 *
 * @see UpdateFeatureCatalogItemRequest
 */
class UpdateFeatureCatalogItemRequestBuilder
{
    /**
     * @var UpdateFeatureCatalogItemRequest
     */
    private $instance;

    private function __construct(UpdateFeatureCatalogItemRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Update Feature Catalog Item Request Builder object.
     *
     * @param Feature3 $feature
     */
    public static function init(Feature3 $feature): self
    {
        return new self(new UpdateFeatureCatalogItemRequest($feature));
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
     * Initializes a new Update Feature Catalog Item Request object.
     */
    public function build(): UpdateFeatureCatalogItemRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
