<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CreateOrUpdateProduct;
use AdvancedBillingLib\Models\CreateOrUpdateProductRequest;
use Core\Utils\CoreHelper;

/**
 * Builder for model CreateOrUpdateProductRequest
 *
 * @see CreateOrUpdateProductRequest
 */
class CreateOrUpdateProductRequestBuilder
{
    /**
     * @var CreateOrUpdateProductRequest
     */
    private $instance;

    private function __construct(CreateOrUpdateProductRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new create or update product request Builder object.
     */
    public static function init(CreateOrUpdateProduct $product): self
    {
        return new self(new CreateOrUpdateProductRequest($product));
    }

    /**
     * Initializes a new create or update product request object.
     */
    public function build(): CreateOrUpdateProductRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
