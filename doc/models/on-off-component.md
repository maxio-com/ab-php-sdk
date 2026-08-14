
# On Off Component

## Structure

`OnOffComponent`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `name` | `string` | Required | A name for this component that is suitable for showing customers and displaying on billing statements, e.g., "Minutes". | getName(): string | setName(string name): void |
| `description` | `?string` | Optional | A description for the component that will be displayed to the user on the hosted signup page. | getDescription(): ?string | setDescription(?string description): void |
| `handle` | `?string` | Optional | A unique identifier for your use that can be used to retrieve this component in subsequent requests. Must start with a letter or number and may only contain lowercase letters, numbers, or the characters '.', ':', '-', or '_'.<br><br>**Constraints**: *Pattern*: `^[a-z0-9][a-z0-9\-_:.]*$` | getHandle(): ?string | setHandle(?string handle): void |
| `taxable` | `?bool` | Optional | Boolean flag describing whether a component is taxable or not. | getTaxable(): ?bool | setTaxable(?bool taxable): void |
| `upgradeCharge` | [`?string(CreditType)`](../../doc/models/credit-type.md) | Optional | The type of credit to be created when upgrading/downgrading. Defaults to the component and then site setting if one is not provided. | getUpgradeCharge(): ?string | setUpgradeCharge(?string upgradeCharge): void |
| `downgradeCredit` | [`?string(CreditType)`](../../doc/models/credit-type.md) | Optional | The type of credit to be created when upgrading/downgrading. Defaults to the component and then site setting if one is not provided. | getDowngradeCredit(): ?string | setDowngradeCredit(?string downgradeCredit): void |
| `pricePoints` | [`?(ComponentPricePointItem[])`](../../doc/models/component-price-point-item.md) | Optional | - | getPricePoints(): ?array | setPricePoints(?array pricePoints): void |
| `unitPrice` | string\|float | Required | This is a container for one-of cases. | getUnitPrice(): | setUnitPrice( unitPrice): void |
| `taxCode` | `?string` | Optional | A string representing the tax code related to the component type. This is especially important when using AvaTax to tax based on locale. This attribute has a max length of 25 characters. | getTaxCode(): ?string | setTaxCode(?string taxCode): void |
| `hideDateRangeOnInvoice` | `?bool` | Optional | (Only available on Relationship Invoicing sites) Boolean flag describing if the service date range should show for the component on generated invoices. | getHideDateRangeOnInvoice(): ?bool | setHideDateRangeOnInvoice(?bool hideDateRangeOnInvoice): void |
| `displayOnHostedPage` | `?bool` | Optional | - | getDisplayOnHostedPage(): ?bool | setDisplayOnHostedPage(?bool displayOnHostedPage): void |
| `allowFractionalQuantities` | `?bool` | Optional | - | getAllowFractionalQuantities(): ?bool | setAllowFractionalQuantities(?bool allowFractionalQuantities): void |
| `publicSignupPageIds` | `?(int[])` | Optional | - | getPublicSignupPageIds(): ?array | setPublicSignupPageIds(?array publicSignupPageIds): void |
| `interval` | `?int` | Optional | The numerical interval. e.g., an interval of ‘30’ coupled with an interval_unit of day would mean this component's default price point would renew every 30 days. This property is only available for sites with Multifrequency enabled. | getInterval(): ?int | setInterval(?int interval): void |
| `intervalUnit` | [`?string(IntervalUnit)`](../../doc/models/interval-unit.md) | Optional | A string representing the interval unit for this component's default price point, either month or day. This property is only available for sites with Multifrequency enabled. | getIntervalUnit(): ?string | setIntervalUnit(?string intervalUnit): void |
| `unspscCode` | `?string` | Optional | (Optional) Custom UNSPSC commodity code for Level 3/CEDP payment data. When set, this value is sent as the commodity code on invoice line items for this component instead of the default derived from item_category. | getUnspscCode(): ?string | setUnspscCode(?string unspscCode): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\OnOffComponentBuilder;
use AdvancedBillingLib\Models\CreditType;

$onOffComponent = OnOffComponentBuilder::init(
    'name0',
    'String9'
)
    ->description('description0')
    ->handle('handle6')
    ->taxable(false)
    ->upgradeCharge(CreditType::FULL)
    ->downgradeCredit(CreditType::FULL)
    ->build();
```

