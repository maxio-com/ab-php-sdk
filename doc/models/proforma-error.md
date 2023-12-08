
# Proforma Error

## Structure

`ProformaError`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `subscription` | [`?BaseStringError`](../../doc/models/base-string-error.md) | Optional | The error is base if it is not directly associated with a single attribute. | getSubscription(): ?BaseStringError | setSubscription(?BaseStringError subscription): void |

## Example (as JSON)

```json
{
  "subscription": {
    "base": [
      "base3",
      "base4"
    ]
  }
}
```

