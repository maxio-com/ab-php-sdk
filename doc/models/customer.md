
# Customer

## Structure

`Customer`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `firstName` | `?string` | Optional | The first name of the customer | getFirstName(): ?string | setFirstName(?string firstName): void |
| `lastName` | `?string` | Optional | The last name of the customer | getLastName(): ?string | setLastName(?string lastName): void |
| `email` | `?string` | Optional | The email address of the customer | getEmail(): ?string | setEmail(?string email): void |
| `ccEmails` | `?string` | Optional | “A comma-separated list of emails that should be cc’d on all customer communications (e.g., “joe@example.com, sue@example.com”)” | getCcEmails(): ?string | setCcEmails(?string ccEmails): void |
| `organization` | `?string` | Optional | The organization of the customer. If no value, `null` or empty string is provided, `organization` will be populated with the customer's first and last name, separated with a space. | getOrganization(): ?string | setOrganization(?string organization): void |
| `reference` | `?string` | Optional | The unique identifier used within your own application for this customer | getReference(): ?string | setReference(?string reference): void |
| `id` | `?int` | Optional | The customer ID in Chargify | getId(): ?int | setId(?int id): void |
| `createdAt` | `?DateTime` | Optional | The timestamp in which the customer object was created in Chargify | getCreatedAt(): ?\DateTime | setCreatedAt(?\DateTime createdAt): void |
| `updatedAt` | `?DateTime` | Optional | The timestamp in which the customer object was last edited | getUpdatedAt(): ?\DateTime | setUpdatedAt(?\DateTime updatedAt): void |
| `address` | `?string` | Optional | The customer’s shipping street address (e.g., “123 Main St.”) | getAddress(): ?string | setAddress(?string address): void |
| `address2` | `?string` | Optional | Second line of the customer’s shipping address e.g., “Apt. 100” | getAddress2(): ?string | setAddress2(?string address2): void |
| `city` | `?string` | Optional | The customer’s shipping address city (e.g., “Boston”) | getCity(): ?string | setCity(?string city): void |
| `state` | `?string` | Optional | The customer’s shipping address state (e.g., “MA”) | getState(): ?string | setState(?string state): void |
| `stateName` | `?string` | Optional | The customer's full name of state | getStateName(): ?string | setStateName(?string stateName): void |
| `zip` | `?string` | Optional | The customer’s shipping address zip code (e.g., “12345”) | getZip(): ?string | setZip(?string zip): void |
| `country` | `?string` | Optional | The customer shipping address country | getCountry(): ?string | setCountry(?string country): void |
| `countryName` | `?string` | Optional | The customer's full name of country | getCountryName(): ?string | setCountryName(?string countryName): void |
| `phone` | `?string` | Optional | The phone number of the customer | getPhone(): ?string | setPhone(?string phone): void |
| `verified` | `?bool` | Optional | Is the customer verified to use ACH as a payment method. | getVerified(): ?bool | setVerified(?bool verified): void |
| `portalCustomerCreatedAt` | `?DateTime` | Optional | The timestamp of when the Billing Portal entry was created at for the customer | getPortalCustomerCreatedAt(): ?\DateTime | setPortalCustomerCreatedAt(?\DateTime portalCustomerCreatedAt): void |
| `portalInviteLastSentAt` | `?DateTime` | Optional | The timestamp of when the Billing Portal invite was last sent at | getPortalInviteLastSentAt(): ?\DateTime | setPortalInviteLastSentAt(?\DateTime portalInviteLastSentAt): void |
| `portalInviteLastAcceptedAt` | `?DateTime` | Optional | The timestamp of when the Billing Portal invite was last accepted | getPortalInviteLastAcceptedAt(): ?\DateTime | setPortalInviteLastAcceptedAt(?\DateTime portalInviteLastAcceptedAt): void |
| `taxExempt` | `?bool` | Optional | The tax exempt status for the customer. Acceptable values are true or 1 for true and false or 0 for false. | getTaxExempt(): ?bool | setTaxExempt(?bool taxExempt): void |
| `surcharging` | `?bool` | Optional | Whether surcharging is enabled for the customer. Only included on sites where surcharging control is enabled. | getSurcharging(): ?bool | setSurcharging(?bool surcharging): void |
| `vatNumber` | `?string` | Optional | The VAT business identification number for the customer. This number is used to determine VAT tax opt out rules. It is not validated when added or updated on a customer record. Instead, it is validated via VIES before calculating taxes. Only valid business identification numbers will allow for VAT opt out. | getVatNumber(): ?string | setVatNumber(?string vatNumber): void |
| `parentId` | `?int` | Optional | The parent ID in Chargify if applicable. Parent is another Customer object. | getParentId(): ?int | setParentId(?int parentId): void |
| `locale` | `?string` | Optional | The locale for the customer to identify language-region | getLocale(): ?string | setLocale(?string locale): void |
| `defaultSubscriptionGroupUid` | `?string` | Optional | - | getDefaultSubscriptionGroupUid(): ?string | setDefaultSubscriptionGroupUid(?string defaultSubscriptionGroupUid): void |
| `salesforceId` | `?string` | Optional | The Salesforce ID for the customer | getSalesforceId(): ?string | setSalesforceId(?string salesforceId): void |
| `taxExemptReason` | `?string` | Optional | The Tax Exemption Reason Code for the customer | getTaxExemptReason(): ?string | setTaxExemptReason(?string taxExemptReason): void |
| `defaultAutoRenewalProfileId` | `?int` | Optional | The default auto-renewal profile ID for the customer | getDefaultAutoRenewalProfileId(): ?int | setDefaultAutoRenewalProfileId(?int defaultAutoRenewalProfileId): void |
| `maxioid` | `?string` | Optional | The Maxio-generated unique identifier for the customer. | getMaxioid(): ?string | setMaxioid(?string maxioid): void |
| `brandingThemeId` | `?int` | Optional | The ID of the Branding Theme assigned to this customer as the customer's default Branding Theme. This customer-level Branding Theme is used when a subscription does not have its own subscription-level Branding Theme.  Available only when Branding Themes are enabled for the site. | getBrandingThemeId(): ?int | setBrandingThemeId(?int brandingThemeId): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\CustomerBuilder;

$customer = CustomerBuilder::init()
    ->firstName('first_name0')
    ->lastName('last_name8')
    ->email('email6')
    ->ccEmails('cc_emails0')
    ->organization('organization6')
    ->build();
```

