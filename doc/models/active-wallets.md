
# Active Wallets

## Structure

`ActiveWallets`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `total` | `int` | Required | Total count of active wallets drawing on this product. | getTotal(): int | setTotal(int total): void |
| `sample` | [`WalletProductActiveWallet[]`](../../doc/models/wallet-product-active-wallet.md) | Required | Up to 50 of the most recently created active wallets, newest first. | getSample(): array | setSample(array sample): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\ActiveWalletsBuilder;
use AdvancedBillingLib\Models\Builders\WalletProductActiveWalletBuilder;

$activeWallets = ActiveWalletsBuilder::init(
    120,
    [
        WalletProductActiveWalletBuilder::init()
            ->id(180)
            ->subscriptionId(34)
            ->companyName('company_name4')
            ->purchaseMechanism('purchase_mechanism8')
            ->pricePointName('price_point_name8')
            ->build()
    ]
)->build();
```

