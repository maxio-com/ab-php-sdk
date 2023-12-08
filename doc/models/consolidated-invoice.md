
# Consolidated Invoice

## Structure

`ConsolidatedInvoice`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `invoices` | [`?(Invoice[])`](../../doc/models/invoice.md) | Optional | - | getInvoices(): ?array | setInvoices(?array invoices): void |

## Example (as JSON)

```json
{
  "invoices": [
    {
      "id": 196,
      "uid": "uid6",
      "site_id": 122,
      "customer_id": 234,
      "subscription_id": 50
    },
    {
      "id": 196,
      "uid": "uid6",
      "site_id": 122,
      "customer_id": 234,
      "subscription_id": 50
    }
  ]
}
```

