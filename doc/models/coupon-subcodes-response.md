
# Coupon Subcodes Response

## Structure

`CouponSubcodesResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `createdCodes` | `?(string[])` | Optional | - | getCreatedCodes(): ?array | setCreatedCodes(?array createdCodes): void |
| `duplicateCodes` | `?(string[])` | Optional | - | getDuplicateCodes(): ?array | setDuplicateCodes(?array duplicateCodes): void |
| `invalidCodes` | `?(string[])` | Optional | - | getInvalidCodes(): ?array | setInvalidCodes(?array invalidCodes): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\CouponSubcodesResponseBuilder;

$couponSubcodesResponse = CouponSubcodesResponseBuilder::init()
    ->createdCodes(
        [
            'created_codes7'
        ]
    )
    ->duplicateCodes(
        [
            'duplicate_codes8'
        ]
    )
    ->invalidCodes(
        [
            'invalid_codes4',
            'invalid_codes3'
        ]
    )
    ->build();
```

