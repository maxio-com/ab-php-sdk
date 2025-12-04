
# Create Usage

## Structure

`CreateUsage`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `quantity` | `?float` | Optional | integer by default or decimal number if fractional quantities are enabled for the component | getQuantity(): ?float | setQuantity(?float quantity): void |
| `pricePointId` | `?string` | Optional | - | getPricePointId(): ?string | setPricePointId(?string pricePointId): void |
| `memo` | `?string` | Optional | - | getMemo(): ?string | setMemo(?string memo): void |
| `billingSchedule` | [`?BillingSchedule`](../../doc/models/billing-schedule.md) | Optional | This attribute is particularly useful when you need to align billing events for different components on distinct schedules within a subscription. This only works for site with Multifrequency enabled. | getBillingSchedule(): ?BillingSchedule | setBillingSchedule(?BillingSchedule billingSchedule): void |
| `customPrice` | [`?ComponentCustomPrice`](../../doc/models/component-custom-price.md) | Optional | Create or update custom pricing unique to the subscription. Used in place of `price_point_id`. | getCustomPrice(): ?ComponentCustomPrice | setCustomPrice(?ComponentCustomPrice customPrice): void |

## Example (as JSON)

```json
{
  "quantity": 23.44,
  "price_point_id": "price_point_id0",
  "memo": "memo2",
  "billing_schedule": {
    "initial_billing_at": "2016-03-13"
  },
  "custom_price": {
    "tax_included": false,
    "pricing_scheme": "stairstep",
    "interval": 66,
    "interval_unit": "day",
    "prices": [
      {
        "starting_quantity": 242,
        "ending_quantity": 40,
        "unit_price": 23.26
      },
      {
        "starting_quantity": 242,
        "ending_quantity": 40,
        "unit_price": 23.26
      }
    ],
    "renew_prepaid_allocation": false
  }
}
```

