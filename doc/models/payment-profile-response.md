
# Payment Profile Response

## Structure

`PaymentProfileResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `paymentProfile` | [ApplePayPaymentProfile](../../doc/models/apple-pay-payment-profile.md)\|[BankAccountPaymentProfile](../../doc/models/bank-account-payment-profile.md)\|[CreditCardPaymentProfile](../../doc/models/credit-card-payment-profile.md)\|[PaypalPaymentProfile](../../doc/models/paypal-payment-profile.md) | Required | - | getPaymentProfile(): | setPaymentProfile( paymentProfile): void |

## Example (as JSON)

```json
{
  "payment_profile": {
    "payment_type": "apple_pay",
    "id": 60,
    "first_name": "first_name2",
    "last_name": "last_name0",
    "customer_id": 98,
    "current_vault": "braintree_blue"
  }
}
```

