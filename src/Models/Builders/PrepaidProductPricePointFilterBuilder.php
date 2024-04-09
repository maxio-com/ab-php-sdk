<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\PrepaidProductPricePointFilter;
use Core\Utils\CoreHelper;

/**
 * Builder for model PrepaidProductPricePointFilter
 *
 * @see PrepaidProductPricePointFilter
 */
class PrepaidProductPricePointFilterBuilder
{
    /**
     * @var PrepaidProductPricePointFilter
     */
    private $instance;

    private function __construct(PrepaidProductPricePointFilter $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new prepaid product price point filter Builder object.
     */
    public static function init(): self
    {
        return new self(new PrepaidProductPricePointFilter());
    }

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property
     * @param mixed $value Value of property
     */
    public function additionalProperty(string $name, $value): self
    {
        $this->instance->addAdditionalProperty($name, $value);
        return $this;
    }

    /**
     * Initializes a new prepaid product price point filter object.
     */
    public function build(): PrepaidProductPricePointFilter
    {
        return CoreHelper::clone($this->instance);
    }
}
