
# Create or Update Endpoint

Used to Create or Update Endpoint.

## Structure

`CreateOrUpdateEndpoint`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `url` | `string` | Required | - | getUrl(): string | setUrl(string url): void |
| `webhookSubscriptions` | [`string(WebhookSubscription)[]`](../../doc/models/webhook-subscription.md) | Required | - | getWebhookSubscriptions(): array | setWebhookSubscriptions(array webhookSubscriptions): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\CreateOrUpdateEndpointBuilder;
use AdvancedBillingLib\Models\WebhookSubscription;

$createOrUpdateEndpoint = CreateOrUpdateEndpointBuilder::init(
    'url4',
    [
        WebhookSubscription::TRIAL_END_NOTICE,
        WebhookSubscription::SUBSCRIPTION_STATE_CHANGE,
        WebhookSubscription::SUBSCRIPTION_PRODUCT_CHANGE_SCHEDULED
    ]
)->build();
```

