
# Wallet Response

## Structure

`WalletResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `wallet` | [`Wallet`](../../doc/models/wallet.md) | Required | A balance, denominated in the unit of a Wallet Product, owned by a subscription. Grants and recurring funding schedules are embedded so a single read shows the full balance breakdown. | getWallet(): Wallet | setWallet(Wallet wallet): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\WalletResponseBuilder;
use AdvancedBillingLib\Models\Builders\WalletBuilder;
use AdvancedBillingLib\Models\OwnerType;

$walletResponse = WalletResponseBuilder::init(
    WalletBuilder::init()
        ->id(240)
        ->ownerType(OwnerType::SUBSCRIPTION)
        ->ownerId(60)
        ->name('name6')
        ->walletProductId(232)
        ->unit('tokens')
        ->balance('150.0')
        ->postedBalance('150.0')
        ->depletionPolicy('hard_stop')
        ->build()
)->build();
```

