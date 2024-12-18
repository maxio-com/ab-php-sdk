<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CreateCustomer;
use Core\Utils\CoreHelper;

/**
 * Builder for model CreateCustomer
 *
 * @see CreateCustomer
 */
class CreateCustomerBuilder
{
    /**
     * @var CreateCustomer
     */
    private $instance;

    private function __construct(CreateCustomer $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Create Customer Builder object.
     *
     * @param string $firstName
     * @param string $lastName
     * @param string $email
     */
    public static function init(string $firstName, string $lastName, string $email): self
    {
        return new self(new CreateCustomer($firstName, $lastName, $email));
    }

    /**
     * Sets cc emails field.
     *
     * @param string|null $value
     */
    public function ccEmails(?string $value): self
    {
        $this->instance->setCcEmails($value);
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
     * Sets address field.
     *
     * @param string|null $value
     */
    public function address(?string $value): self
    {
        $this->instance->setAddress($value);
        return $this;
    }

    /**
     * Sets address 2 field.
     *
     * @param string|null $value
     */
    public function address2(?string $value): self
    {
        $this->instance->setAddress2($value);
        return $this;
    }

    /**
     * Sets city field.
     *
     * @param string|null $value
     */
    public function city(?string $value): self
    {
        $this->instance->setCity($value);
        return $this;
    }

    /**
     * Sets state field.
     *
     * @param string|null $value
     */
    public function state(?string $value): self
    {
        $this->instance->setState($value);
        return $this;
    }

    /**
     * Sets zip field.
     *
     * @param string|null $value
     */
    public function zip(?string $value): self
    {
        $this->instance->setZip($value);
        return $this;
    }

    /**
     * Sets country field.
     *
     * @param string|null $value
     */
    public function country(?string $value): self
    {
        $this->instance->setCountry($value);
        return $this;
    }

    /**
     * Sets phone field.
     *
     * @param string|null $value
     */
    public function phone(?string $value): self
    {
        $this->instance->setPhone($value);
        return $this;
    }

    /**
     * Sets locale field.
     *
     * @param string|null $value
     */
    public function locale(?string $value): self
    {
        $this->instance->setLocale($value);
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
     * Sets tax exempt field.
     *
     * @param bool|null $value
     */
    public function taxExempt(?bool $value): self
    {
        $this->instance->setTaxExempt($value);
        return $this;
    }

    /**
     * Sets tax exempt reason field.
     *
     * @param string|null $value
     */
    public function taxExemptReason(?string $value): self
    {
        $this->instance->setTaxExemptReason($value);
        return $this;
    }

    /**
     * Sets parent id field.
     *
     * @param int|null $value
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
     * Sets salesforce id field.
     *
     * @param string|null $value
     */
    public function salesforceId(?string $value): self
    {
        $this->instance->setSalesforceId($value);
        return $this;
    }

    /**
     * Unsets salesforce id field.
     */
    public function unsetSalesforceId(): self
    {
        $this->instance->unsetSalesforceId();
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
     * Initializes a new Create Customer object.
     */
    public function build(): CreateCustomer
    {
        return CoreHelper::clone($this->instance);
    }
}
