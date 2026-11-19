
# Purchase

## Structure

`Purchase`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `quantity` | string\|int | Required | This is a container for one-of cases. | getQuantity(): | setQuantity( quantity): void |
| `pricePointId` | `?int` | Optional | The price point to purchase at. Must belong to the wallet's billing product. Defaults to the `price_point_id` set on the wallet. | getPricePointId(): ?int | setPricePointId(?int pricePointId): void |
| `memo` | `?string` | Optional | (Optional) A note recorded on the resulting grant's ledger row.<br><br>**Constraints**: *Maximum Length*: `255` | getMemo(): ?string | setMemo(?string memo): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\PurchaseBuilder;

$purchase = PurchaseBuilder::init(
    'String5'
)
    ->pricePointId(20)
    ->memo('memo2')
    ->build();
```

