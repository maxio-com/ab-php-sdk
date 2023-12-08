<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\UpdateComponentPricePoint;
use Core\Utils\CoreHelper;

/**
 * Builder for model UpdateComponentPricePoint
 *
 * @see UpdateComponentPricePoint
 */
class UpdateComponentPricePointBuilder
{
    /**
     * @var UpdateComponentPricePoint
     */
    private $instance;

    private function __construct(UpdateComponentPricePoint $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new update component price point Builder object.
     */
    public static function init(): self
    {
        return new self(new UpdateComponentPricePoint());
    }

    /**
     * Sets name field.
     */
    public function name(?string $value): self
    {
        $this->instance->setName($value);
        return $this;
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
     * Initializes a new update component price point object.
     */
    public function build(): UpdateComponentPricePoint
    {
        return CoreHelper::clone($this->instance);
    }
}
