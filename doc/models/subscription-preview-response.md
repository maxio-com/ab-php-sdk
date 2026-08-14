
# Subscription Preview Response

## Structure

`SubscriptionPreviewResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `subscriptionPreview` | [`SubscriptionPreview`](../../doc/models/subscription-preview.md) | Required | - | getSubscriptionPreview(): SubscriptionPreview | setSubscriptionPreview(SubscriptionPreview subscriptionPreview): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\SubscriptionPreviewResponseBuilder;
use AdvancedBillingLib\Models\Builders\SubscriptionPreviewBuilder;
use AdvancedBillingLib\Models\Builders\BillingManifestBuilder;
use AdvancedBillingLib\Models\Builders\BillingManifestItemBuilder;
use AdvancedBillingLib\Models\LineItemTransactionType;
use AdvancedBillingLib\Models\BillingManifestLineItemKind;

$subscriptionPreviewResponse = SubscriptionPreviewResponseBuilder::init(
    SubscriptionPreviewBuilder::init()
        ->currentBillingManifest(
            BillingManifestBuilder::init()
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
                ->totalInCents(38)
                ->totalDiscountInCents(24)
                ->totalTaxInCents(18)
                ->subtotalInCents(150)
                ->build()
        )
        ->nextBillingManifest(
            BillingManifestBuilder::init()
                ->lineItems(
                    [
                        BillingManifestItemBuilder::init()
                            ->transactionType(LineItemTransactionType::CREDIT)
                            ->kind(BillingManifestLineItemKind::COMPONENT)
                            ->amountInCents(24)
                            ->memo('memo2')
                            ->discountAmountInCents(172)
                            ->build(),
                        BillingManifestItemBuilder::init()
                            ->transactionType(LineItemTransactionType::CREDIT)
                            ->kind(BillingManifestLineItemKind::COMPONENT)
                            ->amountInCents(24)
                            ->memo('memo2')
                            ->discountAmountInCents(172)
                            ->build(),
                        BillingManifestItemBuilder::init()
                            ->transactionType(LineItemTransactionType::CREDIT)
                            ->kind(BillingManifestLineItemKind::COMPONENT)
                            ->amountInCents(24)
                            ->memo('memo2')
                            ->discountAmountInCents(172)
                            ->build()
                    ]
                )
                ->totalInCents(62)
                ->totalDiscountInCents(208)
                ->totalTaxInCents(42)
                ->subtotalInCents(174)
                ->build()
        )
        ->build()
)->build();
```

