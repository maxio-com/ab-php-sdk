
# Proration

## Structure

`Proration`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `preservePeriod` | `?bool` | Optional | The alternative to sending preserve_period as a direct attribute to migration | getPreservePeriod(): ?bool | setPreservePeriod(?bool preservePeriod): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\ProrationBuilder;

$proration = ProrationBuilder::init()
    ->preservePeriod(false)
    ->build();
```

