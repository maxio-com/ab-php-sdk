
# Component Cost Data

## Structure

`ComponentCostData`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `componentCodeId` | `?int` | Optional | - | getComponentCodeId(): ?int | setComponentCodeId(?int componentCodeId): void |
| `pricePointId` | `?int` | Optional | - | getPricePointId(): ?int | setPricePointId(?int pricePointId): void |
| `productId` | `?int` | Optional | - | getProductId(): ?int | setProductId(?int productId): void |
| `quantity` | `?string` | Optional | - | getQuantity(): ?string | setQuantity(?string quantity): void |
| `amount` | `?string` | Optional | - | getAmount(): ?string | setAmount(?string amount): void |
| `pricingScheme` | [`?string(PricingScheme)`](../../doc/models/pricing-scheme.md) | Optional | The identifier for the pricing scheme. See [Product Components](https://help.chargify.com/products/product-components.html) for an overview of pricing schemes. | getPricingScheme(): ?string | setPricingScheme(?string pricingScheme): void |
| `tiers` | [`?(ComponentCostDataRateTier[])`](../../doc/models/component-cost-data-rate-tier.md) | Optional | - | getTiers(): ?array | setTiers(?array tiers): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\ComponentCostDataBuilder;

$componentCostData = ComponentCostDataBuilder::init()
    ->componentCodeId(40)
    ->pricePointId(210)
    ->productId(18)
    ->quantity('quantity4')
    ->amount('amount0')
    ->build();
```

