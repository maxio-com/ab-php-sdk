
# Subscription Group Payment Profile

## Structure

`SubscriptionGroupPaymentProfile`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?int` | Optional | - | getId(): ?int | setId(?int id): void |
| `firstName` | `?string` | Optional | - | getFirstName(): ?string | setFirstName(?string firstName): void |
| `lastName` | `?string` | Optional | - | getLastName(): ?string | setLastName(?string lastName): void |
| `maskedCardNumber` | `?string` | Optional | - | getMaskedCardNumber(): ?string | setMaskedCardNumber(?string maskedCardNumber): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\SubscriptionGroupPaymentProfileBuilder;

$subscriptionGroupPaymentProfile = SubscriptionGroupPaymentProfileBuilder::init()
    ->id(246)
    ->firstName('first_name6')
    ->lastName('last_name4')
    ->maskedCardNumber('masked_card_number4')
    ->build();
```

