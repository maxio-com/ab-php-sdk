<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CustomerError;
use Core\Utils\CoreHelper;

/**
 * Builder for model CustomerError
 *
 * @see CustomerError
 */
class CustomerErrorBuilder
{
    /**
     * @var CustomerError
     */
    private $instance;

    private function __construct(CustomerError $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Customer Error Builder object.
     */
    public static function init(): self
    {
        return new self(new CustomerError());
    }

    /**
     * Sets customer field.
     *
     * @param string|null $value
     */
    public function customer(?string $value): self
    {
        $this->instance->setCustomer($value);
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
     * Initializes a new Customer Error object.
     */
    public function build(): CustomerError
    {
        return CoreHelper::clone($this->instance);
    }
}
