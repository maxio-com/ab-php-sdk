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
     * Initializes a new create or update segment price Builder object.
     */
    public static function init($unitPrice): self
    {
        return new self(new CreateOrUpdateSegmentPrice($unitPrice));
    }

    /**
     * Sets starting quantity field.
     */
    public function startingQuantity(?int $value): self
    {
        $this->instance->setStartingQuantity($value);
        return $this;
    }

    /**
     * Sets ending quantity field.
     */
    public function endingQuantity(?int $value): self
    {
        $this->instance->setEndingQuantity($value);
        return $this;
    }

    /**
     * Initializes a new create or update segment price object.
     */
    public function build(): CreateOrUpdateSegmentPrice
    {
        return CoreHelper::clone($this->instance);
    }
}
