<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CloneComponentPricePoint;
use AdvancedBillingLib\Models\CloneComponentPricePointRequest;
use Core\Utils\CoreHelper;

/**
 * Builder for model CloneComponentPricePointRequest
 *
 * @see CloneComponentPricePointRequest
 */
class CloneComponentPricePointRequestBuilder
{
    /**
     * @var CloneComponentPricePointRequest
     */
    private $instance;

    private function __construct(CloneComponentPricePointRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Clone Component Price Point Request Builder object.
     *
     * @param CloneComponentPricePoint $pricePoint
     */
    public static function init(CloneComponentPricePoint $pricePoint): self
    {
        return new self(new CloneComponentPricePointRequest($pricePoint));
    }

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property.
     * @param mixed $value Value of property.
     */
    public function additionalProperty(string $name, $value): self
    {
        $this->instance->addAdditionalProperty($name, $value);
        return $this;
    }

    /**
     * Initializes a new Clone Component Price Point Request object.
     */
    public function build(): CloneComponentPricePointRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
