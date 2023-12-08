
# Subscription Group Balances

## Structure

`SubscriptionGroupBalances`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `prepayments` | [`?AccountBalance`](../../doc/models/account-balance.md) | Optional | - | getPrepayments(): ?AccountBalance | setPrepayments(?AccountBalance prepayments): void |
| `serviceCredits` | [`?AccountBalance`](../../doc/models/account-balance.md) | Optional | - | getServiceCredits(): ?AccountBalance | setServiceCredits(?AccountBalance serviceCredits): void |
| `openInvoices` | [`?AccountBalance`](../../doc/models/account-balance.md) | Optional | - | getOpenInvoices(): ?AccountBalance | setOpenInvoices(?AccountBalance openInvoices): void |
| `pendingDiscounts` | [`?AccountBalance`](../../doc/models/account-balance.md) | Optional | - | getPendingDiscounts(): ?AccountBalance | setPendingDiscounts(?AccountBalance pendingDiscounts): void |

## Example (as JSON)

```json
{
  "prepayments": {
    "balance_in_cents": 192
  },
  "service_credits": {
    "balance_in_cents": 84
  },
  "open_invoices": {
    "balance_in_cents": 40
  },
  "pending_discounts": {
    "balance_in_cents": 88
  }
}
```

