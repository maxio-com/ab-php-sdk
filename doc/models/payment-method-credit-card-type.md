
# Payment Method Credit Card Type

## Structure

`PaymentMethodCreditCardType`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `cardBrand` | `?string` | Optional | - | getCardBrand(): ?string | setCardBrand(?string cardBrand): void |
| `cardExpiration` | `?string` | Optional | - | getCardExpiration(): ?string | setCardExpiration(?string cardExpiration): void |
| `lastFour` | `?string` | Optional | - | getLastFour(): ?string | setLastFour(?string lastFour): void |
| `maskedCardNumber` | `?string` | Optional | - | getMaskedCardNumber(): ?string | setMaskedCardNumber(?string maskedCardNumber): void |
| `type` | `?string` | Optional | **Default**: `'credit_card'` | getType(): ?string | setType(?string type): void |

## Example (as JSON)

```json
{
  "type": "credit_card",
  "card_brand": "card_brand0",
  "card_expiration": "card_expiration8",
  "last_four": "last_four0",
  "masked_card_number": "masked_card_number4"
}
```

