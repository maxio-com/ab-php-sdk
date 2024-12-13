<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CustomerAttributes;
use Core\Utils\CoreHelper;

/**
 * Builder for model CustomerAttributes
 *
 * @see CustomerAttributes
 */
class CustomerAttributesBuilder
{
    /**
     * @var CustomerAttributes
     */
    private $instance;

    private function __construct(CustomerAttributes $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Customer Attributes Builder object.
     */
    public static function init(): self
    {
        return new self(new CustomerAttributes());
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
     * Unsets address 2 field.
     */
    public function unsetAddress2(): self
    {
        $this->instance->unsetAddress2();
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
     * Sets verified field.
     *
     * @param bool|null $value
     */
    public function verified(?bool $value): self
    {
        $this->instance->setVerified($value);
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
     * Sets metafields field.
     *
     * @param array<string,string>|null $value
     */
    public function metafields(?array $value): self
    {
        $this->instance->setMetafields($value);
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
     * Sets default auto renewal profile id field.
     *
     * @param int|null $value
     */
    public function defaultAutoRenewalProfileId(?int $value): self
    {
        $this->instance->setDefaultAutoRenewalProfileId($value);
        return $this;
    }

    /**
     * Unsets default auto renewal profile id field.
     */
    public function unsetDefaultAutoRenewalProfileId(): self
    {
        $this->instance->unsetDefaultAutoRenewalProfileId();
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
     * Initializes a new Customer Attributes object.
     */
    public function build(): CustomerAttributes
    {
        return CoreHelper::clone($this->instance);
    }
}
