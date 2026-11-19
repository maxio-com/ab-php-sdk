
# Update Customer

## Structure

`UpdateCustomer`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `firstName` | `?string` | Optional | - | getFirstName(): ?string | setFirstName(?string firstName): void |
| `lastName` | `?string` | Optional | - | getLastName(): ?string | setLastName(?string lastName): void |
| `email` | `?string` | Optional | - | getEmail(): ?string | setEmail(?string email): void |
| `ccEmails` | `?string` | Optional | - | getCcEmails(): ?string | setCcEmails(?string ccEmails): void |
| `organization` | `?string` | Optional | - | getOrganization(): ?string | setOrganization(?string organization): void |
| `reference` | `?string` | Optional | - | getReference(): ?string | setReference(?string reference): void |
| `address` | `?string` | Optional | - | getAddress(): ?string | setAddress(?string address): void |
| `address2` | `?string` | Optional | - | getAddress2(): ?string | setAddress2(?string address2): void |
| `city` | `?string` | Optional | - | getCity(): ?string | setCity(?string city): void |
| `state` | `?string` | Optional | - | getState(): ?string | setState(?string state): void |
| `zip` | `?string` | Optional | - | getZip(): ?string | setZip(?string zip): void |
| `country` | `?string` | Optional | - | getCountry(): ?string | setCountry(?string country): void |
| `phone` | `?string` | Optional | - | getPhone(): ?string | setPhone(?string phone): void |
| `locale` | `?string` | Optional | Set a specific language on a customer record. | getLocale(): ?string | setLocale(?string locale): void |
| `vatNumber` | `?string` | Optional | - | getVatNumber(): ?string | setVatNumber(?string vatNumber): void |
| `vatCountry` | `?string` | Optional | The two-letter ISO 3166-1 country code that qualifies the customer's tax ID. Required when `entity_identifier_kind` is `vat_eu` or `national_tax`, and used to derive the kind when only the legacy `vat_number` is sent. | getVatCountry(): ?string | setVatCountry(?string vatCountry): void |
| `entityIdentifierKind` | [`?string(EntityIdentifierKind)`](../../doc/models/entity-identifier-kind.md) | Optional | The kind of tax or business identifier held by the customer:<br><br>- `vat_eu`: an EU VAT number. Requires `vat_country` to be an EU member state code or `GB`.<br>- `national_tax`: a national tax ID registered outside the EU. Requires `vat_country` to be one of `AL`, `AM`, `AR`, `AU`, `BR`, `CA`, `CH`, `DZ`, `IN`, `MX`, `NO`, `NZ`, or `ZA`.<br>- `company_reg`: a company registration number, such as a French SIREN. No `vat_country` is required.<br>- `gln`: a Global Location Number. The value must be 13 digits.<br>- `duns`: a D-U-N-S Number. The value must be 9 digits.<br>- `lei`: a Legal Entity Identifier. The value must be 20 characters: 18 letters or digits followed by 2 digits.<br><br>A customer holds one identifier at a time. Saving an identifier of a different kind replaces the existing one. | getEntityIdentifierKind(): ?string | setEntityIdentifierKind(?string entityIdentifierKind): void |
| `entityIdentifierValue` | `?string` | Optional | The customer's tax or business identifier, sent together with `entity_identifier_kind`. Advanced Billing trims surrounding whitespace and stores the value in uppercase. | getEntityIdentifierValue(): ?string | setEntityIdentifierValue(?string entityIdentifierValue): void |
| `taxExempt` | `?bool` | Optional | - | getTaxExempt(): ?bool | setTaxExempt(?bool taxExempt): void |
| `surcharging` | `?bool` | Optional | Whether surcharging is enabled for the customer. Only applied on sites where surcharging control is enabled. | getSurcharging(): ?bool | setSurcharging(?bool surcharging): void |
| `taxExemptReason` | `?string` | Optional | - | getTaxExemptReason(): ?string | setTaxExemptReason(?string taxExemptReason): void |
| `parentId` | `?int` | Optional | - | getParentId(): ?int | setParentId(?int parentId): void |
| `verified` | `?bool` | Optional | Is the customer verified to use ACH as a payment method. Available only on the Authorize.Net gateway. | getVerified(): ?bool | setVerified(?bool verified): void |
| `salesforceId` | `?string` | Optional | The Salesforce ID of the customer | getSalesforceId(): ?string | setSalesforceId(?string salesforceId): void |
| `brandingThemeId` | `?int` | Optional | The ID of the Branding Theme assigned to this customer as the customer's default Branding Theme. This customer-level Branding Theme is used when a subscription does not have its own subscription-level Branding Theme. Available only when Branding Themes are enabled for the site. | getBrandingThemeId(): ?int | setBrandingThemeId(?int brandingThemeId): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\UpdateCustomerBuilder;

$updateCustomer = UpdateCustomerBuilder::init()
    ->firstName('first_name2')
    ->lastName('last_name0')
    ->email('email4')
    ->ccEmails('cc_emails8')
    ->organization('organization6')
    ->build();
```

