
# Wallet Product 1

## Structure

`WalletProduct1`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `name` | `?string` | Optional | - | getName(): ?string | setName(?string name): void |
| `description` | `?string` | Optional | - | getDescription(): ?string | setDescription(?string description): void |
| `taxable` | `?bool` | Optional | - | getTaxable(): ?bool | setTaxable(?bool taxable): void |
| `taxCode` | `?string` | Optional | - | getTaxCode(): ?string | setTaxCode(?string taxCode): void |
| `accountingCode` | `?string` | Optional | - | getAccountingCode(): ?string | setAccountingCode(?string accountingCode): void |
| `itemCategory` | [`?string(ItemCategory)`](../../doc/models/item-category.md) | Optional | One of the following: Business Software, Consumer Software, Digital Services, Physical Goods, Other | getItemCategory(): ?string | setItemCategory(?string itemCategory): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\WalletProduct1Builder;
use AdvancedBillingLib\Models\ItemCategory;

$walletProduct1 = WalletProduct1Builder::init()
    ->name('name8')
    ->description('description8')
    ->taxable(false)
    ->taxCode('tax_code6')
    ->accountingCode('accounting_code4')
    ->itemCategory(ItemCategory::ENUM_BUSINESS_SOFTWARE)
    ->build();
```

