
# Allocation Expiration Date

## Structure

`AllocationExpirationDate`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `expiresAt` | `?DateTime` | Optional | - | getExpiresAt(): ?\DateTime | setExpiresAt(?\DateTime expiresAt): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\AllocationExpirationDateBuilder;
use AdvancedBillingLib\Utils\DateTimeHelper;

$allocationExpirationDate = AllocationExpirationDateBuilder::init()
    ->expiresAt(DateTimeHelper::fromRfc3339DateTime('2016-03-13T12:52:32.123Z'))
    ->build();
```

