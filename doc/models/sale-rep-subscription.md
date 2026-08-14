
# Sale Rep Subscription

## Structure

`SaleRepSubscription`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?int` | Optional | - | getId(): ?int | setId(?int id): void |
| `siteName` | `?string` | Optional | - | getSiteName(): ?string | setSiteName(?string siteName): void |
| `subscriptionUrl` | `?string` | Optional | - | getSubscriptionUrl(): ?string | setSubscriptionUrl(?string subscriptionUrl): void |
| `customerName` | `?string` | Optional | - | getCustomerName(): ?string | setCustomerName(?string customerName): void |
| `createdAt` | `?string` | Optional | - | getCreatedAt(): ?string | setCreatedAt(?string createdAt): void |
| `mrr` | `?string` | Optional | - | getMrr(): ?string | setMrr(?string mrr): void |
| `usage` | `?string` | Optional | - | getUsage(): ?string | setUsage(?string usage): void |
| `recurring` | `?string` | Optional | - | getRecurring(): ?string | setRecurring(?string recurring): void |
| `lastPayment` | `?string` | Optional | - | getLastPayment(): ?string | setLastPayment(?string lastPayment): void |
| `churnDate` | `?string` | Optional | - | getChurnDate(): ?string | setChurnDate(?string churnDate): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\SaleRepSubscriptionBuilder;

$saleRepSubscription = SaleRepSubscriptionBuilder::init()
    ->id(68)
    ->siteName('site_name8')
    ->subscriptionUrl('subscription_url2')
    ->customerName('customer_name8')
    ->createdAt('created_at4')
    ->build();
```

