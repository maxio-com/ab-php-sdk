<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CreateCustomer;
use AdvancedBillingLib\Models\CreateCustomerRequest;
use Core\Utils\CoreHelper;

/**
 * Builder for model CreateCustomerRequest
 *
 * @see CreateCustomerRequest
 */
class CreateCustomerRequestBuilder
{
    /**
     * @var CreateCustomerRequest
     */
    private $instance;

    private function __construct(CreateCustomerRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Create Customer Request Builder object.
     *
     * @param CreateCustomer $customer
     */
    public static function init(CreateCustomer $customer): self
    {
        return new self(new CreateCustomerRequest($customer));
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
     * Initializes a new Create Customer Request object.
     */
    public function build(): CreateCustomerRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
