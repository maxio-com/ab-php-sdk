<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CustomerError;
use Core\Utils\CoreHelper;

/**
 * Builder for model CustomerError
 *
 * @see CustomerError
 */
class CustomerErrorBuilder
{
    /**
     * @var CustomerError
     */
    private $instance;

    private function __construct(CustomerError $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new customer error Builder object.
     */
    public static function init(): self
    {
        return new self(new CustomerError());
    }

    /**
     * Sets customer field.
     */
    public function customer(?string $value): self
    {
        $this->instance->setCustomer($value);
        return $this;
    }

    /**
     * Initializes a new customer error object.
     */
    public function build(): CustomerError
    {
        return CoreHelper::clone($this->instance);
    }
}
