<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\FeatureCatalogItem;
use AdvancedBillingLib\Models\FeatureCatalogItemResponse;
use Core\Utils\CoreHelper;

/**
 * Builder for model FeatureCatalogItemResponse
 *
 * @see FeatureCatalogItemResponse
 */
class FeatureCatalogItemResponseBuilder
{
    /**
     * @var FeatureCatalogItemResponse
     */
    private $instance;

    private function __construct(FeatureCatalogItemResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Feature Catalog Item Response Builder object.
     *
     * @param FeatureCatalogItem $feature
     */
    public static function init(FeatureCatalogItem $feature): self
    {
        return new self(new FeatureCatalogItemResponse($feature));
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
     * Initializes a new Feature Catalog Item Response object.
     */
    public function build(): FeatureCatalogItemResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
