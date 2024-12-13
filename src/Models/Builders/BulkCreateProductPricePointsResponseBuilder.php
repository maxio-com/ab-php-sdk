<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\BulkCreateProductPricePointsResponse;
use AdvancedBillingLib\Models\ProductPricePoint;
use Core\Utils\CoreHelper;

/**
 * Builder for model BulkCreateProductPricePointsResponse
 *
 * @see BulkCreateProductPricePointsResponse
 */
class BulkCreateProductPricePointsResponseBuilder
{
    /**
     * @var BulkCreateProductPricePointsResponse
     */
    private $instance;

    private function __construct(BulkCreateProductPricePointsResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Bulk Create Product Price Points Response Builder object.
     */
    public static function init(): self
    {
        return new self(new BulkCreateProductPricePointsResponse());
    }

    /**
     * Sets price points field.
     *
     * @param ProductPricePoint[]|null $value
     */
    public function pricePoints(?array $value): self
    {
        $this->instance->setPricePoints($value);
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
     * Initializes a new Bulk Create Product Price Points Response object.
     */
    public function build(): BulkCreateProductPricePointsResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
