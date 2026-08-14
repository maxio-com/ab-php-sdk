
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

## Example

```php
use AdvancedBillingLib\Models\Builders\SiteSummaryBuilder;
use AdvancedBillingLib\Models\Builders\SiteStatisticsBuilder;

$siteSummary = SiteSummaryBuilder::init()
    ->sellerName('seller_name4')
    ->siteName('site_name8')
    ->siteId(252)
    ->siteCurrency('site_currency0')
    ->stats(
        SiteStatisticsBuilder::init()
            ->totalSubscriptions(110)
            ->subscriptionsToday(228)
            ->totalRevenue('total_revenue6')
            ->revenueToday('revenue_today4')
            ->revenueThisMonth('revenue_this_month4')
            ->build()
    )
    ->build();
```

