
# Payment Method External Type

## Structure

`PaymentMethodExternalType`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `details` | `?string` | Optional | - | getDetails(): ?string | setDetails(?string details): void |
| `kind` | `?string` | Optional | - | getKind(): ?string | setKind(?string kind): void |
| `memo` | `?string` | Optional | - | getMemo(): ?string | setMemo(?string memo): void |
| `type` | `?string` | Optional | **Default**: `'external'` | getType(): ?string | setType(?string type): void |

## Example (as JSON)

```json
{
  "type": "external",
  "details": "details0",
  "kind": "kind8",
  "memo": "memo4"
}
```

