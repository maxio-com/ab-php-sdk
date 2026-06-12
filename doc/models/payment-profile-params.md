
# Payment Profile Params

PCI-safe cardholder fields only. Full card numbers, CVV, and billing address are never included.

## Structure

`PaymentProfileParams`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `firstName` | `?string` | Optional | - | getFirstName(): ?string | setFirstName(?string firstName): void |
| `lastName` | `?string` | Optional | - | getLastName(): ?string | setLastName(?string lastName): void |
| `cardType` | `?string` | Optional | - | getCardType(): ?string | setCardType(?string cardType): void |

## Example (as JSON)

```json
{
  "first_name": "first_name2",
  "last_name": "last_name0",
  "card_type": "card_type8"
}
```

