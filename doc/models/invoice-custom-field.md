
# Invoice Custom Field

## Structure

`InvoiceCustomField`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `name` | `?string` | Optional | - | getName(): ?string | setName(?string name): void |
| `value` | `?string` | Optional | - | getValue(): ?string | setValue(?string value): void |
| `ownerId` | `?int` | Optional | - | getOwnerId(): ?int | setOwnerId(?int ownerId): void |
| `ownerType` | `?string` | Optional | - | getOwnerType(): ?string | setOwnerType(?string ownerType): void |

## Example (as JSON)

```json
{
  "name": "name0",
  "value": "value2",
  "owner_id": 142,
  "owner_type": "owner_type2"
}
```

