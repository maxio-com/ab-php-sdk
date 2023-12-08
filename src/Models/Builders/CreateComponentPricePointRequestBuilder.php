<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CreateComponentPricePointRequest;
use Core\Utils\CoreHelper;

/**
 * Builder for model CreateComponentPricePointRequest
 *
 * @see CreateComponentPricePointRequest
 */
class CreateComponentPricePointRequestBuilder
{
    /**
     * @var CreateComponentPricePointRequest
     */
    private $instance;

    private function __construct(CreateComponentPricePointRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new create component price point request Builder object.
     */
    public static function init($pricePoint): self
    {
        return new self(new CreateComponentPricePointRequest($pricePoint));
    }

    /**
     * Initializes a new create component price point request object.
     */
    public function build(): CreateComponentPricePointRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
