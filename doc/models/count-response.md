
# Count Response

## Structure

`CountResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `count` | `?int` | Optional | - | getCount(): ?int | setCount(?int count): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\CountResponseBuilder;

$countResponse = CountResponseBuilder::init()
    ->count(56)
    ->build();
```

