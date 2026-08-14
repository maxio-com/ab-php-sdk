
# Subscription Group Customer

## Structure

`SubscriptionGroupCustomer`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `firstName` | `?string` | Optional | - | getFirstName(): ?string | setFirstName(?string firstName): void |
| `lastName` | `?string` | Optional | - | getLastName(): ?string | setLastName(?string lastName): void |
| `organization` | `?string` | Optional | - | getOrganization(): ?string | setOrganization(?string organization): void |
| `email` | `?string` | Optional | - | getEmail(): ?string | setEmail(?string email): void |
| `reference` | `?string` | Optional | - | getReference(): ?string | setReference(?string reference): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\SubscriptionGroupCustomerBuilder;

$subscriptionGroupCustomer = SubscriptionGroupCustomerBuilder::init()
    ->firstName('first_name6')
    ->lastName('last_name4')
    ->organization('organization0')
    ->email('email0')
    ->reference('reference8')
    ->build();
```

