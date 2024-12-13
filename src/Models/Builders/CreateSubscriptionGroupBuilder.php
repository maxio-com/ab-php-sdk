<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CreateSubscriptionGroup;
use Core\Utils\CoreHelper;

/**
 * Builder for model CreateSubscriptionGroup
 *
 * @see CreateSubscriptionGroup
 */
class CreateSubscriptionGroupBuilder
{
    /**
     * @var CreateSubscriptionGroup
     */
    private $instance;

    private function __construct(CreateSubscriptionGroup $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Create Subscription Group Builder object.
     *
     * @param int $subscriptionId
     */
    public static function init(int $subscriptionId): self
    {
        return new self(new CreateSubscriptionGroup($subscriptionId));
    }

    /**
     * Sets member ids field.
     *
     * @param int[]|null $value
     */
    public function memberIds(?array $value): self
    {
        $this->instance->setMemberIds($value);
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
     * Initializes a new Create Subscription Group object.
     */
    public function build(): CreateSubscriptionGroup
    {
        return CoreHelper::clone($this->instance);
    }
}
