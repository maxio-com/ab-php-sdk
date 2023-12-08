
# Customer Change

## Structure

`CustomerChange`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `payer` | [`?CustomerPayerChange`](../../doc/models/customer-payer-change.md) | Optional | - | getPayer(): ?CustomerPayerChange | setPayer(?CustomerPayerChange payer): void |
| `shippingAddress` | [`?CustomerShippingAddressChange`](../../doc/models/customer-shipping-address-change.md) | Optional | - | getShippingAddress(): ?CustomerShippingAddressChange | setShippingAddress(?CustomerShippingAddressChange shippingAddress): void |
| `billingAddress` | [`?CustomerBillingAddressChange`](../../doc/models/customer-billing-address-change.md) | Optional | - | getBillingAddress(): ?CustomerBillingAddressChange | setBillingAddress(?CustomerBillingAddressChange billingAddress): void |
| `customFields` | [`?CustomerCustomFieldsChange`](../../doc/models/customer-custom-fields-change.md) | Optional | - | getCustomFields(): ?CustomerCustomFieldsChange | setCustomFields(?CustomerCustomFieldsChange customFields): void |

## Example (as JSON)

```json
{
  "payer": {
    "before": {
      "key1": "val1",
      "key2": "val2"
    },
    "after": {
      "key1": "val1",
      "key2": "val2"
    }
  },
  "shipping_address": {
    "before": {
      "key1": "val1",
      "key2": "val2"
    },
    "after": {
      "key1": "val1",
      "key2": "val2"
    }
  },
  "billing_address": {
    "before": {
      "key1": "val1",
      "key2": "val2"
    },
    "after": {
      "key1": "val1",
      "key2": "val2"
    }
  },
  "custom_fields": {
    "before": [
      {
        "owner_id": 26,
        "owner_type": "owner_type2",
        "name": "name0",
        "value": "value2",
        "metadatum_id": 26
      },
      {
        "owner_id": 26,
        "owner_type": "owner_type2",
        "name": "name0",
        "value": "value2",
        "metadatum_id": 26
      }
    ],
    "after": [
      {
        "owner_id": 130,
        "owner_type": "owner_type4",
        "name": "name2",
        "value": "value4",
        "metadatum_id": 130
      },
      {
        "owner_id": 130,
        "owner_type": "owner_type4",
        "name": "name2",
        "value": "value4",
        "metadatum_id": 130
      },
      {
        "owner_id": 130,
        "owner_type": "owner_type4",
        "name": "name2",
        "value": "value4",
        "metadatum_id": 130
      }
    ]
  }
}
```

