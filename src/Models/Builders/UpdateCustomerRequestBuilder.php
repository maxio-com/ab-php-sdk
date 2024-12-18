<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\UpdateCustomer;
use AdvancedBillingLib\Models\UpdateCustomerRequest;
use Core\Utils\CoreHelper;

/**
 * Builder for model UpdateCustomerRequest
 *
 * @see UpdateCustomerRequest
 */
class UpdateCustomerRequestBuilder
{
    /**
     * @var UpdateCustomerRequest
     */
    private $instance;

    private function __construct(UpdateCustomerRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Update Customer Request Builder object.
     *
     * @param UpdateCustomer $customer
     */
    public static function init(UpdateCustomer $customer): self
    {
        return new self(new UpdateCustomerRequest($customer));
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
     * Initializes a new Update Customer Request object.
     */
    public function build(): UpdateCustomerRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
