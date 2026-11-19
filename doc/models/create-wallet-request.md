
# Create Wallet Request

## Structure

`CreateWalletRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `wallet` | [`Wallet1`](../../doc/models/wallet-1.md) | Required | - | getWallet(): Wallet1 | setWallet(Wallet1 wallet): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\CreateWalletRequestBuilder;
use AdvancedBillingLib\Models\Builders\Wallet1Builder;
use AdvancedBillingLib\Models\WalletHardStopOverflow;

$createWalletRequest = CreateWalletRequestBuilder::init(
    Wallet1Builder::init(
        94,
        154
    )
        ->name('name6')
        ->depletionPolicy('depletion_policy4')
        ->hardStopOverflow(WalletHardStopOverflow::DISCARD)
        ->meterId(146)
        ->conversionRate(
            'String9'
        )
        ->initialBalance(
            'String1'
        )
        ->build()
)->build();
```

