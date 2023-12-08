
# Proforma Invoice Credit

## Structure

`ProformaInvoiceCredit`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `uid` | `?string` | Optional | **Constraints**: *Minimum Length*: `1` | getUid(): ?string | setUid(?string uid): void |
| `memo` | `?string` | Optional | **Constraints**: *Minimum Length*: `1` | getMemo(): ?string | setMemo(?string memo): void |
| `originalAmount` | `?string` | Optional | **Constraints**: *Minimum Length*: `1` | getOriginalAmount(): ?string | setOriginalAmount(?string originalAmount): void |
| `appliedAmount` | `?string` | Optional | **Constraints**: *Minimum Length*: `1` | getAppliedAmount(): ?string | setAppliedAmount(?string appliedAmount): void |

## Example (as JSON)

```json
{
  "uid": "uid8",
  "memo": "memo2",
  "original_amount": "original_amount2",
  "applied_amount": "applied_amount0"
}
```

