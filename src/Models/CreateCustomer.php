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

class CreateCustomer implements \JsonSerializable
{
    /**
     * @var string
     */
    private $firstName;

    /**
     * @var string
     */
    private $lastName;

    /**
     * @var string
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
    private $vatCountry;

    /**
     * @var string|null
     */
    private $entityIdentifierKind;

    /**
     * @var string|null
     */
    private $entityIdentifierValue;

    /**
     * @var bool|null
     */
    private $taxExempt;

    /**
     * @var bool|null
     */
    private $surcharging;

    /**
     * @var string|null
     */
    private $taxExemptReason;

    /**
     * @var array
     */
    private $parentId = [];

    /**
     * @var array
     */
    private $salesforceId = [];

    /**
     * @var array
     */
    private $brandingThemeId = [];

    /**
     * @param string $firstName
     * @param string $lastName
     * @param string $email
     */
    public function __construct(string $firstName, string $lastName, string $email)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
    }

    /**
     * Returns First Name.
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * Sets First Name.
     *
     * @required
     * @maps first_name
     */
    public function setFirstName(string $firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * Returns Last Name.
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * Sets Last Name.
     *
     * @required
     * @maps last_name
     */
    public function setLastName(string $lastName): void
    {
        $this->lastName = $lastName;
    }

    /**
     * Returns Email.
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * Sets Email.
     *
     * @required
     * @maps email
     */
    public function setEmail(string $email): void
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
     * Set a specific language on a customer record.
     */
    public function getLocale(): ?string
    {
        return $this->locale;
    }

    /**
     * Sets Locale.
     * Set a specific language on a customer record.
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
     * Returns Vat Country.
     * The two-letter ISO 3166-1 country code that qualifies the customer's tax ID. Required when
     * `entity_identifier_kind` is `vat_eu` or `national_tax`, and used to derive the kind when only the
     * legacy `vat_number` is sent.
     */
    public function getVatCountry(): ?string
    {
        return $this->vatCountry;
    }

    /**
     * Sets Vat Country.
     * The two-letter ISO 3166-1 country code that qualifies the customer's tax ID. Required when
     * `entity_identifier_kind` is `vat_eu` or `national_tax`, and used to derive the kind when only the
     * legacy `vat_number` is sent.
     *
     * @maps vat_country
     */
    public function setVatCountry(?string $vatCountry): void
    {
        $this->vatCountry = $vatCountry;
    }

    /**
     * Returns Entity Identifier Kind.
     * The kind of tax or business identifier held by the customer:
     * - `vat_eu`: an EU VAT number. Requires `vat_country` to be an EU member state code or `GB`.
     * - `national_tax`: a national tax ID registered outside the EU. Requires `vat_country` to be one of
     * `AL`, `AM`, `AR`, `AU`, `BR`, `CA`, `CH`, `DZ`, `IN`, `MX`, `NO`, `NZ`, or `ZA`.
     * - `company_reg`: a company registration number, such as a French SIREN. No `vat_country` is required.
     * - `gln`: a Global Location Number. The value must be 13 digits.
     * - `duns`: a D-U-N-S Number. The value must be 9 digits.
     * - `lei`: a Legal Entity Identifier. The value must be 20 characters: 18 letters or digits followed
     * by 2 digits.
     *
     * A customer holds one identifier at a time. Saving an identifier of a different kind replaces the
     * existing one.
     */
    public function getEntityIdentifierKind(): ?string
    {
        return $this->entityIdentifierKind;
    }

    /**
     * Sets Entity Identifier Kind.
     * The kind of tax or business identifier held by the customer:
     * - `vat_eu`: an EU VAT number. Requires `vat_country` to be an EU member state code or `GB`.
     * - `national_tax`: a national tax ID registered outside the EU. Requires `vat_country` to be one of
     * `AL`, `AM`, `AR`, `AU`, `BR`, `CA`, `CH`, `DZ`, `IN`, `MX`, `NO`, `NZ`, or `ZA`.
     * - `company_reg`: a company registration number, such as a French SIREN. No `vat_country` is required.
     * - `gln`: a Global Location Number. The value must be 13 digits.
     * - `duns`: a D-U-N-S Number. The value must be 9 digits.
     * - `lei`: a Legal Entity Identifier. The value must be 20 characters: 18 letters or digits followed
     * by 2 digits.
     *
     * A customer holds one identifier at a time. Saving an identifier of a different kind replaces the
     * existing one.
     *
     * @maps entity_identifier_kind
     * @factory \AdvancedBillingLib\Models\EntityIdentifierKind::checkValue
     */
    public function setEntityIdentifierKind(?string $entityIdentifierKind): void
    {
        $this->entityIdentifierKind = $entityIdentifierKind;
    }

    /**
     * Returns Entity Identifier Value.
     * The customer's tax or business identifier, sent together with `entity_identifier_kind`. Advanced
     * Billing trims surrounding whitespace and stores the value in uppercase.
     */
    public function getEntityIdentifierValue(): ?string
    {
        return $this->entityIdentifierValue;
    }

    /**
     * Sets Entity Identifier Value.
     * The customer's tax or business identifier, sent together with `entity_identifier_kind`. Advanced
     * Billing trims surrounding whitespace and stores the value in uppercase.
     *
     * @maps entity_identifier_value
     */
    public function setEntityIdentifierValue(?string $entityIdentifierValue): void
    {
        $this->entityIdentifierValue = $entityIdentifierValue;
    }

    /**
     * Returns Tax Exempt.
     */
    public function getTaxExempt(): ?bool
    {
        return $this->taxExempt;
    }

    /**
     * Sets Tax Exempt.
     *
     * @maps tax_exempt
     */
    public function setTaxExempt(?bool $taxExempt): void
    {
        $this->taxExempt = $taxExempt;
    }

    /**
     * Returns Surcharging.
     * Whether surcharging is enabled for the customer. Defaults to `true` when omitted. Only applied on
     * sites where surcharging control is enabled.
     */
    public function getSurcharging(): ?bool
    {
        return $this->surcharging;
    }

    /**
     * Sets Surcharging.
     * Whether surcharging is enabled for the customer. Defaults to `true` when omitted. Only applied on
     * sites where surcharging control is enabled.
     *
     * @maps surcharging
     */
    public function setSurcharging(?bool $surcharging): void
    {
        $this->surcharging = $surcharging;
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
     * Returns Salesforce Id.
     * The Salesforce ID of the customer
     */
    public function getSalesforceId(): ?string
    {
        if (count($this->salesforceId) == 0) {
            return null;
        }
        return $this->salesforceId['value'];
    }

    /**
     * Sets Salesforce Id.
     * The Salesforce ID of the customer
     *
     * @maps salesforce_id
     */
    public function setSalesforceId(?string $salesforceId): void
    {
        $this->salesforceId['value'] = $salesforceId;
    }

    /**
     * Unsets Salesforce Id.
     * The Salesforce ID of the customer
     */
    public function unsetSalesforceId(): void
    {
        $this->salesforceId = [];
    }

    /**
     * Returns Branding Theme Id.
     * The ID of the Branding Theme assigned to this customer as the customer's default Branding Theme.
     * This customer-level Branding Theme is used when a subscription does not have its own subscription-
     * level Branding Theme. Available only when Branding Themes are enabled for the site.
     */
    public function getBrandingThemeId(): ?int
    {
        if (count($this->brandingThemeId) == 0) {
            return null;
        }
        return $this->brandingThemeId['value'];
    }

    /**
     * Sets Branding Theme Id.
     * The ID of the Branding Theme assigned to this customer as the customer's default Branding Theme.
     * This customer-level Branding Theme is used when a subscription does not have its own subscription-
     * level Branding Theme. Available only when Branding Themes are enabled for the site.
     *
     * @maps branding_theme_id
     */
    public function setBrandingThemeId(?int $brandingThemeId): void
    {
        $this->brandingThemeId['value'] = $brandingThemeId;
    }

    /**
     * Unsets Branding Theme Id.
     * The ID of the Branding Theme assigned to this customer as the customer's default Branding Theme.
     * This customer-level Branding Theme is used when a subscription does not have its own subscription-
     * level Branding Theme. Available only when Branding Themes are enabled for the site.
     */
    public function unsetBrandingThemeId(): void
    {
        $this->brandingThemeId = [];
    }

    /**
     * Converts the CreateCustomer object to a human-readable string representation.
     *
     * @return string The string representation of the CreateCustomer object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'CreateCustomer',
            [
                'firstName' => $this->firstName,
                'lastName' => $this->lastName,
                'email' => $this->email,
                'ccEmails' => $this->ccEmails,
                'organization' => $this->organization,
                'reference' => $this->reference,
                'address' => $this->address,
                'address2' => $this->address2,
                'city' => $this->city,
                'state' => $this->state,
                'zip' => $this->zip,
                'country' => $this->country,
                'phone' => $this->phone,
                'locale' => $this->locale,
                'vatNumber' => $this->vatNumber,
                'vatCountry' => $this->vatCountry,
                'entityIdentifierKind' => $this->entityIdentifierKind,
                'entityIdentifierValue' => $this->entityIdentifierValue,
                'taxExempt' => $this->taxExempt,
                'surcharging' => $this->surcharging,
                'taxExemptReason' => $this->taxExemptReason,
                'parentId' => $this->getParentId(),
                'salesforceId' => $this->getSalesforceId(),
                'brandingThemeId' => $this->getBrandingThemeId(),
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
        $json['first_name']                  = $this->firstName;
        $json['last_name']                   = $this->lastName;
        $json['email']                       = $this->email;
        if (isset($this->ccEmails)) {
            $json['cc_emails']               = $this->ccEmails;
        }
        if (isset($this->organization)) {
            $json['organization']            = $this->organization;
        }
        if (isset($this->reference)) {
            $json['reference']               = $this->reference;
        }
        if (isset($this->address)) {
            $json['address']                 = $this->address;
        }
        if (isset($this->address2)) {
            $json['address_2']               = $this->address2;
        }
        if (isset($this->city)) {
            $json['city']                    = $this->city;
        }
        if (isset($this->state)) {
            $json['state']                   = $this->state;
        }
        if (isset($this->zip)) {
            $json['zip']                     = $this->zip;
        }
        if (isset($this->country)) {
            $json['country']                 = $this->country;
        }
        if (isset($this->phone)) {
            $json['phone']                   = $this->phone;
        }
        if (isset($this->locale)) {
            $json['locale']                  = $this->locale;
        }
        if (isset($this->vatNumber)) {
            $json['vat_number']              = $this->vatNumber;
        }
        if (isset($this->vatCountry)) {
            $json['vat_country']             = $this->vatCountry;
        }
        if (isset($this->entityIdentifierKind)) {
            $json['entity_identifier_kind']  = EntityIdentifierKind::checkValue($this->entityIdentifierKind);
        }
        if (isset($this->entityIdentifierValue)) {
            $json['entity_identifier_value'] = $this->entityIdentifierValue;
        }
        if (isset($this->taxExempt)) {
            $json['tax_exempt']              = $this->taxExempt;
        }
        if (isset($this->surcharging)) {
            $json['surcharging']             = $this->surcharging;
        }
        if (isset($this->taxExemptReason)) {
            $json['tax_exempt_reason']       = $this->taxExemptReason;
        }
        if (!empty($this->parentId)) {
            $json['parent_id']               = $this->parentId['value'];
        }
        if (!empty($this->salesforceId)) {
            $json['salesforce_id']           = $this->salesforceId['value'];
        }
        if (!empty($this->brandingThemeId)) {
            $json['branding_theme_id']       = $this->brandingThemeId['value'];
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
