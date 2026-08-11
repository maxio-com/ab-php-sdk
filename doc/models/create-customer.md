
# Create Customer

## Structure

`CreateCustomer`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `firstName` | `string` | Required | - | getFirstName(): string | setFirstName(string firstName): void |
| `lastName` | `string` | Required | - | getLastName(): string | setLastName(string lastName): void |
| `email` | `string` | Required | - | getEmail(): string | setEmail(string email): void |
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
| `surcharging` | `?bool` | Optional | Whether surcharging is enabled for the customer. Defaults to `true` when omitted. Only applied on sites where surcharging control is enabled. | getSurcharging(): ?bool | setSurcharging(?bool surcharging): void |
| `taxExemptReason` | `?string` | Optional | - | getTaxExemptReason(): ?string | setTaxExemptReason(?string taxExemptReason): void |
| `parentId` | `?int` | Optional | The parent ID in Chargify if applicable. Parent is another Customer object. | getParentId(): ?int | setParentId(?int parentId): void |
| `salesforceId` | `?string` | Optional | The Salesforce ID of the customer | getSalesforceId(): ?string | setSalesforceId(?string salesforceId): void |
| `brandingThemeId` | `?int` | Optional | The ID of the Branding Theme assigned to this customer as the customer's default Branding Theme. This customer-level Branding Theme is used when a subscription does not have its own subscription-level Branding Theme. Available only when Branding Themes are enabled for the site. | getBrandingThemeId(): ?int | setBrandingThemeId(?int brandingThemeId): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\CreateCustomerBuilder;

$createCustomer = CreateCustomerBuilder::init(
    'first_name0',
    'last_name8',
    'email6'
)
    ->ccEmails('cc_emails0')
    ->organization('organization6')
    ->reference('reference4')
    ->address('address6')
    ->address2('address_24')
    ->build();
```

