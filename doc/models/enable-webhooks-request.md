
# Enable Webhooks Request

## Structure

`EnableWebhooksRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `webhooksEnabled` | `bool` | Required | - | getWebhooksEnabled(): bool | setWebhooksEnabled(bool webhooksEnabled): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\EnableWebhooksRequestBuilder;

$enableWebhooksRequest = EnableWebhooksRequestBuilder::init(
    false
)->build();
```

