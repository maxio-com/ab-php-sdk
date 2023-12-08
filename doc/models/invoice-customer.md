
# Invoice Customer

Information about the customer who is owner or recipient the invoiced subscription.

## Structure

`InvoiceCustomer`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `chargifyId` | `?int` | Optional | - | getChargifyId(): ?int | setChargifyId(?int chargifyId): void |
| `firstName` | `?string` | Optional | - | getFirstName(): ?string | setFirstName(?string firstName): void |
| `lastName` | `?string` | Optional | - | getLastName(): ?string | setLastName(?string lastName): void |
| `organization` | `?string` | Optional | - | getOrganization(): ?string | setOrganization(?string organization): void |
| `email` | `?string` | Optional | - | getEmail(): ?string | setEmail(?string email): void |
| `vatNumber` | `?string` | Optional | - | getVatNumber(): ?string | setVatNumber(?string vatNumber): void |
| `reference` | `?string` | Optional | - | getReference(): ?string | setReference(?string reference): void |

## Example (as JSON)

```json
{
  "chargify_id": 236,
  "first_name": "first_name0",
  "last_name": "last_name8",
  "organization": "organization4",
  "email": "email6"
}
```

