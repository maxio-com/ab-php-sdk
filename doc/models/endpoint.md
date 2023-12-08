
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

## Example (as JSON)

```json
{
  "id": 196,
  "url": "url2",
  "site_id": 122,
  "status": "status0",
  "webhook_subscriptions": [
    "webhook_subscriptions4",
    "webhook_subscriptions3"
  ]
}
```

