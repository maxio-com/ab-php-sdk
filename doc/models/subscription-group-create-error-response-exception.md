
# Subscription Group Create Error Response Exception

## Structure

`SubscriptionGroupCreateErrorResponseException`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `errors` | [SubscriptionGroupMembersArrayError](../../doc/models/subscription-group-members-array-error.md)\|[SubscriptionGroupSingleError](../../doc/models/subscription-group-single-error.md)\|string | Required | This is a container for one-of cases. | getErrors(): | setErrors( errors): void |

## Example (as JSON)

```json
{
  "errors": {
    "members": [
      "members6"
    ]
  }
}
```

