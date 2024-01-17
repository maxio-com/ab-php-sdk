
# Product Price Point

## Structure

`ProductPricePoint`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?int` | Optional | - | getId(): ?int | setId(?int id): void |
| `name` | `?string` | Optional | The product price point name | getName(): ?string | setName(?string name): void |
| `handle` | `?string` | Optional | The product price point API handle | getHandle(): ?string | setHandle(?string handle): void |
| `priceInCents` | `?int` | Optional | The product price point price, in integer cents | getPriceInCents(): ?int | setPriceInCents(?int priceInCents): void |
| `interval` | `?int` | Optional | The numerical interval. i.e. an interval of ‘30’ coupled with an interval_unit of day would mean this product price point would renew every 30 days | getInterval(): ?int | setInterval(?int interval): void |
| `intervalUnit` | [`?string(IntervalUnit)`](../../doc/models/interval-unit.md) | Optional | A string representing the interval unit for this product price point, either month or day | getIntervalUnit(): ?string | setIntervalUnit(?string intervalUnit): void |
| `trialPriceInCents` | `?int` | Optional | The product price point trial price, in integer cents | getTrialPriceInCents(): ?int | setTrialPriceInCents(?int trialPriceInCents): void |
| `trialInterval` | `?int` | Optional | The numerical trial interval. i.e. an interval of ‘30’ coupled with an trial_interval_unit of day would mean this product price point would renew every 30 days | getTrialInterval(): ?int | setTrialInterval(?int trialInterval): void |
| `trialIntervalUnit` | [`?string(IntervalUnit)`](../../doc/models/interval-unit.md) | Optional | A string representing the trial interval unit for this product price point, either month or day | getTrialIntervalUnit(): ?string | setTrialIntervalUnit(?string trialIntervalUnit): void |
| `trialType` | `?string` | Optional | - | getTrialType(): ?string | setTrialType(?string trialType): void |
| `introductoryOffer` | `?bool` | Optional | reserved for future use | getIntroductoryOffer(): ?bool | setIntroductoryOffer(?bool introductoryOffer): void |
| `initialChargeInCents` | `?int` | Optional | The product price point initial charge, in integer cents | getInitialChargeInCents(): ?int | setInitialChargeInCents(?int initialChargeInCents): void |
| `initialChargeAfterTrial` | `?bool` | Optional | - | getInitialChargeAfterTrial(): ?bool | setInitialChargeAfterTrial(?bool initialChargeAfterTrial): void |
| `expirationInterval` | `?int` | Optional | The numerical expiration interval. i.e. an expiration_interval of ‘30’ coupled with an expiration_interval_unit of day would mean this product price point would expire every 30 days | getExpirationInterval(): ?int | setExpirationInterval(?int expirationInterval): void |
| `expirationIntervalUnit` | [`?string(IntervalUnit)`](../../doc/models/interval-unit.md) | Optional | A string representing the expiration interval unit for this product price point, either month or day | getExpirationIntervalUnit(): ?string | setExpirationIntervalUnit(?string expirationIntervalUnit): void |
| `productId` | `?int` | Optional | The product id this price point belongs to | getProductId(): ?int | setProductId(?int productId): void |
| `archivedAt` | `?DateTime` | Optional | Timestamp indicating when this price point was archived | getArchivedAt(): ?\DateTime | setArchivedAt(?\DateTime archivedAt): void |
| `createdAt` | `?DateTime` | Optional | Timestamp indicating when this price point was created | getCreatedAt(): ?\DateTime | setCreatedAt(?\DateTime createdAt): void |
| `updatedAt` | `?DateTime` | Optional | Timestamp indicating when this price point was last updated | getUpdatedAt(): ?\DateTime | setUpdatedAt(?\DateTime updatedAt): void |
| `useSiteExchangeRate` | `?bool` | Optional | Whether or not to use the site's exchange rate or define your own pricing when your site has multiple currencies defined. | getUseSiteExchangeRate(): ?bool | setUseSiteExchangeRate(?bool useSiteExchangeRate): void |
| `type` | [`?string(PricePointType)`](../../doc/models/price-point-type.md) | Optional | The type of price point | getType(): ?string | setType(?string type): void |
| `taxIncluded` | `?bool` | Optional | Whether or not the price point includes tax | getTaxIncluded(): ?bool | setTaxIncluded(?bool taxIncluded): void |
| `subscriptionId` | `?int` | Optional | The subscription id this price point belongs to | getSubscriptionId(): ?int | setSubscriptionId(?int subscriptionId): void |
| `currencyPrices` | [`?(CurrencyPrice[])`](../../doc/models/currency-price.md) | Optional | An array of currency pricing data is available when multiple currencies are defined for the site. It varies based on the use_site_exchange_rate setting for the price point. This parameter is present only in the response of read endpoints, after including the appropriate query parameter. | getCurrencyPrices(): ?array | setCurrencyPrices(?array currencyPrices): void |

## Example (as JSON)

```json
{
  "id": 196,
  "name": "name6",
  "handle": "handle2",
  "price_in_cents": 248,
  "interval": 8
}
```

