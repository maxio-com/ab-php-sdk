
# List Invoices Response

## Structure

`ListInvoicesResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `invoices` | [`Invoice[]`](../../doc/models/invoice.md) | Required | - | getInvoices(): array | setInvoices(array invoices): void |

## Example (as JSON)

```json
{
  "invoices": [
    {
      "issue_date": "2024-01-01",
      "due_date": "2024-01-01",
      "paid_date": "2024-01-01",
      "public_url_expires_on": "2024-01-21",
      "id": 196,
      "uid": "uid6",
      "site_id": 122,
      "customer_id": 234,
      "subscription_id": 50
    }
  ]
}
```

