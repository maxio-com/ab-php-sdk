
# Payment Method Paypal Type

## Structure

`PaymentMethodPaypalType`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `email` | `string` | Required | - | getEmail(): string | setEmail(string email): void |
| `type` | `string` | Required | **Default**: `'paypal_account'` | getType(): string | setType(string type): void |

## Example (as JSON)

```json
{
  "email": "email4",
  "type": "paypal_account"
}
```

