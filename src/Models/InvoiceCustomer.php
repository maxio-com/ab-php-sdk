<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use AdvancedBillingLib\ApiHelper;
use stdClass;

/**
 * Information about the customer who is owner or recipient the invoiced subscription.
 */
class InvoiceCustomer implements \JsonSerializable
{
    /**
     * @var array
     */
    private $chargifyId = [];

    /**
     * @var string|null
     */
    private $firstName;

    /**
     * @var string|null
     */
    private $lastName;

    /**
     * @var array
     */
    private $organization = [];

    /**
     * @var string|null
     */
    private $email;

    /**
     * @var array
     */
    private $vatNumber = [];

    /**
     * @var array
     */
    private $reference = [];

    /**
     * Returns Chargify Id.
     */
    public function getChargifyId(): ?int
    {
        if (count($this->chargifyId) == 0) {
            return null;
        }
        return $this->chargifyId['value'];
    }

    /**
     * Sets Chargify Id.
     *
     * @maps chargify_id
     */
    public function setChargifyId(?int $chargifyId): void
    {
        $this->chargifyId['value'] = $chargifyId;
    }

    /**
     * Unsets Chargify Id.
     */
    public function unsetChargifyId(): void
    {
        $this->chargifyId = [];
    }

    /**
     * Returns First Name.
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    /**
     * Sets First Name.
     *
     * @maps first_name
     */
    public function setFirstName(?string $firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * Returns Last Name.
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    /**
     * Sets Last Name.
     *
     * @maps last_name
     */
    public function setLastName(?string $lastName): void
    {
        $this->lastName = $lastName;
    }

    /**
     * Returns Organization.
     */
    public function getOrganization(): ?string
    {
        if (count($this->organization) == 0) {
            return null;
        }
        return $this->organization['value'];
    }

    /**
     * Sets Organization.
     *
     * @maps organization
     */
    public function setOrganization(?string $organization): void
    {
        $this->organization['value'] = $organization;
    }

    /**
     * Unsets Organization.
     */
    public function unsetOrganization(): void
    {
        $this->organization = [];
    }

    /**
     * Returns Email.
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * Sets Email.
     *
     * @maps email
     */
    public function setEmail(?string $email): void
    {
        $this->email = $email;
    }

    /**
     * Returns Vat Number.
     */
    public function getVatNumber(): ?string
    {
        if (count($this->vatNumber) == 0) {
            return null;
        }
        return $this->vatNumber['value'];
    }

    /**
     * Sets Vat Number.
     *
     * @maps vat_number
     */
    public function setVatNumber(?string $vatNumber): void
    {
        $this->vatNumber['value'] = $vatNumber;
    }

    /**
     * Unsets Vat Number.
     */
    public function unsetVatNumber(): void
    {
        $this->vatNumber = [];
    }

    /**
     * Returns Reference.
     */
    public function getReference(): ?string
    {
        if (count($this->reference) == 0) {
            return null;
        }
        return $this->reference['value'];
    }

    /**
     * Sets Reference.
     *
     * @maps reference
     */
    public function setReference(?string $reference): void
    {
        $this->reference['value'] = $reference;
    }

    /**
     * Unsets Reference.
     */
    public function unsetReference(): void
    {
        $this->reference = [];
    }

    /**
     * Converts the InvoiceCustomer object to a human-readable string representation.
     *
     * @return string The string representation of the InvoiceCustomer object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'InvoiceCustomer',
            [
                'chargifyId' => $this->getChargifyId(),
                'firstName' => $this->firstName,
                'lastName' => $this->lastName,
                'organization' => $this->getOrganization(),
                'email' => $this->email,
                'vatNumber' => $this->getVatNumber(),
                'reference' => $this->getReference(),
                'additionalProperties' => $this->additionalProperties
            ]
        );
    }

    private $additionalProperties = [];

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property.
     * @param mixed $value Value of property.
     */
    public function addAdditionalProperty(string $name, $value)
    {
        $this->additionalProperties[$name] = $value;
    }

    /**
     * Find an additional property by name in this model or false if property does not exist.
     *
     * @param string $name Name of property.
     *
     * @return mixed|false Value of the property.
     */
    public function findAdditionalProperty(string $name)
    {
        if (isset($this->additionalProperties[$name])) {
            return $this->additionalProperties[$name];
        }
        return false;
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        if (!empty($this->chargifyId)) {
            $json['chargify_id']  = $this->chargifyId['value'];
        }
        if (isset($this->firstName)) {
            $json['first_name']   = $this->firstName;
        }
        if (isset($this->lastName)) {
            $json['last_name']    = $this->lastName;
        }
        if (!empty($this->organization)) {
            $json['organization'] = $this->organization['value'];
        }
        if (isset($this->email)) {
            $json['email']        = $this->email;
        }
        if (!empty($this->vatNumber)) {
            $json['vat_number']   = $this->vatNumber['value'];
        }
        if (!empty($this->reference)) {
            $json['reference']    = $this->reference['value'];
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
