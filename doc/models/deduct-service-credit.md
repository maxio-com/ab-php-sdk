
# Deduct Service Credit

## Structure

`DeductServiceCredit`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `amount` | string\|float | Required | This is a container for one-of cases. | getAmount(): | setAmount( amount): void |
| `memo` | `?string` | Optional | - | getMemo(): ?string | setMemo(?string memo): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\DeductServiceCreditBuilder;

$deductServiceCredit = DeductServiceCreditBuilder::init(
    'String5'
)
    ->memo('memo6')
    ->build();
```

