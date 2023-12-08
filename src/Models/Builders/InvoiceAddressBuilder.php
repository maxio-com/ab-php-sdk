<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\InvoiceAddress;
use Core\Utils\CoreHelper;

/**
 * Builder for model InvoiceAddress
 *
 * @see InvoiceAddress
 */
class InvoiceAddressBuilder
{
    /**
     * @var InvoiceAddress
     */
    private $instance;

    private function __construct(InvoiceAddress $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new invoice address Builder object.
     */
    public static function init(): self
    {
        return new self(new InvoiceAddress());
    }

    /**
     * Sets street field.
     */
    public function street(?string $value): self
    {
        $this->instance->setStreet($value);
        return $this;
    }

    /**
     * Unsets street field.
     */
    public function unsetStreet(): self
    {
        $this->instance->unsetStreet();
        return $this;
    }

    /**
     * Sets line 2 field.
     */
    public function line2(?string $value): self
    {
        $this->instance->setLine2($value);
        return $this;
    }

    /**
     * Unsets line 2 field.
     */
    public function unsetLine2(): self
    {
        $this->instance->unsetLine2();
        return $this;
    }

    /**
     * Sets city field.
     */
    public function city(?string $value): self
    {
        $this->instance->setCity($value);
        return $this;
    }

    /**
     * Unsets city field.
     */
    public function unsetCity(): self
    {
        $this->instance->unsetCity();
        return $this;
    }

    /**
     * Sets state field.
     */
    public function state(?string $value): self
    {
        $this->instance->setState($value);
        return $this;
    }

    /**
     * Unsets state field.
     */
    public function unsetState(): self
    {
        $this->instance->unsetState();
        return $this;
    }

    /**
     * Sets zip field.
     */
    public function zip(?string $value): self
    {
        $this->instance->setZip($value);
        return $this;
    }

    /**
     * Unsets zip field.
     */
    public function unsetZip(): self
    {
        $this->instance->unsetZip();
        return $this;
    }

    /**
     * Sets country field.
     */
    public function country(?string $value): self
    {
        $this->instance->setCountry($value);
        return $this;
    }

    /**
     * Unsets country field.
     */
    public function unsetCountry(): self
    {
        $this->instance->unsetCountry();
        return $this;
    }

    /**
     * Initializes a new invoice address object.
     */
    public function build(): InvoiceAddress
    {
        return CoreHelper::clone($this->instance);
    }
}
