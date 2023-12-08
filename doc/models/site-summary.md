
# Site Summary

## Structure

`SiteSummary`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `sellerName` | `?string` | Optional | - | getSellerName(): ?string | setSellerName(?string sellerName): void |
| `siteName` | `?string` | Optional | - | getSiteName(): ?string | setSiteName(?string siteName): void |
| `siteId` | `?int` | Optional | - | getSiteId(): ?int | setSiteId(?int siteId): void |
| `siteCurrency` | `?string` | Optional | - | getSiteCurrency(): ?string | setSiteCurrency(?string siteCurrency): void |
| `stats` | [`?SiteStatistics`](../../doc/models/site-statistics.md) | Optional | - | getStats(): ?SiteStatistics | setStats(?SiteStatistics stats): void |

## Example (as JSON)

```json
{
  "seller_name": "seller_name0",
  "site_name": "site_name4",
  "site_id": 218,
  "site_currency": "site_currency6",
  "stats": {
    "total_subscriptions": 110,
    "subscriptions_today": 228,
    "total_revenue": "total_revenue6",
    "revenue_today": "revenue_today4",
    "revenue_this_month": "revenue_this_month4"
  }
}
```

