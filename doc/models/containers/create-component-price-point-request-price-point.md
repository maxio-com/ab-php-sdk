
# Create Component Price Point Request Price Point

## Data Type

`CreateComponentPricePoint|CreatePrepaidUsageComponentPricePoint`

## Cases

| Type |
|  --- |
| [`CreateComponentPricePoint`](../../../doc/models/create-component-price-point.md) |
| [`CreatePrepaidUsageComponentPricePoint`](../../../doc/models/create-prepaid-usage-component-price-point.md) |

## CreateComponentPricePoint

### Initialization Code

#### Example

```php
$value = CreateComponentPricePointBuilder::init(
    'name0',
    PricingScheme::PER_UNIT,
    [
        PriceBuilder::init(
            242,
            23.26
        )->build()
    ]
)
    ->useSiteExchangeRate(true)
    ->build();
```

## CreatePrepaidUsageComponentPricePoint

### Initialization Code

#### Example

```php
$value = CreatePrepaidUsageComponentPricePointBuilder::init(
    'name0',
    PricingScheme::PER_UNIT,
    [
        PriceBuilder::init(
            242,
            23.26
        )->build()
    ],
    OveragePricingBuilder::init(
        PricingScheme::STAIRSTEP
    )->build()
)
    ->useSiteExchangeRate(true)
    ->build();
```

