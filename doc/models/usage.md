
# Usage

## Structure

`Usage`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?int` | Optional | **Constraints**: `>= 0` | getId(): ?int | setId(?int id): void |
| `memo` | `?string` | Optional | - | getMemo(): ?string | setMemo(?string memo): void |
| `createdAt` | `?DateTime` | Optional | - | getCreatedAt(): ?\DateTime | setCreatedAt(?\DateTime createdAt): void |
| `pricePointId` | `?int` | Optional | - | getPricePointId(): ?int | setPricePointId(?int pricePointId): void |
| `quantity` | int\|string\|null | Optional | This is a container for one-of cases. | getQuantity(): | setQuantity( quantity): void |
| `overageQuantity` | `?int` | Optional | - | getOverageQuantity(): ?int | setOverageQuantity(?int overageQuantity): void |
| `componentId` | `?int` | Optional | - | getComponentId(): ?int | setComponentId(?int componentId): void |
| `componentHandle` | `?string` | Optional | - | getComponentHandle(): ?string | setComponentHandle(?string componentHandle): void |
| `subscriptionId` | `?int` | Optional | - | getSubscriptionId(): ?int | setSubscriptionId(?int subscriptionId): void |

## Example (as JSON)

```json
{
  "id": 252,
  "memo": "memo8",
  "created_at": "2016-03-13T12:52:32.123Z",
  "price_point_id": 126,
  "quantity": 130
}
```

