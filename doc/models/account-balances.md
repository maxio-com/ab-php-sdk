
# Account Balances

## Structure

`AccountBalances`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `openInvoices` | [`?AccountBalance`](../../doc/models/account-balance.md) | Optional | The balance, in cents, of the sum of the subscription's open, payable invoices. | getOpenInvoices(): ?AccountBalance | setOpenInvoices(?AccountBalance openInvoices): void |
| `pendingInvoices` | [`?AccountBalance`](../../doc/models/account-balance.md) | Optional | The balance, in cents, of the sum of the subscription's pending, payable invoices. | getPendingInvoices(): ?AccountBalance | setPendingInvoices(?AccountBalance pendingInvoices): void |
| `pendingDiscounts` | [`?AccountBalance`](../../doc/models/account-balance.md) | Optional | The balance, in cents, of the subscription's Pending Discount account. | getPendingDiscounts(): ?AccountBalance | setPendingDiscounts(?AccountBalance pendingDiscounts): void |
| `serviceCredits` | [`?AccountBalance`](../../doc/models/account-balance.md) | Optional | The balance, in cents, of the subscription's Service Credit account. | getServiceCredits(): ?AccountBalance | setServiceCredits(?AccountBalance serviceCredits): void |
| `prepayments` | [`?AccountBalance`](../../doc/models/account-balance.md) | Optional | The balance, in cents, of the subscription's Prepayment account. | getPrepayments(): ?AccountBalance | setPrepayments(?AccountBalance prepayments): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\AccountBalancesBuilder;
use AdvancedBillingLib\Models\Builders\AccountBalanceBuilder;

$accountBalances = AccountBalancesBuilder::init()
    ->openInvoices(
        AccountBalanceBuilder::init()
            ->balanceInCents(40)
            ->automaticBalanceInCents(202)
            ->remittanceBalanceInCents(170)
            ->build()
    )
    ->pendingInvoices(
        AccountBalanceBuilder::init()
            ->balanceInCents(0)
            ->automaticBalanceInCents(242)
            ->remittanceBalanceInCents(46)
            ->build()
    )
    ->pendingDiscounts(
        AccountBalanceBuilder::init()
            ->balanceInCents(88)
            ->automaticBalanceInCents(154)
            ->remittanceBalanceInCents(134)
            ->build()
    )
    ->serviceCredits(
        AccountBalanceBuilder::init()
            ->balanceInCents(84)
            ->automaticBalanceInCents(70)
            ->remittanceBalanceInCents(38)
            ->build()
    )
    ->prepayments(
        AccountBalanceBuilder::init()
            ->balanceInCents(192)
            ->automaticBalanceInCents(178)
            ->remittanceBalanceInCents(146)
            ->build()
    )
    ->build();
```

