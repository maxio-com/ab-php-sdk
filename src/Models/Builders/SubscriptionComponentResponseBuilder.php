<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\SubscriptionComponent;
use AdvancedBillingLib\Models\SubscriptionComponentResponse;
use Core\Utils\CoreHelper;

/**
 * Builder for model SubscriptionComponentResponse
 *
 * @see SubscriptionComponentResponse
 */
class SubscriptionComponentResponseBuilder
{
    /**
     * @var SubscriptionComponentResponse
     */
    private $instance;

    private function __construct(SubscriptionComponentResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Subscription Component Response Builder object.
     */
    public static function init(): self
    {
        return new self(new SubscriptionComponentResponse());
    }

    /**
     * Sets component field.
     *
     * @param SubscriptionComponent|null $value
     */
    public function component(?SubscriptionComponent $value): self
    {
        $this->instance->setComponent($value);
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
     * Initializes a new Subscription Component Response object.
     */
    public function build(): SubscriptionComponentResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
