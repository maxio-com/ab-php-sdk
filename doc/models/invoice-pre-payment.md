
# Invoice Pre Payment

## Structure

`InvoicePrePayment`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `subscriptionId` | `?string` | Optional | The subscription id for the prepayment account | getSubscriptionId(): ?string | setSubscriptionId(?string subscriptionId): void |
| `amountInCents` | `?string` | Optional | The amount in cents of the prepayment that was created as a result of this payment. | getAmountInCents(): ?string | setAmountInCents(?string amountInCents): void |
| `endingBalanceInCents` | `?string` | Optional | The total balance of the prepayment account for this subscription including any prior prepayments | getEndingBalanceInCents(): ?string | setEndingBalanceInCents(?string endingBalanceInCents): void |

## Example (as JSON)

```json
{
  "subscription_id": "subscription_id0",
  "amount_in_cents": "amount_in_cents2",
  "ending_balance_in_cents": "ending_balance_in_cents4"
}
```

