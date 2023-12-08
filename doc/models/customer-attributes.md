
# Customer Attributes

## Structure

`CustomerAttributes`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `firstName` | `?string` | Optional | The first name of the customer. Required when creating a customer via attributes. | getFirstName(): ?string | setFirstName(?string firstName): void |
| `lastName` | `?string` | Optional | The last name of the customer. Required when creating a customer via attributes. | getLastName(): ?string | setLastName(?string lastName): void |
| `email` | `?string` | Optional | The email address of the customer. Required when creating a customer via attributes. | getEmail(): ?string | setEmail(?string email): void |
| `ccEmails` | `?string` | Optional | A list of emails that should be cc’d on all customer communications. Optional. | getCcEmails(): ?string | setCcEmails(?string ccEmails): void |
| `organization` | `?string` | Optional | The organization/company of the customer. Optional. | getOrganization(): ?string | setOrganization(?string organization): void |
| `reference` | `?string` | Optional | A customer “reference”, or unique identifier from your app, stored in Chargify. Can be used so that you may reference your customer’s within Chargify using the same unique value you use in your application. Optional. | getReference(): ?string | setReference(?string reference): void |
| `address` | `?string` | Optional | (Optional) The customer’s shipping street address (i.e. “123 Main St.”). | getAddress(): ?string | setAddress(?string address): void |
| `address2` | `?string` | Optional | (Optional) Second line of the customer’s shipping address i.e. “Apt. 100” | getAddress2(): ?string | setAddress2(?string address2): void |
| `city` | `?string` | Optional | (Optional) The customer’s shipping address city (i.e. “Boston”). | getCity(): ?string | setCity(?string city): void |
| `state` | `?string` | Optional | (Optional) The customer’s shipping address state (i.e. “MA”). This must conform to the [ISO_3166-1](https://en.wikipedia.org/wiki/ISO_3166-1#Current_codes) in order to be valid for tax locale purposes. | getState(): ?string | setState(?string state): void |
| `zip` | `?string` | Optional | (Optional) The customer’s shipping address zip code (i.e. “12345”). | getZip(): ?string | setZip(?string zip): void |
| `country` | `?string` | Optional | (Optional) The customer shipping address country, required in [ISO_3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) format (i.e. “US”). | getCountry(): ?string | setCountry(?string country): void |
| `phone` | `?string` | Optional | (Optional) The phone number of the customer. | getPhone(): ?string | setPhone(?string phone): void |
| `verified` | `?bool` | Optional | - | getVerified(): ?bool | setVerified(?bool verified): void |
| `taxExempt` | `?bool` | Optional | (Optional) The tax_exempt status of the customer. Acceptable values are true or 1 for true and false or 0 for false. | getTaxExempt(): ?bool | setTaxExempt(?bool taxExempt): void |
| `vatNumber` | `?string` | Optional | (Optional) Supplying the VAT number allows EU customer’s to opt-out of the Value Added Tax assuming the merchant address and customer billing address are not within the same EU country. It’s important to omit the country code from the VAT number upon entry. Otherwise, taxes will be assessed upon the purchase. | getVatNumber(): ?string | setVatNumber(?string vatNumber): void |
| `metafields` | `?array<string,string>` | Optional | (Optional) A set of key/value pairs representing custom fields and their values. Metafields will be created “on-the-fly” in your site for a given key, if they have not been created yet. | getMetafields(): ?array | setMetafields(?array metafields): void |
| `parentId` | `?int` | Optional | The parent ID in Chargify if applicable. Parent is another Customer object. | getParentId(): ?int | setParentId(?int parentId): void |

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
  "cc_emails": "cc_emails6",
  "organization": "organization8"
}
```

