
# Create Reason Code Request

## Structure

`CreateReasonCodeRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `reasonCode` | [`CreateReasonCode`](../../doc/models/create-reason-code.md) | Required | - | getReasonCode(): CreateReasonCode | setReasonCode(CreateReasonCode reasonCode): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\CreateReasonCodeRequestBuilder;
use AdvancedBillingLib\Models\Builders\CreateReasonCodeBuilder;

$createReasonCodeRequest = CreateReasonCodeRequestBuilder::init(
    CreateReasonCodeBuilder::init(
        'code4',
        'description6'
    )
        ->position(14)
        ->build()
)->build();
```

