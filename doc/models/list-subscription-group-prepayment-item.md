
# List Subscription Group Prepayment Item

## Structure

`ListSubscriptionGroupPrepaymentItem`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?int` | Optional | - | getId(): ?int | setId(?int id): void |
| `subscriptionGroupUid` | `?string` | Optional | - | getSubscriptionGroupUid(): ?string | setSubscriptionGroupUid(?string subscriptionGroupUid): void |
| `amountInCents` | `?int` | Optional | - | getAmountInCents(): ?int | setAmountInCents(?int amountInCents): void |
| `remainingAmountInCents` | `?int` | Optional | - | getRemainingAmountInCents(): ?int | setRemainingAmountInCents(?int remainingAmountInCents): void |
| `details` | `?string` | Optional | - | getDetails(): ?string | setDetails(?string details): void |
| `external` | `?bool` | Optional | - | getExternal(): ?bool | setExternal(?bool external): void |
| `memo` | `?string` | Optional | - | getMemo(): ?string | setMemo(?string memo): void |
| `paymentType` | [`?string(PrepaymentMethod)`](../../doc/models/prepayment-method.md) | Optional | - | getPaymentType(): ?string | setPaymentType(?string paymentType): void |
| `createdAt` | `?DateTime` | Optional | - | getCreatedAt(): ?\DateTime | setCreatedAt(?\DateTime createdAt): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\ListSubscriptionGroupPrepaymentItemBuilder;

$listSubscriptionGroupPrepaymentItem = ListSubscriptionGroupPrepaymentItemBuilder::init()
    ->id(72)
    ->subscriptionGroupUid('subscription_group_uid6')
    ->amountInCents(98)
    ->remainingAmountInCents(216)
    ->details('details2')
    ->build();
```

