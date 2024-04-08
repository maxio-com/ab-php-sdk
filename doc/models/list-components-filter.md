
# List Components Filter

## Structure

`ListComponentsFilter`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `ids` | `?(int[])` | Optional | Allows fetching components with matching id based on provided value. Use in query `filter[ids]=1,2,3`.<br>**Constraints**: *Minimum Items*: `1` | getIds(): ?array | setIds(?array ids): void |
| `useSiteExchangeRate` | `?bool` | Optional | Allows fetching components with matching use_site_exchange_rate based on provided value (refers to default price point). Use in query `filter[use_site_exchange_rate]=true`. | getUseSiteExchangeRate(): ?bool | setUseSiteExchangeRate(?bool useSiteExchangeRate): void |

## Example (as JSON)

```json
{
  "ids": [
    1,
    2,
    3
  ],
  "use_site_exchange_rate": false
}
```

