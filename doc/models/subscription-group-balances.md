
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

## Example

```php
use AdvancedBillingLib\Models\Builders\SubscriptionGroupBalancesBuilder;
use AdvancedBillingLib\Models\Builders\AccountBalanceBuilder;

$subscriptionGroupBalances = SubscriptionGroupBalancesBuilder::init()
    ->prepayments(
        AccountBalanceBuilder::init()
            ->balanceInCents(192)
            ->automaticBalanceInCents(178)
            ->remittanceBalanceInCents(146)
            ->build()
    )
    ->serviceCredits(
        AccountBalanceBuilder::init()
            ->balanceInCents(84)
            ->automaticBalanceInCents(70)
            ->remittanceBalanceInCents(38)
            ->build()
    )
    ->openInvoices(
        AccountBalanceBuilder::init()
            ->balanceInCents(40)
            ->automaticBalanceInCents(202)
            ->remittanceBalanceInCents(170)
            ->build()
    )
    ->pendingDiscounts(
        AccountBalanceBuilder::init()
            ->balanceInCents(88)
            ->automaticBalanceInCents(154)
            ->remittanceBalanceInCents(134)
            ->build()
    )
    ->build();
```

