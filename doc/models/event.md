
# Event

## Structure

`Event`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `int` | Required | - | getId(): int | setId(int id): void |
| `key` | [`string(EventKey)`](../../doc/models/event-key.md) | Required | - | getKey(): string | setKey(string key): void |
| `message` | `string` | Required | **Constraints**: *Minimum Length*: `1` | getMessage(): string | setMessage(string message): void |
| `subscriptionId` | `?int` | Required | - | getSubscriptionId(): ?int | setSubscriptionId(?int subscriptionId): void |
| `customerId` | `?int` | Required | - | getCustomerId(): ?int | setCustomerId(?int customerId): void |
| `createdAt` | `DateTime` | Required | - | getCreatedAt(): \DateTime | setCreatedAt(\DateTime createdAt): void |
| `eventSpecificData` | [SubscriptionProductChange](../../doc/models/subscription-product-change.md)\|[SubscriptionStateChange](../../doc/models/subscription-state-change.md)\|[PaymentRelatedEvents](../../doc/models/payment-related-events.md)\|[RefundSuccess](../../doc/models/refund-success.md)\|[ComponentAllocationChange](../../doc/models/component-allocation-change.md)\|[MeteredUsage](../../doc/models/metered-usage.md)\|[PrepaidUsage](../../doc/models/prepaid-usage.md)\|[DunningStepReached](../../doc/models/dunning-step-reached.md)\|[InvoiceIssued](../../doc/models/invoice-issued.md)\|[PendingCancellationChange](../../doc/models/pending-cancellation-change.md)\|[PrepaidSubscriptionBalanceChanged](../../doc/models/prepaid-subscription-balance-changed.md)\|Proforma[InvoiceIssued](../../doc/models/invoice-issued.md)\|[SubscriptionGroupSignupEventData](../../doc/models/subscription-group-signup-event-data.md)\|[CreditAccountBalanceChanged](../../doc/models/credit-account-balance-changed.md)\|[PrepaymentAccountBalanceChanged](../../doc/models/prepayment-account-balance-changed.md)\|[PaymentCollectionMethodChanged](../../doc/models/payment-collection-method-changed.md)\|[ItemPricePointChanged](../../doc/models/item-price-point-changed.md)\|[CustomFieldValueChange](../../doc/models/custom-field-value-change.md)\|[ChjsTokenizationSuccess](../../doc/models/chjs-tokenization-success.md)\|[ChjsTokenizationFailure](../../doc/models/chjs-tokenization-failure.md)\|null | Required | This is a container for one-of cases. | getEventSpecificData(): | setEventSpecificData( eventSpecificData): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\EventBuilder;
use AdvancedBillingLib\Models\EventKey;
use AdvancedBillingLib\Utils\DateTimeHelper;
use AdvancedBillingLib\Models\Builders\SubscriptionProductChangeBuilder;

$event = EventBuilder::init(
    242,
    EventKey::SUBSCRIPTION_REMOVED_FROM_GROUP,
    'message0',
    DateTimeHelper::fromRfc3339DateTimeRequired('2016-03-13T12:52:32.123Z')
)
    ->subscriptionId(96)
    ->customerId(24)
    ->eventSpecificData(
        SubscriptionProductChangeBuilder::init(
            126,
            12
        )
            ->previousProductPricePointId(250)
            ->newProductPricePointId(244)
            ->effectiveAt(DateTimeHelper::fromRfc3339DateTime('2016-03-13T12:52:32.123Z'))
            ->build()
    )
    ->build();
```

