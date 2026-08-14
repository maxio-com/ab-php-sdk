
# Replay Webhooks Request

## Structure

`ReplayWebhooksRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `ids` | `int[]` | Required | - | getIds(): array | setIds(array ids): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\ReplayWebhooksRequestBuilder;

$replayWebhooksRequest = ReplayWebhooksRequestBuilder::init(
    [
        209,
        210,
        211
    ]
)->build();
```

