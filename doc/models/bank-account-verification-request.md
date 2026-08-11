
# Bank Account Verification Request

## Structure

`BankAccountVerificationRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `bankAccountVerification` | [`BankAccountVerification`](../../doc/models/bank-account-verification.md) | Required | - | getBankAccountVerification(): BankAccountVerification | setBankAccountVerification(BankAccountVerification bankAccountVerification): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\BankAccountVerificationRequestBuilder;
use AdvancedBillingLib\Models\Builders\BankAccountVerificationBuilder;

$bankAccountVerificationRequest = BankAccountVerificationRequestBuilder::init(
    BankAccountVerificationBuilder::init()
        ->deposit1InCents(244)
        ->deposit2InCents(6)
        ->build()
)->build();
```

