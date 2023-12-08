
# Subscription Group Signup Error

## Structure

`SubscriptionGroupSignupError`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `subscriptions` | [`?array<string,SubscriptionGroupSubscriptionError>`](../../doc/models/subscription-group-subscription-error.md) | Optional | Object that as key have subscription position in request subscriptions array and as value subscription errors object. | getSubscriptions(): ?array | setSubscriptions(?array subscriptions): void |
| `payerReference` | `?string` | Optional | - | getPayerReference(): ?string | setPayerReference(?string payerReference): void |
| `payer` | [`?PayerError`](../../doc/models/payer-error.md) | Optional | - | getPayer(): ?PayerError | setPayer(?PayerError payer): void |
| `subscriptionGroup` | `?(string[])` | Optional | - | getSubscriptionGroup(): ?array | setSubscriptionGroup(?array subscriptionGroup): void |
| `paymentProfileId` | `?string` | Optional | - | getPaymentProfileId(): ?string | setPaymentProfileId(?string paymentProfileId): void |
| `payerId` | `?string` | Optional | - | getPayerId(): ?string | setPayerId(?string payerId): void |

## Example (as JSON)

```json
{
  "subscriptions": {
    "key0": {
      "product": [
        "product9"
      ],
      "product_price_point_id": [
        "product_price_point_id7"
      ],
      "payment_profile": [
        "payment_profile2"
      ],
      "payment_profile.chargify_token": [
        "payment_profile.chargify_token6"
      ]
    },
    "key1": {
      "product": [
        "product9"
      ],
      "product_price_point_id": [
        "product_price_point_id7"
      ],
      "payment_profile": [
        "payment_profile2"
      ],
      "payment_profile.chargify_token": [
        "payment_profile.chargify_token6"
      ]
    }
  },
  "payer_reference": "payer_reference0",
  "payer": {
    "last_name": [
      "last_name5",
      "last_name6"
    ],
    "first_name": [
      "first_name8"
    ],
    "email": [
      "email0",
      "email9"
    ]
  },
  "subscription_group": [
    "subscription_group1",
    "subscription_group2"
  ],
  "payment_profile_id": "payment_profile_id2"
}
```

