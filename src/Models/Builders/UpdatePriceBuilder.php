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
     * Initializes a new Update Price Builder object.
     */
    public static function init(): self
    {
        return new self(new UpdatePrice());
    }

    /**
     * Sets id field.
     *
     * @param int|null $value
     */
    public function id(?int $value): self
    {
        $this->instance->setId($value);
        return $this;
    }

    /**
     * Sets ending quantity field.
     *
     * @param int|string|null $value
     */
    public function endingQuantity($value): self
    {
        $this->instance->setEndingQuantity($value);
        return $this;
    }

    /**
     * Sets unit price field.
     *
     * @param float|string|null $value
     */
    public function unitPrice($value): self
    {
        $this->instance->setUnitPrice($value);
        return $this;
    }

    /**
     * Sets destroy field.
     *
     * @param bool|null $value
     */
    public function destroy(?bool $value): self
    {
        $this->instance->setDestroy($value);
        return $this;
    }

    /**
     * Sets starting quantity field.
     *
     * @param int|string|null $value
     */
    public function startingQuantity($value): self
    {
        $this->instance->setStartingQuantity($value);
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
     * Initializes a new Update Price object.
     */
    public function build(): UpdatePrice
    {
        return CoreHelper::clone($this->instance);
    }
}
