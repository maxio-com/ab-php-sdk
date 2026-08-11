
# List Invoice Events Response

## Structure

`ListInvoiceEventsResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `events` | array<[ApplyCreditNoteEvent](../../doc/models/apply-credit-note-event.md)\|[ApplyDebitNoteEvent](../../doc/models/apply-debit-note-event.md)\|[ApplyPaymentEvent](../../doc/models/apply-payment-event.md)\|[BackportInvoiceEvent](../../doc/models/backport-invoice-event.md)\|[ChangeChargebackStatusEvent](../../doc/models/change-chargeback-status-event.md)\|[ChangeInvoiceCollectionMethodEvent](../../doc/models/change-invoice-collection-method-event.md)\|[ChangeInvoiceStatusEvent](../../doc/models/change-invoice-status-event.md)\|[CreateCreditNoteEvent](../../doc/models/create-credit-note-event.md)\|[CreateDebitNoteEvent](../../doc/models/create-debit-note-event.md)\|[FailedPaymentEvent](../../doc/models/failed-payment-event.md)\|[IssueInvoiceEvent](../../doc/models/issue-invoice-event.md)\|[RefundInvoiceEvent](../../doc/models/refund-invoice-event.md)\|[RemovePaymentEvent](../../doc/models/remove-payment-event.md)\|[VoidInvoiceEvent](../../doc/models/void-invoice-event.md)\|[VoidRemainderEvent](../../doc/models/void-remainder-event.md)>\|null | Optional | - | getEvents(): ?array | setEvents(?array events): void |
| `page` | `?int` | Optional | - | getPage(): ?int | setPage(?int page): void |
| `perPage` | `?int` | Optional | - | getPerPage(): ?int | setPerPage(?int perPage): void |
| `totalPages` | `?int` | Optional | - | getTotalPages(): ?int | setTotalPages(?int totalPages): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\ListInvoiceEventsResponseBuilder;
use AdvancedBillingLib\Models\Builders\ApplyCreditNoteEventBuilder;
use AdvancedBillingLib\Utils\DateTimeHelper;
use AdvancedBillingLib\Models\Builders\InvoiceBuilder;
use AdvancedBillingLib\Models\InvoiceEventType;
use AdvancedBillingLib\Models\Builders\ApplyCreditNoteEventDataBuilder;
use AdvancedBillingLib\Models\Builders\AppliedCreditNoteDataBuilder;

$listInvoiceEventsResponse = ListInvoiceEventsResponseBuilder::init()
    ->events(
        [
            ApplyCreditNoteEventBuilder::init(
                214,
                DateTimeHelper::fromRfc3339DateTimeRequired('2016-03-13T12:52:32.123Z'),
                InvoiceBuilder::init()
                    ->id(166)
                    ->uid('uid6')
                    ->siteId(92)
                    ->customerId(204)
                    ->subscriptionId(20)
                    ->build(),
                InvoiceEventType::APPLY_CREDIT_NOTE,
                ApplyCreditNoteEventDataBuilder::init(
                    'uid6',
                    'credit_note_number0',
                    'credit_note_uid0',
                    'original_amount0',
                    'applied_amount2'
                )
                    ->transactionTime(DateTimeHelper::fromRfc3339DateTime('2016-03-13T12:52:32.123Z'))
                    ->memo('memo0')
                    ->role('role0')
                    ->consolidatedInvoice(false)
                    ->appliedCreditNotes(
                        [
                            AppliedCreditNoteDataBuilder::init()
                                ->uid('uid4')
                                ->number('number8')
                                ->build(),
                            AppliedCreditNoteDataBuilder::init()
                                ->uid('uid4')
                                ->number('number8')
                                ->build(),
                            AppliedCreditNoteDataBuilder::init()
                                ->uid('uid4')
                                ->number('number8')
                                ->build()
                        ]
                    )
                    ->build()
            )->build(),
            ApplyCreditNoteEventBuilder::init(
                214,
                DateTimeHelper::fromRfc3339DateTimeRequired('2016-03-13T12:52:32.123Z'),
                InvoiceBuilder::init()
                    ->id(166)
                    ->uid('uid6')
                    ->siteId(92)
                    ->customerId(204)
                    ->subscriptionId(20)
                    ->build(),
                InvoiceEventType::APPLY_CREDIT_NOTE,
                ApplyCreditNoteEventDataBuilder::init(
                    'uid6',
                    'credit_note_number0',
                    'credit_note_uid0',
                    'original_amount0',
                    'applied_amount2'
                )
                    ->transactionTime(DateTimeHelper::fromRfc3339DateTime('2016-03-13T12:52:32.123Z'))
                    ->memo('memo0')
                    ->role('role0')
                    ->consolidatedInvoice(false)
                    ->appliedCreditNotes(
                        [
                            AppliedCreditNoteDataBuilder::init()
                                ->uid('uid4')
                                ->number('number8')
                                ->build(),
                            AppliedCreditNoteDataBuilder::init()
                                ->uid('uid4')
                                ->number('number8')
                                ->build(),
                            AppliedCreditNoteDataBuilder::init()
                                ->uid('uid4')
                                ->number('number8')
                                ->build()
                        ]
                    )
                    ->build()
            )->build(),
            ApplyCreditNoteEventBuilder::init(
                214,
                DateTimeHelper::fromRfc3339DateTimeRequired('2016-03-13T12:52:32.123Z'),
                InvoiceBuilder::init()
                    ->id(166)
                    ->uid('uid6')
                    ->siteId(92)
                    ->customerId(204)
                    ->subscriptionId(20)
                    ->build(),
                InvoiceEventType::APPLY_CREDIT_NOTE,
                ApplyCreditNoteEventDataBuilder::init(
                    'uid6',
                    'credit_note_number0',
                    'credit_note_uid0',
                    'original_amount0',
                    'applied_amount2'
                )
                    ->transactionTime(DateTimeHelper::fromRfc3339DateTime('2016-03-13T12:52:32.123Z'))
                    ->memo('memo0')
                    ->role('role0')
                    ->consolidatedInvoice(false)
                    ->appliedCreditNotes(
                        [
                            AppliedCreditNoteDataBuilder::init()
                                ->uid('uid4')
                                ->number('number8')
                                ->build(),
                            AppliedCreditNoteDataBuilder::init()
                                ->uid('uid4')
                                ->number('number8')
                                ->build(),
                            AppliedCreditNoteDataBuilder::init()
                                ->uid('uid4')
                                ->number('number8')
                                ->build()
                        ]
                    )
                    ->build()
            )->build()
        ]
    )
    ->page(28)
    ->perPage(196)
    ->totalPages(94)
    ->build();
```

