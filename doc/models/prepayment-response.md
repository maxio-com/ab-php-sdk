
# Prepayment Response

## Structure

`PrepaymentResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `prepayment` | [`Prepayment`](../../doc/models/prepayment.md) | Required | - | getPrepayment(): Prepayment | setPrepayment(Prepayment prepayment): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\PrepaymentResponseBuilder;
use AdvancedBillingLib\Models\Builders\PrepaymentBuilder;
use AdvancedBillingLib\Utils\DateTimeHelper;
use AdvancedBillingLib\Models\PrepaymentMethod;

$prepaymentResponse = PrepaymentResponseBuilder::init(
    PrepaymentBuilder::init(
        38,
        148,
        124,
        182,
        false,
        'memo2',
        DateTimeHelper::fromRfc3339DateTimeRequired('2016-03-13T12:52:32.123Z')
    )
        ->refundedAmountInCents(132)
        ->details('details8')
        ->paymentType(PrepaymentMethod::CREDIT_CARD)
        ->build()
)->build();
```

