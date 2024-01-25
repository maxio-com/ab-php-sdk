
# Payment Method Credit Card Type

## Structure

`PaymentMethodCreditCardType`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `cardBrand` | `string` | Required | - | getCardBrand(): string | setCardBrand(string cardBrand): void |
| `cardExpiration` | `?string` | Optional | - | getCardExpiration(): ?string | setCardExpiration(?string cardExpiration): void |
| `lastFour` | `?string` | Optional | - | getLastFour(): ?string | setLastFour(?string lastFour): void |
| `maskedCardNumber` | `string` | Required | - | getMaskedCardNumber(): string | setMaskedCardNumber(string maskedCardNumber): void |
| `type` | `string` | Required | **Default**: `'credit_card'` | getType(): string | setType(string type): void |

## Example (as JSON)

```json
{
  "card_brand": "card_brand0",
  "masked_card_number": "masked_card_number4",
  "type": "credit_card",
  "card_expiration": "card_expiration8",
  "last_four": "last_four0"
}
```

