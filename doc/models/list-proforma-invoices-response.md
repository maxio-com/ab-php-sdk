
# List Proforma Invoices Response

## Structure

`ListProformaInvoicesResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `proformaInvoices` | [`?(ProformaInvoice[])`](../../doc/models/proforma-invoice.md) | Optional | - | getProformaInvoices(): ?array | setProformaInvoices(?array proformaInvoices): void |
| `meta` | [`?ListProformaInvoicesMeta`](../../doc/models/list-proforma-invoices-meta.md) | Optional | - | getMeta(): ?ListProformaInvoicesMeta | setMeta(?ListProformaInvoicesMeta meta): void |

## Example (as JSON)

```json
{
  "proforma_invoices": [
    {
      "uid": "uid0",
      "site_id": 140,
      "customer_id": 252,
      "subscription_id": 68,
      "number": 56
    },
    {
      "uid": "uid0",
      "site_id": 140,
      "customer_id": 252,
      "subscription_id": 68,
      "number": 56
    },
    {
      "uid": "uid0",
      "site_id": 140,
      "customer_id": 252,
      "subscription_id": 68,
      "number": 56
    }
  ],
  "meta": {
    "total_count": 150,
    "current_page": 126,
    "total_pages": 138,
    "status_code": 168
  }
}
```

