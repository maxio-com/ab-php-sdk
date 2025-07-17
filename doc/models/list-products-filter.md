
# List Products Filter

## Structure

`ListProductsFilter`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `ids` | `?(int[])` | Optional | Allows fetching products with matching id based on provided values. Use in query `filter[ids]=1,2,3`.<br><br>**Constraints**: *Minimum Items*: `1` | getIds(): ?array | setIds(?array ids): void |
| `prepaidProductPricePoint` | [`?PrepaidProductPricePointFilter`](../../doc/models/prepaid-product-price-point-filter.md) | Optional | Allows fetching products only if a prepaid product price point is present or not. To use this filter you also have to include the following param in the request `include=prepaid_product_price_point`. Use in query `filter[prepaid_product_price_point][product_price_point_id]=not_null`. | getPrepaidProductPricePoint(): ?PrepaidProductPricePointFilter | setPrepaidProductPricePoint(?PrepaidProductPricePointFilter prepaidProductPricePoint): void |
| `useSiteExchangeRate` | `?bool` | Optional | Allows fetching products with matching use_site_exchange_rate based on provided value (refers to default price point). Use in query `filter[use_site_exchange_rate]=true`. | getUseSiteExchangeRate(): ?bool | setUseSiteExchangeRate(?bool useSiteExchangeRate): void |

## Example (as JSON)

```json
{
  "ids": [
    1,
    2,
    3
  ],
  "prepaid_product_price_point": {
    "product_price_point_id": "product_price_point_id2"
  },
  "use_site_exchange_rate": false
}
```

