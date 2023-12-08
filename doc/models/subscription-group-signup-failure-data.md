
# Subscription Group Signup Failure Data

## Structure

`SubscriptionGroupSignupFailureData`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `payerId` | `?int` | Optional | - | getPayerId(): ?int | setPayerId(?int payerId): void |
| `payerReference` | `?string` | Optional | - | getPayerReference(): ?string | setPayerReference(?string payerReference): void |
| `paymentProfileId` | `?int` | Optional | - | getPaymentProfileId(): ?int | setPaymentProfileId(?int paymentProfileId): void |
| `paymentCollectionMethod` | `?string` | Optional | - | getPaymentCollectionMethod(): ?string | setPaymentCollectionMethod(?string paymentCollectionMethod): void |
| `payerAttributes` | [`?PayerAttributes`](../../doc/models/payer-attributes.md) | Optional | - | getPayerAttributes(): ?PayerAttributes | setPayerAttributes(?PayerAttributes payerAttributes): void |
| `creditCardAttributes` | [`?SubscriptionGroupCreditCard`](../../doc/models/subscription-group-credit-card.md) | Optional | - | getCreditCardAttributes(): ?SubscriptionGroupCreditCard | setCreditCardAttributes(?SubscriptionGroupCreditCard creditCardAttributes): void |
| `bankAccountAttributes` | [`?SubscriptionGroupBankAccount`](../../doc/models/subscription-group-bank-account.md) | Optional | - | getBankAccountAttributes(): ?SubscriptionGroupBankAccount | setBankAccountAttributes(?SubscriptionGroupBankAccount bankAccountAttributes): void |
| `subscriptions` | [`?(SubscriptionGroupSignupItem[])`](../../doc/models/subscription-group-signup-item.md) | Optional | - | getSubscriptions(): ?array | setSubscriptions(?array subscriptions): void |

## Example (as JSON)

```json
{
  "payer_id": 16,
  "payer_reference": "payer_reference8",
  "payment_profile_id": 6,
  "payment_collection_method": "payment_collection_method0",
  "payer_attributes": {
    "first_name": "first_name2",
    "last_name": "last_name0",
    "email": "email4",
    "cc_emails": "cc_emails2",
    "organization": "organization6"
  }
}
```

