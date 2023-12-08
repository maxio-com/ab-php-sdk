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
     * Initializes a new customer response Builder object.
     */
    public static function init(Customer $customer): self
    {
        return new self(new CustomerResponse($customer));
    }

    /**
     * Initializes a new customer response object.
     */
    public function build(): CustomerResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
