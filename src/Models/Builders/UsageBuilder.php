<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\Usage;
use Core\Utils\CoreHelper;

/**
 * Builder for model Usage
 *
 * @see Usage
 */
class UsageBuilder
{
    /**
     * @var Usage
     */
    private $instance;

    private function __construct(Usage $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new usage Builder object.
     */
    public static function init(): self
    {
        return new self(new Usage());
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
     * Sets memo field.
     */
    public function memo(?string $value): self
    {
        $this->instance->setMemo($value);
        return $this;
    }

    /**
     * Sets created at field.
     */
    public function createdAt(?string $value): self
    {
        $this->instance->setCreatedAt($value);
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
     * Sets quantity field.
     */
    public function quantity($value): self
    {
        $this->instance->setQuantity($value);
        return $this;
    }

    /**
     * Sets overage quantity field.
     */
    public function overageQuantity(?int $value): self
    {
        $this->instance->setOverageQuantity($value);
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
     * Sets component handle field.
     */
    public function componentHandle(?string $value): self
    {
        $this->instance->setComponentHandle($value);
        return $this;
    }

    /**
     * Sets subscription id field.
     */
    public function subscriptionId(?int $value): self
    {
        $this->instance->setSubscriptionId($value);
        return $this;
    }

    /**
     * Initializes a new usage object.
     */
    public function build(): Usage
    {
        return CoreHelper::clone($this->instance);
    }
}
