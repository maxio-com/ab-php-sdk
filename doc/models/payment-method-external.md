
# Payment Method External

## Structure

`PaymentMethodExternal`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `details` | `?string` | Required | - | getDetails(): ?string | setDetails(?string details): void |
| `kind` | `string` | Required | - | getKind(): string | setKind(string kind): void |
| `memo` | `?string` | Required | - | getMemo(): ?string | setMemo(?string memo): void |
| `type` | [`string(InvoiceEventPaymentMethod)`](../../doc/models/invoice-event-payment-method.md) | Required | - | getType(): string | setType(string type): void |

## Example (as JSON)

```json
{
  "details": "details4",
  "kind": "kind2",
  "memo": "memo8",
  "type": "bank_account"
}
```

