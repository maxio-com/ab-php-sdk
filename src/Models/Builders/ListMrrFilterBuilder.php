<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ListMrrFilter;
use Core\Utils\CoreHelper;

/**
 * Builder for model ListMrrFilter
 *
 * @see ListMrrFilter
 */
class ListMrrFilterBuilder
{
    /**
     * @var ListMrrFilter
     */
    private $instance;

    private function __construct(ListMrrFilter $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new List Mrr Filter Builder object.
     */
    public static function init(): self
    {
        return new self(new ListMrrFilter());
    }

    /**
     * Sets subscription ids field.
     *
     * @param int[]|null $value
     */
    public function subscriptionIds(?array $value): self
    {
        $this->instance->setSubscriptionIds($value);
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
     * Initializes a new List Mrr Filter object.
     */
    public function build(): ListMrrFilter
    {
        return CoreHelper::clone($this->instance);
    }
}
