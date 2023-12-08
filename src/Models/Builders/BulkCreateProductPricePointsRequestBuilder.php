<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\BulkCreateProductPricePointsRequest;
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
     * Initializes a new bulk create product price points request Builder object.
     */
    public static function init(array $pricePoints): self
    {
        return new self(new BulkCreateProductPricePointsRequest($pricePoints));
    }

    /**
     * Initializes a new bulk create product price points request object.
     */
    public function build(): BulkCreateProductPricePointsRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
