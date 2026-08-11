
# Bank Account Verification

## Structure

`BankAccountVerification`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `deposit1InCents` | `?int` | Optional | - | getDeposit1InCents(): ?int | setDeposit1InCents(?int deposit1InCents): void |
| `deposit2InCents` | `?int` | Optional | - | getDeposit2InCents(): ?int | setDeposit2InCents(?int deposit2InCents): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\BankAccountVerificationBuilder;

$bankAccountVerification = BankAccountVerificationBuilder::init()
    ->deposit1InCents(248)
    ->deposit2InCents(10)
    ->build();
```

