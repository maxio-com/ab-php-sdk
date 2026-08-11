
# Create Prepayment Request

## Structure

`CreatePrepaymentRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `prepayment` | [`CreatePrepayment`](../../doc/models/create-prepayment.md) | Required | - | getPrepayment(): CreatePrepayment | setPrepayment(CreatePrepayment prepayment): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\CreatePrepaymentRequestBuilder;
use AdvancedBillingLib\Models\Builders\CreatePrepaymentBuilder;
use AdvancedBillingLib\Models\CreatePrepaymentMethod;

$createPrepaymentRequest = CreatePrepaymentRequestBuilder::init(
    CreatePrepaymentBuilder::init(
        11.6,
        'details8',
        'memo2',
        CreatePrepaymentMethod::MONEY_ORDER
    )
        ->paymentProfileId(240)
        ->build()
)->build();
```

