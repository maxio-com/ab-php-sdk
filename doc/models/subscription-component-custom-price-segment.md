
# Subscription Component Custom Price Segment

Custom rates for one segment of an event-based component, set on the subscription through `custom_price.segments`.

Identify the segment by the property values that occur in your events, in the same positions as the segmenting properties defined on the component's meter. Each segment in a request must have a unique combination of property values.

Property values are matched against your events as text. Send values for boolean segmenting properties as the strings `"true"` and `"false"`: JSON booleans are not supported here, and a segment whose only property value is `false` is rejected with a 422.

## Structure

`SubscriptionComponentCustomPriceSegment`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `segmentProperty1Value` | string\|float\|int\|null | Optional | This is a container for one-of cases. | getSegmentProperty1Value(): | setSegmentProperty1Value( segmentProperty1Value): void |
| `segmentProperty2Value` | string\|float\|int\|null | Optional | This is a container for one-of cases. | getSegmentProperty2Value(): | setSegmentProperty2Value( segmentProperty2Value): void |
| `segmentProperty3Value` | string\|float\|int\|null | Optional | This is a container for one-of cases. | getSegmentProperty3Value(): | setSegmentProperty3Value( segmentProperty3Value): void |
| `segmentProperty4Value` | string\|float\|int\|null | Optional | This is a container for one-of cases. | getSegmentProperty4Value(): | setSegmentProperty4Value( segmentProperty4Value): void |
| `segmentProperty5Value` | string\|float\|int\|null | Optional | This is a container for one-of cases. | getSegmentProperty5Value(): | setSegmentProperty5Value( segmentProperty5Value): void |
| `segmentProperty6Value` | string\|float\|int\|null | Optional | This is a container for one-of cases. | getSegmentProperty6Value(): | setSegmentProperty6Value( segmentProperty6Value): void |
| `segmentProperty7Value` | string\|float\|int\|null | Optional | This is a container for one-of cases. | getSegmentProperty7Value(): | setSegmentProperty7Value( segmentProperty7Value): void |
| `segmentProperty8Value` | string\|float\|int\|null | Optional | This is a container for one-of cases. | getSegmentProperty8Value(): | setSegmentProperty8Value( segmentProperty8Value): void |
| `segmentProperty9Value` | string\|float\|int\|null | Optional | This is a container for one-of cases. | getSegmentProperty9Value(): | setSegmentProperty9Value( segmentProperty9Value): void |
| `segmentProperty10Value` | string\|float\|int\|null | Optional | This is a container for one-of cases. | getSegmentProperty10Value(): | setSegmentProperty10Value( segmentProperty10Value): void |
| `pricingScheme` | [`string(PricingScheme)`](../../doc/models/pricing-scheme.md) | Required | The identifier for the pricing scheme. See [Product Components](https://help.chargify.com/products/product-components.html) for an overview of pricing schemes. | getPricingScheme(): string | setPricingScheme(string pricingScheme): void |
| `prices` | [`CreateOrUpdateSegmentPrice[]`](../../doc/models/create-or-update-segment-price.md) | Required | The rates for this segment. Use one price for a flat rate, or several price brackets for a tiered, volume or stairstep scheme.<br><br>**Constraints**: *Minimum Items*: `1` | getPrices(): array | setPrices(array prices): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\SubscriptionComponentCustomPriceSegmentBuilder;
use AdvancedBillingLib\Models\PricingScheme;
use AdvancedBillingLib\Models\Builders\CreateOrUpdateSegmentPriceBuilder;

$subscriptionComponentCustomPriceSegment = SubscriptionComponentCustomPriceSegmentBuilder::init(
    PricingScheme::PER_UNIT,
    [
        CreateOrUpdateSegmentPriceBuilder::init(
            'String3'
        )
            ->startingQuantity(64)
            ->endingQuantity(38)
            ->build()
    ]
)
    ->segmentProperty1Value(
        'String3'
    )
    ->segmentProperty2Value(
        'String5'
    )
    ->segmentProperty3Value(
        'String3'
    )
    ->segmentProperty4Value(
        'String7'
    )
    ->segmentProperty5Value(
        'String7'
    )
    ->build();
```

