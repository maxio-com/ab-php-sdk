
# Create Prepayment Response

## Structure

`CreatePrepaymentResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `prepayment` | [`CreatedPrepayment`](../../doc/models/created-prepayment.md) | Required | - | getPrepayment(): CreatedPrepayment | setPrepayment(CreatedPrepayment prepayment): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\CreatePrepaymentResponseBuilder;
use AdvancedBillingLib\Models\Builders\CreatedPrepaymentBuilder;
use AdvancedBillingLib\Utils\DateTimeHelper;

$createPrepaymentResponse = CreatePrepaymentResponseBuilder::init(
    CreatedPrepaymentBuilder::init()
        ->id(38)
        ->subscriptionId(148)
        ->amountInCents(124)
        ->memo('memo2')
        ->createdAt(DateTimeHelper::fromRfc3339DateTime('2016-03-13T12:52:32.123Z'))
        ->build()
)->build();
```

