
# Billing Manifest

## Structure

`BillingManifest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `lineItems` | [`?(BillingManifestItem[])`](../../doc/models/billing-manifest-item.md) | Optional | - | getLineItems(): ?array | setLineItems(?array lineItems): void |
| `totalInCents` | `?int` | Optional | - | getTotalInCents(): ?int | setTotalInCents(?int totalInCents): void |
| `totalDiscountInCents` | `?int` | Optional | - | getTotalDiscountInCents(): ?int | setTotalDiscountInCents(?int totalDiscountInCents): void |
| `totalTaxInCents` | `?int` | Optional | - | getTotalTaxInCents(): ?int | setTotalTaxInCents(?int totalTaxInCents): void |
| `subtotalInCents` | `?int` | Optional | - | getSubtotalInCents(): ?int | setSubtotalInCents(?int subtotalInCents): void |
| `startDate` | `?DateTime` | Optional | - | getStartDate(): ?\DateTime | setStartDate(?\DateTime startDate): void |
| `endDate` | `?DateTime` | Optional | - | getEndDate(): ?\DateTime | setEndDate(?\DateTime endDate): void |
| `periodType` | `?string` | Optional | - | getPeriodType(): ?string | setPeriodType(?string periodType): void |
| `existingBalanceInCents` | `?int` | Optional | - | getExistingBalanceInCents(): ?int | setExistingBalanceInCents(?int existingBalanceInCents): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\BillingManifestBuilder;
use AdvancedBillingLib\Models\Builders\BillingManifestItemBuilder;
use AdvancedBillingLib\Models\LineItemTransactionType;
use AdvancedBillingLib\Models\BillingManifestLineItemKind;

$billingManifest = BillingManifestBuilder::init()
    ->lineItems(
        [
            BillingManifestItemBuilder::init()
                ->transactionType(LineItemTransactionType::CREDIT)
                ->kind(BillingManifestLineItemKind::COMPONENT)
                ->amountInCents(24)
                ->memo('memo2')
                ->discountAmountInCents(172)
                ->build()
        ]
    )
    ->totalInCents(96)
    ->totalDiscountInCents(174)
    ->totalTaxInCents(76)
    ->subtotalInCents(208)
    ->build();
```

