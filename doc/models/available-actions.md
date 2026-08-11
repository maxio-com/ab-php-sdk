
# Available Actions

## Structure

`AvailableActions`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `sendEmail` | [`?SendEmail`](../../doc/models/send-email.md) | Optional | - | getSendEmail(): ?SendEmail | setSendEmail(?SendEmail sendEmail): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\AvailableActionsBuilder;
use AdvancedBillingLib\Models\Builders\SendEmailBuilder;

$availableActions = AvailableActionsBuilder::init()
    ->sendEmail(
        SendEmailBuilder::init(
            false,
            'url0'
        )->build()
    )->build();
```

