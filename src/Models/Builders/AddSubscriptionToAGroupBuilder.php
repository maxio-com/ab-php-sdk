<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\AddSubscriptionToAGroup;
use Core\Utils\CoreHelper;

/**
 * Builder for model AddSubscriptionToAGroup
 *
 * @see AddSubscriptionToAGroup
 */
class AddSubscriptionToAGroupBuilder
{
    /**
     * @var AddSubscriptionToAGroup
     */
    private $instance;

    private function __construct(AddSubscriptionToAGroup $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new add subscription to agroup Builder object.
     */
    public static function init(): self
    {
        return new self(new AddSubscriptionToAGroup());
    }

    /**
     * Sets group field.
     */
    public function group($value): self
    {
        $this->instance->setGroup($value);
        return $this;
    }

    /**
     * Initializes a new add subscription to agroup object.
     */
    public function build(): AddSubscriptionToAGroup
    {
        return CoreHelper::clone($this->instance);
    }
}
