
# Proforma Custom Field

## Structure

`ProformaCustomField`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `ownerId` | `?int` | Optional | - | getOwnerId(): ?int | setOwnerId(?int ownerId): void |
| `ownerType` | `?string` | Optional | **Constraints**: *Minimum Length*: `1` | getOwnerType(): ?string | setOwnerType(?string ownerType): void |
| `name` | `?string` | Optional | **Constraints**: *Minimum Length*: `1` | getName(): ?string | setName(?string name): void |
| `value` | `?string` | Optional | **Constraints**: *Minimum Length*: `1` | getValue(): ?string | setValue(?string value): void |
| `metadatumId` | `?int` | Optional | - | getMetadatumId(): ?int | setMetadatumId(?int metadatumId): void |

## Example (as JSON)

```json
{
  "owner_id": 224,
  "owner_type": "owner_type0",
  "name": "name8",
  "value": "value0",
  "metadatum_id": 224
}
```

