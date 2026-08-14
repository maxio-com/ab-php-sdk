
# Debit Note Status

Current status of the debit note.

## Enumeration

`DebitNoteStatus`

## Fields

| Name |
|  --- |
| `OPEN` |
| `APPLIED` |
| `BANISHED` |
| `PAID` |

## Example

```php
use AdvancedBillingLib\Models\DebitNoteStatus;

$debitNoteStatus = DebitNoteStatus::OPEN;
```

