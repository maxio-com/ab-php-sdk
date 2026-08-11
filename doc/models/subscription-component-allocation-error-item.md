
# Subscription Component Allocation Error Item

## Structure

`SubscriptionComponentAllocationErrorItem`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `kind` | `?string` | Optional | - | getKind(): ?string | setKind(?string kind): void |
| `message` | `?string` | Optional | - | getMessage(): ?string | setMessage(?string message): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\SubscriptionComponentAllocationErrorItemBuilder;

$subscriptionComponentAllocationErrorItem = SubscriptionComponentAllocationErrorItemBuilder::init()
    ->kind('kind6')
    ->message('message8')
    ->build();
```

