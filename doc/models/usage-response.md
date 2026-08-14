
# Usage Response

## Structure

`UsageResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `usage` | [`Usage`](../../doc/models/usage.md) | Required | - | getUsage(): Usage | setUsage(Usage usage): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\UsageResponseBuilder;
use AdvancedBillingLib\Models\Builders\UsageBuilder;
use AdvancedBillingLib\Utils\DateTimeHelper;

$usageResponse = UsageResponseBuilder::init(
    UsageBuilder::init()
        ->id(150)
        ->memo('memo2')
        ->createdAt(DateTimeHelper::fromRfc3339DateTime('2016-03-13T12:52:32.123Z'))
        ->pricePointId(28)
        ->quantity(
            28
        )
        ->build()
)->build();
```

