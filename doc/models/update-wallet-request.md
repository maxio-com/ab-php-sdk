
# Update Wallet Request

## Structure

`UpdateWalletRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `wallet` | [`Wallet2`](../../doc/models/wallet-2.md) | Required | - | getWallet(): Wallet2 | setWallet(Wallet2 wallet): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\UpdateWalletRequestBuilder;
use AdvancedBillingLib\Models\Builders\Wallet2Builder;

$updateWalletRequest = UpdateWalletRequestBuilder::init(
    Wallet2Builder::init()
        ->name('name6')
        ->build()
)->build();
```

