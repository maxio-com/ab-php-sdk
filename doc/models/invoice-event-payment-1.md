
# Invoice Event Payment 1

A nested data structure detailing the method of payment

## Structure

`InvoiceEventPayment1`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `type` | `?string` | Optional | - | getType(): ?string | setType(?string type): void |
| `maskedAccountNumber` | `string` | Required | - | getMaskedAccountNumber(): string | setMaskedAccountNumber(string maskedAccountNumber): void |
| `maskedRoutingNumber` | `string` | Required | - | getMaskedRoutingNumber(): string | setMaskedRoutingNumber(string maskedRoutingNumber): void |
| `cardBrand` | `string` | Required | - | getCardBrand(): string | setCardBrand(string cardBrand): void |
| `cardExpiration` | `?string` | Optional | - | getCardExpiration(): ?string | setCardExpiration(?string cardExpiration): void |
| `lastFour` | `?string` | Optional | - | getLastFour(): ?string | setLastFour(?string lastFour): void |
| `maskedCardNumber` | `string` | Required | - | getMaskedCardNumber(): string | setMaskedCardNumber(string maskedCardNumber): void |
| `details` | `?string` | Required | - | getDetails(): ?string | setDetails(?string details): void |
| `kind` | `string` | Required | - | getKind(): string | setKind(string kind): void |
| `memo` | `?string` | Required | - | getMemo(): ?string | setMemo(?string memo): void |
| `email` | `string` | Required | - | getEmail(): string | setEmail(string email): void |

## Example (as JSON)

```json
{
  "type": "Invoice Event Payment1",
  "masked_account_number": "masked_account_number4",
  "masked_routing_number": "masked_routing_number4",
  "card_brand": "card_brand8",
  "card_expiration": "card_expiration4",
  "last_four": "last_four2",
  "masked_card_number": "masked_card_number6",
  "details": "details8",
  "kind": "kind6",
  "memo": "memo2",
  "email": "email8"
}
```

