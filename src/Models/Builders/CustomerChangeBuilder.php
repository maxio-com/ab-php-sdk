<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CustomerBillingAddressChange;
use AdvancedBillingLib\Models\CustomerChange;
use AdvancedBillingLib\Models\CustomerCustomFieldsChange;
use AdvancedBillingLib\Models\CustomerPayerChange;
use AdvancedBillingLib\Models\CustomerShippingAddressChange;
use Core\Utils\CoreHelper;

/**
 * Builder for model CustomerChange
 *
 * @see CustomerChange
 */
class CustomerChangeBuilder
{
    /**
     * @var CustomerChange
     */
    private $instance;

    private function __construct(CustomerChange $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new customer change Builder object.
     */
    public static function init(): self
    {
        return new self(new CustomerChange());
    }

    /**
     * Sets payer field.
     */
    public function payer(?CustomerPayerChange $value): self
    {
        $this->instance->setPayer($value);
        return $this;
    }

    /**
     * Sets shipping address field.
     */
    public function shippingAddress(?CustomerShippingAddressChange $value): self
    {
        $this->instance->setShippingAddress($value);
        return $this;
    }

    /**
     * Sets billing address field.
     */
    public function billingAddress(?CustomerBillingAddressChange $value): self
    {
        $this->instance->setBillingAddress($value);
        return $this;
    }

    /**
     * Sets custom fields field.
     */
    public function customFields(?CustomerCustomFieldsChange $value): self
    {
        $this->instance->setCustomFields($value);
        return $this;
    }

    /**
     * Initializes a new customer change object.
     */
    public function build(): CustomerChange
    {
        return CoreHelper::clone($this->instance);
    }
}
