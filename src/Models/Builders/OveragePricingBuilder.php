<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\OveragePricing;
use Core\Utils\CoreHelper;

/**
 * Builder for model OveragePricing
 *
 * @see OveragePricing
 */
class OveragePricingBuilder
{
    /**
     * @var OveragePricing
     */
    private $instance;

    private function __construct(OveragePricing $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new overage pricing Builder object.
     */
    public static function init(string $pricingScheme): self
    {
        return new self(new OveragePricing($pricingScheme));
    }

    /**
     * Sets prices field.
     */
    public function prices(?array $value): self
    {
        $this->instance->setPrices($value);
        return $this;
    }

    /**
     * Initializes a new overage pricing object.
     */
    public function build(): OveragePricing
    {
        return CoreHelper::clone($this->instance);
    }
}
