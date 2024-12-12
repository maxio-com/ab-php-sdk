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
     * Initializes a new Invoice Customer Builder object.
     */
    public static function init(): self
    {
        return new self(new InvoiceCustomer());
    }

    /**
     * Sets chargify id field.
     *
     * @param int|null $value
     */
    public function chargifyId(?int $value): self
    {
        $this->instance->setChargifyId($value);
        return $this;
    }

    /**
     * Unsets chargify id field.
     */
    public function unsetChargifyId(): self
    {
        $this->instance->unsetChargifyId();
        return $this;
    }

    /**
     * Sets first name field.
     *
     * @param string|null $value
     */
    public function firstName(?string $value): self
    {
        $this->instance->setFirstName($value);
        return $this;
    }

    /**
     * Sets last name field.
     *
     * @param string|null $value
     */
    public function lastName(?string $value): self
    {
        $this->instance->setLastName($value);
        return $this;
    }

    /**
     * Sets organization field.
     *
     * @param string|null $value
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
     *
     * @param string|null $value
     */
    public function email(?string $value): self
    {
        $this->instance->setEmail($value);
        return $this;
    }

    /**
     * Sets vat number field.
     *
     * @param string|null $value
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
     *
     * @param string|null $value
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
     * Initializes a new Invoice Customer object.
     */
    public function build(): InvoiceCustomer
    {
        return CoreHelper::clone($this->instance);
    }
}
