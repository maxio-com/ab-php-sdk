<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CreateProductPricePoint;
use AdvancedBillingLib\Models\CreateProductPricePointRequest;
use Core\Utils\CoreHelper;

/**
 * Builder for model CreateProductPricePointRequest
 *
 * @see CreateProductPricePointRequest
 */
class CreateProductPricePointRequestBuilder
{
    /**
     * @var CreateProductPricePointRequest
     */
    private $instance;

    private function __construct(CreateProductPricePointRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new create product price point request Builder object.
     */
    public static function init(CreateProductPricePoint $pricePoint): self
    {
        return new self(new CreateProductPricePointRequest($pricePoint));
    }

    /**
     * Initializes a new create product price point request object.
     */
    public function build(): CreateProductPricePointRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
