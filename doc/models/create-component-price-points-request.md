
# Create Component Price Points Request

## Structure

`CreateComponentPricePointsRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `pricePoints` | array<[CreateComponentPricePoint](../../doc/models/create-component-price-point.md)\|[CreatePrepaidUsageComponentPricePoint](../../doc/models/create-prepaid-usage-component-price-point.md)> | Required | This is Array of a container for any-of cases. | getPricePoints(): array | setPricePoints(array pricePoints): void |

## Example (as JSON)

```json
{
  "price_points": [
    {
      "name": "name0",
      "handle": "handle6",
      "pricing_scheme": "per_unit",
      "prices": [
        {
          "starting_quantity": 242,
          "ending_quantity": 40,
          "unit_price": 23.26
        },
        {
          "starting_quantity": 242,
          "ending_quantity": 40,
          "unit_price": 23.26
        },
        {
          "starting_quantity": 242,
          "ending_quantity": 40,
          "unit_price": 23.26
        }
      ],
      "use_site_exchange_rate": false,
      "tax_included": false,
      "interval": 24,
      "interval_unit": "day"
    },
    {
      "name": "name0",
      "handle": "handle6",
      "pricing_scheme": "per_unit",
      "prices": [
        {
          "starting_quantity": 242,
          "ending_quantity": 40,
          "unit_price": 23.26
        },
        {
          "starting_quantity": 242,
          "ending_quantity": 40,
          "unit_price": 23.26
        },
        {
          "starting_quantity": 242,
          "ending_quantity": 40,
          "unit_price": 23.26
        }
      ],
      "use_site_exchange_rate": false,
      "tax_included": false,
      "interval": 24,
      "interval_unit": "day"
    }
  ]
}
```

