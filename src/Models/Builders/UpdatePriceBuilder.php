<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\UpdatePrice;
use Core\Utils\CoreHelper;

/**
 * Builder for model UpdatePrice
 *
 * @see UpdatePrice
 */
class UpdatePriceBuilder
{
    /**
     * @var UpdatePrice
     */
    private $instance;

    private function __construct(UpdatePrice $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new update price Builder object.
     */
    public static function init(): self
    {
        return new self(new UpdatePrice());
    }

    /**
     * Sets id field.
     */
    public function id(?int $value): self
    {
        $this->instance->setId($value);
        return $this;
    }

    /**
     * Sets ending quantity field.
     */
    public function endingQuantity($value): self
    {
        $this->instance->setEndingQuantity($value);
        return $this;
    }

    /**
     * Sets unit price field.
     */
    public function unitPrice($value): self
    {
        $this->instance->setUnitPrice($value);
        return $this;
    }

    /**
     * Sets destroy field.
     */
    public function destroy(?bool $value): self
    {
        $this->instance->setDestroy($value);
        return $this;
    }

    /**
     * Sets starting quantity field.
     */
    public function startingQuantity($value): self
    {
        $this->instance->setStartingQuantity($value);
        return $this;
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
     * Initializes a new update price object.
     */
    public function build(): UpdatePrice
    {
        return CoreHelper::clone($this->instance);
    }
}
