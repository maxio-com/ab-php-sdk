<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\SubscriptionGroupCustomer;
use Core\Utils\CoreHelper;

/**
 * Builder for model SubscriptionGroupCustomer
 *
 * @see SubscriptionGroupCustomer
 */
class SubscriptionGroupCustomerBuilder
{
    /**
     * @var SubscriptionGroupCustomer
     */
    private $instance;

    private function __construct(SubscriptionGroupCustomer $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new subscription group customer Builder object.
     */
    public static function init(): self
    {
        return new self(new SubscriptionGroupCustomer());
    }

    /**
     * Sets first name field.
     */
    public function firstName(?string $value): self
    {
        $this->instance->setFirstName($value);
        return $this;
    }

    /**
     * Sets last name field.
     */
    public function lastName(?string $value): self
    {
        $this->instance->setLastName($value);
        return $this;
    }

    /**
     * Sets organization field.
     */
    public function organization(?string $value): self
    {
        $this->instance->setOrganization($value);
        return $this;
    }

    /**
     * Sets email field.
     */
    public function email(?string $value): self
    {
        $this->instance->setEmail($value);
        return $this;
    }

    /**
     * Sets reference field.
     */
    public function reference(?string $value): self
    {
        $this->instance->setReference($value);
        return $this;
    }

    /**
     * Initializes a new subscription group customer object.
     */
    public function build(): SubscriptionGroupCustomer
    {
        return CoreHelper::clone($this->instance);
    }
}
