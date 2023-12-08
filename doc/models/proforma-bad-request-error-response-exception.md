
# Proforma Bad Request Error Response Exception

## Structure

`ProformaBadRequestErrorResponseException`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `errors` | [`?ProformaError`](../../doc/models/proforma-error.md) | Optional | - | getErrors(): ?ProformaError | setErrors(?ProformaError errors): void |

## Example (as JSON)

```json
{
  "errors": {
    "subscription": {
      "base": [
        "base3",
        "base4"
      ]
    }
  }
}
```

