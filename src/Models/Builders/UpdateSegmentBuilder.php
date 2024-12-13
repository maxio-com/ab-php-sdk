<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CreateOrUpdateSegmentPrice;
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
     * Initializes a new Update Segment Builder object.
     *
     * @param string $pricingScheme
     */
    public static function init(string $pricingScheme): self
    {
        return new self(new UpdateSegment($pricingScheme));
    }

    /**
     * Sets prices field.
     *
     * @param CreateOrUpdateSegmentPrice[]|null $value
     */
    public function prices(?array $value): self
    {
        $this->instance->setPrices($value);
        return $this;
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
     * Initializes a new Update Segment object.
     */
    public function build(): UpdateSegment
    {
        return CoreHelper::clone($this->instance);
    }
}
