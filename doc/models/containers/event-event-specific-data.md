
# Event Event Specific Data

## Data Type

`SubscriptionProductChange|SubscriptionStateChange|PaymentRelatedEvents|RefundSuccess|ComponentAllocationChange|MeteredUsage|PrepaidUsage|DunningStepReached|InvoiceIssued|PendingCancellationChange|PrepaidSubscriptionBalanceChanged|ProformaInvoiceIssued|SubscriptionGroupSignupEventData|CreditAccountBalanceChanged|PrepaymentAccountBalanceChanged|PaymentCollectionMethodChanged|ItemPricePointChanged|CustomFieldValueChange`

## Cases

| Type |
|  --- |
| [`SubscriptionProductChange`](../../../doc/models/subscription-product-change.md) |
| [`SubscriptionStateChange`](../../../doc/models/subscription-state-change.md) |
| [`PaymentRelatedEvents`](../../../doc/models/payment-related-events.md) |
| [`RefundSuccess`](../../../doc/models/refund-success.md) |
| [`ComponentAllocationChange`](../../../doc/models/component-allocation-change.md) |
| [`MeteredUsage`](../../../doc/models/metered-usage.md) |
| [`PrepaidUsage`](../../../doc/models/prepaid-usage.md) |
| [`DunningStepReached`](../../../doc/models/dunning-step-reached.md) |
| [`InvoiceIssued`](../../../doc/models/invoice-issued.md) |
| [`PendingCancellationChange`](../../../doc/models/pending-cancellation-change.md) |
| [`PrepaidSubscriptionBalanceChanged`](../../../doc/models/prepaid-subscription-balance-changed.md) |
| [`ProformaInvoiceIssued`](../../../doc/models/proforma-invoice-issued.md) |
| [`SubscriptionGroupSignupEventData`](../../../doc/models/subscription-group-signup-event-data.md) |
| [`CreditAccountBalanceChanged`](../../../doc/models/credit-account-balance-changed.md) |
| [`PrepaymentAccountBalanceChanged`](../../../doc/models/prepayment-account-balance-changed.md) |
| [`PaymentCollectionMethodChanged`](../../../doc/models/payment-collection-method-changed.md) |
| [`ItemPricePointChanged`](../../../doc/models/item-price-point-changed.md) |
| [`CustomFieldValueChange`](../../../doc/models/custom-field-value-change.md) |

## SubscriptionProductChange

### Initialization Code

#### Example

```php
$value = SubscriptionProductChangeBuilder::init(
    126,
    12
)->build();
```

## SubscriptionStateChange

### Initialization Code

#### Example

```php
$value = SubscriptionStateChangeBuilder::init(
    'previous_subscription_state2',
    'new_subscription_state6'
)->build();
```

## PaymentRelatedEvents

### Initialization Code

#### Example

```php
$value = PaymentRelatedEventsBuilder::init(
    42,
    58
)->build();
```

## RefundSuccess

### Initialization Code

#### Example

```php
$value = RefundSuccessBuilder::init(
    12,
    182,
    168
)->build();
```

## ComponentAllocationChange

### Initialization Code

#### Example

```php
$value = ComponentAllocationChangeBuilder::init(
    94,
    102,
    88,
    'component_handle8',
    'memo2',
    158
)->build();
```

## MeteredUsage

### Initialization Code

#### Example

```php
$value = MeteredUsageBuilder::init(
    'previous_unit_balance6',
    80,
    42,
    4,
    'component_handle8',
    'memo2'
)->build();
```

## PrepaidUsage

### Initialization Code

#### Example

```php
$value = PrepaidUsageBuilder::init(
    'previous_unit_balance0',
    'previous_overage_unit_balance4',
    252,
    224,
    214,
    106,
    176,
    'component_handle4',
    'memo8',
    [
        PrepaidUsageAllocationDetailBuilder::init()->build()
    ]
)->build();
```

## DunningStepReached

### Initialization Code

#### Example

```php
$value = DunningStepReachedBuilder::init(
    DunnerDataBuilder::init(
        'state8',
        194,
        98,
        DateTimeHelper::fromRfc3339DateTimeRequired('2016-03-13T12:52:32.123Z'),
        42,
        DateTimeHelper::fromRfc3339DateTimeRequired('2016-03-13T12:52:32.123Z')
    )->build(),
    DunningStepDataBuilder::init(
        198,
        'action4',
        false,
        false,
        false
    )->build(),
    DunningStepDataBuilder::init(
        30,
        'action4',
        false,
        false,
        false
    )->build()
)->build();
```

## InvoiceIssued

### Initialization Code

#### Example

```php
$value = InvoiceIssuedBuilder::init(
    'uid4',
    'number8',
    'role2',
    'issue_date0',
    'paid_date6',
    'due_amount6',
    'paid_amount4',
    'tax_amount2',
    'refund_amount0',
    'total_amount0',
    'status_amount4',
    'product_name0',
    'consolidation_level4',
    [
        InvoiceLineItemEventDataBuilder::init()->build()
    ]
)
    ->dueDate(DateTimeHelper::fromSimpleDate('2016-03-13'))
    ->build();
```

## PendingCancellationChange

### Initialization Code

#### Example

```php
$value = PendingCancellationChangeBuilder::init(
    'cancellation_state8',
    DateTimeHelper::fromRfc3339DateTimeRequired('2016-03-13T12:52:32.123Z')
)->build();
```

## PrepaidSubscriptionBalanceChanged

### Initialization Code

#### Example

```php
$value = PrepaidSubscriptionBalanceChangedBuilder::init(
    'reason8',
    250,
    44,
    242
)->build();
```

## ProformaInvoiceIssued

### Initialization Code

#### Example

```php
$value = ProformaInvoiceIssuedBuilder::init(
    'uid0',
    'number2',
    'role6',
    DateTimeHelper::fromSimpleDateRequired('2016-03-13'),
    DateTimeHelper::fromRfc3339DateTimeRequired('2016-03-13T12:52:32.123Z'),
    'due_amount2',
    'paid_amount8',
    'tax_amount6',
    'total_amount6',
    'product_name6',
    [
        InvoiceLineItemEventDataBuilder::init()->build()
    ]
)->build();
```

## SubscriptionGroupSignupEventData

### Initialization Code

#### Example

```php
$value = SubscriptionGroupSignupEventDataBuilder::init(
    SubscriptionGroupSignupFailureDataBuilder::init()->build()
)
    ->customer(
        CustomerBuilder::init()->build()
    )->build();
```

## CreditAccountBalanceChanged

### Initialization Code

#### Example

```php
$value = CreditAccountBalanceChangedBuilder::init(
    'reason8',
    10,
    116,
    'currency_code8',
    DateTimeHelper::fromRfc3339DateTimeRequired('2016-03-13T12:52:32.123Z')
)->build();
```

## PrepaymentAccountBalanceChanged

### Initialization Code

#### Example

```php
$value = PrepaymentAccountBalanceChangedBuilder::init(
    'reason4',
    182,
    206,
    'currency_code4'
)->build();
```

## PaymentCollectionMethodChanged

### Initialization Code

#### Example

```php
$value = PaymentCollectionMethodChangedBuilder::init(
    'previous_value4',
    'current_value2'
)->build();
```

## ItemPricePointChanged

### Initialization Code

#### Example

```php
$value = ItemPricePointChangedBuilder::init(
    66,
    'item_type6',
    'item_handle4',
    'item_name8',
    ItemPricePointDataBuilder::init()->build(),
    ItemPricePointDataBuilder::init()->build()
)->build();
```

## CustomFieldValueChange

### Initialization Code

#### Example

```php
$value = CustomFieldValueChangeBuilder::init(
    'event_type2',
    'metafield_name6',
    78,
    'resource_type2',
    74
)
    ->oldValue('old_value2')
    ->newValue('new_value8')
    ->build();
```

