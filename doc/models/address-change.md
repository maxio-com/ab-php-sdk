
# Address Change

## Structure

`AddressChange`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `before` | [`InvoiceAddress`](../../doc/models/invoice-address.md) | Required | - | getBefore(): InvoiceAddress | setBefore(InvoiceAddress before): void |
| `after` | [`InvoiceAddress`](../../doc/models/invoice-address.md) | Required | - | getAfter(): InvoiceAddress | setAfter(InvoiceAddress after): void |

## Example (as JSON)

```json
{
  "before": {
    "street": "street0",
    "line2": "line24",
    "city": "city0",
    "state": "state6",
    "zip": "zip4"
  },
  "after": {
    "street": "street2",
    "line2": "line26",
    "city": "city8",
    "state": "state2",
    "zip": "zip4"
  }
}
```

