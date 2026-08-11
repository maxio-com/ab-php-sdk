
# Bank Account Response

## Structure

`BankAccountResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `paymentProfile` | [`BankAccountPaymentProfile`](../../doc/models/bank-account-payment-profile.md) | Required | - | getPaymentProfile(): BankAccountPaymentProfile | setPaymentProfile(BankAccountPaymentProfile paymentProfile): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\BankAccountResponseBuilder;
use AdvancedBillingLib\Models\Builders\BankAccountPaymentProfileBuilder;
use AdvancedBillingLib\Models\PaymentType;
use AdvancedBillingLib\Models\BankAccountVault;

$bankAccountResponse = BankAccountResponseBuilder::init(
    BankAccountPaymentProfileBuilder::init(
        PaymentType::BANK_ACCOUNT
    )
        ->id(44)
        ->firstName('first_name4')
        ->lastName('last_name2')
        ->customerId(82)
        ->currentVault(BankAccountVault::AUTHORIZENET)
        ->verified(false)
        ->build()
)->build();
```

