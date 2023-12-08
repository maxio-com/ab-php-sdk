
# Seller

## Structure

`Seller`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `name` | `?string` | Optional | - | getName(): ?string | setName(?string name): void |
| `address` | [`?InvoiceAddress`](../../doc/models/invoice-address.md) | Optional | - | getAddress(): ?InvoiceAddress | setAddress(?InvoiceAddress address): void |
| `phone` | `?string` | Optional | - | getPhone(): ?string | setPhone(?string phone): void |
| `logoUrl` | `?string` | Optional | - | getLogoUrl(): ?string | setLogoUrl(?string logoUrl): void |

## Example (as JSON)

```json
{
  "name": "name6",
  "address": {
    "street": "street6",
    "line2": "line20",
    "city": "city6",
    "state": "state2",
    "zip": "zip0"
  },
  "phone": "phone6",
  "logo_url": "logo_url4"
}
```

