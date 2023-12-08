<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ComponentPricePointsResponse;
use Core\Utils\CoreHelper;

/**
 * Builder for model ComponentPricePointsResponse
 *
 * @see ComponentPricePointsResponse
 */
class ComponentPricePointsResponseBuilder
{
    /**
     * @var ComponentPricePointsResponse
     */
    private $instance;

    private function __construct(ComponentPricePointsResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new component price points response Builder object.
     */
    public static function init(): self
    {
        return new self(new ComponentPricePointsResponse());
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
     * Initializes a new component price points response object.
     */
    public function build(): ComponentPricePointsResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
