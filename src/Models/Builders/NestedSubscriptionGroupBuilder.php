<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\NestedSubscriptionGroup;
use Core\Utils\CoreHelper;

/**
 * Builder for model NestedSubscriptionGroup
 *
 * @see NestedSubscriptionGroup
 */
class NestedSubscriptionGroupBuilder
{
    /**
     * @var NestedSubscriptionGroup
     */
    private $instance;

    private function __construct(NestedSubscriptionGroup $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Nested Subscription Group Builder object.
     */
    public static function init(): self
    {
        return new self(new NestedSubscriptionGroup());
    }

    /**
     * Sets uid field.
     *
     * @param string|null $value
     */
    public function uid(?string $value): self
    {
        $this->instance->setUid($value);
        return $this;
    }

    /**
     * Sets scheme field.
     *
     * @param int|null $value
     */
    public function scheme(?int $value): self
    {
        $this->instance->setScheme($value);
        return $this;
    }

    /**
     * Sets primary subscription id field.
     *
     * @param int|null $value
     */
    public function primarySubscriptionId(?int $value): self
    {
        $this->instance->setPrimarySubscriptionId($value);
        return $this;
    }

    /**
     * Sets primary field.
     *
     * @param bool|null $value
     */
    public function primary(?bool $value): self
    {
        $this->instance->setPrimary($value);
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
     * Initializes a new Nested Subscription Group object.
     */
    public function build(): NestedSubscriptionGroup
    {
        return CoreHelper::clone($this->instance);
    }
}
