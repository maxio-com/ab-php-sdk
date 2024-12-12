<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\SubscriptionGroupMembersArrayError;
use Core\Utils\CoreHelper;

/**
 * Builder for model SubscriptionGroupMembersArrayError
 *
 * @see SubscriptionGroupMembersArrayError
 */
class SubscriptionGroupMembersArrayErrorBuilder
{
    /**
     * @var SubscriptionGroupMembersArrayError
     */
    private $instance;

    private function __construct(SubscriptionGroupMembersArrayError $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Subscription Group Members Array Error Builder object.
     *
     * @param string[] $members
     */
    public static function init(array $members): self
    {
        return new self(new SubscriptionGroupMembersArrayError($members));
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
     * Initializes a new Subscription Group Members Array Error object.
     */
    public function build(): SubscriptionGroupMembersArrayError
    {
        return CoreHelper::clone($this->instance);
    }
}
