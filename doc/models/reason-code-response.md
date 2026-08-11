
# Reason Code Response

## Structure

`ReasonCodeResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `reasonCode` | [`ReasonCode`](../../doc/models/reason-code.md) | Required | - | getReasonCode(): ReasonCode | setReasonCode(ReasonCode reasonCode): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\ReasonCodeResponseBuilder;
use AdvancedBillingLib\Models\Builders\ReasonCodeBuilder;

$reasonCodeResponse = ReasonCodeResponseBuilder::init(
    ReasonCodeBuilder::init()
        ->id(240)
        ->siteId(166)
        ->code('code4')
        ->description('description6')
        ->position(14)
        ->build()
)->build();
```

