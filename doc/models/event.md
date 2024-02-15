
# Event

## Structure

`Event`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `int` | Required | - | getId(): int | setId(int id): void |
| `key` | `string` | Required | **Constraints**: *Minimum Length*: `1` | getKey(): string | setKey(string key): void |
| `message` | `string` | Required | **Constraints**: *Minimum Length*: `1` | getMessage(): string | setMessage(string message): void |
| `subscriptionId` | `?int` | Required | - | getSubscriptionId(): ?int | setSubscriptionId(?int subscriptionId): void |
| `customerId` | `int` | Required | - | getCustomerId(): int | setCustomerId(int customerId): void |
| `createdAt` | `DateTime` | Required | - | getCreatedAt(): \DateTime | setCreatedAt(\DateTime createdAt): void |
| `eventSpecificData` | [SubscriptionProductChange](../../doc/models/subscription-product-change.md)\|[SubscriptionStateChange](../../doc/models/subscription-state-change.md)\|[PaymentRelatedEvents](../../doc/models/payment-related-events.md)\|[RefundSuccess](../../doc/models/refund-success.md)\|[ComponentAllocationChange](../../doc/models/component-allocation-change.md)\|[MeteredUsage](../../doc/models/metered-usage.md)\|[PrepaidUsage](../../doc/models/prepaid-usage.md)\|[DunningStepReached](../../doc/models/dunning-step-reached.md)\|[InvoiceIssued](../../doc/models/invoice-issued.md)\|[PendingCancellationChange](../../doc/models/pending-cancellation-change.md)\|[PrepaidSubscriptionBalanceChanged](../../doc/models/prepaid-subscription-balance-changed.md)\|Proforma[InvoiceIssued](../../doc/models/invoice-issued.md)\|[SubscriptionGroupSignupSuccess](../../doc/models/subscription-group-signup-success.md)\|[SubscriptionGroupSignupFailure](../../doc/models/subscription-group-signup-failure.md)\|[CreditAccountBalanceChanged](../../doc/models/credit-account-balance-changed.md)\|[PrepaymentAccountBalanceChanged](../../doc/models/prepayment-account-balance-changed.md)\|[PaymentCollectionMethodChanged](../../doc/models/payment-collection-method-changed.md)\|[ItemPricePointChanged](../../doc/models/item-price-point-changed.md)\|[CustomFieldValueChange](../../doc/models/custom-field-value-change.md)\|null | Required | This is a container for one-of cases. | getEventSpecificData(): | setEventSpecificData( eventSpecificData): void |

## Example (as JSON)

```json
{
  "id": 40,
  "key": "key2",
  "message": "message8",
  "subscription_id": 150,
  "customer_id": 78,
  "created_at": "2016-03-13T12:52:32.123Z",
  "event_specific_data": {
    "previous_unit_balance": null,
    "previous_overage_unit_balance": null,
    "new_unit_balance": null,
    "new_overage_unit_balance": null,
    "usage_quantity": null,
    "overage_usage_quantity": null,
    "component_id": null,
    "component_handle": null,
    "memo": null,
    "allocation_details": [
      null
    ],
    "previous_product_id": 126,
    "new_product_id": 12
  }
}
```

