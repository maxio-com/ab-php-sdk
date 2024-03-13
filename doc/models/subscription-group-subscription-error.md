
# Subscription Group Subscription Error

Object which contains subscription errors.

## Structure

`SubscriptionGroupSubscriptionError`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `product` | `?(string[])` | Optional | - | getProduct(): ?array | setProduct(?array product): void |
| `productPricePointId` | `?(string[])` | Optional | - | getProductPricePointId(): ?array | setProductPricePointId(?array productPricePointId): void |
| `paymentProfile` | `?(string[])` | Optional | - | getPaymentProfile(): ?array | setPaymentProfile(?array paymentProfile): void |
| `paymentProfileChargifyToken` | `?(string[])` | Optional | - | getPaymentProfileChargifyToken(): ?array | setPaymentProfileChargifyToken(?array paymentProfileChargifyToken): void |
| `base` | `?(string[])` | Optional | - | getBase(): ?array | setBase(?array base): void |
| `paymentProfileExpirationMonth` | `?(string[])` | Optional | - | getPaymentProfileExpirationMonth(): ?array | setPaymentProfileExpirationMonth(?array paymentProfileExpirationMonth): void |
| `paymentProfileExpirationYear` | `?(string[])` | Optional | - | getPaymentProfileExpirationYear(): ?array | setPaymentProfileExpirationYear(?array paymentProfileExpirationYear): void |
| `paymentProfileFullNumber` | `?(string[])` | Optional | - | getPaymentProfileFullNumber(): ?array | setPaymentProfileFullNumber(?array paymentProfileFullNumber): void |

## Example (as JSON)

```json
{
  "product": [
    "product7",
    "product6"
  ],
  "product_price_point_id": [
    "product_price_point_id9",
    "product_price_point_id0"
  ],
  "payment_profile": [
    "payment_profile4",
    "payment_profile5"
  ],
  "payment_profile.chargify_token": [
    "payment_profile.chargify_token8",
    "payment_profile.chargify_token9"
  ],
  "base": [
    "base7",
    "base8",
    "base9"
  ]
}
```

