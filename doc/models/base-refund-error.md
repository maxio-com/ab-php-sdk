
# Base Refund Error

## Structure

`BaseRefundError`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `base` | `?(array[])` | Optional | - | getBase(): ?array | setBase(?array base): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\BaseRefundErrorBuilder;
use AdvancedBillingLib\ApiHelper;

$baseRefundError = BaseRefundErrorBuilder::init()
    ->base(
        [
            ApiHelper::deserialize('{"key1":"val1","key2":"val2"}'),
            ApiHelper::deserialize('{"key1":"val1","key2":"val2"}')
        ]
    )
    ->build();
```

