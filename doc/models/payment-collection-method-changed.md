
# Payment Collection Method Changed

## Structure

`PaymentCollectionMethodChanged`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `previousValue` | `string` | Required | - | getPreviousValue(): string | setPreviousValue(string previousValue): void |
| `currentValue` | `string` | Required | - | getCurrentValue(): string | setCurrentValue(string currentValue): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\PaymentCollectionMethodChangedBuilder;

$paymentCollectionMethodChanged = PaymentCollectionMethodChangedBuilder::init(
    'previous_value4',
    'current_value2'
)->build();
```

