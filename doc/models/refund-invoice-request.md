
# Refund Invoice Request

## Structure

`RefundInvoiceRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `refund` | [RefundInvoice](../../doc/models/refund-invoice.md)\|[RefundConsolidatedInvoice](../../doc/models/refund-consolidated-invoice.md) | Required | This is a container for any-of cases. | getRefund(): | setRefund( refund): void |

## Example (as JSON)

```json
{
  "refund": {
    "amount": "amount8",
    "memo": "memo0",
    "payment_id": 0,
    "external": false,
    "apply_credit": false,
    "void_invoice": false
  }
}
```

