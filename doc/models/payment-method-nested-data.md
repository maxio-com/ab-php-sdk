
# Payment Method Nested Data

A nested data structure detailing the method of payment

## Structure

`PaymentMethodNestedData`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `type` | `?string` | Optional | **Default**: `'apple_pay'` | getType(): ?string | setType(?string type): void |
| `maskedAccountNumber` | `?string` | Optional | - | getMaskedAccountNumber(): ?string | setMaskedAccountNumber(?string maskedAccountNumber): void |
| `maskedRoutingNumber` | `?string` | Optional | - | getMaskedRoutingNumber(): ?string | setMaskedRoutingNumber(?string maskedRoutingNumber): void |
| `cardBrand` | `?string` | Optional | - | getCardBrand(): ?string | setCardBrand(?string cardBrand): void |
| `cardExpiration` | `?string` | Optional | - | getCardExpiration(): ?string | setCardExpiration(?string cardExpiration): void |
| `lastFour` | `?string` | Optional | - | getLastFour(): ?string | setLastFour(?string lastFour): void |
| `maskedCardNumber` | `?string` | Optional | - | getMaskedCardNumber(): ?string | setMaskedCardNumber(?string maskedCardNumber): void |
| `details` | `?string` | Optional | - | getDetails(): ?string | setDetails(?string details): void |
| `kind` | `?string` | Optional | - | getKind(): ?string | setKind(?string kind): void |
| `memo` | `?string` | Optional | - | getMemo(): ?string | setMemo(?string memo): void |
| `email` | `?string` | Optional | - | getEmail(): ?string | setEmail(?string email): void |

## Example (as JSON)

```json
{
  "type": "apple_pay",
  "masked_account_number": "masked_account_number8",
  "masked_routing_number": "masked_routing_number8",
  "card_brand": "card_brand4",
  "card_expiration": "card_expiration2"
}
```

