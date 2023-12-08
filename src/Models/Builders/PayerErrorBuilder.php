<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\PayerError;
use Core\Utils\CoreHelper;

/**
 * Builder for model PayerError
 *
 * @see PayerError
 */
class PayerErrorBuilder
{
    /**
     * @var PayerError
     */
    private $instance;

    private function __construct(PayerError $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new payer error Builder object.
     */
    public static function init(): self
    {
        return new self(new PayerError());
    }

    /**
     * Sets last name field.
     */
    public function lastName(?array $value): self
    {
        $this->instance->setLastName($value);
        return $this;
    }

    /**
     * Sets first name field.
     */
    public function firstName(?array $value): self
    {
        $this->instance->setFirstName($value);
        return $this;
    }

    /**
     * Sets email field.
     */
    public function email(?array $value): self
    {
        $this->instance->setEmail($value);
        return $this;
    }

    /**
     * Initializes a new payer error object.
     */
    public function build(): PayerError
    {
        return CoreHelper::clone($this->instance);
    }
}
