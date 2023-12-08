<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\UpdateComponentPricePoint;
use AdvancedBillingLib\Models\UpdateComponentPricePointRequest;
use Core\Utils\CoreHelper;

/**
 * Builder for model UpdateComponentPricePointRequest
 *
 * @see UpdateComponentPricePointRequest
 */
class UpdateComponentPricePointRequestBuilder
{
    /**
     * @var UpdateComponentPricePointRequest
     */
    private $instance;

    private function __construct(UpdateComponentPricePointRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new update component price point request Builder object.
     */
    public static function init(): self
    {
        return new self(new UpdateComponentPricePointRequest());
    }

    /**
     * Sets price point field.
     */
    public function pricePoint(?UpdateComponentPricePoint $value): self
    {
        $this->instance->setPricePoint($value);
        return $this;
    }

    /**
     * Initializes a new update component price point request object.
     */
    public function build(): UpdateComponentPricePointRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
