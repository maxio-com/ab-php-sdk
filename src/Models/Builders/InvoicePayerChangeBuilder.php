<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\InvoicePayerChange;
use Core\Utils\CoreHelper;

/**
 * Builder for model InvoicePayerChange
 *
 * @see InvoicePayerChange
 */
class InvoicePayerChangeBuilder
{
    /**
     * @var InvoicePayerChange
     */
    private $instance;

    private function __construct(InvoicePayerChange $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new invoice payer change Builder object.
     */
    public static function init(): self
    {
        return new self(new InvoicePayerChange());
    }

    /**
     * Sets first name field.
     */
    public function firstName(?string $value): self
    {
        $this->instance->setFirstName($value);
        return $this;
    }

    /**
     * Sets last name field.
     */
    public function lastName(?string $value): self
    {
        $this->instance->setLastName($value);
        return $this;
    }

    /**
     * Sets organization field.
     */
    public function organization(?string $value): self
    {
        $this->instance->setOrganization($value);
        return $this;
    }

    /**
     * Sets email field.
     */
    public function email(?string $value): self
    {
        $this->instance->setEmail($value);
        return $this;
    }

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property
     * @param mixed $value Value of property
     */
    public function additionalProperty(string $name, $value): self
    {
        $this->instance->addAdditionalProperty($name, $value);
        return $this;
    }

    /**
     * Initializes a new invoice payer change object.
     */
    public function build(): InvoicePayerChange
    {
        return CoreHelper::clone($this->instance);
    }
}
