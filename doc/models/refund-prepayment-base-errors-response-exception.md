
# Refund Prepayment Base Errors Response Exception

Errors returned on creating a refund prepayment when bad request

## Structure

`RefundPrepaymentBaseErrorsResponseException`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `errors` | [`?RefundPrepaymentBaseRefundError`](../../doc/models/refund-prepayment-base-refund-error.md) | Optional | - | getErrors(): ?RefundPrepaymentBaseRefundError | setErrors(?RefundPrepaymentBaseRefundError errors): void |

## Example (as JSON)

```json
{
  "errors": {
    "refund": {
      "base": [
        {
          "key1": "val1",
          "key2": "val2"
        }
      ]
    }
  }
}
```

