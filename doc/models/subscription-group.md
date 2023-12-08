
# Subscription Group

## Structure

`SubscriptionGroup`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `customerId` | `?int` | Optional | - | getCustomerId(): ?int | setCustomerId(?int customerId): void |
| `paymentProfile` | [`?SubscriptionGroupPaymentProfile`](../../doc/models/subscription-group-payment-profile.md) | Optional | - | getPaymentProfile(): ?SubscriptionGroupPaymentProfile | setPaymentProfile(?SubscriptionGroupPaymentProfile paymentProfile): void |
| `paymentCollectionMethod` | `?string` | Optional | - | getPaymentCollectionMethod(): ?string | setPaymentCollectionMethod(?string paymentCollectionMethod): void |
| `subscriptionIds` | `?(int[])` | Optional | - | getSubscriptionIds(): ?array | setSubscriptionIds(?array subscriptionIds): void |
| `createdAt` | `?string` | Optional | - | getCreatedAt(): ?string | setCreatedAt(?string createdAt): void |

## Example (as JSON)

```json
{
  "customer_id": 36,
  "payment_profile": {
    "id": 44,
    "first_name": "first_name4",
    "last_name": "last_name2",
    "masked_card_number": "masked_card_number2"
  },
  "payment_collection_method": "payment_collection_method8",
  "subscription_ids": [
    146,
    147,
    148
  ],
  "created_at": "created_at2"
}
```

