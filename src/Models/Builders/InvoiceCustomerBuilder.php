<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\InvoiceCustomer;
use Core\Utils\CoreHelper;

/**
 * Builder for model InvoiceCustomer
 *
 * @see InvoiceCustomer
 */
class InvoiceCustomerBuilder
{
    /**
     * @var InvoiceCustomer
     */
    private $instance;

    private function __construct(InvoiceCustomer $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new invoice customer Builder object.
     */
    public static function init(): self
    {
        return new self(new InvoiceCustomer());
    }

    /**
     * Sets chargify id field.
     */
    public function chargifyId(?int $value): self
    {
        $this->instance->setChargifyId($value);
        return $this;
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
     * Unsets organization field.
     */
    public function unsetOrganization(): self
    {
        $this->instance->unsetOrganization();
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
     * Sets vat number field.
     */
    public function vatNumber(?string $value): self
    {
        $this->instance->setVatNumber($value);
        return $this;
    }

    /**
     * Unsets vat number field.
     */
    public function unsetVatNumber(): self
    {
        $this->instance->unsetVatNumber();
        return $this;
    }

    /**
     * Sets reference field.
     */
    public function reference(?string $value): self
    {
        $this->instance->setReference($value);
        return $this;
    }

    /**
     * Unsets reference field.
     */
    public function unsetReference(): self
    {
        $this->instance->unsetReference();
        return $this;
    }

    /**
     * Initializes a new invoice customer object.
     */
    public function build(): InvoiceCustomer
    {
        return CoreHelper::clone($this->instance);
    }
}
