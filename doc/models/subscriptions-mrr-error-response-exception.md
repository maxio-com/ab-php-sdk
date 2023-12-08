
# Subscriptions Mrr Error Response Exception

## Structure

`SubscriptionsMrrErrorResponseException`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `errors` | [`AttributeError`](../../doc/models/attribute-error.md) | Required | - | getErrors(): AttributeError | setErrors(AttributeError errors): void |

## Example (as JSON)

```json
{
  "errors": {
    "attribute": [
      "supplied value is invalid, expected ISO 8601 format"
    ]
  }
}
```

