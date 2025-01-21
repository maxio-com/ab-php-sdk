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

class InvoicePayer implements \JsonSerializable
{
    /**
     * @var int|null
     */
    private $chargifyId;

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
     * Returns Chargify Id.
     */
    public function getChargifyId(): ?int
    {
        return $this->chargifyId;
    }

    /**
     * Sets Chargify Id.
     *
     * @maps chargify_id
     */
    public function setChargifyId(?int $chargifyId): void
    {
        $this->chargifyId = $chargifyId;
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
     * Converts the InvoicePayer object to a human-readable string representation.
     *
     * @return string The string representation of the InvoicePayer object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'InvoicePayer',
            [
                'chargifyId' => $this->chargifyId,
                'firstName' => $this->firstName,
                'lastName' => $this->lastName,
                'organization' => $this->getOrganization(),
                'email' => $this->email,
                'vatNumber' => $this->getVatNumber(),
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
        if (isset($this->chargifyId)) {
            $json['chargify_id']  = $this->chargifyId;
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
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
