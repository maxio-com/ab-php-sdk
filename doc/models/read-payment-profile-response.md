
# Read Payment Profile Response

## Structure

`ReadPaymentProfileResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `paymentProfile` | [BankAccountPaymentProfile](../../doc/models/bank-account-payment-profile.md)\|[CreditCardPaymentProfile](../../doc/models/credit-card-payment-profile.md) | Required | This is a container for one-of cases. | getPaymentProfile(): | setPaymentProfile( paymentProfile): void |

## Example (as JSON)

```json
{
  "payment_profile": {
    "masked_bank_routing_number": "masked_bank_routing_number8",
    "masked_bank_account_number": "masked_bank_account_number8",
    "verified": false,
    "id": 188,
    "first_name": "first_name6",
    "last_name": "last_name4",
    "customer_id": 226,
    "current_vault": "authorizenet"
  }
}
```

