<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\Purchase;
use Core\Utils\CoreHelper;

/**
 * Builder for model Purchase
 *
 * @see Purchase
 */
class PurchaseBuilder
{
    /**
     * @var Purchase
     */
    private $instance;

    private function __construct(Purchase $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Purchase Builder object.
     *
     * @param string|int $quantity
     */
    public static function init($quantity): self
    {
        return new self(new Purchase($quantity));
    }

    /**
     * Sets price point id field.
     *
     * @param int|null $value
     */
    public function pricePointId(?int $value): self
    {
        $this->instance->setPricePointId($value);
        return $this;
    }

    /**
     * Sets memo field.
     *
     * @param string|null $value
     */
    public function memo(?string $value): self
    {
        $this->instance->setMemo($value);
        return $this;
    }

    /**
     * Unsets memo field.
     */
    public function unsetMemo(): self
    {
        $this->instance->unsetMemo();
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
     * Initializes a new Purchase object.
     */
    public function build(): Purchase
    {
        return CoreHelper::clone($this->instance);
    }
}
