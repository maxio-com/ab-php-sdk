<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ListProductPricePointsResponse;
use Core\Utils\CoreHelper;

/**
 * Builder for model ListProductPricePointsResponse
 *
 * @see ListProductPricePointsResponse
 */
class ListProductPricePointsResponseBuilder
{
    /**
     * @var ListProductPricePointsResponse
     */
    private $instance;

    private function __construct(ListProductPricePointsResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new list product price points response Builder object.
     */
    public static function init(array $pricePoints): self
    {
        return new self(new ListProductPricePointsResponse($pricePoints));
    }

    /**
     * Initializes a new list product price points response object.
     */
    public function build(): ListProductPricePointsResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
