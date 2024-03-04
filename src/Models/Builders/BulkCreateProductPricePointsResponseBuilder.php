<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\BulkCreateProductPricePointsResponse;
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
     * Initializes a new bulk create product price points response Builder object.
     */
    public static function init(): self
    {
        return new self(new BulkCreateProductPricePointsResponse());
    }

    /**
     * Sets price points field.
     */
    public function pricePoints(?array $value): self
    {
        $this->instance->setPricePoints($value);
        return $this;
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
     * Initializes a new bulk create product price points response object.
     */
    public function build(): BulkCreateProductPricePointsResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
