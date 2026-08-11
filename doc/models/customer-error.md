
# Customer Error

## Structure

`CustomerError`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `customer` | `?string` | Optional | - | getCustomer(): ?string | setCustomer(?string customer): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\CustomerErrorBuilder;

$customerError = CustomerErrorBuilder::init()
    ->customer('customer8')
    ->build();
```

