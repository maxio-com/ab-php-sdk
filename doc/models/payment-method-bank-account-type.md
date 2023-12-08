
# Payment Method Bank Account Type

## Structure

`PaymentMethodBankAccountType`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `maskedAccountNumber` | `?string` | Optional | - | getMaskedAccountNumber(): ?string | setMaskedAccountNumber(?string maskedAccountNumber): void |
| `maskedRoutingNumber` | `?string` | Optional | - | getMaskedRoutingNumber(): ?string | setMaskedRoutingNumber(?string maskedRoutingNumber): void |
| `type` | `?string` | Optional | **Default**: `'bank_account'` | getType(): ?string | setType(?string type): void |

## Example (as JSON)

```json
{
  "type": "bank_account",
  "masked_account_number": "masked_account_number2",
  "masked_routing_number": "masked_routing_number2"
}
```

