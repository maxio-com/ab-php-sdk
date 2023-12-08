
# Subscription Group Signup Item

## Structure

`SubscriptionGroupSignupItem`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `productHandle` | `?string` | Optional | The API Handle of the product for which you are creating a subscription. Required, unless a `product_id` is given instead. | getProductHandle(): ?string | setProductHandle(?string productHandle): void |
| `productId` | `?int` | Optional | The Product ID of the product for which you are creating a subscription. You can pass either `product_id` or `product_handle`. | getProductId(): ?int | setProductId(?int productId): void |
| `productPricePointId` | `?int` | Optional | The ID of the particular price point on the product. | getProductPricePointId(): ?int | setProductPricePointId(?int productPricePointId): void |
| `productPricePointHandle` | `?string` | Optional | The user-friendly API handle of a product's particular price point. | getProductPricePointHandle(): ?string | setProductPricePointHandle(?string productPricePointHandle): void |
| `offerId` | `?int` | Optional | Use in place of passing product and component information to set up the subscription with an existing offer. May be either the Chargify ID of the offer or its handle prefixed with `handle:` | getOfferId(): ?int | setOfferId(?int offerId): void |
| `reference` | `?string` | Optional | The reference value (provided by your app) for the subscription itelf. | getReference(): ?string | setReference(?string reference): void |
| `primary` | `?bool` | Optional | One of the subscriptions must be marked as primary in the group. | getPrimary(): ?bool | setPrimary(?bool primary): void |
| `currency` | `?string` | Optional | (Optional) If Multi-Currency is enabled and the currency is configured in Chargify, pass it at signup to create a subscription on a non-default currency. Note that you cannot update the currency of an existing subscription. | getCurrency(): ?string | setCurrency(?string currency): void |
| `couponCodes` | `?(string[])` | Optional | An array for all the coupons attached to the subscription. | getCouponCodes(): ?array | setCouponCodes(?array couponCodes): void |
| `components` | [`?(SubscriptionGroupSignupComponent[])`](../../doc/models/subscription-group-signup-component.md) | Optional | - | getComponents(): ?array | setComponents(?array components): void |
| `customPrice` | [`?SubscriptionCustomPrice`](../../doc/models/subscription-custom-price.md) | Optional | (Optional) Used in place of `product_price_point_id` to define a custom price point unique to the subscription | getCustomPrice(): ?SubscriptionCustomPrice | setCustomPrice(?SubscriptionCustomPrice customPrice): void |
| `calendarBilling` | [`?CalendarBilling`](../../doc/models/calendar-billing.md) | Optional | (Optional). Cannot be used when also specifying next_billing_at | getCalendarBilling(): ?CalendarBilling | setCalendarBilling(?CalendarBilling calendarBilling): void |
| `metafields` | `?array<string,string>` | Optional | (Optional) A set of key/value pairs representing custom fields and their values. Metafields will be created “on-the-fly” in your site for a given key, if they have not been created yet. | getMetafields(): ?array | setMetafields(?array metafields): void |

## Example (as JSON)

```json
{
  "metafields": {
    "custom_field_name_1": "custom_field_value_1",
    "custom_field_name_2": "custom_field_value_2"
  },
  "product_handle": "product_handle2",
  "product_id": 34,
  "product_price_point_id": 214,
  "product_price_point_handle": "product_price_point_handle4",
  "offer_id": 150
}
```

