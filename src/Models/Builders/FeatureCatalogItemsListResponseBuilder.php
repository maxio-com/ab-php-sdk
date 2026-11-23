<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\FeatureCatalogItem;
use AdvancedBillingLib\Models\FeatureCatalogItemsListResponse;
use Core\Utils\CoreHelper;

/**
 * Builder for model FeatureCatalogItemsListResponse
 *
 * @see FeatureCatalogItemsListResponse
 */
class FeatureCatalogItemsListResponseBuilder
{
    /**
     * @var FeatureCatalogItemsListResponse
     */
    private $instance;

    private function __construct(FeatureCatalogItemsListResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Feature Catalog Items List Response Builder object.
     *
     * @param FeatureCatalogItem[] $features
     * @param int $subscriptionsCount
     */
    public static function init(array $features, int $subscriptionsCount): self
    {
        return new self(new FeatureCatalogItemsListResponse($features, $subscriptionsCount));
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
     * Initializes a new Feature Catalog Items List Response object.
     */
    public function build(): FeatureCatalogItemsListResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
