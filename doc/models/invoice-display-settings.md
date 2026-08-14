
# Invoice Display Settings

## Structure

`InvoiceDisplaySettings`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `hideZeroSubtotalLines` | `?bool` | Optional | - | getHideZeroSubtotalLines(): ?bool | setHideZeroSubtotalLines(?bool hideZeroSubtotalLines): void |
| `includeDiscountsOnLines` | `?bool` | Optional | - | getIncludeDiscountsOnLines(): ?bool | setIncludeDiscountsOnLines(?bool includeDiscountsOnLines): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\InvoiceDisplaySettingsBuilder;

$invoiceDisplaySettings = InvoiceDisplaySettingsBuilder::init()
    ->hideZeroSubtotalLines(false)
    ->includeDiscountsOnLines(false)
    ->build();
```

