
# Change Invoice Collection Method Event Data

Example schema for an `change_invoice_collection_method` event

## Structure

`ChangeInvoiceCollectionMethodEventData`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `fromCollectionMethod` | `?string` | Optional | The previous collection method of the invoice. | getFromCollectionMethod(): ?string | setFromCollectionMethod(?string fromCollectionMethod): void |
| `toCollectionMethod` | `?string` | Optional | The new collection method of the invoice. | getToCollectionMethod(): ?string | setToCollectionMethod(?string toCollectionMethod): void |

## Example (as JSON)

```json
{
  "from_collection_method": "from_collection_method4",
  "to_collection_method": "to_collection_method2"
}
```

