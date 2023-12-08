<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class CustomerAttributes implements \JsonSerializable
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
     * @var array
     */
    private $address2 = [];

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
     * @var bool|null
     */
    private $verified;

    /**
     * @var bool|null
     */
    private $taxExempt;

    /**
     * @var string|null
     */
    private $vatNumber;

    /**
     * @var array<string,string>|null
     */
    private $metafields;

    /**
     * @var array
     */
    private $parentId = [];

    /**
     * Returns First Name.
     * The first name of the customer. Required when creating a customer via attributes.
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    /**
     * Sets First Name.
     * The first name of the customer. Required when creating a customer via attributes.
     *
     * @maps first_name
     */
    public function setFirstName(?string $firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * Returns Last Name.
     * The last name of the customer. Required when creating a customer via attributes.
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    /**
     * Sets Last Name.
     * The last name of the customer. Required when creating a customer via attributes.
     *
     * @maps last_name
     */
    public function setLastName(?string $lastName): void
    {
        $this->lastName = $lastName;
    }

    /**
     * Returns Email.
     * The email address of the customer. Required when creating a customer via attributes.
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * Sets Email.
     * The email address of the customer. Required when creating a customer via attributes.
     *
     * @maps email
     */
    public function setEmail(?string $email): void
    {
        $this->email = $email;
    }

    /**
     * Returns Cc Emails.
     * A list of emails that should be cc’d on all customer communications. Optional.
     */
    public function getCcEmails(): ?string
    {
        return $this->ccEmails;
    }

    /**
     * Sets Cc Emails.
     * A list of emails that should be cc’d on all customer communications. Optional.
     *
     * @maps cc_emails
     */
    public function setCcEmails(?string $ccEmails): void
    {
        $this->ccEmails = $ccEmails;
    }

    /**
     * Returns Organization.
     * The organization/company of the customer. Optional.
     */
    public function getOrganization(): ?string
    {
        return $this->organization;
    }

    /**
     * Sets Organization.
     * The organization/company of the customer. Optional.
     *
     * @maps organization
     */
    public function setOrganization(?string $organization): void
    {
        $this->organization = $organization;
    }

    /**
     * Returns Reference.
     * A customer “reference”, or unique identifier from your app, stored in Chargify. Can be used so that
     * you may reference your customer’s within Chargify using the same unique value you use in your
     * application. Optional.
     */
    public function getReference(): ?string
    {
        return $this->reference;
    }

    /**
     * Sets Reference.
     * A customer “reference”, or unique identifier from your app, stored in Chargify. Can be used so that
     * you may reference your customer’s within Chargify using the same unique value you use in your
     * application. Optional.
     *
     * @maps reference
     */
    public function setReference(?string $reference): void
    {
        $this->reference = $reference;
    }

    /**
     * Returns Address.
     * (Optional) The customer’s shipping street address (i.e. “123 Main St.”).
     */
    public function getAddress(): ?string
    {
        return $this->address;
    }

    /**
     * Sets Address.
     * (Optional) The customer’s shipping street address (i.e. “123 Main St.”).
     *
     * @maps address
     */
    public function setAddress(?string $address): void
    {
        $this->address = $address;
    }

    /**
     * Returns Address 2.
     * (Optional) Second line of the customer’s shipping address i.e. “Apt. 100”
     */
    public function getAddress2(): ?string
    {
        if (count($this->address2) == 0) {
            return null;
        }
        return $this->address2['value'];
    }

    /**
     * Sets Address 2.
     * (Optional) Second line of the customer’s shipping address i.e. “Apt. 100”
     *
     * @maps address_2
     */
    public function setAddress2(?string $address2): void
    {
        $this->address2['value'] = $address2;
    }

    /**
     * Unsets Address 2.
     * (Optional) Second line of the customer’s shipping address i.e. “Apt. 100”
     */
    public function unsetAddress2(): void
    {
        $this->address2 = [];
    }

    /**
     * Returns City.
     * (Optional) The customer’s shipping address city (i.e. “Boston”).
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    /**
     * Sets City.
     * (Optional) The customer’s shipping address city (i.e. “Boston”).
     *
     * @maps city
     */
    public function setCity(?string $city): void
    {
        $this->city = $city;
    }

    /**
     * Returns State.
     * (Optional) The customer’s shipping address state (i.e. “MA”). This must conform to the [ISO_3166-
     * 1](https://en.wikipedia.org/wiki/ISO_3166-1#Current_codes) in order to be valid for tax locale
     * purposes.
     */
    public function getState(): ?string
    {
        return $this->state;
    }

    /**
     * Sets State.
     * (Optional) The customer’s shipping address state (i.e. “MA”). This must conform to the [ISO_3166-
     * 1](https://en.wikipedia.org/wiki/ISO_3166-1#Current_codes) in order to be valid for tax locale
     * purposes.
     *
     * @maps state
     */
    public function setState(?string $state): void
    {
        $this->state = $state;
    }

    /**
     * Returns Zip.
     * (Optional) The customer’s shipping address zip code (i.e. “12345”).
     */
    public function getZip(): ?string
    {
        return $this->zip;
    }

    /**
     * Sets Zip.
     * (Optional) The customer’s shipping address zip code (i.e. “12345”).
     *
     * @maps zip
     */
    public function setZip(?string $zip): void
    {
        $this->zip = $zip;
    }

    /**
     * Returns Country.
     * (Optional) The customer shipping address country, required in [ISO_3166-1 alpha-2](https://en.
     * wikipedia.org/wiki/ISO_3166-1_alpha-2) format (i.e. “US”).
     */
    public function getCountry(): ?string
    {
        return $this->country;
    }

    /**
     * Sets Country.
     * (Optional) The customer shipping address country, required in [ISO_3166-1 alpha-2](https://en.
     * wikipedia.org/wiki/ISO_3166-1_alpha-2) format (i.e. “US”).
     *
     * @maps country
     */
    public function setCountry(?string $country): void
    {
        $this->country = $country;
    }

    /**
     * Returns Phone.
     * (Optional) The phone number of the customer.
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }

    /**
     * Sets Phone.
     * (Optional) The phone number of the customer.
     *
     * @maps phone
     */
    public function setPhone(?string $phone): void
    {
        $this->phone = $phone;
    }

    /**
     * Returns Verified.
     */
    public function getVerified(): ?bool
    {
        return $this->verified;
    }

    /**
     * Sets Verified.
     *
     * @maps verified
     */
    public function setVerified(?bool $verified): void
    {
        $this->verified = $verified;
    }

    /**
     * Returns Tax Exempt.
     * (Optional) The tax_exempt status of the customer. Acceptable values are true or 1 for true and false
     * or 0 for false.
     */
    public function getTaxExempt(): ?bool
    {
        return $this->taxExempt;
    }

    /**
     * Sets Tax Exempt.
     * (Optional) The tax_exempt status of the customer. Acceptable values are true or 1 for true and false
     * or 0 for false.
     *
     * @maps tax_exempt
     */
    public function setTaxExempt(?bool $taxExempt): void
    {
        $this->taxExempt = $taxExempt;
    }

    /**
     * Returns Vat Number.
     * (Optional) Supplying the VAT number allows EU customer’s to opt-out of the Value Added Tax assuming
     * the merchant address and customer billing address are not within the same EU country. It’s important
     * to omit the country code from the VAT number upon entry. Otherwise, taxes will be assessed upon the
     * purchase.
     */
    public function getVatNumber(): ?string
    {
        return $this->vatNumber;
    }

    /**
     * Sets Vat Number.
     * (Optional) Supplying the VAT number allows EU customer’s to opt-out of the Value Added Tax assuming
     * the merchant address and customer billing address are not within the same EU country. It’s important
     * to omit the country code from the VAT number upon entry. Otherwise, taxes will be assessed upon the
     * purchase.
     *
     * @maps vat_number
     */
    public function setVatNumber(?string $vatNumber): void
    {
        $this->vatNumber = $vatNumber;
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
     * Returns Parent Id.
     * The parent ID in Chargify if applicable. Parent is another Customer object.
     */
    public function getParentId(): ?int
    {
        if (count($this->parentId) == 0) {
            return null;
        }
        return $this->parentId['value'];
    }

    /**
     * Sets Parent Id.
     * The parent ID in Chargify if applicable. Parent is another Customer object.
     *
     * @maps parent_id
     */
    public function setParentId(?int $parentId): void
    {
        $this->parentId['value'] = $parentId;
    }

    /**
     * Unsets Parent Id.
     * The parent ID in Chargify if applicable. Parent is another Customer object.
     */
    public function unsetParentId(): void
    {
        $this->parentId = [];
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
            $json['first_name']   = $this->firstName;
        }
        if (isset($this->lastName)) {
            $json['last_name']    = $this->lastName;
        }
        if (isset($this->email)) {
            $json['email']        = $this->email;
        }
        if (isset($this->ccEmails)) {
            $json['cc_emails']    = $this->ccEmails;
        }
        if (isset($this->organization)) {
            $json['organization'] = $this->organization;
        }
        if (isset($this->reference)) {
            $json['reference']    = $this->reference;
        }
        if (isset($this->address)) {
            $json['address']      = $this->address;
        }
        if (!empty($this->address2)) {
            $json['address_2']    = $this->address2['value'];
        }
        if (isset($this->city)) {
            $json['city']         = $this->city;
        }
        if (isset($this->state)) {
            $json['state']        = $this->state;
        }
        if (isset($this->zip)) {
            $json['zip']          = $this->zip;
        }
        if (isset($this->country)) {
            $json['country']      = $this->country;
        }
        if (isset($this->phone)) {
            $json['phone']        = $this->phone;
        }
        if (isset($this->verified)) {
            $json['verified']     = $this->verified;
        }
        if (isset($this->taxExempt)) {
            $json['tax_exempt']   = $this->taxExempt;
        }
        if (isset($this->vatNumber)) {
            $json['vat_number']   = $this->vatNumber;
        }
        if (isset($this->metafields)) {
            $json['metafields']   = $this->metafields;
        }
        if (!empty($this->parentId)) {
            $json['parent_id']    = $this->parentId['value'];
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
