
# Update Endpoint

Used to Create or Update Endpoint

## Structure

`UpdateEndpoint`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `url` | `string` | Required | - | getUrl(): string | setUrl(string url): void |
| `webhookSubscriptions` | [`string(WebhookSubscription)[]`](../../doc/models/webhook-subscription.md) | Required | - | getWebhookSubscriptions(): array | setWebhookSubscriptions(array webhookSubscriptions): void |

## Example (as JSON)

```json
{
  "url": "url8",
  "webhook_subscriptions": [
    "payment_success"
  ]
}
```

