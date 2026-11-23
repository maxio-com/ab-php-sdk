
# Wallet Transactions List Response

## Structure

`WalletTransactionsListResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `walletTransactions` | [`WalletTransaction[]`](../../doc/models/wallet-transaction.md) | Required | - | getWalletTransactions(): array | setWalletTransactions(array walletTransactions): void |
| `meta` | [`ListPublicKeysMeta`](../../doc/models/list-public-keys-meta.md) | Required | - | getMeta(): ListPublicKeysMeta | setMeta(ListPublicKeysMeta meta): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\WalletTransactionsListResponseBuilder;
use AdvancedBillingLib\Models\Builders\WalletTransactionBuilder;
use AdvancedBillingLib\Models\Builders\ListPublicKeysMetaBuilder;

$walletTransactionsListResponse = WalletTransactionsListResponseBuilder::init(
    [
        WalletTransactionBuilder::init()
            ->id(140)
            ->walletId(244)
            ->kind('grant')
            ->amount('-30.0')
            ->grantId(160)
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

