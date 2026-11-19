
# Wallet Products List Response

## Structure

`WalletProductsListResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `walletProducts` | [`WalletProductListItem[]`](../../doc/models/wallet-product-list-item.md) | Required | - | getWalletProducts(): array | setWalletProducts(array walletProducts): void |
| `totalCount` | `int` | Required | Total number of Wallet Products matching the filters, across all pages. | getTotalCount(): int | setTotalCount(int totalCount): void |
| `archivedCount` | `int` | Required | Not a simple count of archived products matching the filters. With `status=archived`, equals `total_count` (there's nothing else to report). With any other `status`, it's `0` whenever `total_count` is non-zero, and only when `total_count` is `0` does it become the number of archived Wallet Products matching the same `q` search term (ignoring `status`): an empty-state hint, not a running total. | getArchivedCount(): int | setArchivedCount(int archivedCount): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\WalletProductsListResponseBuilder;
use AdvancedBillingLib\Models\Builders\WalletProductListItemBuilder;
use AdvancedBillingLib\Models\PricingScheme;
use AdvancedBillingLib\Models\ItemCategory;

$walletProductsListResponse = WalletProductsListResponseBuilder::init(
    [
        WalletProductListItemBuilder::init()
            ->id(70)
            ->name('name4')
            ->handle('handle0')
            ->pricingScheme(PricingScheme::STAIRSTEP)
            ->unitName('unit_name6')
            ->itemCategory(ItemCategory::ENUM_BUSINESS_SOFTWARE)
            ->build()
    ],
    214,
    238
)->build();
```

