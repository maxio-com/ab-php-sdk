
# Wallet Product Usage Count

A rollup of what's using this Wallet Product, for the catalog listing.

## Structure

`WalletProductUsageCount`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `walletConfigurations` | `int` | Required | Number of wallet templates billing through this product, whether or not any wallet has been created from them yet. | getWalletConfigurations(): int | setWalletConfigurations(int walletConfigurations): void |
| `activeWallets` | `int` | Required | Number of active (non-archived) wallets currently denominated by this product. | getActiveWallets(): int | setActiveWallets(int activeWallets): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\WalletProductUsageCountBuilder;

$walletProductUsageCount = WalletProductUsageCountBuilder::init(
    154,
    72
)->build();
```

