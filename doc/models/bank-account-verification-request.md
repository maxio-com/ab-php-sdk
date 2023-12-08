
# Bank Account Verification Request

## Structure

`BankAccountVerificationRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `bankAccountVerification` | [`BankAccountVerification`](../../doc/models/bank-account-verification.md) | Required | - | getBankAccountVerification(): BankAccountVerification | setBankAccountVerification(BankAccountVerification bankAccountVerification): void |

## Example (as JSON)

```json
{
  "bank_account_verification": {
    "deposit_1_in_cents": 244,
    "deposit_2_in_cents": 6
  }
}
```

