<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\UpdateSegment;
use Core\Utils\CoreHelper;

/**
 * Builder for model UpdateSegment
 *
 * @see UpdateSegment
 */
class UpdateSegmentBuilder
{
    /**
     * @var UpdateSegment
     */
    private $instance;

    private function __construct(UpdateSegment $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new update segment Builder object.
     */
    public static function init(string $pricingScheme): self
    {
        return new self(new UpdateSegment($pricingScheme));
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
     * Initializes a new update segment object.
     */
    public function build(): UpdateSegment
    {
        return CoreHelper::clone($this->instance);
    }
}
