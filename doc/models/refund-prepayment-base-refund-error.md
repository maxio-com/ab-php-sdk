
# Refund Prepayment Base Refund Error

## Structure

`RefundPrepaymentBaseRefundError`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `refund` | [`?BaseRefundError`](../../doc/models/base-refund-error.md) | Optional | - | getRefund(): ?BaseRefundError | setRefund(?BaseRefundError refund): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\RefundPrepaymentBaseRefundErrorBuilder;
use AdvancedBillingLib\Models\Builders\BaseRefundErrorBuilder;
use AdvancedBillingLib\ApiHelper;

$refundPrepaymentBaseRefundError = RefundPrepaymentBaseRefundErrorBuilder::init()
    ->refund(
        BaseRefundErrorBuilder::init()
            ->base(
                [
                    ApiHelper::deserialize('{"key1":"val1","key2":"val2"}')
                ]
            )
            ->build()
    )
    ->build();
```

