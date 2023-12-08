
# Movement

## Structure

`Movement`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `timestamp` | `?string` | Optional | - | getTimestamp(): ?string | setTimestamp(?string timestamp): void |
| `amountInCents` | `?int` | Optional | - | getAmountInCents(): ?int | setAmountInCents(?int amountInCents): void |
| `amountFormatted` | `?string` | Optional | - | getAmountFormatted(): ?string | setAmountFormatted(?string amountFormatted): void |
| `description` | `?string` | Optional | - | getDescription(): ?string | setDescription(?string description): void |
| `category` | `?string` | Optional | - | getCategory(): ?string | setCategory(?string category): void |
| `breakouts` | [`?Breakouts`](../../doc/models/breakouts.md) | Optional | - | getBreakouts(): ?Breakouts | setBreakouts(?Breakouts breakouts): void |
| `lineItems` | [`?(MovementLineItem[])`](../../doc/models/movement-line-item.md) | Optional | - | getLineItems(): ?array | setLineItems(?array lineItems): void |
| `subscriptionId` | `?int` | Optional | - | getSubscriptionId(): ?int | setSubscriptionId(?int subscriptionId): void |
| `subscriberName` | `?string` | Optional | - | getSubscriberName(): ?string | setSubscriberName(?string subscriberName): void |

## Example (as JSON)

```json
{
  "timestamp": "timestamp0",
  "amount_in_cents": 174,
  "amount_formatted": "amount_formatted4",
  "description": "description2",
  "category": "category0"
}
```

