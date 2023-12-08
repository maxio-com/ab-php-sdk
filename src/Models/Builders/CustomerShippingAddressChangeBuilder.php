<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CustomerShippingAddressChange;
use Core\Utils\CoreHelper;

/**
 * Builder for model CustomerShippingAddressChange
 *
 * @see CustomerShippingAddressChange
 */
class CustomerShippingAddressChangeBuilder
{
    /**
     * @var CustomerShippingAddressChange
     */
    private $instance;

    private function __construct(CustomerShippingAddressChange $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new customer shipping address change Builder object.
     */
    public static function init(): self
    {
        return new self(new CustomerShippingAddressChange());
    }

    /**
     * Sets before field.
     */
    public function before(?array $value): self
    {
        $this->instance->setBefore($value);
        return $this;
    }

    /**
     * Sets after field.
     */
    public function after(?array $value): self
    {
        $this->instance->setAfter($value);
        return $this;
    }

    /**
     * Initializes a new customer shipping address change object.
     */
    public function build(): CustomerShippingAddressChange
    {
        return CoreHelper::clone($this->instance);
    }
}
