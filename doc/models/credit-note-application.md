
# Credit Note Application

## Structure

`CreditNoteApplication`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `uid` | `?string` | Optional | - | getUid(): ?string | setUid(?string uid): void |
| `transactionTime` | `?DateTime` | Optional | - | getTransactionTime(): ?\DateTime | setTransactionTime(?\DateTime transactionTime): void |
| `invoiceUid` | `?string` | Optional | - | getInvoiceUid(): ?string | setInvoiceUid(?string invoiceUid): void |
| `memo` | `?string` | Optional | - | getMemo(): ?string | setMemo(?string memo): void |
| `appliedAmount` | `?string` | Optional | - | getAppliedAmount(): ?string | setAppliedAmount(?string appliedAmount): void |

## Example (as JSON)

```json
{
  "uid": "uid0",
  "transaction_time": "2016-03-13T12:52:32.123Z",
  "invoice_uid": "invoice_uid0",
  "memo": "memo4",
  "applied_amount": "applied_amount8"
}
```

