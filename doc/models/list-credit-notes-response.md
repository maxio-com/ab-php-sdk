
# List Credit Notes Response

## Structure

`ListCreditNotesResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `creditNotes` | [`CreditNote[]`](../../doc/models/credit-note.md) | Required | - | getCreditNotes(): array | setCreditNotes(array creditNotes): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\ListCreditNotesResponseBuilder;
use AdvancedBillingLib\Models\Builders\CreditNoteBuilder;

$listCreditNotesResponse = ListCreditNotesResponseBuilder::init(
    [
        CreditNoteBuilder::init()
            ->uid('uid2')
            ->siteId(112)
            ->customerId(224)
            ->subscriptionId(40)
            ->number('number0')
            ->build()
    ]
)->build();
```

