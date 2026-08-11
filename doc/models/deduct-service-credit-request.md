
# Deduct Service Credit Request

## Structure

`DeductServiceCreditRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `deduction` | [`DeductServiceCredit`](../../doc/models/deduct-service-credit.md) | Required | - | getDeduction(): DeductServiceCredit | setDeduction(DeductServiceCredit deduction): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\DeductServiceCreditRequestBuilder;
use AdvancedBillingLib\Models\Builders\DeductServiceCreditBuilder;

$deductServiceCreditRequest = DeductServiceCreditRequestBuilder::init(
    DeductServiceCreditBuilder::init(
        'String9'
    )
        ->memo('memo0')
        ->build()
)->build();
```

