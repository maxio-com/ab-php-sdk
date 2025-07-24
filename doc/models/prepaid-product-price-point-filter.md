
# Prepaid Product Price Point Filter

## Structure

`PrepaidProductPricePointFilter`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `productPricePointId` | `string` | Required, Constant | Passed as a parameter to list methods to return only non null values.<br><br>**Value**: `'not_null'` | getProductPricePointId(): string | setProductPricePointId(string productPricePointId): void |

## Example (as JSON)

```json
{
  "product_price_point_id": "not_null"
}
```

