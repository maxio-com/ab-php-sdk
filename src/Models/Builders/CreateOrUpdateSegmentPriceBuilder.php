<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CreateOrUpdateSegmentPrice;
use Core\Utils\CoreHelper;

/**
 * Builder for model CreateOrUpdateSegmentPrice
 *
 * @see CreateOrUpdateSegmentPrice
 */
class CreateOrUpdateSegmentPriceBuilder
{
    /**
     * @var CreateOrUpdateSegmentPrice
     */
    private $instance;

    private function __construct(CreateOrUpdateSegmentPrice $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Create Or Update Segment Price Builder object.
     *
     * @param string|float $unitPrice
     */
    public static function init($unitPrice): self
    {
        return new self(new CreateOrUpdateSegmentPrice($unitPrice));
    }

    /**
     * Sets starting quantity field.
     *
     * @param int|null $value
     */
    public function startingQuantity(?int $value): self
    {
        $this->instance->setStartingQuantity($value);
        return $this;
    }

    /**
     * Sets ending quantity field.
     *
     * @param int|null $value
     */
    public function endingQuantity(?int $value): self
    {
        $this->instance->setEndingQuantity($value);
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
     * Initializes a new Create Or Update Segment Price object.
     */
    public function build(): CreateOrUpdateSegmentPrice
    {
        return CoreHelper::clone($this->instance);
    }
}
