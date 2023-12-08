<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\UpdateCustomer;
use Core\Utils\CoreHelper;

/**
 * Builder for model UpdateCustomer
 *
 * @see UpdateCustomer
 */
class UpdateCustomerBuilder
{
    /**
     * @var UpdateCustomer
     */
    private $instance;

    private function __construct(UpdateCustomer $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new update customer Builder object.
     */
    public static function init(): self
    {
        return new self(new UpdateCustomer());
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
     * Sets email field.
     */
    public function email(?string $value): self
    {
        $this->instance->setEmail($value);
        return $this;
    }

    /**
     * Sets cc emails field.
     */
    public function ccEmails(?string $value): self
    {
        $this->instance->setCcEmails($value);
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
     * Sets reference field.
     */
    public function reference(?string $value): self
    {
        $this->instance->setReference($value);
        return $this;
    }

    /**
     * Sets address field.
     */
    public function address(?string $value): self
    {
        $this->instance->setAddress($value);
        return $this;
    }

    /**
     * Sets address 2 field.
     */
    public function address2(?string $value): self
    {
        $this->instance->setAddress2($value);
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
     * Sets state field.
     */
    public function state(?string $value): self
    {
        $this->instance->setState($value);
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
     * Sets country field.
     */
    public function country(?string $value): self
    {
        $this->instance->setCountry($value);
        return $this;
    }

    /**
     * Sets phone field.
     */
    public function phone(?string $value): self
    {
        $this->instance->setPhone($value);
        return $this;
    }

    /**
     * Sets locale field.
     */
    public function locale(?string $value): self
    {
        $this->instance->setLocale($value);
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
     * Sets tax exempt field.
     */
    public function taxExempt(?bool $value): self
    {
        $this->instance->setTaxExempt($value);
        return $this;
    }

    /**
     * Sets tax exempt reason field.
     */
    public function taxExemptReason(?string $value): self
    {
        $this->instance->setTaxExemptReason($value);
        return $this;
    }

    /**
     * Sets parent id field.
     */
    public function parentId(?int $value): self
    {
        $this->instance->setParentId($value);
        return $this;
    }

    /**
     * Unsets parent id field.
     */
    public function unsetParentId(): self
    {
        $this->instance->unsetParentId();
        return $this;
    }

    /**
     * Initializes a new update customer object.
     */
    public function build(): UpdateCustomer
    {
        return CoreHelper::clone($this->instance);
    }
}
