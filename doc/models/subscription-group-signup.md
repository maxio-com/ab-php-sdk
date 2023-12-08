
# Subscription Group Signup

## Structure

`SubscriptionGroupSignup`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `paymentProfileId` | `?int` | Optional | - | getPaymentProfileId(): ?int | setPaymentProfileId(?int paymentProfileId): void |
| `payerId` | `?int` | Optional | - | getPayerId(): ?int | setPayerId(?int payerId): void |
| `payerReference` | `?string` | Optional | - | getPayerReference(): ?string | setPayerReference(?string payerReference): void |
| `paymentCollectionMethod` | [`?string(PaymentCollectionMethod)`](../../doc/models/payment-collection-method.md) | Optional | The type of payment collection to be used in the subscription. For legacy Statements Architecture valid options are - `invoice`, `automatic`. For current Relationship Invoicing Architecture valid options are - `remittance`, `automatic`, `prepaid`.<br>**Default**: `PaymentCollectionMethod::AUTOMATIC` | getPaymentCollectionMethod(): ?string | setPaymentCollectionMethod(?string paymentCollectionMethod): void |
| `payerAttributes` | [`?PayerAttributes`](../../doc/models/payer-attributes.md) | Optional | - | getPayerAttributes(): ?PayerAttributes | setPayerAttributes(?PayerAttributes payerAttributes): void |
| `creditCardAttributes` | [`?SubscriptionGroupCreditCard`](../../doc/models/subscription-group-credit-card.md) | Optional | - | getCreditCardAttributes(): ?SubscriptionGroupCreditCard | setCreditCardAttributes(?SubscriptionGroupCreditCard creditCardAttributes): void |
| `bankAccountAttributes` | [`?SubscriptionGroupBankAccount`](../../doc/models/subscription-group-bank-account.md) | Optional | - | getBankAccountAttributes(): ?SubscriptionGroupBankAccount | setBankAccountAttributes(?SubscriptionGroupBankAccount bankAccountAttributes): void |
| `subscriptions` | [`SubscriptionGroupSignupItem[]`](../../doc/models/subscription-group-signup-item.md) | Required | - | getSubscriptions(): array | setSubscriptions(array subscriptions): void |

## Example (as JSON)

```json
{
  "payment_collection_method": "automatic",
  "subscriptions": [
    {
      "metafields": {
        "custom_field_name_1": "custom_field_value_1",
        "custom_field_name_2": "custom_field_value_2"
      },
      "product_handle": "product_handle8",
      "product_id": 144,
      "product_price_point_id": 68,
      "product_price_point_handle": "product_price_point_handle4",
      "offer_id": 40
    }
  ],
  "payment_profile_id": 42,
  "payer_id": 64,
  "payer_reference": "payer_reference8",
  "payer_attributes": {
    "first_name": "first_name2",
    "last_name": "last_name0",
    "email": "email4",
    "cc_emails": "cc_emails2",
    "organization": "organization6"
  }
}
```

