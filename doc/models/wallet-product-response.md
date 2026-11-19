
# Wallet Product Response

A Wallet Product is a Component created with no product family, so it returns the full Component field set under a `wallet_product` root instead of `component`.

## Structure

`WalletProductResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `walletProduct` | [`Component`](../../doc/models/component.md) | Required | - | getWalletProduct(): Component | setWalletProduct(Component walletProduct): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\WalletProductResponseBuilder;
use AdvancedBillingLib\Models\Builders\ComponentBuilder;
use AdvancedBillingLib\Models\PricingScheme;
use AdvancedBillingLib\Models\ItemCategory;

$walletProductResponse = WalletProductResponseBuilder::init(
    ComponentBuilder::init()
        ->id(224)
        ->name('name0')
        ->handle('handle6')
        ->pricingScheme(PricingScheme::PER_UNIT)
        ->unitName('unit_name2')
        ->itemCategory(ItemCategory::ENUM_BUSINESS_SOFTWARE)
        ->build()
)->build();
```

