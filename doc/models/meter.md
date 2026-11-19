
# Meter

The metering meter this wallet is paired with, or `null` for a wallet with no meter. Set on create and immutable afterward.

## Structure

`Meter`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?int` | Optional | - | getId(): ?int | setId(?int id): void |
| `name` | `?string` | Optional | - | getName(): ?string | setName(?string name): void |
| `handle` | `?string` | Optional | - | getHandle(): ?string | setHandle(?string handle): void |
| `conversionRate` | `?string` | Optional | How many wallet units one meter unit is worth, as a decimal string. Defaults to `"1.0"`. | getConversionRate(): ?string | setConversionRate(?string conversionRate): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\MeterBuilder;

$meter = MeterBuilder::init()
    ->id(198)
    ->name('name0')
    ->handle('handle6')
    ->conversionRate('conversion_rate2')
    ->build();
```

