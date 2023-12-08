<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CustomerPayerChange;
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
    public static function init(): self
    {
        return new self(new CustomerPayerChange());
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
     * Initializes a new customer payer change object.
     */
    public function build(): CustomerPayerChange
    {
        return CoreHelper::clone($this->instance);
    }
}
