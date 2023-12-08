<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ComponentPricePoint;
use AdvancedBillingLib\Models\ComponentPricePointResponse;
use Core\Utils\CoreHelper;

/**
 * Builder for model ComponentPricePointResponse
 *
 * @see ComponentPricePointResponse
 */
class ComponentPricePointResponseBuilder
{
    /**
     * @var ComponentPricePointResponse
     */
    private $instance;

    private function __construct(ComponentPricePointResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new component price point response Builder object.
     */
    public static function init(ComponentPricePoint $pricePoint): self
    {
        return new self(new ComponentPricePointResponse($pricePoint));
    }

    /**
     * Initializes a new component price point response object.
     */
    public function build(): ComponentPricePointResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
