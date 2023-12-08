
# Service Credit Response

## Structure

`ServiceCreditResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `serviceCredit` | [`ServiceCredit`](../../doc/models/service-credit.md) | Required | - | getServiceCredit(): ServiceCredit | setServiceCredit(ServiceCredit serviceCredit): void |

## Example (as JSON)

```json
{
  "service_credit": {
    "id": 38,
    "amount_in_cents": 124,
    "ending_balance_in_cents": 164,
    "entry_type": "Credit",
    "memo": "memo0"
  }
}
```

