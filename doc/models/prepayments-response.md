
# Prepayments Response

## Structure

`PrepaymentsResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `prepayments` | [`?(Prepayment[])`](../../doc/models/prepayment.md) | Optional | **Constraints**: *Unique Items Required* | getPrepayments(): ?array | setPrepayments(?array prepayments): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\PrepaymentsResponseBuilder;
use AdvancedBillingLib\Models\Builders\PrepaymentBuilder;
use AdvancedBillingLib\Utils\DateTimeHelper;
use AdvancedBillingLib\Models\PrepaymentMethod;

$prepaymentsResponse = PrepaymentsResponseBuilder::init()
    ->prepayments(
        [
            PrepaymentBuilder::init(
                76,
                186,
                94,
                220,
                false,
                'memo0',
                DateTimeHelper::fromRfc3339DateTimeRequired('2016-03-13T12:52:32.123Z')
            )
                ->refundedAmountInCents(170)
                ->details('details6')
                ->paymentType(PrepaymentMethod::CASH)
                ->build()
        ]
    )
    ->build();
```

