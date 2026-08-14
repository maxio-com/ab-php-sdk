
# Prepayment

## Structure

`Prepayment`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `int` | Required | - | getId(): int | setId(int id): void |
| `subscriptionId` | `int` | Required | - | getSubscriptionId(): int | setSubscriptionId(int subscriptionId): void |
| `amountInCents` | `int` | Required | - | getAmountInCents(): int | setAmountInCents(int amountInCents): void |
| `remainingAmountInCents` | `int` | Required | - | getRemainingAmountInCents(): int | setRemainingAmountInCents(int remainingAmountInCents): void |
| `refundedAmountInCents` | `?int` | Optional | - | getRefundedAmountInCents(): ?int | setRefundedAmountInCents(?int refundedAmountInCents): void |
| `details` | `?string` | Optional | **Constraints**: *Minimum Length*: `1` | getDetails(): ?string | setDetails(?string details): void |
| `external` | `bool` | Required | - | getExternal(): bool | setExternal(bool external): void |
| `memo` | `string` | Required | **Constraints**: *Minimum Length*: `1` | getMemo(): string | setMemo(string memo): void |
| `paymentType` | [`?string(PrepaymentMethod)`](../../doc/models/prepayment-method.md) | Optional | The payment type of the prepayment. | getPaymentType(): ?string | setPaymentType(?string paymentType): void |
| `createdAt` | `DateTime` | Required | - | getCreatedAt(): \DateTime | setCreatedAt(\DateTime createdAt): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\PrepaymentBuilder;
use AdvancedBillingLib\Utils\DateTimeHelper;
use AdvancedBillingLib\Models\PrepaymentMethod;

$prepayment = PrepaymentBuilder::init(
    38,
    148,
    124,
    182,
    false,
    'memo2',
    DateTimeHelper::fromRfc3339DateTimeRequired('2016-03-13T12:52:32.123Z')
)
    ->refundedAmountInCents(132)
    ->details('details8')
    ->paymentType(PrepaymentMethod::CREDIT_CARD)
    ->build();
```

