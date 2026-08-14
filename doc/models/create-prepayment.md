
# Create Prepayment

## Structure

`CreatePrepayment`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `amount` | `float` | Required | - | getAmount(): float | setAmount(float amount): void |
| `details` | `string` | Required | - | getDetails(): string | setDetails(string details): void |
| `memo` | `string` | Required | - | getMemo(): string | setMemo(string memo): void |
| `method` | [`string(CreatePrepaymentMethod)`](../../doc/models/create-prepayment-method.md) | Required | When the `method` specified is `"credit_card_on_file"`, the prepayment amount will be collected using the default credit card payment profile and applied to the prepayment account balance. This is especially useful for manual replenishment of prepaid subscriptions. | getMethod(): string | setMethod(string method): void |
| `paymentProfileId` | `?int` | Optional | - | getPaymentProfileId(): ?int | setPaymentProfileId(?int paymentProfileId): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\CreatePrepaymentBuilder;
use AdvancedBillingLib\Models\CreatePrepaymentMethod;

$createPrepayment = CreatePrepaymentBuilder::init(
    73.78,
    'details6',
    'memo0',
    CreatePrepaymentMethod::PAYPAL_ACCOUNT
)
    ->paymentProfileId(58)
    ->build();
```

