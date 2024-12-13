<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\MovementLineItem;
use AdvancedBillingLib\Models\MRRMovement;
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
     * Initializes a new Movement Line Item Builder object.
     */
    public static function init(): self
    {
        return new self(new MovementLineItem());
    }

    /**
     * Sets product id field.
     *
     * @param int|null $value
     */
    public function productId(?int $value): self
    {
        $this->instance->setProductId($value);
        return $this;
    }

    /**
     * Sets component id field.
     *
     * @param int|null $value
     */
    public function componentId(?int $value): self
    {
        $this->instance->setComponentId($value);
        return $this;
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
     * Sets name field.
     *
     * @param string|null $value
     */
    public function name(?string $value): self
    {
        $this->instance->setName($value);
        return $this;
    }

    /**
     * Sets mrr field.
     *
     * @param int|null $value
     */
    public function mrr(?int $value): self
    {
        $this->instance->setMrr($value);
        return $this;
    }

    /**
     * Sets mrr movements field.
     *
     * @param MRRMovement[]|null $value
     */
    public function mrrMovements(?array $value): self
    {
        $this->instance->setMrrMovements($value);
        return $this;
    }

    /**
     * Sets quantity field.
     *
     * @param int|null $value
     */
    public function quantity(?int $value): self
    {
        $this->instance->setQuantity($value);
        return $this;
    }

    /**
     * Sets prev quantity field.
     *
     * @param int|null $value
     */
    public function prevQuantity(?int $value): self
    {
        $this->instance->setPrevQuantity($value);
        return $this;
    }

    /**
     * Sets recurring field.
     *
     * @param bool|null $value
     */
    public function recurring(?bool $value): self
    {
        $this->instance->setRecurring($value);
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
     * Initializes a new Movement Line Item object.
     */
    public function build(): MovementLineItem
    {
        return CoreHelper::clone($this->instance);
    }
}
