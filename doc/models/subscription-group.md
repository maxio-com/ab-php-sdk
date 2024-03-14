
# Subscription Group

## Structure

`SubscriptionGroup`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `customerId` | `?int` | Optional | - | getCustomerId(): ?int | setCustomerId(?int customerId): void |
| `paymentProfile` | [`?SubscriptionGroupPaymentProfile`](../../doc/models/subscription-group-payment-profile.md) | Optional | - | getPaymentProfile(): ?SubscriptionGroupPaymentProfile | setPaymentProfile(?SubscriptionGroupPaymentProfile paymentProfile): void |
| `paymentCollectionMethod` | [`?string(CollectionMethod)`](../../doc/models/collection-method.md) | Optional | The type of payment collection to be used in the subscription. For legacy Statements Architecture valid options are - `invoice`, `automatic`. For current Relationship Invoicing Architecture valid options are - `remittance`, `automatic`, `prepaid`.<br>**Default**: `CollectionMethod::AUTOMATIC` | getPaymentCollectionMethod(): ?string | setPaymentCollectionMethod(?string paymentCollectionMethod): void |
| `subscriptionIds` | `?(int[])` | Optional | - | getSubscriptionIds(): ?array | setSubscriptionIds(?array subscriptionIds): void |
| `createdAt` | `?DateTime` | Optional | - | getCreatedAt(): ?\DateTime | setCreatedAt(?\DateTime createdAt): void |

## Example (as JSON)

```json
{
  "payment_collection_method": "automatic",
  "customer_id": 36,
  "payment_profile": {
    "id": 44,
    "first_name": "first_name4",
    "last_name": "last_name2",
    "masked_card_number": "masked_card_number2"
  },
  "subscription_ids": [
    146,
    147,
    148
  ],
  "created_at": "2016-03-13T12:52:32.123Z"
}
```

