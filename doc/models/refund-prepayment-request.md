
# Refund Prepayment Request

## Structure

`RefundPrepaymentRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `refund` | [`RefundPrepayment`](../../doc/models/refund-prepayment.md) | Required | - | getRefund(): RefundPrepayment | setRefund(RefundPrepayment refund): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\RefundPrepaymentRequestBuilder;
use AdvancedBillingLib\Models\Builders\RefundPrepaymentBuilder;

$refundPrepaymentRequest = RefundPrepaymentRequestBuilder::init(
    RefundPrepaymentBuilder::init(
        'String1',
        'memo2'
    )
        ->amountInCents(132)
        ->external(false)
        ->build()
)->build();
```

