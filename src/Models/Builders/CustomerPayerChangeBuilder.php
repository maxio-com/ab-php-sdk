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
     * Initializes a new customer payer change Builder object.
     */
    public static function init(InvoicePayerChange $before, InvoicePayerChange $after): self
    {
        return new self(new CustomerPayerChange($before, $after));
    }

    /**
     * Initializes a new customer payer change object.
     */
    public function build(): CustomerPayerChange
    {
        return CoreHelper::clone($this->instance);
    }
}
