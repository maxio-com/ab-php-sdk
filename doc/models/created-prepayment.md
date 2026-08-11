
# Created Prepayment

## Structure

`CreatedPrepayment`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?int` | Optional | **Constraints**: `>= 1` | getId(): ?int | setId(?int id): void |
| `subscriptionId` | `?int` | Optional | **Constraints**: `>= 1` | getSubscriptionId(): ?int | setSubscriptionId(?int subscriptionId): void |
| `amountInCents` | `?int` | Optional | **Constraints**: `>= 0.01` | getAmountInCents(): ?int | setAmountInCents(?int amountInCents): void |
| `memo` | `?string` | Optional | - | getMemo(): ?string | setMemo(?string memo): void |
| `createdAt` | `?DateTime` | Optional | - | getCreatedAt(): ?\DateTime | setCreatedAt(?\DateTime createdAt): void |
| `startingBalanceInCents` | `?int` | Optional | **Constraints**: `>= 0` | getStartingBalanceInCents(): ?int | setStartingBalanceInCents(?int startingBalanceInCents): void |
| `endingBalanceInCents` | `?int` | Optional | - | getEndingBalanceInCents(): ?int | setEndingBalanceInCents(?int endingBalanceInCents): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\CreatedPrepaymentBuilder;
use AdvancedBillingLib\Utils\DateTimeHelper;

$createdPrepayment = CreatedPrepaymentBuilder::init()
    ->id(186)
    ->subscriptionId(40)
    ->amountInCents(240)
    ->memo('memo6')
    ->createdAt(DateTimeHelper::fromRfc3339DateTime('2016-03-13T12:52:32.123Z'))
    ->build();
```

