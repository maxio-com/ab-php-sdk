
# List Components Price Points Response

## Structure

`ListComponentsPricePointsResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `pricePoints` | [`ComponentPricePoint[]`](../../doc/models/component-price-point.md) | Required | - | getPricePoints(): array | setPricePoints(array pricePoints): void |

## Example (as JSON)

```json
{
  "price_points": [
    {
      "use_site_exchange_rate": true,
      "id": 40,
      "type": "default",
      "default": false,
      "name": "name2",
      "pricing_scheme": "per_unit"
    }
  ]
}
```

