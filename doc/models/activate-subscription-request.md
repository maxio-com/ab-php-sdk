
# Activate Subscription Request

## Structure

`ActivateSubscriptionRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `revertOnFailure` | `?bool` | Optional | You may choose how to handle the activation failure. `true` means do not change the subscription’s state and billing period. `false` means to continue through with the activation and enter an end-of-life state. If this parameter is omitted or `null` is passed it will default to the value set in the site settings (default: `true`). | getRevertOnFailure(): ?bool | setRevertOnFailure(?bool revertOnFailure): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\ActivateSubscriptionRequestBuilder;

$activateSubscriptionRequest = ActivateSubscriptionRequestBuilder::init()
    ->revertOnFailure(false)
    ->build();
```

