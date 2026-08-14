
# Update Product Price Point

## Structure

`UpdateProductPricePoint`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `handle` | `?string` | Optional | - | getHandle(): ?string | setHandle(?string handle): void |
| `priceInCents` | `?int` | Optional | - | getPriceInCents(): ?int | setPriceInCents(?int priceInCents): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\UpdateProductPricePointBuilder;

$updateProductPricePoint = UpdateProductPricePointBuilder::init()
    ->handle('handle2')
    ->priceInCents(154)
    ->build();
```

