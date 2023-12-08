<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\MovementLineItem;
use Core\Utils\CoreHelper;

/**
 * Builder for model MovementLineItem
 *
 * @see MovementLineItem
 */
class MovementLineItemBuilder
{
    /**
     * @var MovementLineItem
     */
    private $instance;

    private function __construct(MovementLineItem $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new movement line item Builder object.
     */
    public static function init(): self
    {
        return new self(new MovementLineItem());
    }

    /**
     * Sets product id field.
     */
    public function productId(?int $value): self
    {
        $this->instance->setProductId($value);
        return $this;
    }

    /**
     * Sets component id field.
     */
    public function componentId(?int $value): self
    {
        $this->instance->setComponentId($value);
        return $this;
    }

    /**
     * Sets price point id field.
     */
    public function pricePointId(?int $value): self
    {
        $this->instance->setPricePointId($value);
        return $this;
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
     * Sets mrr field.
     */
    public function mrr(?int $value): self
    {
        $this->instance->setMrr($value);
        return $this;
    }

    /**
     * Sets mrr movements field.
     */
    public function mrrMovements(?array $value): self
    {
        $this->instance->setMrrMovements($value);
        return $this;
    }

    /**
     * Sets quantity field.
     */
    public function quantity(?int $value): self
    {
        $this->instance->setQuantity($value);
        return $this;
    }

    /**
     * Sets prev quantity field.
     */
    public function prevQuantity(?int $value): self
    {
        $this->instance->setPrevQuantity($value);
        return $this;
    }

    /**
     * Sets recurring field.
     */
    public function recurring(?bool $value): self
    {
        $this->instance->setRecurring($value);
        return $this;
    }

    /**
     * Initializes a new movement line item object.
     */
    public function build(): MovementLineItem
    {
        return CoreHelper::clone($this->instance);
    }
}
