<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class Customer implements \JsonSerializable
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
     * @var array
     */
    private $ccEmails = [];

    /**
     * @var array
     */
    private $organization = [];

    /**
     * @var array
     */
    private $reference = [];

    /**
     * @var int|null
     */
    private $id;

    /**
     * @var string|null
     */
    private $createdAt;

    /**
     * @var string|null
     */
    private $updatedAt;

    /**
     * @var array
     */
    private $address = [];

    /**
     * @var array
     */
    private $address2 = [];

    /**
     * @var array
     */
    private $city = [];

    /**
     * @var array
     */
    private $state = [];

    /**
     * @var array
     */
    private $stateName = [];

    /**
     * @var array
     */
    private $zip = [];

    /**
     * @var array
     */
    private $country = [];

    /**
     * @var array
     */
    private $countryName = [];

    /**
     * @var array
     */
    private $phone = [];

    /**
     * @var array
     */
    private $verified = [];

    /**
     * @var array
     */
    private $portalCustomerCreatedAt = [];

    /**
     * @var array
     */
    private $portalInviteLastSentAt = [];

    /**
     * @var array
     */
    private $portalInviteLastAcceptedAt = [];

    /**
     * @var bool|null
     */
    private $taxExempt;

    /**
     * @var array
     */
    private $vatNumber = [];

    /**
     * @var array
     */
    private $parentId = [];

    /**
     * @var array
     */
    private $locale = [];

    /**
     * @var array
     */
    private $defaultSubscriptionGroupUid = [];

    /**
     * Returns First Name.
     * The first name of the customer
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    /**
     * Sets First Name.
     * The first name of the customer
     *
     * @maps first_name
     */
    public function setFirstName(?string $firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * Returns Last Name.
     * The last name of the customer
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    /**
     * Sets Last Name.
     * The last name of the customer
     *
     * @maps last_name
     */
    public function setLastName(?string $lastName): void
    {
        $this->lastName = $lastName;
    }

    /**
     * Returns Email.
     * The email address of the customer
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * Sets Email.
     * The email address of the customer
     *
     * @maps email
     */
    public function setEmail(?string $email): void
    {
        $this->email = $email;
    }

    /**
     * Returns Cc Emails.
     * A comma-separated list of emails that should be cc’d on all customer communications (i.e.
     * “joe@example.com, sue@example.com”)
     */
    public function getCcEmails(): ?string
    {
        if (count($this->ccEmails) == 0) {
            return null;
        }
        return $this->ccEmails['value'];
    }

    /**
     * Sets Cc Emails.
     * A comma-separated list of emails that should be cc’d on all customer communications (i.e.
     * “joe@example.com, sue@example.com”)
     *
     * @maps cc_emails
     */
    public function setCcEmails(?string $ccEmails): void
    {
        $this->ccEmails['value'] = $ccEmails;
    }

    /**
     * Unsets Cc Emails.
     * A comma-separated list of emails that should be cc’d on all customer communications (i.e.
     * “joe@example.com, sue@example.com”)
     */
    public function unsetCcEmails(): void
    {
        $this->ccEmails = [];
    }

    /**
     * Returns Organization.
     * The organization of the customer
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
     * The organization of the customer
     *
     * @maps organization
     */
    public function setOrganization(?string $organization): void
    {
        $this->organization['value'] = $organization;
    }

    /**
     * Unsets Organization.
     * The organization of the customer
     */
    public function unsetOrganization(): void
    {
        $this->organization = [];
    }

    /**
     * Returns Reference.
     * The unique identifier used within your own application for this customer
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
     * The unique identifier used within your own application for this customer
     *
     * @maps reference
     */
    public function setReference(?string $reference): void
    {
        $this->reference['value'] = $reference;
    }

    /**
     * Unsets Reference.
     * The unique identifier used within your own application for this customer
     */
    public function unsetReference(): void
    {
        $this->reference = [];
    }

    /**
     * Returns Id.
     * The customer ID in Chargify
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Sets Id.
     * The customer ID in Chargify
     *
     * @maps id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Created At.
     * The timestamp in which the customer object was created in Chargify
     */
    public function getCreatedAt(): ?string
    {
        return $this->createdAt;
    }

    /**
     * Sets Created At.
     * The timestamp in which the customer object was created in Chargify
     *
     * @maps created_at
     */
    public function setCreatedAt(?string $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * Returns Updated At.
     * The timestamp in which the customer object was last edited
     */
    public function getUpdatedAt(): ?string
    {
        return $this->updatedAt;
    }

    /**
     * Sets Updated At.
     * The timestamp in which the customer object was last edited
     *
     * @maps updated_at
     */
    public function setUpdatedAt(?string $updatedAt): void
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * Returns Address.
     * The customer’s shipping street address (i.e. “123 Main St.”)
     */
    public function getAddress(): ?string
    {
        if (count($this->address) == 0) {
            return null;
        }
        return $this->address['value'];
    }

    /**
     * Sets Address.
     * The customer’s shipping street address (i.e. “123 Main St.”)
     *
     * @maps address
     */
    public function setAddress(?string $address): void
    {
        $this->address['value'] = $address;
    }

    /**
     * Unsets Address.
     * The customer’s shipping street address (i.e. “123 Main St.”)
     */
    public function unsetAddress(): void
    {
        $this->address = [];
    }

    /**
     * Returns Address 2.
     * Second line of the customer’s shipping address i.e. “Apt. 100”
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
     * Second line of the customer’s shipping address i.e. “Apt. 100”
     *
     * @maps address_2
     */
    public function setAddress2(?string $address2): void
    {
        $this->address2['value'] = $address2;
    }

    /**
     * Unsets Address 2.
     * Second line of the customer’s shipping address i.e. “Apt. 100”
     */
    public function unsetAddress2(): void
    {
        $this->address2 = [];
    }

    /**
     * Returns City.
     * The customer’s shipping address city (i.e. “Boston”)
     */
    public function getCity(): ?string
    {
        if (count($this->city) == 0) {
            return null;
        }
        return $this->city['value'];
    }

    /**
     * Sets City.
     * The customer’s shipping address city (i.e. “Boston”)
     *
     * @maps city
     */
    public function setCity(?string $city): void
    {
        $this->city['value'] = $city;
    }

    /**
     * Unsets City.
     * The customer’s shipping address city (i.e. “Boston”)
     */
    public function unsetCity(): void
    {
        $this->city = [];
    }

    /**
     * Returns State.
     * The customer’s shipping address state (i.e. “MA”)
     */
    public function getState(): ?string
    {
        if (count($this->state) == 0) {
            return null;
        }
        return $this->state['value'];
    }

    /**
     * Sets State.
     * The customer’s shipping address state (i.e. “MA”)
     *
     * @maps state
     */
    public function setState(?string $state): void
    {
        $this->state['value'] = $state;
    }

    /**
     * Unsets State.
     * The customer’s shipping address state (i.e. “MA”)
     */
    public function unsetState(): void
    {
        $this->state = [];
    }

    /**
     * Returns State Name.
     * The customer's full name of state
     */
    public function getStateName(): ?string
    {
        if (count($this->stateName) == 0) {
            return null;
        }
        return $this->stateName['value'];
    }

    /**
     * Sets State Name.
     * The customer's full name of state
     *
     * @maps state_name
     */
    public function setStateName(?string $stateName): void
    {
        $this->stateName['value'] = $stateName;
    }

    /**
     * Unsets State Name.
     * The customer's full name of state
     */
    public function unsetStateName(): void
    {
        $this->stateName = [];
    }

    /**
     * Returns Zip.
     * The customer’s shipping address zip code (i.e. “12345”)
     */
    public function getZip(): ?string
    {
        if (count($this->zip) == 0) {
            return null;
        }
        return $this->zip['value'];
    }

    /**
     * Sets Zip.
     * The customer’s shipping address zip code (i.e. “12345”)
     *
     * @maps zip
     */
    public function setZip(?string $zip): void
    {
        $this->zip['value'] = $zip;
    }

    /**
     * Unsets Zip.
     * The customer’s shipping address zip code (i.e. “12345”)
     */
    public function unsetZip(): void
    {
        $this->zip = [];
    }

    /**
     * Returns Country.
     * The customer shipping address country
     */
    public function getCountry(): ?string
    {
        if (count($this->country) == 0) {
            return null;
        }
        return $this->country['value'];
    }

    /**
     * Sets Country.
     * The customer shipping address country
     *
     * @maps country
     */
    public function setCountry(?string $country): void
    {
        $this->country['value'] = $country;
    }

    /**
     * Unsets Country.
     * The customer shipping address country
     */
    public function unsetCountry(): void
    {
        $this->country = [];
    }

    /**
     * Returns Country Name.
     * The customer's full name of country
     */
    public function getCountryName(): ?string
    {
        if (count($this->countryName) == 0) {
            return null;
        }
        return $this->countryName['value'];
    }

    /**
     * Sets Country Name.
     * The customer's full name of country
     *
     * @maps country_name
     */
    public function setCountryName(?string $countryName): void
    {
        $this->countryName['value'] = $countryName;
    }

    /**
     * Unsets Country Name.
     * The customer's full name of country
     */
    public function unsetCountryName(): void
    {
        $this->countryName = [];
    }

    /**
     * Returns Phone.
     * The phone number of the customer
     */
    public function getPhone(): ?string
    {
        if (count($this->phone) == 0) {
            return null;
        }
        return $this->phone['value'];
    }

    /**
     * Sets Phone.
     * The phone number of the customer
     *
     * @maps phone
     */
    public function setPhone(?string $phone): void
    {
        $this->phone['value'] = $phone;
    }

    /**
     * Unsets Phone.
     * The phone number of the customer
     */
    public function unsetPhone(): void
    {
        $this->phone = [];
    }

    /**
     * Returns Verified.
     * Is the customer verified to use ACH as a payment method. Available only on Authorize.Net gateway
     */
    public function getVerified(): ?bool
    {
        if (count($this->verified) == 0) {
            return null;
        }
        return $this->verified['value'];
    }

    /**
     * Sets Verified.
     * Is the customer verified to use ACH as a payment method. Available only on Authorize.Net gateway
     *
     * @maps verified
     */
    public function setVerified(?bool $verified): void
    {
        $this->verified['value'] = $verified;
    }

    /**
     * Unsets Verified.
     * Is the customer verified to use ACH as a payment method. Available only on Authorize.Net gateway
     */
    public function unsetVerified(): void
    {
        $this->verified = [];
    }

    /**
     * Returns Portal Customer Created At.
     * The timestamp of when the Billing Portal entry was created at for the customer
     */
    public function getPortalCustomerCreatedAt(): ?string
    {
        if (count($this->portalCustomerCreatedAt) == 0) {
            return null;
        }
        return $this->portalCustomerCreatedAt['value'];
    }

    /**
     * Sets Portal Customer Created At.
     * The timestamp of when the Billing Portal entry was created at for the customer
     *
     * @maps portal_customer_created_at
     */
    public function setPortalCustomerCreatedAt(?string $portalCustomerCreatedAt): void
    {
        $this->portalCustomerCreatedAt['value'] = $portalCustomerCreatedAt;
    }

    /**
     * Unsets Portal Customer Created At.
     * The timestamp of when the Billing Portal entry was created at for the customer
     */
    public function unsetPortalCustomerCreatedAt(): void
    {
        $this->portalCustomerCreatedAt = [];
    }

    /**
     * Returns Portal Invite Last Sent At.
     * The timestamp of when the Billing Portal invite was last sent at
     */
    public function getPortalInviteLastSentAt(): ?string
    {
        if (count($this->portalInviteLastSentAt) == 0) {
            return null;
        }
        return $this->portalInviteLastSentAt['value'];
    }

    /**
     * Sets Portal Invite Last Sent At.
     * The timestamp of when the Billing Portal invite was last sent at
     *
     * @maps portal_invite_last_sent_at
     */
    public function setPortalInviteLastSentAt(?string $portalInviteLastSentAt): void
    {
        $this->portalInviteLastSentAt['value'] = $portalInviteLastSentAt;
    }

    /**
     * Unsets Portal Invite Last Sent At.
     * The timestamp of when the Billing Portal invite was last sent at
     */
    public function unsetPortalInviteLastSentAt(): void
    {
        $this->portalInviteLastSentAt = [];
    }

    /**
     * Returns Portal Invite Last Accepted At.
     * The timestamp of when the Billing Portal invite was last accepted
     */
    public function getPortalInviteLastAcceptedAt(): ?string
    {
        if (count($this->portalInviteLastAcceptedAt) == 0) {
            return null;
        }
        return $this->portalInviteLastAcceptedAt['value'];
    }

    /**
     * Sets Portal Invite Last Accepted At.
     * The timestamp of when the Billing Portal invite was last accepted
     *
     * @maps portal_invite_last_accepted_at
     */
    public function setPortalInviteLastAcceptedAt(?string $portalInviteLastAcceptedAt): void
    {
        $this->portalInviteLastAcceptedAt['value'] = $portalInviteLastAcceptedAt;
    }

    /**
     * Unsets Portal Invite Last Accepted At.
     * The timestamp of when the Billing Portal invite was last accepted
     */
    public function unsetPortalInviteLastAcceptedAt(): void
    {
        $this->portalInviteLastAcceptedAt = [];
    }

    /**
     * Returns Tax Exempt.
     * The tax exempt status for the customer. Acceptable values are true or 1 for true and false or 0 for
     * false.
     */
    public function getTaxExempt(): ?bool
    {
        return $this->taxExempt;
    }

    /**
     * Sets Tax Exempt.
     * The tax exempt status for the customer. Acceptable values are true or 1 for true and false or 0 for
     * false.
     *
     * @maps tax_exempt
     */
    public function setTaxExempt(?bool $taxExempt): void
    {
        $this->taxExempt = $taxExempt;
    }

    /**
     * Returns Vat Number.
     * The VAT business identification number for the customer. This number is used to determine VAT tax
     * opt out rules. It is not validated when added or updated on a customer record. Instead, it is
     * validated via VIES before calculating taxes. Only valid business identification numbers will allow
     * for VAT opt out.
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
     * The VAT business identification number for the customer. This number is used to determine VAT tax
     * opt out rules. It is not validated when added or updated on a customer record. Instead, it is
     * validated via VIES before calculating taxes. Only valid business identification numbers will allow
     * for VAT opt out.
     *
     * @maps vat_number
     */
    public function setVatNumber(?string $vatNumber): void
    {
        $this->vatNumber['value'] = $vatNumber;
    }

    /**
     * Unsets Vat Number.
     * The VAT business identification number for the customer. This number is used to determine VAT tax
     * opt out rules. It is not validated when added or updated on a customer record. Instead, it is
     * validated via VIES before calculating taxes. Only valid business identification numbers will allow
     * for VAT opt out.
     */
    public function unsetVatNumber(): void
    {
        $this->vatNumber = [];
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
     * Returns Locale.
     * The locale for the customer to identify language-region
     */
    public function getLocale(): ?string
    {
        if (count($this->locale) == 0) {
            return null;
        }
        return $this->locale['value'];
    }

    /**
     * Sets Locale.
     * The locale for the customer to identify language-region
     *
     * @maps locale
     */
    public function setLocale(?string $locale): void
    {
        $this->locale['value'] = $locale;
    }

    /**
     * Unsets Locale.
     * The locale for the customer to identify language-region
     */
    public function unsetLocale(): void
    {
        $this->locale = [];
    }

    /**
     * Returns Default Subscription Group Uid.
     */
    public function getDefaultSubscriptionGroupUid(): ?string
    {
        if (count($this->defaultSubscriptionGroupUid) == 0) {
            return null;
        }
        return $this->defaultSubscriptionGroupUid['value'];
    }

    /**
     * Sets Default Subscription Group Uid.
     *
     * @maps default_subscription_group_uid
     */
    public function setDefaultSubscriptionGroupUid(?string $defaultSubscriptionGroupUid): void
    {
        $this->defaultSubscriptionGroupUid['value'] = $defaultSubscriptionGroupUid;
    }

    /**
     * Unsets Default Subscription Group Uid.
     */
    public function unsetDefaultSubscriptionGroupUid(): void
    {
        $this->defaultSubscriptionGroupUid = [];
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
            $json['first_name']                     = $this->firstName;
        }
        if (isset($this->lastName)) {
            $json['last_name']                      = $this->lastName;
        }
        if (isset($this->email)) {
            $json['email']                          = $this->email;
        }
        if (!empty($this->ccEmails)) {
            $json['cc_emails']                      = $this->ccEmails['value'];
        }
        if (!empty($this->organization)) {
            $json['organization']                   = $this->organization['value'];
        }
        if (!empty($this->reference)) {
            $json['reference']                      = $this->reference['value'];
        }
        if (isset($this->id)) {
            $json['id']                             = $this->id;
        }
        if (isset($this->createdAt)) {
            $json['created_at']                     = $this->createdAt;
        }
        if (isset($this->updatedAt)) {
            $json['updated_at']                     = $this->updatedAt;
        }
        if (!empty($this->address)) {
            $json['address']                        = $this->address['value'];
        }
        if (!empty($this->address2)) {
            $json['address_2']                      = $this->address2['value'];
        }
        if (!empty($this->city)) {
            $json['city']                           = $this->city['value'];
        }
        if (!empty($this->state)) {
            $json['state']                          = $this->state['value'];
        }
        if (!empty($this->stateName)) {
            $json['state_name']                     = $this->stateName['value'];
        }
        if (!empty($this->zip)) {
            $json['zip']                            = $this->zip['value'];
        }
        if (!empty($this->country)) {
            $json['country']                        = $this->country['value'];
        }
        if (!empty($this->countryName)) {
            $json['country_name']                   = $this->countryName['value'];
        }
        if (!empty($this->phone)) {
            $json['phone']                          = $this->phone['value'];
        }
        if (!empty($this->verified)) {
            $json['verified']                       = $this->verified['value'];
        }
        if (!empty($this->portalCustomerCreatedAt)) {
            $json['portal_customer_created_at']     = $this->portalCustomerCreatedAt['value'];
        }
        if (!empty($this->portalInviteLastSentAt)) {
            $json['portal_invite_last_sent_at']     = $this->portalInviteLastSentAt['value'];
        }
        if (!empty($this->portalInviteLastAcceptedAt)) {
            $json['portal_invite_last_accepted_at'] = $this->portalInviteLastAcceptedAt['value'];
        }
        if (isset($this->taxExempt)) {
            $json['tax_exempt']                     = $this->taxExempt;
        }
        if (!empty($this->vatNumber)) {
            $json['vat_number']                     = $this->vatNumber['value'];
        }
        if (!empty($this->parentId)) {
            $json['parent_id']                      = $this->parentId['value'];
        }
        if (!empty($this->locale)) {
            $json['locale']                         = $this->locale['value'];
        }
        if (!empty($this->defaultSubscriptionGroupUid)) {
            $json['default_subscription_group_uid'] = $this->defaultSubscriptionGroupUid['value'];
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
