<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\Customer;
use Core\Utils\CoreHelper;

/**
 * Builder for model Customer
 *
 * @see Customer
 */
class CustomerBuilder
{
    /**
     * @var Customer
     */
    private $instance;

    private function __construct(Customer $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Customer Builder object.
     */
    public static function init(): self
    {
        return new self(new Customer());
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
     * Unsets cc emails field.
     */
    public function unsetCcEmails(): self
    {
        $this->instance->unsetCcEmails();
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
     * Sets id field.
     *
     * @param int|null $value
     */
    public function id(?int $value): self
    {
        $this->instance->setId($value);
        return $this;
    }

    /**
     * Sets created at field.
     *
     * @param \DateTime|null $value
     */
    public function createdAt(?\DateTime $value): self
    {
        $this->instance->setCreatedAt($value);
        return $this;
    }

    /**
     * Sets updated at field.
     *
     * @param \DateTime|null $value
     */
    public function updatedAt(?\DateTime $value): self
    {
        $this->instance->setUpdatedAt($value);
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
     * Unsets address field.
     */
    public function unsetAddress(): self
    {
        $this->instance->unsetAddress();
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
     * Unsets city field.
     */
    public function unsetCity(): self
    {
        $this->instance->unsetCity();
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
     * Unsets state field.
     */
    public function unsetState(): self
    {
        $this->instance->unsetState();
        return $this;
    }

    /**
     * Sets state name field.
     *
     * @param string|null $value
     */
    public function stateName(?string $value): self
    {
        $this->instance->setStateName($value);
        return $this;
    }

    /**
     * Unsets state name field.
     */
    public function unsetStateName(): self
    {
        $this->instance->unsetStateName();
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
     * Unsets zip field.
     */
    public function unsetZip(): self
    {
        $this->instance->unsetZip();
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
     * Unsets country field.
     */
    public function unsetCountry(): self
    {
        $this->instance->unsetCountry();
        return $this;
    }

    /**
     * Sets country name field.
     *
     * @param string|null $value
     */
    public function countryName(?string $value): self
    {
        $this->instance->setCountryName($value);
        return $this;
    }

    /**
     * Unsets country name field.
     */
    public function unsetCountryName(): self
    {
        $this->instance->unsetCountryName();
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
     * Unsets phone field.
     */
    public function unsetPhone(): self
    {
        $this->instance->unsetPhone();
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
     * Unsets verified field.
     */
    public function unsetVerified(): self
    {
        $this->instance->unsetVerified();
        return $this;
    }

    /**
     * Sets portal customer created at field.
     *
     * @param \DateTime|null $value
     */
    public function portalCustomerCreatedAt(?\DateTime $value): self
    {
        $this->instance->setPortalCustomerCreatedAt($value);
        return $this;
    }

    /**
     * Unsets portal customer created at field.
     */
    public function unsetPortalCustomerCreatedAt(): self
    {
        $this->instance->unsetPortalCustomerCreatedAt();
        return $this;
    }

    /**
     * Sets portal invite last sent at field.
     *
     * @param \DateTime|null $value
     */
    public function portalInviteLastSentAt(?\DateTime $value): self
    {
        $this->instance->setPortalInviteLastSentAt($value);
        return $this;
    }

    /**
     * Unsets portal invite last sent at field.
     */
    public function unsetPortalInviteLastSentAt(): self
    {
        $this->instance->unsetPortalInviteLastSentAt();
        return $this;
    }

    /**
     * Sets portal invite last accepted at field.
     *
     * @param \DateTime|null $value
     */
    public function portalInviteLastAcceptedAt(?\DateTime $value): self
    {
        $this->instance->setPortalInviteLastAcceptedAt($value);
        return $this;
    }

    /**
     * Unsets portal invite last accepted at field.
     */
    public function unsetPortalInviteLastAcceptedAt(): self
    {
        $this->instance->unsetPortalInviteLastAcceptedAt();
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
     * Unsets vat number field.
     */
    public function unsetVatNumber(): self
    {
        $this->instance->unsetVatNumber();
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
     * Unsets locale field.
     */
    public function unsetLocale(): self
    {
        $this->instance->unsetLocale();
        return $this;
    }

    /**
     * Sets default subscription group uid field.
     *
     * @param string|null $value
     */
    public function defaultSubscriptionGroupUid(?string $value): self
    {
        $this->instance->setDefaultSubscriptionGroupUid($value);
        return $this;
    }

    /**
     * Unsets default subscription group uid field.
     */
    public function unsetDefaultSubscriptionGroupUid(): self
    {
        $this->instance->unsetDefaultSubscriptionGroupUid();
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
     * Unsets tax exempt reason field.
     */
    public function unsetTaxExemptReason(): self
    {
        $this->instance->unsetTaxExemptReason();
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
     * Initializes a new Customer object.
     */
    public function build(): Customer
    {
        return CoreHelper::clone($this->instance);
    }
}
