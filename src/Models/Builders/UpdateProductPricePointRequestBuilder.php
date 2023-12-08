<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\UpdateProductPricePoint;
use AdvancedBillingLib\Models\UpdateProductPricePointRequest;
use Core\Utils\CoreHelper;

/**
 * Builder for model UpdateProductPricePointRequest
 *
 * @see UpdateProductPricePointRequest
 */
class UpdateProductPricePointRequestBuilder
{
    /**
     * @var UpdateProductPricePointRequest
     */
    private $instance;

    private function __construct(UpdateProductPricePointRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new update product price point request Builder object.
     */
    public static function init(UpdateProductPricePoint $pricePoint): self
    {
        return new self(new UpdateProductPricePointRequest($pricePoint));
    }

    /**
     * Initializes a new update product price point request object.
     */
    public function build(): UpdateProductPricePointRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
