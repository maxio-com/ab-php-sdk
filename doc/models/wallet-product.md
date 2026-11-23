
# Wallet Product

## Structure

`WalletProduct`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `name` | `string` | Required | - | getName(): string | setName(string name): void |
| `unitName` | `string` | Required | The name of the unit the Wallet Product's usage is measured in, for example `tokens`. | getUnitName(): string | setUnitName(string unitName): void |
| `handle` | `?string` | Optional | - | getHandle(): ?string | setHandle(?string handle): void |
| `description` | `?string` | Optional | - | getDescription(): ?string | setDescription(?string description): void |
| `taxable` | `?bool` | Optional | - | getTaxable(): ?bool | setTaxable(?bool taxable): void |
| `taxCode` | `?string` | Optional | - | getTaxCode(): ?string | setTaxCode(?string taxCode): void |
| `accountingCode` | `?string` | Optional | - | getAccountingCode(): ?string | setAccountingCode(?string accountingCode): void |
| `itemCategory` | [`?string(ItemCategory)`](../../doc/models/item-category.md) | Optional | One of the following: Business Software, Consumer Software, Digital Services, Physical Goods, Other | getItemCategory(): ?string | setItemCategory(?string itemCategory): void |
| `pricePoint` | [`?WalletProductPricePointAttributes`](../../doc/models/wallet-product-price-point-attributes.md) | Optional | Creates one price point for the Wallet Product in the same call. Ignored if `price_points` is also sent. | getPricePoint(): ?WalletProductPricePointAttributes | setPricePoint(?WalletProductPricePointAttributes pricePoint): void |
| `pricePoints` | [`?(WalletProductPricePointAttributes[])`](../../doc/models/wallet-product-price-point-attributes.md) | Optional | Creates several price points for the Wallet Product in the same call, winning over `price_point` if both are sent. The first price point created becomes the Wallet Product's default. The whole call is one transaction: if any price point in the array fails validation, nothing is created, including the Wallet Product itself. | getPricePoints(): ?array | setPricePoints(?array pricePoints): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\WalletProductBuilder;
use AdvancedBillingLib\Models\ItemCategory;

$walletProduct = WalletProductBuilder::init(
    'name4',
    'unit_name6'
)
    ->handle('handle0')
    ->description('description4')
    ->taxable(false)
    ->taxCode('tax_code2')
    ->accountingCode('accounting_code0')
    ->itemCategory(ItemCategory::ENUM_BUSINESS_SOFTWARE)
    ->build();
```

