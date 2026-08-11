
# Sale Rep Settings

## Structure

`SaleRepSettings`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `customerName` | `?string` | Optional | - | getCustomerName(): ?string | setCustomerName(?string customerName): void |
| `subscriptionId` | `?int` | Optional | - | getSubscriptionId(): ?int | setSubscriptionId(?int subscriptionId): void |
| `siteLink` | `?string` | Optional | - | getSiteLink(): ?string | setSiteLink(?string siteLink): void |
| `siteName` | `?string` | Optional | - | getSiteName(): ?string | setSiteName(?string siteName): void |
| `subscriptionMrr` | `?string` | Optional | - | getSubscriptionMrr(): ?string | setSubscriptionMrr(?string subscriptionMrr): void |
| `salesRepId` | `?int` | Optional | - | getSalesRepId(): ?int | setSalesRepId(?int salesRepId): void |
| `salesRepName` | `?string` | Optional | - | getSalesRepName(): ?string | setSalesRepName(?string salesRepName): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\SaleRepSettingsBuilder;

$saleRepSettings = SaleRepSettingsBuilder::init()
    ->customerName('customer_name6')
    ->subscriptionId(202)
    ->siteLink('site_link2')
    ->siteName('site_name6')
    ->subscriptionMrr('subscription_mrr4')
    ->build();
```

