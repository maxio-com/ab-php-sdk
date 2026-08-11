
# Update Reason Code Request

## Structure

`UpdateReasonCodeRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `reasonCode` | [`UpdateReasonCode`](../../doc/models/update-reason-code.md) | Required | - | getReasonCode(): UpdateReasonCode | setReasonCode(UpdateReasonCode reasonCode): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\UpdateReasonCodeRequestBuilder;
use AdvancedBillingLib\Models\Builders\UpdateReasonCodeBuilder;

$updateReasonCodeRequest = UpdateReasonCodeRequestBuilder::init(
    UpdateReasonCodeBuilder::init()
        ->code('code4')
        ->description('description6')
        ->position(14)
        ->build()
)->build();
```

