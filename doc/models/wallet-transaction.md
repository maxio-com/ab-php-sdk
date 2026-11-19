
# Wallet Transaction

One append-only row on the wallet's ledger. Always appears bare inside a `wallet_transactions` array, never wrapped in its own key.

## Structure

`WalletTransaction`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?int` | Optional | The Advanced Billing id of the ledger row. | getId(): ?int | setId(?int id): void |
| `walletId` | `?int` | Optional | - | getWalletId(): ?int | setWalletId(?int walletId): void |
| `kind` | `?string` | Optional | The kind of ledger row. Known values: `grant`, `debit`, `adjustment`, `initial_balance`, and `expiration`. More kinds are expected over time, so treat this as an open string and don't fail on one you don't recognize. Only `grant` and `debit` are accepted on [Create Wallet Transaction](../../doc/controllers/wallet-transactions.md#create-wallet-transaction). `adjustment` rows are written by [Create Wallet Adjustment](../../doc/controllers/wallet-adjustments.md#create-wallet-adjustment), `initial_balance` rows only by a seeded [Create Wallet](../../doc/controllers/wallets.md#create-wallet), and `expiration` rows only by the automatic expiry sweep that writes off an unconsumed grant once its `expires_at` passes. | getKind(): ?string | setKind(?string kind): void |
| `amount` | `?string` | Optional | A decimal string, **signed** on this resource. Non-negative for grants, negative for debits and expirations, either sign for adjustments. A grant row written after an overdraft repayment carries only what was left after the repayment (possibly `"0.0"`), not the grant's `original`. | getAmount(): ?string | setAmount(?string amount): void |
| `grantId` | `?int` | Optional | The grant this row is attributed to. `null` for an overdraft row (a `kind: debit` row draining the below-zero portion of a balance, attributed to no grant), for an overdraft-repayment row (the `kind: grant` row that pays an existing negative balance back to zero, written before any remainder becomes a new grant), and for an overdraft correction (a `kind: adjustment` row posted against an overdraft entry, which credits no grant). | getGrantId(): ?int | setGrantId(?int grantId): void |
| `sourceTransactionId` | `?int` | Optional | For an `adjustment` row posted against a specific usage entry, the id of the `debit` row it corrects. `null` for every other kind, and for adjustments made against a grant's balance directly. | getSourceTransactionId(): ?int | setSourceTransactionId(?int sourceTransactionId): void |
| `sourceCorrectionsTotal` | `?string` | Optional | For a `debit` row only, the signed sum (as a decimal string) of every adjustment posted against it so far (`"0.0"` when none). `null` for every other kind. The row's own `amount` is never rewritten, so a caller deriving the entry's corrected quantity nets this out of `amount`, and sends this value back as `expected_source_corrections` on a further correction. | getSourceCorrectionsTotal(): ?string | setSourceCorrectionsTotal(?string sourceCorrectionsTotal): void |
| `balanceAfter` | `?string` | Optional | The wallet's posted balance immediately after this row was applied, as a decimal string. Compare it with the wallet's `posted_balance`, not its `balance`. | getBalanceAfter(): ?string | setBalanceAfter(?string balanceAfter): void |
| `meteredFromAt` | `?DateTime` | Optional | For a row that closed a metered usage window (an hourly close, a depletion, or an expiry write-off), the start of that window. `null` on every other row. | getMeteredFromAt(): ?\DateTime | setMeteredFromAt(?\DateTime meteredFromAt): void |
| `meteredThroughAt` | `?DateTime` | Optional | The end of the usage window this row closed. `null` on every other row. | getMeteredThroughAt(): ?\DateTime | setMeteredThroughAt(?\DateTime meteredThroughAt): void |
| `conversionRateApplied` | `?string` | Optional | The meter-to-wallet-unit conversion rate applied to compute this row's `amount`, as a decimal string. `null` on every other row. | getConversionRateApplied(): ?string | setConversionRateApplied(?string conversionRateApplied): void |
| `invoiceUid` | `?string` | Optional | The uid of the invoice behind a purchase's rows: the grant-creating row and, when the purchase repaid an overdraft, the repayment row. `null` on every other row. | getInvoiceUid(): ?string | setInvoiceUid(?string invoiceUid): void |
| `memo` | `?string` | Optional | Free-text note. For an `adjustment` row, carries the required `reason`. | getMemo(): ?string | setMemo(?string memo): void |
| `createdAt` | `?DateTime` | Optional | - | getCreatedAt(): ?\DateTime | setCreatedAt(?\DateTime createdAt): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\WalletTransactionBuilder;

$walletTransaction = WalletTransactionBuilder::init()
    ->id(178)
    ->walletId(26)
    ->kind('grant')
    ->amount('-30.0')
    ->grantId(198)
    ->build();
```

