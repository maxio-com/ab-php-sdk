
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

## Example (as JSON)

```json
{
  "component_id": 216,
  "price_point_id": 16,
  "starting_quantity": "starting_quantity0",
  "editable": false,
  "component_unit_price": "component_unit_price8"
}
```

