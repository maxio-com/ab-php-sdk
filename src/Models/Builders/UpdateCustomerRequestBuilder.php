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
     * Initializes a new update customer request Builder object.
     */
    public static function init(UpdateCustomer $customer): self
    {
        return new self(new UpdateCustomerRequest($customer));
    }

    /**
     * Initializes a new update customer request object.
     */
    public function build(): UpdateCustomerRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
