
# Webhook Response

## Structure

`WebhookResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `webhook` | [`?Webhook`](../../doc/models/webhook.md) | Optional | - | getWebhook(): ?Webhook | setWebhook(?Webhook webhook): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\WebhookResponseBuilder;
use AdvancedBillingLib\Models\Builders\WebhookBuilder;
use AdvancedBillingLib\Utils\DateTimeHelper;

$webhookResponse = WebhookResponseBuilder::init()
    ->webhook(
        WebhookBuilder::init()
            ->event('event2')
            ->id(18)
            ->createdAt(DateTimeHelper::fromRfc3339DateTime('2016-03-13T12:52:32.123Z'))
            ->lastError('last_error4')
            ->lastErrorAt(DateTimeHelper::fromRfc3339DateTime('2016-03-13T12:52:32.123Z'))
            ->build()
    )
    ->build();
```

