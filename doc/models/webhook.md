
# Webhook

## Structure

`Webhook`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `event` | `?string` | Optional | A string describing which event type produced the given webhook | getEvent(): ?string | setEvent(?string event): void |
| `id` | `?int` | Optional | The unique identifier for the webhook (unique across all of Chargify). This is not changed on a retry/replay of the same webhook, so it may be used to avoid duplicate action for the same event. | getId(): ?int | setId(?int id): void |
| `createdAt` | `?DateTime` | Optional | Timestamp indicating when the webhook was created | getCreatedAt(): ?\DateTime | setCreatedAt(?\DateTime createdAt): void |
| `lastError` | `?string` | Optional | Text describing the status code and/or error from the last failed attempt to send the Webhook. When a webhook is retried and accepted, this field will be cleared. | getLastError(): ?string | setLastError(?string lastError): void |
| `lastErrorAt` | `?DateTime` | Optional | Timestamp indicating when the last non-acceptance occurred. If a webhook is later resent and accepted, this field will be cleared. | getLastErrorAt(): ?\DateTime | setLastErrorAt(?\DateTime lastErrorAt): void |
| `acceptedAt` | `?DateTime` | Optional | Timestamp indicating when the webhook was accepted by the merchant endpoint. When a webhook is explicitly replayed by the merchant, this value will be cleared until it is accepted again. | getAcceptedAt(): ?\DateTime | setAcceptedAt(?\DateTime acceptedAt): void |
| `lastSentAt` | `?DateTime` | Optional | Timestamp indicating when the most recent attempt was made to send the webhook | getLastSentAt(): ?\DateTime | setLastSentAt(?\DateTime lastSentAt): void |
| `lastSentUrl` | `?string` | Optional | The url that the endpoint was last sent to. | getLastSentUrl(): ?string | setLastSentUrl(?string lastSentUrl): void |
| `successful` | `?bool` | Optional | “A boolean flag describing whether the webhook was accepted by the webhook endpoint for the most recent attempt. (Acceptance is defined by receiving a “200 OK” HTTP response within a reasonable timeframe, e.g., 15 seconds.)” | getSuccessful(): ?bool | setSuccessful(?bool successful): void |
| `body` | `?string` | Optional | The data sent within the webhook post | getBody(): ?string | setBody(?string body): void |
| `signature` | `?string` | Optional | The calculated webhook signature | getSignature(): ?string | setSignature(?string signature): void |
| `signatureHmacSha256` | `?string` | Optional | The calculated HMAC-SHA-256 webhook signature | getSignatureHmacSha256(): ?string | setSignatureHmacSha256(?string signatureHmacSha256): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\WebhookBuilder;
use AdvancedBillingLib\Utils\DateTimeHelper;

$webhook = WebhookBuilder::init()
    ->event('event2')
    ->id(18)
    ->createdAt(DateTimeHelper::fromRfc3339DateTime('2016-03-13T12:52:32.123Z'))
    ->lastError('last_error4')
    ->lastErrorAt(DateTimeHelper::fromRfc3339DateTime('2016-03-13T12:52:32.123Z'))
    ->build();
```

