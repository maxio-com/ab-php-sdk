<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CustomerPayerChange;
use AdvancedBillingLib\Models\InvoicePayerChange;
use Core\Utils\CoreHelper;

/**
 * Builder for model CustomerPayerChange
 *
 * @see CustomerPayerChange
 */
class CustomerPayerChangeBuilder
{
    /**
     * @var CustomerPayerChange
     */
    private $instance;

    private function __construct(CustomerPayerChange $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Customer Payer Change Builder object.
     *
     * @param InvoicePayerChange $before
     * @param InvoicePayerChange $after
     */
    public static function init(InvoicePayerChange $before, InvoicePayerChange $after): self
    {
        return new self(new CustomerPayerChange($before, $after));
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
     * Initializes a new Customer Payer Change object.
     */
    public function build(): CustomerPayerChange
    {
        return CoreHelper::clone($this->instance);
    }
}
