
# Payment Method External Type

## Structure

`PaymentMethodExternalType`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `details` | `string` | Required | - | getDetails(): string | setDetails(string details): void |
| `kind` | `string` | Required | - | getKind(): string | setKind(string kind): void |
| `memo` | `string` | Required | - | getMemo(): string | setMemo(string memo): void |
| `type` | `string` | Required | **Default**: `'external'` | getType(): string | setType(string type): void |

## Example (as JSON)

```json
{
  "details": "details0",
  "kind": "kind8",
  "memo": "memo4",
  "type": "external"
}
```

