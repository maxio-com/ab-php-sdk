
# Add Coupons Request

## Structure

`AddCouponsRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `codes` | `?(string[])` | Optional | - | getCodes(): ?array | setCodes(?array codes): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\AddCouponsRequestBuilder;

$addCouponsRequest = AddCouponsRequestBuilder::init()
    ->codes(
        [
            'codes6',
            'codes7'
        ]
    )
    ->build();
```

