
# Scheduled Renewal Configuration

## Structure

`ScheduledRenewalConfiguration`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?int` | Optional | ID of the renewal. | getId(): ?int | setId(?int id): void |
| `siteId` | `?int` | Optional | ID of the site to which the renewal belongs. | getSiteId(): ?int | setSiteId(?int siteId): void |
| `subscriptionId` | `?int` | Optional | The id of the subscription. | getSubscriptionId(): ?int | setSubscriptionId(?int subscriptionId): void |
| `startsAt` | `?DateTime` | Optional | - | getStartsAt(): ?\DateTime | setStartsAt(?\DateTime startsAt): void |
| `endsAt` | `?DateTime` | Optional | - | getEndsAt(): ?\DateTime | setEndsAt(?\DateTime endsAt): void |
| `lockInAt` | `?DateTime` | Optional | - | getLockInAt(): ?\DateTime | setLockInAt(?\DateTime lockInAt): void |
| `createdAt` | `?DateTime` | Optional | - | getCreatedAt(): ?\DateTime | setCreatedAt(?\DateTime createdAt): void |
| `status` | `?string` | Optional | - | getStatus(): ?string | setStatus(?string status): void |
| `scheduledRenewalConfigurationItems` | [`?(ScheduledRenewalConfigurationItem[])`](../../doc/models/scheduled-renewal-configuration-item.md) | Optional | - | getScheduledRenewalConfigurationItems(): ?array | setScheduledRenewalConfigurationItems(?array scheduledRenewalConfigurationItems): void |
| `contract` | [`?Contract`](../../doc/models/contract.md) | Optional | Contract linked to the scheduled renewal configuration. | getContract(): ?Contract | setContract(?Contract contract): void |

## Example (as JSON)

```json
{
  "id": 152,
  "site_id": 78,
  "subscription_id": 6,
  "starts_at": "2016-03-13T12:52:32.123Z",
  "ends_at": "2016-03-13T12:52:32.123Z"
}
```

