<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\SubscriptionGroupUpdateError;
use Core\Utils\CoreHelper;

/**
 * Builder for model SubscriptionGroupUpdateError
 *
 * @see SubscriptionGroupUpdateError
 */
class SubscriptionGroupUpdateErrorBuilder
{
    /**
     * @var SubscriptionGroupUpdateError
     */
    private $instance;

    private function __construct(SubscriptionGroupUpdateError $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Subscription Group Update Error Builder object.
     */
    public static function init(): self
    {
        return new self(new SubscriptionGroupUpdateError());
    }

    /**
     * Sets members field.
     *
     * @param string[]|null $value
     */
    public function members(?array $value): self
    {
        $this->instance->setMembers($value);
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
     * Initializes a new Subscription Group Update Error object.
     */
    public function build(): SubscriptionGroupUpdateError
    {
        return CoreHelper::clone($this->instance);
    }
}
