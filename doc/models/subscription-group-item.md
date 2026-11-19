
# Subscription Group Item

## Structure

`SubscriptionGroupItem`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?int` | Optional | - | getId(): ?int | setId(?int id): void |
| `reference` | `?string` | Optional | - | getReference(): ?string | setReference(?string reference): void |
| `customerId` | `?int` | Optional | The ID of the customer the subscription belongs to. This is the payer unless the signup request named another customer for the subscription. | getCustomerId(): ?int | setCustomerId(?int customerId): void |
| `productId` | `?int` | Optional | - | getProductId(): ?int | setProductId(?int productId): void |
| `productHandle` | `?string` | Optional | - | getProductHandle(): ?string | setProductHandle(?string productHandle): void |
| `productPricePointId` | `?int` | Optional | - | getProductPricePointId(): ?int | setProductPricePointId(?int productPricePointId): void |
| `productPricePointHandle` | `?string` | Optional | - | getProductPricePointHandle(): ?string | setProductPricePointHandle(?string productPricePointHandle): void |
| `currency` | `?string` | Optional | - | getCurrency(): ?string | setCurrency(?string currency): void |
| `couponCode` | `?string` | Optional | - | getCouponCode(): ?string | setCouponCode(?string couponCode): void |
| `totalRevenueInCents` | `?int` | Optional | - | getTotalRevenueInCents(): ?int | setTotalRevenueInCents(?int totalRevenueInCents): void |
| `balanceInCents` | `?int` | Optional | - | getBalanceInCents(): ?int | setBalanceInCents(?int balanceInCents): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\SubscriptionGroupItemBuilder;

$subscriptionGroupItem = SubscriptionGroupItemBuilder::init()
    ->id(26)
    ->reference('reference4')
    ->customerId(64)
    ->productId(32)
    ->productHandle('product_handle8')
    ->build();
```

