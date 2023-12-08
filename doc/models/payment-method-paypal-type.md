
# Payment Method Paypal Type

## Structure

`PaymentMethodPaypalType`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `email` | `?string` | Optional | - | getEmail(): ?string | setEmail(?string email): void |
| `type` | `?string` | Optional | **Default**: `'paypal_account'` | getType(): ?string | setType(?string type): void |

## Example (as JSON)

```json
{
  "type": "paypal_account",
  "email": "email4"
}
```

