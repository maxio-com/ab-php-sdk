<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CreateComponentPricePointsRequest;
use Core\Utils\CoreHelper;

/**
 * Builder for model CreateComponentPricePointsRequest
 *
 * @see CreateComponentPricePointsRequest
 */
class CreateComponentPricePointsRequestBuilder
{
    /**
     * @var CreateComponentPricePointsRequest
     */
    private $instance;

    private function __construct(CreateComponentPricePointsRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new create component price points request Builder object.
     */
    public static function init(array $pricePoints): self
    {
        return new self(new CreateComponentPricePointsRequest($pricePoints));
    }

    /**
     * Initializes a new create component price points request object.
     */
    public function build(): CreateComponentPricePointsRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
