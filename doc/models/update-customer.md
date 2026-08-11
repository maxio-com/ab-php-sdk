
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

