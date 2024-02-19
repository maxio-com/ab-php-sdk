
# Update Subscription

## Structure

`UpdateSubscription`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `creditCardAttributes` | [`?CreditCardAttributes`](../../doc/models/credit-card-attributes.md) | Optional | - | getCreditCardAttributes(): ?CreditCardAttributes | setCreditCardAttributes(?CreditCardAttributes creditCardAttributes): void |
| `productHandle` | `?string` | Optional | Set to the handle of a different product to change the subscription's product | getProductHandle(): ?string | setProductHandle(?string productHandle): void |
| `productId` | `?int` | Optional | Set to the id of a different product to change the subscription's product | getProductId(): ?int | setProductId(?int productId): void |
| `productChangeDelayed` | `?bool` | Optional | - | getProductChangeDelayed(): ?bool | setProductChangeDelayed(?bool productChangeDelayed): void |
| `nextProductId` | `?string` | Optional | Set to an empty string to cancel a delayed product change. | getNextProductId(): ?string | setNextProductId(?string nextProductId): void |
| `nextProductPricePointId` | `?string` | Optional | - | getNextProductPricePointId(): ?string | setNextProductPricePointId(?string nextProductPricePointId): void |
| `snapDay` | string([SnapDay](../../doc/models/snap-day.md))\|int\|null | Optional | This is a container for one-of cases. | getSnapDay(): | setSnapDay( snapDay): void |
| `nextBillingAt` | `?DateTime` | Optional | - | getNextBillingAt(): ?\DateTime | setNextBillingAt(?\DateTime nextBillingAt): void |
| `paymentCollectionMethod` | `?string` | Optional | - | getPaymentCollectionMethod(): ?string | setPaymentCollectionMethod(?string paymentCollectionMethod): void |
| `receivesInvoiceEmails` | `?bool` | Optional | - | getReceivesInvoiceEmails(): ?bool | setReceivesInvoiceEmails(?bool receivesInvoiceEmails): void |
| `netTerms` | string\|int\|null | Optional | This is a container for one-of cases. | getNetTerms(): | setNetTerms( netTerms): void |
| `storedCredentialTransactionId` | `?int` | Optional | - | getStoredCredentialTransactionId(): ?int | setStoredCredentialTransactionId(?int storedCredentialTransactionId): void |
| `reference` | `?string` | Optional | - | getReference(): ?string | setReference(?string reference): void |
| `customPrice` | [`?SubscriptionCustomPrice`](../../doc/models/subscription-custom-price.md) | Optional | (Optional) Used in place of `product_price_point_id` to define a custom price point unique to the subscription | getCustomPrice(): ?SubscriptionCustomPrice | setCustomPrice(?SubscriptionCustomPrice customPrice): void |
| `components` | [`?(UpdateSubscriptionComponent[])`](../../doc/models/update-subscription-component.md) | Optional | (Optional) An array of component ids and custom prices to be added to the subscription. | getComponents(): ?array | setComponents(?array components): void |
| `dunningCommunicationDelayEnabled` | `?bool` | Optional | Enable Communication Delay feature, making sure no communication (email or SMS) is sent to the Customer between 9PM and 8AM in time zone set by the `dunning_communication_delay_time_zone` attribute. | getDunningCommunicationDelayEnabled(): ?bool | setDunningCommunicationDelayEnabled(?bool dunningCommunicationDelayEnabled): void |
| `dunningCommunicationDelayTimeZone` | `?string` | Optional | Time zone for the Dunning Communication Delay feature. | getDunningCommunicationDelayTimeZone(): ?string | setDunningCommunicationDelayTimeZone(?string dunningCommunicationDelayTimeZone): void |

## Example (as JSON)

```json
{
  "dunning_communication_delay_time_zone": "\"Eastern Time (US & Canada)\"",
  "credit_card_attributes": {
    "full_number": "full_number2",
    "expiration_month": "expiration_month6",
    "expiration_year": "expiration_year2"
  },
  "product_handle": "product_handle2",
  "product_id": 114,
  "product_change_delayed": false,
  "next_product_id": "next_product_id8"
}
```

