
# List Service Credits Response

## Structure

`ListServiceCreditsResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `serviceCredits` | [`?(ServiceCredit1[])`](../../doc/models/service-credit-1.md) | Optional | - | getServiceCredits(): ?array | setServiceCredits(?array serviceCredits): void |

## Example (as JSON)

```json
{
  "service_credits": [
    {
      "id": 224,
      "amount_in_cents": 54,
      "ending_balance_in_cents": 94,
      "entry_type": "Credit",
      "memo": "memo2"
    },
    {
      "id": 224,
      "amount_in_cents": 54,
      "ending_balance_in_cents": 94,
      "entry_type": "Credit",
      "memo": "memo2"
    }
  ]
}
```

