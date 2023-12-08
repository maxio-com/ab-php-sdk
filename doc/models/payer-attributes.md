
# Payer Attributes

## Structure

`PayerAttributes`

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
| `locale` | `?string` | Optional | - | getLocale(): ?string | setLocale(?string locale): void |
| `vatNumber` | `?string` | Optional | - | getVatNumber(): ?string | setVatNumber(?string vatNumber): void |
| `taxExempt` | `?string` | Optional | - | getTaxExempt(): ?string | setTaxExempt(?string taxExempt): void |
| `taxExemptReason` | `?string` | Optional | - | getTaxExemptReason(): ?string | setTaxExemptReason(?string taxExemptReason): void |
| `metafields` | `?array<string,string>` | Optional | (Optional) A set of key/value pairs representing custom fields and their values. Metafields will be created “on-the-fly” in your site for a given key, if they have not been created yet. | getMetafields(): ?array | setMetafields(?array metafields): void |

## Example (as JSON)

```json
{
  "metafields": {
    "custom_field_name_1": "custom_field_value_1",
    "custom_field_name_2": "custom_field_value_2"
  },
  "first_name": "first_name4",
  "last_name": "last_name2",
  "email": "email2",
  "cc_emails": "cc_emails4",
  "organization": "organization8"
}
```

