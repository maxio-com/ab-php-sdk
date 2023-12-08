
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
  ]
}
```

