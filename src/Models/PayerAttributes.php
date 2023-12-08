<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class PayerAttributes implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $firstName;

    /**
     * @var string|null
     */
    private $lastName;

    /**
     * @var string|null
     */
    private $email;

    /**
     * @var string|null
     */
    private $ccEmails;

    /**
     * @var string|null
     */
    private $organization;

    /**
     * @var string|null
     */
    private $reference;

    /**
     * @var string|null
     */
    private $address;

    /**
     * @var string|null
     */
    private $address2;

    /**
     * @var string|null
     */
    private $city;

    /**
     * @var string|null
     */
    private $state;

    /**
     * @var string|null
     */
    private $zip;

    /**
     * @var string|null
     */
    private $country;

    /**
     * @var string|null
     */
    private $phone;

    /**
     * @var string|null
     */
    private $locale;

    /**
     * @var string|null
     */
    private $vatNumber;

    /**
     * @var string|null
     */
    private $taxExempt;

    /**
     * @var string|null
     */
    private $taxExemptReason;

    /**
     * @var array<string,string>|null
     */
    private $metafields;

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
     * Returns Cc Emails.
     */
    public function getCcEmails(): ?string
    {
        return $this->ccEmails;
    }

    /**
     * Sets Cc Emails.
     *
     * @maps cc_emails
     */
    public function setCcEmails(?string $ccEmails): void
    {
        $this->ccEmails = $ccEmails;
    }

    /**
     * Returns Organization.
     */
    public function getOrganization(): ?string
    {
        return $this->organization;
    }

    /**
     * Sets Organization.
     *
     * @maps organization
     */
    public function setOrganization(?string $organization): void
    {
        $this->organization = $organization;
    }

    /**
     * Returns Reference.
     */
    public function getReference(): ?string
    {
        return $this->reference;
    }

    /**
     * Sets Reference.
     *
     * @maps reference
     */
    public function setReference(?string $reference): void
    {
        $this->reference = $reference;
    }

    /**
     * Returns Address.
     */
    public function getAddress(): ?string
    {
        return $this->address;
    }

    /**
     * Sets Address.
     *
     * @maps address
     */
    public function setAddress(?string $address): void
    {
        $this->address = $address;
    }

    /**
     * Returns Address 2.
     */
    public function getAddress2(): ?string
    {
        return $this->address2;
    }

    /**
     * Sets Address 2.
     *
     * @maps address_2
     */
    public function setAddress2(?string $address2): void
    {
        $this->address2 = $address2;
    }

    /**
     * Returns City.
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    /**
     * Sets City.
     *
     * @maps city
     */
    public function setCity(?string $city): void
    {
        $this->city = $city;
    }

    /**
     * Returns State.
     */
    public function getState(): ?string
    {
        return $this->state;
    }

    /**
     * Sets State.
     *
     * @maps state
     */
    public function setState(?string $state): void
    {
        $this->state = $state;
    }

    /**
     * Returns Zip.
     */
    public function getZip(): ?string
    {
        return $this->zip;
    }

    /**
     * Sets Zip.
     *
     * @maps zip
     */
    public function setZip(?string $zip): void
    {
        $this->zip = $zip;
    }

    /**
     * Returns Country.
     */
    public function getCountry(): ?string
    {
        return $this->country;
    }

    /**
     * Sets Country.
     *
     * @maps country
     */
    public function setCountry(?string $country): void
    {
        $this->country = $country;
    }

    /**
     * Returns Phone.
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }

    /**
     * Sets Phone.
     *
     * @maps phone
     */
    public function setPhone(?string $phone): void
    {
        $this->phone = $phone;
    }

    /**
     * Returns Locale.
     */
    public function getLocale(): ?string
    {
        return $this->locale;
    }

    /**
     * Sets Locale.
     *
     * @maps locale
     */
    public function setLocale(?string $locale): void
    {
        $this->locale = $locale;
    }

    /**
     * Returns Vat Number.
     */
    public function getVatNumber(): ?string
    {
        return $this->vatNumber;
    }

    /**
     * Sets Vat Number.
     *
     * @maps vat_number
     */
    public function setVatNumber(?string $vatNumber): void
    {
        $this->vatNumber = $vatNumber;
    }

    /**
     * Returns Tax Exempt.
     */
    public function getTaxExempt(): ?string
    {
        return $this->taxExempt;
    }

    /**
     * Sets Tax Exempt.
     *
     * @maps tax_exempt
     */
    public function setTaxExempt(?string $taxExempt): void
    {
        $this->taxExempt = $taxExempt;
    }

    /**
     * Returns Tax Exempt Reason.
     */
    public function getTaxExemptReason(): ?string
    {
        return $this->taxExemptReason;
    }

    /**
     * Sets Tax Exempt Reason.
     *
     * @maps tax_exempt_reason
     */
    public function setTaxExemptReason(?string $taxExemptReason): void
    {
        $this->taxExemptReason = $taxExemptReason;
    }

    /**
     * Returns Metafields.
     * (Optional) A set of key/value pairs representing custom fields and their values. Metafields will be
     * created “on-the-fly” in your site for a given key, if they have not been created yet.
     *
     * @return array<string,string>|null
     */
    public function getMetafields(): ?array
    {
        return $this->metafields;
    }

    /**
     * Sets Metafields.
     * (Optional) A set of key/value pairs representing custom fields and their values. Metafields will be
     * created “on-the-fly” in your site for a given key, if they have not been created yet.
     *
     * @maps metafields
     *
     * @param array<string,string>|null $metafields
     */
    public function setMetafields(?array $metafields): void
    {
        $this->metafields = $metafields;
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
        if (isset($this->firstName)) {
            $json['first_name']        = $this->firstName;
        }
        if (isset($this->lastName)) {
            $json['last_name']         = $this->lastName;
        }
        if (isset($this->email)) {
            $json['email']             = $this->email;
        }
        if (isset($this->ccEmails)) {
            $json['cc_emails']         = $this->ccEmails;
        }
        if (isset($this->organization)) {
            $json['organization']      = $this->organization;
        }
        if (isset($this->reference)) {
            $json['reference']         = $this->reference;
        }
        if (isset($this->address)) {
            $json['address']           = $this->address;
        }
        if (isset($this->address2)) {
            $json['address_2']         = $this->address2;
        }
        if (isset($this->city)) {
            $json['city']              = $this->city;
        }
        if (isset($this->state)) {
            $json['state']             = $this->state;
        }
        if (isset($this->zip)) {
            $json['zip']               = $this->zip;
        }
        if (isset($this->country)) {
            $json['country']           = $this->country;
        }
        if (isset($this->phone)) {
            $json['phone']             = $this->phone;
        }
        if (isset($this->locale)) {
            $json['locale']            = $this->locale;
        }
        if (isset($this->vatNumber)) {
            $json['vat_number']        = $this->vatNumber;
        }
        if (isset($this->taxExempt)) {
            $json['tax_exempt']        = $this->taxExempt;
        }
        if (isset($this->taxExemptReason)) {
            $json['tax_exempt_reason'] = $this->taxExemptReason;
        }
        if (isset($this->metafields)) {
            $json['metafields']        = $this->metafields;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
