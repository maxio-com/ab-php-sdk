<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\Customer;
use AdvancedBillingLib\Models\CustomerResponse;
use Core\Utils\CoreHelper;

/**
 * Builder for model CustomerResponse
 *
 * @see CustomerResponse
 */
class CustomerResponseBuilder
{
    /**
     * @var CustomerResponse
     */
    private $instance;

    private function __construct(CustomerResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Customer Response Builder object.
     *
     * @param Customer $customer
     */
    public static function init(Customer $customer): self
    {
        return new self(new CustomerResponse($customer));
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
     * Initializes a new Customer Response object.
     */
    public function build(): CustomerResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
