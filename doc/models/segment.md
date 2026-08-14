
# Segment

## Structure

`Segment`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?int` | Optional | - | getId(): ?int | setId(?int id): void |
| `componentId` | `?int` | Optional | - | getComponentId(): ?int | setComponentId(?int componentId): void |
| `pricePointId` | `?int` | Optional | - | getPricePointId(): ?int | setPricePointId(?int pricePointId): void |
| `eventBasedBillingMetricId` | `?int` | Optional | - | getEventBasedBillingMetricId(): ?int | setEventBasedBillingMetricId(?int eventBasedBillingMetricId): void |
| `pricingScheme` | [`?string(PricingScheme)`](../../doc/models/pricing-scheme.md) | Optional | The identifier for the pricing scheme. See [Product Components](https://help.chargify.com/products/product-components.html) for an overview of pricing schemes. | getPricingScheme(): ?string | setPricingScheme(?string pricingScheme): void |
| `segmentProperty1Value` | string\|float\|int\|bool\|null | Optional | This is a container for one-of cases. | getSegmentProperty1Value(): | setSegmentProperty1Value( segmentProperty1Value): void |
| `segmentProperty2Value` | string\|float\|int\|bool\|null | Optional | This is a container for one-of cases. | getSegmentProperty2Value(): | setSegmentProperty2Value( segmentProperty2Value): void |
| `segmentProperty3Value` | string\|float\|int\|bool\|null | Optional | This is a container for one-of cases. | getSegmentProperty3Value(): | setSegmentProperty3Value( segmentProperty3Value): void |
| `segmentProperty4Value` | string\|float\|int\|bool\|null | Optional | This is a container for one-of cases. | getSegmentProperty4Value(): | setSegmentProperty4Value( segmentProperty4Value): void |
| `createdAt` | `?DateTime` | Optional | - | getCreatedAt(): ?\DateTime | setCreatedAt(?\DateTime createdAt): void |
| `updatedAt` | `?DateTime` | Optional | - | getUpdatedAt(): ?\DateTime | setUpdatedAt(?\DateTime updatedAt): void |
| `prices` | [`?(SegmentPrice[])`](../../doc/models/segment-price.md) | Optional | **Constraints**: *Minimum Items*: `1` | getPrices(): ?array | setPrices(?array prices): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\SegmentBuilder;
use AdvancedBillingLib\Models\PricingScheme;

$segment = SegmentBuilder::init()
    ->id(118)
    ->componentId(228)
    ->pricePointId(4)
    ->eventBasedBillingMetricId(56)
    ->pricingScheme(PricingScheme::STAIRSTEP)
    ->build();
```

