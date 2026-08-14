
# Endpoint

## Structure

`Endpoint`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?int` | Optional | - | getId(): ?int | setId(?int id): void |
| `url` | `?string` | Optional | - | getUrl(): ?string | setUrl(?string url): void |
| `siteId` | `?int` | Optional | - | getSiteId(): ?int | setSiteId(?int siteId): void |
| `status` | `?string` | Optional | - | getStatus(): ?string | setStatus(?string status): void |
| `webhookSubscriptions` | `?(string[])` | Optional | - | getWebhookSubscriptions(): ?array | setWebhookSubscriptions(?array webhookSubscriptions): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\EndpointBuilder;

$endpoint = EndpointBuilder::init()
    ->id(202)
    ->url('url2')
    ->siteId(128)
    ->status('status0')
    ->webhookSubscriptions(
        [
            'webhook_subscriptions4'
        ]
    )
    ->build();
```

