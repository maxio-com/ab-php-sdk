
# Invoice-Event

## Data Type

`ApplyCreditNoteEvent|ApplyDebitNoteEvent|ApplyPaymentEvent|BackportInvoiceEvent|ChangeChargebackStatusEvent|ChangeInvoiceCollectionMethodEvent|ChangeInvoiceStatusEvent|CreateCreditNoteEvent|CreateDebitNoteEvent|FailedPaymentEvent|IssueInvoiceEvent|RefundInvoiceEvent|RemovePaymentEvent|VoidInvoiceEvent|VoidRemainderEvent`

## Cases

| Type |
|  --- |
| [`ApplyCreditNoteEvent`](../../../doc/models/apply-credit-note-event.md) |
| [`ApplyDebitNoteEvent`](../../../doc/models/apply-debit-note-event.md) |
| [`ApplyPaymentEvent`](../../../doc/models/apply-payment-event.md) |
| [`BackportInvoiceEvent`](../../../doc/models/backport-invoice-event.md) |
| [`ChangeChargebackStatusEvent`](../../../doc/models/change-chargeback-status-event.md) |
| [`ChangeInvoiceCollectionMethodEvent`](../../../doc/models/change-invoice-collection-method-event.md) |
| [`ChangeInvoiceStatusEvent`](../../../doc/models/change-invoice-status-event.md) |
| [`CreateCreditNoteEvent`](../../../doc/models/create-credit-note-event.md) |
| [`CreateDebitNoteEvent`](../../../doc/models/create-debit-note-event.md) |
| [`FailedPaymentEvent`](../../../doc/models/failed-payment-event.md) |
| [`IssueInvoiceEvent`](../../../doc/models/issue-invoice-event.md) |
| [`RefundInvoiceEvent`](../../../doc/models/refund-invoice-event.md) |
| [`RemovePaymentEvent`](../../../doc/models/remove-payment-event.md) |
| [`VoidInvoiceEvent`](../../../doc/models/void-invoice-event.md) |
| [`VoidRemainderEvent`](../../../doc/models/void-remainder-event.md) |

## ApplyCreditNoteEvent

### Initialization Code

#### Example

```php
$value = ApplyCreditNoteEventBuilder::init(
    214,
    DateTimeHelper::fromRfc3339DateTimeRequired('2016-03-13T12:52:32.123Z'),
    InvoiceBuilder::init()
        ->issueDate(DateTimeHelper::fromSimpleDate('2024-01-01'))
        ->dueDate(DateTimeHelper::fromSimpleDate('2024-01-01'))
        ->paidDate(DateTimeHelper::fromSimpleDate('2024-01-01'))
        ->publicUrlExpiresOn(DateTimeHelper::fromSimpleDate('2024-01-21'))
        ->build(),
    InvoiceEventType::APPLY_CREDIT_NOTE,
    ApplyCreditNoteEventDataBuilder::init(
        'uid6',
        'credit_note_number0',
        'credit_note_uid0',
        'original_amount0',
        'applied_amount2'
    )->build()
)->build();
```

## ApplyDebitNoteEvent

### Initialization Code

#### Example

```php
$value = ApplyDebitNoteEventBuilder::init(
    164,
    DateTimeHelper::fromRfc3339DateTimeRequired('2016-03-13T12:52:32.123Z'),
    InvoiceBuilder::init()
        ->issueDate(DateTimeHelper::fromSimpleDate('2024-01-01'))
        ->dueDate(DateTimeHelper::fromSimpleDate('2024-01-01'))
        ->paidDate(DateTimeHelper::fromSimpleDate('2024-01-01'))
        ->publicUrlExpiresOn(DateTimeHelper::fromSimpleDate('2024-01-21'))
        ->build(),
    InvoiceEventType::APPLY_DEBIT_NOTE,
    ApplyDebitNoteEventDataBuilder::init(
        'debit_note_number6',
        'debit_note_uid2',
        'original_amount0',
        'applied_amount2'
    )->build()
)->build();
```

## ApplyPaymentEvent

### Initialization Code

#### Example

```php
$value = ApplyPaymentEventBuilder::init(
    234,
    DateTimeHelper::fromRfc3339DateTimeRequired('2016-03-13T12:52:32.123Z'),
    InvoiceBuilder::init()
        ->issueDate(DateTimeHelper::fromSimpleDate('2024-01-01'))
        ->dueDate(DateTimeHelper::fromSimpleDate('2024-01-01'))
        ->paidDate(DateTimeHelper::fromSimpleDate('2024-01-01'))
        ->publicUrlExpiresOn(DateTimeHelper::fromSimpleDate('2024-01-21'))
        ->build(),
    InvoiceEventType::APPLY_PAYMENT,
    ApplyPaymentEventDataBuilder::init(
        InvoiceConsolidationLevel::CHILD,
        'memo0',
        'original_amount0',
        'applied_amount2',
        DateTimeHelper::fromRfc3339DateTimeRequired('2016-03-13T12:52:32.123Z'),
        PaymentMethodApplePayBuilder::init(
            InvoiceEventPaymentMethod::APPLE_PAY
        )->build()
    )->build()
)->build();
```

## BackportInvoiceEvent

### Initialization Code

#### Example

```php
$value = BackportInvoiceEventBuilder::init(
    78,
    DateTimeHelper::fromRfc3339DateTimeRequired('2016-03-13T12:52:32.123Z'),
    InvoiceBuilder::init()
        ->issueDate(DateTimeHelper::fromSimpleDate('2024-01-01'))
        ->dueDate(DateTimeHelper::fromSimpleDate('2024-01-01'))
        ->paidDate(DateTimeHelper::fromSimpleDate('2024-01-01'))
        ->publicUrlExpiresOn(DateTimeHelper::fromSimpleDate('2024-01-21'))
        ->build(),
    InvoiceEventType::BACKPORT_INVOICE,
    InvoiceBuilder::init()
        ->issueDate(DateTimeHelper::fromSimpleDate('2024-01-01'))
        ->dueDate(DateTimeHelper::fromSimpleDate('2024-01-01'))
        ->paidDate(DateTimeHelper::fromSimpleDate('2024-01-01'))
        ->publicUrlExpiresOn(DateTimeHelper::fromSimpleDate('2024-01-21'))
        ->build()
)->build();
```

## ChangeChargebackStatusEvent

### Initialization Code

#### Example

```php
$value = ChangeChargebackStatusEventBuilder::init(
    214,
    DateTimeHelper::fromRfc3339DateTimeRequired('2016-03-13T12:52:32.123Z'),
    InvoiceBuilder::init()
        ->issueDate(DateTimeHelper::fromSimpleDate('2024-01-01'))
        ->dueDate(DateTimeHelper::fromSimpleDate('2024-01-01'))
        ->paidDate(DateTimeHelper::fromSimpleDate('2024-01-01'))
        ->publicUrlExpiresOn(DateTimeHelper::fromSimpleDate('2024-01-21'))
        ->build(),
    InvoiceEventType::CHANGE_CHARGEBACK_STATUS,
    ChangeChargebackStatusEventDataBuilder::init(
        ChargebackStatus::WON
    )->build()
)->build();
```

## ChangeInvoiceCollectionMethodEvent

### Initialization Code

#### Example

```php
$value = ChangeInvoiceCollectionMethodEventBuilder::init(
    246,
    DateTimeHelper::fromRfc3339DateTimeRequired('2016-03-13T12:52:32.123Z'),
    InvoiceBuilder::init()
        ->issueDate(DateTimeHelper::fromSimpleDate('2024-01-01'))
        ->dueDate(DateTimeHelper::fromSimpleDate('2024-01-01'))
        ->paidDate(DateTimeHelper::fromSimpleDate('2024-01-01'))
        ->publicUrlExpiresOn(DateTimeHelper::fromSimpleDate('2024-01-21'))
        ->build(),
    InvoiceEventType::CHANGE_INVOICE_COLLECTION_METHOD,
    ChangeInvoiceCollectionMethodEventDataBuilder::init(
        'from_collection_method4',
        'to_collection_method8'
    )->build()
)->build();
```

## ChangeInvoiceStatusEvent

### Initialization Code

#### Example

```php
$value = ChangeInvoiceStatusEventBuilder::init(
    92,
    DateTimeHelper::fromRfc3339DateTimeRequired('2016-03-13T12:52:32.123Z'),
    InvoiceBuilder::init()
        ->issueDate(DateTimeHelper::fromSimpleDate('2024-01-01'))
        ->dueDate(DateTimeHelper::fromSimpleDate('2024-01-01'))
        ->paidDate(DateTimeHelper::fromSimpleDate('2024-01-01'))
        ->publicUrlExpiresOn(DateTimeHelper::fromSimpleDate('2024-01-21'))
        ->build(),
    InvoiceEventType::CHANGE_INVOICE_STATUS,
    ChangeInvoiceStatusEventDataBuilder::init(
        InvoiceStatus::OPEN,
        InvoiceStatus::PENDING
    )->build()
)->build();
```

## CreateCreditNoteEvent

### Initialization Code

#### Example

```php
$value = CreateCreditNoteEventBuilder::init(
    28,
    DateTimeHelper::fromRfc3339DateTimeRequired('2016-03-13T12:52:32.123Z'),
    InvoiceBuilder::init()
        ->issueDate(DateTimeHelper::fromSimpleDate('2024-01-01'))
        ->dueDate(DateTimeHelper::fromSimpleDate('2024-01-01'))
        ->paidDate(DateTimeHelper::fromSimpleDate('2024-01-01'))
        ->publicUrlExpiresOn(DateTimeHelper::fromSimpleDate('2024-01-21'))
        ->build(),
    InvoiceEventType::CREATE_CREDIT_NOTE,
    CreditNoteBuilder::init()->build()
)->build();
```

## CreateDebitNoteEvent

### Initialization Code

#### Example

```php
$value = CreateDebitNoteEventBuilder::init(
    98,
    DateTimeHelper::fromRfc3339DateTimeRequired('2016-03-13T12:52:32.123Z'),
    InvoiceBuilder::init()
        ->issueDate(DateTimeHelper::fromSimpleDate('2024-01-01'))
        ->dueDate(DateTimeHelper::fromSimpleDate('2024-01-01'))
        ->paidDate(DateTimeHelper::fromSimpleDate('2024-01-01'))
        ->publicUrlExpiresOn(DateTimeHelper::fromSimpleDate('2024-01-21'))
        ->build(),
    InvoiceEventType::CREATE_DEBIT_NOTE,
    DebitNoteBuilder::init()->build()
)->build();
```

## FailedPaymentEvent

### Initialization Code

#### Example

```php
$value = FailedPaymentEventBuilder::init(
    120,
    DateTimeHelper::fromRfc3339DateTimeRequired('2016-03-13T12:52:32.123Z'),
    InvoiceBuilder::init()
        ->issueDate(DateTimeHelper::fromSimpleDate('2024-01-01'))
        ->dueDate(DateTimeHelper::fromSimpleDate('2024-01-01'))
        ->paidDate(DateTimeHelper::fromSimpleDate('2024-01-01'))
        ->publicUrlExpiresOn(DateTimeHelper::fromSimpleDate('2024-01-21'))
        ->build(),
    InvoiceEventType::FAILED_PAYMENT,
    FailedPaymentEventDataBuilder::init(
        220,
        194,
        InvoicePaymentMethodType::CASH,
        78
    )->build()
)->build();
```

## IssueInvoiceEvent

### Initialization Code

#### Example

```php
$value = IssueInvoiceEventBuilder::init(
    130,
    DateTimeHelper::fromRfc3339DateTimeRequired('2016-03-13T12:52:32.123Z'),
    InvoiceBuilder::init()
        ->issueDate(DateTimeHelper::fromSimpleDate('2024-01-01'))
        ->dueDate(DateTimeHelper::fromSimpleDate('2024-01-01'))
        ->paidDate(DateTimeHelper::fromSimpleDate('2024-01-01'))
        ->publicUrlExpiresOn(DateTimeHelper::fromSimpleDate('2024-01-21'))
        ->build(),
    InvoiceEventType::ISSUE_INVOICE,
    IssueInvoiceEventDataBuilder::init(
        InvoiceConsolidationLevel::CHILD,
        InvoiceStatus::OPEN,
        InvoiceStatus::PENDING,
        'due_amount8',
        'total_amount2'
    )->build()
)->build();
```

## RefundInvoiceEvent

### Initialization Code

#### Example

```php
$value = RefundInvoiceEventBuilder::init(
    54,
    DateTimeHelper::fromRfc3339DateTimeRequired('2016-03-13T12:52:32.123Z'),
    InvoiceBuilder::init()
        ->issueDate(DateTimeHelper::fromSimpleDate('2024-01-01'))
        ->dueDate(DateTimeHelper::fromSimpleDate('2024-01-01'))
        ->paidDate(DateTimeHelper::fromSimpleDate('2024-01-01'))
        ->publicUrlExpiresOn(DateTimeHelper::fromSimpleDate('2024-01-21'))
        ->build(),
    InvoiceEventType::REFUND_INVOICE,
    RefundInvoiceEventDataBuilder::init(
        false,
        CreditNoteBuilder::init()->build(),
        204,
        'refund_amount8',
        248,
        DateTimeHelper::fromRfc3339DateTimeRequired('2016-03-13T12:52:32.123Z')
    )->build()
)->build();
```

## RemovePaymentEvent

### Initialization Code

#### Example

```php
$value = RemovePaymentEventBuilder::init(
    236,
    DateTimeHelper::fromRfc3339DateTimeRequired('2016-03-13T12:52:32.123Z'),
    InvoiceBuilder::init()
        ->issueDate(DateTimeHelper::fromSimpleDate('2024-01-01'))
        ->dueDate(DateTimeHelper::fromSimpleDate('2024-01-01'))
        ->paidDate(DateTimeHelper::fromSimpleDate('2024-01-01'))
        ->publicUrlExpiresOn(DateTimeHelper::fromSimpleDate('2024-01-21'))
        ->build(),
    InvoiceEventType::REMOVE_PAYMENT,
    RemovePaymentEventDataBuilder::init(
        78,
        'memo0',
        'applied_amount2',
        DateTimeHelper::fromRfc3339DateTimeRequired('2016-03-13T12:52:32.123Z'),
        PaymentMethodApplePayBuilder::init(
            InvoiceEventPaymentMethod::APPLE_PAY
        )->build(),
        false
    )->build()
)->build();
```

## VoidInvoiceEvent

### Initialization Code

#### Example

```php
$value = VoidInvoiceEventBuilder::init(
    16,
    DateTimeHelper::fromRfc3339DateTimeRequired('2016-03-13T12:52:32.123Z'),
    InvoiceBuilder::init()
        ->issueDate(DateTimeHelper::fromSimpleDate('2024-01-01'))
        ->dueDate(DateTimeHelper::fromSimpleDate('2024-01-01'))
        ->paidDate(DateTimeHelper::fromSimpleDate('2024-01-01'))
        ->publicUrlExpiresOn(DateTimeHelper::fromSimpleDate('2024-01-21'))
        ->build(),
    InvoiceEventType::VOID_INVOICE,
    VoidInvoiceEventDataBuilder::init(
        false,
        'reason2'
    )
        ->creditNoteAttributes(
            CreditNoteBuilder::init()->build()
        )
        ->memo('memo0')
        ->appliedAmount('applied_amount2')
        ->transactionTime(DateTimeHelper::fromRfc3339DateTime('2016-03-13T12:52:32.123Z'))
        ->build()
)->build();
```

## VoidRemainderEvent

### Initialization Code

#### Example

```php
$value = VoidRemainderEventBuilder::init(
    128,
    DateTimeHelper::fromRfc3339DateTimeRequired('2016-03-13T12:52:32.123Z'),
    InvoiceBuilder::init()
        ->issueDate(DateTimeHelper::fromSimpleDate('2024-01-01'))
        ->dueDate(DateTimeHelper::fromSimpleDate('2024-01-01'))
        ->paidDate(DateTimeHelper::fromSimpleDate('2024-01-01'))
        ->publicUrlExpiresOn(DateTimeHelper::fromSimpleDate('2024-01-21'))
        ->build(),
    InvoiceEventType::VOID_REMAINDER,
    VoidRemainderEventDataBuilder::init(
        CreditNoteBuilder::init()->build(),
        'memo0',
        'applied_amount2',
        DateTimeHelper::fromRfc3339DateTimeRequired('2016-03-13T12:52:32.123Z')
    )->build()
)->build();
```

