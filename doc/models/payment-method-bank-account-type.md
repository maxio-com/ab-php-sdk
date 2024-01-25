
# Payment Method Bank Account Type

## Structure

`PaymentMethodBankAccountType`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `maskedAccountNumber` | `string` | Required | - | getMaskedAccountNumber(): string | setMaskedAccountNumber(string maskedAccountNumber): void |
| `maskedRoutingNumber` | `string` | Required | - | getMaskedRoutingNumber(): string | setMaskedRoutingNumber(string maskedRoutingNumber): void |
| `type` | `string` | Required | **Default**: `'bank_account'` | getType(): string | setType(string type): void |

## Example (as JSON)

```json
{
  "masked_account_number": "masked_account_number2",
  "masked_routing_number": "masked_routing_number2",
  "type": "bank_account"
}
```

