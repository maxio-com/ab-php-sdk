
# Delayed Cancellation Response

## Structure

`DelayedCancellationResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `message` | `?string` | Optional | - | getMessage(): ?string | setMessage(?string message): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\DelayedCancellationResponseBuilder;

$delayedCancellationResponse = DelayedCancellationResponseBuilder::init()
    ->message('message4')
    ->build();
```

