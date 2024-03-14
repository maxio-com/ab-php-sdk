
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
    "balance_in_cents": 192,
    "automatic_balance_in_cents": 178,
    "remittance_balance_in_cents": 146
  },
  "service_credits": {
    "balance_in_cents": 84,
    "automatic_balance_in_cents": 70,
    "remittance_balance_in_cents": 38
  },
  "open_invoices": {
    "balance_in_cents": 40,
    "automatic_balance_in_cents": 202,
    "remittance_balance_in_cents": 170
  },
  "pending_discounts": {
    "balance_in_cents": 88,
    "automatic_balance_in_cents": 154,
    "remittance_balance_in_cents": 134
  }
}
```

