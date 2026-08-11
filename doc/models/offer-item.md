
# Offer Item

## Structure

`OfferItem`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `componentId` | `?int` | Optional | - | getComponentId(): ?int | setComponentId(?int componentId): void |
| `pricePointId` | `?int` | Optional | - | getPricePointId(): ?int | setPricePointId(?int pricePointId): void |
| `startingQuantity` | `?string` | Optional | - | getStartingQuantity(): ?string | setStartingQuantity(?string startingQuantity): void |
| `editable` | `?bool` | Optional | - | getEditable(): ?bool | setEditable(?bool editable): void |
| `componentUnitPrice` | `?string` | Optional | - | getComponentUnitPrice(): ?string | setComponentUnitPrice(?string componentUnitPrice): void |
| `componentName` | `?string` | Optional | - | getComponentName(): ?string | setComponentName(?string componentName): void |
| `pricePointName` | `?string` | Optional | - | getPricePointName(): ?string | setPricePointName(?string pricePointName): void |
| `currencyPrices` | [`?(CurrencyPrice[])`](../../doc/models/currency-price.md) | Optional | - | getCurrencyPrices(): ?array | setCurrencyPrices(?array currencyPrices): void |
| `interval` | `?int` | Optional | The numerical interval. e.g., an interval of '30' coupled with an interval_unit of day would mean this component price point would renew every 30 days. This property is only available for sites with Multifrequency enabled. | getInterval(): ?int | setInterval(?int interval): void |
| `intervalUnit` | [`?string(IntervalUnit)`](../../doc/models/interval-unit.md) | Optional | A string representing the interval unit for this component price point, either month or day. This property is only available for sites with Multifrequency enabled. | getIntervalUnit(): ?string | setIntervalUnit(?string intervalUnit): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\OfferItemBuilder;

$offerItem = OfferItemBuilder::init()
    ->componentId(234)
    ->pricePointId(254)
    ->startingQuantity('starting_quantity6')
    ->editable(false)
    ->componentUnitPrice('component_unit_price2')
    ->build();
```

