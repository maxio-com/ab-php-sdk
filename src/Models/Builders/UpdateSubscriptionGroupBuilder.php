<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\UpdateSubscriptionGroup;
use Core\Utils\CoreHelper;

/**
 * Builder for model UpdateSubscriptionGroup
 *
 * @see UpdateSubscriptionGroup
 */
class UpdateSubscriptionGroupBuilder
{
    /**
     * @var UpdateSubscriptionGroup
     */
    private $instance;

    private function __construct(UpdateSubscriptionGroup $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Update Subscription Group Builder object.
     */
    public static function init(): self
    {
        return new self(new UpdateSubscriptionGroup());
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
     * Initializes a new Update Subscription Group object.
     */
    public function build(): UpdateSubscriptionGroup
    {
        return CoreHelper::clone($this->instance);
    }
}
