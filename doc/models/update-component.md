
# Update Component

## Structure

`UpdateComponent`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `handle` | `?string` | Optional | - | getHandle(): ?string | setHandle(?string handle): void |
| `name` | `?string` | Optional | The name of the Component, suitable for display on statements. e.g., Text Messages. | getName(): ?string | setName(?string name): void |
| `description` | `?string` | Optional | The description of the component. | getDescription(): ?string | setDescription(?string description): void |
| `accountingCode` | `?string` | Optional | - | getAccountingCode(): ?string | setAccountingCode(?string accountingCode): void |
| `taxable` | `?bool` | Optional | Boolean flag describing whether a component is taxable or not. | getTaxable(): ?bool | setTaxable(?bool taxable): void |
| `taxCode` | `?string` | Optional | A string representing the tax code related to the component type. This is especially important when using AvaTax to tax based on locale. This attribute has a max length of 25 characters. | getTaxCode(): ?string | setTaxCode(?string taxCode): void |
| `itemCategory` | [`?string(ItemCategory)`](../../doc/models/item-category.md) | Optional | One of the following: Business Software, Consumer Software, Digital Services, Physical Goods, Other | getItemCategory(): ?string | setItemCategory(?string itemCategory): void |
| `displayOnHostedPage` | `?bool` | Optional | - | getDisplayOnHostedPage(): ?bool | setDisplayOnHostedPage(?bool displayOnHostedPage): void |
| `upgradeCharge` | [`?string(CreditType)`](../../doc/models/credit-type.md) | Optional | The type of credit to be created when upgrading/downgrading. Defaults to the component and then site setting if one is not provided. | getUpgradeCharge(): ?string | setUpgradeCharge(?string upgradeCharge): void |
| `unspscCode` | `?string` | Optional | (Optional) Custom UNSPSC commodity code for Level 3/CEDP payment data. When set, this value is sent as the commodity code on invoice line items for this component instead of the default derived from item_category. | getUnspscCode(): ?string | setUnspscCode(?string unspscCode): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\UpdateComponentBuilder;
use AdvancedBillingLib\Models\ItemCategory;

$updateComponent = UpdateComponentBuilder::init()
    ->handle('handle4')
    ->name('name8')
    ->description('description8')
    ->accountingCode('accounting_code4')
    ->taxable(false)
    ->itemCategory(ItemCategory::ENUM_BUSINESS_SOFTWARE)
    ->build();
```

