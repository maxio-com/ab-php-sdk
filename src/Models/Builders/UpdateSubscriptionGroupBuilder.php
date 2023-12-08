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
     * Initializes a new update subscription group Builder object.
     */
    public static function init(): self
    {
        return new self(new UpdateSubscriptionGroup());
    }

    /**
     * Sets member ids field.
     */
    public function memberIds(?array $value): self
    {
        $this->instance->setMemberIds($value);
        return $this;
    }

    /**
     * Initializes a new update subscription group object.
     */
    public function build(): UpdateSubscriptionGroup
    {
        return CoreHelper::clone($this->instance);
    }
}
