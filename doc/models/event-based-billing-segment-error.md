
# Event Based Billing Segment Error

## Structure

`EventBasedBillingSegmentError`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `segments` | `array` | Required | The key of the object would be a number (an index in the request array) where the error occurred. In the value object, the key represents the field and the value is an array with error messages. In most cases, this object would contain just one key. | getSegments(): array | setSegments(array segments): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\EventBasedBillingSegmentErrorBuilder;
use AdvancedBillingLib\ApiHelper;

$eventBasedBillingSegmentError = EventBasedBillingSegmentErrorBuilder::init(
    [
        'key0' => ApiHelper::deserialize('{"key1":"val1","key2":"val2"}'),
        'key1' => ApiHelper::deserialize('{"key1":"val1","key2":"val2"}')
    ]
)->build();
```

