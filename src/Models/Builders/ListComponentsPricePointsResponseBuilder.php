<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ListComponentsPricePointsResponse;
use Core\Utils\CoreHelper;

/**
 * Builder for model ListComponentsPricePointsResponse
 *
 * @see ListComponentsPricePointsResponse
 */
class ListComponentsPricePointsResponseBuilder
{
    /**
     * @var ListComponentsPricePointsResponse
     */
    private $instance;

    private function __construct(ListComponentsPricePointsResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new list components price points response Builder object.
     */
    public static function init(array $pricePoints): self
    {
        return new self(new ListComponentsPricePointsResponse($pricePoints));
    }

    /**
     * Initializes a new list components price points response object.
     */
    public function build(): ListComponentsPricePointsResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
