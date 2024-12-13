<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\BulkCreateProductPricePointsRequest;
use AdvancedBillingLib\Models\CreateProductPricePoint;
use Core\Utils\CoreHelper;

/**
 * Builder for model BulkCreateProductPricePointsRequest
 *
 * @see BulkCreateProductPricePointsRequest
 */
class BulkCreateProductPricePointsRequestBuilder
{
    /**
     * @var BulkCreateProductPricePointsRequest
     */
    private $instance;

    private function __construct(BulkCreateProductPricePointsRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Bulk Create Product Price Points Request Builder object.
     *
     * @param CreateProductPricePoint[] $pricePoints
     */
    public static function init(array $pricePoints): self
    {
        return new self(new BulkCreateProductPricePointsRequest($pricePoints));
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
     * Initializes a new Bulk Create Product Price Points Request object.
     */
    public function build(): BulkCreateProductPricePointsRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
