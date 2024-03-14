
# Account Balances

## Structure

`AccountBalances`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `openInvoices` | [`?AccountBalance`](../../doc/models/account-balance.md) | Optional | The balance, in cents, of the sum of the subscription's  open, payable invoices. | getOpenInvoices(): ?AccountBalance | setOpenInvoices(?AccountBalance openInvoices): void |
| `pendingInvoices` | [`?AccountBalance`](../../doc/models/account-balance.md) | Optional | The balance, in cents, of the sum of the subscription's  pending, payable invoices. | getPendingInvoices(): ?AccountBalance | setPendingInvoices(?AccountBalance pendingInvoices): void |
| `pendingDiscounts` | [`?AccountBalance`](../../doc/models/account-balance.md) | Optional | The balance, in cents, of the subscription's Pending Discount account. | getPendingDiscounts(): ?AccountBalance | setPendingDiscounts(?AccountBalance pendingDiscounts): void |
| `serviceCredits` | [`?AccountBalance`](../../doc/models/account-balance.md) | Optional | The balance, in cents, of the subscription's Service Credit account. | getServiceCredits(): ?AccountBalance | setServiceCredits(?AccountBalance serviceCredits): void |
| `prepayments` | [`?AccountBalance`](../../doc/models/account-balance.md) | Optional | The balance, in cents, of the subscription's Prepayment account. | getPrepayments(): ?AccountBalance | setPrepayments(?AccountBalance prepayments): void |

## Example (as JSON)

```json
{
  "open_invoices": {
    "balance_in_cents": 40,
    "automatic_balance_in_cents": 202,
    "remittance_balance_in_cents": 170
  },
  "pending_invoices": {
    "balance_in_cents": 0,
    "automatic_balance_in_cents": 242,
    "remittance_balance_in_cents": 46
  },
  "pending_discounts": {
    "balance_in_cents": 88,
    "automatic_balance_in_cents": 154,
    "remittance_balance_in_cents": 134
  },
  "service_credits": {
    "balance_in_cents": 84,
    "automatic_balance_in_cents": 70,
    "remittance_balance_in_cents": 38
  },
  "prepayments": {
    "balance_in_cents": 192,
    "automatic_balance_in_cents": 178,
    "remittance_balance_in_cents": 146
  }
}
```

