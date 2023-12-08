
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
| `taxExemptReason` | `?string` | Optional | - | getTaxExemptReason(): ?string | setTaxExemptReason(?string taxExemptReason): void |
| `parentId` | `?int` | Optional | The parent ID in Chargify if applicable. Parent is another Customer object. | getParentId(): ?int | setParentId(?int parentId): void |

## Example (as JSON)

```json
{
  "first_name": "first_name8",
  "last_name": "last_name6",
  "email": "email8",
  "cc_emails": "cc_emails8",
  "organization": "organization2",
  "reference": "reference4",
  "address": "address4",
  "address_2": "address_22"
}
```

