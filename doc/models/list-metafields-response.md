
# List Metafields Response

## Structure

`ListMetafieldsResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `totalCount` | `?int` | Optional | - | getTotalCount(): ?int | setTotalCount(?int totalCount): void |
| `currentPage` | `?int` | Optional | - | getCurrentPage(): ?int | setCurrentPage(?int currentPage): void |
| `totalPages` | `?int` | Optional | - | getTotalPages(): ?int | setTotalPages(?int totalPages): void |
| `perPage` | `?int` | Optional | - | getPerPage(): ?int | setPerPage(?int perPage): void |
| `metafields` | [`?(Metafield[])`](../../doc/models/metafield.md) | Optional | - | getMetafields(): ?array | setMetafields(?array metafields): void |

## Example (as JSON)

```json
{
  "total_count": 210,
  "current_page": 186,
  "total_pages": 198,
  "per_page": 92,
  "metafields": [
    {
      "id": 22,
      "name": "name2",
      "scope": {
        "csv": "0",
        "invoices": "0",
        "statements": "0",
        "portal": "0",
        "public_show": "0"
      },
      "data_count": 10,
      "input_type": "input_type4"
    }
  ]
}
```

