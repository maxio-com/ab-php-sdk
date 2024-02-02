
# Invoice Custom Field

## Structure

`InvoiceCustomField`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `ownerId` | `?int` | Optional | - | getOwnerId(): ?int | setOwnerId(?int ownerId): void |
| `ownerType` | [`?string(CustomFieldOwner)`](../../doc/models/custom-field-owner.md) | Optional | - | getOwnerType(): ?string | setOwnerType(?string ownerType): void |
| `name` | `?string` | Optional | **Constraints**: *Minimum Length*: `1` | getName(): ?string | setName(?string name): void |
| `value` | `?string` | Optional | **Constraints**: *Minimum Length*: `1` | getValue(): ?string | setValue(?string value): void |
| `metadatumId` | `?int` | Optional | - | getMetadatumId(): ?int | setMetadatumId(?int metadatumId): void |

## Example (as JSON)

```json
{
  "owner_id": 142,
  "owner_type": "Customer",
  "name": "name0",
  "value": "value2",
  "metadatum_id": 142
}
```

