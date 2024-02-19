
# Invoice Pre Payment

## Structure

`InvoicePrePayment`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `subscriptionId` | `?int` | Optional | The subscription id for the prepayment account | getSubscriptionId(): ?int | setSubscriptionId(?int subscriptionId): void |
| `amountInCents` | `?int` | Optional | The amount in cents of the prepayment that was created as a result of this payment. | getAmountInCents(): ?int | setAmountInCents(?int amountInCents): void |
| `endingBalanceInCents` | `?int` | Optional | The total balance of the prepayment account for this subscription including any prior prepayments | getEndingBalanceInCents(): ?int | setEndingBalanceInCents(?int endingBalanceInCents): void |

## Example (as JSON)

```json
{
  "subscription_id": 180,
  "amount_in_cents": 100,
  "ending_balance_in_cents": 60
}
```

