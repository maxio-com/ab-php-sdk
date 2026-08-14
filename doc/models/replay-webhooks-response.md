
# Replay Webhooks Response

## Structure

`ReplayWebhooksResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `status` | `?string` | Optional | - | getStatus(): ?string | setStatus(?string status): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\ReplayWebhooksResponseBuilder;

$replayWebhooksResponse = ReplayWebhooksResponseBuilder::init()
    ->status('status6')
    ->build();
```

