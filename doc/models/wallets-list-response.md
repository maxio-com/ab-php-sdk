
# Wallets List Response

## Structure

`WalletsListResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `wallets` | [`Wallet[]`](../../doc/models/wallet.md) | Required | - | getWallets(): array | setWallets(array wallets): void |
| `meta` | [`ListPublicKeysMeta`](../../doc/models/list-public-keys-meta.md) | Required | - | getMeta(): ListPublicKeysMeta | setMeta(ListPublicKeysMeta meta): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\WalletsListResponseBuilder;
use AdvancedBillingLib\Models\Builders\WalletBuilder;
use AdvancedBillingLib\Models\OwnerType;
use AdvancedBillingLib\Models\Builders\ListPublicKeysMetaBuilder;

$walletsListResponse = WalletsListResponseBuilder::init(
    [
        WalletBuilder::init()
            ->id(80)
            ->ownerType(OwnerType::SUBSCRIPTION)
            ->ownerId(156)
            ->name('name4')
            ->walletProductId(72)
            ->unit('tokens')
            ->balance('150.0')
            ->postedBalance('150.0')
            ->depletionPolicy('hard_stop')
            ->build()
    ],
    ListPublicKeysMetaBuilder::init()
        ->totalCount(150)
        ->currentPage(126)
        ->totalPages(138)
        ->perPage(152)
        ->build()
)->build();
```

