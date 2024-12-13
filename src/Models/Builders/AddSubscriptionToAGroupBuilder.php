<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\AddSubscriptionToAGroup;
use AdvancedBillingLib\Models\GroupSettings;
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
     * Initializes a new Add Subscription To A Group Builder object.
     */
    public static function init(): self
    {
        return new self(new AddSubscriptionToAGroup());
    }

    /**
     * Sets group field.
     *
     * @param GroupSettings|null $value
     */
    public function group(?GroupSettings $value): self
    {
        $this->instance->setGroup($value);
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
     * Initializes a new Add Subscription To A Group object.
     */
    public function build(): AddSubscriptionToAGroup
    {
        return CoreHelper::clone($this->instance);
    }
}
