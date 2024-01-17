
# Component Price Points Response

## Structure

`ComponentPricePointsResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `pricePoints` | [`?(ComponentPricePoint[])`](../../doc/models/component-price-point.md) | Optional | - | getPricePoints(): ?array | setPricePoints(?array pricePoints): void |
| `meta` | [`?ListPublicKeysMeta`](../../doc/models/list-public-keys-meta.md) | Optional | - | getMeta(): ?ListPublicKeysMeta | setMeta(?ListPublicKeysMeta meta): void |

## Example (as JSON)

```json
{
  "price_points": [
    {
      "id": 40,
      "type": "default",
      "default": false,
      "name": "name2",
      "pricing_scheme": "per_unit"
    },
    {
      "id": 40,
      "type": "default",
      "default": false,
      "name": "name2",
      "pricing_scheme": "per_unit"
    }
  ],
  "meta": {
    "total_count": 150,
    "current_page": 126,
    "total_pages": 138,
    "per_page": 152
  }
}
```

