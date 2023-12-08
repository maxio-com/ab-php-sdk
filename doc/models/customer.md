
# Customer

## Structure

`Customer`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `firstName` | `?string` | Optional | The first name of the customer | getFirstName(): ?string | setFirstName(?string firstName): void |
| `lastName` | `?string` | Optional | The last name of the customer | getLastName(): ?string | setLastName(?string lastName): void |
| `email` | `?string` | Optional | The email address of the customer | getEmail(): ?string | setEmail(?string email): void |
| `ccEmails` | `?string` | Optional | A comma-separated list of emails that should be cc’d on all customer communications (i.e. “joe@example.com, sue@example.com”) | getCcEmails(): ?string | setCcEmails(?string ccEmails): void |
| `organization` | `?string` | Optional | The organization of the customer | getOrganization(): ?string | setOrganization(?string organization): void |
| `reference` | `?string` | Optional | The unique identifier used within your own application for this customer | getReference(): ?string | setReference(?string reference): void |
| `id` | `?int` | Optional | The customer ID in Chargify | getId(): ?int | setId(?int id): void |
| `createdAt` | `?string` | Optional | The timestamp in which the customer object was created in Chargify | getCreatedAt(): ?string | setCreatedAt(?string createdAt): void |
| `updatedAt` | `?string` | Optional | The timestamp in which the customer object was last edited | getUpdatedAt(): ?string | setUpdatedAt(?string updatedAt): void |
| `address` | `?string` | Optional | The customer’s shipping street address (i.e. “123 Main St.”) | getAddress(): ?string | setAddress(?string address): void |
| `address2` | `?string` | Optional | Second line of the customer’s shipping address i.e. “Apt. 100” | getAddress2(): ?string | setAddress2(?string address2): void |
| `city` | `?string` | Optional | The customer’s shipping address city (i.e. “Boston”) | getCity(): ?string | setCity(?string city): void |
| `state` | `?string` | Optional | The customer’s shipping address state (i.e. “MA”) | getState(): ?string | setState(?string state): void |
| `stateName` | `?string` | Optional | The customer's full name of state | getStateName(): ?string | setStateName(?string stateName): void |
| `zip` | `?string` | Optional | The customer’s shipping address zip code (i.e. “12345”) | getZip(): ?string | setZip(?string zip): void |
| `country` | `?string` | Optional | The customer shipping address country | getCountry(): ?string | setCountry(?string country): void |
| `countryName` | `?string` | Optional | The customer's full name of country | getCountryName(): ?string | setCountryName(?string countryName): void |
| `phone` | `?string` | Optional | The phone number of the customer | getPhone(): ?string | setPhone(?string phone): void |
| `verified` | `?bool` | Optional | Is the customer verified to use ACH as a payment method. Available only on Authorize.Net gateway | getVerified(): ?bool | setVerified(?bool verified): void |
| `portalCustomerCreatedAt` | `?string` | Optional | The timestamp of when the Billing Portal entry was created at for the customer | getPortalCustomerCreatedAt(): ?string | setPortalCustomerCreatedAt(?string portalCustomerCreatedAt): void |
| `portalInviteLastSentAt` | `?string` | Optional | The timestamp of when the Billing Portal invite was last sent at | getPortalInviteLastSentAt(): ?string | setPortalInviteLastSentAt(?string portalInviteLastSentAt): void |
| `portalInviteLastAcceptedAt` | `?string` | Optional | The timestamp of when the Billing Portal invite was last accepted | getPortalInviteLastAcceptedAt(): ?string | setPortalInviteLastAcceptedAt(?string portalInviteLastAcceptedAt): void |
| `taxExempt` | `?bool` | Optional | The tax exempt status for the customer. Acceptable values are true or 1 for true and false or 0 for false. | getTaxExempt(): ?bool | setTaxExempt(?bool taxExempt): void |
| `vatNumber` | `?string` | Optional | The VAT business identification number for the customer. This number is used to determine VAT tax opt out rules. It is not validated when added or updated on a customer record. Instead, it is validated via VIES before calculating taxes. Only valid business identification numbers will allow for VAT opt out. | getVatNumber(): ?string | setVatNumber(?string vatNumber): void |
| `parentId` | `?int` | Optional | The parent ID in Chargify if applicable. Parent is another Customer object. | getParentId(): ?int | setParentId(?int parentId): void |
| `locale` | `?string` | Optional | The locale for the customer to identify language-region | getLocale(): ?string | setLocale(?string locale): void |
| `defaultSubscriptionGroupUid` | `?string` | Optional | - | getDefaultSubscriptionGroupUid(): ?string | setDefaultSubscriptionGroupUid(?string defaultSubscriptionGroupUid): void |

## Example (as JSON)

```json
{
  "first_name": "first_name8",
  "last_name": "last_name6",
  "email": "email8",
  "cc_emails": "cc_emails2",
  "organization": "organization8"
}
```

