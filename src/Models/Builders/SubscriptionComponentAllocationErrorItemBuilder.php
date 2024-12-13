<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\SubscriptionComponentAllocationErrorItem;
use Core\Utils\CoreHelper;

/**
 * Builder for model SubscriptionComponentAllocationErrorItem
 *
 * @see SubscriptionComponentAllocationErrorItem
 */
class SubscriptionComponentAllocationErrorItemBuilder
{
    /**
     * @var SubscriptionComponentAllocationErrorItem
     */
    private $instance;

    private function __construct(SubscriptionComponentAllocationErrorItem $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Subscription Component Allocation Error Item Builder object.
     */
    public static function init(): self
    {
        return new self(new SubscriptionComponentAllocationErrorItem());
    }

    /**
     * Sets kind field.
     *
     * @param string|null $value
     */
    public function kind(?string $value): self
    {
        $this->instance->setKind($value);
        return $this;
    }

    /**
     * Sets message field.
     *
     * @param string|null $value
     */
    public function message(?string $value): self
    {
        $this->instance->setMessage($value);
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
     * Initializes a new Subscription Component Allocation Error Item object.
     */
    public function build(): SubscriptionComponentAllocationErrorItem
    {
        return CoreHelper::clone($this->instance);
    }
}
