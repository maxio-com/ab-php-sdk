<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ProductPricePoint;
use AdvancedBillingLib\Models\ProductPricePointResponse;
use Core\Utils\CoreHelper;

/**
 * Builder for model ProductPricePointResponse
 *
 * @see ProductPricePointResponse
 */
class ProductPricePointResponseBuilder
{
    /**
     * @var ProductPricePointResponse
     */
    private $instance;

    private function __construct(ProductPricePointResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new product price point response Builder object.
     */
    public static function init(ProductPricePoint $pricePoint): self
    {
        return new self(new ProductPricePointResponse($pricePoint));
    }

    /**
     * Initializes a new product price point response object.
     */
    public function build(): ProductPricePointResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
