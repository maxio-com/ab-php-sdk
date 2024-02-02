
# Customer Custom Fields Change

## Structure

`CustomerCustomFieldsChange`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `before` | [`InvoiceCustomField[]`](../../doc/models/invoice-custom-field.md) | Required | - | getBefore(): array | setBefore(array before): void |
| `after` | [`InvoiceCustomField[]`](../../doc/models/invoice-custom-field.md) | Required | - | getAfter(): array | setAfter(array after): void |

## Example (as JSON)

```json
{
  "before": [
    {
      "owner_id": 26,
      "owner_type": "Customer",
      "name": "name0",
      "value": "value2",
      "metadatum_id": 26
    }
  ],
  "after": [
    {
      "owner_id": 130,
      "owner_type": "Customer",
      "name": "name2",
      "value": "value4",
      "metadatum_id": 130
    }
  ]
}
```

