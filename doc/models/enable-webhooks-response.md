
# Enable Webhooks Response

## Structure

`EnableWebhooksResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `webhooksEnabled` | `?bool` | Optional | - | getWebhooksEnabled(): ?bool | setWebhooksEnabled(?bool webhooksEnabled): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\EnableWebhooksResponseBuilder;

$enableWebhooksResponse = EnableWebhooksResponseBuilder::init()
    ->webhooksEnabled(false)
    ->build();
```

