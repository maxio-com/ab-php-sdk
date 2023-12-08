
# Refund Consolidated Invoice

Refund consolidated invoice

## Structure

`RefundConsolidatedInvoice`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `memo` | `string` | Required | A description for the refund | getMemo(): string | setMemo(string memo): void |
| `paymentId` | `int` | Required | The ID of the payment to be refunded | getPaymentId(): int | setPaymentId(int paymentId): void |
| `segmentUids` | string[]\|string | Required | This is a container for one-of cases. | getSegmentUids(): | setSegmentUids( segmentUids): void |
| `external` | `?bool` | Optional | Flag that marks refund as external (no money is returned to the customer). Defaults to `false`. | getExternal(): ?bool | setExternal(?bool external): void |
| `applyCredit` | `?bool` | Optional | If set to true, creates credit and applies it to an invoice. Defaults to `false`. | getApplyCredit(): ?bool | setApplyCredit(?bool applyCredit): void |
| `amount` | `?string` | Optional | The amount of payment to be refunded in decimal format. Example: "10.50". This will default to the full amount of the payment if not provided. | getAmount(): ?string | setAmount(?string amount): void |

## Example (as JSON)

```json
{
  "memo": "memo0",
  "payment_id": 46,
  "segment_uids": [
    "String0",
    "String1"
  ],
  "external": false,
  "apply_credit": false,
  "amount": "amount8"
}
```

